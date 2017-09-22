<?php

/* node_modules/babel-runtime/helpers/define-enumerable-properties.js */
class __TwigTemplate_6bb781a6f1cf80ddf7bfc9aad08f0d3d1a070a05f379b12b6f663fd7b6dc886d extends Twig_Template
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
        $__internal_dec926e0c2e589020a69af91e5fb11a4001fd566ab933ebb7512c1b67720fdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec926e0c2e589020a69af91e5fb11a4001fd566ab933ebb7512c1b67720fdd0->enter($__internal_dec926e0c2e589020a69af91e5fb11a4001fd566ab933ebb7512c1b67720fdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/define-enumerable-properties.js"));

        // line 1
        echo "module.exports = require(\"./defineEnumerableProperties.js\");";
        
        $__internal_dec926e0c2e589020a69af91e5fb11a4001fd566ab933ebb7512c1b67720fdd0->leave($__internal_dec926e0c2e589020a69af91e5fb11a4001fd566ab933ebb7512c1b67720fdd0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/define-enumerable-properties.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./defineEnumerableProperties.js\");", "node_modules/babel-runtime/helpers/define-enumerable-properties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/define-enumerable-properties.js");
    }
}
