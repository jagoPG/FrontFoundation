<?php

/* node_modules/hoek/test/modules/test2.js */
class __TwigTemplate_9db176b560ad9dd9c570363b206dee00aa633004762eb0dbbba3f20154263fa1 extends Twig_Template
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
        $__internal_d8e8246746ecfaadc7ef4559d139f70d4ec8fc9c9e335b3b063e51a5270e1d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e8246746ecfaadc7ef4559d139f70d4ec8fc9c9e335b3b063e51a5270e1d91->enter($__internal_d8e8246746ecfaadc7ef4559d139f70d4ec8fc9c9e335b3b063e51a5270e1d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hoek/test/modules/test2.js"));

        // line 1
        echo "exports.y = 2;
";
        
        $__internal_d8e8246746ecfaadc7ef4559d139f70d4ec8fc9c9e335b3b063e51a5270e1d91->leave($__internal_d8e8246746ecfaadc7ef4559d139f70d4ec8fc9c9e335b3b063e51a5270e1d91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hoek/test/modules/test2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.y = 2;
", "node_modules/hoek/test/modules/test2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hoek/test/modules/test2.js");
    }
}
