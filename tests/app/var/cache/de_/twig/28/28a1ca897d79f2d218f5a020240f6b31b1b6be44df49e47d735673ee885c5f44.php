<?php

/* node_modules/parsleyjs/src/i18n/da.js */
class __TwigTemplate_bc53d81fae3ac6d359d622340fed1070987eddd63f054102e9b488b4816c7b63 extends Twig_Template
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
        $__internal_3f69ce1e75456f46aac458a6cfc1cb7aedb114282607a718f4dd830b522533c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f69ce1e75456f46aac458a6cfc1cb7aedb114282607a718f4dd830b522533c3->enter($__internal_3f69ce1e75456f46aac458a6cfc1cb7aedb114282607a718f4dd830b522533c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/da.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_3f69ce1e75456f46aac458a6cfc1cb7aedb114282607a718f4dd830b522533c3->leave($__internal_3f69ce1e75456f46aac458a6cfc1cb7aedb114282607a718f4dd830b522533c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/da.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

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
", "node_modules/parsleyjs/src/i18n/da.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/da.js");
    }
}
