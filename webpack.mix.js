const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .vue()
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
    ])
    .alias({
        "@": "resources/js",
    });

if (mix.inProduction()) {
    mix.version();
    const ASSET_URL = process.env.ASSET_URL + "/";

    mix.webpackConfig((webpack) => {
        return {
            plugins: [
                new webpack.DefinePlugin({
                    "process.env.ASSET_PATH": JSON.stringify(ASSET_URL),
                }),
            ],
            output: {
                publicPath: ASSET_URL,
            },
        };
    });
} else {
    mix.sourceMaps();

    const domain = "msa-alumni-fund.test";
    const homedir = require("os").homedir();

    // The mix script:
    mix.browserSync({
        proxy: "https://" + domain,
        host: domain,
        open: "external",
        https: {
            key: homedir + "/.config/valet/Certificates/" + domain + ".key",
            cert: homedir + "/.config/valet/Certificates/" + domain + ".crt",
        },
        notify: false,
    });
}
