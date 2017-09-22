<?php

/* node_modules/deep-extend/index.js */
class __TwigTemplate_f8c22e3b0c24b5c263c07479db500eb8a19d68c13e0c29a9d05328e9c0f839d2 extends Twig_Template
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
        $__internal_dfaf491e304714cca7ff657f77fe4542d5dbb7166d632079e7d031faab6a1fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfaf491e304714cca7ff657f77fe4542d5dbb7166d632079e7d031faab6a1fee->enter($__internal_dfaf491e304714cca7ff657f77fe4542d5dbb7166d632079e7d031faab6a1fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-extend/index.js"));

        // line 1
        echo "module.exports = require('./lib/deep-extend');
";
        
        $__internal_dfaf491e304714cca7ff657f77fe4542d5dbb7166d632079e7d031faab6a1fee->leave($__internal_dfaf491e304714cca7ff657f77fe4542d5dbb7166d632079e7d031faab6a1fee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-extend/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./lib/deep-extend');
", "node_modules/deep-extend/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-extend/index.js");
    }
}
