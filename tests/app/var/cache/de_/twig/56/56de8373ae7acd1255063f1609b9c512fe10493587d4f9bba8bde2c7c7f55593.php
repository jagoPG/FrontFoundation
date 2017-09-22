<?php

/* node_modules/es5-ext/test/reg-exp/valid-reg-exp.js */
class __TwigTemplate_ae3c0027fbb3cf52f7c84a71d5bdfd6facad3d697fd171d2137a77b35e64cf25 extends Twig_Template
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
        $__internal_18e841aab97c941c49a09ef940e260a1079f0f876048caef3a4315feca7e0399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e841aab97c941c49a09ef940e260a1079f0f876048caef3a4315feca7e0399->enter($__internal_18e841aab97c941c49a09ef940e260a1079f0f876048caef3a4315feca7e0399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/valid-reg-exp.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar r = /raz/;
\ta(t(r), r, \"Direct\");
\tr = new RegExp(\"foo\");
\ta(t(r), r, \"Constructor\");
\ta.throws(function () {
\t\tt({});
\t}, \"Object\");
\ta.throws(function () {
\t\tt(function () {});
\t}, \"Function\");
\ta.throws(function () {
\t\tt({ exec: function () {
 return 20;
} });
\t}, \"Plain object\");
};
";
        
        $__internal_18e841aab97c941c49a09ef940e260a1079f0f876048caef3a4315feca7e0399->leave($__internal_18e841aab97c941c49a09ef940e260a1079f0f876048caef3a4315feca7e0399_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/valid-reg-exp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar r = /raz/;
\ta(t(r), r, \"Direct\");
\tr = new RegExp(\"foo\");
\ta(t(r), r, \"Constructor\");
\ta.throws(function () {
\t\tt({});
\t}, \"Object\");
\ta.throws(function () {
\t\tt(function () {});
\t}, \"Function\");
\ta.throws(function () {
\t\tt({ exec: function () {
 return 20;
} });
\t}, \"Plain object\");
};
", "node_modules/es5-ext/test/reg-exp/valid-reg-exp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/valid-reg-exp.js");
    }
}
