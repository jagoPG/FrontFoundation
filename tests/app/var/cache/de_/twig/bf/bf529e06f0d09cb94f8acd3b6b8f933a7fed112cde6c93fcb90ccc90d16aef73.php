<?php

/* node_modules/regenerator-runtime/runtime-module.js */
class __TwigTemplate_16a119a2201d988bc9d4a52e21a4cf80d6e1f69f6deee5165d20eb45101cfba2 extends Twig_Template
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
        $__internal_d3feb96e9d6a1f3e03320ec925290068e838383d1ae40cdc58f7a35b144056dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3feb96e9d6a1f3e03320ec925290068e838383d1ae40cdc58f7a35b144056dd->enter($__internal_d3feb96e9d6a1f3e03320ec925290068e838383d1ae40cdc58f7a35b144056dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-runtime/runtime-module.js"));

        // line 1
        echo "// This method of obtaining a reference to the global object needs to be
// kept identical to the way it is obtained in runtime.js
var g = (function() { return this })() || Function(\"return this\")();

// Use `getOwnPropertyNames` because not all browsers support calling
// `hasOwnProperty` on the global `self` object in a worker. See #183.
var hadRuntime = g.regeneratorRuntime &&
  Object.getOwnPropertyNames(g).indexOf(\"regeneratorRuntime\") >= 0;

// Save the old regeneratorRuntime in case it needs to be restored later.
var oldRuntime = hadRuntime && g.regeneratorRuntime;

// Force reevalutation of runtime.js.
g.regeneratorRuntime = undefined;

module.exports = require(\"./runtime\");

if (hadRuntime) {
  // Restore the original runtime.
  g.regeneratorRuntime = oldRuntime;
} else {
  // Remove the global property added by runtime.js.
  try {
    delete g.regeneratorRuntime;
  } catch(e) {
    g.regeneratorRuntime = undefined;
  }
}
";
        
        $__internal_d3feb96e9d6a1f3e03320ec925290068e838383d1ae40cdc58f7a35b144056dd->leave($__internal_d3feb96e9d6a1f3e03320ec925290068e838383d1ae40cdc58f7a35b144056dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-runtime/runtime-module.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// This method of obtaining a reference to the global object needs to be
// kept identical to the way it is obtained in runtime.js
var g = (function() { return this })() || Function(\"return this\")();

// Use `getOwnPropertyNames` because not all browsers support calling
// `hasOwnProperty` on the global `self` object in a worker. See #183.
var hadRuntime = g.regeneratorRuntime &&
  Object.getOwnPropertyNames(g).indexOf(\"regeneratorRuntime\") >= 0;

// Save the old regeneratorRuntime in case it needs to be restored later.
var oldRuntime = hadRuntime && g.regeneratorRuntime;

// Force reevalutation of runtime.js.
g.regeneratorRuntime = undefined;

module.exports = require(\"./runtime\");

if (hadRuntime) {
  // Restore the original runtime.
  g.regeneratorRuntime = oldRuntime;
} else {
  // Remove the global property added by runtime.js.
  try {
    delete g.regeneratorRuntime;
  } catch(e) {
    g.regeneratorRuntime = undefined;
  }
}
", "node_modules/regenerator-runtime/runtime-module.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-runtime/runtime-module.js");
    }
}
