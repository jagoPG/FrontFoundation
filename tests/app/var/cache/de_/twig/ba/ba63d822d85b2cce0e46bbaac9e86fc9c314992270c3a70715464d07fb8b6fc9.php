<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_caccace442c433db54414ad7338e0be75ea9c761cd88ddc0b70caf9f4be58548 extends Twig_Template
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
        $__internal_3655b989557e35ef6ad724ec5e2120934464679e33f9518f8d92abbe249cdcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3655b989557e35ef6ad724ec5e2120934464679e33f9518f8d92abbe249cdcdf->enter($__internal_3655b989557e35ef6ad724ec5e2120934464679e33f9518f8d92abbe249cdcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "css", null, true);
        echo "

*/
";
        
        $__internal_3655b989557e35ef6ad724ec5e2120934464679e33f9518f8d92abbe249cdcdf->leave($__internal_3655b989557e35ef6ad724ec5e2120934464679e33f9518f8d92abbe249cdcdf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
