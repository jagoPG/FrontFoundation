<?php

/* node_modules/core-js/modules/es6.array.some.js */
class __TwigTemplate_4b47881f1913cec3eb161cffcaf73f6e2c64181e5d4db348e066f870afd13528 extends Twig_Template
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
        $__internal_7e23e8783a4bf3b2c2660e8f5f07bb968a6ac4152b6dd95e63f6bb384ae66adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e23e8783a4bf3b2c2660e8f5f07bb968a6ac4152b6dd95e63f6bb384ae66adc->enter($__internal_7e23e8783a4bf3b2c2660e8f5f07bb968a6ac4152b6dd95e63f6bb384ae66adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.some.js"));

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
        
        $__internal_7e23e8783a4bf3b2c2660e8f5f07bb968a6ac4152b6dd95e63f6bb384ae66adc->leave($__internal_7e23e8783a4bf3b2c2660e8f5f07bb968a6ac4152b6dd95e63f6bb384ae66adc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.some.js";
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
", "node_modules/core-js/modules/es6.array.some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.some.js");
    }
}
