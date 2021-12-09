const mix = require('laravel-mix');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.sass', 'public/css')
    .options({
        processCssUrls: false
    })
    .webpackConfig({
        plugins: [
            new SVGSpritemapPlugin(
                'resources/icons/*.svg',
                {
                    output: {
                        filename: '/img/sprite.svg',
                        svg4everybody: false,
                        chunk: {
                            keep: true,
                        },
                        svgo: {
                            plugins: [
                                {
                                    'name' : 'removeStyleElement'
                                },
                                {
                                    'name' : 'removeAttrs',
                                    'params' : {
                                        attrs: ["fill", "stroke"]
                                    }
                                },
                            ]
                        },
                    },
                    sprite: {
                        prefix: 'icon-',
                        generate: {
                            title: false,
                        },
                    },
                }
            ),
        ],
    })

.sourceMaps();
