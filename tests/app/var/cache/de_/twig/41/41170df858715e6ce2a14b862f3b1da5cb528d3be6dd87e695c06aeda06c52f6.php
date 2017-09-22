<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9ff93d68aef59b283eee1eab001971efa46e3931fbd617ea1af53f59ab20e637 extends Twig_Template
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
        $__internal_23926fc3ea05a21e1e2909e7e2bc2177b5288943ee3af7e194549bc07990d469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23926fc3ea05a21e1e2909e7e2bc2177b5288943ee3af7e194549bc07990d469->enter($__internal_23926fc3ea05a21e1e2909e7e2bc2177b5288943ee3af7e194549bc07990d469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "\" />
";
        
        $__internal_23926fc3ea05a21e1e2909e7e2bc2177b5288943ee3af7e194549bc07990d469->leave($__internal_23926fc3ea05a21e1e2909e7e2bc2177b5288943ee3af7e194549bc07990d469_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
