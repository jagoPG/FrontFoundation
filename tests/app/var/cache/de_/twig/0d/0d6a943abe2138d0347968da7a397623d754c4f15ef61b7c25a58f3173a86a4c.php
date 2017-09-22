<?php

/* node_modules/core-js/fn/string/escape-html.js */
class __TwigTemplate_fc230549056f855e7a90a9c7c46ec4ef4d40571e6ee28e0f90f115153404ed14 extends Twig_Template
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
        $__internal_ba49a9025f3c8b5587b1caa0ce45a19156153d4ad066429849fb8ea6141f8214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba49a9025f3c8b5587b1caa0ce45a19156153d4ad066429849fb8ea6141f8214->enter($__internal_ba49a9025f3c8b5587b1caa0ce45a19156153d4ad066429849fb8ea6141f8214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/escape-html.js"));

        // line 1
        echo "require('../../modules/core.string.escape-html');
module.exports = require('../../modules/_core').String.escapeHTML;
";
        
        $__internal_ba49a9025f3c8b5587b1caa0ce45a19156153d4ad066429849fb8ea6141f8214->leave($__internal_ba49a9025f3c8b5587b1caa0ce45a19156153d4ad066429849fb8ea6141f8214_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/escape-html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.string.escape-html');
module.exports = require('../../modules/_core').String.escapeHTML;
", "node_modules/core-js/fn/string/escape-html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/escape-html.js");
    }
}
