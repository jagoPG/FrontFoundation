<?php

/* node_modules/core-js/modules/es6.string.repeat.js */
class __TwigTemplate_d28924e93019f0c1386456541baf6eec1b90022b594bdcf58cf2ee43fb925139 extends Twig_Template
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
        $__internal_e43b8f08928f9df5aa604a942bd6a7ef868629a59c5bc47e8230b6d0d41873c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43b8f08928f9df5aa604a942bd6a7ef868629a59c5bc47e8230b6d0d41873c6->enter($__internal_e43b8f08928f9df5aa604a942bd6a7ef868629a59c5bc47e8230b6d0d41873c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.repeat.js"));

        // line 1
        echo "var \$export = require('./_export');

\$export(\$export.P, 'String', {
  // 21.1.3.13 String.prototype.repeat(count)
  repeat: require('./_string-repeat')
});
";
        
        $__internal_e43b8f08928f9df5aa604a942bd6a7ef868629a59c5bc47e8230b6d0d41873c6->leave($__internal_e43b8f08928f9df5aa604a942bd6a7ef868629a59c5bc47e8230b6d0d41873c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');

\$export(\$export.P, 'String', {
  // 21.1.3.13 String.prototype.repeat(count)
  repeat: require('./_string-repeat')
});
", "node_modules/core-js/modules/es6.string.repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.repeat.js");
    }
}
