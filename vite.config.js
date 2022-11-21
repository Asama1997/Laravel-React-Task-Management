import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        babel({
            babelConfig: {
                babelrc: true,
                configFile: false,
                plugin: ['@babel/plugin-proposal-decorators'],
                
                // uses the jsx loader for .jsx files
                loader: path => {
                  if (extname(path) === '.jsx') {
                    return 'jsx';
                  }
                },
            }
        }),
    ],
});
