<?php

/* node_modules/core-js/modules/es6.string.blink.js */
class __TwigTemplate_2214f889e52a16b3637b1e5e88144a705598e9352d524a17c8480b6a2b9f1a42 extends Twig_Template
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
        $__internal_924f926b8ea93d123cd4206f6ef960790a8648d4fbbf1090eb56452c294b4912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924f926b8ea93d123cd4206f6ef960790a8648d4fbbf1090eb56452c294b4912->enter($__internal_924f926b8ea93d123cd4206f6ef960790a8648d4fbbf1090eb56452c294b4912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.blink.js"));

        // line 1
        echo "'use strict';
// B.2.3.4 String.prototype.blink()
require('./_string-html')('blink', function (createHTML) {
  return function blink() {
    return createHTML(this, 'blink', '', '');
  };
});
";
        
        $__internal_924f926b8ea93d123cd4206f6ef960790a8648d4fbbf1090eb56452c294b4912->leave($__internal_924f926b8ea93d123cd4206f6ef960790a8648d4fbbf1090eb56452c294b4912_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.blink.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.4 String.prototype.blink()
require('./_string-html')('blink', function (createHTML) {
  return function blink() {
    return createHTML(this, 'blink', '', '');
  };
});
", "node_modules/core-js/modules/es6.string.blink.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.blink.js");
    }
}
