<?php

/* node_modules/core-js/library/modules/es6.object.is-frozen.js */
class __TwigTemplate_c6f9812d938e9e306ac2b4bc714a45ce03cd7e306226d97ddde28ac520aba9bf extends Twig_Template
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
        $__internal_00b202e2b2585300666e8f5b4f539993ca2a1c8ee72ed23fb9e6e7d472355dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b202e2b2585300666e8f5b4f539993ca2a1c8ee72ed23fb9e6e7d472355dea->enter($__internal_00b202e2b2585300666e8f5b4f539993ca2a1c8ee72ed23fb9e6e7d472355dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.is-frozen.js"));

        // line 1
        echo "// 19.1.2.12 Object.isFrozen(O)
var isObject = require('./_is-object');

require('./_object-sap')('isFrozen', function (\$isFrozen) {
  return function isFrozen(it) {
    return isObject(it) ? \$isFrozen ? \$isFrozen(it) : false : true;
  };
});
";
        
        $__internal_00b202e2b2585300666e8f5b4f539993ca2a1c8ee72ed23fb9e6e7d472355dea->leave($__internal_00b202e2b2585300666e8f5b4f539993ca2a1c8ee72ed23fb9e6e7d472355dea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.is-frozen.js";
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
", "node_modules/core-js/library/modules/es6.object.is-frozen.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.is-frozen.js");
    }
}
