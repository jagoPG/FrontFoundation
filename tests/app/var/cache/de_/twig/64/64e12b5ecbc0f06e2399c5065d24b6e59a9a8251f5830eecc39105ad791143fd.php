<?php

/* node_modules/resolve/test/precedence/bbb/main.js */
class __TwigTemplate_3feea84c11ad8e0e350d5a201443802263063714af81369df132ded386497e2c extends Twig_Template
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
        $__internal_8555e0558193725439f49df55e4b7a2797bbbcffe3cdefe208d42e7204fff097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8555e0558193725439f49df55e4b7a2797bbbcffe3cdefe208d42e7204fff097->enter($__internal_8555e0558193725439f49df55e4b7a2797bbbcffe3cdefe208d42e7204fff097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/precedence/bbb/main.js"));

        // line 1
        echo "console.log(require('./')); // should throw
";
        
        $__internal_8555e0558193725439f49df55e4b7a2797bbbcffe3cdefe208d42e7204fff097->leave($__internal_8555e0558193725439f49df55e4b7a2797bbbcffe3cdefe208d42e7204fff097_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/precedence/bbb/main.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("console.log(require('./')); // should throw
", "node_modules/resolve/test/precedence/bbb/main.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/precedence/bbb/main.js");
    }
}
