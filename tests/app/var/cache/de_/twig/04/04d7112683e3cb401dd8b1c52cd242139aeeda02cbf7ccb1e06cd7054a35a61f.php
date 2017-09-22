<?php

/* node_modules/core-js/library/fn/string/virtual/unescape-html.js */
class __TwigTemplate_6a1a8af19fe621858fe03e1cd9ea145ee895d5e3590c7cb790bd4e4b549343d1 extends Twig_Template
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
        $__internal_6c5079d5bc0981a002acb9255e25f9b41e978380f33a256a545eb198f09c1b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5079d5bc0981a002acb9255e25f9b41e978380f33a256a545eb198f09c1b13->enter($__internal_6c5079d5bc0981a002acb9255e25f9b41e978380f33a256a545eb198f09c1b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/unescape-html.js"));

        // line 1
        echo "require('../../../modules/core.string.unescape-html');
module.exports = require('../../../modules/_entry-virtual')('String').unescapeHTML;
";
        
        $__internal_6c5079d5bc0981a002acb9255e25f9b41e978380f33a256a545eb198f09c1b13->leave($__internal_6c5079d5bc0981a002acb9255e25f9b41e978380f33a256a545eb198f09c1b13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/unescape-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.string.unescape-html');
module.exports = require('../../../modules/_entry-virtual')('String').unescapeHTML;
", "node_modules/core-js/library/fn/string/virtual/unescape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/unescape-html.js");
    }
}
