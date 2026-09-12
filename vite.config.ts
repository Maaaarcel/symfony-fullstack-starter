import {defineConfig} from 'vite';
import tailwindcss from '@tailwindcss/vite';
import symfony from '@symfony/reprise/vite';
import {Options} from '@symfony/reprise/types';

export default defineConfig({
    plugins: [
        tailwindcss(),
        symfony({
            stimulus: {
                controllersJson: 'assets/controllers.json',
                controllersDir: './{assets,src}',
            },
            copy: [{
                from: 'assets/resources',
                to: 'resources',
            }],
        } satisfies Options),
    ],
    build: {
        rolldownOptions: {
            input: {
                app: './assets/app.ts',
                styles: './assets/app.css',
            },
        },
    },
});
