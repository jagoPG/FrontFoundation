<?php

/* node_modules/core-js/modules/_descriptors.js */
class __TwigTemplate_7496501af393c16d4fd7094959277fcde4f413e96644486fe8ce8e7b7b66e6b2 extends Twig_Template
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
        $__internal_724e80a3b4c543585bd1d88b600aa01e8a4c336b0649d96f2485cab6ba58e5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724e80a3b4c543585bd1d88b600aa01e8a4c336b0649d96f2485cab6ba58e5c2->enter($__internal_724e80a3b4c543585bd1d88b600aa01e8a4c336b0649d96f2485cab6ba58e5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_descriptors.js"));

        // line 1
        echo "// Thank's IE8 for his funny defineProperty
module.exports = !require('./_fails')(function () {
  return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
});
";
        
        $__internal_724e80a3b4c543585bd1d88b600aa01e8a4c336b0649d96f2485cab6ba58e5c2->leave($__internal_724e80a3b4c543585bd1d88b600aa01e8a4c336b0649d96f2485cab6ba58e5c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_descriptors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thank's IE8 for his funny defineProperty
module.exports = !require('./_fails')(function () {
  return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
});
", "node_modules/core-js/modules/_descriptors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_descriptors.js");
    }
}
