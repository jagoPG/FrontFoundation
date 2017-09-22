<?php

/* node_modules/es5-ext/test/number/is-safe-integer/implement.js */
class __TwigTemplate_d3eb38b39628996a1dd86996a6dc1dcc1001fe6fda72f3e52cb26298c666f394 extends Twig_Template
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
        $__internal_7c9531b18e20056e0e5fca95a1bca4eed66f1ddc1ff2b2fc402ccd4608a0d07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9531b18e20056e0e5fca95a1bca4eed66f1ddc1ff2b2fc402ccd4608a0d07b->enter($__internal_7c9531b18e20056e0e5fca95a1bca4eed66f1ddc1ff2b2fc402ccd4608a0d07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-safe-integer/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../number/is-safe-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_7c9531b18e20056e0e5fca95a1bca4eed66f1ddc1ff2b2fc402ccd4608a0d07b->leave($__internal_7c9531b18e20056e0e5fca95a1bca4eed66f1ddc1ff2b2fc402ccd4608a0d07b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-safe-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../number/is-safe-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/number/is-safe-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-safe-integer/implement.js");
    }
}
