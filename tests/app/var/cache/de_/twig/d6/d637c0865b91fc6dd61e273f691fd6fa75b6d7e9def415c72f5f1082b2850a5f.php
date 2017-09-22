<?php

/* node_modules/es5-ext/test/array/#/map/shim.js */
class __TwigTemplate_16b195d03fe986844ef2e6a0eb4ac1e1b8dd1949e0f9561ed503df85a4c78dc4 extends Twig_Template
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
        $__internal_2d89ea281862973cbc55b5147a0f8835e9814321a1e81c850591ac4821de3c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d89ea281862973cbc55b5147a0f8835e9814321a1e81c850591ac4821de3c34->enter($__internal_2d89ea281862973cbc55b5147a0f8835e9814321a1e81c850591ac4821de3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/map/shim.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr, x = {}, subArr, result;

\tarr = [\"foo\", undefined, 0, \"2d\", false, x, null];

\ta.deep(t.call(arr, Boolean), [true, false, false, true, false, true, false],
\t\t\"Plain array\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, Boolean);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [true, false, false, true, false, true, false],
\t\t\"Result of subclass\");
};
";
        
        $__internal_2d89ea281862973cbc55b5147a0f8835e9814321a1e81c850591ac4821de3c34->leave($__internal_2d89ea281862973cbc55b5147a0f8835e9814321a1e81c850591ac4821de3c34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/map/shim.js";
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

\ta.deep(t.call(arr, Boolean), [true, false, false, true, false, true, false],
\t\t\"Plain array\");

\tsubArr = new SubArray(\"foo\", undefined, 0, \"2d\", false, x, null);

\tresult = t.call(subArr, Boolean);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [true, false, false, true, false, true, false],
\t\t\"Result of subclass\");
};
", "node_modules/es5-ext/test/array/#/map/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/map/shim.js");
    }
}
