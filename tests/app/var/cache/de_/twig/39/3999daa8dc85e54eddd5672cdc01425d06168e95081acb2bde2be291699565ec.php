<?php

/* node_modules/resolve/test/precedence/aaa/main.js */
class __TwigTemplate_5b8d739b0d71461f05b736148cf67c4eb6757408f7d2972f376d781bd3580786 extends Twig_Template
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
        $__internal_cd04f33328360bb1f1c4b944936fd1d299c74bdb00afa6a188269a1c988636f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd04f33328360bb1f1c4b944936fd1d299c74bdb00afa6a188269a1c988636f7->enter($__internal_cd04f33328360bb1f1c4b944936fd1d299c74bdb00afa6a188269a1c988636f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/precedence/aaa/main.js"));

        // line 1
        echo "console.log(require('./'));
";
        
        $__internal_cd04f33328360bb1f1c4b944936fd1d299c74bdb00afa6a188269a1c988636f7->leave($__internal_cd04f33328360bb1f1c4b944936fd1d299c74bdb00afa6a188269a1c988636f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/precedence/aaa/main.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("console.log(require('./'));
", "node_modules/resolve/test/precedence/aaa/main.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/precedence/aaa/main.js");
    }
}
