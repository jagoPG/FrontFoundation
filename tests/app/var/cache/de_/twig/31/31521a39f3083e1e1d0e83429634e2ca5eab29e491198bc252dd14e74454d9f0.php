<?php

/* node_modules/es5-ext/test/object/valid-value.js */
class __TwigTemplate_759e5e6f954c76b0c8dabe8a83ce71e9ee7c3095422c79fdef598b58353c55aa extends Twig_Template
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
        $__internal_dcf9045b0cc6b1b9bbe23514bda0a74409fce26e58c897deb1a6d815ba261e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf9045b0cc6b1b9bbe23514bda0a74409fce26e58c897deb1a6d815ba261e76->enter($__internal_dcf9045b0cc6b1b9bbe23514bda0a74409fce26e58c897deb1a6d815ba261e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/valid-value.js"));

        // line 1
        echo "\"use strict\";

var numIsNaN = require(\"../../number/is-nan\");

module.exports = function (t, a) {
\tvar x;
\ta(t(0), 0, \"0\");
\ta(t(false), false, \"false\");
\ta(t(\"\"), \"\", \"''\");
\ta(numIsNaN(t(NaN)), true, \"NaN\");
\ta(t(x = {}), x, \"{}\");

\ta.throws(function () {
\t\tt();
\t}, \"Undefined\");
\ta.throws(function () {
\t\tt(null);
\t}, \"null\");
};
";
        
        $__internal_dcf9045b0cc6b1b9bbe23514bda0a74409fce26e58c897deb1a6d815ba261e76->leave($__internal_dcf9045b0cc6b1b9bbe23514bda0a74409fce26e58c897deb1a6d815ba261e76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/valid-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var numIsNaN = require(\"../../number/is-nan\");

module.exports = function (t, a) {
\tvar x;
\ta(t(0), 0, \"0\");
\ta(t(false), false, \"false\");
\ta(t(\"\"), \"\", \"''\");
\ta(numIsNaN(t(NaN)), true, \"NaN\");
\ta(t(x = {}), x, \"{}\");

\ta.throws(function () {
\t\tt();
\t}, \"Undefined\");
\ta.throws(function () {
\t\tt(null);
\t}, \"null\");
};
", "node_modules/es5-ext/test/object/valid-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/valid-value.js");
    }
}
