<?php

/* node_modules/core-js/library/modules/web.timers.js */
class __TwigTemplate_327f46c349f25c2739d726e20528d22d3239c03df9e6ba27f543a38e19d83fcb extends Twig_Template
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
        $__internal_3cc6c47d52b9c135ecc1e8926405b102cc361152412278edd5bb1d62a422b96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc6c47d52b9c135ecc1e8926405b102cc361152412278edd5bb1d62a422b96d->enter($__internal_3cc6c47d52b9c135ecc1e8926405b102cc361152412278edd5bb1d62a422b96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/web.timers.js"));

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
        
        $__internal_3cc6c47d52b9c135ecc1e8926405b102cc361152412278edd5bb1d62a422b96d->leave($__internal_3cc6c47d52b9c135ecc1e8926405b102cc361152412278edd5bb1d62a422b96d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/web.timers.js";
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
", "node_modules/core-js/library/modules/web.timers.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/web.timers.js");
    }
}
