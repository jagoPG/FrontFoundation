<?php

/* node_modules/core-js/modules/web.timers.js */
class __TwigTemplate_33cd49aaeb377ff8048462066a156e2b6c3610fe48f9266b3d8ee17c8b3d29d4 extends Twig_Template
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
        $__internal_928d3b89c054898ad1026d6e88a02389b6f24bf676a47979b9da7cf2ef2472cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928d3b89c054898ad1026d6e88a02389b6f24bf676a47979b9da7cf2ef2472cf->enter($__internal_928d3b89c054898ad1026d6e88a02389b6f24bf676a47979b9da7cf2ef2472cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/web.timers.js"));

        // line 1
        echo "// ie9- setTimeout & setInterval additional parameters fix
var global = require('./_global');
var \$export = require('./_export');
var navigator = global.navigator;
var slice = [].slice;
var MSIE = !!navigator && /MSIE .\\./.test(navigator.userAgent); // <- dirty ie9- check
var wrap = function (set) {
  return function (fn, time /* , ...args */) {
    var boundArgs = arguments.length > 2;
    var args = boundArgs ? slice.call(arguments, 2) : false;
    return set(boundArgs ? function () {
      // eslint-disable-next-line no-new-func
      (typeof fn == 'function' ? fn : Function(fn)).apply(this, args);
    } : fn, time);
  };
};
\$export(\$export.G + \$export.B + \$export.F * MSIE, {
  setTimeout: wrap(global.setTimeout),
  setInterval: wrap(global.setInterval)
});
";
        
        $__internal_928d3b89c054898ad1026d6e88a02389b6f24bf676a47979b9da7cf2ef2472cf->leave($__internal_928d3b89c054898ad1026d6e88a02389b6f24bf676a47979b9da7cf2ef2472cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/web.timers.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// ie9- setTimeout & setInterval additional parameters fix
var global = require('./_global');
var \$export = require('./_export');
var navigator = global.navigator;
var slice = [].slice;
var MSIE = !!navigator && /MSIE .\\./.test(navigator.userAgent); // <- dirty ie9- check
var wrap = function (set) {
  return function (fn, time /* , ...args */) {
    var boundArgs = arguments.length > 2;
    var args = boundArgs ? slice.call(arguments, 2) : false;
    return set(boundArgs ? function () {
      // eslint-disable-next-line no-new-func
      (typeof fn == 'function' ? fn : Function(fn)).apply(this, args);
    } : fn, time);
  };
};
\$export(\$export.G + \$export.B + \$export.F * MSIE, {
  setTimeout: wrap(global.setTimeout),
  setInterval: wrap(global.setInterval)
});
", "node_modules/core-js/modules/web.timers.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/web.timers.js");
    }
}
