import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
    server: {
        host: '127.0.0.1',  // или '0.0.0.0' для доступа из локальной сети
        port: 5173,
        strictPort: true,
        cors: true,  // 🔥 Включает CORS
        hmr: {
            host: '127.0.0.1',  // или 'localhost'
        },
    },
});
