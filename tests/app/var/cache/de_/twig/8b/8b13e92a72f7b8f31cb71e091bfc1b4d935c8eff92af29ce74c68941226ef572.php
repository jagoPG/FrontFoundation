<?php

/* node_modules/core-js/fn/string/virtual/escape-html.js */
class __TwigTemplate_a6974aa3fdf2f1a483c4af2ee9e511f1b7b1055160fa0484a43949d3136c5198 extends Twig_Template
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
        $__internal_11a705ea61990e37d6b6e7a2387fc4c2b3bae8fb619b22ab6dde4acb8d181379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a705ea61990e37d6b6e7a2387fc4c2b3bae8fb619b22ab6dde4acb8d181379->enter($__internal_11a705ea61990e37d6b6e7a2387fc4c2b3bae8fb619b22ab6dde4acb8d181379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/escape-html.js"));

        // line 1
        echo "require('../../../modules/core.string.escape-html');
module.exports = require('../../../modules/_entry-virtual')('String').escapeHTML;
";
        
        $__internal_11a705ea61990e37d6b6e7a2387fc4c2b3bae8fb619b22ab6dde4acb8d181379->leave($__internal_11a705ea61990e37d6b6e7a2387fc4c2b3bae8fb619b22ab6dde4acb8d181379_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/escape-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/core.string.escape-html');
module.exports = require('../../../modules/_entry-virtual')('String').escapeHTML;
", "node_modules/core-js/fn/string/virtual/escape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/escape-html.js");
    }
}
