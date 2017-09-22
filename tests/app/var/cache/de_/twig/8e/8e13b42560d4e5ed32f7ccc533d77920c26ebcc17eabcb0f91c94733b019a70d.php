<?php

/* node_modules/core-js/library/fn/object/classof.js */
class __TwigTemplate_735f2ad28cb18daa28b35bac2b8962bcedbe234d06d919d4d9031468d88b258d extends Twig_Template
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
        $__internal_22ba343046c515d7e40c9a0b077be19e1bf3c7c457604d87c6fd5d63f4f2c961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ba343046c515d7e40c9a0b077be19e1bf3c7c457604d87c6fd5d63f4f2c961->enter($__internal_22ba343046c515d7e40c9a0b077be19e1bf3c7c457604d87c6fd5d63f4f2c961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/classof.js"));

        // line 1
        echo "require('../../modules/core.object.classof');
module.exports = require('../../modules/_core').Object.classof;
";
        
        $__internal_22ba343046c515d7e40c9a0b077be19e1bf3c7c457604d87c6fd5d63f4f2c961->leave($__internal_22ba343046c515d7e40c9a0b077be19e1bf3c7c457604d87c6fd5d63f4f2c961_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/classof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.classof');
module.exports = require('../../modules/_core').Object.classof;
", "node_modules/core-js/library/fn/object/classof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/classof.js");
    }
}
