<?php

/* node_modules/core-js/library/modules/_object-to-array.js */
class __TwigTemplate_9850eaa7b1be0a437581a653a76eb4ff8cdde20485ac195f9ecf81fd5cfc3635 extends Twig_Template
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
        $__internal_6602652352a24fb822c3ab1248c898c04979123458eb7b8b700085f43cd754a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6602652352a24fb822c3ab1248c898c04979123458eb7b8b700085f43cd754a9->enter($__internal_6602652352a24fb822c3ab1248c898c04979123458eb7b8b700085f43cd754a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-to-array.js"));

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
        
        $__internal_6602652352a24fb822c3ab1248c898c04979123458eb7b8b700085f43cd754a9->leave($__internal_6602652352a24fb822c3ab1248c898c04979123458eb7b8b700085f43cd754a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-to-array.js";
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
", "node_modules/core-js/library/modules/_object-to-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-to-array.js");
    }
}
