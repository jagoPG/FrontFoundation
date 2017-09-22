<?php

/* node_modules/es5-ext/object/create.js */
class __TwigTemplate_510b9a792b03e286897d6e8691252f9e26de29d1b28f2aadb7ea4262d594bca9 extends Twig_Template
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
        $__internal_a076d8cfeb9690a6505ebe8a1df4aa615d2258506267d88bc631830c4e8e3c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a076d8cfeb9690a6505ebe8a1df4aa615d2258506267d88bc631830c4e8e3c1a->enter($__internal_a076d8cfeb9690a6505ebe8a1df4aa615d2258506267d88bc631830c4e8e3c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/create.js"));

        // line 1
        echo "// Workaround for http://code.google.com/p/v8/issues/detail?id=2804

\"use strict\";

var create = Object.create, shim;

if (!require(\"./set-prototype-of/is-implemented\")()) {
\tshim = require(\"./set-prototype-of/shim\");
}

module.exports = (function () {
\tvar nullObject, polyProps, desc;
\tif (!shim) return create;
\tif (shim.level !== 1) return create;

\tnullObject = {};
\tpolyProps = {};
\tdesc = {
\t\tconfigurable: false,
\t\tenumerable: false,
\t\twritable: true,
\t\tvalue: undefined
\t};
\tObject.getOwnPropertyNames(Object.prototype).forEach(function (name) {
\t\tif (name === \"__proto__\") {
\t\t\tpolyProps[name] = {
\t\t\t\tconfigurable: true,
\t\t\t\tenumerable: false,
\t\t\t\twritable: true,
\t\t\t\tvalue: undefined
\t\t\t};
\t\t\treturn;
\t\t}
\t\tpolyProps[name] = desc;
\t});
\tObject.defineProperties(nullObject, polyProps);

\tObject.defineProperty(shim, \"nullPolyfill\", {
\t\tconfigurable: false,
\t\tenumerable: false,
\t\twritable: false,
\t\tvalue: nullObject
\t});

\treturn function (prototype, props) {
\t\treturn create(prototype === null ? nullObject : prototype, props);
\t};
}());
";
        
        $__internal_a076d8cfeb9690a6505ebe8a1df4aa615d2258506267d88bc631830c4e8e3c1a->leave($__internal_a076d8cfeb9690a6505ebe8a1df4aa615d2258506267d88bc631830c4e8e3c1a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Workaround for http://code.google.com/p/v8/issues/detail?id=2804

\"use strict\";

var create = Object.create, shim;

if (!require(\"./set-prototype-of/is-implemented\")()) {
\tshim = require(\"./set-prototype-of/shim\");
}

module.exports = (function () {
\tvar nullObject, polyProps, desc;
\tif (!shim) return create;
\tif (shim.level !== 1) return create;

\tnullObject = {};
\tpolyProps = {};
\tdesc = {
\t\tconfigurable: false,
\t\tenumerable: false,
\t\twritable: true,
\t\tvalue: undefined
\t};
\tObject.getOwnPropertyNames(Object.prototype).forEach(function (name) {
\t\tif (name === \"__proto__\") {
\t\t\tpolyProps[name] = {
\t\t\t\tconfigurable: true,
\t\t\t\tenumerable: false,
\t\t\t\twritable: true,
\t\t\t\tvalue: undefined
\t\t\t};
\t\t\treturn;
\t\t}
\t\tpolyProps[name] = desc;
\t});
\tObject.defineProperties(nullObject, polyProps);

\tObject.defineProperty(shim, \"nullPolyfill\", {
\t\tconfigurable: false,
\t\tenumerable: false,
\t\twritable: false,
\t\tvalue: nullObject
\t});

\treturn function (prototype, props) {
\t\treturn create(prototype === null ? nullObject : prototype, props);
\t};
}());
", "node_modules/es5-ext/object/create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/create.js");
    }
}
