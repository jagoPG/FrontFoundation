<?php

/* node_modules/core-js/modules/es6.number.is-nan.js */
class __TwigTemplate_14dc334c3663583154f8415f286213966023a5627344a97465cd5fbeb4e28b22 extends Twig_Template
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
        $__internal_d66947c690067a99514b3c3a70847950275aded74210181eae6a57ef9f4fe3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66947c690067a99514b3c3a70847950275aded74210181eae6a57ef9f4fe3e7->enter($__internal_d66947c690067a99514b3c3a70847950275aded74210181eae6a57ef9f4fe3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.is-nan.js"));

        // line 1
        echo "// 20.1.2.4 Number.isNaN(number)
var \$export = require('./_export');

\$export(\$export.S, 'Number', {
  isNaN: function isNaN(number) {
    // eslint-disable-next-line no-self-compare
    return number != number;
  }
});
";
        
        $__internal_d66947c690067a99514b3c3a70847950275aded74210181eae6a57ef9f4fe3e7->leave($__internal_d66947c690067a99514b3c3a70847950275aded74210181eae6a57ef9f4fe3e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.is-nan.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.4 Number.isNaN(number)
var \$export = require('./_export');

\$export(\$export.S, 'Number', {
  isNaN: function isNaN(number) {
    // eslint-disable-next-line no-self-compare
    return number != number;
  }
});
", "node_modules/core-js/modules/es6.number.is-nan.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.is-nan.js");
    }
}
