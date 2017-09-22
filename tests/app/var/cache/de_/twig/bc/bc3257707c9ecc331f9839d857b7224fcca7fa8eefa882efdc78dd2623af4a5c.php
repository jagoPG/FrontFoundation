<?php

/* node_modules/webpack/buildin/amd-define.js */
class __TwigTemplate_22d1c5bf21e519060645f74129d2d9c64eca04302392afc955b3cb6f5c97cf08 extends Twig_Template
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
        $__internal_cc45bddbacdc0b1341e14adf4e8e74048b925602264a69be2969cd88f9915e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc45bddbacdc0b1341e14adf4e8e74048b925602264a69be2969cd88f9915e9c->enter($__internal_cc45bddbacdc0b1341e14adf4e8e74048b925602264a69be2969cd88f9915e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/buildin/amd-define.js"));

        // line 1
        echo "module.exports = function() {
\tthrow new Error(\"define cannot be used indirect\");
};
";
        
        $__internal_cc45bddbacdc0b1341e14adf4e8e74048b925602264a69be2969cd88f9915e9c->leave($__internal_cc45bddbacdc0b1341e14adf4e8e74048b925602264a69be2969cd88f9915e9c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/buildin/amd-define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function() {
\tthrow new Error(\"define cannot be used indirect\");
};
", "node_modules/webpack/buildin/amd-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/buildin/amd-define.js");
    }
}
