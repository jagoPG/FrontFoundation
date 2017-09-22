<?php

/* node_modules/core-js/modules/es6.date.to-json.js */
class __TwigTemplate_68f07b628459135f85e5ecc7c4c0dda613b437bd8c28d393ef032e38dd96d656 extends Twig_Template
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
        $__internal_4913ea5292edb32583d49aa7622d3aff31eeda6f4bf75040cac22cda17bd4424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4913ea5292edb32583d49aa7622d3aff31eeda6f4bf75040cac22cda17bd4424->enter($__internal_4913ea5292edb32583d49aa7622d3aff31eeda6f4bf75040cac22cda17bd4424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.date.to-json.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var toPrimitive = require('./_to-primitive');

\$export(\$export.P + \$export.F * require('./_fails')(function () {
  return new Date(NaN).toJSON() !== null
    || Date.prototype.toJSON.call({ toISOString: function () { return 1; } }) !== 1;
}), 'Date', {
  // eslint-disable-next-line no-unused-vars
  toJSON: function toJSON(key) {
    var O = toObject(this);
    var pv = toPrimitive(O);
    return typeof pv == 'number' && !isFinite(pv) ? null : O.toISOString();
  }
});
";
        
        $__internal_4913ea5292edb32583d49aa7622d3aff31eeda6f4bf75040cac22cda17bd4424->leave($__internal_4913ea5292edb32583d49aa7622d3aff31eeda6f4bf75040cac22cda17bd4424_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.date.to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var toPrimitive = require('./_to-primitive');

\$export(\$export.P + \$export.F * require('./_fails')(function () {
  return new Date(NaN).toJSON() !== null
    || Date.prototype.toJSON.call({ toISOString: function () { return 1; } }) !== 1;
}), 'Date', {
  // eslint-disable-next-line no-unused-vars
  toJSON: function toJSON(key) {
    var O = toObject(this);
    var pv = toPrimitive(O);
    return typeof pv == 'number' && !isFinite(pv) ? null : O.toISOString();
  }
});
", "node_modules/core-js/modules/es6.date.to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.date.to-json.js");
    }
}
