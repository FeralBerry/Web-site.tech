import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import removeConsole from 'vite-plugin-remove-console';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/user.js',
                'resources/js/frontJS/front_app.js'
            ],
            refresh: true,

        }),
        removeConsole(),
        vue(),
    ],
    build: {
        rollupOptions: {
            external: ['swiper']
        },
        minify: 'esbuild',
        esbuild: {
            drop: ['console', 'debugger']
        }
    },
});
