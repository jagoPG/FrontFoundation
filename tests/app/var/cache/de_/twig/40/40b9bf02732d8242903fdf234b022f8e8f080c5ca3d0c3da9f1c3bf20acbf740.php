<?php

/* node_modules/es5-ext/test/object/find.js */
class __TwigTemplate_59e7ff914a0fcecabf4b1767dffebf14c43f0ea45e7f9c3eb2606606cbaddc44 extends Twig_Template
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
        $__internal_b89a665b67a3fb78da089c44dc2bbd383a9377bd41afd51f4ce4f244f5b95cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89a665b67a3fb78da089c44dc2bbd383a9377bd41afd51f4ce4f244f5b95cc0->enter($__internal_b89a665b67a3fb78da089c44dc2bbd383a9377bd41afd51f4ce4f244f5b95cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/find.js"));

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
\t}), 1, \"Finds\");
\ta(i, 1, \"Stops iteration after condition is met\");

\ta(t(o, function () {
\t\treturn false;
\t}), undefined, \"Fails\");

};
";
        
        $__internal_b89a665b67a3fb78da089c44dc2bbd383a9377bd41afd51f4ce4f244f5b95cc0->leave($__internal_b89a665b67a3fb78da089c44dc2bbd383a9377bd41afd51f4ce4f244f5b95cc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/find.js";
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
\t}), 1, \"Finds\");
\ta(i, 1, \"Stops iteration after condition is met\");

\ta(t(o, function () {
\t\treturn false;
\t}), undefined, \"Fails\");

};
", "node_modules/es5-ext/test/object/find.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/find.js");
    }
}
