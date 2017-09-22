<?php

/* node_modules/core-js/modules/_wks.js */
class __TwigTemplate_325aa2b2c7800c6ae2b3c1ce54f9046a9d7df9a3df7ded7b2fee05f1c0501f09 extends Twig_Template
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
        $__internal_b31e87224002bb21bbaa80dfbbfb0945faa14048f4a90ed14b8db1748fbb74c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31e87224002bb21bbaa80dfbbfb0945faa14048f4a90ed14b8db1748fbb74c5->enter($__internal_b31e87224002bb21bbaa80dfbbfb0945faa14048f4a90ed14b8db1748fbb74c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_wks.js"));

        // line 1
        echo "var store = require('./_shared')('wks');
var uid = require('./_uid');
var Symbol = require('./_global').Symbol;
var USE_SYMBOL = typeof Symbol == 'function';

var \$exports = module.exports = function (name) {
  return store[name] || (store[name] =
    USE_SYMBOL && Symbol[name] || (USE_SYMBOL ? Symbol : uid)('Symbol.' + name));
};

\$exports.store = store;
";
        
        $__internal_b31e87224002bb21bbaa80dfbbfb0945faa14048f4a90ed14b8db1748fbb74c5->leave($__internal_b31e87224002bb21bbaa80dfbbfb0945faa14048f4a90ed14b8db1748fbb74c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_wks.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var store = require('./_shared')('wks');
var uid = require('./_uid');
var Symbol = require('./_global').Symbol;
var USE_SYMBOL = typeof Symbol == 'function';

var \$exports = module.exports = function (name) {
  return store[name] || (store[name] =
    USE_SYMBOL && Symbol[name] || (USE_SYMBOL ? Symbol : uid)('Symbol.' + name));
};

\$exports.store = store;
", "node_modules/core-js/modules/_wks.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_wks.js");
    }
}
