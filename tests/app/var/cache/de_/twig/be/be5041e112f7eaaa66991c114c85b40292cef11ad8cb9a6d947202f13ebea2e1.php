<?php

/* node_modules/lodash/_defineProperty.js */
class __TwigTemplate_a1aa07e89d2c7bafca2eab0bd92a672217e652def163cfee599da7bb7ba86ca2 extends Twig_Template
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
        $__internal_07f3c36d14d02118845fcf59475cdf306d28bc5c3590d8ebf158b0ddf2618a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f3c36d14d02118845fcf59475cdf306d28bc5c3590d8ebf158b0ddf2618a9c->enter($__internal_07f3c36d14d02118845fcf59475cdf306d28bc5c3590d8ebf158b0ddf2618a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_defineProperty.js"));

        // line 1
        echo "var getNative = require('./_getNative');

var defineProperty = (function() {
  try {
    var func = getNative(Object, 'defineProperty');
    func({}, '', {});
    return func;
  } catch (e) {}
}());

module.exports = defineProperty;
";
        
        $__internal_07f3c36d14d02118845fcf59475cdf306d28bc5c3590d8ebf158b0ddf2618a9c->leave($__internal_07f3c36d14d02118845fcf59475cdf306d28bc5c3590d8ebf158b0ddf2618a9c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_defineProperty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getNative = require('./_getNative');

var defineProperty = (function() {
  try {
    var func = getNative(Object, 'defineProperty');
    func({}, '', {});
    return func;
  } catch (e) {}
}());

module.exports = defineProperty;
", "node_modules/lodash/_defineProperty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_defineProperty.js");
    }
}
