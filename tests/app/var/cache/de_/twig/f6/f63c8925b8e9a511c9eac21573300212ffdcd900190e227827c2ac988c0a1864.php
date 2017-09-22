<?php

/* node_modules/core-js/library/modules/es7.string.trim-right.js */
class __TwigTemplate_a9c09b348042333ff738c98c245630384915e41f21ffd927a17cfe5a262e73d9 extends Twig_Template
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
        $__internal_b22c455c632f78eacf6a7bd3ccf3fd0e006677f2291fdaf739c835bb23725520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22c455c632f78eacf6a7bd3ccf3fd0e006677f2291fdaf739c835bb23725520->enter($__internal_b22c455c632f78eacf6a7bd3ccf3fd0e006677f2291fdaf739c835bb23725520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.string.trim-right.js"));

        // line 1
        echo "'use strict';
// https://github.com/sebmarkbage/ecmascript-string-left-right-trim
require('./_string-trim')('trimRight', function (\$trim) {
  return function trimRight() {
    return \$trim(this, 2);
  };
}, 'trimEnd');
";
        
        $__internal_b22c455c632f78eacf6a7bd3ccf3fd0e006677f2291fdaf739c835bb23725520->leave($__internal_b22c455c632f78eacf6a7bd3ccf3fd0e006677f2291fdaf739c835bb23725520_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.string.trim-right.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/sebmarkbage/ecmascript-string-left-right-trim
require('./_string-trim')('trimRight', function (\$trim) {
  return function trimRight() {
    return \$trim(this, 2);
  };
}, 'trimEnd');
", "node_modules/core-js/library/modules/es7.string.trim-right.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.string.trim-right.js");
    }
}
