<?php

/* node_modules/core-js/library/modules/es6.string.fixed.js */
class __TwigTemplate_8f0b0d8d484447f60ad7f9f57a4b0f69aa3b176cf0ccbfb01d11c0ae909c3d65 extends Twig_Template
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
        $__internal_268cf5d7014ab6a61f5f2038f71bebeebc3390fbdf169fcea3582bd937c8f718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268cf5d7014ab6a61f5f2038f71bebeebc3390fbdf169fcea3582bd937c8f718->enter($__internal_268cf5d7014ab6a61f5f2038f71bebeebc3390fbdf169fcea3582bd937c8f718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.fixed.js"));

        // line 1
        echo "'use strict';
// B.2.3.6 String.prototype.fixed()
require('./_string-html')('fixed', function (createHTML) {
  return function fixed() {
    return createHTML(this, 'tt', '', '');
  };
});
";
        
        $__internal_268cf5d7014ab6a61f5f2038f71bebeebc3390fbdf169fcea3582bd937c8f718->leave($__internal_268cf5d7014ab6a61f5f2038f71bebeebc3390fbdf169fcea3582bd937c8f718_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.fixed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.6 String.prototype.fixed()
require('./_string-html')('fixed', function (createHTML) {
  return function fixed() {
    return createHTML(this, 'tt', '', '');
  };
});
", "node_modules/core-js/library/modules/es6.string.fixed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.fixed.js");
    }
}
