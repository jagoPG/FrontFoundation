<?php

/* node_modules/core-js/library/modules/es6.math.atanh.js */
class __TwigTemplate_761abc91bd8e0290b8c8fd6ebc18d57bba91d73f9e911dc88db3c004c8187a69 extends Twig_Template
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
        $__internal_1c59c915d5eddfb42fa19b10cc0f1ecdee7c01e37bdadc877c20cb79cae64a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c59c915d5eddfb42fa19b10cc0f1ecdee7c01e37bdadc877c20cb79cae64a9d->enter($__internal_1c59c915d5eddfb42fa19b10cc0f1ecdee7c01e37bdadc877c20cb79cae64a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.atanh.js"));

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
        
        $__internal_1c59c915d5eddfb42fa19b10cc0f1ecdee7c01e37bdadc877c20cb79cae64a9d->leave($__internal_1c59c915d5eddfb42fa19b10cc0f1ecdee7c01e37bdadc877c20cb79cae64a9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.atanh.js";
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
", "node_modules/core-js/library/modules/es6.math.atanh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.atanh.js");
    }
}
