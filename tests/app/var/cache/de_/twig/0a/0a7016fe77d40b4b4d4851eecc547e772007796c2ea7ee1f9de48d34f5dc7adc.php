<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/pre-binding.js */
class __TwigTemplate_fb51e588ab0f2d477961a1de3a178856597f3ff4ce94c2a9dd8f4df867698b35 extends Twig_Template
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
        $__internal_833747b0002a6c344bfc06a1448486ae7113de8fd3ef844748e6a7b8e637f341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833747b0002a6c344bfc06a1448486ae7113de8fd3ef844748e6a7b8e637f341->enter($__internal_833747b0002a6c344bfc06a1448486ae7113de8fd3ef844748e6a7b8e637f341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/pre-binding.js"));

        // line 1
        echo "\"use strict\";

var versioning = require('../lib/util/versioning.js');
var existsSync = require('fs').existsSync || require('path').existsSync;
var path = require('path');

module.exports = exports;

exports.usage = 'Finds the require path for the node-pre-gyp installed module';

exports.validate = function(package_json) {
    versioning.validate_config(package_json);
};

exports.find = function(package_json_path,opts) {
   if (!existsSync(package_json_path)) {
        throw new Error(\"package.json does not exist at \" + package_json_path);
   }
   var package_json = require(package_json_path);
   versioning.validate_config(package_json);
   opts = opts || {};
   if (!opts.module_root) opts.module_root = path.dirname(package_json_path);
   var meta = versioning.evaluate(package_json,opts);
   return meta.module;
};
";
        
        $__internal_833747b0002a6c344bfc06a1448486ae7113de8fd3ef844748e6a7b8e637f341->leave($__internal_833747b0002a6c344bfc06a1448486ae7113de8fd3ef844748e6a7b8e637f341_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/pre-binding.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var versioning = require('../lib/util/versioning.js');
var existsSync = require('fs').existsSync || require('path').existsSync;
var path = require('path');

module.exports = exports;

exports.usage = 'Finds the require path for the node-pre-gyp installed module';

exports.validate = function(package_json) {
    versioning.validate_config(package_json);
};

exports.find = function(package_json_path,opts) {
   if (!existsSync(package_json_path)) {
        throw new Error(\"package.json does not exist at \" + package_json_path);
   }
   var package_json = require(package_json_path);
   versioning.validate_config(package_json);
   opts = opts || {};
   if (!opts.module_root) opts.module_root = path.dirname(package_json_path);
   var meta = versioning.evaluate(package_json,opts);
   return meta.module;
};
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/pre-binding.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/pre-binding.js");
    }
}
