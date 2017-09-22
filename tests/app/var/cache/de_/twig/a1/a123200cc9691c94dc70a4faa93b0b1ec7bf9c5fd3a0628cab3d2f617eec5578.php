<?php

/* node_modules/es5-ext/object/valid-callable.js */
class __TwigTemplate_63196d7d1691ecd2460b1cedb002c0e1fd51a29a677c03361fb84736964e0bb6 extends Twig_Template
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
        $__internal_dd61e157cf3120fe1d6aafee6261c8b6ec13f4dd2f35d0bcd0d0d857405f62ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd61e157cf3120fe1d6aafee6261c8b6ec13f4dd2f35d0bcd0d0d857405f62ee->enter($__internal_dd61e157cf3120fe1d6aafee6261c8b6ec13f4dd2f35d0bcd0d0d857405f62ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/valid-callable.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (fn) {
\tif (typeof fn !== \"function\") throw new TypeError(fn + \" is not a function\");
\treturn fn;
};
";
        
        $__internal_dd61e157cf3120fe1d6aafee6261c8b6ec13f4dd2f35d0bcd0d0d857405f62ee->leave($__internal_dd61e157cf3120fe1d6aafee6261c8b6ec13f4dd2f35d0bcd0d0d857405f62ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/valid-callable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (fn) {
\tif (typeof fn !== \"function\") throw new TypeError(fn + \" is not a function\");
\treturn fn;
};
", "node_modules/es5-ext/object/valid-callable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/valid-callable.js");
    }
}
