<?php

/* node_modules/es5-ext/test/math/atanh/implement.js */
class __TwigTemplate_fb2f608f5a9a1a5d1b0981a55b84ac0553bd0dc46d0fb337fb453bb8caeb0132 extends Twig_Template
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
        $__internal_6cb38e8ed1f74e13421f1a962c081aa0eef9b5e30725295f9e1fb1503673d9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb38e8ed1f74e13421f1a962c081aa0eef9b5e30725295f9e1fb1503673d9dc->enter($__internal_6cb38e8ed1f74e13421f1a962c081aa0eef9b5e30725295f9e1fb1503673d9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/atanh/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/atanh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_6cb38e8ed1f74e13421f1a962c081aa0eef9b5e30725295f9e1fb1503673d9dc->leave($__internal_6cb38e8ed1f74e13421f1a962c081aa0eef9b5e30725295f9e1fb1503673d9dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/atanh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/atanh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/atanh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/atanh/implement.js");
    }
}
