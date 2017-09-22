<?php

/* node_modules/core-js/library/modules/es7.string.match-all.js */
class __TwigTemplate_49dbc818c061ffcfbfd4b5e2fdb14f9282baef0e0b10d0324d98991453e87709 extends Twig_Template
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
        $__internal_9ba16e6914cc4f9b3759eac2718549d8d8607b6583e61394418a0242b8ebda06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba16e6914cc4f9b3759eac2718549d8d8607b6583e61394418a0242b8ebda06->enter($__internal_9ba16e6914cc4f9b3759eac2718549d8d8607b6583e61394418a0242b8ebda06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.string.match-all.js"));

        // line 1
        echo "'use strict';
// https://tc39.github.io/String.prototype.matchAll/
var \$export = require('./_export');
var defined = require('./_defined');
var toLength = require('./_to-length');
var isRegExp = require('./_is-regexp');
var getFlags = require('./_flags');
var RegExpProto = RegExp.prototype;

var \$RegExpStringIterator = function (regexp, string) {
  this._r = regexp;
  this._s = string;
};

require('./_iter-create')(\$RegExpStringIterator, 'RegExp String', function next() {
  var match = this._r.exec(this._s);
  return { value: match, done: match === null };
});

\$export(\$export.P, 'String', {
  matchAll: function matchAll(regexp) {
    defined(this);
    if (!isRegExp(regexp)) throw TypeError(regexp + ' is not a regexp!');
    var S = String(this);
    var flags = 'flags' in RegExpProto ? String(regexp.flags) : getFlags.call(regexp);
    var rx = new RegExp(regexp.source, ~flags.indexOf('g') ? flags : 'g' + flags);
    rx.lastIndex = toLength(regexp.lastIndex);
    return new \$RegExpStringIterator(rx, S);
  }
});
";
        
        $__internal_9ba16e6914cc4f9b3759eac2718549d8d8607b6583e61394418a0242b8ebda06->leave($__internal_9ba16e6914cc4f9b3759eac2718549d8d8607b6583e61394418a0242b8ebda06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.string.match-all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://tc39.github.io/String.prototype.matchAll/
var \$export = require('./_export');
var defined = require('./_defined');
var toLength = require('./_to-length');
var isRegExp = require('./_is-regexp');
var getFlags = require('./_flags');
var RegExpProto = RegExp.prototype;

var \$RegExpStringIterator = function (regexp, string) {
  this._r = regexp;
  this._s = string;
};

require('./_iter-create')(\$RegExpStringIterator, 'RegExp String', function next() {
  var match = this._r.exec(this._s);
  return { value: match, done: match === null };
});

\$export(\$export.P, 'String', {
  matchAll: function matchAll(regexp) {
    defined(this);
    if (!isRegExp(regexp)) throw TypeError(regexp + ' is not a regexp!');
    var S = String(this);
    var flags = 'flags' in RegExpProto ? String(regexp.flags) : getFlags.call(regexp);
    var rx = new RegExp(regexp.source, ~flags.indexOf('g') ? flags : 'g' + flags);
    rx.lastIndex = toLength(regexp.lastIndex);
    return new \$RegExpStringIterator(rx, S);
  }
});
", "node_modules/core-js/library/modules/es7.string.match-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.string.match-all.js");
    }
}
