<?php

/* node_modules/core-js/library/fn/string/virtual/trim-right.js */
class __TwigTemplate_630c20e51680b38bf088a2fd21883cde0d9158846ae791e8bc9c73c4afcc98fa extends Twig_Template
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
        $__internal_f0f7db9044e9bd3da8239557afb8f3b396a5e63752c41bd5ccab32d27f52ab32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f7db9044e9bd3da8239557afb8f3b396a5e63752c41bd5ccab32d27f52ab32->enter($__internal_f0f7db9044e9bd3da8239557afb8f3b396a5e63752c41bd5ccab32d27f52ab32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/trim-right.js"));

        // line 1
        echo "require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
";
        
        $__internal_f0f7db9044e9bd3da8239557afb8f3b396a5e63752c41bd5ccab32d27f52ab32->leave($__internal_f0f7db9044e9bd3da8239557afb8f3b396a5e63752c41bd5ccab32d27f52ab32_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/trim-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es7.string.trim-right');
module.exports = require('../../../modules/_entry-virtual')('String').trimRight;
", "node_modules/core-js/library/fn/string/virtual/trim-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/trim-right.js");
    }
}
