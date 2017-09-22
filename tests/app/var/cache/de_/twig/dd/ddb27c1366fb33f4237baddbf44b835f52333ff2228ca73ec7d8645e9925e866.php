<?php

/* node_modules/core-js/fn/object/get-prototype-of.js */
class __TwigTemplate_9e1d812b0efcbd5ffec6da7a4d3b1801380af5e9cf86326cb68b6ac72b0190bc extends Twig_Template
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
        $__internal_8695a0cc3f034a5ee202d2d5c1e35a23308d17f694d4368745451ebad39b6723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8695a0cc3f034a5ee202d2d5c1e35a23308d17f694d4368745451ebad39b6723->enter($__internal_8695a0cc3f034a5ee202d2d5c1e35a23308d17f694d4368745451ebad39b6723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/get-prototype-of.js"));

        // line 1
        echo "require('../../modules/es6.object.get-prototype-of');
module.exports = require('../../modules/_core').Object.getPrototypeOf;
";
        
        $__internal_8695a0cc3f034a5ee202d2d5c1e35a23308d17f694d4368745451ebad39b6723->leave($__internal_8695a0cc3f034a5ee202d2d5c1e35a23308d17f694d4368745451ebad39b6723_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/get-prototype-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.get-prototype-of');
module.exports = require('../../modules/_core').Object.getPrototypeOf;
", "node_modules/core-js/fn/object/get-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/get-prototype-of.js");
    }
}
