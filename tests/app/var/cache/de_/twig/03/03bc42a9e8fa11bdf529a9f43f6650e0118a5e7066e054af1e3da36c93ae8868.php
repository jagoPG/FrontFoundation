<?php

/* node_modules/core-js/modules/es6.number.to-precision.js */
class __TwigTemplate_7bc7b948d6eef39b50880c534a5521535ddd208295458ba1752fb273843e38f5 extends Twig_Template
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
        $__internal_055a9655cf60fb2f49aba030c2de29299f68375580e3a6dad9681cd620edd221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055a9655cf60fb2f49aba030c2de29299f68375580e3a6dad9681cd620edd221->enter($__internal_055a9655cf60fb2f49aba030c2de29299f68375580e3a6dad9681cd620edd221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.to-precision.js"));

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
        
        $__internal_055a9655cf60fb2f49aba030c2de29299f68375580e3a6dad9681cd620edd221->leave($__internal_055a9655cf60fb2f49aba030c2de29299f68375580e3a6dad9681cd620edd221_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.to-precision.js";
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
", "node_modules/core-js/modules/es6.number.to-precision.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.to-precision.js");
    }
}