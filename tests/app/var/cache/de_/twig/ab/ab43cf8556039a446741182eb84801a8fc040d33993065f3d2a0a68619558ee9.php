<?php

/* node_modules/parsleyjs/src/i18n/sv.extra.js */
class __TwigTemplate_c7db6c7d4bd7e46d4522c9de1977a9738e40d1057f901793d0be157a978ab45f extends Twig_Template
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
        $__internal_b3b1d0a401232ed1805a0172ab934a82b8d85d8a79c0f691039957ff4849713f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b1d0a401232ed1805a0172ab934a82b8d85d8a79c0f691039957ff4849713f->enter($__internal_b3b1d0a401232ed1805a0172ab934a82b8d85d8a79c0f691039957ff4849713f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/sv.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('sv', {
  dateiso: \"Ange ett giltigt datum (ÅÅÅÅ-MM-DD).\"
});
";
        
        $__internal_b3b1d0a401232ed1805a0172ab934a82b8d85d8a79c0f691039957ff4849713f->leave($__internal_b3b1d0a401232ed1805a0172ab934a82b8d85d8a79c0f691039957ff4849713f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/sv.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('sv', {
  dateiso: \"Ange ett giltigt datum (ÅÅÅÅ-MM-DD).\"
});
", "node_modules/parsleyjs/src/i18n/sv.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/sv.extra.js");
    }
}
