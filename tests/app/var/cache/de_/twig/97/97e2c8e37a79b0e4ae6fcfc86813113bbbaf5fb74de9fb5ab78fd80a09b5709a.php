<?php

/* node_modules/es5-ext/array/_sub-array-dummy-safe.js */
class __TwigTemplate_d4330f21afc185ef93a3c3ba45fa1668a122a1a0b308a840989c8efdb45a90db extends Twig_Template
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
        $__internal_355eab88d722f33e3a1cab03180f789098b75e5c91a5d8a106e51d4efa1205fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355eab88d722f33e3a1cab03180f789098b75e5c91a5d8a106e51d4efa1205fd->enter($__internal_355eab88d722f33e3a1cab03180f789098b75e5c91a5d8a106e51d4efa1205fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/_sub-array-dummy-safe.js"));

        // line 1
        echo "\"use strict\";

var setPrototypeOf = require(\"../object/set-prototype-of\")
  , isExtensible   = require(\"./_is-extensible\");

module.exports = (function () {
\tvar SubArray;

\tif (isExtensible) return require(\"./_sub-array-dummy\");

\tif (!setPrototypeOf) return null;
\tSubArray = function () {
\t\tvar arr = Array.apply(this, arguments);
\t\tsetPrototypeOf(arr, SubArray.prototype);
\t\treturn arr;
\t};
\tsetPrototypeOf(SubArray, Array);
\tSubArray.prototype = Object.create(Array.prototype, {
\t\tconstructor: { value: SubArray,
enumerable: false,
writable: true,
\t\t\tconfigurable: true }
\t});
\treturn SubArray;
}());
";
        
        $__internal_355eab88d722f33e3a1cab03180f789098b75e5c91a5d8a106e51d4efa1205fd->leave($__internal_355eab88d722f33e3a1cab03180f789098b75e5c91a5d8a106e51d4efa1205fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/_sub-array-dummy-safe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var setPrototypeOf = require(\"../object/set-prototype-of\")
  , isExtensible   = require(\"./_is-extensible\");

module.exports = (function () {
\tvar SubArray;

\tif (isExtensible) return require(\"./_sub-array-dummy\");

\tif (!setPrototypeOf) return null;
\tSubArray = function () {
\t\tvar arr = Array.apply(this, arguments);
\t\tsetPrototypeOf(arr, SubArray.prototype);
\t\treturn arr;
\t};
\tsetPrototypeOf(SubArray, Array);
\tSubArray.prototype = Object.create(Array.prototype, {
\t\tconstructor: { value: SubArray,
enumerable: false,
writable: true,
\t\t\tconfigurable: true }
\t});
\treturn SubArray;
}());
", "node_modules/es5-ext/array/_sub-array-dummy-safe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/_sub-array-dummy-safe.js");
    }
}
