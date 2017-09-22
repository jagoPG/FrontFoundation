<?php

/* node_modules/core-js/fn/array/virtual/sort.js */
class __TwigTemplate_1d5dd204d31308d8669d81581e84d5163dfac39df2751250bd89ce442ffb896f extends Twig_Template
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
        $__internal_8d2ad42d62acc122c5e81e3ce80d8aebf3903863bd62fd5b9a2c5bf62d2501ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2ad42d62acc122c5e81e3ce80d8aebf3903863bd62fd5b9a2c5bf62d2501ea->enter($__internal_8d2ad42d62acc122c5e81e3ce80d8aebf3903863bd62fd5b9a2c5bf62d2501ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/sort.js"));

        // line 1
        echo "require('../../../modules/es6.array.sort');
module.exports = require('../../../modules/_entry-virtual')('Array').sort;
";
        
        $__internal_8d2ad42d62acc122c5e81e3ce80d8aebf3903863bd62fd5b9a2c5bf62d2501ea->leave($__internal_8d2ad42d62acc122c5e81e3ce80d8aebf3903863bd62fd5b9a2c5bf62d2501ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/sort.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.sort');
module.exports = require('../../../modules/_entry-virtual')('Array').sort;
", "node_modules/core-js/fn/array/virtual/sort.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/sort.js");
    }
}
