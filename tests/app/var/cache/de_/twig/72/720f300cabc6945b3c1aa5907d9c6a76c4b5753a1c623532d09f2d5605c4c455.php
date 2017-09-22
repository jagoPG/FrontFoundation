<?php

/* node_modules/core-js/modules/es7.math.rad-per-deg.js */
class __TwigTemplate_84f7a1c267f342b9b34a9e4aa5ca8254afd9f9c58746575687f85929d2ae7a4b extends Twig_Template
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
        $__internal_5070ccd5b5d22c127f702435e0d811b0e89c74666e8318640de054433cb428bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5070ccd5b5d22c127f702435e0d811b0e89c74666e8318640de054433cb428bc->enter($__internal_5070ccd5b5d22c127f702435e0d811b0e89c74666e8318640de054433cb428bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.rad-per-deg.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { RAD_PER_DEG: 180 / Math.PI });
";
        
        $__internal_5070ccd5b5d22c127f702435e0d811b0e89c74666e8318640de054433cb428bc->leave($__internal_5070ccd5b5d22c127f702435e0d811b0e89c74666e8318640de054433cb428bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.rad-per-deg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { RAD_PER_DEG: 180 / Math.PI });
", "node_modules/core-js/modules/es7.math.rad-per-deg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.rad-per-deg.js");
    }
}
