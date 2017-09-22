<?php

/* node_modules/es-abstract/helpers/mod.js */
class __TwigTemplate_63124f883cda1f36f056e5df51740e66591c4959ff54373261e169cb84b94d17 extends Twig_Template
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
        $__internal_30aa0e5aa4d53d39d37a7ed782ea44163480b870949139359b14538fab3181e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30aa0e5aa4d53d39d37a7ed782ea44163480b870949139359b14538fab3181e5->enter($__internal_30aa0e5aa4d53d39d37a7ed782ea44163480b870949139359b14538fab3181e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/helpers/mod.js"));

        // line 1
        echo "module.exports = function mod(number, modulo) {
\tvar remain = number % modulo;
\treturn Math.floor(remain >= 0 ? remain : remain + modulo);
};
";
        
        $__internal_30aa0e5aa4d53d39d37a7ed782ea44163480b870949139359b14538fab3181e5->leave($__internal_30aa0e5aa4d53d39d37a7ed782ea44163480b870949139359b14538fab3181e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/helpers/mod.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function mod(number, modulo) {
\tvar remain = number % modulo;
\treturn Math.floor(remain >= 0 ? remain : remain + modulo);
};
", "node_modules/es-abstract/helpers/mod.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/helpers/mod.js");
    }
}
