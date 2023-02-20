import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/util.css',
                'resources/css/template.css',
                'resources/css/datatables.css',
                'resources/css/flatpickr.css',
                'resources/css/my_style.css',
                'resources/js/jquery.js',
                'resources/js/popper.js',
                'resources/js/cdn_bootstrap.js',
                'resources/js/headroom.js',
                'resources/js/template.js',
                'resources/js/datatables.js',
                'resources/js/flatpickr.js',
                'resources/js/my_script.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
