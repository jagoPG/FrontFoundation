<?php

/* node_modules/lodash/fp/lang.js */
class __TwigTemplate_f32c9c75487cb26682253cdec840c67fbab2ee23c0ed4ddf101c4a3d4b0fb37a extends Twig_Template
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
        $__internal_e4e0f1990778b89110fe6c6e7b9c7a266e552f71666835cc92c42b941a8414a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e0f1990778b89110fe6c6e7b9c7a266e552f71666835cc92c42b941a8414a3->enter($__internal_e4e0f1990778b89110fe6c6e7b9c7a266e552f71666835cc92c42b941a8414a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/lang.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../lang'));
";
        
        $__internal_e4e0f1990778b89110fe6c6e7b9c7a266e552f71666835cc92c42b941a8414a3->leave($__internal_e4e0f1990778b89110fe6c6e7b9c7a266e552f71666835cc92c42b941a8414a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/lang.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../lang'));
", "node_modules/lodash/fp/lang.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/lang.js");
    }
}
