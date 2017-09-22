<?php

/* node_modules/core-js/modules/_array-fill.js */
class __TwigTemplate_185153c3fd20722a0f48add2c0101edea04a19244aa58112d06fd9b678374044 extends Twig_Template
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
        $__internal_abf83d7862c61413a8b7899d6654479d57fcea89370fef7233d1fc746f84a1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf83d7862c61413a8b7899d6654479d57fcea89370fef7233d1fc746f84a1c9->enter($__internal_abf83d7862c61413a8b7899d6654479d57fcea89370fef7233d1fc746f84a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_array-fill.js"));

        // line 1
        echo "// 22.1.3.6 Array.prototype.fill(value, start = 0, end = this.length)
'use strict';
var toObject = require('./_to-object');
var toAbsoluteIndex = require('./_to-absolute-index');
var toLength = require('./_to-length');
module.exports = function fill(value /* , start = 0, end = @length */) {
  var O = toObject(this);
  var length = toLength(O.length);
  var aLen = arguments.length;
  var index = toAbsoluteIndex(aLen > 1 ? arguments[1] : undefined, length);
  var end = aLen > 2 ? arguments[2] : undefined;
  var endPos = end === undefined ? length : toAbsoluteIndex(end, length);
  while (endPos > index) O[index++] = value;
  return O;
};
";
        
        $__internal_abf83d7862c61413a8b7899d6654479d57fcea89370fef7233d1fc746f84a1c9->leave($__internal_abf83d7862c61413a8b7899d6654479d57fcea89370fef7233d1fc746f84a1c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_array-fill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 22.1.3.6 Array.prototype.fill(value, start = 0, end = this.length)
'use strict';
var toObject = require('./_to-object');
var toAbsoluteIndex = require('./_to-absolute-index');
var toLength = require('./_to-length');
module.exports = function fill(value /* , start = 0, end = @length */) {
  var O = toObject(this);
  var length = toLength(O.length);
  var aLen = arguments.length;
  var index = toAbsoluteIndex(aLen > 1 ? arguments[1] : undefined, length);
  var end = aLen > 2 ? arguments[2] : undefined;
  var endPos = end === undefined ? length : toAbsoluteIndex(end, length);
  while (endPos > index) O[index++] = value;
  return O;
};
", "node_modules/core-js/modules/_array-fill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_array-fill.js");
    }
}
