<?php

/* node_modules/es5-ext/test/array/#/e-index-of.js */
class __TwigTemplate_29b6a01941b631e5ced9752cd39032531dc182bdace09770243104cf9e9b17c7 extends Twig_Template
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
        $__internal_60887d672f3f453f9dc1853e8abfc39d08e3e8e193d0baa4bbeb7480968a6618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60887d672f3f453f9dc1853e8abfc39d08e3e8e193d0baa4bbeb7480968a6618->enter($__internal_60887d672f3f453f9dc1853e8abfc39d08e3e8e193d0baa4bbeb7480968a6618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/e-index-of.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar x = {};
\ta(t.call([3, \"raz\", {}, x, {}], x), 3, \"Regular\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN), 2, \"NaN\");
\ta(t.call([3, \"raz\", 0, {}, -0], -0), 2, \"-0\");
\ta(t.call([3, \"raz\", -0, {}, 0], +0), 2, \"+0\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, 3), 4, \"fromIndex\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, -1), 4, \"fromIndex negative #1\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, -2), 4, \"fromIndex negative #2\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, -3), 2, \"fromIndex negative #3\");
};
";
        
        $__internal_60887d672f3f453f9dc1853e8abfc39d08e3e8e193d0baa4bbeb7480968a6618->leave($__internal_60887d672f3f453f9dc1853e8abfc39d08e3e8e193d0baa4bbeb7480968a6618_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/e-index-of.js";
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
\ta(t.call([3, \"raz\", {}, x, {}], x), 3, \"Regular\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN), 2, \"NaN\");
\ta(t.call([3, \"raz\", 0, {}, -0], -0), 2, \"-0\");
\ta(t.call([3, \"raz\", -0, {}, 0], +0), 2, \"+0\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, 3), 4, \"fromIndex\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, -1), 4, \"fromIndex negative #1\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, -2), 4, \"fromIndex negative #2\");
\ta(t.call([3, \"raz\", NaN, {}, NaN], NaN, -3), 2, \"fromIndex negative #3\");
};
", "node_modules/es5-ext/test/array/#/e-index-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/e-index-of.js");
    }
}
