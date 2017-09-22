<?php

/* node_modules/core-js/modules/es6.array.map.js */
class __TwigTemplate_116815b6b5583eb30411f8390e21e2bc1714cbc8cba77c5f10d4530451cd4f62 extends Twig_Template
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
        $__internal_52e5e4254d2df7604ed576d55550423427ae44bf95739b9005d8ea0705c63103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e5e4254d2df7604ed576d55550423427ae44bf95739b9005d8ea0705c63103->enter($__internal_52e5e4254d2df7604ed576d55550423427ae44bf95739b9005d8ea0705c63103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.map.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$map = require('./_array-methods')(1);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].map, true), 'Array', {
  // 22.1.3.15 / 15.4.4.19 Array.prototype.map(callbackfn [, thisArg])
  map: function map(callbackfn /* , thisArg */) {
    return \$map(this, callbackfn, arguments[1]);
  }
});
";
        
        $__internal_52e5e4254d2df7604ed576d55550423427ae44bf95739b9005d8ea0705c63103->leave($__internal_52e5e4254d2df7604ed576d55550423427ae44bf95739b9005d8ea0705c63103_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$map = require('./_array-methods')(1);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].map, true), 'Array', {
  // 22.1.3.15 / 15.4.4.19 Array.prototype.map(callbackfn [, thisArg])
  map: function map(callbackfn /* , thisArg */) {
    return \$map(this, callbackfn, arguments[1]);
  }
});
", "node_modules/core-js/modules/es6.array.map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.map.js");
    }
}
