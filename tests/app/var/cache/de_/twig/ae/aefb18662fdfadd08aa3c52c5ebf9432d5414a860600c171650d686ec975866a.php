<?php

/* node_modules/parsleyjs/src/i18n/hr.extra.js */
class __TwigTemplate_c48cef24e4a0cce53454e5feb2f1dcfca2b8716cd87a7a2c65ce39ef1c79ae2c extends Twig_Template
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
        $__internal_6f0cce9e6d354fdd07fced489e4047f0e0317201e1343955df53702a64f7e819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0cce9e6d354fdd07fced489e4047f0e0317201e1343955df53702a64f7e819->enter($__internal_6f0cce9e6d354fdd07fced489e4047f0e0317201e1343955df53702a64f7e819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/hr.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('hr', {
  dateiso:  \"Ovo polje treba sadržavati ispravno unešen datum (GGGG-MM-DD).\",
  minwords: \"Unos je prekratak. Treba sadržavati %s ili više riječi.\",
  maxwords: \"Unos je predugačak. Treba sadržavati %s ili manje riječi.\",
  words:    \"Neispravna duljina unosa. Treba sadržavati između %s i %s riječi.\",
  gt:       \"Ova vrijednost treba biti veća.\",
  gte:      \"Ova vrijednost treba biti veća ili jednaka.\",
  lt:       \"Ova vrijednost treba biti manja.\",
  lte:      \"Ova vrijednost treba biti manja ili jednaka.\",
  notequalto: \"Ova vrijednost treba biti drugačija.\"
});
";
        
        $__internal_6f0cce9e6d354fdd07fced489e4047f0e0317201e1343955df53702a64f7e819->leave($__internal_6f0cce9e6d354fdd07fced489e4047f0e0317201e1343955df53702a64f7e819_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/hr.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('hr', {
  dateiso:  \"Ovo polje treba sadržavati ispravno unešen datum (GGGG-MM-DD).\",
  minwords: \"Unos je prekratak. Treba sadržavati %s ili više riječi.\",
  maxwords: \"Unos je predugačak. Treba sadržavati %s ili manje riječi.\",
  words:    \"Neispravna duljina unosa. Treba sadržavati između %s i %s riječi.\",
  gt:       \"Ova vrijednost treba biti veća.\",
  gte:      \"Ova vrijednost treba biti veća ili jednaka.\",
  lt:       \"Ova vrijednost treba biti manja.\",
  lte:      \"Ova vrijednost treba biti manja ili jednaka.\",
  notequalto: \"Ova vrijednost treba biti drugačija.\"
});
", "node_modules/parsleyjs/src/i18n/hr.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/hr.extra.js");
    }
}
