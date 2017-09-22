<?php

/* node_modules/core-js/library/modules/es6.array.find.js */
class __TwigTemplate_03fa49b94ad054e54c7d153bef55eecbca2fb6a75bd517a58f6e5f3b74f17d07 extends Twig_Template
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
        $__internal_813be8b3ae7799ec75fddeb34ccebc342b67e659786b0f1f712e7ff6a9623841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813be8b3ae7799ec75fddeb34ccebc342b67e659786b0f1f712e7ff6a9623841->enter($__internal_813be8b3ae7799ec75fddeb34ccebc342b67e659786b0f1f712e7ff6a9623841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.find.js"));

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
        
        $__internal_813be8b3ae7799ec75fddeb34ccebc342b67e659786b0f1f712e7ff6a9623841->leave($__internal_813be8b3ae7799ec75fddeb34ccebc342b67e659786b0f1f712e7ff6a9623841_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.find.js";
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
", "node_modules/core-js/library/modules/es6.array.find.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.find.js");
    }
}
