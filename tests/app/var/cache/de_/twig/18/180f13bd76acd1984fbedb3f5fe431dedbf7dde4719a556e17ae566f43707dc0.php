<?php

/* node_modules/core-js/library/modules/es6.array.map.js */
class __TwigTemplate_ca60605b9e4b2cdd16c3b418b9ef6972f61b57032bfa118472b2224b6f9c6a87 extends Twig_Template
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
        $__internal_f1eae2eb4c6212cb7f67018521650813bbb797fc2d43d125f402bab3a4e42b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eae2eb4c6212cb7f67018521650813bbb797fc2d43d125f402bab3a4e42b97->enter($__internal_f1eae2eb4c6212cb7f67018521650813bbb797fc2d43d125f402bab3a4e42b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.map.js"));

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
        
        $__internal_f1eae2eb4c6212cb7f67018521650813bbb797fc2d43d125f402bab3a4e42b97->leave($__internal_f1eae2eb4c6212cb7f67018521650813bbb797fc2d43d125f402bab3a4e42b97_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.map.js";
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
", "node_modules/core-js/library/modules/es6.array.map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.map.js");
    }
}
