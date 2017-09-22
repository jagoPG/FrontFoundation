<?php

/* node_modules/resolve/test/precedence/bbb.js */
class __TwigTemplate_0be9f52ce4a853a737c1866bc7bb44bcc74c7c029a1ea6c481f7f6d24302948c extends Twig_Template
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
        $__internal_a7b2b6733a73e7e9b5a99ae9bdf9d57f8054122817188dd146f9d92d8a0241b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b2b6733a73e7e9b5a99ae9bdf9d57f8054122817188dd146f9d92d8a0241b1->enter($__internal_a7b2b6733a73e7e9b5a99ae9bdf9d57f8054122817188dd146f9d92d8a0241b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/precedence/bbb.js"));

        // line 1
        echo "module.exports = '>_<';
";
        
        $__internal_a7b2b6733a73e7e9b5a99ae9bdf9d57f8054122817188dd146f9d92d8a0241b1->leave($__internal_a7b2b6733a73e7e9b5a99ae9bdf9d57f8054122817188dd146f9d92d8a0241b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/precedence/bbb.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = '>_<';
", "node_modules/resolve/test/precedence/bbb.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/precedence/bbb.js");
    }
}
