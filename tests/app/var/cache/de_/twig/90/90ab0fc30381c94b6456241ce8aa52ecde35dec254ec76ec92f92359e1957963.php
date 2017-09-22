<?php

/* node_modules/core-js/modules/library/es6.date.to-json.js */
class __TwigTemplate_5de8b2c7c15276f9af9e7d09ed0b6a0bb8a49207643ab33cff00041ef94c2327 extends Twig_Template
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
        $__internal_dc5f56380ffb318b4a245ce953a2d0bdc097d3336a413064b0242270b10b0519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5f56380ffb318b4a245ce953a2d0bdc097d3336a413064b0242270b10b0519->enter($__internal_dc5f56380ffb318b4a245ce953a2d0bdc097d3336a413064b0242270b10b0519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/library/es6.date.to-json.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var toObject = require('./_to-object');
var toPrimitive = require('./_to-primitive');
var toISOString = require('./_date-to-iso-string');
var classof = require('./_classof');

\$export(\$export.P + \$export.F * require('./_fails')(function () {
  return new Date(NaN).toJSON() !== null
    || Date.prototype.toJSON.call({ toISOString: function () { return 1; } }) !== 1;
}), 'Date', {
  // eslint-disable-next-line no-unused-vars
  toJSON: function toJSON(key) {
    var O = toObject(this);
    var pv = toPrimitive(O);
    return typeof pv == 'number' && !isFinite(pv) ? null :
      (!('toISOString' in O) && classof(O) == 'Date') ? toISOString.call(O) : O.toISOString();
  }
});
";
        
        $__internal_dc5f56380ffb318b4a245ce953a2d0bdc097d3336a413064b0242270b10b0519->leave($__internal_dc5f56380ffb318b4a245ce953a2d0bdc097d3336a413064b0242270b10b0519_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/library/es6.date.to-json.js";
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
var toISOString = require('./_date-to-iso-string');
var classof = require('./_classof');

\$export(\$export.P + \$export.F * require('./_fails')(function () {
  return new Date(NaN).toJSON() !== null
    || Date.prototype.toJSON.call({ toISOString: function () { return 1; } }) !== 1;
}), 'Date', {
  // eslint-disable-next-line no-unused-vars
  toJSON: function toJSON(key) {
    var O = toObject(this);
    var pv = toPrimitive(O);
    return typeof pv == 'number' && !isFinite(pv) ? null :
      (!('toISOString' in O) && classof(O) == 'Date') ? toISOString.call(O) : O.toISOString();
  }
});
", "node_modules/core-js/modules/library/es6.date.to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/library/es6.date.to-json.js");
    }
}
