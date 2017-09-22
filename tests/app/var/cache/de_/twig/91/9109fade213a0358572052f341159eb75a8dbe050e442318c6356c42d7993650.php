<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5f146c5ecb3180c3be755a79e7499a154e53beb06765d8d406d7c7096da3bc0b extends Twig_Template
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
        $__internal_c904f3be4dae74dec3bbc17c986c9061fc76caf53a4031c935fb00fd949066d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c904f3be4dae74dec3bbc17c986c9061fc76caf53a4031c935fb00fd949066d4->enter($__internal_c904f3be4dae74dec3bbc17c986c9061fc76caf53a4031c935fb00fd949066d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_c904f3be4dae74dec3bbc17c986c9061fc76caf53a4031c935fb00fd949066d4->leave($__internal_c904f3be4dae74dec3bbc17c986c9061fc76caf53a4031c935fb00fd949066d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
