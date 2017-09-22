<?php

/* node_modules/core-js/library/modules/_perform.js */
class __TwigTemplate_9baffea7826ddd04b5e2bf015c4467e3b5e357a5a637c26254a3a9579fc2ff6b extends Twig_Template
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
        $__internal_e6fef1516bb33217fdc9021d15d715a9ef6c5bcafc375459d1a4ab222cc47799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6fef1516bb33217fdc9021d15d715a9ef6c5bcafc375459d1a4ab222cc47799->enter($__internal_e6fef1516bb33217fdc9021d15d715a9ef6c5bcafc375459d1a4ab222cc47799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_perform.js"));

        // line 1
        echo "module.exports = function (exec) {
  try {
    return { e: false, v: exec() };
  } catch (e) {
    return { e: true, v: e };
  }
};
";
        
        $__internal_e6fef1516bb33217fdc9021d15d715a9ef6c5bcafc375459d1a4ab222cc47799->leave($__internal_e6fef1516bb33217fdc9021d15d715a9ef6c5bcafc375459d1a4ab222cc47799_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_perform.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (exec) {
  try {
    return { e: false, v: exec() };
  } catch (e) {
    return { e: true, v: e };
  }
};
", "node_modules/core-js/library/modules/_perform.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_perform.js");
    }
}
