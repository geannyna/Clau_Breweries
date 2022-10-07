import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/micss.css',
                'resources/js/mijs.js',
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '@': '/resources/js'
        }
    }
});
