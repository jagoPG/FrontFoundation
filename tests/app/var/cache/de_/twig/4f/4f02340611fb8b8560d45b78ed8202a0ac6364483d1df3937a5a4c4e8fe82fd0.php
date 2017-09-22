<?php

/* node_modules/core-js/modules/es6.string.strike.js */
class __TwigTemplate_453e5c2b335d1ac2d9279a3c5f5ae3ec0c82fc5802c47dddc52faf54a4c1bf41 extends Twig_Template
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
        $__internal_a41675580c32eec14123433adfd3a7ff64d48fab015cec79fae02905d7c15dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41675580c32eec14123433adfd3a7ff64d48fab015cec79fae02905d7c15dcd->enter($__internal_a41675580c32eec14123433adfd3a7ff64d48fab015cec79fae02905d7c15dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.strike.js"));

        // line 1
        echo "'use strict';
// B.2.3.12 String.prototype.strike()
require('./_string-html')('strike', function (createHTML) {
  return function strike() {
    return createHTML(this, 'strike', '', '');
  };
});
";
        
        $__internal_a41675580c32eec14123433adfd3a7ff64d48fab015cec79fae02905d7c15dcd->leave($__internal_a41675580c32eec14123433adfd3a7ff64d48fab015cec79fae02905d7c15dcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.strike.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.12 String.prototype.strike()
require('./_string-html')('strike', function (createHTML) {
  return function strike() {
    return createHTML(this, 'strike', '', '');
  };
});
", "node_modules/core-js/modules/es6.string.strike.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.strike.js");
    }
}
