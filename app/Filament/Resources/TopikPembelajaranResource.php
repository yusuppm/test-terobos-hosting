<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopikPembelajaranResource\Pages;
use App\Filament\Resources\TopikPembelajaranResource\RelationManagers;
use App\Models\TopikPembelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str; // Import Str

class TopikPembelajaranResource extends Resource
{
    protected static ?string $model = TopikPembelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap'; // Ikon untuk menu
    
    protected static ?string $pluralModelLabel = 'Topik Pembelajaran'; // Nama di menu
    
    protected static ?string $modelLabel = 'Topik Pembelajaran';
    
    protected static ?int $navigationSort = 2; // Urutan di menu (setelah Berita)

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Utama')
                    ->description('Detail utama untuk topik pembelajaran ini.')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Topik')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true) // 'live' agar bisa update slug
                            ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' ? $set('slug', Str::slug($state)) : null),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug (URL)')
                            ->required()
                            ->maxLength(255)
                            ->unique(TopikPembelajaran::class, 'slug', ignoreRecord: true)
                            ->helperText('Otomatis dibuat dari judul. Harap jangan diubah jika tidak perlu.'),
                        
                        Forms\Components\TextInput::make('icon')
                            ->label('Ikon (FontAwesome)')
                            ->placeholder('Contoh: fas fa-robot')
                            ->helperText('Masukkan kelas ikon dari FontAwesome.'),

                        Forms\Components\RichEditor::make('description')
                            ->label('Deskripsi Singkat')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2), // Dua kolom untuk bagian ini

                Forms\Components\Section::make('Detail Paket')
                    ->description('Rincian spesifik untuk paket pembelajaran.')
                    ->schema([
                        Forms\Components\TextInput::make('teknologi')
                            ->label('Teknologi')
                            ->placeholder('Contoh: Motor omni, pengontrol, sensor.')
                            ->required(),
                        Forms\Components\TextInput::make('learning_outcomes')
                            ->label('Learning Outcomes')
                            ->placeholder('Contoh: Dasar robotika, pemrograman gerak.')
                            ->required(),
                        Forms\Components\TextInput::make('untuk')
                            ->label('Untuk Siapa')
                            ->placeholder('Contoh: Pelajar SMA/SMK, Mahasiswa Teknik.')
                            ->required(),
                        Forms\Components\TextInput::make('modul')
                            ->label('Modul')
                            ->placeholder('Contoh: Teori robotika, simulasi, praktek.')
                            ->required(),
                        Forms\Components\TextInput::make('perangkat')
                            ->label('Perangkat')
                            ->placeholder('Contoh: IMU Controller + Simulator Terobos.')
                            ->required(),
                    ])->columns(2), // Dua kolom

                Forms\Components\Section::make('Media & Harga')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar Utama')
                            ->image()
                            ->imageEditor()
                            ->directory('thumbnails') // Simpan di folder thumbnails
                            ->visibility('public')
                            ->required(),
                        
                        Forms\Components\TextInput::make('harga')
                            ->label('Harga')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->helperText('Masukkan angka saja, tanpa titik atau koma. Contoh: 300000'),
                        
                        Forms\Components\TextInput::make('order')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(0)
                            ->helperText('Angka lebih kecil akan tampil lebih dulu.'),
                    ])->columns(3), // Tiga kolom
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->circular()
                    ->size(60),
                
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Topik')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                
                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR') // Format sebagai Rupiah
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan by default
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Sembunyikan by default
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Edit'),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Hapus Terpilih'),
                ]),
            ])
            ->defaultSort('order', 'asc') // Urutkan berdasarkan kolom 'order'
            ->reorderable('order') // Aktifkan fitur drag-and-drop untuk urutan
            ->striped();
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        // Kode ini sudah otomatis dibuat oleh --generate
        return [
            'index' => Pages\ListTopikPembelajarans::route('/'),
            'create' => Pages\CreateTopikPembelajaran::route('/create'),
            'edit' => Pages\EditTopikPembelajaran::route('/{record}/edit'),
        ];
    }    
}