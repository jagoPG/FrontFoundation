<?php

/* node_modules/es5-ext/test/object/is-finite-number.js */
class __TwigTemplate_04f954a30d2d47e233d3d9eb301db06f9b37a154002d279d414603d58b7a4b22 extends Twig_Template
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
        $__internal_312e77bce0befcca7b175100df1ff6e52ba88f3ee9dff18836a7d3982722a032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312e77bce0befcca7b175100df1ff6e52ba88f3ee9dff18836a7d3982722a032->enter($__internal_312e77bce0befcca7b175100df1ff6e52ba88f3ee9dff18836a7d3982722a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-finite-number.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(0), true, \"Zero\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
\ta(t(12), true, \"Number\");
\ta(t(false), true, \"Boolean\");
\ta(t(new Date()), true, \"Date\");
\ta(t(new Number(2)), true, \"Number object\");
\ta(t(\"asdfaf\"), false, \"String\");
\ta(t(\"\"), true, \"Empty String\");
\tif (typeof Symbol === \"function\") {
\t\ta(t(Symbol(\"test\")), false, \"Symbol\");
\t}
};
";
        
        $__internal_312e77bce0befcca7b175100df1ff6e52ba88f3ee9dff18836a7d3982722a032->leave($__internal_312e77bce0befcca7b175100df1ff6e52ba88f3ee9dff18836a7d3982722a032_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-finite-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(0), true, \"Zero\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), false, \"Infinity\");
\ta(t(12), true, \"Number\");
\ta(t(false), true, \"Boolean\");
\ta(t(new Date()), true, \"Date\");
\ta(t(new Number(2)), true, \"Number object\");
\ta(t(\"asdfaf\"), false, \"String\");
\ta(t(\"\"), true, \"Empty String\");
\tif (typeof Symbol === \"function\") {
\t\ta(t(Symbol(\"test\")), false, \"Symbol\");
\t}
};
", "node_modules/es5-ext/test/object/is-finite-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-finite-number.js");
    }
}
