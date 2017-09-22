<?php

/* node_modules/parsleyjs/src/i18n/no.js */
class __TwigTemplate_8e0d846052f594f2023036e543341abb2614d84f2ce9589ae6040f2904570f3c extends Twig_Template
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
        $__internal_7ce743c6ab23ebae24b54ac171ead94ca8cdb7d2e7157fe2db723ebbdafcbb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce743c6ab23ebae24b54ac171ead94ca8cdb7d2e7157fe2db723ebbdafcbb41->enter($__internal_7ce743c6ab23ebae24b54ac171ead94ca8cdb7d2e7157fe2db723ebbdafcbb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/no.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('no', {
  defaultMessage: \"Verdien er ugyldig.\",
  type: {
    email:        \"Verdien må være en gyldig e-postadresse.\",
    url:          \"Verdien må være en gyldig url.\",
    number:       \"Verdien må være et gyldig tall.\",
    integer:      \"Verdien må være et gyldig heltall.\",
    digits:       \"Verdien må være et siffer.\",
    alphanum:     \"Verdien må være alfanumerisk\"
  },
  notblank:       \"Verdien kan ikke være blank.\",
  required:       \"Verdien er obligatorisk.\",
  pattern:        \"Verdien er ugyldig.\",
  min:            \"Verdien må være større eller lik %s.\",
  max:            \"Verdien må være mindre eller lik %s.\",
  range:          \"Verdien må være mellom %s and %s.\",
  minlength:      \"Verdien er for kort. Den må bestå av minst %s tegn.\",
  maxlength:      \"Verdien er for lang. Den kan bestå av maksimalt %s tegn.\",
  length:         \"Verdien har ugyldig lengde. Den må være mellom %s og %s tegn lang.\",
  mincheck:       \"Du må velge minst %s alternativer.\",
  maxcheck:       \"Du må velge %s eller færre alternativer.\",
  check:          \"Du må velge mellom %s og %s alternativer.\",
  equalto:        \"Verdien må være lik.\"
});

Parsley.setLocale('no');
";
        
        $__internal_7ce743c6ab23ebae24b54ac171ead94ca8cdb7d2e7157fe2db723ebbdafcbb41->leave($__internal_7ce743c6ab23ebae24b54ac171ead94ca8cdb7d2e7157fe2db723ebbdafcbb41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/no.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('no', {
  defaultMessage: \"Verdien er ugyldig.\",
  type: {
    email:        \"Verdien må være en gyldig e-postadresse.\",
    url:          \"Verdien må være en gyldig url.\",
    number:       \"Verdien må være et gyldig tall.\",
    integer:      \"Verdien må være et gyldig heltall.\",
    digits:       \"Verdien må være et siffer.\",
    alphanum:     \"Verdien må være alfanumerisk\"
  },
  notblank:       \"Verdien kan ikke være blank.\",
  required:       \"Verdien er obligatorisk.\",
  pattern:        \"Verdien er ugyldig.\",
  min:            \"Verdien må være større eller lik %s.\",
  max:            \"Verdien må være mindre eller lik %s.\",
  range:          \"Verdien må være mellom %s and %s.\",
  minlength:      \"Verdien er for kort. Den må bestå av minst %s tegn.\",
  maxlength:      \"Verdien er for lang. Den kan bestå av maksimalt %s tegn.\",
  length:         \"Verdien har ugyldig lengde. Den må være mellom %s og %s tegn lang.\",
  mincheck:       \"Du må velge minst %s alternativer.\",
  maxcheck:       \"Du må velge %s eller færre alternativer.\",
  check:          \"Du må velge mellom %s og %s alternativer.\",
  equalto:        \"Verdien må være lik.\"
});

Parsley.setLocale('no');
", "node_modules/parsleyjs/src/i18n/no.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/no.js");
    }
}
