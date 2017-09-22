<?php

/* node_modules/core-js/modules/es6.array.join.js */
class __TwigTemplate_e96a895db2096fcbb0d29cb1eac602bca59ae778fe3a9d4938099fd7d8b48b3e extends Twig_Template
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
        $__internal_c1a5c2b4c2743a0f3efcabe0362e686ecec301ca5d2e36d9d169edefcbcb9cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a5c2b4c2743a0f3efcabe0362e686ecec301ca5d2e36d9d169edefcbcb9cce->enter($__internal_c1a5c2b4c2743a0f3efcabe0362e686ecec301ca5d2e36d9d169edefcbcb9cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.join.js"));

        // line 1
        echo "'use strict';
// 22.1.3.13 Array.prototype.join(separator)
var \$export = require('./_export');
var toIObject = require('./_to-iobject');
var arrayJoin = [].join;

// fallback for not array-like strings
\$export(\$export.P + \$export.F * (require('./_iobject') != Object || !require('./_strict-method')(arrayJoin)), 'Array', {
  join: function join(separator) {
    return arrayJoin.call(toIObject(this), separator === undefined ? ',' : separator);
  }
});
";
        
        $__internal_c1a5c2b4c2743a0f3efcabe0362e686ecec301ca5d2e36d9d169edefcbcb9cce->leave($__internal_c1a5c2b4c2743a0f3efcabe0362e686ecec301ca5d2e36d9d169edefcbcb9cce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.join.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// 22.1.3.13 Array.prototype.join(separator)
var \$export = require('./_export');
var toIObject = require('./_to-iobject');
var arrayJoin = [].join;

// fallback for not array-like strings
\$export(\$export.P + \$export.F * (require('./_iobject') != Object || !require('./_strict-method')(arrayJoin)), 'Array', {
  join: function join(separator) {
    return arrayJoin.call(toIObject(this), separator === undefined ? ',' : separator);
  }
});
", "node_modules/core-js/modules/es6.array.join.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.join.js");
    }
}
