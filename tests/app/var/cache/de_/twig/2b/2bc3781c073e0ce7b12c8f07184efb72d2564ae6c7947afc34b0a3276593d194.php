<?php

/* node_modules/core-js/library/modules/_flags.js */
class __TwigTemplate_5f083359970ca907bf005f89665c331096b640840f7cee776bf125a32af8f7e6 extends Twig_Template
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
        $__internal_95bbdfb9ad9a3d519d704a2c48b6534f319d335743f648afa7a2f8c9810d66c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bbdfb9ad9a3d519d704a2c48b6534f319d335743f648afa7a2f8c9810d66c9->enter($__internal_95bbdfb9ad9a3d519d704a2c48b6534f319d335743f648afa7a2f8c9810d66c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_flags.js"));

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
        
        $__internal_95bbdfb9ad9a3d519d704a2c48b6534f319d335743f648afa7a2f8c9810d66c9->leave($__internal_95bbdfb9ad9a3d519d704a2c48b6534f319d335743f648afa7a2f8c9810d66c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_flags.js";
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
", "node_modules/core-js/library/modules/_flags.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_flags.js");
    }
}
