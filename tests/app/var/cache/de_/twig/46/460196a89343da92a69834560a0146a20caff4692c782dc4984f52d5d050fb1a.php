<?php

/* node_modules/core-js/library/modules/_inherit-if-required.js */
class __TwigTemplate_67f66dff5213c74efa71790525972d2e2de18afc5231c2c6ecd454077a655950 extends Twig_Template
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
        $__internal_a387f416304873f213e644888d682259b5fbc18d5739c0ba1efc3c8df59fb3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a387f416304873f213e644888d682259b5fbc18d5739c0ba1efc3c8df59fb3e2->enter($__internal_a387f416304873f213e644888d682259b5fbc18d5739c0ba1efc3c8df59fb3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_inherit-if-required.js"));

        // line 1
        echo "var isObject = require('./_is-object');
var setPrototypeOf = require('./_set-proto').set;
module.exports = function (that, target, C) {
  var S = target.constructor;
  var P;
  if (S !== C && typeof S == 'function' && (P = S.prototype) !== C.prototype && isObject(P) && setPrototypeOf) {
    setPrototypeOf(that, P);
  } return that;
};
";
        
        $__internal_a387f416304873f213e644888d682259b5fbc18d5739c0ba1efc3c8df59fb3e2->leave($__internal_a387f416304873f213e644888d682259b5fbc18d5739c0ba1efc3c8df59fb3e2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_inherit-if-required.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
var setPrototypeOf = require('./_set-proto').set;
module.exports = function (that, target, C) {
  var S = target.constructor;
  var P;
  if (S !== C && typeof S == 'function' && (P = S.prototype) !== C.prototype && isObject(P) && setPrototypeOf) {
    setPrototypeOf(that, P);
  } return that;
};
", "node_modules/core-js/library/modules/_inherit-if-required.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_inherit-if-required.js");
    }
}
