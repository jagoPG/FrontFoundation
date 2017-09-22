<?php

/* node_modules/core-js/modules/_export.js */
class __TwigTemplate_68e888b4375fab5c8ab49a7616f0c3ef69247872910e3d7c0ff84c5b8008dc53 extends Twig_Template
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
        $__internal_806b3eb428e610b0bcbcb1cbe0a62fe020195d32ba17f53274659daeab3a7271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806b3eb428e610b0bcbcb1cbe0a62fe020195d32ba17f53274659daeab3a7271->enter($__internal_806b3eb428e610b0bcbcb1cbe0a62fe020195d32ba17f53274659daeab3a7271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_export.js"));

        // line 1
        echo "var global = require('./_global');
var core = require('./_core');
var hide = require('./_hide');
var redefine = require('./_redefine');
var ctx = require('./_ctx');
var PROTOTYPE = 'prototype';

var \$export = function (type, name, source) {
  var IS_FORCED = type & \$export.F;
  var IS_GLOBAL = type & \$export.G;
  var IS_STATIC = type & \$export.S;
  var IS_PROTO = type & \$export.P;
  var IS_BIND = type & \$export.B;
  var target = IS_GLOBAL ? global : IS_STATIC ? global[name] || (global[name] = {}) : (global[name] || {})[PROTOTYPE];
  var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
  var expProto = exports[PROTOTYPE] || (exports[PROTOTYPE] = {});
  var key, own, out, exp;
  if (IS_GLOBAL) source = name;
  for (key in source) {
    // contains in native
    own = !IS_FORCED && target && target[key] !== undefined;
    // export native or passed
    out = (own ? target : source)[key];
    // bind timers to global for call from export context
    exp = IS_BIND && own ? ctx(out, global) : IS_PROTO && typeof out == 'function' ? ctx(Function.call, out) : out;
    // extend global
    if (target) redefine(target, key, out, type & \$export.U);
    // export
    if (exports[key] != out) hide(exports, key, exp);
    if (IS_PROTO && expProto[key] != out) expProto[key] = out;
  }
};
global.core = core;
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
        
        $__internal_806b3eb428e610b0bcbcb1cbe0a62fe020195d32ba17f53274659daeab3a7271->leave($__internal_806b3eb428e610b0bcbcb1cbe0a62fe020195d32ba17f53274659daeab3a7271_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_export.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var global = require('./_global');
var core = require('./_core');
var hide = require('./_hide');
var redefine = require('./_redefine');
var ctx = require('./_ctx');
var PROTOTYPE = 'prototype';

var \$export = function (type, name, source) {
  var IS_FORCED = type & \$export.F;
  var IS_GLOBAL = type & \$export.G;
  var IS_STATIC = type & \$export.S;
  var IS_PROTO = type & \$export.P;
  var IS_BIND = type & \$export.B;
  var target = IS_GLOBAL ? global : IS_STATIC ? global[name] || (global[name] = {}) : (global[name] || {})[PROTOTYPE];
  var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
  var expProto = exports[PROTOTYPE] || (exports[PROTOTYPE] = {});
  var key, own, out, exp;
  if (IS_GLOBAL) source = name;
  for (key in source) {
    // contains in native
    own = !IS_FORCED && target && target[key] !== undefined;
    // export native or passed
    out = (own ? target : source)[key];
    // bind timers to global for call from export context
    exp = IS_BIND && own ? ctx(out, global) : IS_PROTO && typeof out == 'function' ? ctx(Function.call, out) : out;
    // extend global
    if (target) redefine(target, key, out, type & \$export.U);
    // export
    if (exports[key] != out) hide(exports, key, exp);
    if (IS_PROTO && expProto[key] != out) expProto[key] = out;
  }
};
global.core = core;
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
", "node_modules/core-js/modules/_export.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_export.js");
    }
}
