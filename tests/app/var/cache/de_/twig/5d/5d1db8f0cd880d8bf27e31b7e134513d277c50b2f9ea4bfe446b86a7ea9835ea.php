<?php

/* node_modules/es5-ext/test/array/from/implement.js */
class __TwigTemplate_3e6b6d5deb1f9f14b1eeecce192875f1a77a7f646a487f14e82732562ba3e0fd extends Twig_Template
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
        $__internal_b4c3ab680cc245a5ca6f934e9dd337fe83622ac066dc760668093e3eaf2d67b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c3ab680cc245a5ca6f934e9dd337fe83622ac066dc760668093e3eaf2d67b5->enter($__internal_b4c3ab680cc245a5ca6f934e9dd337fe83622ac066dc760668093e3eaf2d67b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/from/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../array/from/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_b4c3ab680cc245a5ca6f934e9dd337fe83622ac066dc760668093e3eaf2d67b5->leave($__internal_b4c3ab680cc245a5ca6f934e9dd337fe83622ac066dc760668093e3eaf2d67b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/from/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../array/from/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/from/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/from/implement.js");
    }
}
