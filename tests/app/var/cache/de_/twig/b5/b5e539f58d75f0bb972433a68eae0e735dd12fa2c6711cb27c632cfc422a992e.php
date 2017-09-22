<?php

/* node_modules/core-js/library/modules/es6.parse-int.js */
class __TwigTemplate_626c83eddc6b815efd7f2deaf8f4e3d8377a46c4808341869e8fee72270c52fe extends Twig_Template
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
        $__internal_393e45e180d87274e2a0f5c35ede6b047f86dccb36a8d2e859286d374cd9a014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393e45e180d87274e2a0f5c35ede6b047f86dccb36a8d2e859286d374cd9a014->enter($__internal_393e45e180d87274e2a0f5c35ede6b047f86dccb36a8d2e859286d374cd9a014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.parse-int.js"));

        // line 1
        echo "var \$export = require('./_export');
var \$parseInt = require('./_parse-int');
// 18.2.5 parseInt(string, radix)
\$export(\$export.G + \$export.F * (parseInt != \$parseInt), { parseInt: \$parseInt });
";
        
        $__internal_393e45e180d87274e2a0f5c35ede6b047f86dccb36a8d2e859286d374cd9a014->leave($__internal_393e45e180d87274e2a0f5c35ede6b047f86dccb36a8d2e859286d374cd9a014_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.parse-int.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var \$parseInt = require('./_parse-int');
// 18.2.5 parseInt(string, radix)
\$export(\$export.G + \$export.F * (parseInt != \$parseInt), { parseInt: \$parseInt });
", "node_modules/core-js/library/modules/es6.parse-int.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.parse-int.js");
    }
}
