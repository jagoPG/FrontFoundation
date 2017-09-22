<?php

/* node_modules/es5-ext/test/object/for-each.js */
class __TwigTemplate_14088d1b46339a06f619e091d57aaecf34d07e2bac62f63023068ed970db381c extends Twig_Template
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
        $__internal_37618d9d146d81b9ff12f0732a66383c973321fdaa6faa55be2eb8bc48ca7d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37618d9d146d81b9ff12f0732a66383c973321fdaa6faa55be2eb8bc48ca7d07->enter($__internal_37618d9d146d81b9ff12f0732a66383c973321fdaa6faa55be2eb8bc48ca7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/for-each.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar o = { raz: 1, dwa: 2, trzy: 3 }
\t  , o2 = {};
\ta(t(o, function (value, name) {
\t\to2[name] = value;
\t}), undefined, \"Return\");
\ta.deep(o2, o);
};
";
        
        $__internal_37618d9d146d81b9ff12f0732a66383c973321fdaa6faa55be2eb8bc48ca7d07->leave($__internal_37618d9d146d81b9ff12f0732a66383c973321fdaa6faa55be2eb8bc48ca7d07_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar o = { raz: 1, dwa: 2, trzy: 3 }
\t  , o2 = {};
\ta(t(o, function (value, name) {
\t\to2[name] = value;
\t}), undefined, \"Return\");
\ta.deep(o2, o);
};
", "node_modules/es5-ext/test/object/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/for-each.js");
    }
}
