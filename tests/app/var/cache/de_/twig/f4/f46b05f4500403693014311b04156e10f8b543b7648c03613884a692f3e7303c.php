<?php

/* node_modules/core-js/library/modules/es6.array.reduce.js */
class __TwigTemplate_2cc1657876504a97069066194786c4b730f87c3e6b19ef0f95eeff62c10bd7d5 extends Twig_Template
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
        $__internal_1a568bfd1deb52b6b642f4d3da64ad4bd1aff9d0c836a684f3112321fe057c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a568bfd1deb52b6b642f4d3da64ad4bd1aff9d0c836a684f3112321fe057c65->enter($__internal_1a568bfd1deb52b6b642f4d3da64ad4bd1aff9d0c836a684f3112321fe057c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.reduce.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$reduce = require('./_array-reduce');

\$export(\$export.P + \$export.F * !require('./_strict-method')([].reduce, true), 'Array', {
  // 22.1.3.18 / 15.4.4.21 Array.prototype.reduce(callbackfn [, initialValue])
  reduce: function reduce(callbackfn /* , initialValue */) {
    return \$reduce(this, callbackfn, arguments.length, arguments[1], false);
  }
});
";
        
        $__internal_1a568bfd1deb52b6b642f4d3da64ad4bd1aff9d0c836a684f3112321fe057c65->leave($__internal_1a568bfd1deb52b6b642f4d3da64ad4bd1aff9d0c836a684f3112321fe057c65_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.reduce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$reduce = require('./_array-reduce');

\$export(\$export.P + \$export.F * !require('./_strict-method')([].reduce, true), 'Array', {
  // 22.1.3.18 / 15.4.4.21 Array.prototype.reduce(callbackfn [, initialValue])
  reduce: function reduce(callbackfn /* , initialValue */) {
    return \$reduce(this, callbackfn, arguments.length, arguments[1], false);
  }
});
", "node_modules/core-js/library/modules/es6.array.reduce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.reduce.js");
    }
}
