<?php

/* node_modules/babel-runtime/helpers/temporal-ref.js */
class __TwigTemplate_ce69d98943ebaef12c0f7283385ce99dd6dc0b79b08f32de938ad6b8296cdfab extends Twig_Template
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
        $__internal_169e025e6fc3d066d16bb2c411dacb3e5c3454a592244a4c2e601e28fcc4abe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169e025e6fc3d066d16bb2c411dacb3e5c3454a592244a4c2e601e28fcc4abe7->enter($__internal_169e025e6fc3d066d16bb2c411dacb3e5c3454a592244a4c2e601e28fcc4abe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/temporal-ref.js"));

        // line 1
        echo "module.exports = require(\"./temporalRef.js\");";
        
        $__internal_169e025e6fc3d066d16bb2c411dacb3e5c3454a592244a4c2e601e28fcc4abe7->leave($__internal_169e025e6fc3d066d16bb2c411dacb3e5c3454a592244a4c2e601e28fcc4abe7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/temporal-ref.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./temporalRef.js\");", "node_modules/babel-runtime/helpers/temporal-ref.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/temporal-ref.js");
    }
}
