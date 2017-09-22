<?php

/* node_modules/babel-runtime/helpers/classCallCheck.js */
class __TwigTemplate_c021ca80ff56984777409573b2da4242b97b65307ff719b8a64caab5b5ebd201 extends Twig_Template
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
        $__internal_91161d32b0ea760e32f48411e516a43d6fa0a797ae73ce2be0fa5750dca9e7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91161d32b0ea760e32f48411e516a43d6fa0a797ae73ce2be0fa5750dca9e7ca->enter($__internal_91161d32b0ea760e32f48411e516a43d6fa0a797ae73ce2be0fa5750dca9e7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/classCallCheck.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError(\"Cannot call a class as a function\");
  }
};";
        
        $__internal_91161d32b0ea760e32f48411e516a43d6fa0a797ae73ce2be0fa5750dca9e7ca->leave($__internal_91161d32b0ea760e32f48411e516a43d6fa0a797ae73ce2be0fa5750dca9e7ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/classCallCheck.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError(\"Cannot call a class as a function\");
  }
};", "node_modules/babel-runtime/helpers/classCallCheck.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/classCallCheck.js");
    }
}
