<?php

/* node_modules/core-js/library/modules/es6.math.log10.js */
class __TwigTemplate_b75743e6357948c822ae9bcbf4392a95eed0c48f214fe13a24ab6a8b5f9ecd37 extends Twig_Template
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
        $__internal_a6b4be8f90f9d4af770da62ea3ac47eed74f1c4d3bd8aeea17bb6d41791c72ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b4be8f90f9d4af770da62ea3ac47eed74f1c4d3bd8aeea17bb6d41791c72ae->enter($__internal_a6b4be8f90f9d4af770da62ea3ac47eed74f1c4d3bd8aeea17bb6d41791c72ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.log10.js"));

        // line 1
        echo "// 20.2.2.21 Math.log10(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log10: function log10(x) {
    return Math.log(x) * Math.LOG10E;
  }
});
";
        
        $__internal_a6b4be8f90f9d4af770da62ea3ac47eed74f1c4d3bd8aeea17bb6d41791c72ae->leave($__internal_a6b4be8f90f9d4af770da62ea3ac47eed74f1c4d3bd8aeea17bb6d41791c72ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.log10.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.21 Math.log10(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  log10: function log10(x) {
    return Math.log(x) * Math.LOG10E;
  }
});
", "node_modules/core-js/library/modules/es6.math.log10.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.log10.js");
    }
}
