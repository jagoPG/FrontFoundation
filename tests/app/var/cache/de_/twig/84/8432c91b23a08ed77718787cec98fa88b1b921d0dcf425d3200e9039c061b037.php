<?php

/* node_modules/core-js/modules/_inherit-if-required.js */
class __TwigTemplate_33dd99af7124c0d0eac0487ce5c6d9793b49f6c4a022827793f8c5ade9bed015 extends Twig_Template
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
        $__internal_75164a4ac163bc43da2d032e27115d5273bb0a46c2be42d261f99cc6beb28fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75164a4ac163bc43da2d032e27115d5273bb0a46c2be42d261f99cc6beb28fae->enter($__internal_75164a4ac163bc43da2d032e27115d5273bb0a46c2be42d261f99cc6beb28fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_inherit-if-required.js"));

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
        
        $__internal_75164a4ac163bc43da2d032e27115d5273bb0a46c2be42d261f99cc6beb28fae->leave($__internal_75164a4ac163bc43da2d032e27115d5273bb0a46c2be42d261f99cc6beb28fae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_inherit-if-required.js";
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
", "node_modules/core-js/modules/_inherit-if-required.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_inherit-if-required.js");
    }
}
