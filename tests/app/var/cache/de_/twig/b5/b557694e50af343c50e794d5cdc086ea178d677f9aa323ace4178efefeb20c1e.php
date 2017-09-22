<?php

/* node_modules/core-js/library/modules/es6.number.to-precision.js */
class __TwigTemplate_384185910c90c243258e207122672a0952f240c5ffdda44d1f43cc2454b4f3c7 extends Twig_Template
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
        $__internal_5ea477fd413fda392928192750af1806b04ec1e3687f6cc3c68b02268bce785a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea477fd413fda392928192750af1806b04ec1e3687f6cc3c68b02268bce785a->enter($__internal_5ea477fd413fda392928192750af1806b04ec1e3687f6cc3c68b02268bce785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.number.to-precision.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$fails = require('./_fails');
var aNumberValue = require('./_a-number-value');
var \$toPrecision = 1.0.toPrecision;

\$export(\$export.P + \$export.F * (\$fails(function () {
  // IE7-
  return \$toPrecision.call(1, undefined) !== '1';
}) || !\$fails(function () {
  // V8 ~ Android 4.3-
  \$toPrecision.call({});
})), 'Number', {
  toPrecision: function toPrecision(precision) {
    var that = aNumberValue(this, 'Number#toPrecision: incorrect invocation!');
    return precision === undefined ? \$toPrecision.call(that) : \$toPrecision.call(that, precision);
  }
});
";
        
        $__internal_5ea477fd413fda392928192750af1806b04ec1e3687f6cc3c68b02268bce785a->leave($__internal_5ea477fd413fda392928192750af1806b04ec1e3687f6cc3c68b02268bce785a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.number.to-precision.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$fails = require('./_fails');
var aNumberValue = require('./_a-number-value');
var \$toPrecision = 1.0.toPrecision;

\$export(\$export.P + \$export.F * (\$fails(function () {
  // IE7-
  return \$toPrecision.call(1, undefined) !== '1';
}) || !\$fails(function () {
  // V8 ~ Android 4.3-
  \$toPrecision.call({});
})), 'Number', {
  toPrecision: function toPrecision(precision) {
    var that = aNumberValue(this, 'Number#toPrecision: incorrect invocation!');
    return precision === undefined ? \$toPrecision.call(that) : \$toPrecision.call(that, precision);
  }
});
", "node_modules/core-js/library/modules/es6.number.to-precision.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.number.to-precision.js");
    }
}
