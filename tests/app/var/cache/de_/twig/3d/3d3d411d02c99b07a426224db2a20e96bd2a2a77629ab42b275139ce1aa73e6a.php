<?php

/* node_modules/core-js/library/es7/array.js */
class __TwigTemplate_966791ca1718e7fca62418fb9072b6116983dc63bdc213004738dd0efd4f6d6c extends Twig_Template
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
        $__internal_9976771dd7394a0c0fd35f46d770b9ab345f502cfb2ffabb1224c87125fe6c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9976771dd7394a0c0fd35f46d770b9ab345f502cfb2ffabb1224c87125fe6c5e->enter($__internal_9976771dd7394a0c0fd35f46d770b9ab345f502cfb2ffabb1224c87125fe6c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/array.js"));

        // line 1
        echo "require('../modules/es7.array.includes');
require('../modules/es7.array.flat-map');
require('../modules/es7.array.flatten');
module.exports = require('../modules/_core').Array;
";
        
        $__internal_9976771dd7394a0c0fd35f46d770b9ab345f502cfb2ffabb1224c87125fe6c5e->leave($__internal_9976771dd7394a0c0fd35f46d770b9ab345f502cfb2ffabb1224c87125fe6c5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.array.includes');
require('../modules/es7.array.flat-map');
require('../modules/es7.array.flatten');
module.exports = require('../modules/_core').Array;
", "node_modules/core-js/library/es7/array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/array.js");
    }
}
