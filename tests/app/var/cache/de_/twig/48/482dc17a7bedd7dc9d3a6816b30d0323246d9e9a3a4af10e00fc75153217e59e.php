<?php

/* node_modules/es5-ext/array/#/find/index.js */
class __TwigTemplate_2b484fa0e0e45e6506ee49c07f4e1e85314ffb48247be6213db2ac78e13c5d00 extends Twig_Template
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
        $__internal_75925431a70d89c85e300d403e95f588432e3998a608920e5ed75930d7983e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75925431a70d89c85e300d403e95f588432e3998a608920e5ed75930d7983e90->enter($__internal_75925431a70d89c85e300d403e95f588432e3998a608920e5ed75930d7983e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.find : require(\"./shim\");
";
        
        $__internal_75925431a70d89c85e300d403e95f588432e3998a608920e5ed75930d7983e90->leave($__internal_75925431a70d89c85e300d403e95f588432e3998a608920e5ed75930d7983e90_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.find : require(\"./shim\");
", "node_modules/es5-ext/array/#/find/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find/index.js");
    }
}
