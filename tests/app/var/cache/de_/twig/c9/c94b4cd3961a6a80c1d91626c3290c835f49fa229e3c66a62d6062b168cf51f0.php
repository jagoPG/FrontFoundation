<?php

/* node_modules/core-js/modules/es6.array.find-index.js */
class __TwigTemplate_2b85d88dcc8b6c95bd7bb65e6990bbee135eded289634b5fb1e9bdf093c95783 extends Twig_Template
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
        $__internal_c95c84a8676e92ad0a8297f5829cb9efd10753dacddb46942190ef387e445afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95c84a8676e92ad0a8297f5829cb9efd10753dacddb46942190ef387e445afa->enter($__internal_c95c84a8676e92ad0a8297f5829cb9efd10753dacddb46942190ef387e445afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.find-index.js"));

        // line 1
        echo "'use strict';
// 22.1.3.9 Array.prototype.findIndex(predicate, thisArg = undefined)
var \$export = require('./_export');
var \$find = require('./_array-methods')(6);
var KEY = 'findIndex';
var forced = true;
// Shouldn't skip holes
if (KEY in []) Array(1)[KEY](function () { forced = false; });
\$export(\$export.P + \$export.F * forced, 'Array', {
  findIndex: function findIndex(callbackfn /* , that = undefined */) {
    return \$find(this, callbackfn, arguments.length > 1 ? arguments[1] : undefined);
  }
});
require('./_add-to-unscopables')(KEY);
";
        
        $__internal_c95c84a8676e92ad0a8297f5829cb9efd10753dacddb46942190ef387e445afa->leave($__internal_c95c84a8676e92ad0a8297f5829cb9efd10753dacddb46942190ef387e445afa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.find-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 22.1.3.9 Array.prototype.findIndex(predicate, thisArg = undefined)
var \$export = require('./_export');
var \$find = require('./_array-methods')(6);
var KEY = 'findIndex';
var forced = true;
// Shouldn't skip holes
if (KEY in []) Array(1)[KEY](function () { forced = false; });
\$export(\$export.P + \$export.F * forced, 'Array', {
  findIndex: function findIndex(callbackfn /* , that = undefined */) {
    return \$find(this, callbackfn, arguments.length > 1 ? arguments[1] : undefined);
  }
});
require('./_add-to-unscopables')(KEY);
", "node_modules/core-js/modules/es6.array.find-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.find-index.js");
    }
}
