<?php

/* node_modules/core-js/modules/es6.string.sub.js */
class __TwigTemplate_6f8afdee16af965bf1d9b41d452dcdb7d35f1d22bef556359b50dd7e1b0172e0 extends Twig_Template
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
        $__internal_b4362146fbacb04f92f94cedcd24695c6252b94ea5612f87f8a7b3e1e378f8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4362146fbacb04f92f94cedcd24695c6252b94ea5612f87f8a7b3e1e378f8bd->enter($__internal_b4362146fbacb04f92f94cedcd24695c6252b94ea5612f87f8a7b3e1e378f8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.sub.js"));

        // line 1
        echo "'use strict';
// B.2.3.13 String.prototype.sub()
require('./_string-html')('sub', function (createHTML) {
  return function sub() {
    return createHTML(this, 'sub', '', '');
  };
});
";
        
        $__internal_b4362146fbacb04f92f94cedcd24695c6252b94ea5612f87f8a7b3e1e378f8bd->leave($__internal_b4362146fbacb04f92f94cedcd24695c6252b94ea5612f87f8a7b3e1e378f8bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.sub.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.13 String.prototype.sub()
require('./_string-html')('sub', function (createHTML) {
  return function sub() {
    return createHTML(this, 'sub', '', '');
  };
});
", "node_modules/core-js/modules/es6.string.sub.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.sub.js");
    }
}
