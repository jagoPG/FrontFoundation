<?php

/* node_modules/core-js/library/es7/weak-map.js */
class __TwigTemplate_9d71ed076b62ef3512a1ff08f37cb91a17005f2c73ff9def7a7d450d11dac9ea extends Twig_Template
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
        $__internal_d1adec8e2f26b7d9dbeec53dc8060278120ec72d18bee62b52672e3d2ad4496a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1adec8e2f26b7d9dbeec53dc8060278120ec72d18bee62b52672e3d2ad4496a->enter($__internal_d1adec8e2f26b7d9dbeec53dc8060278120ec72d18bee62b52672e3d2ad4496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/weak-map.js"));

        // line 1
        echo "require('../modules/es7.weak-map.of');
require('../modules/es7.weak-map.from');
module.exports = require('../modules/_core').WeakMap;
";
        
        $__internal_d1adec8e2f26b7d9dbeec53dc8060278120ec72d18bee62b52672e3d2ad4496a->leave($__internal_d1adec8e2f26b7d9dbeec53dc8060278120ec72d18bee62b52672e3d2ad4496a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/weak-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.weak-map.of');
require('../modules/es7.weak-map.from');
module.exports = require('../modules/_core').WeakMap;
", "node_modules/core-js/library/es7/weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/weak-map.js");
    }
}
