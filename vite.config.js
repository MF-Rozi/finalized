import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'datatable': path.resolve(__dirname, 'node_modules/datatable'),
            'jquery': path.resolve(__dirname, 'node_modules/jquery'),
            'lodash': path.resolve(__dirname, 'node_modules/lodash'),
            'axios': path.resolve(__dirname, 'node_modules/axios'),
            'popper': path.resolve(__dirname, 'node_modules/@popperjs/core'),

        }
    },
});
