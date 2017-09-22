<?php

/* node_modules/core-js/library/modules/_object-sap.js */
class __TwigTemplate_5fef733c4e2b11ee682ea470c4c9a99b804605496ac64de93e20043877c59876 extends Twig_Template
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
        $__internal_2e9e7e19e7addf8eaf7779b1e12388bfff29fcb0e9115d23d35bef7c20eb22b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9e7e19e7addf8eaf7779b1e12388bfff29fcb0e9115d23d35bef7c20eb22b6->enter($__internal_2e9e7e19e7addf8eaf7779b1e12388bfff29fcb0e9115d23d35bef7c20eb22b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_object-sap.js"));

        // line 1
        echo "// most Object methods by ES6 should accept primitives
var \$export = require('./_export');
var core = require('./_core');
var fails = require('./_fails');
module.exports = function (KEY, exec) {
  var fn = (core.Object || {})[KEY] || Object[KEY];
  var exp = {};
  exp[KEY] = exec(fn);
  \$export(\$export.S + \$export.F * fails(function () { fn(1); }), 'Object', exp);
};
";
        
        $__internal_2e9e7e19e7addf8eaf7779b1e12388bfff29fcb0e9115d23d35bef7c20eb22b6->leave($__internal_2e9e7e19e7addf8eaf7779b1e12388bfff29fcb0e9115d23d35bef7c20eb22b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_object-sap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// most Object methods by ES6 should accept primitives
var \$export = require('./_export');
var core = require('./_core');
var fails = require('./_fails');
module.exports = function (KEY, exec) {
  var fn = (core.Object || {})[KEY] || Object[KEY];
  var exp = {};
  exp[KEY] = exec(fn);
  \$export(\$export.S + \$export.F * fails(function () { fn(1); }), 'Object', exp);
};
", "node_modules/core-js/library/modules/_object-sap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_object-sap.js");
    }
}
