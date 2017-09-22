<?php

/* node_modules/es5-ext/object/filter.js */
class __TwigTemplate_8c6cbb19bc33358689d7b09a3c1a93bd3c6a48e385d63d71abffefb51b5130b7 extends Twig_Template
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
        $__internal_0e04c70a37310c8c9c608a8c0b47de477a026818d4c8bbc00beadfcce8e31861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e04c70a37310c8c9c608a8c0b47de477a026818d4c8bbc00beadfcce8e31861->enter($__internal_0e04c70a37310c8c9c608a8c0b47de477a026818d4c8bbc00beadfcce8e31861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/filter.js"));

        // line 1
        echo "\"use strict\";

var callable = require(\"./valid-callable\")
  , forEach  = require(\"./for-each\")
  , call     = Function.prototype.call;

module.exports = function (obj, cb /*, thisArg*/) {
\tvar result = {}, thisArg = arguments[2];
\tcallable(cb);
\tforEach(obj, function (value, key, targetObj, index) {
\t\tif (call.call(cb, thisArg, value, key, targetObj, index)) result[key] = targetObj[key];
\t});
\treturn result;
};
";
        
        $__internal_0e04c70a37310c8c9c608a8c0b47de477a026818d4c8bbc00beadfcce8e31861->leave($__internal_0e04c70a37310c8c9c608a8c0b47de477a026818d4c8bbc00beadfcce8e31861_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/filter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable = require(\"./valid-callable\")
  , forEach  = require(\"./for-each\")
  , call     = Function.prototype.call;

module.exports = function (obj, cb /*, thisArg*/) {
\tvar result = {}, thisArg = arguments[2];
\tcallable(cb);
\tforEach(obj, function (value, key, targetObj, index) {
\t\tif (call.call(cb, thisArg, value, key, targetObj, index)) result[key] = targetObj[key];
\t});
\treturn result;
};
", "node_modules/es5-ext/object/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/filter.js");
    }
}
