<?php

/* node_modules/core-js/modules/es6.string.small.js */
class __TwigTemplate_309c8611bf31598cc441190e87c01740a9f9a13e5803618937d866d11cdb49eb extends Twig_Template
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
        $__internal_a4149f5ae390e4e2f3f4898afd800ca0680f0afee30f3fe3e1fe570439aac7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4149f5ae390e4e2f3f4898afd800ca0680f0afee30f3fe3e1fe570439aac7b6->enter($__internal_a4149f5ae390e4e2f3f4898afd800ca0680f0afee30f3fe3e1fe570439aac7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.small.js"));

        // line 1
        echo "'use strict';
// B.2.3.11 String.prototype.small()
require('./_string-html')('small', function (createHTML) {
  return function small() {
    return createHTML(this, 'small', '', '');
  };
});
";
        
        $__internal_a4149f5ae390e4e2f3f4898afd800ca0680f0afee30f3fe3e1fe570439aac7b6->leave($__internal_a4149f5ae390e4e2f3f4898afd800ca0680f0afee30f3fe3e1fe570439aac7b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.small.js";
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
", "node_modules/core-js/modules/es6.string.small.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.small.js");
    }
}
