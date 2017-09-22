<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6a0d4d304ac528738abd972c3194e0a9e5210b416f2466075374b21cd56bbbd2 extends Twig_Template
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
        $__internal_c375a3832a72d9a49ffc288e9d49066f09be01d9a61cc59dcbb1df329676ec96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c375a3832a72d9a49ffc288e9d49066f09be01d9a61cc59dcbb1df329676ec96->enter($__internal_c375a3832a72d9a49ffc288e9d49066f09be01d9a61cc59dcbb1df329676ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c375a3832a72d9a49ffc288e9d49066f09be01d9a61cc59dcbb1df329676ec96->leave($__internal_c375a3832a72d9a49ffc288e9d49066f09be01d9a61cc59dcbb1df329676ec96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
