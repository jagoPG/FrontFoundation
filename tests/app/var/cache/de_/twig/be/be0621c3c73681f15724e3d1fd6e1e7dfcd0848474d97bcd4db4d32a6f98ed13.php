<?php

/* node_modules/parsleyjs/dist/i18n/da.js */
class __TwigTemplate_933663b458388e9b568debf9e01c2b5762cbe2950c1a176f8313e72bc52cd283 extends Twig_Template
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
        $__internal_3cdf5d80b09f8f91f03365e05595c0817d2794094d87f45bf0423e3bfad0639f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdf5d80b09f8f91f03365e05595c0817d2794094d87f45bf0423e3bfad0639f->enter($__internal_3cdf5d80b09f8f91f03365e05595c0817d2794094d87f45bf0423e3bfad0639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/da.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('da', {
  defaultMessage: \"Indtast venligst en korrekt værdi.\",
  type: {
    email:        \"Indtast venligst en korrekt emailadresse.\",
    url:          \"Indtast venligst en korrekt internetadresse.\",
    number:       \"Indtast venligst et tal.\",
    integer:      \"Indtast venligst et heltal.\",
    digits:       \"Dette felt må kun bestå af tal.\",
    alphanum:     \"Dette felt skal indeholde både tal og bogstaver.\"
  },
  notblank:       \"Dette felt må ikke være tomt.\",
  required:       \"Dette felt er påkrævet.\",
  pattern:        \"Ugyldig indtastning.\",
  min:            \"Dette felt skal indeholde et tal som er større end eller lig med %s.\",
  max:            \"Dette felt skal indeholde et tal som er mindre end eller lig med %s.\",
  range:          \"Dette felt skal indeholde et tal mellem %s og %s.\",
  minlength:      \"Indtast venligst mindst %s tegn.\",
  maxlength:      \"Dette felt kan højst indeholde %s tegn.\",
  length:         \"Længden af denne værdi er ikke korrekt. Værdien skal være mellem %s og %s tegn lang.\",
  mincheck:       \"Vælg mindst %s muligheder.\",
  maxcheck:       \"Vælg op til %s muligheder.\",
  check:          \"Vælg mellem %s og %s muligheder.\",
  equalto:        \"De to felter er ikke ens.\"
});

Parsley.setLocale('da');
";
        
        $__internal_3cdf5d80b09f8f91f03365e05595c0817d2794094d87f45bf0423e3bfad0639f->leave($__internal_3cdf5d80b09f8f91f03365e05595c0817d2794094d87f45bf0423e3bfad0639f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/da.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('da', {
  defaultMessage: \"Indtast venligst en korrekt værdi.\",
  type: {
    email:        \"Indtast venligst en korrekt emailadresse.\",
    url:          \"Indtast venligst en korrekt internetadresse.\",
    number:       \"Indtast venligst et tal.\",
    integer:      \"Indtast venligst et heltal.\",
    digits:       \"Dette felt må kun bestå af tal.\",
    alphanum:     \"Dette felt skal indeholde både tal og bogstaver.\"
  },
  notblank:       \"Dette felt må ikke være tomt.\",
  required:       \"Dette felt er påkrævet.\",
  pattern:        \"Ugyldig indtastning.\",
  min:            \"Dette felt skal indeholde et tal som er større end eller lig med %s.\",
  max:            \"Dette felt skal indeholde et tal som er mindre end eller lig med %s.\",
  range:          \"Dette felt skal indeholde et tal mellem %s og %s.\",
  minlength:      \"Indtast venligst mindst %s tegn.\",
  maxlength:      \"Dette felt kan højst indeholde %s tegn.\",
  length:         \"Længden af denne værdi er ikke korrekt. Værdien skal være mellem %s og %s tegn lang.\",
  mincheck:       \"Vælg mindst %s muligheder.\",
  maxcheck:       \"Vælg op til %s muligheder.\",
  check:          \"Vælg mellem %s og %s muligheder.\",
  equalto:        \"De to felter er ikke ens.\"
});

Parsley.setLocale('da');
", "node_modules/parsleyjs/dist/i18n/da.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/da.js");
    }
}
