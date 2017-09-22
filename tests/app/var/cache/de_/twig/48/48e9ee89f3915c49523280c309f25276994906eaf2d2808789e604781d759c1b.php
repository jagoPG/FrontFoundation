<?php

/* node_modules/es5-ext/test/array/#/slice/shim.js */
class __TwigTemplate_3cf0e6d87b1208affb372811a2bf1537b7e91322de75d204b9b329cfd5289e16 extends Twig_Template
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
        $__internal_68b77d92a11a7b2886851d438e8364405910d48161be703c648d7909075e6cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b77d92a11a7b2886851d438e8364405910d48161be703c648d7909075e6cfa->enter($__internal_68b77d92a11a7b2886851d438e8364405910d48161be703c648d7909075e6cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/slice/shim.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr, x = {}, subArr, result;

\tarr = [\"foo\", undefined, 0, \"2d\", false, x, null];

\ta.deep(t.call(arr, 2, 4), [0, \"2d\"], \"Plain array: result\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, 2, 4);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [0, \"2d\"], \"Subclass: result\");
};
";
        
        $__internal_68b77d92a11a7b2886851d438e8364405910d48161be703c648d7909075e6cfa->leave($__internal_68b77d92a11a7b2886851d438e8364405910d48161be703c648d7909075e6cfa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/slice/shim.js";
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

\ta.deep(t.call(arr, 2, 4), [0, \"2d\"], \"Plain array: result\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, 2, 4);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [0, \"2d\"], \"Subclass: result\");
};
", "node_modules/es5-ext/test/array/#/slice/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/slice/shim.js");
    }
}
