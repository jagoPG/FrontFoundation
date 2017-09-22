<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/clean.js */
class __TwigTemplate_328fc58de84faf0892782e60f0c560e818d7b55382be9f12cdb24e2a9009375f extends Twig_Template
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
        $__internal_65b8cb3c6876a58532ffeaa0399c314183d24c33be533c6e234b10f969f7889f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b8cb3c6876a58532ffeaa0399c314183d24c33be533c6e234b10f969f7889f->enter($__internal_65b8cb3c6876a58532ffeaa0399c314183d24c33be533c6e234b10f969f7889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/clean.js"));

        // line 1
        echo "\"use strict\";

module.exports = exports = clean;

exports.usage = 'Removes the entire folder containing the compiled .node module';

var fs = require('fs');
var rm = require('rimraf');
var exists = require('fs').exists || require('path').exists;
var versioning = require('./util/versioning.js');

function clean (gyp, argv, callback) {
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var to_delete = opts.module_path;
    exists(to_delete, function(found) {
        if (found) {
            if (!gyp.opts.silent_clean) console.log('['+package_json.name+'] Removing \"%s\"', to_delete);
            return rm(to_delete, callback);
        }
        return callback();
    });
}
";
        
        $__internal_65b8cb3c6876a58532ffeaa0399c314183d24c33be533c6e234b10f969f7889f->leave($__internal_65b8cb3c6876a58532ffeaa0399c314183d24c33be533c6e234b10f969f7889f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/clean.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = exports = clean;

exports.usage = 'Removes the entire folder containing the compiled .node module';

var fs = require('fs');
var rm = require('rimraf');
var exists = require('fs').exists || require('path').exists;
var versioning = require('./util/versioning.js');

function clean (gyp, argv, callback) {
    var package_json = JSON.parse(fs.readFileSync('./package.json'));
    var opts = versioning.evaluate(package_json, gyp.opts);
    var to_delete = opts.module_path;
    exists(to_delete, function(found) {
        if (found) {
            if (!gyp.opts.silent_clean) console.log('['+package_json.name+'] Removing \"%s\"', to_delete);
            return rm(to_delete, callback);
        }
        return callback();
    });
}
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/clean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/clean.js");
    }
}
