<?php

/* node_modules/core-js/fn/string/virtual/fixed.js */
class __TwigTemplate_f94a8b377687b760f81e4fb643a0b2e752c2c45096b0bbbdd9c4502b1387a726 extends Twig_Template
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
        $__internal_3ca26db7a8d1d0d70357d4db358c27e3622f2aa9a9bad54b1727a548818723df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca26db7a8d1d0d70357d4db358c27e3622f2aa9a9bad54b1727a548818723df->enter($__internal_3ca26db7a8d1d0d70357d4db358c27e3622f2aa9a9bad54b1727a548818723df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/fixed.js"));

        // line 1
        echo "require('../../../modules/es6.string.fixed');
module.exports = require('../../../modules/_entry-virtual')('String').fixed;
";
        
        $__internal_3ca26db7a8d1d0d70357d4db358c27e3622f2aa9a9bad54b1727a548818723df->leave($__internal_3ca26db7a8d1d0d70357d4db358c27e3622f2aa9a9bad54b1727a548818723df_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/fixed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.fixed');
module.exports = require('../../../modules/_entry-virtual')('String').fixed;
", "node_modules/core-js/fn/string/virtual/fixed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/fixed.js");
    }
}
