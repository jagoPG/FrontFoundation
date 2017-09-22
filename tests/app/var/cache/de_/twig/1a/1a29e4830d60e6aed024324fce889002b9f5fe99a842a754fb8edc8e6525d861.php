<?php

/* node_modules/es5-ext/test/math/trunc/shim.js */
class __TwigTemplate_750218e3d959e7997080dd902297910415dfd1c0c67e59479efebbf63f63fcc8 extends Twig_Template
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
        $__internal_7207d02c657a77eb39dbeabb1edf7b274426b4db252d0aa54eacfa396da2f634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7207d02c657a77eb39dbeabb1edf7b274426b4db252d0aa54eacfa396da2f634->enter($__internal_7207d02c657a77eb39dbeabb1edf7b274426b4db252d0aa54eacfa396da2f634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/trunc/shim.js"));

        // line 1
        echo "\"use strict\";

var is = require(\"../../../object/is\");

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(is(t(0.234), 0), true, \"0\");
\ta(is(t(-0.234), -0), true, \"-0\");
\ta(t(13.7), 13, \"Positive #1\");
\ta(t(12.3), 12, \"Positive #2\");
\ta(t(-12.3), -12, \"Negative #1\");
\ta(t(-14.7), -14, \"Negative #2\");
};
";
        
        $__internal_7207d02c657a77eb39dbeabb1edf7b274426b4db252d0aa54eacfa396da2f634->leave($__internal_7207d02c657a77eb39dbeabb1edf7b274426b4db252d0aa54eacfa396da2f634_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/trunc/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var is = require(\"../../../object/is\");

module.exports = function (t, a) {
\ta(t({}), NaN, \"NaN\");
\ta(t(0), 0, \"Zero\");
\ta(t(Infinity), Infinity, \"Infinity\");
\ta(t(-Infinity), -Infinity, \"-Infinity\");
\ta(is(t(0.234), 0), true, \"0\");
\ta(is(t(-0.234), -0), true, \"-0\");
\ta(t(13.7), 13, \"Positive #1\");
\ta(t(12.3), 12, \"Positive #2\");
\ta(t(-12.3), -12, \"Negative #1\");
\ta(t(-14.7), -14, \"Negative #2\");
};
", "node_modules/es5-ext/test/math/trunc/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/trunc/shim.js");
    }
}
