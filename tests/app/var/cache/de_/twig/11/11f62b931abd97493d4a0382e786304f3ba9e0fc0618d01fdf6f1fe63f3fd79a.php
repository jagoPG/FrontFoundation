<?php

/* node_modules/core-js/fn/string/italics.js */
class __TwigTemplate_b6d0b6964f750bd6292c5d9a95065368552b26015e7578c52db4ecd130c92858 extends Twig_Template
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
        $__internal_5dd437b814f12b517dd570021b0ed4ac1bdfc57e13402c45b963b6c9405aefcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd437b814f12b517dd570021b0ed4ac1bdfc57e13402c45b963b6c9405aefcc->enter($__internal_5dd437b814f12b517dd570021b0ed4ac1bdfc57e13402c45b963b6c9405aefcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/italics.js"));

        // line 1
        echo "require('../../modules/es6.string.italics');
module.exports = require('../../modules/_core').String.italics;
";
        
        $__internal_5dd437b814f12b517dd570021b0ed4ac1bdfc57e13402c45b963b6c9405aefcc->leave($__internal_5dd437b814f12b517dd570021b0ed4ac1bdfc57e13402c45b963b6c9405aefcc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/italics.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.italics');
module.exports = require('../../modules/_core').String.italics;
", "node_modules/core-js/fn/string/italics.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/italics.js");
    }
}