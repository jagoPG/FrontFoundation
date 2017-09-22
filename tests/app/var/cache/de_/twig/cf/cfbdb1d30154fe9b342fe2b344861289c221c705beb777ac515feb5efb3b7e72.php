<?php

/* node_modules/core-js/modules/library/_export.js */
class __TwigTemplate_658f8df967738f579341923fb4432f289e621e6ed76fb6c1d6239c38e7233e29 extends Twig_Template
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
        $__internal_5fb195b6fe08ba5fd6722556ba38ef69d399b8deb5e70fe22bd969a900b008eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb195b6fe08ba5fd6722556ba38ef69d399b8deb5e70fe22bd969a900b008eb->enter($__internal_5fb195b6fe08ba5fd6722556ba38ef69d399b8deb5e70fe22bd969a900b008eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/library/_export.js"));

        // line 1
        echo "var global = require('./_global');
var core = require('./_core');
var ctx = require('./_ctx');
var hide = require('./_hide');
var PROTOTYPE = 'prototype';

var \$export = function (type, name, source) {
  var IS_FORCED = type & \$export.F;
  var IS_GLOBAL = type & \$export.G;
  var IS_STATIC = type & \$export.S;
  var IS_PROTO = type & \$export.P;
  var IS_BIND = type & \$export.B;
  var IS_WRAP = type & \$export.W;
  var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
  var expProto = exports[PROTOTYPE];
  var target = IS_GLOBAL ? global : IS_STATIC ? global[name] : (global[name] || {})[PROTOTYPE];
  var key, own, out;
  if (IS_GLOBAL) source = name;
  for (key in source) {
    // contains in native
    own = !IS_FORCED && target && target[key] !== undefined;
    if (own && key in exports) continue;
    // export native or passed
    out = own ? target[key] : source[key];
    // prevent global pollution for namespaces
    exports[key] = IS_GLOBAL && typeof target[key] != 'function' ? source[key]
    // bind timers to global for call from export context
    : IS_BIND && own ? ctx(out, global)
    // wrap global constructors for prevent change them in library
    : IS_WRAP && target[key] == out ? (function (C) {
      var F = function (a, b, c) {
        if (this instanceof C) {
          switch (arguments.length) {
            case 0: return new C();
            case 1: return new C(a);
            case 2: return new C(a, b);
          } return new C(a, b, c);
        } return C.apply(this, arguments);
      };
      F[PROTOTYPE] = C[PROTOTYPE];
      return F;
    // make static versions for prototype methods
    })(out) : IS_PROTO && typeof out == 'function' ? ctx(Function.call, out) : out;
    // export proto methods to core.%CONSTRUCTOR%.methods.%NAME%
    if (IS_PROTO) {
      (exports.virtual || (exports.virtual = {}))[key] = out;
      // export proto methods to core.%CONSTRUCTOR%.prototype.%NAME%
      if (type & \$export.R && expProto && !expProto[key]) hide(expProto, key, out);
    }
  }
};
// type bitmap
\$export.F = 1;   // forced
\$export.G = 2;   // global
\$export.S = 4;   // static
\$export.P = 8;   // proto
\$export.B = 16;  // bind
\$export.W = 32;  // wrap
\$export.U = 64;  // safe
\$export.R = 128; // real proto method for `library`
module.exports = \$export;
";
        
        $__internal_5fb195b6fe08ba5fd6722556ba38ef69d399b8deb5e70fe22bd969a900b008eb->leave($__internal_5fb195b6fe08ba5fd6722556ba38ef69d399b8deb5e70fe22bd969a900b008eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/library/_export.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var core = require('./_core');
var ctx = require('./_ctx');
var hide = require('./_hide');
var PROTOTYPE = 'prototype';

var \$export = function (type, name, source) {
  var IS_FORCED = type & \$export.F;
  var IS_GLOBAL = type & \$export.G;
  var IS_STATIC = type & \$export.S;
  var IS_PROTO = type & \$export.P;
  var IS_BIND = type & \$export.B;
  var IS_WRAP = type & \$export.W;
  var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
  var expProto = exports[PROTOTYPE];
  var target = IS_GLOBAL ? global : IS_STATIC ? global[name] : (global[name] || {})[PROTOTYPE];
  var key, own, out;
  if (IS_GLOBAL) source = name;
  for (key in source) {
    // contains in native
    own = !IS_FORCED && target && target[key] !== undefined;
    if (own && key in exports) continue;
    // export native or passed
    out = own ? target[key] : source[key];
    // prevent global pollution for namespaces
    exports[key] = IS_GLOBAL && typeof target[key] != 'function' ? source[key]
    // bind timers to global for call from export context
    : IS_BIND && own ? ctx(out, global)
    // wrap global constructors for prevent change them in library
    : IS_WRAP && target[key] == out ? (function (C) {
      var F = function (a, b, c) {
        if (this instanceof C) {
          switch (arguments.length) {
            case 0: return new C();
            case 1: return new C(a);
            case 2: return new C(a, b);
          } return new C(a, b, c);
        } return C.apply(this, arguments);
      };
      F[PROTOTYPE] = C[PROTOTYPE];
      return F;
    // make static versions for prototype methods
    })(out) : IS_PROTO && typeof out == 'function' ? ctx(Function.call, out) : out;
    // export proto methods to core.%CONSTRUCTOR%.methods.%NAME%
    if (IS_PROTO) {
      (exports.virtual || (exports.virtual = {}))[key] = out;
      // export proto methods to core.%CONSTRUCTOR%.prototype.%NAME%
      if (type & \$export.R && expProto && !expProto[key]) hide(expProto, key, out);
    }
  }
};
// type bitmap
\$export.F = 1;   // forced
\$export.G = 2;   // global
\$export.S = 4;   // static
\$export.P = 8;   // proto
\$export.B = 16;  // bind
\$export.W = 32;  // wrap
\$export.U = 64;  // safe
\$export.R = 128; // real proto method for `library`
module.exports = \$export;
", "node_modules/core-js/modules/library/_export.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/library/_export.js");
    }
}
