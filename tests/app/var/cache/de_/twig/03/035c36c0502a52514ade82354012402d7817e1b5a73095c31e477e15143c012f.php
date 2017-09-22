<?php

/* node_modules/es5-ext/number/is-safe-integer/shim.js */
class __TwigTemplate_9475c5b4fc77cf1dca8b237d71632ab91b99bafefb30247e5be1e1eea808bc66 extends Twig_Template
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
        $__internal_85b9e15d7fe845087b0ff8b84a41e1067a1e18a8fbf1fb3720cce6293416c3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b9e15d7fe845087b0ff8b84a41e1067a1e18a8fbf1fb3720cce6293416c3cc->enter($__internal_85b9e15d7fe845087b0ff8b84a41e1067a1e18a8fbf1fb3720cce6293416c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-safe-integer/shim.js"));

        // line 1
        echo "\"use strict\";

var isInteger = require(\"../is-integer/shim\")
  , maxValue  = require(\"../max-safe-integer\")

  , abs = Math.abs;

module.exports = function (value) {
\tif (!isInteger(value)) return false;
\treturn abs(value) <= maxValue;
};
";
        
        $__internal_85b9e15d7fe845087b0ff8b84a41e1067a1e18a8fbf1fb3720cce6293416c3cc->leave($__internal_85b9e15d7fe845087b0ff8b84a41e1067a1e18a8fbf1fb3720cce6293416c3cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-safe-integer/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isInteger = require(\"../is-integer/shim\")
  , maxValue  = require(\"../max-safe-integer\")

  , abs = Math.abs;

module.exports = function (value) {
\tif (!isInteger(value)) return false;
\treturn abs(value) <= maxValue;
};
", "node_modules/es5-ext/number/is-safe-integer/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-safe-integer/shim.js");
    }
}
