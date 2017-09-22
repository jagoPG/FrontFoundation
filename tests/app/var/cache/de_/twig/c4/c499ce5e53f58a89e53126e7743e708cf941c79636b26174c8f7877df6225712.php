<?php

/* node_modules/es5-ext/math/cbrt/index.js */
class __TwigTemplate_f386180e4848e3512269544a46ed44d8b36696326c5c0bce4857e357da71a5db extends Twig_Template
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
        $__internal_26d2de294e705b5b5dd0e90211e5134a56a68d3d155521ce13e9c3e3f9b7d571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d2de294e705b5b5dd0e90211e5134a56a68d3d155521ce13e9c3e3f9b7d571->enter($__internal_26d2de294e705b5b5dd0e90211e5134a56a68d3d155521ce13e9c3e3f9b7d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cbrt/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.cbrt
\t: require(\"./shim\");
";
        
        $__internal_26d2de294e705b5b5dd0e90211e5134a56a68d3d155521ce13e9c3e3f9b7d571->leave($__internal_26d2de294e705b5b5dd0e90211e5134a56a68d3d155521ce13e9c3e3f9b7d571_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cbrt/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.cbrt
\t: require(\"./shim\");
", "node_modules/es5-ext/math/cbrt/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cbrt/index.js");
    }
}
