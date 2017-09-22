<?php

/* node_modules/es5-ext/test/json/safe-stringify.js */
class __TwigTemplate_81ec071252d21aa657d1ae6593b40abb6267f4c0ea943df4452c5afc6900c3df extends Twig_Template
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
        $__internal_20c76fbfc9a76ab488bf958b06b497ef6e1117495500a438b1ddbdd6b0e46784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c76fbfc9a76ab488bf958b06b497ef6e1117495500a438b1ddbdd6b0e46784->enter($__internal_20c76fbfc9a76ab488bf958b06b497ef6e1117495500a438b1ddbdd6b0e46784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/json/safe-stringify.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t({ foo: \"bar\" }), JSON.stringify({ foo: \"bar\" }));
\ta(t({ foo: { elo: 12 } }), \"{\\\"foo\\\":{\\\"elo\\\":12}}\");
\ta(t({ foo: { elo: 12,
mel: {
\t\ttoJSON: function () {
 throw new Error(\"Nu nu!\");
}
\t} } }), \"{\\\"foo\\\":{\\\"elo\\\":12}}\");
\ta(t({ foo: { elo: 12 },
mel: {
\t\ttoJSON: function () {
 throw new Error(\"Nu nu!\");
}
\t} }), \"{\\\"foo\\\":{\\\"elo\\\":12}}\");
\ta(t({ foo: { elo: 12 },
mel: [
\"raz\", {
\t\ttoJSON: function () {
 throw new Error(\"Nu nu!\");
}
\t}, 0, 2
] }), \"{\\\"foo\\\":{\\\"elo\\\":12},\\\"mel\\\":[\\\"raz\\\",0,2]}\");
};
";
        
        $__internal_20c76fbfc9a76ab488bf958b06b497ef6e1117495500a438b1ddbdd6b0e46784->leave($__internal_20c76fbfc9a76ab488bf958b06b497ef6e1117495500a438b1ddbdd6b0e46784_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/json/safe-stringify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t({ foo: \"bar\" }), JSON.stringify({ foo: \"bar\" }));
\ta(t({ foo: { elo: 12 } }), \"{\\\"foo\\\":{\\\"elo\\\":12}}\");
\ta(t({ foo: { elo: 12,
mel: {
\t\ttoJSON: function () {
 throw new Error(\"Nu nu!\");
}
\t} } }), \"{\\\"foo\\\":{\\\"elo\\\":12}}\");
\ta(t({ foo: { elo: 12 },
mel: {
\t\ttoJSON: function () {
 throw new Error(\"Nu nu!\");
}
\t} }), \"{\\\"foo\\\":{\\\"elo\\\":12}}\");
\ta(t({ foo: { elo: 12 },
mel: [
\"raz\", {
\t\ttoJSON: function () {
 throw new Error(\"Nu nu!\");
}
\t}, 0, 2
] }), \"{\\\"foo\\\":{\\\"elo\\\":12},\\\"mel\\\":[\\\"raz\\\",0,2]}\");
};
", "node_modules/es5-ext/test/json/safe-stringify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/json/safe-stringify.js");
    }
}
