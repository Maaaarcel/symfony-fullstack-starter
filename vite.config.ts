import {defineConfig} from 'vite';
import symfonyPlugin from 'vite-plugin-symfony';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        tailwindcss(),
        symfonyPlugin({
            stimulus: {
                controllersDir: '/'
            },
            refresh: true,

        }),
    ],
    build: {
        rollupOptions: {
            input: {
                app: './assets/app.ts',
                styles: './assets/app.css',
            },
        },
        assetsInlineLimit: 0,
    },
});