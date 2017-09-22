<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3e5080b2df24257fca96fc29ce38814fe679c20b964b3ad5f2e781a4e0999e7a extends Twig_Template
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
        $__internal_45bbaafc976e9250f9b21896cf3d2c8ddcb79304f800c2b0f82aed5fab82638c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bbaafc976e9250f9b21896cf3d2c8ddcb79304f800c2b0f82aed5fab82638c->enter($__internal_45bbaafc976e9250f9b21896cf3d2c8ddcb79304f800c2b0f82aed5fab82638c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_45bbaafc976e9250f9b21896cf3d2c8ddcb79304f800c2b0f82aed5fab82638c->leave($__internal_45bbaafc976e9250f9b21896cf3d2c8ddcb79304f800c2b0f82aed5fab82638c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
