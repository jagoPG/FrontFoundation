<?php

/* node_modules/core-js/library/modules/es6.date.to-json.js */
class __TwigTemplate_959c25d92ac348c517f0c247c3f9b3e7d6b4c33f57282ad2f1ed00d43afdc6b4 extends Twig_Template
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
        $__internal_e830487d22073259a3a918c690b2a92c5818b580be08ce3665d3ed779ba93407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e830487d22073259a3a918c690b2a92c5818b580be08ce3665d3ed779ba93407->enter($__internal_e830487d22073259a3a918c690b2a92c5818b580be08ce3665d3ed779ba93407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.date.to-json.js"));

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
        
        $__internal_e830487d22073259a3a918c690b2a92c5818b580be08ce3665d3ed779ba93407->leave($__internal_e830487d22073259a3a918c690b2a92c5818b580be08ce3665d3ed779ba93407_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.date.to-json.js";
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
", "node_modules/core-js/library/modules/es6.date.to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.date.to-json.js");
    }
}
