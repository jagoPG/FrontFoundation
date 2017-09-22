<?php

/* node_modules/es5-ext/test/object/set-prototype-of/index.js */
class __TwigTemplate_cd267b179f562e22abc1b644a6e30153fa4e337775fa936125b00495bb995f12 extends Twig_Template
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
        $__internal_2775d52e5e4e528033a5743e0afb885ca42762495afae8408516c6f6ee69fed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2775d52e5e4e528033a5743e0afb885ca42762495afae8408516c6f6ee69fed4->enter($__internal_2775d52e5e4e528033a5743e0afb885ca42762495afae8408516c6f6ee69fed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/set-prototype-of/index.js"));

        // line 1
        echo "\"use strict\";

var create = require(\"../../../object/create\")

  , getPrototypeOf = Object.getPrototypeOf;

module.exports = function (t, a) {
\tvar x = {}, y = {};

\tif (t === null) return;
\ta(t(x, y), x, \"Return self object\");
\ta(getPrototypeOf(x), y, \"Object\");
\ta.throws(function () {
 t(x);
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(\"foo\");
}, TypeError, \"Primitive\");
\ta(getPrototypeOf(t(x, null)), t.nullPolyfill || null, \"Null\");
\tx = create(null);
\ta.h1(\"Change null prototype\");
\ta(t(x, y), x, \"Result\");
\ta(getPrototypeOf(x), y, \"Prototype\");
\ta.h1(\"Set null prototype\");
\ta(t(y, null), y, \"Result\");
\ta(getPrototypeOf(y), t.nullPolyfill || null, \"Prototype\");
};
";
        
        $__internal_2775d52e5e4e528033a5743e0afb885ca42762495afae8408516c6f6ee69fed4->leave($__internal_2775d52e5e4e528033a5743e0afb885ca42762495afae8408516c6f6ee69fed4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/set-prototype-of/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var create = require(\"../../../object/create\")

  , getPrototypeOf = Object.getPrototypeOf;

module.exports = function (t, a) {
\tvar x = {}, y = {};

\tif (t === null) return;
\ta(t(x, y), x, \"Return self object\");
\ta(getPrototypeOf(x), y, \"Object\");
\ta.throws(function () {
 t(x);
}, TypeError, \"Undefined\");
\ta.throws(function () {
 t(\"foo\");
}, TypeError, \"Primitive\");
\ta(getPrototypeOf(t(x, null)), t.nullPolyfill || null, \"Null\");
\tx = create(null);
\ta.h1(\"Change null prototype\");
\ta(t(x, y), x, \"Result\");
\ta(getPrototypeOf(x), y, \"Prototype\");
\ta.h1(\"Set null prototype\");
\ta(t(y, null), y, \"Result\");
\ta(getPrototypeOf(y), t.nullPolyfill || null, \"Prototype\");
};
", "node_modules/es5-ext/test/object/set-prototype-of/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/set-prototype-of/index.js");
    }
}
