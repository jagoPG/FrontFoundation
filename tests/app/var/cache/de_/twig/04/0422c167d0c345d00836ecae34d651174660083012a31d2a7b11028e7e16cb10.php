<?php

/* node_modules/parsleyjs/src/i18n/sl.js */
class __TwigTemplate_afbd188024241e69548a26283dab939c3a4b56b8655d8c2ff1c9b3c41cc0be64 extends Twig_Template
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
        $__internal_7256f54e103f18becdf0c36e3cb18a59280b314c0f73d45da91b4be8cf29a0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256f54e103f18becdf0c36e3cb18a59280b314c0f73d45da91b4be8cf29a0c5->enter($__internal_7256f54e103f18becdf0c36e3cb18a59280b314c0f73d45da91b4be8cf29a0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/sl.js"));

        // line 1
        echo "// This is included with the Parsley library itself,
// thus there is no use in adding it to your project.
import Parsley from '../parsley/main';

Parsley.addMessages('sl', {
  defaultMessage: \"Podatek ne ustreza vpisnim kriterijem.\",
  type: {
    email:        \"Vpišite pravilen email.\",
    url:          \"Vpišite pravilen url naslov.\",
    number:       \"Vpišite številko.\",
    integer:      \"Vpišite celo število brez decimalnih mest.\",
    digits:       \"Vpišite samo cifre.\",
    alphanum:     \"Vpišite samo alfanumerične znake (cifre in črke).\"
  },
  notblank:       \"To polje ne sme biti prazno.\",
  required:       \"To polje je obvezno.\",
  pattern:        \"Podatek ne ustreza vpisnim kriterijem.\",
  min:            \"Vrednost mora biti višja ali enaka kot %s.\",
  max:            \"Vrednost mora biti nižja ali enaka kot  %s.\",
  range:          \"Vrednost mora biti med %s in %s.\",
  minlength:      \"Vpis je prekratek. Mora imeti najmanj %s znakov.\",
  maxlength:      \"Vpis je predolg. Lahko ima največ %s znakov.\",
  length:         \"Število vpisanih znakov je napačno. Število znakov je lahko samo med %s in %s.\",
  mincheck:       \"Izbrati morate vsaj %s možnosti.\",
  maxcheck:       \"Izberete lahko največ %s možnosti.\",
  check:          \"Število izbranih možnosti je lahko samo med %s in %s.\",
  equalto:        \"Vnos mora biti enak.\"
});

Parsley.setLocale('sl');
";
        
        $__internal_7256f54e103f18becdf0c36e3cb18a59280b314c0f73d45da91b4be8cf29a0c5->leave($__internal_7256f54e103f18becdf0c36e3cb18a59280b314c0f73d45da91b4be8cf29a0c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/sl.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// This is included with the Parsley library itself,
// thus there is no use in adding it to your project.
import Parsley from '../parsley/main';

Parsley.addMessages('sl', {
  defaultMessage: \"Podatek ne ustreza vpisnim kriterijem.\",
  type: {
    email:        \"Vpišite pravilen email.\",
    url:          \"Vpišite pravilen url naslov.\",
    number:       \"Vpišite številko.\",
    integer:      \"Vpišite celo število brez decimalnih mest.\",
    digits:       \"Vpišite samo cifre.\",
    alphanum:     \"Vpišite samo alfanumerične znake (cifre in črke).\"
  },
  notblank:       \"To polje ne sme biti prazno.\",
  required:       \"To polje je obvezno.\",
  pattern:        \"Podatek ne ustreza vpisnim kriterijem.\",
  min:            \"Vrednost mora biti višja ali enaka kot %s.\",
  max:            \"Vrednost mora biti nižja ali enaka kot  %s.\",
  range:          \"Vrednost mora biti med %s in %s.\",
  minlength:      \"Vpis je prekratek. Mora imeti najmanj %s znakov.\",
  maxlength:      \"Vpis je predolg. Lahko ima največ %s znakov.\",
  length:         \"Število vpisanih znakov je napačno. Število znakov je lahko samo med %s in %s.\",
  mincheck:       \"Izbrati morate vsaj %s možnosti.\",
  maxcheck:       \"Izberete lahko največ %s možnosti.\",
  check:          \"Število izbranih možnosti je lahko samo med %s in %s.\",
  equalto:        \"Vnos mora biti enak.\"
});

Parsley.setLocale('sl');
", "node_modules/parsleyjs/src/i18n/sl.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/sl.js");
    }
}
