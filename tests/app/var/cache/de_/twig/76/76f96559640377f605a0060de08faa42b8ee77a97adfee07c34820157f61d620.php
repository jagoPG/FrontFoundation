<?php

/* node_modules/core-js/fn/string/virtual/bold.js */
class __TwigTemplate_9b89672560c53ae43cfc887c83ce7eb45991179fe24a6473f6e7e04ff2f34acf extends Twig_Template
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
        $__internal_f7964638ce474dac534d3894a989ece9aba4d34d5cfbf947755c90fa12b3ca6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7964638ce474dac534d3894a989ece9aba4d34d5cfbf947755c90fa12b3ca6f->enter($__internal_f7964638ce474dac534d3894a989ece9aba4d34d5cfbf947755c90fa12b3ca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/bold.js"));

        // line 1
        echo "require('../../../modules/es6.string.bold');
module.exports = require('../../../modules/_entry-virtual')('String').bold;
";
        
        $__internal_f7964638ce474dac534d3894a989ece9aba4d34d5cfbf947755c90fa12b3ca6f->leave($__internal_f7964638ce474dac534d3894a989ece9aba4d34d5cfbf947755c90fa12b3ca6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/bold.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.bold');
module.exports = require('../../../modules/_entry-virtual')('String').bold;
", "node_modules/core-js/fn/string/virtual/bold.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/bold.js");
    }
}
