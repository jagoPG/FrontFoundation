<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/package.js */
class __TwigTemplate_f614166443860b30a3d6edec90c7a0a5e8c475fa3bf1224de7db40faee8fa059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d4a16d1e4d3e067fb61e0a34501b8b65fc7c9936944a045f01122cad7e1fd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4a16d1e4d3e067fb61e0a34501b8b65fc7c9936944a045f01122cad7e1fd30->enter($__internal_6d4a16d1e4d3e067fb61e0a34501b8b65fc7c9936944a045f01122cad7e1fd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/package.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = _package;

exports.usage = 'Packs binary (and enclosing directory) into locally staged tarball';

var fs = require('fs');
var path = require('path');
var log = require('npmlog');
var versioning = require('./util/versioning.js');
var write = require('fs').createWriteStream;
var existsAsync = fs.exists || path.exists;
var mkdirp = require('mkdirp');

function _package(gyp, argv, callback) {
    var pack = require('tar-pack').pack;
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var from = opts.module_path;
    var binary_module = path.join(from,opts.module_name + '.node');
    existsAsync(binary_module,function(found) {
        if (!found) {
            return callback(new Error(\"Cannot package because \" + binary_module + \" missing: run `node-pre-gyp rebuild` first\"));
        }
        var tarball = opts.staged_tarball;
        var filter_func = function(entry) {
            // ensure directories are +x
            // https://github.com/mapnik/node-mapnik/issues/262
            log.info('package','packing ' + entry.path);
            return true;
        };
        mkdirp(path.dirname(tarball),function(err) {
            if (err) throw err;
            pack(from, { filter: filter_func })
             .pipe(write(tarball))
             .on('error', function(err) {
                if (err)  console.error('['+package_json.name+'] ' + err.message);
                return callback(err);
             })
             .on('close', function() {
                log.info('package','Binary staged at \"' + tarball + '\"');
                return callback();
             });
        });
    });
}
";
        
        $__internal_6d4a16d1e4d3e067fb61e0a34501b8b65fc7c9936944a045f01122cad7e1fd30->leave($__internal_6d4a16d1e4d3e067fb61e0a34501b8b65fc7c9936944a045f01122cad7e1fd30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/package.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = _package;

exports.usage = 'Packs binary (and enclosing directory) into locally staged tarball';

var fs = require('fs');
var path = require('path');
var log = require('npmlog');
var versioning = require('./util/versioning.js');
var write = require('fs').createWriteStream;
var existsAsync = fs.exists || path.exists;
var mkdirp = require('mkdirp');

function _package(gyp, argv, callback) {
    var pack = require('tar-pack').pack;
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var from = opts.module_path;
    var binary_module = path.join(from,opts.module_name + '.node');
    existsAsync(binary_module,function(found) {
        if (!found) {
            return callback(new Error(\"Cannot package because \" + binary_module + \" missing: run `node-pre-gyp rebuild` first\"));
        }
        var tarball = opts.staged_tarball;
        var filter_func = function(entry) {
            // ensure directories are +x
            // https://github.com/mapnik/node-mapnik/issues/262
            log.info('package','packing ' + entry.path);
            return true;
        };
        mkdirp(path.dirname(tarball),function(err) {
            if (err) throw err;
            pack(from, { filter: filter_func })
             .pipe(write(tarball))
             .on('error', function(err) {
                if (err)  console.error('['+package_json.name+'] ' + err.message);
                return callback(err);
             })
             .on('close', function() {
                log.info('package','Binary staged at \"' + tarball + '\"');
                return callback();
             });
        });
    });
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/package.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/package.js");
    }
}