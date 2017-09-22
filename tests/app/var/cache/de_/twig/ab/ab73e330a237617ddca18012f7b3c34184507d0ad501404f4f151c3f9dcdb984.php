<?php

/* node_modules/parsleyjs/src/i18n/lv.extra.js */
class __TwigTemplate_66f00f374957d85b5d0fdab20f2a46f0fdc3d7c143724a60550546a453d8f8dc extends Twig_Template
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
        $__internal_31e09f50b79c261c67a52412d41961e25761d92b0aa47087f54b5793018ff8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e09f50b79c261c67a52412d41961e25761d92b0aa47087f54b5793018ff8c1->enter($__internal_31e09f50b79c261c67a52412d41961e25761d92b0aa47087f54b5793018ff8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/lv.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('lv', {
  dateiso:  \"Šai vērtībai jābūt korekti noformētam datumam (YYYY-MM-DD).\",
  minwords: \"Šī vērtība ir par īsu. Tai jābūt vismaz %s vārdus garai.\",
  maxwords: \"Šī vērtība ir par garu. Tai jābūt %s vārdus garai vai īsākai.\",
  words:    \"Šīs vērtības garums ir nederīgs. Tai jābūt no %s līdz %s vārdus garai.\",
  gt:       \"Šai vērtībai jābūt lielākai.\",
  gte:      \"Šai vērtībai jābūt lielākai vai vienādai.\",
  lt:       \"Šai vērtībai jābūt mazākai.\",
  lte:      \"Šai vērtībai jābūt mazākai vai vienādai.\",
  notequalto: \"Šai vērtībai jābūt atšķirīgai.\"
});
";
        
        $__internal_31e09f50b79c261c67a52412d41961e25761d92b0aa47087f54b5793018ff8c1->leave($__internal_31e09f50b79c261c67a52412d41961e25761d92b0aa47087f54b5793018ff8c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/lv.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('lv', {
  dateiso:  \"Šai vērtībai jābūt korekti noformētam datumam (YYYY-MM-DD).\",
  minwords: \"Šī vērtība ir par īsu. Tai jābūt vismaz %s vārdus garai.\",
  maxwords: \"Šī vērtība ir par garu. Tai jābūt %s vārdus garai vai īsākai.\",
  words:    \"Šīs vērtības garums ir nederīgs. Tai jābūt no %s līdz %s vārdus garai.\",
  gt:       \"Šai vērtībai jābūt lielākai.\",
  gte:      \"Šai vērtībai jābūt lielākai vai vienādai.\",
  lt:       \"Šai vērtībai jābūt mazākai.\",
  lte:      \"Šai vērtībai jābūt mazākai vai vienādai.\",
  notequalto: \"Šai vērtībai jābūt atšķirīgai.\"
});
", "node_modules/parsleyjs/src/i18n/lv.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/lv.extra.js");
    }
}
