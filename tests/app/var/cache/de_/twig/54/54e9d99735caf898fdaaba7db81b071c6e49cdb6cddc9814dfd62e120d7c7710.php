<?php

/* node_modules/core-js/modules/es7.string.match-all.js */
class __TwigTemplate_a124f7b1dfd8a21388729f099c9885da66a17b36bccf26808b4ec9a810006a41 extends Twig_Template
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
        $__internal_602d1c2735cd8f7b5fb200ce8cdcf3607f95f753f4177c3ed99af3650fc1989a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602d1c2735cd8f7b5fb200ce8cdcf3607f95f753f4177c3ed99af3650fc1989a->enter($__internal_602d1c2735cd8f7b5fb200ce8cdcf3607f95f753f4177c3ed99af3650fc1989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.string.match-all.js"));

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
        
        $__internal_602d1c2735cd8f7b5fb200ce8cdcf3607f95f753f4177c3ed99af3650fc1989a->leave($__internal_602d1c2735cd8f7b5fb200ce8cdcf3607f95f753f4177c3ed99af3650fc1989a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.string.match-all.js";
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
", "node_modules/core-js/modules/es7.string.match-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.string.match-all.js");
    }
}
