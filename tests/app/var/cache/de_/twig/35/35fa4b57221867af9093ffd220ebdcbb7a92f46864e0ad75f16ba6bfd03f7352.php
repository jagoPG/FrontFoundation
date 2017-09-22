<?php

/* node_modules/es5-ext/test/array/#/is-copy.js */
class __TwigTemplate_2c2a629a9340dafd535882327e82d25223176e8ad5b90e696c201d71a494dc23 extends Twig_Template
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
        $__internal_e57d2ce0c1f1d263b32a78f5ff42e3a661767184771a955a4d6b89c32ee752da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57d2ce0c1f1d263b32a78f5ff42e3a661767184771a955a4d6b89c32ee752da->enter($__internal_e57d2ce0c1f1d263b32a78f5ff42e3a661767184771a955a4d6b89c32ee752da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/is-copy.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([], []), true, \"Empty\");
\ta(t.call([], {}), true, \"Empty lists\");
\ta(t.call([1, x, \"raz\"], [1, x, \"raz\"]), true, \"Same\");
\ta(t.call([1, x, \"raz\"], { 0: 1, 1: x, 2: \"raz\", length: 3 }), true,
\t\t\t\"Same lists\");
\ta(t.call([1, x, \"raz\"], [x, 1, \"raz\"]), false, \"Diff order\");
\ta(t.call([1, x], [1, x, \"raz\"]), false, \"Diff length #1\");
\ta(t.call([1, x, \"raz\"], [1, x]), false, \"Diff length #2\");
};
";
        
        $__internal_e57d2ce0c1f1d263b32a78f5ff42e3a661767184771a955a4d6b89c32ee752da->leave($__internal_e57d2ce0c1f1d263b32a78f5ff42e3a661767184771a955a4d6b89c32ee752da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/is-copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([], []), true, \"Empty\");
\ta(t.call([], {}), true, \"Empty lists\");
\ta(t.call([1, x, \"raz\"], [1, x, \"raz\"]), true, \"Same\");
\ta(t.call([1, x, \"raz\"], { 0: 1, 1: x, 2: \"raz\", length: 3 }), true,
\t\t\t\"Same lists\");
\ta(t.call([1, x, \"raz\"], [x, 1, \"raz\"]), false, \"Diff order\");
\ta(t.call([1, x], [1, x, \"raz\"]), false, \"Diff length #1\");
\ta(t.call([1, x, \"raz\"], [1, x]), false, \"Diff length #2\");
};
", "node_modules/es5-ext/test/array/#/is-copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/is-copy.js");
    }
}
