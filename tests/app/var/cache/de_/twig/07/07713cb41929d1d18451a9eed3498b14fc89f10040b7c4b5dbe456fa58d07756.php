<?php

/* node_modules/es5-ext/test/object/some.js */
class __TwigTemplate_88a934444b8f499ef1885edf6395518c757a2a4b10e4e12c1638bc0d59fa03f9 extends Twig_Template
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
        $__internal_175ec9bde34a177c2b6eb05ccd8c8200b9f2e14ae1e8592a09c7e50518e21e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175ec9bde34a177c2b6eb05ccd8c8200b9f2e14ae1e8592a09c7e50518e21e3c->enter($__internal_175ec9bde34a177c2b6eb05ccd8c8200b9f2e14ae1e8592a09c7e50518e21e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/some.js"));

        // line 1
        echo "\"use strict\";

var o = { 1: 1, 2: 2, 3: 3 };

module.exports = function (t, a) {
\tvar o2 = {}, i = 0;
\tt(o, function (value, name) {
\t\to2[name] = value;
\t\treturn false;
\t});
\ta(JSON.stringify(o2), JSON.stringify(o), \"Iterates\");

\ta(t(o, function () {
\t\t++i;
\t\treturn true;
\t}), true, \"Succeeds\");
\ta(i, 1, \"Stops iteration after condition is met\");

\ta(t(o, function () {
\t\treturn false;
\t}), false, \"Fails\");

};
";
        
        $__internal_175ec9bde34a177c2b6eb05ccd8c8200b9f2e14ae1e8592a09c7e50518e21e3c->leave($__internal_175ec9bde34a177c2b6eb05ccd8c8200b9f2e14ae1e8592a09c7e50518e21e3c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var o = { 1: 1, 2: 2, 3: 3 };

module.exports = function (t, a) {
\tvar o2 = {}, i = 0;
\tt(o, function (value, name) {
\t\to2[name] = value;
\t\treturn false;
\t});
\ta(JSON.stringify(o2), JSON.stringify(o), \"Iterates\");

\ta(t(o, function () {
\t\t++i;
\t\treturn true;
\t}), true, \"Succeeds\");
\ta(i, 1, \"Stops iteration after condition is met\");

\ta(t(o, function () {
\t\treturn false;
\t}), false, \"Fails\");

};
", "node_modules/es5-ext/test/object/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/some.js");
    }
}
