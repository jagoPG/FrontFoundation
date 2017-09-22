<?php

/* node_modules/core-js/fn/number/virtual/to-precision.js */
class __TwigTemplate_8e4be3be6b81145148b3187607326972242a3f039778a6f19d41d44086021fba extends Twig_Template
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
        $__internal_f16723cc673b8496ff4295f9e905d30e3a2b9f9307704f8238162534f329b014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16723cc673b8496ff4295f9e905d30e3a2b9f9307704f8238162534f329b014->enter($__internal_f16723cc673b8496ff4295f9e905d30e3a2b9f9307704f8238162534f329b014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/virtual/to-precision.js"));

        // line 1
        echo "require('../../../modules/es6.number.to-precision');
module.exports = require('../../../modules/_entry-virtual')('Number').toPrecision;
";
        
        $__internal_f16723cc673b8496ff4295f9e905d30e3a2b9f9307704f8238162534f329b014->leave($__internal_f16723cc673b8496ff4295f9e905d30e3a2b9f9307704f8238162534f329b014_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/virtual/to-precision.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.number.to-precision');
module.exports = require('../../../modules/_entry-virtual')('Number').toPrecision;
", "node_modules/core-js/fn/number/virtual/to-precision.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/virtual/to-precision.js");
    }
}
