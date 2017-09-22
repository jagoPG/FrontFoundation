<?php

/* node_modules/core-js/modules/es6.array.find.js */
class __TwigTemplate_5ac2fdb657df9e203472d2ba1c475fd29d23fc681a608797650368aab6c52622 extends Twig_Template
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
        $__internal_66701c96081d8bf7ed129a412309e7858d74c362d1ba7094994414a925cdcfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66701c96081d8bf7ed129a412309e7858d74c362d1ba7094994414a925cdcfc4->enter($__internal_66701c96081d8bf7ed129a412309e7858d74c362d1ba7094994414a925cdcfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.find.js"));

        // line 1
        echo "'use strict';
// 22.1.3.8 Array.prototype.find(predicate, thisArg = undefined)
var \$export = require('./_export');
var \$find = require('./_array-methods')(5);
var KEY = 'find';
var forced = true;
// Shouldn't skip holes
if (KEY in []) Array(1)[KEY](function () { forced = false; });
\$export(\$export.P + \$export.F * forced, 'Array', {
  find: function find(callbackfn /* , that = undefined */) {
    return \$find(this, callbackfn, arguments.length > 1 ? arguments[1] : undefined);
  }
});
require('./_add-to-unscopables')(KEY);
";
        
        $__internal_66701c96081d8bf7ed129a412309e7858d74c362d1ba7094994414a925cdcfc4->leave($__internal_66701c96081d8bf7ed129a412309e7858d74c362d1ba7094994414a925cdcfc4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.find.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 22.1.3.8 Array.prototype.find(predicate, thisArg = undefined)
var \$export = require('./_export');
var \$find = require('./_array-methods')(5);
var KEY = 'find';
var forced = true;
// Shouldn't skip holes
if (KEY in []) Array(1)[KEY](function () { forced = false; });
\$export(\$export.P + \$export.F * forced, 'Array', {
  find: function find(callbackfn /* , that = undefined */) {
    return \$find(this, callbackfn, arguments.length > 1 ? arguments[1] : undefined);
  }
});
require('./_add-to-unscopables')(KEY);
", "node_modules/core-js/modules/es6.array.find.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.find.js");
    }
}
