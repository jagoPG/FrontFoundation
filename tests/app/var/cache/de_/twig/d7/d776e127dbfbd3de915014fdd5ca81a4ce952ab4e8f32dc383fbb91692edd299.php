<?php

/* node_modules/core-js/modules/es6.array.reduce-right.js */
class __TwigTemplate_97565d933abd73c2e025859f8320595c3207d0e5ebc8a1f5c38166070709635b extends Twig_Template
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
        $__internal_39b890521b9d3c3ac9805a6c8612360413b24d555709bfe614466152206b7781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b890521b9d3c3ac9805a6c8612360413b24d555709bfe614466152206b7781->enter($__internal_39b890521b9d3c3ac9805a6c8612360413b24d555709bfe614466152206b7781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.reduce-right.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$reduce = require('./_array-reduce');

\$export(\$export.P + \$export.F * !require('./_strict-method')([].reduceRight, true), 'Array', {
  // 22.1.3.19 / 15.4.4.22 Array.prototype.reduceRight(callbackfn [, initialValue])
  reduceRight: function reduceRight(callbackfn /* , initialValue */) {
    return \$reduce(this, callbackfn, arguments.length, arguments[1], true);
  }
});
";
        
        $__internal_39b890521b9d3c3ac9805a6c8612360413b24d555709bfe614466152206b7781->leave($__internal_39b890521b9d3c3ac9805a6c8612360413b24d555709bfe614466152206b7781_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.reduce-right.js";
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

\$export(\$export.P + \$export.F * !require('./_strict-method')([].reduceRight, true), 'Array', {
  // 22.1.3.19 / 15.4.4.22 Array.prototype.reduceRight(callbackfn [, initialValue])
  reduceRight: function reduceRight(callbackfn /* , initialValue */) {
    return \$reduce(this, callbackfn, arguments.length, arguments[1], true);
  }
});
", "node_modules/core-js/modules/es6.array.reduce-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.reduce-right.js");
    }
}
