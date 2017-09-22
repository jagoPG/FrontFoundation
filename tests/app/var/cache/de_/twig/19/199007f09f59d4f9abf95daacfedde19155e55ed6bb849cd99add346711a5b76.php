<?php

/* node_modules/core-js/modules/es6.object.is-extensible.js */
class __TwigTemplate_d9c3854efb29dd031d14adef44262f4b2f1c40d00b3f900165ed7011993036e5 extends Twig_Template
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
        $__internal_bc67f556fd683d78df079f0d597d41d8016681b9433e719cea2cc23f4f5fd832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc67f556fd683d78df079f0d597d41d8016681b9433e719cea2cc23f4f5fd832->enter($__internal_bc67f556fd683d78df079f0d597d41d8016681b9433e719cea2cc23f4f5fd832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.is-extensible.js"));

        // line 1
        echo "// 19.1.2.11 Object.isExtensible(O)
var isObject = require('./_is-object');

require('./_object-sap')('isExtensible', function (\$isExtensible) {
  return function isExtensible(it) {
    return isObject(it) ? \$isExtensible ? \$isExtensible(it) : true : false;
  };
});
";
        
        $__internal_bc67f556fd683d78df079f0d597d41d8016681b9433e719cea2cc23f4f5fd832->leave($__internal_bc67f556fd683d78df079f0d597d41d8016681b9433e719cea2cc23f4f5fd832_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.11 Object.isExtensible(O)
var isObject = require('./_is-object');

require('./_object-sap')('isExtensible', function (\$isExtensible) {
  return function isExtensible(it) {
    return isObject(it) ? \$isExtensible ? \$isExtensible(it) : true : false;
  };
});
", "node_modules/core-js/modules/es6.object.is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.is-extensible.js");
    }
}
