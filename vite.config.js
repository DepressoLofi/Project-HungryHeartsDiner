import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/bootstrap/css/bootstrap.css',
                'resources/assets/bootstrap/js/bootstrap.js'
            ],
            refresh: true,
        }),
    ],
});
