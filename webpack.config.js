/**
 * Created by Dima on 14.09.2018.
 */
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const path = require ('path');

module.exports = {
    entry: ['./src/js/script1.js','./src/js/script2.js'],
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist/js')
    },

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }
        ]
    },
    plugins: [
        new BrowserSyncPlugin(
            {
                host: 'localhost',
                port: 3000,
                files: ['./src/*.php', './src/css/*.css'],
                proxy: 'http://localhost/SMReload/src/',
                browser: ["iexplore"]
            }
        )
    ]
}