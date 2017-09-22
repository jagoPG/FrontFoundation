<?php

/* node_modules/core-js/fn/object/entries.js */
class __TwigTemplate_546a07dcd7ca94423d380ebf903cec8c1989ded693fbc2ee991da379d251e2ce extends Twig_Template
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
        $__internal_5dbbaad1334160fc3560f07b4c5073374f14ee61c6466f4afca9e37e8d6a1838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbbaad1334160fc3560f07b4c5073374f14ee61c6466f4afca9e37e8d6a1838->enter($__internal_5dbbaad1334160fc3560f07b4c5073374f14ee61c6466f4afca9e37e8d6a1838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/entries.js"));

        // line 1
        echo "require('../../modules/es7.object.entries');
module.exports = require('../../modules/_core').Object.entries;
";
        
        $__internal_5dbbaad1334160fc3560f07b4c5073374f14ee61c6466f4afca9e37e8d6a1838->leave($__internal_5dbbaad1334160fc3560f07b4c5073374f14ee61c6466f4afca9e37e8d6a1838_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/entries.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.entries');
module.exports = require('../../modules/_core').Object.entries;
", "node_modules/core-js/fn/object/entries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/entries.js");
    }
}
