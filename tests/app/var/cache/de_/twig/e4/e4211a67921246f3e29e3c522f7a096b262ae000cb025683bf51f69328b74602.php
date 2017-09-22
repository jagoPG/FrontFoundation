<?php

/* node_modules/core-js/library/fn/object/keys.js */
class __TwigTemplate_ca9dd4558271f9407754b48df9e3951aa468d1ce7b1f33162e7ecc104d635724 extends Twig_Template
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
        $__internal_df9c6905ad1fe2a782647de99061313cefcd69e06d465a49ed8aed7cc00bbb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9c6905ad1fe2a782647de99061313cefcd69e06d465a49ed8aed7cc00bbb66->enter($__internal_df9c6905ad1fe2a782647de99061313cefcd69e06d465a49ed8aed7cc00bbb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/keys.js"));

        // line 1
        echo "require('../../modules/es6.object.keys');
module.exports = require('../../modules/_core').Object.keys;
";
        
        $__internal_df9c6905ad1fe2a782647de99061313cefcd69e06d465a49ed8aed7cc00bbb66->leave($__internal_df9c6905ad1fe2a782647de99061313cefcd69e06d465a49ed8aed7cc00bbb66_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.keys');
module.exports = require('../../modules/_core').Object.keys;
", "node_modules/core-js/library/fn/object/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/keys.js");
    }
}
