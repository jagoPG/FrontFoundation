<?php

/* node_modules/node-pre-gyp/lib/pre-binding.js */
class __TwigTemplate_c1d94094ff427448a669ae4e1c34946880eb4ba6e79e74444e8b5c59347307c7 extends Twig_Template
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
        $__internal_0200774b68586141a32ddefd9a24c50d77475dbe0892dfac9462beca6dbf6bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0200774b68586141a32ddefd9a24c50d77475dbe0892dfac9462beca6dbf6bd1->enter($__internal_0200774b68586141a32ddefd9a24c50d77475dbe0892dfac9462beca6dbf6bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/pre-binding.js"));

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
        
        $__internal_0200774b68586141a32ddefd9a24c50d77475dbe0892dfac9462beca6dbf6bd1->leave($__internal_0200774b68586141a32ddefd9a24c50d77475dbe0892dfac9462beca6dbf6bd1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/pre-binding.js";
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
", "node_modules/node-pre-gyp/lib/pre-binding.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/pre-binding.js");
    }
}
