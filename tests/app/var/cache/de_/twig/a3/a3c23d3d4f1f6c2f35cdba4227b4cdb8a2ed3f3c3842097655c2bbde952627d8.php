<?php

/* node_modules/core-js/library/modules/es6.array.index-of.js */
class __TwigTemplate_64aa9ca3c5c5ded3452f50dd3f1470ab6f7aad47ca426b6374ba9fcee870251d extends Twig_Template
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
        $__internal_3419b5d48c5f1b1cd3fd740a17475d8183c4495ed3fb93e13465d5808c788a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3419b5d48c5f1b1cd3fd740a17475d8183c4495ed3fb93e13465d5808c788a7f->enter($__internal_3419b5d48c5f1b1cd3fd740a17475d8183c4495ed3fb93e13465d5808c788a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.index-of.js"));

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
        
        $__internal_3419b5d48c5f1b1cd3fd740a17475d8183c4495ed3fb93e13465d5808c788a7f->leave($__internal_3419b5d48c5f1b1cd3fd740a17475d8183c4495ed3fb93e13465d5808c788a7f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.index-of.js";
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
", "node_modules/core-js/library/modules/es6.array.index-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.index-of.js");
    }
}
