import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/theme.min.css',
                'resources/css/app.css',
                'resources/js/plugins.init.js',
                'resources/libs/%40iconscout/unicons/css/line.css',
                'resources/libs/%40mdi/font/css/materialdesignicons.min.css',
                'resources/libs/tobii/css/tobii.min.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
