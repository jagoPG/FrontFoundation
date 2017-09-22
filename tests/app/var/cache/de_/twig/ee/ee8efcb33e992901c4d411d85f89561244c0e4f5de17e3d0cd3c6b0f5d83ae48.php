<?php

/* node_modules/core-js/library/modules/_string-at.js */
class __TwigTemplate_4e82915c6864e26a4b96024af9af6fefee671e11e8a1f76b8dcf83ab9ef6532b extends Twig_Template
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
        $__internal_9d5242805281aa665b5928764f1ae7a4504acfe37e1f54a952e8e1540fb4dd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5242805281aa665b5928764f1ae7a4504acfe37e1f54a952e8e1540fb4dd9b->enter($__internal_9d5242805281aa665b5928764f1ae7a4504acfe37e1f54a952e8e1540fb4dd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_string-at.js"));

        // line 1
        echo "var toInteger = require('./_to-integer');
var defined = require('./_defined');
// true  -> String#at
// false -> String#codePointAt
module.exports = function (TO_STRING) {
  return function (that, pos) {
    var s = String(defined(that));
    var i = toInteger(pos);
    var l = s.length;
    var a, b;
    if (i < 0 || i >= l) return TO_STRING ? '' : undefined;
    a = s.charCodeAt(i);
    return a < 0xd800 || a > 0xdbff || i + 1 === l || (b = s.charCodeAt(i + 1)) < 0xdc00 || b > 0xdfff
      ? TO_STRING ? s.charAt(i) : a
      : TO_STRING ? s.slice(i, i + 2) : (a - 0xd800 << 10) + (b - 0xdc00) + 0x10000;
  };
};
";
        
        $__internal_9d5242805281aa665b5928764f1ae7a4504acfe37e1f54a952e8e1540fb4dd9b->leave($__internal_9d5242805281aa665b5928764f1ae7a4504acfe37e1f54a952e8e1540fb4dd9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_string-at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toInteger = require('./_to-integer');
var defined = require('./_defined');
// true  -> String#at
// false -> String#codePointAt
module.exports = function (TO_STRING) {
  return function (that, pos) {
    var s = String(defined(that));
    var i = toInteger(pos);
    var l = s.length;
    var a, b;
    if (i < 0 || i >= l) return TO_STRING ? '' : undefined;
    a = s.charCodeAt(i);
    return a < 0xd800 || a > 0xdbff || i + 1 === l || (b = s.charCodeAt(i + 1)) < 0xdc00 || b > 0xdfff
      ? TO_STRING ? s.charAt(i) : a
      : TO_STRING ? s.slice(i, i + 2) : (a - 0xd800 << 10) + (b - 0xdc00) + 0x10000;
  };
};
", "node_modules/core-js/library/modules/_string-at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_string-at.js");
    }
}
