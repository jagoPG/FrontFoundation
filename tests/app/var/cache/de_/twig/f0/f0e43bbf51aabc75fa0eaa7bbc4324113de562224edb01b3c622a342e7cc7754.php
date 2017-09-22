<?php

/* node_modules/core-js/modules/_object-sap.js */
class __TwigTemplate_9298325aeae96efbe7ae27f6d143fc871cf4f98c91a7b0d95a258259d83ca2d4 extends Twig_Template
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
        $__internal_874b13b3db7301e9b2828a14c5dd4b043be0b5b10fd2d0ce9c09fd64c30417a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874b13b3db7301e9b2828a14c5dd4b043be0b5b10fd2d0ce9c09fd64c30417a7->enter($__internal_874b13b3db7301e9b2828a14c5dd4b043be0b5b10fd2d0ce9c09fd64c30417a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-sap.js"));

        // line 1
        echo "// most Object methods by ES6 should accept primitives
var \$export = require('./_export');
var core = require('./_core');
var fails = require('./_fails');
module.exports = function (KEY, exec) {
  var fn = (core.Object || {})[KEY] || Object[KEY];
  var exp = {};
  exp[KEY] = exec(fn);
  \$export(\$export.S + \$export.F * fails(function () { fn(1); }), 'Object', exp);
};
";
        
        $__internal_874b13b3db7301e9b2828a14c5dd4b043be0b5b10fd2d0ce9c09fd64c30417a7->leave($__internal_874b13b3db7301e9b2828a14c5dd4b043be0b5b10fd2d0ce9c09fd64c30417a7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-sap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// most Object methods by ES6 should accept primitives
var \$export = require('./_export');
var core = require('./_core');
var fails = require('./_fails');
module.exports = function (KEY, exec) {
  var fn = (core.Object || {})[KEY] || Object[KEY];
  var exp = {};
  exp[KEY] = exec(fn);
  \$export(\$export.S + \$export.F * fails(function () { fn(1); }), 'Object', exp);
};
", "node_modules/core-js/modules/_object-sap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-sap.js");
    }
}
