<?php

/* node_modules/core-js/modules/es6.object.is-frozen.js */
class __TwigTemplate_aae5a60ad19e939f55f935059df0bd81bf994aa0983a38063b2446ad7cd0e9b1 extends Twig_Template
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
        $__internal_a9c7d984beb7955d4fc066559a5cef04db72da2088ed1d1a4524771d22a49886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c7d984beb7955d4fc066559a5cef04db72da2088ed1d1a4524771d22a49886->enter($__internal_a9c7d984beb7955d4fc066559a5cef04db72da2088ed1d1a4524771d22a49886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.is-frozen.js"));

        // line 1
        echo "// 19.1.2.12 Object.isFrozen(O)
var isObject = require('./_is-object');

require('./_object-sap')('isFrozen', function (\$isFrozen) {
  return function isFrozen(it) {
    return isObject(it) ? \$isFrozen ? \$isFrozen(it) : false : true;
  };
});
";
        
        $__internal_a9c7d984beb7955d4fc066559a5cef04db72da2088ed1d1a4524771d22a49886->leave($__internal_a9c7d984beb7955d4fc066559a5cef04db72da2088ed1d1a4524771d22a49886_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.is-frozen.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.2.12 Object.isFrozen(O)
var isObject = require('./_is-object');

require('./_object-sap')('isFrozen', function (\$isFrozen) {
  return function isFrozen(it) {
    return isObject(it) ? \$isFrozen ? \$isFrozen(it) : false : true;
  };
});
", "node_modules/core-js/modules/es6.object.is-frozen.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.is-frozen.js");
    }
}
