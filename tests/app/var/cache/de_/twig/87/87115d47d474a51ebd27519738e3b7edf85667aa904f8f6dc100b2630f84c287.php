<?php

/* node_modules/core-js/library/fn/string/virtual/ends-with.js */
class __TwigTemplate_6d738e2b251fa1ef517bc97d8eeb6d95a5b107d1b521bfff415d45200bc43de4 extends Twig_Template
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
        $__internal_010844fe78cd3202418d3e675d25349951709615a27ac6545ff512c36dff9cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010844fe78cd3202418d3e675d25349951709615a27ac6545ff512c36dff9cb6->enter($__internal_010844fe78cd3202418d3e675d25349951709615a27ac6545ff512c36dff9cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/ends-with.js"));

        // line 1
        echo "require('../../../modules/es6.string.ends-with');
module.exports = require('../../../modules/_entry-virtual')('String').endsWith;
";
        
        $__internal_010844fe78cd3202418d3e675d25349951709615a27ac6545ff512c36dff9cb6->leave($__internal_010844fe78cd3202418d3e675d25349951709615a27ac6545ff512c36dff9cb6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/ends-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.ends-with');
module.exports = require('../../../modules/_entry-virtual')('String').endsWith;
", "node_modules/core-js/library/fn/string/virtual/ends-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/ends-with.js");
    }
}
