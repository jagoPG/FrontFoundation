<?php

/* node_modules/es5-ext/test/array/#/indexes-of.js */
class __TwigTemplate_5c707584aff78d562429fc71f36671cb4577ce140f92d4bdcb0c4b7c69303033 extends Twig_Template
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
        $__internal_c64384f92145eb5f23864b17fe0efa3da34cad398a19fbf2079768b9baddc8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64384f92145eb5f23864b17fe0efa3da34cad398a19fbf2079768b9baddc8d0->enter($__internal_c64384f92145eb5f23864b17fe0efa3da34cad398a19fbf2079768b9baddc8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/indexes-of.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta.deep(t.call(this, this[1]), [1]);
\t},
\t\"\": function (t, a) {
\t\tvar x = {};
\t\ta.deep(t.call([1, 3, 5, 3, 5], 6), [], \"No result\");
\t\ta.deep(t.call([1, 3, 5, 1, 3, 5, 1], 1), [0, 3, 6], \"Some results\");
\t\ta.deep(t.call([], x), [], \"Empty array\");
\t\ta.deep(t.call([x, 3, {}, x, 3, 5, x], x), [0, 3, 6], \"Search for object\");
\t}
};
";
        
        $__internal_c64384f92145eb5f23864b17fe0efa3da34cad398a19fbf2079768b9baddc8d0->leave($__internal_c64384f92145eb5f23864b17fe0efa3da34cad398a19fbf2079768b9baddc8d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/indexes-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\ta.deep(t.call(this, this[1]), [1]);
\t},
\t\"\": function (t, a) {
\t\tvar x = {};
\t\ta.deep(t.call([1, 3, 5, 3, 5], 6), [], \"No result\");
\t\ta.deep(t.call([1, 3, 5, 1, 3, 5, 1], 1), [0, 3, 6], \"Some results\");
\t\ta.deep(t.call([], x), [], \"Empty array\");
\t\ta.deep(t.call([x, 3, {}, x, 3, 5, x], x), [0, 3, 6], \"Search for object\");
\t}
};
", "node_modules/es5-ext/test/array/#/indexes-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/indexes-of.js");
    }
}
