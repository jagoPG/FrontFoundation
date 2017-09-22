<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c71dbed030abf7752ac72e75942dd97ac0083b7c64185ee8f7971bfe5e1ed0cc extends Twig_Template
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
        $__internal_a4acbbd0dcdc4dc7a8c39fac996f417e54a461ae8415b67867abe20df3c29726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4acbbd0dcdc4dc7a8c39fac996f417e54a461ae8415b67867abe20df3c29726->enter($__internal_a4acbbd0dcdc4dc7a8c39fac996f417e54a461ae8415b67867abe20df3c29726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
        
        $__internal_a4acbbd0dcdc4dc7a8c39fac996f417e54a461ae8415b67867abe20df3c29726->leave($__internal_a4acbbd0dcdc4dc7a8c39fac996f417e54a461ae8415b67867abe20df3c29726_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
