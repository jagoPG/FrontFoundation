<?php

/* node_modules/core-js/library/modules/es6.string.sub.js */
class __TwigTemplate_28c019cd7080e18444b3ea4e3ea75f240145ae70a3ab9c57437e7ca7e4741366 extends Twig_Template
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
        $__internal_c9f677c1d4114ff2bd9ad2cb669480fb629605559b29bd83ec194f5f6ef60c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f677c1d4114ff2bd9ad2cb669480fb629605559b29bd83ec194f5f6ef60c49->enter($__internal_c9f677c1d4114ff2bd9ad2cb669480fb629605559b29bd83ec194f5f6ef60c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.sub.js"));

        // line 1
        echo "'use strict';
// B.2.3.13 String.prototype.sub()
require('./_string-html')('sub', function (createHTML) {
  return function sub() {
    return createHTML(this, 'sub', '', '');
  };
});
";
        
        $__internal_c9f677c1d4114ff2bd9ad2cb669480fb629605559b29bd83ec194f5f6ef60c49->leave($__internal_c9f677c1d4114ff2bd9ad2cb669480fb629605559b29bd83ec194f5f6ef60c49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.sub.js";
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
", "node_modules/core-js/library/modules/es6.string.sub.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.sub.js");
    }
}
