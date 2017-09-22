<?php

/* node_modules/es5-ext/test/math/hypot/implement.js */
class __TwigTemplate_c028c215b9acb099a36ec9206ce72210be833b253ede8ba90fda453a5d42ddea extends Twig_Template
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
        $__internal_b2c8b832e5f63a69f4aba6346250554ae1168466a0a28f0f2ebff62c42332851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c8b832e5f63a69f4aba6346250554ae1168466a0a28f0f2ebff62c42332851->enter($__internal_b2c8b832e5f63a69f4aba6346250554ae1168466a0a28f0f2ebff62c42332851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/hypot/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/hypot/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_b2c8b832e5f63a69f4aba6346250554ae1168466a0a28f0f2ebff62c42332851->leave($__internal_b2c8b832e5f63a69f4aba6346250554ae1168466a0a28f0f2ebff62c42332851_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/hypot/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/hypot/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/hypot/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/hypot/implement.js");
    }
}
