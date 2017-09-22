<?php

/* node_modules/parsleyjs/src/i18n/sr.extra.js */
class __TwigTemplate_d5fb37e84d035efc466eb335bbbdebb5e3e09b6a29b3313cb43da06336c25eed extends Twig_Template
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
        $__internal_f2d11ceadcce40dc2e27084d92120668d76c67fd289cea671f8883e46989e35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d11ceadcce40dc2e27084d92120668d76c67fd289cea671f8883e46989e35f->enter($__internal_f2d11ceadcce40dc2e27084d92120668d76c67fd289cea671f8883e46989e35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/sr.extra.js"));

        // line 1
        echo "// Extra validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_f2d11ceadcce40dc2e27084d92120668d76c67fd289cea671f8883e46989e35f->leave($__internal_f2d11ceadcce40dc2e27084d92120668d76c67fd289cea671f8883e46989e35f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/sr.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Extra validation errors messages for Parsley
import Parsley from '../parsley';

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
", "node_modules/parsleyjs/src/i18n/sr.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/sr.extra.js");
    }
}
