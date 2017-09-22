<?php

/* node_modules/core-js/library/modules/es6.array.find-index.js */
class __TwigTemplate_e7a97f0d6ccc001b1ce671b9b46c9159b89a34f763d285ea81ea08bd378d294d extends Twig_Template
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
        $__internal_c2fef029e70ded03afe8047317e130dba95d5dbe39f82819fb1f7303a8d48dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fef029e70ded03afe8047317e130dba95d5dbe39f82819fb1f7303a8d48dee->enter($__internal_c2fef029e70ded03afe8047317e130dba95d5dbe39f82819fb1f7303a8d48dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.find-index.js"));

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
        
        $__internal_c2fef029e70ded03afe8047317e130dba95d5dbe39f82819fb1f7303a8d48dee->leave($__internal_c2fef029e70ded03afe8047317e130dba95d5dbe39f82819fb1f7303a8d48dee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.find-index.js";
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
", "node_modules/core-js/library/modules/es6.array.find-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.find-index.js");
    }
}
