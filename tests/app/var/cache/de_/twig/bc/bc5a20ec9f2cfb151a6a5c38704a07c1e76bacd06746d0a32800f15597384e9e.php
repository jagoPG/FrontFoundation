<?php

/* node_modules/core-js/modules/_shared-key.js */
class __TwigTemplate_65f35f5fe987f93ae31494b8466f7fce473055e9da368a10a9782f8e51272a9c extends Twig_Template
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
        $__internal_eba3e540a3dfe7b325e1adb6346a07b75e79bcbdf2d99173de27d953871208d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba3e540a3dfe7b325e1adb6346a07b75e79bcbdf2d99173de27d953871208d1->enter($__internal_eba3e540a3dfe7b325e1adb6346a07b75e79bcbdf2d99173de27d953871208d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_shared-key.js"));

        // line 1
        echo "var shared = require('./_shared')('keys');
var uid = require('./_uid');
module.exports = function (key) {
  return shared[key] || (shared[key] = uid(key));
};
";
        
        $__internal_eba3e540a3dfe7b325e1adb6346a07b75e79bcbdf2d99173de27d953871208d1->leave($__internal_eba3e540a3dfe7b325e1adb6346a07b75e79bcbdf2d99173de27d953871208d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_shared-key.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var shared = require('./_shared')('keys');
var uid = require('./_uid');
module.exports = function (key) {
  return shared[key] || (shared[key] = uid(key));
};
", "node_modules/core-js/modules/_shared-key.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_shared-key.js");
    }
}
