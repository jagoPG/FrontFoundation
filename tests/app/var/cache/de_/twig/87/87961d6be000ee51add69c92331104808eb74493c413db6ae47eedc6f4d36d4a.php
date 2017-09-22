<?php

/* node_modules/es5-ext/test/array/#/flatten.js */
class __TwigTemplate_d0ce1d8e8017e5c721a4953ec35f70347c52e0e634d1b265ab1bd336f5c08102 extends Twig_Template
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
        $__internal_06b05fd1747d2928a7de12382598ac994a8a768096c835ad858d772b8a3c4002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b05fd1747d2928a7de12382598ac994a8a768096c835ad858d772b8a3c4002->enter($__internal_06b05fd1747d2928a7de12382598ac994a8a768096c835ad858d772b8a3c4002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/flatten.js"));

        // line 1
        echo "\"use strict\";

var o = [1, 2, [3, 4, [5, 6], 7, 8], 9, 10, [11, 12, [13, 14]], 15];

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta(t.call(this).length, 3);
\t},
\t\"Nested Arrays\": function (t, a) {
\t\tvar result = t.call(o);
\t\ta.not(o, result);
\t\ta.deep(result, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]);
\t}
};
";
        
        $__internal_06b05fd1747d2928a7de12382598ac994a8a768096c835ad858d772b8a3c4002->leave($__internal_06b05fd1747d2928a7de12382598ac994a8a768096c835ad858d772b8a3c4002_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var o = [1, 2, [3, 4, [5, 6], 7, 8], 9, 10, [11, 12, [13, 14]], 15];

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta(t.call(this).length, 3);
\t},
\t\"Nested Arrays\": function (t, a) {
\t\tvar result = t.call(o);
\t\ta.not(o, result);
\t\ta.deep(result, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]);
\t}
};
", "node_modules/es5-ext/test/array/#/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/flatten.js");
    }
}
