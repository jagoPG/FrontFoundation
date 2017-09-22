<?php

/* node_modules/resolve/test/precedence/aaa/index.js */
class __TwigTemplate_9946193a8a95ba89f729acd905fcbdcd7b1ba773a83d4b5997903f2a28104baf extends Twig_Template
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
        $__internal_6be89ee7c0da7b445878359ee3f8d4a26fa3540c9711c10571df2adf3a9b2886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be89ee7c0da7b445878359ee3f8d4a26fa3540c9711c10571df2adf3a9b2886->enter($__internal_6be89ee7c0da7b445878359ee3f8d4a26fa3540c9711c10571df2adf3a9b2886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/precedence/aaa/index.js"));

        // line 1
        echo "module.exports = 'okok';
";
        
        $__internal_6be89ee7c0da7b445878359ee3f8d4a26fa3540c9711c10571df2adf3a9b2886->leave($__internal_6be89ee7c0da7b445878359ee3f8d4a26fa3540c9711c10571df2adf3a9b2886_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/precedence/aaa/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = 'okok';
", "node_modules/resolve/test/precedence/aaa/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/precedence/aaa/index.js");
    }
}
