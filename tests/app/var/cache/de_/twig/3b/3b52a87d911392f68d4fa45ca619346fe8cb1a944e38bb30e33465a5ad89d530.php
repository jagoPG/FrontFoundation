<?php

/* node_modules/core-js/library/modules/_is-object.js */
class __TwigTemplate_3e0f390ce65f7c2cc7e0ae355769538b1ef9e903a81bd103d170d201b64c1837 extends Twig_Template
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
        $__internal_3fe5a8645083cf1c7d83e8def3f55b00389babc7a560821420ef4c45c7c0d2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe5a8645083cf1c7d83e8def3f55b00389babc7a560821420ef4c45c7c0d2c5->enter($__internal_3fe5a8645083cf1c7d83e8def3f55b00389babc7a560821420ef4c45c7c0d2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_is-object.js"));

        // line 1
        echo "module.exports = function (it) {
  return typeof it === 'object' ? it !== null : typeof it === 'function';
};
";
        
        $__internal_3fe5a8645083cf1c7d83e8def3f55b00389babc7a560821420ef4c45c7c0d2c5->leave($__internal_3fe5a8645083cf1c7d83e8def3f55b00389babc7a560821420ef4c45c7c0d2c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_is-object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (it) {
  return typeof it === 'object' ? it !== null : typeof it === 'function';
};
", "node_modules/core-js/library/modules/_is-object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_is-object.js");
    }
}
