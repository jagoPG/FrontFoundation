<?php

/* node_modules/core-js/library/modules/_object-gopn-ext.js */
class __TwigTemplate_e27fc8a368880168691e5ce1b5517b6bf41992ca4adabd968411edbd3a1ec79c extends Twig_Template
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
        $__internal_f417459f8462ddf9ab423797c48507342fb141d1a7d571b66143207580d7017c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f417459f8462ddf9ab423797c48507342fb141d1a7d571b66143207580d7017c->enter($__internal_f417459f8462ddf9ab423797c48507342fb141d1a7d571b66143207580d7017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-gopn-ext.js"));

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
        
        $__internal_f417459f8462ddf9ab423797c48507342fb141d1a7d571b66143207580d7017c->leave($__internal_f417459f8462ddf9ab423797c48507342fb141d1a7d571b66143207580d7017c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-gopn-ext.js";
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
", "node_modules/core-js/library/modules/_object-gopn-ext.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-gopn-ext.js");
    }
}
