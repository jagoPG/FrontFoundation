<?php

/* node_modules/core-js/fn/string/virtual/sup.js */
class __TwigTemplate_250f108cc05cefb2175d1f1095c0d059d12e4a70218d004217b077210ccb842f extends Twig_Template
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
        $__internal_1074e6e7ad1833823439b6f6eadb6c773826cc530ce11384ccdf8e798a26f2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1074e6e7ad1833823439b6f6eadb6c773826cc530ce11384ccdf8e798a26f2bd->enter($__internal_1074e6e7ad1833823439b6f6eadb6c773826cc530ce11384ccdf8e798a26f2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/sup.js"));

        // line 1
        echo "require('../../../modules/es6.string.sup');
module.exports = require('../../../modules/_entry-virtual')('String').sup;
";
        
        $__internal_1074e6e7ad1833823439b6f6eadb6c773826cc530ce11384ccdf8e798a26f2bd->leave($__internal_1074e6e7ad1833823439b6f6eadb6c773826cc530ce11384ccdf8e798a26f2bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/sup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.sup');
module.exports = require('../../../modules/_entry-virtual')('String').sup;
", "node_modules/core-js/fn/string/virtual/sup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/sup.js");
    }
}
