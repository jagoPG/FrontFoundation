<?php

/* node_modules/core-js/modules/es6.array.every.js */
class __TwigTemplate_a3f2b235d22213652b52838624baf738109a214e87da095b59cf51f3c061cebe extends Twig_Template
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
        $__internal_3bee6fb9d2195b315f64cfe0ec66f2f07f0304f6a72713f2727a11febd8c9b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bee6fb9d2195b315f64cfe0ec66f2f07f0304f6a72713f2727a11febd8c9b57->enter($__internal_3bee6fb9d2195b315f64cfe0ec66f2f07f0304f6a72713f2727a11febd8c9b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.every.js"));

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
        
        $__internal_3bee6fb9d2195b315f64cfe0ec66f2f07f0304f6a72713f2727a11febd8c9b57->leave($__internal_3bee6fb9d2195b315f64cfe0ec66f2f07f0304f6a72713f2727a11febd8c9b57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.every.js";
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
", "node_modules/core-js/modules/es6.array.every.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.every.js");
    }
}
