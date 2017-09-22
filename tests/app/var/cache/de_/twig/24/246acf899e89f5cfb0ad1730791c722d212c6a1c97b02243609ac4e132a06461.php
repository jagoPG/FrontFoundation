<?php

/* node_modules/lodash/fp/trimCharsStart.js */
class __TwigTemplate_52051dd483ebd20db5ae2aed7039ac2d466c63e652403ca03c0ea3fb33e33a8d extends Twig_Template
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
        $__internal_4cdaafcdbd30f7b646801f03553a9636b03214855e4c2fddb5c27bff95283313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdaafcdbd30f7b646801f03553a9636b03214855e4c2fddb5c27bff95283313->enter($__internal_4cdaafcdbd30f7b646801f03553a9636b03214855e4c2fddb5c27bff95283313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/trimCharsStart.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('trimCharsStart', require('../trimStart'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4cdaafcdbd30f7b646801f03553a9636b03214855e4c2fddb5c27bff95283313->leave($__internal_4cdaafcdbd30f7b646801f03553a9636b03214855e4c2fddb5c27bff95283313_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/trimCharsStart.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('trimCharsStart', require('../trimStart'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/trimCharsStart.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/trimCharsStart.js");
    }
}
