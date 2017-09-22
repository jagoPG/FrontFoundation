<?php

/* node_modules/es5-ext/test/array/#/find-index/shim.js */
class __TwigTemplate_a940b55a355fb7ecabda124faf044c626aaa2852726c6dc365481a3eeb1070e1 extends Twig_Template
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
        $__internal_53deaf5626555357e10f852f695be0f2858b5cee1e3c3a4ad9a163d0fdba10d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53deaf5626555357e10f852f695be0f2858b5cee1e3c3a4ad9a163d0fdba10d0->enter($__internal_53deaf5626555357e10f852f695be0f2858b5cee1e3c3a4ad9a163d0fdba10d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/find-index/shim.js"));

        // line 1
        echo "\"use strict\";

exports.__generic = function (t, a) {
\tvar count = 0, o = {}, self = Object(this);
\ta(t.call(self, function (value, i, scope) {
\t\ta(value, this[i], \"Value\");
\t\ta(i, count++, \"Index\");
\t\ta(scope, this, \"Scope\");
\t}, self), -1, \"Falsy result\");
\ta(count, 3);

\tcount = -1;
\ta(t.call(this, function () {
\t\treturn ++count ? o : null;
\t}, this), 1, \"Truthy result\");
\ta(count, 1);
};
";
        
        $__internal_53deaf5626555357e10f852f695be0f2858b5cee1e3c3a4ad9a163d0fdba10d0->leave($__internal_53deaf5626555357e10f852f695be0f2858b5cee1e3c3a4ad9a163d0fdba10d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/find-index/shim.js";
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
\t}, self), -1, \"Falsy result\");
\ta(count, 3);

\tcount = -1;
\ta(t.call(this, function () {
\t\treturn ++count ? o : null;
\t}, this), 1, \"Truthy result\");
\ta(count, 1);
};
", "node_modules/es5-ext/test/array/#/find-index/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/find-index/shim.js");
    }
}
