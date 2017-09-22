<?php

/* node_modules/core-js/modules/es6.array.for-each.js */
class __TwigTemplate_922c40a04d1cb84af229c3333eb0d1bb8b894e0d56d769e8e65cb98ede8b918a extends Twig_Template
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
        $__internal_e18e26677a0dd63fd4066047fc7ed35f7fd4f864f59c640797d27b895bb6cc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18e26677a0dd63fd4066047fc7ed35f7fd4f864f59c640797d27b895bb6cc3c->enter($__internal_e18e26677a0dd63fd4066047fc7ed35f7fd4f864f59c640797d27b895bb6cc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.for-each.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$forEach = require('./_array-methods')(0);
var STRICT = require('./_strict-method')([].forEach, true);

\$export(\$export.P + \$export.F * !STRICT, 'Array', {
  // 22.1.3.10 / 15.4.4.18 Array.prototype.forEach(callbackfn [, thisArg])
  forEach: function forEach(callbackfn /* , thisArg */) {
    return \$forEach(this, callbackfn, arguments[1]);
  }
});
";
        
        $__internal_e18e26677a0dd63fd4066047fc7ed35f7fd4f864f59c640797d27b895bb6cc3c->leave($__internal_e18e26677a0dd63fd4066047fc7ed35f7fd4f864f59c640797d27b895bb6cc3c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$forEach = require('./_array-methods')(0);
var STRICT = require('./_strict-method')([].forEach, true);

\$export(\$export.P + \$export.F * !STRICT, 'Array', {
  // 22.1.3.10 / 15.4.4.18 Array.prototype.forEach(callbackfn [, thisArg])
  forEach: function forEach(callbackfn /* , thisArg */) {
    return \$forEach(this, callbackfn, arguments[1]);
  }
});
", "node_modules/core-js/modules/es6.array.for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.for-each.js");
    }
}
