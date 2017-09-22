<?php

/* node_modules/core-js/modules/es6.number.min-safe-integer.js */
class __TwigTemplate_2a80112b55584b4a51ea0565c42ff4102d93fb79eefa896e0ffbf5a6999ebabe extends Twig_Template
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
        $__internal_d550ccdf9f2ca8e16b31201ef8fab87f1c64773213e29edfcbeb8a238649b66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d550ccdf9f2ca8e16b31201ef8fab87f1c64773213e29edfcbeb8a238649b66e->enter($__internal_d550ccdf9f2ca8e16b31201ef8fab87f1c64773213e29edfcbeb8a238649b66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.min-safe-integer.js"));

        // line 1
        echo "// 20.1.2.10 Number.MIN_SAFE_INTEGER
var \$export = require('./_export');

\$export(\$export.S, 'Number', { MIN_SAFE_INTEGER: -0x1fffffffffffff });
";
        
        $__internal_d550ccdf9f2ca8e16b31201ef8fab87f1c64773213e29edfcbeb8a238649b66e->leave($__internal_d550ccdf9f2ca8e16b31201ef8fab87f1c64773213e29edfcbeb8a238649b66e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.min-safe-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.10 Number.MIN_SAFE_INTEGER
var \$export = require('./_export');

\$export(\$export.S, 'Number', { MIN_SAFE_INTEGER: -0x1fffffffffffff });
", "node_modules/core-js/modules/es6.number.min-safe-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.min-safe-integer.js");
    }
}
