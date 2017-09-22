<?php

/* node_modules/core-js/modules/_an-instance.js */
class __TwigTemplate_9782a6b35a2f93ad79045271974a3a92df9e2de51afffac6f5c6a8520d8801bb extends Twig_Template
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
        $__internal_f92d8ae43d043d28549bf55f84b8d558a58fa37b0f50767b1719b0952e8494e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92d8ae43d043d28549bf55f84b8d558a58fa37b0f50767b1719b0952e8494e3->enter($__internal_f92d8ae43d043d28549bf55f84b8d558a58fa37b0f50767b1719b0952e8494e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_an-instance.js"));

        // line 1
        echo "module.exports = function (it, Constructor, name, forbiddenField) {
  if (!(it instanceof Constructor) || (forbiddenField !== undefined && forbiddenField in it)) {
    throw TypeError(name + ': incorrect invocation!');
  } return it;
};
";
        
        $__internal_f92d8ae43d043d28549bf55f84b8d558a58fa37b0f50767b1719b0952e8494e3->leave($__internal_f92d8ae43d043d28549bf55f84b8d558a58fa37b0f50767b1719b0952e8494e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_an-instance.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (it, Constructor, name, forbiddenField) {
  if (!(it instanceof Constructor) || (forbiddenField !== undefined && forbiddenField in it)) {
    throw TypeError(name + ': incorrect invocation!');
  } return it;
};
", "node_modules/core-js/modules/_an-instance.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_an-instance.js");
    }
}
