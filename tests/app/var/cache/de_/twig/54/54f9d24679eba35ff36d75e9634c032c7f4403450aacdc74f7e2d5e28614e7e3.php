<?php

/* node_modules/core-js/modules/_string-pad.js */
class __TwigTemplate_ace57f9aa2a82da3054576aeb3a40d183b6ea91b495a7b4deb8d1b4dab3f6407 extends Twig_Template
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
        $__internal_73a4c6436958a40274154b62272fbe6918f0896a89b984c084ccfdc269f7c845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a4c6436958a40274154b62272fbe6918f0896a89b984c084ccfdc269f7c845->enter($__internal_73a4c6436958a40274154b62272fbe6918f0896a89b984c084ccfdc269f7c845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_string-pad.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-string-pad-start-end
var toLength = require('./_to-length');
var repeat = require('./_string-repeat');
var defined = require('./_defined');

module.exports = function (that, maxLength, fillString, left) {
  var S = String(defined(that));
  var stringLength = S.length;
  var fillStr = fillString === undefined ? ' ' : String(fillString);
  var intMaxLength = toLength(maxLength);
  if (intMaxLength <= stringLength || fillStr == '') return S;
  var fillLen = intMaxLength - stringLength;
  var stringFiller = repeat.call(fillStr, Math.ceil(fillLen / fillStr.length));
  if (stringFiller.length > fillLen) stringFiller = stringFiller.slice(0, fillLen);
  return left ? stringFiller + S : S + stringFiller;
};
";
        
        $__internal_73a4c6436958a40274154b62272fbe6918f0896a89b984c084ccfdc269f7c845->leave($__internal_73a4c6436958a40274154b62272fbe6918f0896a89b984c084ccfdc269f7c845_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_string-pad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-string-pad-start-end
var toLength = require('./_to-length');
var repeat = require('./_string-repeat');
var defined = require('./_defined');

module.exports = function (that, maxLength, fillString, left) {
  var S = String(defined(that));
  var stringLength = S.length;
  var fillStr = fillString === undefined ? ' ' : String(fillString);
  var intMaxLength = toLength(maxLength);
  if (intMaxLength <= stringLength || fillStr == '') return S;
  var fillLen = intMaxLength - stringLength;
  var stringFiller = repeat.call(fillStr, Math.ceil(fillLen / fillStr.length));
  if (stringFiller.length > fillLen) stringFiller = stringFiller.slice(0, fillLen);
  return left ? stringFiller + S : S + stringFiller;
};
", "node_modules/core-js/modules/_string-pad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_string-pad.js");
    }
}
