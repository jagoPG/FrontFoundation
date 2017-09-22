<?php

/* node_modules/core-js/library/modules/_ctx.js */
class __TwigTemplate_f939767a33b4e917b573d3346bf5ce30d180a4185597711b40831cb4bc4efd29 extends Twig_Template
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
        $__internal_748e915745e05f44c6a2d125dfe1a43b0cb28c80ddc6cde45b0f8c3476df12d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748e915745e05f44c6a2d125dfe1a43b0cb28c80ddc6cde45b0f8c3476df12d0->enter($__internal_748e915745e05f44c6a2d125dfe1a43b0cb28c80ddc6cde45b0f8c3476df12d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_ctx.js"));

        // line 1
        echo "// optional / simple context binding
var aFunction = require('./_a-function');
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1: return function (a) {
      return fn.call(that, a);
    };
    case 2: return function (a, b) {
      return fn.call(that, a, b);
    };
    case 3: return function (a, b, c) {
      return fn.call(that, a, b, c);
    };
  }
  return function (/* ...args */) {
    return fn.apply(that, arguments);
  };
};
";
        
        $__internal_748e915745e05f44c6a2d125dfe1a43b0cb28c80ddc6cde45b0f8c3476df12d0->leave($__internal_748e915745e05f44c6a2d125dfe1a43b0cb28c80ddc6cde45b0f8c3476df12d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_ctx.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// optional / simple context binding
var aFunction = require('./_a-function');
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1: return function (a) {
      return fn.call(that, a);
    };
    case 2: return function (a, b) {
      return fn.call(that, a, b);
    };
    case 3: return function (a, b, c) {
      return fn.call(that, a, b, c);
    };
  }
  return function (/* ...args */) {
    return fn.apply(that, arguments);
  };
};
", "node_modules/core-js/library/modules/_ctx.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_ctx.js");
    }
}
