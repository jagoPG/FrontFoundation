<?php

/* node_modules/es5-ext/object/_iterate.js */
class __TwigTemplate_67d0a990991c81e1a0b4a721f188181acab8c07773c021b7488d09f8bd4e4e3a extends Twig_Template
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
        $__internal_bdbdda4a44ea2d2593582750fa9a506b6633d633a0df71b388ef01470b62f18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbdda4a44ea2d2593582750fa9a506b6633d633a0df71b388ef01470b62f18f->enter($__internal_bdbdda4a44ea2d2593582750fa9a506b6633d633a0df71b388ef01470b62f18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/_iterate.js"));

        // line 1
        echo "// Internal method, used by iteration functions.
// Calls a function for each key-value pair found in object
// Optionally takes compareFn to iterate object in specific order

\"use strict\";

var callable                = require(\"./valid-callable\")
  , value                   = require(\"./valid-value\")
  , bind                    = Function.prototype.bind
  , call                    = Function.prototype.call
  , keys                    = Object.keys
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (method, defVal) {
\treturn function (obj, cb /*, thisArg, compareFn*/) {
\t\tvar list, thisArg = arguments[2], compareFn = arguments[3];
\t\tobj = Object(value(obj));
\t\tcallable(cb);

\t\tlist = keys(obj);
\t\tif (compareFn) {
\t\t\tlist.sort(typeof compareFn === \"function\" ? bind.call(compareFn, obj) : undefined);
\t\t}
\t\tif (typeof method !== \"function\") method = list[method];
\t\treturn call.call(method, list, function (key, index) {
\t\t\tif (!objPropertyIsEnumerable.call(obj, key)) return defVal;
\t\t\treturn call.call(cb, thisArg, obj[key], key, obj, index);
\t\t});
\t};
};
";
        
        $__internal_bdbdda4a44ea2d2593582750fa9a506b6633d633a0df71b388ef01470b62f18f->leave($__internal_bdbdda4a44ea2d2593582750fa9a506b6633d633a0df71b388ef01470b62f18f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/_iterate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Internal method, used by iteration functions.
// Calls a function for each key-value pair found in object
// Optionally takes compareFn to iterate object in specific order

\"use strict\";

var callable                = require(\"./valid-callable\")
  , value                   = require(\"./valid-value\")
  , bind                    = Function.prototype.bind
  , call                    = Function.prototype.call
  , keys                    = Object.keys
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (method, defVal) {
\treturn function (obj, cb /*, thisArg, compareFn*/) {
\t\tvar list, thisArg = arguments[2], compareFn = arguments[3];
\t\tobj = Object(value(obj));
\t\tcallable(cb);

\t\tlist = keys(obj);
\t\tif (compareFn) {
\t\t\tlist.sort(typeof compareFn === \"function\" ? bind.call(compareFn, obj) : undefined);
\t\t}
\t\tif (typeof method !== \"function\") method = list[method];
\t\treturn call.call(method, list, function (key, index) {
\t\t\tif (!objPropertyIsEnumerable.call(obj, key)) return defVal;
\t\t\treturn call.call(cb, thisArg, obj[key], key, obj, index);
\t\t});
\t};
};
", "node_modules/es5-ext/object/_iterate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/_iterate.js");
    }
}
