import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        
        tailwindcss({
            config: {
                content: [
                    "./resources/**/*.blade.php",
                    "./resources/**/*.js",
                ],
                theme: {
                    extend: {
                        colors: {
                            // anyar
                            'brand-dark': '#002343',
                            'brand-primary': '#0157B2',
                            'brand-light': '#01C0DB',
                            // lawas
                            'primary': '#3B82F6',
                            'secondary': '#1E40AF',
                            'accent': '#F59E0B'
                        },
                        fontFamily: {
                            'sans': ['Inter', 'system-ui', 'sans-serif']
                        }
                    }
                }
            }
        })
    ],
});