<?php

/* node_modules/core-js/library/modules/es6.number.is-finite.js */
class __TwigTemplate_1728adc1f61895d05e597a619746a942e5a904cf8de3f34e57520855c9d235ef extends Twig_Template
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
        $__internal_7d834a0ffd3007007e2fa314eb05d099e02b8f5cfaf94e2a762d28dc6fd273a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d834a0ffd3007007e2fa314eb05d099e02b8f5cfaf94e2a762d28dc6fd273a1->enter($__internal_7d834a0ffd3007007e2fa314eb05d099e02b8f5cfaf94e2a762d28dc6fd273a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.number.is-finite.js"));

        // line 1
        echo "// 20.1.2.2 Number.isFinite(number)
var \$export = require('./_export');
var _isFinite = require('./_global').isFinite;

\$export(\$export.S, 'Number', {
  isFinite: function isFinite(it) {
    return typeof it == 'number' && _isFinite(it);
  }
});
";
        
        $__internal_7d834a0ffd3007007e2fa314eb05d099e02b8f5cfaf94e2a762d28dc6fd273a1->leave($__internal_7d834a0ffd3007007e2fa314eb05d099e02b8f5cfaf94e2a762d28dc6fd273a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.number.is-finite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.2 Number.isFinite(number)
var \$export = require('./_export');
var _isFinite = require('./_global').isFinite;

\$export(\$export.S, 'Number', {
  isFinite: function isFinite(it) {
    return typeof it == 'number' && _isFinite(it);
  }
});
", "node_modules/core-js/library/modules/es6.number.is-finite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.number.is-finite.js");
    }
}
