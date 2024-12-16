import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/js/auth/login.js',
                'resources/js/layouts/header.js',
                'resources/js/modules/nav.js'
            ],
            refresh: true,
        }),
    ],
});
