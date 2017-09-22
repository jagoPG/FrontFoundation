<?php

/* node_modules/core-js/modules/core.function.part.js */
class __TwigTemplate_1e76df05318ee33f9d32f31c557024dec31e181fc403bc0f433b68e649cd55db extends Twig_Template
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
        $__internal_dcf320382db80437882c168f67a3c23e825970403fb722218218d594f6719fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf320382db80437882c168f67a3c23e825970403fb722218218d594f6719fb7->enter($__internal_dcf320382db80437882c168f67a3c23e825970403fb722218218d594f6719fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.function.part.js"));

        // line 1
        echo "var path = require('./_path');
var \$export = require('./_export');

// Placeholder
require('./_core')._ = path._ = path._ || {};

\$export(\$export.P + \$export.F, 'Function', { part: require('./_partial') });
";
        
        $__internal_dcf320382db80437882c168f67a3c23e825970403fb722218218d594f6719fb7->leave($__internal_dcf320382db80437882c168f67a3c23e825970403fb722218218d594f6719fb7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.function.part.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('./_path');
var \$export = require('./_export');

// Placeholder
require('./_core')._ = path._ = path._ || {};

\$export(\$export.P + \$export.F, 'Function', { part: require('./_partial') });
", "node_modules/core-js/modules/core.function.part.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.function.part.js");
    }
}
