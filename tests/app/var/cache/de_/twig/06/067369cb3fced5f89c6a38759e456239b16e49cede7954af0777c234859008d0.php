<?php

/* node_modules/core-js/modules/es6.array.copy-within.js */
class __TwigTemplate_babcb6a96d0a7401b3866208e0de44898de6c9ac48973b0da2a47341188fd84a extends Twig_Template
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
        $__internal_d28bf653af0d7c1835a6048f878062c06701ed51ebb35f489d2702b7591c4b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28bf653af0d7c1835a6048f878062c06701ed51ebb35f489d2702b7591c4b6b->enter($__internal_d28bf653af0d7c1835a6048f878062c06701ed51ebb35f489d2702b7591c4b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.array.copy-within.js"));

        // line 1
        echo "// 22.1.3.3 Array.prototype.copyWithin(target, start, end = this.length)
var \$export = require('./_export');

\$export(\$export.P, 'Array', { copyWithin: require('./_array-copy-within') });

require('./_add-to-unscopables')('copyWithin');
";
        
        $__internal_d28bf653af0d7c1835a6048f878062c06701ed51ebb35f489d2702b7591c4b6b->leave($__internal_d28bf653af0d7c1835a6048f878062c06701ed51ebb35f489d2702b7591c4b6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.array.copy-within.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 22.1.3.3 Array.prototype.copyWithin(target, start, end = this.length)
var \$export = require('./_export');

\$export(\$export.P, 'Array', { copyWithin: require('./_array-copy-within') });

require('./_add-to-unscopables')('copyWithin');
", "node_modules/core-js/modules/es6.array.copy-within.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.array.copy-within.js");
    }
}
