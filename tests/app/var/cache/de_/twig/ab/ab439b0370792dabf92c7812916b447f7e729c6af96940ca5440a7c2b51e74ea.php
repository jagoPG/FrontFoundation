<?php

/* node_modules/es5-ext/iterable/validate-object.js */
class __TwigTemplate_499d7780b652a97b3d8a80cd04046241412fdbf3a5186c608fa682518b3dc8b5 extends Twig_Template
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
        $__internal_173ab72088484b2151d021eb1c20988d541c8748190512dedcc4a17b2d146d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173ab72088484b2151d021eb1c20988d541c8748190512dedcc4a17b2d146d04->enter($__internal_173ab72088484b2151d021eb1c20988d541c8748190512dedcc4a17b2d146d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/iterable/validate-object.js"));

        // line 1
        echo "\"use strict\";

var isObject = require(\"../object/is-object\")
  , is       = require(\"./is\");

module.exports = function (value) {
\tif (is(value) && isObject(value)) return value;
\tthrow new TypeError(value + \" is not an iterable or array-like object\");
};
";
        
        $__internal_173ab72088484b2151d021eb1c20988d541c8748190512dedcc4a17b2d146d04->leave($__internal_173ab72088484b2151d021eb1c20988d541c8748190512dedcc4a17b2d146d04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/iterable/validate-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isObject = require(\"../object/is-object\")
  , is       = require(\"./is\");

module.exports = function (value) {
\tif (is(value) && isObject(value)) return value;
\tthrow new TypeError(value + \" is not an iterable or array-like object\");
};
", "node_modules/es5-ext/iterable/validate-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/iterable/validate-object.js");
    }
}
