<?php

/* node_modules/es5-ext/test/array/#/binary-search.js */
class __TwigTemplate_4cbd401f3fbe133f2e53b080b1bf14dedebc725373cbe47635006f7feedf99c5 extends Twig_Template
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
        $__internal_4b50a9e6d2e09e6ce95e5353b6bde35eae8a6aa86e5e5ea753eee20f75855a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b50a9e6d2e09e6ce95e5353b6bde35eae8a6aa86e5e5ea753eee20f75855a75->enter($__internal_4b50a9e6d2e09e6ce95e5353b6bde35eae8a6aa86e5e5ea753eee20f75855a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/binary-search.js"));

        // line 1
        echo "\"use strict\";

var compare  = function (value) {
 return this - value;
};

module.exports = function (t, a) {
\tvar arr;
\tarr = [2, 5, 5, 8, 34, 67, 98, 345, 678];

\t// Highest, equal match
\ta(t.call(arr, compare.bind(1)), 0, \"All higher\");
\ta(t.call(arr, compare.bind(679)), arr.length - 1, \"All lower\");
\ta(t.call(arr, compare.bind(4)), 0, \"Mid\");
\ta(t.call(arr, compare.bind(5)), 2, \"Match\");
\ta(t.call(arr, compare.bind(6)), 2, \"Above\");
};
";
        
        $__internal_4b50a9e6d2e09e6ce95e5353b6bde35eae8a6aa86e5e5ea753eee20f75855a75->leave($__internal_4b50a9e6d2e09e6ce95e5353b6bde35eae8a6aa86e5e5ea753eee20f75855a75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/binary-search.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var compare  = function (value) {
 return this - value;
};

module.exports = function (t, a) {
\tvar arr;
\tarr = [2, 5, 5, 8, 34, 67, 98, 345, 678];

\t// Highest, equal match
\ta(t.call(arr, compare.bind(1)), 0, \"All higher\");
\ta(t.call(arr, compare.bind(679)), arr.length - 1, \"All lower\");
\ta(t.call(arr, compare.bind(4)), 0, \"Mid\");
\ta(t.call(arr, compare.bind(5)), 2, \"Match\");
\ta(t.call(arr, compare.bind(6)), 2, \"Above\");
};
", "node_modules/es5-ext/test/array/#/binary-search.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/binary-search.js");
    }
}
