<?php

/* node_modules/core-js/library/modules/_object-keys-internal.js */
class __TwigTemplate_5036724edbf18327f7bf3cdadd0865520fbc2d85e6038d06518eb7f410871f90 extends Twig_Template
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
        $__internal_f9d26f563d9aea026cb0148d764cb9a7b464d40d380bd8bf72ae9bca091e7c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d26f563d9aea026cb0148d764cb9a7b464d40d380bd8bf72ae9bca091e7c67->enter($__internal_f9d26f563d9aea026cb0148d764cb9a7b464d40d380bd8bf72ae9bca091e7c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-keys-internal.js"));

        // line 1
        echo "var has = require('./_has');
var toIObject = require('./_to-iobject');
var arrayIndexOf = require('./_array-includes')(false);
var IE_PROTO = require('./_shared-key')('IE_PROTO');

module.exports = function (object, names) {
  var O = toIObject(object);
  var i = 0;
  var result = [];
  var key;
  for (key in O) if (key != IE_PROTO) has(O, key) && result.push(key);
  // Don't enum bug & hidden keys
  while (names.length > i) if (has(O, key = names[i++])) {
    ~arrayIndexOf(result, key) || result.push(key);
  }
  return result;
};
";
        
        $__internal_f9d26f563d9aea026cb0148d764cb9a7b464d40d380bd8bf72ae9bca091e7c67->leave($__internal_f9d26f563d9aea026cb0148d764cb9a7b464d40d380bd8bf72ae9bca091e7c67_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-keys-internal.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var has = require('./_has');
var toIObject = require('./_to-iobject');
var arrayIndexOf = require('./_array-includes')(false);
var IE_PROTO = require('./_shared-key')('IE_PROTO');

module.exports = function (object, names) {
  var O = toIObject(object);
  var i = 0;
  var result = [];
  var key;
  for (key in O) if (key != IE_PROTO) has(O, key) && result.push(key);
  // Don't enum bug & hidden keys
  while (names.length > i) if (has(O, key = names[i++])) {
    ~arrayIndexOf(result, key) || result.push(key);
  }
  return result;
};
", "node_modules/core-js/library/modules/_object-keys-internal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-keys-internal.js");
    }
}
