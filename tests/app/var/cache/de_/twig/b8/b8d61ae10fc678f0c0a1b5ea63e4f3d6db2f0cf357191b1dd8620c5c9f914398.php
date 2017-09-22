<?php

/* node_modules/core-js/fn/object/classof.js */
class __TwigTemplate_458a710d37a51d8bf524db51b77063df6e0286191efe3213f151a0b533769e26 extends Twig_Template
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
        $__internal_f73ae88c5adb332e26bb019fead6ab36bd8ff9623bf380cbaa728d475f0f5247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73ae88c5adb332e26bb019fead6ab36bd8ff9623bf380cbaa728d475f0f5247->enter($__internal_f73ae88c5adb332e26bb019fead6ab36bd8ff9623bf380cbaa728d475f0f5247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/classof.js"));

        // line 1
        echo "require('../../modules/core.object.classof');
module.exports = require('../../modules/_core').Object.classof;
";
        
        $__internal_f73ae88c5adb332e26bb019fead6ab36bd8ff9623bf380cbaa728d475f0f5247->leave($__internal_f73ae88c5adb332e26bb019fead6ab36bd8ff9623bf380cbaa728d475f0f5247_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/classof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.object.classof');
module.exports = require('../../modules/_core').Object.classof;
", "node_modules/core-js/fn/object/classof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/classof.js");
    }
}
