<?php

/* node_modules/node-pre-gyp/lib/clean.js */
class __TwigTemplate_c76a09a55518a1b7ae0bb853e1c7a6315e3e1e60c2fad9efd47f68c2c4f45906 extends Twig_Template
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
        $__internal_beb33f5ad94f9bfd8fcaccc18f4b0dcda77b5874f749e1ea9d246e9113e584e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb33f5ad94f9bfd8fcaccc18f4b0dcda77b5874f749e1ea9d246e9113e584e5->enter($__internal_beb33f5ad94f9bfd8fcaccc18f4b0dcda77b5874f749e1ea9d246e9113e584e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/clean.js"));

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
        
        $__internal_beb33f5ad94f9bfd8fcaccc18f4b0dcda77b5874f749e1ea9d246e9113e584e5->leave($__internal_beb33f5ad94f9bfd8fcaccc18f4b0dcda77b5874f749e1ea9d246e9113e584e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/clean.js";
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
", "node_modules/node-pre-gyp/lib/clean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/clean.js");
    }
}
