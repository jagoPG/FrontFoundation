<?php

/* node_modules/es5-ext/test/number/max-safe-integer/implement.js */
class __TwigTemplate_6282364a7900317cbb50cd6d20b3256a3f20bd76d43c85439de6f2c4beafac90 extends Twig_Template
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
        $__internal_f609c7e4e4e6fd471e04bb011ccedf383a5ec71f0125316117f128242c36caee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f609c7e4e4e6fd471e04bb011ccedf383a5ec71f0125316117f128242c36caee->enter($__internal_f609c7e4e4e6fd471e04bb011ccedf383a5ec71f0125316117f128242c36caee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/max-safe-integer/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../number/max-safe-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_f609c7e4e4e6fd471e04bb011ccedf383a5ec71f0125316117f128242c36caee->leave($__internal_f609c7e4e4e6fd471e04bb011ccedf383a5ec71f0125316117f128242c36caee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/max-safe-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../number/max-safe-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/number/max-safe-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/max-safe-integer/implement.js");
    }
}
