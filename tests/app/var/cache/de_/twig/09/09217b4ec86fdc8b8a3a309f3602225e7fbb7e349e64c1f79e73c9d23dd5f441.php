<?php

/* node_modules/core-js/library/modules/es6.array.filter.js */
class __TwigTemplate_817a5eed5331d501fc6cff67f54a1f8c7ea5388b4bc6d0fb1bd9b0ab3054e954 extends Twig_Template
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
        $__internal_ea5300d6ca16e7d9ce0834f55b494c2b5e2adf71e592f02154aa74ce5829e257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5300d6ca16e7d9ce0834f55b494c2b5e2adf71e592f02154aa74ce5829e257->enter($__internal_ea5300d6ca16e7d9ce0834f55b494c2b5e2adf71e592f02154aa74ce5829e257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.filter.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$filter = require('./_array-methods')(2);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].filter, true), 'Array', {
  // 22.1.3.7 / 15.4.4.20 Array.prototype.filter(callbackfn [, thisArg])
  filter: function filter(callbackfn /* , thisArg */) {
    return \$filter(this, callbackfn, arguments[1]);
  }
});
";
        
        $__internal_ea5300d6ca16e7d9ce0834f55b494c2b5e2adf71e592f02154aa74ce5829e257->leave($__internal_ea5300d6ca16e7d9ce0834f55b494c2b5e2adf71e592f02154aa74ce5829e257_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.filter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$filter = require('./_array-methods')(2);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].filter, true), 'Array', {
  // 22.1.3.7 / 15.4.4.20 Array.prototype.filter(callbackfn [, thisArg])
  filter: function filter(callbackfn /* , thisArg */) {
    return \$filter(this, callbackfn, arguments[1]);
  }
});
", "node_modules/core-js/library/modules/es6.array.filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.filter.js");
    }
}
