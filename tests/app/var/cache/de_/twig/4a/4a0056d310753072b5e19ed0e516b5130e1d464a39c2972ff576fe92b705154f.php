<?php

/* node_modules/babel-runtime/helpers/newArrowCheck.js */
class __TwigTemplate_f40e7021a7191294e83c25a574e12472fa2acde5f1ce0937726d6c352d53de9c extends Twig_Template
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
        $__internal_7a44a5565350df65af479118eda1071d81b94dfbac312e62c61e88417761a464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a44a5565350df65af479118eda1071d81b94dfbac312e62c61e88417761a464->enter($__internal_7a44a5565350df65af479118eda1071d81b94dfbac312e62c61e88417761a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/newArrowCheck.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

exports.default = function (innerThis, boundThis) {
  if (innerThis !== boundThis) {
    throw new TypeError(\"Cannot instantiate an arrow function\");
  }
};";
        
        $__internal_7a44a5565350df65af479118eda1071d81b94dfbac312e62c61e88417761a464->leave($__internal_7a44a5565350df65af479118eda1071d81b94dfbac312e62c61e88417761a464_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/newArrowCheck.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

exports.default = function (innerThis, boundThis) {
  if (innerThis !== boundThis) {
    throw new TypeError(\"Cannot instantiate an arrow function\");
  }
};", "node_modules/babel-runtime/helpers/newArrowCheck.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/newArrowCheck.js");
    }
}
