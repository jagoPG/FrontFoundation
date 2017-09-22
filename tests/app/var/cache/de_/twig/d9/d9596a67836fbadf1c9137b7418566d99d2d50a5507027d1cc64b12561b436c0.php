<?php

/* node_modules/core-js/library/modules/_array-fill.js */
class __TwigTemplate_c4e012d3d0feec9cd0b4c593327b9310510aa9f2164a3b95f0aee2ad29be984d extends Twig_Template
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
        $__internal_56767bc25db70a6b3a02c51506afd269b5c03c55fefcb7aed48eeb76f67b4acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56767bc25db70a6b3a02c51506afd269b5c03c55fefcb7aed48eeb76f67b4acc->enter($__internal_56767bc25db70a6b3a02c51506afd269b5c03c55fefcb7aed48eeb76f67b4acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_array-fill.js"));

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
        
        $__internal_56767bc25db70a6b3a02c51506afd269b5c03c55fefcb7aed48eeb76f67b4acc->leave($__internal_56767bc25db70a6b3a02c51506afd269b5c03c55fefcb7aed48eeb76f67b4acc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_array-fill.js";
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
", "node_modules/core-js/library/modules/_array-fill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_array-fill.js");
    }
}
