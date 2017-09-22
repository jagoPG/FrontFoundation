<?php

/* node_modules/tar-pack/test/fixtures/to-pack/foo.txt */
class __TwigTemplate_7ec974c25934e7a23438dbefc0a1bea08eb45b00f617951784ee4ba4d8934fb8 extends Twig_Template
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
        $__internal_3f5d1d0f61866bcf31faef75ee461aba319b7f78f66fe43db46404d75259d150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5d1d0f61866bcf31faef75ee461aba319b7f78f66fe43db46404d75259d150->enter($__internal_3f5d1d0f61866bcf31faef75ee461aba319b7f78f66fe43db46404d75259d150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar-pack/test/fixtures/to-pack/foo.txt"));

        // line 1
        echo "bar";
        
        $__internal_3f5d1d0f61866bcf31faef75ee461aba319b7f78f66fe43db46404d75259d150->leave($__internal_3f5d1d0f61866bcf31faef75ee461aba319b7f78f66fe43db46404d75259d150_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar-pack/test/fixtures/to-pack/foo.txt";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("bar", "node_modules/tar-pack/test/fixtures/to-pack/foo.txt", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar-pack/test/fixtures/to-pack/foo.txt");
    }
}
