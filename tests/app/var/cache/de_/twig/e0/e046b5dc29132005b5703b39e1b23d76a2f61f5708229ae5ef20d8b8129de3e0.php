<?php

/* node_modules/es5-ext/test/array/#/filter/shim.js */
class __TwigTemplate_91a2d1241029fa85d4a3d0f8588739c0c1cb705504aae5843d72b968d66f1b45 extends Twig_Template
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
        $__internal_e43d5349c0119b5e8133740b7ea617eb45d84696dcec03f65532194544d904fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43d5349c0119b5e8133740b7ea617eb45d84696dcec03f65532194544d904fb->enter($__internal_e43d5349c0119b5e8133740b7ea617eb45d84696dcec03f65532194544d904fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/filter/shim.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr, x = {}, subArr, result;

\tarr = [\"foo\", undefined, 0, \"2d\", false, x, null];

\ta.deep(t.call(arr, Boolean), [\"foo\", \"2d\", x], \"Plain array\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, Boolean);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [\"foo\", \"2d\", x], \"Result of subclass\");
};
";
        
        $__internal_e43d5349c0119b5e8133740b7ea617eb45d84696dcec03f65532194544d904fb->leave($__internal_e43d5349c0119b5e8133740b7ea617eb45d84696dcec03f65532194544d904fb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/filter/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var SubArray = require(\"../../../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr, x = {}, subArr, result;

\tarr = [\"foo\", undefined, 0, \"2d\", false, x, null];

\ta.deep(t.call(arr, Boolean), [\"foo\", \"2d\", x], \"Plain array\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, Boolean);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [\"foo\", \"2d\", x], \"Result of subclass\");
};
", "node_modules/es5-ext/test/array/#/filter/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/filter/shim.js");
    }
}
