<?php

/* node_modules/es5-ext/test/array/#/find/shim.js */
class __TwigTemplate_a97d1727013772927fa02d248791d9c562663ef355cd8e8002563d215057ea5b extends Twig_Template
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
        $__internal_81a54497793de7808ad30db3386652b9e9fe5cb381f9ca03ff38c45611826970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a54497793de7808ad30db3386652b9e9fe5cb381f9ca03ff38c45611826970->enter($__internal_81a54497793de7808ad30db3386652b9e9fe5cb381f9ca03ff38c45611826970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/find/shim.js"));

        // line 1
        echo "\"use strict\";

exports.__generic = function (t, a) {
\tvar count = 0, o = {}, self = Object(this);
\ta(t.call(self, function (value, i, scope) {
\t\ta(value, this[i], \"Value\");
\t\ta(i, count++, \"Index\");
\t\ta(scope, this, \"Scope\");
\t}, self), undefined, \"Falsy result\");
\ta(count, 3);

\tcount = -1;
\ta(t.call(this, function () {
\t\treturn ++count ? o : null;
\t}, this), this[1], \"Truthy result\");
\ta(count, 1);
};
";
        
        $__internal_81a54497793de7808ad30db3386652b9e9fe5cb381f9ca03ff38c45611826970->leave($__internal_81a54497793de7808ad30db3386652b9e9fe5cb381f9ca03ff38c45611826970_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/find/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__generic = function (t, a) {
\tvar count = 0, o = {}, self = Object(this);
\ta(t.call(self, function (value, i, scope) {
\t\ta(value, this[i], \"Value\");
\t\ta(i, count++, \"Index\");
\t\ta(scope, this, \"Scope\");
\t}, self), undefined, \"Falsy result\");
\ta(count, 3);

\tcount = -1;
\ta(t.call(this, function () {
\t\treturn ++count ? o : null;
\t}, this), this[1], \"Truthy result\");
\ta(count, 1);
};
", "node_modules/es5-ext/test/array/#/find/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/find/shim.js");
    }
}
