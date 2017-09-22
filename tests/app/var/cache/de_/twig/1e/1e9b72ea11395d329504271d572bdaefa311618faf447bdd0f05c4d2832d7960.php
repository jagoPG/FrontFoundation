<?php

/* node_modules/es-abstract/helpers/sign.js */
class __TwigTemplate_cb883bb1fb5b05b1b070b632cc1e718a8d13847eb8d3ad82c7af21b87e9662f2 extends Twig_Template
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
        $__internal_5800c3bddeacfe6f88f8b70d9c5f6aa2c712c378f6b4b04f1710e000e752c33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5800c3bddeacfe6f88f8b70d9c5f6aa2c712c378f6b4b04f1710e000e752c33c->enter($__internal_5800c3bddeacfe6f88f8b70d9c5f6aa2c712c378f6b4b04f1710e000e752c33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/helpers/sign.js"));

        // line 1
        echo "module.exports = function sign(number) {
\treturn number >= 0 ? 1 : -1;
};
";
        
        $__internal_5800c3bddeacfe6f88f8b70d9c5f6aa2c712c378f6b4b04f1710e000e752c33c->leave($__internal_5800c3bddeacfe6f88f8b70d9c5f6aa2c712c378f6b4b04f1710e000e752c33c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/helpers/sign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function sign(number) {
\treturn number >= 0 ? 1 : -1;
};
", "node_modules/es-abstract/helpers/sign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/helpers/sign.js");
    }
}
