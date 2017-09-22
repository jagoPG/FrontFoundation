<?php

/* node_modules/es5-ext/array/#/splice/shim.js */
class __TwigTemplate_1c8409c1db98ee09bb30bf5ca4e2c90b9512e722d07e161569ec5da30b90ea1c extends Twig_Template
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
        $__internal_a4d6fb4248201a005fb24872e90e29eb5d1a9c529342470352a98d67523aa31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d6fb4248201a005fb24872e90e29eb5d1a9c529342470352a98d67523aa31e->enter($__internal_a4d6fb4248201a005fb24872e90e29eb5d1a9c529342470352a98d67523aa31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/splice/shim.js"));

        // line 1
        echo "\"use strict\";

var isPlainArray = require(\"../../is-plain-array\")
  , isArray      = Array.isArray
  , splice       = Array.prototype.splice
  , forEach      = Array.prototype.forEach;

// eslint-disable-next-line no-unused-vars
module.exports = function (start, deleteCount /*, …items*/) {
\tvar arr = splice.apply(this, arguments), result;
\tif (!this || !isArray(this) || isPlainArray(this)) return arr;
\tresult = new this.constructor(arr.length);
\tforEach.call(arr, function (val, i) {
\t\tresult[i] = val;
\t});
\treturn result;
};
";
        
        $__internal_a4d6fb4248201a005fb24872e90e29eb5d1a9c529342470352a98d67523aa31e->leave($__internal_a4d6fb4248201a005fb24872e90e29eb5d1a9c529342470352a98d67523aa31e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/splice/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isPlainArray = require(\"../../is-plain-array\")
  , isArray      = Array.isArray
  , splice       = Array.prototype.splice
  , forEach      = Array.prototype.forEach;

// eslint-disable-next-line no-unused-vars
module.exports = function (start, deleteCount /*, …items*/) {
\tvar arr = splice.apply(this, arguments), result;
\tif (!this || !isArray(this) || isPlainArray(this)) return arr;
\tresult = new this.constructor(arr.length);
\tforEach.call(arr, function (val, i) {
\t\tresult[i] = val;
\t});
\treturn result;
};
", "node_modules/es5-ext/array/#/splice/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/splice/shim.js");
    }
}
