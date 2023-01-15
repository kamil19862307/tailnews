import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
                'resources/src/css/style.css',
                'resources/src/vendors/hc-sticky/dist/hc-sticky.js',
                'resources/src/vendors/glightbox/dist/js/glightbox.min.js',
                'resources/src/vendors/@splidejs/splide/dist/js/splide.min.js',
                'resources/src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js',
                'resources/src/js/theme.js',
            ],
            refresh: true,
        }),
    ],
});
