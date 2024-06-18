import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/filament-chart-js-plugins.js', // Include the new file in the `input` array so it is built
            ],
            
            refresh: true,
        }),
    ],
});
