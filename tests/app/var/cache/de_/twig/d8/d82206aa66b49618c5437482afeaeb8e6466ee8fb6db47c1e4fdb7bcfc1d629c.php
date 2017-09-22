<?php

/* node_modules/core-js/library/modules/es6.string.strike.js */
class __TwigTemplate_1d74db73e041f65f5226c1d2456b3af9ebc30865a2c086eaa1b3a8026ea8e29c extends Twig_Template
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
        $__internal_938b3cd00a3ab6bb004bb341b3fd9d96ddad083c0415e18e9bc3573965126ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938b3cd00a3ab6bb004bb341b3fd9d96ddad083c0415e18e9bc3573965126ef3->enter($__internal_938b3cd00a3ab6bb004bb341b3fd9d96ddad083c0415e18e9bc3573965126ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.strike.js"));

        // line 1
        echo "'use strict';
// B.2.3.12 String.prototype.strike()
require('./_string-html')('strike', function (createHTML) {
  return function strike() {
    return createHTML(this, 'strike', '', '');
  };
});
";
        
        $__internal_938b3cd00a3ab6bb004bb341b3fd9d96ddad083c0415e18e9bc3573965126ef3->leave($__internal_938b3cd00a3ab6bb004bb341b3fd9d96ddad083c0415e18e9bc3573965126ef3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.strike.js";
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
", "node_modules/core-js/library/modules/es6.string.strike.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.strike.js");
    }
}
