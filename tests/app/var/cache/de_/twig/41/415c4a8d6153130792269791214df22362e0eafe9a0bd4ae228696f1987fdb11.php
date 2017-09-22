<?php

/* node_modules/es5-ext/test/object/set-prototype-of/shim.js */
class __TwigTemplate_f99b98282eaee72e92dd93a98f72b08f0bea5a2daa9b0e68d75794caf69a096c extends Twig_Template
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
        $__internal_54cbc9a835bf5569a1f01d4993bb9096d2ebc6588f634c1b2f3e683f1f25640c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cbc9a835bf5569a1f01d4993bb9096d2ebc6588f634c1b2f3e683f1f25640c->enter($__internal_54cbc9a835bf5569a1f01d4993bb9096d2ebc6588f634c1b2f3e683f1f25640c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/set-prototype-of/shim.js"));

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
        
        $__internal_54cbc9a835bf5569a1f01d4993bb9096d2ebc6588f634c1b2f3e683f1f25640c->leave($__internal_54cbc9a835bf5569a1f01d4993bb9096d2ebc6588f634c1b2f3e683f1f25640c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/set-prototype-of/shim.js";
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
", "node_modules/es5-ext/test/object/set-prototype-of/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/set-prototype-of/shim.js");
    }
}
