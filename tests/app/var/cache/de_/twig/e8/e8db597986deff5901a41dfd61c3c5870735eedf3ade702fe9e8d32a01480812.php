<?php

/* node_modules/parsleyjs/dist/i18n/it.extra.js */
class __TwigTemplate_dc1a53b076127e0b09cf018e54327c0776066645adeda64edb982699f7c29ed0 extends Twig_Template
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
        $__internal_007ae48587c35bd3d062cc4b3e1bc4180a2daba227ca2b9247c0b8e407bbb0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007ae48587c35bd3d062cc4b3e1bc4180a2daba227ca2b9247c0b8e407bbb0e3->enter($__internal_007ae48587c35bd3d062cc4b3e1bc4180a2daba227ca2b9247c0b8e407bbb0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/it.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('it', {
  dateiso: \"Inserire una data valida (AAAA-MM-GG).\"
});
";
        
        $__internal_007ae48587c35bd3d062cc4b3e1bc4180a2daba227ca2b9247c0b8e407bbb0e3->leave($__internal_007ae48587c35bd3d062cc4b3e1bc4180a2daba227ca2b9247c0b8e407bbb0e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/it.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('it', {
  dateiso: \"Inserire una data valida (AAAA-MM-GG).\"
});
", "node_modules/parsleyjs/dist/i18n/it.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/it.extra.js");
    }
}
