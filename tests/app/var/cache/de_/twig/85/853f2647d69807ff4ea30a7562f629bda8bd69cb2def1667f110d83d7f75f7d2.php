<?php

/* node_modules/core-js/library/fn/function/part.js */
class __TwigTemplate_983909f7006def955cf21c0765a3f32d27975080cf7b4c7caa52a0082d936973 extends Twig_Template
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
        $__internal_85874278903a0eb67686c7c11f2583f304bc8e99bbbf83149f694f0282519b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85874278903a0eb67686c7c11f2583f304bc8e99bbbf83149f694f0282519b8a->enter($__internal_85874278903a0eb67686c7c11f2583f304bc8e99bbbf83149f694f0282519b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/function/part.js"));

        // line 1
        echo "require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function.part;
";
        
        $__internal_85874278903a0eb67686c7c11f2583f304bc8e99bbbf83149f694f0282519b8a->leave($__internal_85874278903a0eb67686c7c11f2583f304bc8e99bbbf83149f694f0282519b8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/function/part.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function.part;
", "node_modules/core-js/library/fn/function/part.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/function/part.js");
    }
}
