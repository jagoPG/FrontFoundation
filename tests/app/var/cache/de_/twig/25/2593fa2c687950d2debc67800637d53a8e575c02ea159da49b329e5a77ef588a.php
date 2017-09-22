<?php

/* node_modules/core-js/modules/_property-desc.js */
class __TwigTemplate_9e6e7e3e867c0882060e0170953339ca6b6c088ac3355f9d421ed23c22c777dc extends Twig_Template
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
        $__internal_7869d3bd5d59bceb263b4825304c3bad04976deb2b51450ed8e63cbdc9c3cb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7869d3bd5d59bceb263b4825304c3bad04976deb2b51450ed8e63cbdc9c3cb64->enter($__internal_7869d3bd5d59bceb263b4825304c3bad04976deb2b51450ed8e63cbdc9c3cb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_property-desc.js"));

        // line 1
        echo "module.exports = function (bitmap, value) {
  return {
    enumerable: !(bitmap & 1),
    configurable: !(bitmap & 2),
    writable: !(bitmap & 4),
    value: value
  };
};
";
        
        $__internal_7869d3bd5d59bceb263b4825304c3bad04976deb2b51450ed8e63cbdc9c3cb64->leave($__internal_7869d3bd5d59bceb263b4825304c3bad04976deb2b51450ed8e63cbdc9c3cb64_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_property-desc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (bitmap, value) {
  return {
    enumerable: !(bitmap & 1),
    configurable: !(bitmap & 2),
    writable: !(bitmap & 4),
    value: value
  };
};
", "node_modules/core-js/modules/_property-desc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_property-desc.js");
    }
}
