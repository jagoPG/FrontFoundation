<?php

/* node_modules/core-js/library/modules/es6.array.of.js */
class __TwigTemplate_af6fb8b873e5a3a6887548218f9057137d1fdf5d3467e99dc50d94f391dcefb4 extends Twig_Template
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
        $__internal_a5c4d5097f55c2a9ed89ba1aa48950b176d5e96ed59993386af46dadb1eef5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c4d5097f55c2a9ed89ba1aa48950b176d5e96ed59993386af46dadb1eef5bb->enter($__internal_a5c4d5097f55c2a9ed89ba1aa48950b176d5e96ed59993386af46dadb1eef5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.of.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var createProperty = require('./_create-property');

// WebKit Array.of isn't generic
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  function F() { /* empty */ }
  return !(Array.of.call(F) instanceof F);
}), 'Array', {
  // 22.1.2.3 Array.of( ...items)
  of: function of(/* ...args */) {
    var index = 0;
    var aLen = arguments.length;
    var result = new (typeof this == 'function' ? this : Array)(aLen);
    while (aLen > index) createProperty(result, index, arguments[index++]);
    result.length = aLen;
    return result;
  }
});
";
        
        $__internal_a5c4d5097f55c2a9ed89ba1aa48950b176d5e96ed59993386af46dadb1eef5bb->leave($__internal_a5c4d5097f55c2a9ed89ba1aa48950b176d5e96ed59993386af46dadb1eef5bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var createProperty = require('./_create-property');

// WebKit Array.of isn't generic
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  function F() { /* empty */ }
  return !(Array.of.call(F) instanceof F);
}), 'Array', {
  // 22.1.2.3 Array.of( ...items)
  of: function of(/* ...args */) {
    var index = 0;
    var aLen = arguments.length;
    var result = new (typeof this == 'function' ? this : Array)(aLen);
    while (aLen > index) createProperty(result, index, arguments[index++]);
    result.length = aLen;
    return result;
  }
});
", "node_modules/core-js/library/modules/es6.array.of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.of.js");
    }
}
