<?php

/* node_modules/core-js/library/modules/es6.array.for-each.js */
class __TwigTemplate_6ac3306f81f34df1fde4dd697687817283b32c58e04427fcccc0258197bd0a43 extends Twig_Template
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
        $__internal_de161a02d7aa598f973b1e649a86f2cac4c93653ecfd21c56413b898ce46c737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de161a02d7aa598f973b1e649a86f2cac4c93653ecfd21c56413b898ce46c737->enter($__internal_de161a02d7aa598f973b1e649a86f2cac4c93653ecfd21c56413b898ce46c737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.for-each.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$forEach = require('./_array-methods')(0);
var STRICT = require('./_strict-method')([].forEach, true);

\$export(\$export.P + \$export.F * !STRICT, 'Array', {
  // 22.1.3.10 / 15.4.4.18 Array.prototype.forEach(callbackfn [, thisArg])
  forEach: function forEach(callbackfn /* , thisArg */) {
    return \$forEach(this, callbackfn, arguments[1]);
  }
});
";
        
        $__internal_de161a02d7aa598f973b1e649a86f2cac4c93653ecfd21c56413b898ce46c737->leave($__internal_de161a02d7aa598f973b1e649a86f2cac4c93653ecfd21c56413b898ce46c737_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$forEach = require('./_array-methods')(0);
var STRICT = require('./_strict-method')([].forEach, true);

\$export(\$export.P + \$export.F * !STRICT, 'Array', {
  // 22.1.3.10 / 15.4.4.18 Array.prototype.forEach(callbackfn [, thisArg])
  forEach: function forEach(callbackfn /* , thisArg */) {
    return \$forEach(this, callbackfn, arguments[1]);
  }
});
", "node_modules/core-js/library/modules/es6.array.for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.for-each.js");
    }
}
