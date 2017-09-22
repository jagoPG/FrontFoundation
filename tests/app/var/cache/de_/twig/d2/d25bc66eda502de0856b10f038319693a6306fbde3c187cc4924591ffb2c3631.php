<?php

/* node_modules/babel-runtime/helpers/_object-without-properties.js */
class __TwigTemplate_dd43121873e5a63c89249b27fac604ef6e5d9e680a2ea53eba59f20eb41ebaa6 extends Twig_Template
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
        $__internal_a8ef4f9b580bbdf292e358b474585253194b360e60f86d7d458835d3be041f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ef4f9b580bbdf292e358b474585253194b360e60f86d7d458835d3be041f72->enter($__internal_a8ef4f9b580bbdf292e358b474585253194b360e60f86d7d458835d3be041f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_object-without-properties.js"));

        // line 1
        echo "module.exports = require(\"./objectWithoutProperties.js\");";
        
        $__internal_a8ef4f9b580bbdf292e358b474585253194b360e60f86d7d458835d3be041f72->leave($__internal_a8ef4f9b580bbdf292e358b474585253194b360e60f86d7d458835d3be041f72_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_object-without-properties.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./objectWithoutProperties.js\");", "node_modules/babel-runtime/helpers/_object-without-properties.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_object-without-properties.js");
    }
}
