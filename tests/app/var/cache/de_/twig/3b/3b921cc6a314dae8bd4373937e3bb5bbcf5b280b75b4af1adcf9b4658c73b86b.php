<?php

/* node_modules/es5-ext/test/array/#/group.js */
class __TwigTemplate_7b6481b863bc9f7b60f6686f529bf612f58dc8d5208c49c20d77052d3276ba8b extends Twig_Template
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
        $__internal_aa637ad149a887d0088ad155cadd60246338d70357ad2e5690e54a2351dc7e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa637ad149a887d0088ad155cadd60246338d70357ad2e5690e54a2351dc7e4b->enter($__internal_aa637ad149a887d0088ad155cadd60246338d70357ad2e5690e54a2351dc7e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/group.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"__generic\": function (t, a) {
\t\tvar count = 0, self;

\t\tself = Object(this);
\t\ta.deep(t.call(self, function (v, i, scope) {
\t\t\ta(v, this[i], \"Value\");
\t\t\ta(i, count++, \"Index\");
\t\t\ta(scope, this, \"Scope\");
\t\t\treturn i;
\t\t}, self), { 0: [this[0]], 1: [this[1]], 2: [this[2]] });
\t},
\t\"\": function (t, a) {
\t\tvar r;
\t\tr = t.call([2, 3, 3, 4, 5, 6, 7, 7, 23, 45, 34, 56],
\t\t\tfunction (v) {
\t\t\t\treturn v % 2 ? \"odd\" : \"even\";
\t\t\t});
\t\ta.deep(r.odd, [3, 3, 5, 7, 7, 23, 45]);
\t\ta.deep(r.even, [2, 4, 6, 34, 56]);
\t}
};
";
        
        $__internal_aa637ad149a887d0088ad155cadd60246338d70357ad2e5690e54a2351dc7e4b->leave($__internal_aa637ad149a887d0088ad155cadd60246338d70357ad2e5690e54a2351dc7e4b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/group.js";
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
\t\tvar count = 0, self;

\t\tself = Object(this);
\t\ta.deep(t.call(self, function (v, i, scope) {
\t\t\ta(v, this[i], \"Value\");
\t\t\ta(i, count++, \"Index\");
\t\t\ta(scope, this, \"Scope\");
\t\t\treturn i;
\t\t}, self), { 0: [this[0]], 1: [this[1]], 2: [this[2]] });
\t},
\t\"\": function (t, a) {
\t\tvar r;
\t\tr = t.call([2, 3, 3, 4, 5, 6, 7, 7, 23, 45, 34, 56],
\t\t\tfunction (v) {
\t\t\t\treturn v % 2 ? \"odd\" : \"even\";
\t\t\t});
\t\ta.deep(r.odd, [3, 3, 5, 7, 7, 23, 45]);
\t\ta.deep(r.even, [2, 4, 6, 34, 56]);
\t}
};
", "node_modules/es5-ext/test/array/#/group.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/group.js");
    }
}
