<?php

/* node_modules/es5-ext/reg-exp/#/unicode/implement.js */
class __TwigTemplate_30b679228648086d8be95625165a1fb6f41cb5bc08bbe908163876f15e0b4603 extends Twig_Template
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
        $__internal_b75622ffe561ba732de52d5ef7cbd962a93bc675b4abd8852bb2a073d4c3e168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75622ffe561ba732de52d5ef7cbd962a93bc675b4abd8852bb2a073d4c3e168->enter($__internal_b75622ffe561ba732de52d5ef7cbd962a93bc675b4abd8852bb2a073d4c3e168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/unicode/implement.js"));

        // line 1
        echo "\"use strict\";

var isUnicode = require(\"../is-unicode\");

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"unicode\", { configurable: true,
\t\tenumerable: false,
get: isUnicode });
}
";
        
        $__internal_b75622ffe561ba732de52d5ef7cbd962a93bc675b4abd8852bb2a073d4c3e168->leave($__internal_b75622ffe561ba732de52d5ef7cbd962a93bc675b4abd8852bb2a073d4c3e168_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/unicode/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isUnicode = require(\"../is-unicode\");

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"unicode\", { configurable: true,
\t\tenumerable: false,
get: isUnicode });
}
", "node_modules/es5-ext/reg-exp/#/unicode/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/unicode/implement.js");
    }
}
