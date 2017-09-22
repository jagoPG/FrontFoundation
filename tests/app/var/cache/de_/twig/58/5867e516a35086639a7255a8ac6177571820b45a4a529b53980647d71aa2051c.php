<?php

/* node_modules/core-js/modules/es6.array.filter.js */
class __TwigTemplate_f2b4e68be3b258ea8a43f4beba323e6e18d434e4501e1b14fb0914148d15d8d0 extends Twig_Template
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
        $__internal_eeac361e37bb83a706243f387a7c4082afce9b4f840b43e1ebc517d525a2acd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeac361e37bb83a706243f387a7c4082afce9b4f840b43e1ebc517d525a2acd7->enter($__internal_eeac361e37bb83a706243f387a7c4082afce9b4f840b43e1ebc517d525a2acd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.filter.js"));

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
        
        $__internal_eeac361e37bb83a706243f387a7c4082afce9b4f840b43e1ebc517d525a2acd7->leave($__internal_eeac361e37bb83a706243f387a7c4082afce9b4f840b43e1ebc517d525a2acd7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.filter.js";
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
", "node_modules/core-js/modules/es6.array.filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.filter.js");
    }
}
