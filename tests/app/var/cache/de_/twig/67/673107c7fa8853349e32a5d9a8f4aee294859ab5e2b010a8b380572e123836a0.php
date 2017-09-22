<?php

/* node_modules/core-js/library/modules/es6.math.cosh.js */
class __TwigTemplate_0f6532b54f2b90c378040dae6ff61068b4190def17a4e2717b2d6f25baa12cfd extends Twig_Template
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
        $__internal_ed30fed646c8b6f508c6081d8c483497c7eab6b9796b0efa59fef9514ffd6424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed30fed646c8b6f508c6081d8c483497c7eab6b9796b0efa59fef9514ffd6424->enter($__internal_ed30fed646c8b6f508c6081d8c483497c7eab6b9796b0efa59fef9514ffd6424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.cosh.js"));

        // line 1
        echo "// 20.2.2.12 Math.cosh(x)
var \$export = require('./_export');
var exp = Math.exp;

\$export(\$export.S, 'Math', {
  cosh: function cosh(x) {
    return (exp(x = +x) + exp(-x)) / 2;
  }
});
";
        
        $__internal_ed30fed646c8b6f508c6081d8c483497c7eab6b9796b0efa59fef9514ffd6424->leave($__internal_ed30fed646c8b6f508c6081d8c483497c7eab6b9796b0efa59fef9514ffd6424_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.cosh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.12 Math.cosh(x)
var \$export = require('./_export');
var exp = Math.exp;

\$export(\$export.S, 'Math', {
  cosh: function cosh(x) {
    return (exp(x = +x) + exp(-x)) / 2;
  }
});
", "node_modules/core-js/library/modules/es6.math.cosh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.cosh.js");
    }
}
