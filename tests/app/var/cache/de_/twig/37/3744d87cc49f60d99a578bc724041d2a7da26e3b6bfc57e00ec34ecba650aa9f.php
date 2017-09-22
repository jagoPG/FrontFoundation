<?php

/* node_modules/core-js/modules/es6.string.big.js */
class __TwigTemplate_25e0db4d9067d83784cf4a4f32d66f4f6ea3acd11a9d25ce2911b989ae2c2c9f extends Twig_Template
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
        $__internal_193d176c985a62785941491062dcade8a821f0efa1a1871e279e2b743f28ed7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193d176c985a62785941491062dcade8a821f0efa1a1871e279e2b743f28ed7a->enter($__internal_193d176c985a62785941491062dcade8a821f0efa1a1871e279e2b743f28ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.big.js"));

        // line 1
        echo "'use strict';
// B.2.3.3 String.prototype.big()
require('./_string-html')('big', function (createHTML) {
  return function big() {
    return createHTML(this, 'big', '', '');
  };
});
";
        
        $__internal_193d176c985a62785941491062dcade8a821f0efa1a1871e279e2b743f28ed7a->leave($__internal_193d176c985a62785941491062dcade8a821f0efa1a1871e279e2b743f28ed7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.big.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.3 String.prototype.big()
require('./_string-html')('big', function (createHTML) {
  return function big() {
    return createHTML(this, 'big', '', '');
  };
});
", "node_modules/core-js/modules/es6.string.big.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.big.js");
    }
}
