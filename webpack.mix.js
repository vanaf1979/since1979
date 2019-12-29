const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');


mix.autoload({})
    .js('src/js/app.js', 'public/js/app.js')
    .copy('src/js/sw.js', 'public/js/sw.js')
    .sass('src/scss/app.scss', 'public/css/app.css')
    .options({
        processCssUrls: false,
        autoprefixer: {
            options: {
                browsers: '>0.1%'
            }
        },
        postCss: [
            require('cssnext')
        ]
    })
    .webpackConfig({
        externals: {
            'jquery': 'jQuery',
        },
        plugins: [
            new CopyWebpackPlugin([
                {
                    from: 'src/img',
                    to: 'public/img',
                }
            ]),
            new ImageminPlugin({
                test: /\.(jpe?g|png|gif|svg)$/i,
                plugins: [
                    imageminMozjpeg({
                        quality: 80,
                    })
                ]
            })
        ]
    });
