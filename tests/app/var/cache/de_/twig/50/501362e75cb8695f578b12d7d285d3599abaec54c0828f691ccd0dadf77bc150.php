<?php

/* node_modules/es5-ext/test/object/every.js */
class __TwigTemplate_589180d6362c56cbeca53496e9a6007bb6833d70109296d108b084066906c0f1 extends Twig_Template
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
        $__internal_1c303c8837a9dfc58b59d933b6003a17293bab12b7aafc270ec034dad18a7259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c303c8837a9dfc58b59d933b6003a17293bab12b7aafc270ec034dad18a7259->enter($__internal_1c303c8837a9dfc58b59d933b6003a17293bab12b7aafc270ec034dad18a7259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/every.js"));

        // line 1
        echo "\"use strict\";

var o = { 1: 1, 2: 2, 3: 3 };

module.exports = function (t, a) {
\tvar o2 = {};
\tt(o, function (value, name) {
\t\to2[name] = value;
\t\treturn true;
\t});
\ta(JSON.stringify(o2), JSON.stringify(o), \"Iterates\");

\ta(t(o, function () {
\t\treturn true;
\t}), true, \"Succeeds\");

\ta(t(o, function () {
\t\treturn false;
\t}), false, \"Fails\");

};
";
        
        $__internal_1c303c8837a9dfc58b59d933b6003a17293bab12b7aafc270ec034dad18a7259->leave($__internal_1c303c8837a9dfc58b59d933b6003a17293bab12b7aafc270ec034dad18a7259_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/every.js";
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
\tvar o2 = {};
\tt(o, function (value, name) {
\t\to2[name] = value;
\t\treturn true;
\t});
\ta(JSON.stringify(o2), JSON.stringify(o), \"Iterates\");

\ta(t(o, function () {
\t\treturn true;
\t}), true, \"Succeeds\");

\ta(t(o, function () {
\t\treturn false;
\t}), false, \"Fails\");

};
", "node_modules/es5-ext/test/object/every.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/every.js");
    }
}
