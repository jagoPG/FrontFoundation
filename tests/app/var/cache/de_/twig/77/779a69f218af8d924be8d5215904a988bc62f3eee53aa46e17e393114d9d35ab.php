<?php

/* node_modules/es5-ext/test/object/ensure-natural-number.js */
class __TwigTemplate_60063d6410b4bda1f7a8b6524f4195b05291e5def626e314a0f9d60e59b8a20c extends Twig_Template
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
        $__internal_1359251c57d3a5ac7bb09ecb81841ec1e94a53cb686ce159cf79dea4961562f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1359251c57d3a5ac7bb09ecb81841ec1e94a53cb686ce159cf79dea4961562f7->enter($__internal_1359251c57d3a5ac7bb09ecb81841ec1e94a53cb686ce159cf79dea4961562f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/ensure-natural-number.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.throws(function () {
 t(undefined);
}, TypeError, \"Undefined\");
\ta(t(null), 0, \"Null\");
\ta(t(2), 2, \"Number\");
\ta.throws(function () {
 t(-2);
}, TypeError, \"Negative\");
\ta.throws(function () {
 t(2.34);
}, TypeError, \"Float\");
\ta(t(\"23\"), 23, \"Numeric string\");
\ta.throws(function () {
 t(NaN);
}, TypeError, \"NaN\");
\ta.throws(function () {
 t(Infinity);
}, TypeError, \"Infinity\");
};
";
        
        $__internal_1359251c57d3a5ac7bb09ecb81841ec1e94a53cb686ce159cf79dea4961562f7->leave($__internal_1359251c57d3a5ac7bb09ecb81841ec1e94a53cb686ce159cf79dea4961562f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/ensure-natural-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.throws(function () {
 t(undefined);
}, TypeError, \"Undefined\");
\ta(t(null), 0, \"Null\");
\ta(t(2), 2, \"Number\");
\ta.throws(function () {
 t(-2);
}, TypeError, \"Negative\");
\ta.throws(function () {
 t(2.34);
}, TypeError, \"Float\");
\ta(t(\"23\"), 23, \"Numeric string\");
\ta.throws(function () {
 t(NaN);
}, TypeError, \"NaN\");
\ta.throws(function () {
 t(Infinity);
}, TypeError, \"Infinity\");
};
", "node_modules/es5-ext/test/object/ensure-natural-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/ensure-natural-number.js");
    }
}
