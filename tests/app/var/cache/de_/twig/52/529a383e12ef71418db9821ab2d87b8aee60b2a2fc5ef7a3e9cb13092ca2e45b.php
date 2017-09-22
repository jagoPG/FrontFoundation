<?php

/* node_modules/core-js/modules/_flags.js */
class __TwigTemplate_bef882068fd15e037a9cb334123b35e0cd40f31667460b762a4be64f00ff8a65 extends Twig_Template
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
        $__internal_02ac9ad78da9dd90f123aa3b97a228ea4dc267eb0d2b694e784c87494899d6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ac9ad78da9dd90f123aa3b97a228ea4dc267eb0d2b694e784c87494899d6c6->enter($__internal_02ac9ad78da9dd90f123aa3b97a228ea4dc267eb0d2b694e784c87494899d6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_flags.js"));

        // line 1
        echo "'use strict';
// 21.2.5.3 get RegExp.prototype.flags
var anObject = require('./_an-object');
module.exports = function () {
  var that = anObject(this);
  var result = '';
  if (that.global) result += 'g';
  if (that.ignoreCase) result += 'i';
  if (that.multiline) result += 'm';
  if (that.unicode) result += 'u';
  if (that.sticky) result += 'y';
  return result;
};
";
        
        $__internal_02ac9ad78da9dd90f123aa3b97a228ea4dc267eb0d2b694e784c87494899d6c6->leave($__internal_02ac9ad78da9dd90f123aa3b97a228ea4dc267eb0d2b694e784c87494899d6c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_flags.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 21.2.5.3 get RegExp.prototype.flags
var anObject = require('./_an-object');
module.exports = function () {
  var that = anObject(this);
  var result = '';
  if (that.global) result += 'g';
  if (that.ignoreCase) result += 'i';
  if (that.multiline) result += 'm';
  if (that.unicode) result += 'u';
  if (that.sticky) result += 'y';
  return result;
};
", "node_modules/core-js/modules/_flags.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_flags.js");
    }
}
