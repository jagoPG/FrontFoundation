<?php

/* node_modules/core-js/modules/_fails.js */
class __TwigTemplate_ceaf8e50f1577a81611122ffb01d4a615f2dd04d03a22eb400f320d59f4466ec extends Twig_Template
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
        $__internal_97ff7e550022dbd0ccacf40940f019fe347e23eff7eb62148ad20b442633eb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff7e550022dbd0ccacf40940f019fe347e23eff7eb62148ad20b442633eb00->enter($__internal_97ff7e550022dbd0ccacf40940f019fe347e23eff7eb62148ad20b442633eb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_fails.js"));

        // line 1
        echo "module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};
";
        
        $__internal_97ff7e550022dbd0ccacf40940f019fe347e23eff7eb62148ad20b442633eb00->leave($__internal_97ff7e550022dbd0ccacf40940f019fe347e23eff7eb62148ad20b442633eb00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_fails.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};
", "node_modules/core-js/modules/_fails.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_fails.js");
    }
}
