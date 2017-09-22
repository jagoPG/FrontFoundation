<?php

/* node_modules/core-js/library/fn/reflect/is-extensible.js */
class __TwigTemplate_f58eadc4aa618f5c1bb99f85db758efc7d6a934a32f0948ccb5eea7aa4f45b45 extends Twig_Template
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
        $__internal_b4a58738165e3bccee395ceac860658e3a0bc7948da6ed89a32fd34e306f78dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a58738165e3bccee395ceac860658e3a0bc7948da6ed89a32fd34e306f78dd->enter($__internal_b4a58738165e3bccee395ceac860658e3a0bc7948da6ed89a32fd34e306f78dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/is-extensible.js"));

        // line 1
        echo "require('../../modules/es6.reflect.is-extensible');
module.exports = require('../../modules/_core').Reflect.isExtensible;
";
        
        $__internal_b4a58738165e3bccee395ceac860658e3a0bc7948da6ed89a32fd34e306f78dd->leave($__internal_b4a58738165e3bccee395ceac860658e3a0bc7948da6ed89a32fd34e306f78dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.is-extensible');
module.exports = require('../../modules/_core').Reflect.isExtensible;
", "node_modules/core-js/library/fn/reflect/is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/is-extensible.js");
    }
}
