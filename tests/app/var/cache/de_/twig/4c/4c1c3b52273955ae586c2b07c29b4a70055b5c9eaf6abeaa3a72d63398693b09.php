<?php

/* node_modules/core-js/library/modules/es6.number.max-safe-integer.js */
class __TwigTemplate_4bb3302c77d38ae969eaae4de4f1e7a6dbe078f5731d076e8871be497ed4d89e extends Twig_Template
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
        $__internal_1958b0226463f18ab5785a7e3d746471675caf723f9bb0b340f0ea9514132811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1958b0226463f18ab5785a7e3d746471675caf723f9bb0b340f0ea9514132811->enter($__internal_1958b0226463f18ab5785a7e3d746471675caf723f9bb0b340f0ea9514132811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.number.max-safe-integer.js"));

        // line 1
        echo "// 20.1.2.6 Number.MAX_SAFE_INTEGER
var \$export = require('./_export');

\$export(\$export.S, 'Number', { MAX_SAFE_INTEGER: 0x1fffffffffffff });
";
        
        $__internal_1958b0226463f18ab5785a7e3d746471675caf723f9bb0b340f0ea9514132811->leave($__internal_1958b0226463f18ab5785a7e3d746471675caf723f9bb0b340f0ea9514132811_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.number.max-safe-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.6 Number.MAX_SAFE_INTEGER
var \$export = require('./_export');

\$export(\$export.S, 'Number', { MAX_SAFE_INTEGER: 0x1fffffffffffff });
", "node_modules/core-js/library/modules/es6.number.max-safe-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.number.max-safe-integer.js");
    }
}
