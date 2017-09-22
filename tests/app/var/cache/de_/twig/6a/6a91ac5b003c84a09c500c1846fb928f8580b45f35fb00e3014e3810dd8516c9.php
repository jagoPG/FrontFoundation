<?php

/* node_modules/core-js/library/modules/es6.array.reduce-right.js */
class __TwigTemplate_8c09f853b882bf6973c10e430ef05c075dc9203e146e057e2cedfc6cac9c19f6 extends Twig_Template
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
        $__internal_ec76c5405f62461a77a63100df8064cd066703ccd5ab9b6af86d94def3f2b605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec76c5405f62461a77a63100df8064cd066703ccd5ab9b6af86d94def3f2b605->enter($__internal_ec76c5405f62461a77a63100df8064cd066703ccd5ab9b6af86d94def3f2b605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.reduce-right.js"));

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
        
        $__internal_ec76c5405f62461a77a63100df8064cd066703ccd5ab9b6af86d94def3f2b605->leave($__internal_ec76c5405f62461a77a63100df8064cd066703ccd5ab9b6af86d94def3f2b605_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.reduce-right.js";
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
", "node_modules/core-js/library/modules/es6.array.reduce-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.reduce-right.js");
    }
}
