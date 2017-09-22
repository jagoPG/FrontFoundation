<?php

/* node_modules/core-js/modules/es6.array.index-of.js */
class __TwigTemplate_75f92172d75cb2f119e450f363e9efb8152bbfee1379be42d0a773def21dd43f extends Twig_Template
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
        $__internal_9cfcd4aabb699e82ea0ad71c95d4816b4fffbb3f3d22e07bdf37dd20284e56b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfcd4aabb699e82ea0ad71c95d4816b4fffbb3f3d22e07bdf37dd20284e56b9->enter($__internal_9cfcd4aabb699e82ea0ad71c95d4816b4fffbb3f3d22e07bdf37dd20284e56b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.index-of.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$indexOf = require('./_array-includes')(false);
var \$native = [].indexOf;
var NEGATIVE_ZERO = !!\$native && 1 / [1].indexOf(1, -0) < 0;

\$export(\$export.P + \$export.F * (NEGATIVE_ZERO || !require('./_strict-method')(\$native)), 'Array', {
  // 22.1.3.11 / 15.4.4.14 Array.prototype.indexOf(searchElement [, fromIndex])
  indexOf: function indexOf(searchElement /* , fromIndex = 0 */) {
    return NEGATIVE_ZERO
      // convert -0 to +0
      ? \$native.apply(this, arguments) || 0
      : \$indexOf(this, searchElement, arguments[1]);
  }
});
";
        
        $__internal_9cfcd4aabb699e82ea0ad71c95d4816b4fffbb3f3d22e07bdf37dd20284e56b9->leave($__internal_9cfcd4aabb699e82ea0ad71c95d4816b4fffbb3f3d22e07bdf37dd20284e56b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.index-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var \$export = require('./_export');
var \$indexOf = require('./_array-includes')(false);
var \$native = [].indexOf;
var NEGATIVE_ZERO = !!\$native && 1 / [1].indexOf(1, -0) < 0;

\$export(\$export.P + \$export.F * (NEGATIVE_ZERO || !require('./_strict-method')(\$native)), 'Array', {
  // 22.1.3.11 / 15.4.4.14 Array.prototype.indexOf(searchElement [, fromIndex])
  indexOf: function indexOf(searchElement /* , fromIndex = 0 */) {
    return NEGATIVE_ZERO
      // convert -0 to +0
      ? \$native.apply(this, arguments) || 0
      : \$indexOf(this, searchElement, arguments[1]);
  }
});
", "node_modules/core-js/modules/es6.array.index-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.index-of.js");
    }
}
