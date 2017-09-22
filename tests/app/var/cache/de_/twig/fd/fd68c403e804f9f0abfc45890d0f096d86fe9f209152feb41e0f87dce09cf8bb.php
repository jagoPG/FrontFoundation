<?php

/* node_modules/core-js/modules/_object-keys-internal.js */
class __TwigTemplate_4bd67936b97dbf32a587468f3e8780e02fce4e553b11f9ba6592b3242b782503 extends Twig_Template
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
        $__internal_5f5a01bc1eec42f09c800b640c8130199e910fb1347de8adac5152f0b16736bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5a01bc1eec42f09c800b640c8130199e910fb1347de8adac5152f0b16736bf->enter($__internal_5f5a01bc1eec42f09c800b640c8130199e910fb1347de8adac5152f0b16736bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-keys-internal.js"));

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
        
        $__internal_5f5a01bc1eec42f09c800b640c8130199e910fb1347de8adac5152f0b16736bf->leave($__internal_5f5a01bc1eec42f09c800b640c8130199e910fb1347de8adac5152f0b16736bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-keys-internal.js";
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
", "node_modules/core-js/modules/_object-keys-internal.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-keys-internal.js");
    }
}
