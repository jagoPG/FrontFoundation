<?php

/* node_modules/core-js/modules/_object-gopn-ext.js */
class __TwigTemplate_5679cea362c2bedc25cca90302959e7d4b4e536b41a5223159d2128bb474d195 extends Twig_Template
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
        $__internal_77c018b1bd430a17bde8b19a9583d4587dfd778be190b1045978ef7530afcdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c018b1bd430a17bde8b19a9583d4587dfd778be190b1045978ef7530afcdff->enter($__internal_77c018b1bd430a17bde8b19a9583d4587dfd778be190b1045978ef7530afcdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-gopn-ext.js"));

        // line 1
        echo "// fallback for IE11 buggy Object.getOwnPropertyNames with iframe and window
var toIObject = require('./_to-iobject');
var gOPN = require('./_object-gopn').f;
var toString = {}.toString;

var windowNames = typeof window == 'object' && window && Object.getOwnPropertyNames
  ? Object.getOwnPropertyNames(window) : [];

var getWindowNames = function (it) {
  try {
    return gOPN(it);
  } catch (e) {
    return windowNames.slice();
  }
};

module.exports.f = function getOwnPropertyNames(it) {
  return windowNames && toString.call(it) == '[object Window]' ? getWindowNames(it) : gOPN(toIObject(it));
};
";
        
        $__internal_77c018b1bd430a17bde8b19a9583d4587dfd778be190b1045978ef7530afcdff->leave($__internal_77c018b1bd430a17bde8b19a9583d4587dfd778be190b1045978ef7530afcdff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-gopn-ext.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// fallback for IE11 buggy Object.getOwnPropertyNames with iframe and window
var toIObject = require('./_to-iobject');
var gOPN = require('./_object-gopn').f;
var toString = {}.toString;

var windowNames = typeof window == 'object' && window && Object.getOwnPropertyNames
  ? Object.getOwnPropertyNames(window) : [];

var getWindowNames = function (it) {
  try {
    return gOPN(it);
  } catch (e) {
    return windowNames.slice();
  }
};

module.exports.f = function getOwnPropertyNames(it) {
  return windowNames && toString.call(it) == '[object Window]' ? getWindowNames(it) : gOPN(toIObject(it));
};
", "node_modules/core-js/modules/_object-gopn-ext.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-gopn-ext.js");
    }
}
