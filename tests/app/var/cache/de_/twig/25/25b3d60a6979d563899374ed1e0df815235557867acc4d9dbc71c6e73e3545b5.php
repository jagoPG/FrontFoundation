<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b3f8fd893613f4fe86795a9621e6a321854d50086906a138730d61e544d3b651 extends Twig_Template
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
        $__internal_871081a93ff03be87a9d30511fb0ed713443d1f7f394ff9a90073d8bef1e1c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871081a93ff03be87a9d30511fb0ed713443d1f7f394ff9a90073d8bef1e1c3c->enter($__internal_871081a93ff03be87a9d30511fb0ed713443d1f7f394ff9a90073d8bef1e1c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? null);
        echo " ";
        echo ($context["status_text"] ?? null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_871081a93ff03be87a9d30511fb0ed713443d1f7f394ff9a90073d8bef1e1c3c->leave($__internal_871081a93ff03be87a9d30511fb0ed713443d1f7f394ff9a90073d8bef1e1c3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
