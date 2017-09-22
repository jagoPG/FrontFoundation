<?php

/* node_modules/parsleyjs/src/i18n/hr.js */
class __TwigTemplate_5bf0bff58252b989af42d075c4090427c8a02a4a32504da0ef5f804417a2e062 extends Twig_Template
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
        $__internal_82bb1c0cc5f869eec5ac3b835928a8c5f714f4578bfe0927280155c03b2e35a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bb1c0cc5f869eec5ac3b835928a8c5f714f4578bfe0927280155c03b2e35a2->enter($__internal_82bb1c0cc5f869eec5ac3b835928a8c5f714f4578bfe0927280155c03b2e35a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/hr.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('hr', {
  defaultMessage: \"Neispravan unos.\",
  type: {
    email: \"Ovo polje treba sadržavati ispravnu email adresu.\",
    url: \"Ovo polje treba sadržavati ispravni url.\",
    number: \"Ovo polje treba sadržavati ispravno upisan broj.\",
    integer: \"Ovo polje treba sadržavati ispravno upisan cijeli broj.\",
    digits: \"Ovo polje treba sadržavati znamenke.\",
    alphanum: \"Ovo polje treba sadržavati brojke ili slova.\"
  },
  notblank: \"Ovo polje ne smije biti prazno.\",
  required: \"Ovo polje je obavezno.\",
  pattern: \"Neispravan unos.\",
  min: \"Vrijednost treba biti jednaka ili veća od %s.\",
  max: \"Vrijednost treba biti jednaka ili manja od %s.\",
  range: \"Vrijednost treba biti između %s i %s.\",
  minlength: \"Unos je prekratak. Treba sadržavati %s ili više znakova.\",
  maxlength: \"Unos je predugačak. Treba sadržavati %s ili manje znakova.\",
  length: \"Neispravna duljina unosa. Treba sadržavati između %s i %s znakova.\",
  mincheck: \"Treba odabrati najmanje %s izbora.\",
  maxcheck: \"Treba odabrati %s ili manje izbora.\",
  check: \"Treba odabrati između %s i %s izbora.\",
  equalto: \"Ova vrijednost treba biti ista.\"
});

Parsley.setLocale('hr');
";
        
        $__internal_82bb1c0cc5f869eec5ac3b835928a8c5f714f4578bfe0927280155c03b2e35a2->leave($__internal_82bb1c0cc5f869eec5ac3b835928a8c5f714f4578bfe0927280155c03b2e35a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/hr.js";
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
  defaultMessage: \"Neispravan unos.\",
  type: {
    email: \"Ovo polje treba sadržavati ispravnu email adresu.\",
    url: \"Ovo polje treba sadržavati ispravni url.\",
    number: \"Ovo polje treba sadržavati ispravno upisan broj.\",
    integer: \"Ovo polje treba sadržavati ispravno upisan cijeli broj.\",
    digits: \"Ovo polje treba sadržavati znamenke.\",
    alphanum: \"Ovo polje treba sadržavati brojke ili slova.\"
  },
  notblank: \"Ovo polje ne smije biti prazno.\",
  required: \"Ovo polje je obavezno.\",
  pattern: \"Neispravan unos.\",
  min: \"Vrijednost treba biti jednaka ili veća od %s.\",
  max: \"Vrijednost treba biti jednaka ili manja od %s.\",
  range: \"Vrijednost treba biti između %s i %s.\",
  minlength: \"Unos je prekratak. Treba sadržavati %s ili više znakova.\",
  maxlength: \"Unos je predugačak. Treba sadržavati %s ili manje znakova.\",
  length: \"Neispravna duljina unosa. Treba sadržavati između %s i %s znakova.\",
  mincheck: \"Treba odabrati najmanje %s izbora.\",
  maxcheck: \"Treba odabrati %s ili manje izbora.\",
  check: \"Treba odabrati između %s i %s izbora.\",
  equalto: \"Ova vrijednost treba biti ista.\"
});

Parsley.setLocale('hr');
", "node_modules/parsleyjs/src/i18n/hr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/hr.js");
    }
}
