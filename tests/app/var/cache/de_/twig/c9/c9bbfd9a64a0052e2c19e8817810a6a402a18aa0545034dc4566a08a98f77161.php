<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/testpackage.js */
class __TwigTemplate_661c9d7dfc2f078fbedc098b758bc112dfb76c0cad0eecbadc29bc255fac8b9c extends Twig_Template
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
        $__internal_204ed78ac3d3c7efd122ef8ea14ab88ef91149308d111c114863fde6d26f1dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204ed78ac3d3c7efd122ef8ea14ab88ef91149308d111c114863fde6d26f1dff->enter($__internal_204ed78ac3d3c7efd122ef8ea14ab88ef91149308d111c114863fde6d26f1dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/testpackage.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = testpackage;

exports.usage = 'Tests that the staged package is valid';

var fs = require('fs');
var path = require('path');
var log = require('npmlog');
var existsAsync = fs.exists || path.exists;
var versioning = require('./util/versioning.js');
var testbinary = require('./testbinary.js');
var read = require('fs').createReadStream;
var zlib = require('zlib');

function testpackage(gyp, argv, callback) {
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var tarball = opts.staged_tarball;
    existsAsync(tarball, function(found) {
        if (!found) {
            return callback(new Error(\"Cannot test package because \" + tarball + \" missing: run `node-pre-gyp package` first\"));
        }
        var to = opts.module_path;
        var gunzip = zlib.createGunzip();
        var extracter = require('tar').Extract({ path: to, strip: 1 });
        function filter_func(entry) {
            // ensure directories are +x
            // https://github.com/mapnik/node-mapnik/issues/262
            entry.props.mode |= (entry.props.mode >>> 2) & parseInt('0111',8);
            log.info('install','unpacking ' + entry.path);
        }
        gunzip.on('error', callback);
        extracter.on('error', callback);
        extracter.on('entry', filter_func);
        extracter.on('end', function(err) {
            if (err) return callback(err);
            testbinary(gyp,argv,function(err) {
                if (err) {
                    return callback(err);
                } else {
                    console.log('['+package_json.name+'] Package appears valid');
                    return callback();
                }
            });
        });
        read(tarball).pipe(gunzip).pipe(extracter);
    });
}
";
        
        $__internal_204ed78ac3d3c7efd122ef8ea14ab88ef91149308d111c114863fde6d26f1dff->leave($__internal_204ed78ac3d3c7efd122ef8ea14ab88ef91149308d111c114863fde6d26f1dff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/testpackage.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = testpackage;

exports.usage = 'Tests that the staged package is valid';

var fs = require('fs');
var path = require('path');
var log = require('npmlog');
var existsAsync = fs.exists || path.exists;
var versioning = require('./util/versioning.js');
var testbinary = require('./testbinary.js');
var read = require('fs').createReadStream;
var zlib = require('zlib');

function testpackage(gyp, argv, callback) {
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var tarball = opts.staged_tarball;
    existsAsync(tarball, function(found) {
        if (!found) {
            return callback(new Error(\"Cannot test package because \" + tarball + \" missing: run `node-pre-gyp package` first\"));
        }
        var to = opts.module_path;
        var gunzip = zlib.createGunzip();
        var extracter = require('tar').Extract({ path: to, strip: 1 });
        function filter_func(entry) {
            // ensure directories are +x
            // https://github.com/mapnik/node-mapnik/issues/262
            entry.props.mode |= (entry.props.mode >>> 2) & parseInt('0111',8);
            log.info('install','unpacking ' + entry.path);
        }
        gunzip.on('error', callback);
        extracter.on('error', callback);
        extracter.on('entry', filter_func);
        extracter.on('end', function(err) {
            if (err) return callback(err);
            testbinary(gyp,argv,function(err) {
                if (err) {
                    return callback(err);
                } else {
                    console.log('['+package_json.name+'] Package appears valid');
                    return callback();
                }
            });
        });
        read(tarball).pipe(gunzip).pipe(extracter);
    });
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/testpackage.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/testpackage.js");
    }
}