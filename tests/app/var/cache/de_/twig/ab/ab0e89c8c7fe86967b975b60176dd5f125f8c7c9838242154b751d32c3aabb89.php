<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_dbe526d3bb186db3f65f8b7b1367150543894a0b189602f5c10f3bc0109d8b0e extends Twig_Template
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
        $__internal_303a8862c39eb319efb77bd5fd8ed1fc53ed9676d2f95543068e025578306bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303a8862c39eb319efb77bd5fd8ed1fc53ed9676d2f95543068e025578306bb2->enter($__internal_303a8862c39eb319efb77bd5fd8ed1fc53ed9676d2f95543068e025578306bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_303a8862c39eb319efb77bd5fd8ed1fc53ed9676d2f95543068e025578306bb2->leave($__internal_303a8862c39eb319efb77bd5fd8ed1fc53ed9676d2f95543068e025578306bb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
