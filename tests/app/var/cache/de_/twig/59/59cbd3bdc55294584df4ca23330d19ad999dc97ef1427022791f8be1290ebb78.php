<?php

/* node_modules/core-js/library/modules/es6.number.is-safe-integer.js */
class __TwigTemplate_97bb88010b3cf1fb9086a63765bde2f3cfdc98c488293ad12dee1e9a8166fe13 extends Twig_Template
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
        $__internal_b7845c854065f9dc712e9e385a21cdbb7b27a232e5517f3e19d714db9eda25ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7845c854065f9dc712e9e385a21cdbb7b27a232e5517f3e19d714db9eda25ab->enter($__internal_b7845c854065f9dc712e9e385a21cdbb7b27a232e5517f3e19d714db9eda25ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.number.is-safe-integer.js"));

        // line 1
        echo "// 20.1.2.5 Number.isSafeInteger(number)
var \$export = require('./_export');
var isInteger = require('./_is-integer');
var abs = Math.abs;

\$export(\$export.S, 'Number', {
  isSafeInteger: function isSafeInteger(number) {
    return isInteger(number) && abs(number) <= 0x1fffffffffffff;
  }
});
";
        
        $__internal_b7845c854065f9dc712e9e385a21cdbb7b27a232e5517f3e19d714db9eda25ab->leave($__internal_b7845c854065f9dc712e9e385a21cdbb7b27a232e5517f3e19d714db9eda25ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.number.is-safe-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.5 Number.isSafeInteger(number)
var \$export = require('./_export');
var isInteger = require('./_is-integer');
var abs = Math.abs;

\$export(\$export.S, 'Number', {
  isSafeInteger: function isSafeInteger(number) {
    return isInteger(number) && abs(number) <= 0x1fffffffffffff;
  }
});
", "node_modules/core-js/library/modules/es6.number.is-safe-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.number.is-safe-integer.js");
    }
}
