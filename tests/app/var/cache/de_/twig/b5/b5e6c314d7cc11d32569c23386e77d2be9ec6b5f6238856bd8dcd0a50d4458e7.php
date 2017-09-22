<?php

/* node_modules/core-js/modules/es6.string.fixed.js */
class __TwigTemplate_2881cc32ed4701b96fb0671fca748fe3c165f26ef07885f54b1f3afd9192296c extends Twig_Template
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
        $__internal_8171cb42ee609375f74c0d5b4c80f3a7aa38fd791a56fbe25b916040bad7a550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8171cb42ee609375f74c0d5b4c80f3a7aa38fd791a56fbe25b916040bad7a550->enter($__internal_8171cb42ee609375f74c0d5b4c80f3a7aa38fd791a56fbe25b916040bad7a550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.fixed.js"));

        // line 1
        echo "'use strict';
// B.2.3.6 String.prototype.fixed()
require('./_string-html')('fixed', function (createHTML) {
  return function fixed() {
    return createHTML(this, 'tt', '', '');
  };
});
";
        
        $__internal_8171cb42ee609375f74c0d5b4c80f3a7aa38fd791a56fbe25b916040bad7a550->leave($__internal_8171cb42ee609375f74c0d5b4c80f3a7aa38fd791a56fbe25b916040bad7a550_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.fixed.js";
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
", "node_modules/core-js/modules/es6.string.fixed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.fixed.js");
    }
}
