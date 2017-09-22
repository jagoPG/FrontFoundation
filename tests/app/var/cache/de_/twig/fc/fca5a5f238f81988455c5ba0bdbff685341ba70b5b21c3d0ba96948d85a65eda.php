<?php

/* node_modules/es5-ext/test/array/of/index.js */
class __TwigTemplate_600e5cdbfff149f21ac594801a96bfcd859652afc9f78c147ead353d773d5ca1 extends Twig_Template
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
        $__internal_a8d9d2199b79a5f7bc568bb1d09ddd6e731593823e4f429d65809231903d31f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d9d2199b79a5f7bc568bb1d09ddd6e731593823e4f429d65809231903d31f6->enter($__internal_a8d9d2199b79a5f7bc568bb1d09ddd6e731593823e4f429d65809231903d31f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/of/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./shim\");
";
        
        $__internal_a8d9d2199b79a5f7bc568bb1d09ddd6e731593823e4f429d65809231903d31f6->leave($__internal_a8d9d2199b79a5f7bc568bb1d09ddd6e731593823e4f429d65809231903d31f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/of/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./shim\");
", "node_modules/es5-ext/test/array/of/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/of/index.js");
    }
}
