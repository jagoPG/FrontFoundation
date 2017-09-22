<?php

/* node_modules/core-js/es6/parse-float.js */
class __TwigTemplate_66a895dee77f96a510b273dab05505b90ca290593ab2eaa7c048adc762a769cc extends Twig_Template
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
        $__internal_8b339006f5e9f6aa414b3bdab806ad5c67e6ce09c1d6b2863b30d75521d5b576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b339006f5e9f6aa414b3bdab806ad5c67e6ce09c1d6b2863b30d75521d5b576->enter($__internal_8b339006f5e9f6aa414b3bdab806ad5c67e6ce09c1d6b2863b30d75521d5b576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/parse-float.js"));

        // line 1
        echo "require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
";
        
        $__internal_8b339006f5e9f6aa414b3bdab806ad5c67e6ce09c1d6b2863b30d75521d5b576->leave($__internal_8b339006f5e9f6aa414b3bdab806ad5c67e6ce09c1d6b2863b30d75521d5b576_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/parse-float.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
", "node_modules/core-js/es6/parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/parse-float.js");
    }
}
