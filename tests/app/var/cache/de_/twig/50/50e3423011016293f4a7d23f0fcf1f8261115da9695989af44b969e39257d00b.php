<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ffbfdc29420d53db9a94db8859a2cf27976e55d0cf7d9688af80c639c02405cf extends Twig_Template
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
        $__internal_197544a23bf7c1d64121319bc7b3e7fa6d6b9c681767143f65fdee1d22f59939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197544a23bf7c1d64121319bc7b3e7fa6d6b9c681767143f65fdee1d22f59939->enter($__internal_197544a23bf7c1d64121319bc7b3e7fa6d6b9c681767143f65fdee1d22f59939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "js", null, true);
        echo "

*/
";
        
        $__internal_197544a23bf7c1d64121319bc7b3e7fa6d6b9c681767143f65fdee1d22f59939->leave($__internal_197544a23bf7c1d64121319bc7b3e7fa6d6b9c681767143f65fdee1d22f59939_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
