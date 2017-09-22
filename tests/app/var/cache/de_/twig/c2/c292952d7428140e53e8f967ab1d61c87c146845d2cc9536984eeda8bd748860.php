<?php

/* node_modules/core-js/modules/es6.string.italics.js */
class __TwigTemplate_615a26bb7777aef99027c10445462dd86b057bc14e97446e5e6443c1d800e6b5 extends Twig_Template
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
        $__internal_972d6a59524ebee7ec81270cadf44961c1d7463eaf2d644b84d6527e34739031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972d6a59524ebee7ec81270cadf44961c1d7463eaf2d644b84d6527e34739031->enter($__internal_972d6a59524ebee7ec81270cadf44961c1d7463eaf2d644b84d6527e34739031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.italics.js"));

        // line 1
        echo "'use strict';
// B.2.3.9 String.prototype.italics()
require('./_string-html')('italics', function (createHTML) {
  return function italics() {
    return createHTML(this, 'i', '', '');
  };
});
";
        
        $__internal_972d6a59524ebee7ec81270cadf44961c1d7463eaf2d644b84d6527e34739031->leave($__internal_972d6a59524ebee7ec81270cadf44961c1d7463eaf2d644b84d6527e34739031_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.italics.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.9 String.prototype.italics()
require('./_string-html')('italics', function (createHTML) {
  return function italics() {
    return createHTML(this, 'i', '', '');
  };
});
", "node_modules/core-js/modules/es6.string.italics.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.italics.js");
    }
}
