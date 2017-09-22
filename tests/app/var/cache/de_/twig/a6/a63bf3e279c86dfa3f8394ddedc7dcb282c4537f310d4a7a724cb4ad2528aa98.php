<?php

/* node_modules/core-js/es7/weak-map.js */
class __TwigTemplate_152c945d028c92a982226468ebf7d4d3a57c9e62800b476b5aa7efee8db68e4c extends Twig_Template
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
        $__internal_710b4abcb4276c417372f7f098fefb5f27712182a4d63e6f1b5185285a729a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710b4abcb4276c417372f7f098fefb5f27712182a4d63e6f1b5185285a729a0d->enter($__internal_710b4abcb4276c417372f7f098fefb5f27712182a4d63e6f1b5185285a729a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/weak-map.js"));

        // line 1
        echo "require('../modules/es7.weak-map.of');
require('../modules/es7.weak-map.from');
module.exports = require('../modules/_core').WeakMap;
";
        
        $__internal_710b4abcb4276c417372f7f098fefb5f27712182a4d63e6f1b5185285a729a0d->leave($__internal_710b4abcb4276c417372f7f098fefb5f27712182a4d63e6f1b5185285a729a0d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/weak-map.js";
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
", "node_modules/core-js/es7/weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/weak-map.js");
    }
}
