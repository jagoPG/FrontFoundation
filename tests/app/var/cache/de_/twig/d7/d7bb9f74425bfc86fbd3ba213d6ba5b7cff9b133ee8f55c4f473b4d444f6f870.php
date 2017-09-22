<?php

/* node_modules/core-js/library/modules/es6.array.join.js */
class __TwigTemplate_7c9349c1d8553917992b04c5bac5bedff673310959bd3028eedf3e4ba8cf1012 extends Twig_Template
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
        $__internal_73284c02ebe2b0ad89aebbd2194acd84d00ca3e7bdf8d307a3c699efee2ab07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73284c02ebe2b0ad89aebbd2194acd84d00ca3e7bdf8d307a3c699efee2ab07b->enter($__internal_73284c02ebe2b0ad89aebbd2194acd84d00ca3e7bdf8d307a3c699efee2ab07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.array.join.js"));

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
        
        $__internal_73284c02ebe2b0ad89aebbd2194acd84d00ca3e7bdf8d307a3c699efee2ab07b->leave($__internal_73284c02ebe2b0ad89aebbd2194acd84d00ca3e7bdf8d307a3c699efee2ab07b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.array.join.js";
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
", "node_modules/core-js/library/modules/es6.array.join.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.array.join.js");
    }
}
