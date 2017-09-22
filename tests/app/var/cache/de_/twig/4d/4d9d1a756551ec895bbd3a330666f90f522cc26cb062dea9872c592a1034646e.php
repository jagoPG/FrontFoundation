<?php

/* node_modules/core-js/modules/_object-to-array.js */
class __TwigTemplate_5aba0621dcb815c22562f109a5e13b348ec6d520392daba1dddc4bfbbd8383b4 extends Twig_Template
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
        $__internal_6be93200187538e4f95ea1cd708da2528a3e495a3c4dace42462390fb972fbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be93200187538e4f95ea1cd708da2528a3e495a3c4dace42462390fb972fbcd->enter($__internal_6be93200187538e4f95ea1cd708da2528a3e495a3c4dace42462390fb972fbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-to-array.js"));

        // line 1
        echo "var getKeys = require('./_object-keys');
var toIObject = require('./_to-iobject');
var isEnum = require('./_object-pie').f;
module.exports = function (isEntries) {
  return function (it) {
    var O = toIObject(it);
    var keys = getKeys(O);
    var length = keys.length;
    var i = 0;
    var result = [];
    var key;
    while (length > i) if (isEnum.call(O, key = keys[i++])) {
      result.push(isEntries ? [key, O[key]] : O[key]);
    } return result;
  };
};
";
        
        $__internal_6be93200187538e4f95ea1cd708da2528a3e495a3c4dace42462390fb972fbcd->leave($__internal_6be93200187538e4f95ea1cd708da2528a3e495a3c4dace42462390fb972fbcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-to-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getKeys = require('./_object-keys');
var toIObject = require('./_to-iobject');
var isEnum = require('./_object-pie').f;
module.exports = function (isEntries) {
  return function (it) {
    var O = toIObject(it);
    var keys = getKeys(O);
    var length = keys.length;
    var i = 0;
    var result = [];
    var key;
    while (length > i) if (isEnum.call(O, key = keys[i++])) {
      result.push(isEntries ? [key, O[key]] : O[key]);
    } return result;
  };
};
", "node_modules/core-js/modules/_object-to-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-to-array.js");
    }
}
