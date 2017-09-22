<?php

/* node_modules/core-js/library/modules/es6.number.epsilon.js */
class __TwigTemplate_a2719d0919ad15af7b30a4bbefc7c41cdb103ca94be389eed08059c4172a4d12 extends Twig_Template
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
        $__internal_aea91b1dc22dff94c3b7a4cc527ff1060ddc740853b2dc2d6518c4fbb0bec4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea91b1dc22dff94c3b7a4cc527ff1060ddc740853b2dc2d6518c4fbb0bec4ad->enter($__internal_aea91b1dc22dff94c3b7a4cc527ff1060ddc740853b2dc2d6518c4fbb0bec4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.number.epsilon.js"));

        // line 1
        echo "// 20.1.2.1 Number.EPSILON
var \$export = require('./_export');

\$export(\$export.S, 'Number', { EPSILON: Math.pow(2, -52) });
";
        
        $__internal_aea91b1dc22dff94c3b7a4cc527ff1060ddc740853b2dc2d6518c4fbb0bec4ad->leave($__internal_aea91b1dc22dff94c3b7a4cc527ff1060ddc740853b2dc2d6518c4fbb0bec4ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.number.epsilon.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.1 Number.EPSILON
var \$export = require('./_export');

\$export(\$export.S, 'Number', { EPSILON: Math.pow(2, -52) });
", "node_modules/core-js/library/modules/es6.number.epsilon.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.number.epsilon.js");
    }
}
