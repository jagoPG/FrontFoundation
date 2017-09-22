<?php

/* node_modules/core-js/core/function.js */
class __TwigTemplate_99c644616839642aaeb967eabf68933fe6c0a9a3c2dfec28415e37b4338320f5 extends Twig_Template
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
        $__internal_6d0f1fae42f9e1e5dc10e8a202e36010204976f20f87ac14a2b4d149440358bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0f1fae42f9e1e5dc10e8a202e36010204976f20f87ac14a2b4d149440358bf->enter($__internal_6d0f1fae42f9e1e5dc10e8a202e36010204976f20f87ac14a2b4d149440358bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/function.js"));

        // line 1
        echo "require('../modules/core.function.part');
module.exports = require('../modules/_core').Function;
";
        
        $__internal_6d0f1fae42f9e1e5dc10e8a202e36010204976f20f87ac14a2b4d149440358bf->leave($__internal_6d0f1fae42f9e1e5dc10e8a202e36010204976f20f87ac14a2b4d149440358bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.function.part');
module.exports = require('../modules/_core').Function;
", "node_modules/core-js/core/function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/function.js");
    }
}
