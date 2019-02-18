/**
 * Created by Dima on 14.09.2018.
 */

const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const validator = require('html-validator');
const fs = require('fs');
const path = require('path');

const options = {
    format: 'text'
};

fs.readFile( './src/index.php', 'utf8', (err, html) => {
    if (err) {
        throw err;
    }

    options.data = html

    validator(options)
        .then((data) => {
            console.log(data)
        })
        .catch((error) => {
            console.error(error)
        })
});

module.exports = {
    entry: ['./src/js/main.es6'],
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist/js')
    },

    module: {
        rules: [
            {
                test: /\.es6$/,
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
                port: 443,
                files: ['./src/*.php', './dist/css/*.css'],
                proxy: 'https://192.168.0.4/SMReload/src/',
                https: {
                    key: "c:/xampp/apache/crt/192.168.0.4/server.key",
                    cert: "c:/xampp/apache/crt/192.168.0.4/server.crt"
                },
                browser: ["iexplore"]
            }
        )
    ]
}
