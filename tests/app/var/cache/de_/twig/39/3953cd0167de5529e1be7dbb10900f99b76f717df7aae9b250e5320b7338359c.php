<?php

/* node_modules/core-js/library/fn/string/virtual/small.js */
class __TwigTemplate_76548b10a4f2ecfbb90e12dd28d7c44ba7276e2cf0717b27d659159a80c28f1a extends Twig_Template
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
        $__internal_baa8275f893daac60a4269e688f6162f3d6775d0b52f56347320949aa343922f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa8275f893daac60a4269e688f6162f3d6775d0b52f56347320949aa343922f->enter($__internal_baa8275f893daac60a4269e688f6162f3d6775d0b52f56347320949aa343922f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/small.js"));

        // line 1
        echo "require('../../../modules/es6.string.small');
module.exports = require('../../../modules/_entry-virtual')('String').small;
";
        
        $__internal_baa8275f893daac60a4269e688f6162f3d6775d0b52f56347320949aa343922f->leave($__internal_baa8275f893daac60a4269e688f6162f3d6775d0b52f56347320949aa343922f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/small.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.small');
module.exports = require('../../../modules/_entry-virtual')('String').small;
", "node_modules/core-js/library/fn/string/virtual/small.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/small.js");
    }
}
