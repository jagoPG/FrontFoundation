<?php

/* node_modules/core-js/library/modules/es6.string.small.js */
class __TwigTemplate_fae1b8aa4ccc23750c2e8af3bc0839ac38940b98043b12f6b7da7997eb7198ec extends Twig_Template
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
        $__internal_6b91dc0d280e2ca634426719c54d0aab13cc11128b5d392578242bda25ae8350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b91dc0d280e2ca634426719c54d0aab13cc11128b5d392578242bda25ae8350->enter($__internal_6b91dc0d280e2ca634426719c54d0aab13cc11128b5d392578242bda25ae8350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.small.js"));

        // line 1
        echo "'use strict';
// B.2.3.11 String.prototype.small()
require('./_string-html')('small', function (createHTML) {
  return function small() {
    return createHTML(this, 'small', '', '');
  };
});
";
        
        $__internal_6b91dc0d280e2ca634426719c54d0aab13cc11128b5d392578242bda25ae8350->leave($__internal_6b91dc0d280e2ca634426719c54d0aab13cc11128b5d392578242bda25ae8350_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.small.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.11 String.prototype.small()
require('./_string-html')('small', function (createHTML) {
  return function small() {
    return createHTML(this, 'small', '', '');
  };
});
", "node_modules/core-js/library/modules/es6.string.small.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.small.js");
    }
}
