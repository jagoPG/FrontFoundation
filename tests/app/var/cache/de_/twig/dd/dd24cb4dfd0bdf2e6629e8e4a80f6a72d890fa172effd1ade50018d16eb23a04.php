<?php

/* node_modules/es5-ext/test/array/#/e-last-index-of.js */
class __TwigTemplate_2d52e860564464a659748116ccb704a569c09efa83734304cc454e4c5c3e39e7 extends Twig_Template
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
        $__internal_15ec8a610333de1d6c9750df38219f0c4ed9058465ef998da9c566b41225cfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ec8a610333de1d6c9750df38219f0c4ed9058465ef998da9c566b41225cfb2->enter($__internal_15ec8a610333de1d6c9750df38219f0c4ed9058465ef998da9c566b41225cfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/e-last-index-of.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([3, \"raz\", {}, x, {}, x], x), 5, \"Regular\");
\ta(t.call([3, \"raz\", NaN, {}, x], NaN), 2, \"NaN\");
\ta(t.call([3, \"raz\", 0, {}, -0], -0), 4, \"-0\");
\ta(t.call([3, \"raz\", -0, {}, 0], +0), 4, \"+0\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, 3), 2, \"fromIndex\");
\ta(t.call([3, \"raz\", NaN, 2, NaN], NaN, -1), 4, \"Negative fromIndex #1\");
\ta(t.call([3, \"raz\", NaN, 2, NaN], NaN, -2), 2, \"Negative fromIndex #2\");
};
";
        
        $__internal_15ec8a610333de1d6c9750df38219f0c4ed9058465ef998da9c566b41225cfb2->leave($__internal_15ec8a610333de1d6c9750df38219f0c4ed9058465ef998da9c566b41225cfb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/e-last-index-of.js";
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
\ta(t.call([3, \"raz\", {}, x, {}, x], x), 5, \"Regular\");
\ta(t.call([3, \"raz\", NaN, {}, x], NaN), 2, \"NaN\");
\ta(t.call([3, \"raz\", 0, {}, -0], -0), 4, \"-0\");
\ta(t.call([3, \"raz\", -0, {}, 0], +0), 4, \"+0\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, 3), 2, \"fromIndex\");
\ta(t.call([3, \"raz\", NaN, 2, NaN], NaN, -1), 4, \"Negative fromIndex #1\");
\ta(t.call([3, \"raz\", NaN, 2, NaN], NaN, -2), 2, \"Negative fromIndex #2\");
};
", "node_modules/es5-ext/test/array/#/e-last-index-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/e-last-index-of.js");
    }
}
