<?php

/* node_modules/core-js/fn/object/prevent-extensions.js */
class __TwigTemplate_ed854a3fe81ee3a53d408a07e47b8c4a16b54a4e2cbe222f5b193f7fda359e71 extends Twig_Template
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
        $__internal_e98dd0417e886cd7f3bd0bbbd13581e9f93f8456d989c69ead75aaef9a2b7318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98dd0417e886cd7f3bd0bbbd13581e9f93f8456d989c69ead75aaef9a2b7318->enter($__internal_e98dd0417e886cd7f3bd0bbbd13581e9f93f8456d989c69ead75aaef9a2b7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/prevent-extensions.js"));

        // line 1
        echo "require('../../modules/es6.object.prevent-extensions');
module.exports = require('../../modules/_core').Object.preventExtensions;
";
        
        $__internal_e98dd0417e886cd7f3bd0bbbd13581e9f93f8456d989c69ead75aaef9a2b7318->leave($__internal_e98dd0417e886cd7f3bd0bbbd13581e9f93f8456d989c69ead75aaef9a2b7318_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.prevent-extensions');
module.exports = require('../../modules/_core').Object.preventExtensions;
", "node_modules/core-js/fn/object/prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/prevent-extensions.js");
    }
}
