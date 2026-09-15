import {defineConfig} from 'vite';
import tailwindcss from '@tailwindcss/vite';
import symfony from '@symfony/reprise/vite';

export default defineConfig({
    plugins: [
        tailwindcss(),
        symfony({
            stimulus: 'assets/controllers.json',
            copy: [{
                from: 'assets/resources',
                to: 'resources',
            }],
        }),
    ],
    input: {
        app: './assets/app.ts',
        styles: './assets/app.css',
    },
});
