<?php

/* node_modules/es5-ext/test/string/#/pad.js */
class __TwigTemplate_5058505deae24a8a6d4b8b796bbcf9e37c41fd9730316cd6c5365f6ae0844d60 extends Twig_Template
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
        $__internal_7a9c945b5625375f16f67e8c6c53daed2581a16e80ef41f6c77709a6b72261eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9c945b5625375f16f67e8c6c53daed2581a16e80ef41f6c77709a6b72261eb->enter($__internal_7a9c945b5625375f16f67e8c6c53daed2581a16e80ef41f6c77709a6b72261eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/pad.js"));

        // line 1
        echo "\"use strict\";

var partial = require(\"../../../function/#/partial\");

module.exports = {
\tLeft: function (t, a) {
\t\tt = partial.call(t, \"x\", 5);

\t\ta(t.call(\"yy\"), \"xxxyy\");
\t\ta(t.call(\"\"), \"xxxxx\", \"Empty string\");

\t\ta(t.call(\"yyyyy\"), \"yyyyy\", \"Equal length\");
\t\ta(t.call(\"yyyyyyy\"), \"yyyyyyy\", \"Longer\");
\t},
\tRight: function (t, a) {
\t\tt = partial.call(t, \"x\", -5);

\t\ta(t.call(\"yy\"), \"yyxxx\");
\t\ta(t.call(\"\"), \"xxxxx\", \"Empty string\");

\t\ta(t.call(\"yyyyy\"), \"yyyyy\", \"Equal length\");
\t\ta(t.call(\"yyyyyyy\"), \"yyyyyyy\", \"Longer\");
\t}
};
";
        
        $__internal_7a9c945b5625375f16f67e8c6c53daed2581a16e80ef41f6c77709a6b72261eb->leave($__internal_7a9c945b5625375f16f67e8c6c53daed2581a16e80ef41f6c77709a6b72261eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/pad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var partial = require(\"../../../function/#/partial\");

module.exports = {
\tLeft: function (t, a) {
\t\tt = partial.call(t, \"x\", 5);

\t\ta(t.call(\"yy\"), \"xxxyy\");
\t\ta(t.call(\"\"), \"xxxxx\", \"Empty string\");

\t\ta(t.call(\"yyyyy\"), \"yyyyy\", \"Equal length\");
\t\ta(t.call(\"yyyyyyy\"), \"yyyyyyy\", \"Longer\");
\t},
\tRight: function (t, a) {
\t\tt = partial.call(t, \"x\", -5);

\t\ta(t.call(\"yy\"), \"yyxxx\");
\t\ta(t.call(\"\"), \"xxxxx\", \"Empty string\");

\t\ta(t.call(\"yyyyy\"), \"yyyyy\", \"Equal length\");
\t\ta(t.call(\"yyyyyyy\"), \"yyyyyyy\", \"Longer\");
\t}
};
", "node_modules/es5-ext/test/string/#/pad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/pad.js");
    }
}
