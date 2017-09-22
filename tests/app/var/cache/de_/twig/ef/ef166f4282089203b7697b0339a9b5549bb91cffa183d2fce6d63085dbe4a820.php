<?php

/* node_modules/core-js/library/modules/es6.string.blink.js */
class __TwigTemplate_9bd308650e2585133303e059225b121c4b0c83945c58db661938f8fd28ebbd4c extends Twig_Template
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
        $__internal_e504d8ed7a330f8ff6675098a166b0c1d175e1fe554b1dac29615f53319a58b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e504d8ed7a330f8ff6675098a166b0c1d175e1fe554b1dac29615f53319a58b2->enter($__internal_e504d8ed7a330f8ff6675098a166b0c1d175e1fe554b1dac29615f53319a58b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.blink.js"));

        // line 1
        echo "'use strict';
// B.2.3.4 String.prototype.blink()
require('./_string-html')('blink', function (createHTML) {
  return function blink() {
    return createHTML(this, 'blink', '', '');
  };
});
";
        
        $__internal_e504d8ed7a330f8ff6675098a166b0c1d175e1fe554b1dac29615f53319a58b2->leave($__internal_e504d8ed7a330f8ff6675098a166b0c1d175e1fe554b1dac29615f53319a58b2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.blink.js";
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
", "node_modules/core-js/library/modules/es6.string.blink.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.blink.js");
    }
}
