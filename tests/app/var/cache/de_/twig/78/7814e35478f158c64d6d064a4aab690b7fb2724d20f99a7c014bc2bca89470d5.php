<?php

/* node_modules/lodash/fp/throttle.js */
class __TwigTemplate_095bd56552fc63e2221e9456719793e3d41f3c0cd7da5c911b097bc4ad6b00f7 extends Twig_Template
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
        $__internal_48f274ed458a398f11c1f16f0f77673880ef5e938c7b84574d9ccff19fd4a760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f274ed458a398f11c1f16f0f77673880ef5e938c7b84574d9ccff19fd4a760->enter($__internal_48f274ed458a398f11c1f16f0f77673880ef5e938c7b84574d9ccff19fd4a760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/throttle.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('throttle', require('../throttle'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_48f274ed458a398f11c1f16f0f77673880ef5e938c7b84574d9ccff19fd4a760->leave($__internal_48f274ed458a398f11c1f16f0f77673880ef5e938c7b84574d9ccff19fd4a760_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/throttle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('throttle', require('../throttle'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/throttle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/throttle.js");
    }
}
