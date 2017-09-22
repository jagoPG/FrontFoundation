<?php

/* node_modules/es5-ext/test/to-short-string-representation.js */
class __TwigTemplate_88f2e1e7bb7de943a4f4ceba21bebd17ad1a6c0b7d6e0ba6d68206a6a389f853 extends Twig_Template
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
        $__internal_388057a45750da4d29fa419b6ba057ae26c83649e856cb37ea8cdc7df776ee12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388057a45750da4d29fa419b6ba057ae26c83649e856cb37ea8cdc7df776ee12->enter($__internal_388057a45750da4d29fa419b6ba057ae26c83649e856cb37ea8cdc7df776ee12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/to-short-string-representation.js"));

        // line 1
        echo "\"use strict\";

var repeat = require(\"../string/#/repeat\");

module.exports = function (t, a) {
\ta(t(), \"undefined\");
\ta(t(null), \"null\");
\ta(t(10), \"10\");
\ta(t(\"str\"), \"str\");
\ta(
\t\tt({
\t\t\ttoString: function () {
\t\t\t\treturn \"miszka\";
\t\t\t}
\t\t}),
\t\t\"miszka\"
\t);
\t// eslint-disable-next-line symbol-description
\tif (typeof Symbol === \"function\") a(t(Symbol()), \"Symbol()\");
\ta(t(Object.create(null)), \"<non-stringifiable value>\");
\ta(t(repeat.call(\"a\", 300)), repeat.call(\"a\", 99) + \"…\");
\ta(t(\"mar\\ntoo\\nfar\"), \"mar\\\\ntoo\\\\nfar\");
};
";
        
        $__internal_388057a45750da4d29fa419b6ba057ae26c83649e856cb37ea8cdc7df776ee12->leave($__internal_388057a45750da4d29fa419b6ba057ae26c83649e856cb37ea8cdc7df776ee12_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/to-short-string-representation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var repeat = require(\"../string/#/repeat\");

module.exports = function (t, a) {
\ta(t(), \"undefined\");
\ta(t(null), \"null\");
\ta(t(10), \"10\");
\ta(t(\"str\"), \"str\");
\ta(
\t\tt({
\t\t\ttoString: function () {
\t\t\t\treturn \"miszka\";
\t\t\t}
\t\t}),
\t\t\"miszka\"
\t);
\t// eslint-disable-next-line symbol-description
\tif (typeof Symbol === \"function\") a(t(Symbol()), \"Symbol()\");
\ta(t(Object.create(null)), \"<non-stringifiable value>\");
\ta(t(repeat.call(\"a\", 300)), repeat.call(\"a\", 99) + \"…\");
\ta(t(\"mar\\ntoo\\nfar\"), \"mar\\\\ntoo\\\\nfar\");
};
", "node_modules/es5-ext/test/to-short-string-representation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/to-short-string-representation.js");
    }
}
