<?php

/* node_modules/core-js/library/modules/es6.array.every.js */
class __TwigTemplate_50a454d283e5a7d8ad3b14c4acb43d4ca3287c9b42a77acea1bb78e843ea504f extends Twig_Template
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
        $__internal_2ce4b1fea78928f0c3815eb21ced589590726fde017fa03f4a500100af0abd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce4b1fea78928f0c3815eb21ced589590726fde017fa03f4a500100af0abd4f->enter($__internal_2ce4b1fea78928f0c3815eb21ced589590726fde017fa03f4a500100af0abd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.every.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$every = require('./_array-methods')(4);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].every, true), 'Array', {
  // 22.1.3.5 / 15.4.4.16 Array.prototype.every(callbackfn [, thisArg])
  every: function every(callbackfn /* , thisArg */) {
    return \$every(this, callbackfn, arguments[1]);
  }
});
";
        
        $__internal_2ce4b1fea78928f0c3815eb21ced589590726fde017fa03f4a500100af0abd4f->leave($__internal_2ce4b1fea78928f0c3815eb21ced589590726fde017fa03f4a500100af0abd4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.every.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$every = require('./_array-methods')(4);

\$export(\$export.P + \$export.F * !require('./_strict-method')([].every, true), 'Array', {
  // 22.1.3.5 / 15.4.4.16 Array.prototype.every(callbackfn [, thisArg])
  every: function every(callbackfn /* , thisArg */) {
    return \$every(this, callbackfn, arguments[1]);
  }
});
", "node_modules/core-js/library/modules/es6.array.every.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.every.js");
    }
}
