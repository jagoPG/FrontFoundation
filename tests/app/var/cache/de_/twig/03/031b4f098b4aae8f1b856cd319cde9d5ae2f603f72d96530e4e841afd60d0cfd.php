<?php

/* node_modules/core-js/modules/es6.array.reduce.js */
class __TwigTemplate_8fe3efe55439d030a1a50b076b4f9850d0e21eb29649cee4d0d6250e9f93e96f extends Twig_Template
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
        $__internal_b04848032e3e3a6022f455705d319ad8dfc0b245447cae7820f8a03725cb458c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04848032e3e3a6022f455705d319ad8dfc0b245447cae7820f8a03725cb458c->enter($__internal_b04848032e3e3a6022f455705d319ad8dfc0b245447cae7820f8a03725cb458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.reduce.js"));

        // line 1
        echo "'use strict';
var \$export = require('./_export');
var \$reduce = require('./_array-reduce');

\$export(\$export.P + \$export.F * !require('./_strict-method')([].reduce, true), 'Array', {
  // 22.1.3.18 / 15.4.4.21 Array.prototype.reduce(callbackfn [, initialValue])
  reduce: function reduce(callbackfn /* , initialValue */) {
    return \$reduce(this, callbackfn, arguments.length, arguments[1], false);
  }
});
";
        
        $__internal_b04848032e3e3a6022f455705d319ad8dfc0b245447cae7820f8a03725cb458c->leave($__internal_b04848032e3e3a6022f455705d319ad8dfc0b245447cae7820f8a03725cb458c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.reduce.js";
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

\$export(\$export.P + \$export.F * !require('./_strict-method')([].reduce, true), 'Array', {
  // 22.1.3.18 / 15.4.4.21 Array.prototype.reduce(callbackfn [, initialValue])
  reduce: function reduce(callbackfn /* , initialValue */) {
    return \$reduce(this, callbackfn, arguments.length, arguments[1], false);
  }
});
", "node_modules/core-js/modules/es6.array.reduce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.reduce.js");
    }
}
