<?php

/* node_modules/core-js/modules/es6.regexp.constructor.js */
class __TwigTemplate_5bc5d802db2313ea8db8f455aa27d01e99fd41f3371d22930966474b9ff05bef extends Twig_Template
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
        $__internal_c73227159ebcd82c17d4f5bca8b574f241532a2f73af39724a5cdd50c9df395a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73227159ebcd82c17d4f5bca8b574f241532a2f73af39724a5cdd50c9df395a->enter($__internal_c73227159ebcd82c17d4f5bca8b574f241532a2f73af39724a5cdd50c9df395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.regexp.constructor.js"));

        // line 1
        echo "var global = require('./_global');
var inheritIfRequired = require('./_inherit-if-required');
var dP = require('./_object-dp').f;
var gOPN = require('./_object-gopn').f;
var isRegExp = require('./_is-regexp');
var \$flags = require('./_flags');
var \$RegExp = global.RegExp;
var Base = \$RegExp;
var proto = \$RegExp.prototype;
var re1 = /a/g;
var re2 = /a/g;
// \"new\" creates a new object, old webkit buggy here
var CORRECT_NEW = new \$RegExp(re1) !== re1;

if (require('./_descriptors') && (!CORRECT_NEW || require('./_fails')(function () {
  re2[require('./_wks')('match')] = false;
  // RegExp constructor can alter flags and IsRegExp works correct with @@match
  return \$RegExp(re1) != re1 || \$RegExp(re2) == re2 || \$RegExp(re1, 'i') != '/a/i';
}))) {
  \$RegExp = function RegExp(p, f) {
    var tiRE = this instanceof \$RegExp;
    var piRE = isRegExp(p);
    var fiU = f === undefined;
    return !tiRE && piRE && p.constructor === \$RegExp && fiU ? p
      : inheritIfRequired(CORRECT_NEW
        ? new Base(piRE && !fiU ? p.source : p, f)
        : Base((piRE = p instanceof \$RegExp) ? p.source : p, piRE && fiU ? \$flags.call(p) : f)
      , tiRE ? this : proto, \$RegExp);
  };
  var proxy = function (key) {
    key in \$RegExp || dP(\$RegExp, key, {
      configurable: true,
      get: function () { return Base[key]; },
      set: function (it) { Base[key] = it; }
    });
  };
  for (var keys = gOPN(Base), i = 0; keys.length > i;) proxy(keys[i++]);
  proto.constructor = \$RegExp;
  \$RegExp.prototype = proto;
  require('./_redefine')(global, 'RegExp', \$RegExp);
}

require('./_set-species')('RegExp');
";
        
        $__internal_c73227159ebcd82c17d4f5bca8b574f241532a2f73af39724a5cdd50c9df395a->leave($__internal_c73227159ebcd82c17d4f5bca8b574f241532a2f73af39724a5cdd50c9df395a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.regexp.constructor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var inheritIfRequired = require('./_inherit-if-required');
var dP = require('./_object-dp').f;
var gOPN = require('./_object-gopn').f;
var isRegExp = require('./_is-regexp');
var \$flags = require('./_flags');
var \$RegExp = global.RegExp;
var Base = \$RegExp;
var proto = \$RegExp.prototype;
var re1 = /a/g;
var re2 = /a/g;
// \"new\" creates a new object, old webkit buggy here
var CORRECT_NEW = new \$RegExp(re1) !== re1;

if (require('./_descriptors') && (!CORRECT_NEW || require('./_fails')(function () {
  re2[require('./_wks')('match')] = false;
  // RegExp constructor can alter flags and IsRegExp works correct with @@match
  return \$RegExp(re1) != re1 || \$RegExp(re2) == re2 || \$RegExp(re1, 'i') != '/a/i';
}))) {
  \$RegExp = function RegExp(p, f) {
    var tiRE = this instanceof \$RegExp;
    var piRE = isRegExp(p);
    var fiU = f === undefined;
    return !tiRE && piRE && p.constructor === \$RegExp && fiU ? p
      : inheritIfRequired(CORRECT_NEW
        ? new Base(piRE && !fiU ? p.source : p, f)
        : Base((piRE = p instanceof \$RegExp) ? p.source : p, piRE && fiU ? \$flags.call(p) : f)
      , tiRE ? this : proto, \$RegExp);
  };
  var proxy = function (key) {
    key in \$RegExp || dP(\$RegExp, key, {
      configurable: true,
      get: function () { return Base[key]; },
      set: function (it) { Base[key] = it; }
    });
  };
  for (var keys = gOPN(Base), i = 0; keys.length > i;) proxy(keys[i++]);
  proto.constructor = \$RegExp;
  \$RegExp.prototype = proto;
  require('./_redefine')(global, 'RegExp', \$RegExp);
}

require('./_set-species')('RegExp');
", "node_modules/core-js/modules/es6.regexp.constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.regexp.constructor.js");
    }
}
