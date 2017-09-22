<?php

/* node_modules/core-js/fn/string/bold.js */
class __TwigTemplate_d21d06f1504fbfe1f5dd509f2466e74379c9b0e4b0a188f50eddc1c1f3d39c6a extends Twig_Template
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
        $__internal_12edc7abf11f32515a4c09dc7f406cd25dc624b45e5699209c4726f1e9aa330a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12edc7abf11f32515a4c09dc7f406cd25dc624b45e5699209c4726f1e9aa330a->enter($__internal_12edc7abf11f32515a4c09dc7f406cd25dc624b45e5699209c4726f1e9aa330a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/bold.js"));

        // line 1
        echo "require('../../modules/es6.string.bold');
module.exports = require('../../modules/_core').String.bold;
";
        
        $__internal_12edc7abf11f32515a4c09dc7f406cd25dc624b45e5699209c4726f1e9aa330a->leave($__internal_12edc7abf11f32515a4c09dc7f406cd25dc624b45e5699209c4726f1e9aa330a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/bold.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.bold');
module.exports = require('../../modules/_core').String.bold;
", "node_modules/core-js/fn/string/bold.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/bold.js");
    }
}
