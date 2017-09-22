<?php

/* node_modules/es5-ext/test/math/cbrt/shim.js */
class __TwigTemplate_930d0ff84b68cd77ea8f1516694c7149da7449d7fb3eb2b72af790eca0a7835a extends Twig_Template
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
        $__internal_cb4a543e3a8f88910afed8f07d23ea84f864678347e5aa5b9e67d57fd2ccdf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4a543e3a8f88910afed8f07d23ea84f864678347e5aa5b9e67d57fd2ccdf02->enter($__internal_cb4a543e3a8f88910afed8f07d23ea84f864678347e5aa5b9e67d57fd2ccdf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/cbrt/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(t(-1), -1, \"-1\");
\ta(t(1), 1, \"1\");
\ta(t(2), 1.2599210498948732, \"Ohter\");
};
";
        
        $__internal_cb4a543e3a8f88910afed8f07d23ea84f864678347e5aa5b9e67d57fd2ccdf02->leave($__internal_cb4a543e3a8f88910afed8f07d23ea84f864678347e5aa5b9e67d57fd2ccdf02_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/cbrt/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(t(-1), -1, \"-1\");
\ta(t(1), 1, \"1\");
\ta(t(2), 1.2599210498948732, \"Ohter\");
};
", "node_modules/es5-ext/test/math/cbrt/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/cbrt/shim.js");
    }
}
