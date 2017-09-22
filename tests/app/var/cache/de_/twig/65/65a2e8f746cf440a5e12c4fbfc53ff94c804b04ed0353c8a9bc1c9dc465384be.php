<?php

/* node_modules/es5-ext/test/math/hypot/shim.js */
class __TwigTemplate_da328817102c1b4f712d2d9bbd5799e5b3392a9276db794652e582737ff99207 extends Twig_Template
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
        $__internal_3363be5f13d27ce0b6a0f45a91c3b38ae583e52f1d246ed37f1ee64cf938e508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3363be5f13d27ce0b6a0f45a91c3b38ae583e52f1d246ed37f1ee64cf938e508->enter($__internal_3363be5f13d27ce0b6a0f45a91c3b38ae583e52f1d246ed37f1ee64cf938e508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/hypot/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(), 0, \"No arguments\");
\ta(t(0, -0, 0), 0, \"Zeros\");
\ta(t(4, NaN, Infinity), Infinity, \"Infinity\");
\ta(t(4, NaN, -Infinity), Infinity, \"Infinity\");
\ta(t(4, NaN, 34), NaN, \"NaN\");
\ta(t(3, 4), 5, \"#1\");
\ta(t(3, 4, 5), 7.0710678118654755, \"#2\");
};
";
        
        $__internal_3363be5f13d27ce0b6a0f45a91c3b38ae583e52f1d246ed37f1ee64cf938e508->leave($__internal_3363be5f13d27ce0b6a0f45a91c3b38ae583e52f1d246ed37f1ee64cf938e508_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/hypot/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(), 0, \"No arguments\");
\ta(t(0, -0, 0), 0, \"Zeros\");
\ta(t(4, NaN, Infinity), Infinity, \"Infinity\");
\ta(t(4, NaN, -Infinity), Infinity, \"Infinity\");
\ta(t(4, NaN, 34), NaN, \"NaN\");
\ta(t(3, 4), 5, \"#1\");
\ta(t(3, 4, 5), 7.0710678118654755, \"#2\");
};
", "node_modules/es5-ext/test/math/hypot/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/hypot/shim.js");
    }
}
