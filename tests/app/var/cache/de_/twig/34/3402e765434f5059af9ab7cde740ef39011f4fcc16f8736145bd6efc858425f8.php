<?php

/* node_modules/es5-ext/test/function/#/copy.js */
class __TwigTemplate_b5af030d62039855c9564f9f41fbb3cc3376f0deb11b7cf07ff66520b33ae00e extends Twig_Template
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
        $__internal_307b8d16cf9be89c730089732015d8aad34cef444f43df7dbd3834068e091b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307b8d16cf9be89c730089732015d8aad34cef444f43df7dbd3834068e091b8c->enter($__internal_307b8d16cf9be89c730089732015d8aad34cef444f43df7dbd3834068e091b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/copy.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tvar foo = \"raz\", bar = \"dwa\";
\t// eslint-disable-next-line func-names
\tvar fn = function marko (a, b) {
\t\treturn this + a + b + foo + bar;
\t};
\tvar result, o = {};

\tfn.prototype = o;

\tfn.foo = \"raz\";

\tresult = t.call(fn);

\ta(result.length, fn.length, \"Length\");
\ta(result.name, fn.name, \"Length\");
\ta(result.call(\"marko\", \"el\", \"fe\"), \"markoelferazdwa\", \"Body\");
\ta(result.prototype, fn.prototype, \"Prototype\");
\ta(result.foo, fn.foo, \"Custom property\");
};
";
        
        $__internal_307b8d16cf9be89c730089732015d8aad34cef444f43df7dbd3834068e091b8c->leave($__internal_307b8d16cf9be89c730089732015d8aad34cef444f43df7dbd3834068e091b8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tvar foo = \"raz\", bar = \"dwa\";
\t// eslint-disable-next-line func-names
\tvar fn = function marko (a, b) {
\t\treturn this + a + b + foo + bar;
\t};
\tvar result, o = {};

\tfn.prototype = o;

\tfn.foo = \"raz\";

\tresult = t.call(fn);

\ta(result.length, fn.length, \"Length\");
\ta(result.name, fn.name, \"Length\");
\ta(result.call(\"marko\", \"el\", \"fe\"), \"markoelferazdwa\", \"Body\");
\ta(result.prototype, fn.prototype, \"Prototype\");
\ta(result.foo, fn.foo, \"Custom property\");
};
", "node_modules/es5-ext/test/function/#/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/copy.js");
    }
}
