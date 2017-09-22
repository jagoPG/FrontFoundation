<?php

/* node_modules/es5-ext/test/function/is-function.js */
class __TwigTemplate_f64228ffa1035188bc99ad96a0084185e5de5e7e596b2de1cf9231370c38a1a4 extends Twig_Template
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
        $__internal_8bf8523fcd75f0e9cfd53527327892d93f01bc28654ba80e92ed25743ab085db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf8523fcd75f0e9cfd53527327892d93f01bc28654ba80e92ed25743ab085db->enter($__internal_8bf8523fcd75f0e9cfd53527327892d93f01bc28654ba80e92ed25743ab085db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/is-function.js"));

        // line 1
        echo "\"use strict\";

var o = { call: Function.prototype.call, apply: Function.prototype.apply };

module.exports = function (t, a) {
\ta(t(function () {}), true, \"Function is function\");
\ta(t(o), false, \"Plain object is not function\");
};
";
        
        $__internal_8bf8523fcd75f0e9cfd53527327892d93f01bc28654ba80e92ed25743ab085db->leave($__internal_8bf8523fcd75f0e9cfd53527327892d93f01bc28654ba80e92ed25743ab085db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/is-function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var o = { call: Function.prototype.call, apply: Function.prototype.apply };

module.exports = function (t, a) {
\ta(t(function () {}), true, \"Function is function\");
\ta(t(o), false, \"Plain object is not function\");
};
", "node_modules/es5-ext/test/function/is-function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/is-function.js");
    }
}
