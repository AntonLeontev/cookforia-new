import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/style.scss", "resources/js/app.js", "resources/css/schedule.css"],
            refresh: true,
        }),
        // tailwindcss(),
    ],
});
