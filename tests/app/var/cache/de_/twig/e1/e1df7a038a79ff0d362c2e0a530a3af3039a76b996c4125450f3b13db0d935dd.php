<?php

/* node_modules/es5-ext/test/math/log1p/implement.js */
class __TwigTemplate_efba1b7f52e6ee03690b6ff4b5626921914160dd9a4fc13aebeb6bf4d2b5cf49 extends Twig_Template
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
        $__internal_9bdc05e562b4333ef7ad34e0e18bd291d9392ccedf3842666e56b9193e1845ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdc05e562b4333ef7ad34e0e18bd291d9392ccedf3842666e56b9193e1845ad->enter($__internal_9bdc05e562b4333ef7ad34e0e18bd291d9392ccedf3842666e56b9193e1845ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log1p/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/log1p/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_9bdc05e562b4333ef7ad34e0e18bd291d9392ccedf3842666e56b9193e1845ad->leave($__internal_9bdc05e562b4333ef7ad34e0e18bd291d9392ccedf3842666e56b9193e1845ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log1p/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/log1p/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/log1p/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log1p/implement.js");
    }
}
