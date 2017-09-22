<?php

/* node_modules/es5-ext/object/ensure-finite-number.js */
class __TwigTemplate_01851b0a76f1b84185e45ad271dafd859d3f496607283af915b79b80cb737c6a extends Twig_Template
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
        $__internal_bbd8c01ec9d5fcba0a22205eae86f92b5a95b60d4000729019b3625f94cccab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd8c01ec9d5fcba0a22205eae86f92b5a95b60d4000729019b3625f94cccab1->enter($__internal_bbd8c01ec9d5fcba0a22205eae86f92b5a95b60d4000729019b3625f94cccab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/ensure-finite-number.js"));

        // line 1
        echo "\"use strict\";

var isFiniteNumber = require(\"./is-finite-number\")
  , safeToString   = require(\"../safe-to-string\");

module.exports = function (value) {
\tif (isFiniteNumber(value)) return Number(value);
\tthrow new TypeError(safeToString(value) + \" does not represent a finite number value\");
};
";
        
        $__internal_bbd8c01ec9d5fcba0a22205eae86f92b5a95b60d4000729019b3625f94cccab1->leave($__internal_bbd8c01ec9d5fcba0a22205eae86f92b5a95b60d4000729019b3625f94cccab1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/ensure-finite-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isFiniteNumber = require(\"./is-finite-number\")
  , safeToString   = require(\"../safe-to-string\");

module.exports = function (value) {
\tif (isFiniteNumber(value)) return Number(value);
\tthrow new TypeError(safeToString(value) + \" does not represent a finite number value\");
};
", "node_modules/es5-ext/object/ensure-finite-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/ensure-finite-number.js");
    }
}
