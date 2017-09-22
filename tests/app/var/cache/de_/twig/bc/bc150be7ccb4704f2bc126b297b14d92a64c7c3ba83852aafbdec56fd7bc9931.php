<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_665f59cd5227d22f580e3a4ca9161cfa4ced3ab2385ccd28a0afd073fc270b58 extends Twig_Template
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
        $__internal_7bf6637bfe8ee75966112710d5293e82bb40417872570de3480e31327a55a0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf6637bfe8ee75966112710d5293e82bb40417872570de3480e31327a55a0d8->enter($__internal_7bf6637bfe8ee75966112710d5293e82bb40417872570de3480e31327a55a0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["exception"] ?? null), "toarray", array()))));
        echo "
";
        
        $__internal_7bf6637bfe8ee75966112710d5293e82bb40417872570de3480e31327a55a0d8->leave($__internal_7bf6637bfe8ee75966112710d5293e82bb40417872570de3480e31327a55a0d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
