<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    
    protected static ?string $navigationLabel = 'Berita';
    
    protected static ?string $pluralModelLabel = 'Berita';
    
    protected static ?string $modelLabel = 'Berita';
    
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Berita')
                    ->description('Masukkan detail berita yang akan dipublikasikan')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\DatePicker::make('tanggal')
                                    ->label('Tanggal Publikasi')
                                    ->default(now())
                                    ->required()
                                    ->native(false)
                                    ->displayFormat('d/m/Y'),
                                
                                // ===== [PERUBAHAN 1: FORMULIR PENULIS] =====
                                // 'ditulis_oleh' (TextInput) diganti dengan 'customer_id' (Select)
                                Forms\Components\Select::make('customer_id')
                                    ->label('Penulis')
                                    ->relationship('author', 'name') // Mengambil dari relasi 'author' & tampilkan 'name'
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->placeholder('Pilih penulis berita'),
                            ]),
                        
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Berita')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan judul berita yang menarik')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null)
                            ->columnSpanFull(),
                        
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(News::class, 'slug', ignoreRecord: true)
                            ->placeholder('slug-otomatis-dari-judul')
                            ->helperText('Slug akan dibuat otomatis dari judul. Anda dapat mengeditnya manual.')
                            ->columnSpanFull(),
                        
                        Forms\Components\Select::make('kategory')
                            ->label('Kategori')
                            ->options([
                                'Industri 5.0' => 'Industri 5.0',
                                'Sustainbility' => 'Sustainbility', // <-- Typo? mungkin 'Sustainability'
                                'Teknologi' => 'Teknologi',
                                'Pendidikan' => 'Pendidikan',
                                'Competition' => 'Competition',
                                'Partnership' => 'Partnership',
                                'Workshop' => 'Workshop',
                                // Kategori dari seeder Anda:
                                'Edukasi' => 'Edukasi',
                                'Komunitas' => 'Komunitas',
                            ])
                            ->required()
                            ->searchable()
                            ->placeholder('Pilih kategori berita'),
                        
                        Forms\Components\RichEditor::make('description')
                            ->label('Konten Berita')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link', 'blockquote',
                            ]),
                    ]),
                
                Forms\Components\Section::make('Media')
                    ->description('Upload thumbnail untuk berita')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Thumbnail Berita')
                            ->image()
                            ->required()
                            ->imageEditor()
                            ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                            
                            // ===== [PERUBAHAN 2: DIREKTORI THUMBNAIL] =====
                            // Diubah agar konsisten dengan Seeder
                            ->directory('thumbnails') 
                            
                            ->visibility('public')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp']),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->circular()
                    ->size(60),
                
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(50),
                
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Slug berhasil disalin!')
                    ->color('gray')
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\BadgeColumn::make('kategory')
                    ->label('Kategori')
                    ->colors([
                        // ... (daftar warna Anda) ...
                    ])
                    ->searchable()
                    ->sortable(),
                
                // ===== [PERUBAHAN 3: KOLOM TABEL PENULIS] =====
                // 'ditulis_oleh' diganti dengan relasi 'author.name'
                Tables\Columns\TextColumn::make('author.name')
                    ->label('Penulis')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(),
                
                // ... (kolom created_at dan updated_at Anda) ...
            ])
            ->filters([
                SelectFilter::make('kategory')
                    ->label('Kategori')
                    ->options([
                        // ... (opsi kategori Anda) ...
                    ]),
                
                Filter::make('tanggal')
                    ->form([
                        Forms\Components\DatePicker::make('from')
                            ->label('Dari Tanggal'),
                        Forms\Components\DatePicker::make('until')
                            ->label('Sampai Tanggal'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal', '>=', $date),
                            )
                            ->when(
                                $data['until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Lihat'),
                Tables\Actions\EditAction::make()->label('Edit'),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Hapus Terpilih'),
                ]),
            ])
            ->defaultSort('tanggal', 'desc')
            ->striped();
    }
    
    // ===== [PERUBAHAN 4: MENAMBAHKAN EAGER LOADING] =====
    // Ini untuk memperbaiki N+1 Query di tabel admin
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('author');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}