const basePath = '/var/www/html/projects/ecowebstudio';
const { assertSupportedNodeVersion } = require(basePath + '/node_modules/laravel-mix/src/Engine');

module.exports = async () => {
    assertSupportedNodeVersion();

    const mix = require(basePath + '/node_modules/laravel-mix/src/Mix').primary;

    // disable manifest
    mix.manifest.refresh = _ => void 0

    mix.listen('init', function (mix) {
        // Setup Winter path aliases
        mix._api.alias({
            '$': '/var/www/html/projects/ecowebstudio/plugins',
            '~': '/var/www/html/projects/ecowebstudio',
        });
        // disable notifications if not in watch
        mix._api.disableNotifications();
        // define options
        mix._api.options({
            processCssUrls: false,
            clearConsole: false,
            cssNano: {
                discardComments: {removeAll: true},
            }
        });
        // enable source maps for dev builds
        if (!mix._api.inProduction()) {
            mix._api.webpackConfig({
                devtool: 'inline-source-map'
            });
            mix._api.sourceMaps();
        }
    });

    // override default mix output
    mix.listen("loading-plugins", function (plugins) {
        plugins.forEach(function (plugin, index) {
            if (plugin.constructor.name === "BuildOutputPlugin") {
                plugins[index].apply = function (compiler) {
                    compiler.hooks.done.tap('BuildOutputPlugin', stats => {
                        if (stats.hasErrors()) {
                            return false;
                        }

                        if (this.options.clearConsole) {
                            this.clearConsole();
                        }

                        let data = stats.toJson({
                            assets: true,
                            builtAt: true,
                            hash: true,
                            performance: true,
                            relatedAssets: this.options.showRelated
                        });

                        if (data.assets.length) {
                            console.log(this.statsTable(data));
                        }
                    });
               };
            }
        });
    });

    require('/var/www/html/projects/ecowebstudio/themes/wn-ecowebstudio/winter.mix.js');

    await mix.installDependencies();
    await mix.init();

    return mix.build();
};
