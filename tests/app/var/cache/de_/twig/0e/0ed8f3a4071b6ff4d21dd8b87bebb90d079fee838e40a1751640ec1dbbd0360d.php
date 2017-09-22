<?php

/* node_modules/core-js/library/modules/es6.array.some.js */
class __TwigTemplate_dc0d6ca7955c6ccde7ba35e0ab4d5407f96e929f80ae466134a7f2142104c117 extends Twig_Template
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
        $__internal_a2365df8e863bc55c3d66f5d5ec0d9b2f81651cde5d8ccbe7048ff93ce22c50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2365df8e863bc55c3d66f5d5ec0d9b2f81651cde5d8ccbe7048ff93ce22c50f->enter($__internal_a2365df8e863bc55c3d66f5d5ec0d9b2f81651cde5d8ccbe7048ff93ce22c50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.some.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$some = require('./_array-methods')(3);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].some, true), 'Array', {
  // 22.1.3.23 / 15.4.4.17 Array.prototype.some(callbackfn [, thisArg])
  some: function some(callbackfn /* , thisArg */) {
    return \$some(this, callbackfn, arguments[1]);
  }
});
";
        
        $__internal_a2365df8e863bc55c3d66f5d5ec0d9b2f81651cde5d8ccbe7048ff93ce22c50f->leave($__internal_a2365df8e863bc55c3d66f5d5ec0d9b2f81651cde5d8ccbe7048ff93ce22c50f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$some = require('./_array-methods')(3);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].some, true), 'Array', {
  // 22.1.3.23 / 15.4.4.17 Array.prototype.some(callbackfn [, thisArg])
  some: function some(callbackfn /* , thisArg */) {
    return \$some(this, callbackfn, arguments[1]);
  }
});
", "node_modules/core-js/library/modules/es6.array.some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.some.js");
    }
}
