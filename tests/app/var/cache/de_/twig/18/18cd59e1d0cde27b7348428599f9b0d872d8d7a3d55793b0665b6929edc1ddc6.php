<?php

/* node_modules/core-js/library/fn/string/virtual/bold.js */
class __TwigTemplate_209598809b1a61e3e3abbb4ffa8eb935137e84f12fbdb763b1ae056f9899086d extends Twig_Template
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
        $__internal_23db5c8c65eef279787c7989b1feaf41e088395bdb7be944bc3a87f258239f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23db5c8c65eef279787c7989b1feaf41e088395bdb7be944bc3a87f258239f4f->enter($__internal_23db5c8c65eef279787c7989b1feaf41e088395bdb7be944bc3a87f258239f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/bold.js"));

        // line 1
        echo "require('../../../modules/es6.string.bold');
module.exports = require('../../../modules/_entry-virtual')('String').bold;
";
        
        $__internal_23db5c8c65eef279787c7989b1feaf41e088395bdb7be944bc3a87f258239f4f->leave($__internal_23db5c8c65eef279787c7989b1feaf41e088395bdb7be944bc3a87f258239f4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/bold.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.bold');
module.exports = require('../../../modules/_entry-virtual')('String').bold;
", "node_modules/core-js/library/fn/string/virtual/bold.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/bold.js");
    }
}
