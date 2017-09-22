<?php

/* node_modules/es5-ext/test/array/#/concat/shim.js */
class __TwigTemplate_4dfa5f93d23bb6270adad1a67dd6fcd681436a539adec66eb6ec3f65144b8ff3 extends Twig_Template
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
        $__internal_f727c54cfdd762c80032c715a934d3a48e0bb5e5e59403b5cef68592672534e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f727c54cfdd762c80032c715a934d3a48e0bb5e5e59403b5cef68592672534e4->enter($__internal_f727c54cfdd762c80032c715a934d3a48e0bb5e5e59403b5cef68592672534e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/concat/shim.js"));

        // line 1
        echo "\"use strict\";

var isConcatSpreadable = require(\"es6-symbol\").isConcatSpreadable
  , SubArray           = require(\"../../../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr = [1, 3, 45], x = {}, subArr, subArr2, result;

\ta.deep(t.call(arr, \"2d\", x, [\"ere\", \"fe\", x], false, null),
\t\t[1, 3, 45, \"2d\", x, \"ere\", \"fe\", x, false, null], \"Plain array\");

\tsubArr = new SubArray(\"lol\", \"miszko\");
\tsubArr2 = new SubArray(\"elo\", \"fol\");

\tresult = t.call(subArr, \"df\", arr, \"fef\", subArr2, null);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [\"lol\", \"miszko\", \"df\", 1, 3, 45, \"fef\", \"elo\", \"fol\", null],
\t\t\"Spreable by default\");

\tSubArray.prototype[isConcatSpreadable] = false;

\tresult = t.call(subArr, \"df\", arr, \"fef\", subArr2, null);
\ta.deep(result, [subArr, \"df\", 1, 3, 45, \"fef\", subArr2, null], \"Non spreadable\");

\tdelete SubArray.prototype[isConcatSpreadable];
};
";
        
        $__internal_f727c54cfdd762c80032c715a934d3a48e0bb5e5e59403b5cef68592672534e4->leave($__internal_f727c54cfdd762c80032c715a934d3a48e0bb5e5e59403b5cef68592672534e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/concat/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isConcatSpreadable = require(\"es6-symbol\").isConcatSpreadable
  , SubArray           = require(\"../../../../array/_sub-array-dummy-safe\");

module.exports = function (t, a) {
\tvar arr = [1, 3, 45], x = {}, subArr, subArr2, result;

\ta.deep(t.call(arr, \"2d\", x, [\"ere\", \"fe\", x], false, null),
\t\t[1, 3, 45, \"2d\", x, \"ere\", \"fe\", x, false, null], \"Plain array\");

\tsubArr = new SubArray(\"lol\", \"miszko\");
\tsubArr2 = new SubArray(\"elo\", \"fol\");

\tresult = t.call(subArr, \"df\", arr, \"fef\", subArr2, null);
\ta(result instanceof SubArray, true, \"Instance of subclass\");
\ta.deep(result, [\"lol\", \"miszko\", \"df\", 1, 3, 45, \"fef\", \"elo\", \"fol\", null],
\t\t\"Spreable by default\");

\tSubArray.prototype[isConcatSpreadable] = false;

\tresult = t.call(subArr, \"df\", arr, \"fef\", subArr2, null);
\ta.deep(result, [subArr, \"df\", 1, 3, 45, \"fef\", subArr2, null], \"Non spreadable\");

\tdelete SubArray.prototype[isConcatSpreadable];
};
", "node_modules/es5-ext/test/array/#/concat/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/concat/shim.js");
    }
}
