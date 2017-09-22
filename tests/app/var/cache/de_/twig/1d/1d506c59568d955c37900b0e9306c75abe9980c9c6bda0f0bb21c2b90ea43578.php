<?php

/* node_modules/core-js/library/modules/es7.math.signbit.js */
class __TwigTemplate_02f9cc62e14a49ce9ac21e91b998cfa2c5cd3c61a6445a62cd7eac473adec110 extends Twig_Template
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
        $__internal_26a2cbc535541c53696264abe9e8947be0c2972d145d57cb8ad1b23123ea6fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a2cbc535541c53696264abe9e8947be0c2972d145d57cb8ad1b23123ea6fdf->enter($__internal_26a2cbc535541c53696264abe9e8947be0c2972d145d57cb8ad1b23123ea6fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.signbit.js"));

        // line 1
        echo "// http://jfbastien.github.io/papers/Math.signbit.html
var \$export = require('./_export');

\$export(\$export.S, 'Math', { signbit: function signbit(x) {
  // eslint-disable-next-line no-self-compare
  return (x = +x) != x ? x : x == 0 ? 1 / x == Infinity : x > 0;
} });
";
        
        $__internal_26a2cbc535541c53696264abe9e8947be0c2972d145d57cb8ad1b23123ea6fdf->leave($__internal_26a2cbc535541c53696264abe9e8947be0c2972d145d57cb8ad1b23123ea6fdf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.signbit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// http://jfbastien.github.io/papers/Math.signbit.html
var \$export = require('./_export');

\$export(\$export.S, 'Math', { signbit: function signbit(x) {
  // eslint-disable-next-line no-self-compare
  return (x = +x) != x ? x : x == 0 ? 1 / x == Infinity : x > 0;
} });
", "node_modules/core-js/library/modules/es7.math.signbit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.signbit.js");
    }
}
