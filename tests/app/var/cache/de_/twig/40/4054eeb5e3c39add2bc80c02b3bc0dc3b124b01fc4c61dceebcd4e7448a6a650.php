<?php

/* node_modules/tar-pack/test/fixtures/to-pack/bar.txt */
class __TwigTemplate_05a5afe2142026bfd201a1e7e401c6b56376aeb6d5bc877c4f41c4bdf4758510 extends Twig_Template
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
        $__internal_0149e1aa659f83c00a328d43297c85da49c49b00a1e96383d5704792ea6813a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0149e1aa659f83c00a328d43297c85da49c49b00a1e96383d5704792ea6813a2->enter($__internal_0149e1aa659f83c00a328d43297c85da49c49b00a1e96383d5704792ea6813a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar-pack/test/fixtures/to-pack/bar.txt"));

        // line 1
        echo "baz";
        
        $__internal_0149e1aa659f83c00a328d43297c85da49c49b00a1e96383d5704792ea6813a2->leave($__internal_0149e1aa659f83c00a328d43297c85da49c49b00a1e96383d5704792ea6813a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar-pack/test/fixtures/to-pack/bar.txt";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("baz", "node_modules/tar-pack/test/fixtures/to-pack/bar.txt", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar-pack/test/fixtures/to-pack/bar.txt");
    }
}
