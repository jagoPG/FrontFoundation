<?php

/* node_modules/es5-ext/test/array/#/exclusion.js */
class __TwigTemplate_f2adc5032f3d915cfc79a191c5b3f453cca14bfb856111f89f7b082ba48299fd extends Twig_Template
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
        $__internal_b20e12077f45c2fe9e84c0ab5ad1d0f1c6cf34d066c2aef4828f2e6a1e11af8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20e12077f45c2fe9e84c0ab5ad1d0f1c6cf34d066c2aef4828f2e6a1e11af8b->enter($__internal_b20e12077f45c2fe9e84c0ab5ad1d0f1c6cf34d066c2aef4828f2e6a1e11af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/exclusion.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\tvar x = {};
\t\ta.deep(t.call(this, this, [this[0], this[2], x]), [x]);
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y = {};

\t\ta.deep(t.call([x, y]), [x, y], \"No arguments\");
\t\ta.deep(t.call([x, 1], [], []), [x, 1], \"Empty arguments\");
\t\ta.deep(t.call([1, \"raz\", x], [2, \"raz\", y], [2, \"raz\", x]), [1, y]);
\t}
};
";
        
        $__internal_b20e12077f45c2fe9e84c0ab5ad1d0f1c6cf34d066c2aef4828f2e6a1e11af8b->leave($__internal_b20e12077f45c2fe9e84c0ab5ad1d0f1c6cf34d066c2aef4828f2e6a1e11af8b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/exclusion.js";
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
\t\tvar x = {};
\t\ta.deep(t.call(this, this, [this[0], this[2], x]), [x]);
\t},
\t\"\": function (t, a) {
\t\tvar x = {}, y = {};

\t\ta.deep(t.call([x, y]), [x, y], \"No arguments\");
\t\ta.deep(t.call([x, 1], [], []), [x, 1], \"Empty arguments\");
\t\ta.deep(t.call([1, \"raz\", x], [2, \"raz\", y], [2, \"raz\", x]), [1, y]);
\t}
};
", "node_modules/es5-ext/test/array/#/exclusion.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/exclusion.js");
    }
}
