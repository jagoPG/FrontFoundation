<?php

/* node_modules/es5-ext/iterable/is.js */
class __TwigTemplate_d9d76199e8d8e2a937fbaf3855162cd958d0b886f1f70a46bc1cdd017ab5cb9d extends Twig_Template
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
        $__internal_b8c2ff031eff4a1e0afd8dbce95d04957071a0eceb73af50f0da7f1d52dc1e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c2ff031eff4a1e0afd8dbce95d04957071a0eceb73af50f0da7f1d52dc1e0d->enter($__internal_b8c2ff031eff4a1e0afd8dbce95d04957071a0eceb73af50f0da7f1d52dc1e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/iterable/is.js"));

        // line 1
        echo "\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator
  , isValue        = require(\"../object/is-value\")
  , isArrayLike    = require(\"../object/is-array-like\");

module.exports = function (value) {
\tif (!isValue(value)) return false;
\tif (typeof value[iteratorSymbol] === \"function\") return true;
\treturn isArrayLike(value);
};
";
        
        $__internal_b8c2ff031eff4a1e0afd8dbce95d04957071a0eceb73af50f0da7f1d52dc1e0d->leave($__internal_b8c2ff031eff4a1e0afd8dbce95d04957071a0eceb73af50f0da7f1d52dc1e0d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/iterable/is.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var iteratorSymbol = require(\"es6-symbol\").iterator
  , isValue        = require(\"../object/is-value\")
  , isArrayLike    = require(\"../object/is-array-like\");

module.exports = function (value) {
\tif (!isValue(value)) return false;
\tif (typeof value[iteratorSymbol] === \"function\") return true;
\treturn isArrayLike(value);
};
", "node_modules/es5-ext/iterable/is.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/iterable/is.js");
    }
}
