<?php

/* node_modules/core-js/modules/es6.math.asinh.js */
class __TwigTemplate_4f6ed43fc114864fb6fcbeb0856cb3061e87b23bbec41c1df762658df7763d21 extends Twig_Template
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
        $__internal_28b36bc24c37177aeaa1317b16004a4f59f53145a74bc77c94be908defbc6120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b36bc24c37177aeaa1317b16004a4f59f53145a74bc77c94be908defbc6120->enter($__internal_28b36bc24c37177aeaa1317b16004a4f59f53145a74bc77c94be908defbc6120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.asinh.js"));

        // line 1
        echo "// 20.2.2.5 Math.asinh(x)
var \$export = require('./_export');
var \$asinh = Math.asinh;

function asinh(x) {
  return !isFinite(x = +x) || x == 0 ? x : x < 0 ? -asinh(-x) : Math.log(x + Math.sqrt(x * x + 1));
}

// Tor Browser bug: Math.asinh(0) -> -0
\$export(\$export.S + \$export.F * !(\$asinh && 1 / \$asinh(0) > 0), 'Math', { asinh: asinh });
";
        
        $__internal_28b36bc24c37177aeaa1317b16004a4f59f53145a74bc77c94be908defbc6120->leave($__internal_28b36bc24c37177aeaa1317b16004a4f59f53145a74bc77c94be908defbc6120_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.asinh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.5 Math.asinh(x)
var \$export = require('./_export');
var \$asinh = Math.asinh;

function asinh(x) {
  return !isFinite(x = +x) || x == 0 ? x : x < 0 ? -asinh(-x) : Math.log(x + Math.sqrt(x * x + 1));
}

// Tor Browser bug: Math.asinh(0) -> -0
\$export(\$export.S + \$export.F * !(\$asinh && 1 / \$asinh(0) > 0), 'Math', { asinh: asinh });
", "node_modules/core-js/modules/es6.math.asinh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.asinh.js");
    }
}
