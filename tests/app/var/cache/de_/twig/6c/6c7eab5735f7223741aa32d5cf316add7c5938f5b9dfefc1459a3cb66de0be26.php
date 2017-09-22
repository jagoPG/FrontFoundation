<?php

/* node_modules/core-js/library/modules/es7.global.js */
class __TwigTemplate_f8b97f222badba73410fa4b57746c01d5c35181dc19374fe70931b39cd9e77fb extends Twig_Template
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
        $__internal_673a4546b108f5ae3986a42f48843233e2d9f40e246727c698ecb5913361e18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673a4546b108f5ae3986a42f48843233e2d9f40e246727c698ecb5913361e18b->enter($__internal_673a4546b108f5ae3986a42f48843233e2d9f40e246727c698ecb5913361e18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.global.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-global
var \$export = require('./_export');

\$export(\$export.G, { global: require('./_global') });
";
        
        $__internal_673a4546b108f5ae3986a42f48843233e2d9f40e246727c698ecb5913361e18b->leave($__internal_673a4546b108f5ae3986a42f48843233e2d9f40e246727c698ecb5913361e18b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-global
var \$export = require('./_export');

\$export(\$export.G, { global: require('./_global') });
", "node_modules/core-js/library/modules/es7.global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.global.js");
    }
}
