<?php

/* node_modules/core-js/library/fn/string/virtual/escape-html.js */
class __TwigTemplate_3aaca267cbf569f0d9e3a96f5856947790b9d10571bd68cff6bb2714b072b5e6 extends Twig_Template
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
        $__internal_df5f9c656f64f7cd1a28cb25af96095b2dd53c0556244e42b3da1a730b1e1d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5f9c656f64f7cd1a28cb25af96095b2dd53c0556244e42b3da1a730b1e1d69->enter($__internal_df5f9c656f64f7cd1a28cb25af96095b2dd53c0556244e42b3da1a730b1e1d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/escape-html.js"));

        // line 1
        echo "require('../../../modules/core.string.escape-html');
module.exports = require('../../../modules/_entry-virtual')('String').escapeHTML;
";
        
        $__internal_df5f9c656f64f7cd1a28cb25af96095b2dd53c0556244e42b3da1a730b1e1d69->leave($__internal_df5f9c656f64f7cd1a28cb25af96095b2dd53c0556244e42b3da1a730b1e1d69_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/escape-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.string.escape-html');
module.exports = require('../../../modules/_entry-virtual')('String').escapeHTML;
", "node_modules/core-js/library/fn/string/virtual/escape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/escape-html.js");
    }
}
