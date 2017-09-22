<?php

/* node_modules/parsleyjs/dist/i18n/sr.extra.js */
class __TwigTemplate_d420fc2331ee05755ab050a32af213f035e978be4948c03b8d8689dee69497ed extends Twig_Template
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
        $__internal_4d5f6d26fc26ca66955ef28b9e39723a9d90e342e7235067d6a235c30b99ed0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5f6d26fc26ca66955ef28b9e39723a9d90e342e7235067d6a235c30b99ed0a->enter($__internal_4d5f6d26fc26ca66955ef28b9e39723a9d90e342e7235067d6a235c30b99ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/sr.extra.js"));

        // line 1
        echo "// Extra validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sr', {
  dateiso:  \"Unesite validan datum u formatu YYYY-MM-DD.\",
  minwords: \"Potrebno je da unesete %s ili više reči.\",
  maxwords: \"Moguće je uneti maksimalno %s reči.\",
  words:    \"Potrebno je da unesete između %s i %s reči.\",
  gt:       \"Ova vrednost mora da bude veća.\",
  gte:      \"Ova vrednost mora da bude veća ili jednaka.\",
  lt:       \"Ova vrednost mora da bude manja.\",
  lte:      \"Ova vrednost mora da bude manja ili jednaka.\",
  notequalto: \"Sadržaj ovog polja mora biti različit.\"
});
";
        
        $__internal_4d5f6d26fc26ca66955ef28b9e39723a9d90e342e7235067d6a235c30b99ed0a->leave($__internal_4d5f6d26fc26ca66955ef28b9e39723a9d90e342e7235067d6a235c30b99ed0a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/sr.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Extra validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sr', {
  dateiso:  \"Unesite validan datum u formatu YYYY-MM-DD.\",
  minwords: \"Potrebno je da unesete %s ili više reči.\",
  maxwords: \"Moguće je uneti maksimalno %s reči.\",
  words:    \"Potrebno je da unesete između %s i %s reči.\",
  gt:       \"Ova vrednost mora da bude veća.\",
  gte:      \"Ova vrednost mora da bude veća ili jednaka.\",
  lt:       \"Ova vrednost mora da bude manja.\",
  lte:      \"Ova vrednost mora da bude manja ili jednaka.\",
  notequalto: \"Sadržaj ovog polja mora biti različit.\"
});
", "node_modules/parsleyjs/dist/i18n/sr.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/sr.extra.js");
    }
}
