<?php

/* node_modules/core-js/modules/es6.math.log2.js */
class __TwigTemplate_7b58f41f19876a5bedffcb4e2287849f549772fbc2ab1fc4bc74bf17092b6e84 extends Twig_Template
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
        $__internal_fe6c2823c8ef527b8469f70db32c249d637c8b90282ff279a6b86a3fcdefc79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6c2823c8ef527b8469f70db32c249d637c8b90282ff279a6b86a3fcdefc79e->enter($__internal_fe6c2823c8ef527b8469f70db32c249d637c8b90282ff279a6b86a3fcdefc79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.log2.js"));

        // line 1
        echo "// 20.2.2.22 Math.log2(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log2: function log2(x) {
    return Math.log(x) / Math.LN2;
  }
});
";
        
        $__internal_fe6c2823c8ef527b8469f70db32c249d637c8b90282ff279a6b86a3fcdefc79e->leave($__internal_fe6c2823c8ef527b8469f70db32c249d637c8b90282ff279a6b86a3fcdefc79e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.log2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.22 Math.log2(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log2: function log2(x) {
    return Math.log(x) / Math.LN2;
  }
});
", "node_modules/core-js/modules/es6.math.log2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.log2.js");
    }
}
