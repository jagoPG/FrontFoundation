<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2f379e41ee19c8eb98a51bfc7f3be2490e3252605c27679657c808f33c41029a extends Twig_Template
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
        $__internal_f7bd69a5035751228b1f646689c1c33764b24e92a5e32f717bb114866f3319df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bd69a5035751228b1f646689c1c33764b24e92a5e32f717bb114866f3319df->enter($__internal_f7bd69a5035751228b1f646689c1c33764b24e92a5e32f717bb114866f3319df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null))));
        echo "
";
        
        $__internal_f7bd69a5035751228b1f646689c1c33764b24e92a5e32f717bb114866f3319df->leave($__internal_f7bd69a5035751228b1f646689c1c33764b24e92a5e32f717bb114866f3319df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
