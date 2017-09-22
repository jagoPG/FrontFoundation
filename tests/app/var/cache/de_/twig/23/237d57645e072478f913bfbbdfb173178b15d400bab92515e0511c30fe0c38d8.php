<?php

/* node_modules/es5-ext/array/#/find-index/shim.js */
class __TwigTemplate_f110387f8a22583d3aaffe7401d3d2ed7744d3d480e1a65c16486f8d4c0831e0 extends Twig_Template
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
        $__internal_08e18d8eb9c4181564257992f4705c1a17034960b8f2ca57659a70bd223509b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e18d8eb9c4181564257992f4705c1a17034960b8f2ca57659a70bd223509b1->enter($__internal_08e18d8eb9c4181564257992f4705c1a17034960b8f2ca57659a70bd223509b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find-index/shim.js"));

        // line 1
        echo "\"use strict\";

var callable    = require(\"../../../object/valid-callable\")
  , ensureValue = require(\"../../../object/valid-value\")
  , some        = Array.prototype.some
  , apply       = Function.prototype.apply;

module.exports = function (predicate /*, thisArg*/) {
\tvar k, self;
\tself = Object(ensureValue(this));
\tcallable(predicate);

\treturn some.call(
\t\tself,
\t\tfunction (value, index) {
\t\t\tif (apply.call(predicate, this, arguments)) {
\t\t\t\tk = index;
\t\t\t\treturn true;
\t\t\t}
\t\t\treturn false;
\t\t},
\t\targuments[1]
\t)
\t\t? k
\t\t: -1;
};
";
        
        $__internal_08e18d8eb9c4181564257992f4705c1a17034960b8f2ca57659a70bd223509b1->leave($__internal_08e18d8eb9c4181564257992f4705c1a17034960b8f2ca57659a70bd223509b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find-index/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var callable    = require(\"../../../object/valid-callable\")
  , ensureValue = require(\"../../../object/valid-value\")
  , some        = Array.prototype.some
  , apply       = Function.prototype.apply;

module.exports = function (predicate /*, thisArg*/) {
\tvar k, self;
\tself = Object(ensureValue(this));
\tcallable(predicate);

\treturn some.call(
\t\tself,
\t\tfunction (value, index) {
\t\t\tif (apply.call(predicate, this, arguments)) {
\t\t\t\tk = index;
\t\t\t\treturn true;
\t\t\t}
\t\t\treturn false;
\t\t},
\t\targuments[1]
\t)
\t\t? k
\t\t: -1;
};
", "node_modules/es5-ext/array/#/find-index/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find-index/shim.js");
    }
}
