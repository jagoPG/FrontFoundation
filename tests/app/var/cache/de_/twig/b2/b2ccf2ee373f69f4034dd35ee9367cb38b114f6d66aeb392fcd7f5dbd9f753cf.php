<?php

/* node_modules/es5-ext/date/#/floor-year.js */
class __TwigTemplate_f470b309323b4f046a81dbf7f4c098a334458e77e232f67e15ade498b3f8be5b extends Twig_Template
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
        $__internal_91c9214bc18aa9fa1c05442179b9dbe312f194a45be3af565fc4704f658740f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c9214bc18aa9fa1c05442179b9dbe312f194a45be3af565fc4704f658740f6->enter($__internal_91c9214bc18aa9fa1c05442179b9dbe312f194a45be3af565fc4704f658740f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/#/floor-year.js"));

        // line 1
        echo "\"use strict\";

var floorMonth = require(\"./floor-month\");

module.exports = function () {
\tfloorMonth.call(this).setMonth(0);
\treturn this;
};
";
        
        $__internal_91c9214bc18aa9fa1c05442179b9dbe312f194a45be3af565fc4704f658740f6->leave($__internal_91c9214bc18aa9fa1c05442179b9dbe312f194a45be3af565fc4704f658740f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/#/floor-year.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var floorMonth = require(\"./floor-month\");

module.exports = function () {
\tfloorMonth.call(this).setMonth(0);
\treturn this;
};
", "node_modules/es5-ext/date/#/floor-year.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/#/floor-year.js");
    }
}
