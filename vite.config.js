import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/reset.css', 
                'resources/js/app.js',
                'resources/css/error.css',
                'resources/css/auth.css'
            ],
            refresh: true,
        }),
    ],
});
