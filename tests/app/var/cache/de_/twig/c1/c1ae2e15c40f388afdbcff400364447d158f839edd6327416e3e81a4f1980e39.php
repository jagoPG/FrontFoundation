<?php

/* node_modules/core-js/modules/es6.math.cbrt.js */
class __TwigTemplate_687241c218cfe7f8254389bfa3346eacca4c517d579db048c6e642bc717e5c8d extends Twig_Template
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
        $__internal_6e40af13d45d95b8edd952019105736de5448e4ecd0cf4c5b2d95fe4eb2443d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e40af13d45d95b8edd952019105736de5448e4ecd0cf4c5b2d95fe4eb2443d3->enter($__internal_6e40af13d45d95b8edd952019105736de5448e4ecd0cf4c5b2d95fe4eb2443d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.cbrt.js"));

        // line 1
        echo "// 20.2.2.9 Math.cbrt(x)
var \$export = require('./_export');
var sign = require('./_math-sign');

\$export(\$export.S, 'Math', {
  cbrt: function cbrt(x) {
    return sign(x = +x) * Math.pow(Math.abs(x), 1 / 3);
  }
});
";
        
        $__internal_6e40af13d45d95b8edd952019105736de5448e4ecd0cf4c5b2d95fe4eb2443d3->leave($__internal_6e40af13d45d95b8edd952019105736de5448e4ecd0cf4c5b2d95fe4eb2443d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.cbrt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.9 Math.cbrt(x)
var \$export = require('./_export');
var sign = require('./_math-sign');

\$export(\$export.S, 'Math', {
  cbrt: function cbrt(x) {
    return sign(x = +x) * Math.pow(Math.abs(x), 1 / 3);
  }
});
", "node_modules/core-js/modules/es6.math.cbrt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.cbrt.js");
    }
}
