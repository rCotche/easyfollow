import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/util.css',
                'resources/css/template.css',
                'resources/css/animate.css',
                'resources/css/paddle.css',
                'resources/css/app.css',
                'resources/js/headroom.js',
                'resources/js/on-screen.umd.js',
                'resources/js/nouislider.js',
                'resources/js/bootstrap-datepicker.js',
                'resources/js/jquery.waypoints.js',
                'resources/js/owl.carousel.js',
                'resources/js/jarallax.js',
                'resources/js/jquery.counterup.js',
                'resources/js/jquery.countdown.js',
                'resources/js/smooth-scroll.polyfills.js',
                'resources/js/prism.js',
                'resources/js/buttons.js',
                'resources/js/template.js',
                'resources/js/paddle.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
