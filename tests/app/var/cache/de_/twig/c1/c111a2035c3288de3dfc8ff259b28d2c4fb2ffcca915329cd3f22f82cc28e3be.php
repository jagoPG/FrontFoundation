<?php

/* node_modules/es5-ext/test/array/#/splice/shim.js */
class __TwigTemplate_e68281a0c7ebdde779718a781bd51bc3c28703c9ff0471c908a81aaebd25341d extends Twig_Template
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
        $__internal_295adaae2217a78500c4aaee6959dafdec0f325407647626659801ef99346b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295adaae2217a78500c4aaee6959dafdec0f325407647626659801ef99346b20->enter($__internal_295adaae2217a78500c4aaee6959dafdec0f325407647626659801ef99346b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/splice/shim.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr, x = {}, subArr, result;

\tarr = [\"foo\", undefined, 0, \"2d\", false, x, null];

\ta.deep(t.call(arr, 2, 2, \"bar\"), [0, \"2d\"], \"Plain array: result\");
\ta.deep(arr, [\"foo\", undefined, \"bar\", false, x, null], \"Plain array: change\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, 2, 2, \"bar\");
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [0, \"2d\"], \"Subclass: result\");
\ta.deep(subArr, [\"foo\", undefined, \"bar\", false, x, null], \"Subclass: change\");
};
";
        
        $__internal_295adaae2217a78500c4aaee6959dafdec0f325407647626659801ef99346b20->leave($__internal_295adaae2217a78500c4aaee6959dafdec0f325407647626659801ef99346b20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/splice/shim.js";
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

\ta.deep(t.call(arr, 2, 2, \"bar\"), [0, \"2d\"], \"Plain array: result\");
\ta.deep(arr, [\"foo\", undefined, \"bar\", false, x, null], \"Plain array: change\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, 2, 2, \"bar\");
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [0, \"2d\"], \"Subclass: result\");
\ta.deep(subArr, [\"foo\", undefined, \"bar\", false, x, null], \"Subclass: change\");
};
", "node_modules/es5-ext/test/array/#/splice/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/splice/shim.js");
    }
}
