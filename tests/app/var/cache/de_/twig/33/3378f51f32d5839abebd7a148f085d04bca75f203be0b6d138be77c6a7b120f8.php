<?php

/* node_modules/core-js/modules/es6.math.atanh.js */
class __TwigTemplate_4c64ddec7ad7e0dbf8f3a97c3ed541b0c39ae9554163cfc616d6aec12f00abb1 extends Twig_Template
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
        $__internal_97edfa990b0f26113b1f0f8c406634baef5a145b78c2fc8cd99b130a87c6ff90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97edfa990b0f26113b1f0f8c406634baef5a145b78c2fc8cd99b130a87c6ff90->enter($__internal_97edfa990b0f26113b1f0f8c406634baef5a145b78c2fc8cd99b130a87c6ff90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.atanh.js"));

        // line 1
        echo "// 20.2.2.7 Math.atanh(x)
var \$export = require('./_export');
var \$atanh = Math.atanh;

// Tor Browser bug: Math.atanh(-0) -> 0
\$export(\$export.S + \$export.F * !(\$atanh && 1 / \$atanh(-0) < 0), 'Math', {
  atanh: function atanh(x) {
    return (x = +x) == 0 ? x : Math.log((1 + x) / (1 - x)) / 2;
  }
});
";
        
        $__internal_97edfa990b0f26113b1f0f8c406634baef5a145b78c2fc8cd99b130a87c6ff90->leave($__internal_97edfa990b0f26113b1f0f8c406634baef5a145b78c2fc8cd99b130a87c6ff90_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.atanh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.7 Math.atanh(x)
var \$export = require('./_export');
var \$atanh = Math.atanh;

// Tor Browser bug: Math.atanh(-0) -> 0
\$export(\$export.S + \$export.F * !(\$atanh && 1 / \$atanh(-0) < 0), 'Math', {
  atanh: function atanh(x) {
    return (x = +x) == 0 ? x : Math.log((1 + x) / (1 - x)) / 2;
  }
});
", "node_modules/core-js/modules/es6.math.atanh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.atanh.js");
    }
}
