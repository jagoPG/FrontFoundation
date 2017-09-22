<?php

/* node_modules/es5-ext/reg-exp/#/split/implement.js */
class __TwigTemplate_0d10c6943be7835aed66a80fe30e9571250bbeebe3f5cc449a8e06c4fe34533a extends Twig_Template
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
        $__internal_6e6dcba5a5666fbd696b41bd4ddbd52c8a60a89ae15a3c46dc1183a39b80f83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6dcba5a5666fbd696b41bd4ddbd52c8a60a89ae15a3c46dc1183a39b80f83b->enter($__internal_6e6dcba5a5666fbd696b41bd4ddbd52c8a60a89ae15a3c46dc1183a39b80f83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/split/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"split\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_6e6dcba5a5666fbd696b41bd4ddbd52c8a60a89ae15a3c46dc1183a39b80f83b->leave($__internal_6e6dcba5a5666fbd696b41bd4ddbd52c8a60a89ae15a3c46dc1183a39b80f83b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/split/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"split\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/reg-exp/#/split/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/split/implement.js");
    }
}
