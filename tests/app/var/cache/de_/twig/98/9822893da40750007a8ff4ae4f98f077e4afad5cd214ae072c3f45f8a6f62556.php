<?php

/* node_modules/core-js/modules/es7.math.signbit.js */
class __TwigTemplate_1f55fb74eb8c461e3c728a38af21f259bff3b32a94e827395c961518867f6c0e extends Twig_Template
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
        $__internal_37d0c45677d34c6f8a26ac597bea05a7fe5d40070835a6d1ab892b5a05d89d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d0c45677d34c6f8a26ac597bea05a7fe5d40070835a6d1ab892b5a05d89d46->enter($__internal_37d0c45677d34c6f8a26ac597bea05a7fe5d40070835a6d1ab892b5a05d89d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.signbit.js"));

        // line 1
        echo "// http://jfbastien.github.io/papers/Math.signbit.html
var \$export = require('./_export');

\$export(\$export.S, 'Math', { signbit: function signbit(x) {
  // eslint-disable-next-line no-self-compare
  return (x = +x) != x ? x : x == 0 ? 1 / x == Infinity : x > 0;
} });
";
        
        $__internal_37d0c45677d34c6f8a26ac597bea05a7fe5d40070835a6d1ab892b5a05d89d46->leave($__internal_37d0c45677d34c6f8a26ac597bea05a7fe5d40070835a6d1ab892b5a05d89d46_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.signbit.js";
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
", "node_modules/core-js/modules/es7.math.signbit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.signbit.js");
    }
}
