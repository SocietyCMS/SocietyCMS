'use strict';

var exec = require('child_process').exec;

function puts(error, stdout, stderr) {
    console.log(stdout);
}

function WebpackShellPlugin(options) {
    var defaultOptions = {
        artisan: 'php ../../artisan',
        module: ''
    };

    this.options = Object.assign(defaultOptions, options);
}

WebpackShellPlugin.prototype.apply = function (compiler) {
    compiler.plugin("emit", (compilation, callback) => {
        exec(this.options.artisan + ' module:publish ' + this.options.module, puts);
        callback();
    });
};

module.exports = WebpackShellPlugin;