/**
 * Created by Dima on 14.09.2018.
 */
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
    // ...
    plugins: [
        new BrowserSyncPlugin(
            {
                host: 'localhost',
                port: 3000,
                files: ['./src/*.php'],
                proxy: 'http://localhost/SMReload/src/'
            }
        )
    ]
}