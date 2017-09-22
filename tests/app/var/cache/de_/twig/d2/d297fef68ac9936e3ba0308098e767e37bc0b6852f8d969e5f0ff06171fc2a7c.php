<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_184bacbb2b99eb0b40b62823437dacc8b1ac3e9950f187d14df52810a1c1e63e extends Twig_Template
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
        $__internal_61143e0ded0651fbc3bc9e62e4b1c8db75c1f33ca628a0c78b9947dbf417c9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61143e0ded0651fbc3bc9e62e4b1c8db75c1f33ca628a0c78b9947dbf417c9a2->enter($__internal_61143e0ded0651fbc3bc9e62e4b1c8db75c1f33ca628a0c78b9947dbf417c9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
        
        $__internal_61143e0ded0651fbc3bc9e62e4b1c8db75c1f33ca628a0c78b9947dbf417c9a2->leave($__internal_61143e0ded0651fbc3bc9e62e4b1c8db75c1f33ca628a0c78b9947dbf417c9a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
