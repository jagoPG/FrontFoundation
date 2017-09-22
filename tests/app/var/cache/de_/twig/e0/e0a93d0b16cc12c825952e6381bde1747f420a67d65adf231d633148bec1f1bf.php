<?php

/* node_modules/es5-ext/test/object/is-number-value.js */
class __TwigTemplate_ce0c8a8f3a23d1ee15d1e069c18dcfb8b3f1190c0ccddfd08f77fce4bd7bb51a extends Twig_Template
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
        $__internal_8a15737ff78615d055b97261fb09de2ed2a48038da8eae99bdeed9c1a629c22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a15737ff78615d055b97261fb09de2ed2a48038da8eae99bdeed9c1a629c22e->enter($__internal_8a15737ff78615d055b97261fb09de2ed2a48038da8eae99bdeed9c1a629c22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/is-number-value.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(undefined), false, \"Undefined\");
\ta(t(null), false, \"Null\");
\ta(t(0), true, \"Zero\");
\ta(t(NaN), false, \"NaN\");
\ta(t(Infinity), true, \"Infinity\");
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
        
        $__internal_8a15737ff78615d055b97261fb09de2ed2a48038da8eae99bdeed9c1a629c22e->leave($__internal_8a15737ff78615d055b97261fb09de2ed2a48038da8eae99bdeed9c1a629c22e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/is-number-value.js";
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
\ta(t(Infinity), true, \"Infinity\");
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
", "node_modules/es5-ext/test/object/is-number-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/is-number-value.js");
    }
}
