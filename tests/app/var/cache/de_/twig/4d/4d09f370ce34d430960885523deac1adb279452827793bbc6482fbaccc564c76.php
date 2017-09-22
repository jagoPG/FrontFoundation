<?php

/* node_modules/parsleyjs/dist/i18n/nl.js */
class __TwigTemplate_f032f75bd4bf283b30a159991ad8678e9203a830a2f86999f818ee32d12f58ab extends Twig_Template
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
        $__internal_2f06b9b5ea2ba51808901f7dfc1a8ad3b2e269f64777d3dd180e3f0e91810397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f06b9b5ea2ba51808901f7dfc1a8ad3b2e269f64777d3dd180e3f0e91810397->enter($__internal_2f06b9b5ea2ba51808901f7dfc1a8ad3b2e269f64777d3dd180e3f0e91810397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/nl.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('nl', {
  defaultMessage: \"Deze waarde lijkt onjuist.\",
  type: {
    email:        \"Dit lijkt geen geldig e-mail adres te zijn.\",
    url:          \"Dit lijkt geen geldige URL te zijn.\",
    number:       \"Deze waarde moet een nummer zijn.\",
    integer:      \"Deze waarde moet een nummer zijn.\",
    digits:       \"Deze waarde moet numeriek zijn.\",
    alphanum:     \"Deze waarde moet alfanumeriek zijn.\"
  },
  notblank:       \"Deze waarde mag niet leeg zijn.\",
  required:       \"Dit veld is verplicht.\",
  pattern:        \"Deze waarde lijkt onjuist te zijn.\",
  min:            \"Deze waarde mag niet lager zijn dan %s.\",
  max:            \"Deze waarde mag niet groter zijn dan %s.\",
  range:          \"Deze waarde moet tussen %s en %s liggen.\",
  minlength:      \"Deze tekst is te kort. Deze moet uit minimaal %s karakters bestaan.\",
  maxlength:      \"Deze waarde is te lang. Deze mag maximaal %s karakters lang zijn.\",
  length:         \"Deze waarde moet tussen %s en %s karakters lang zijn.\",
  equalto:        \"Deze waardes moeten identiek zijn.\"
});

Parsley.setLocale('nl');
";
        
        $__internal_2f06b9b5ea2ba51808901f7dfc1a8ad3b2e269f64777d3dd180e3f0e91810397->leave($__internal_2f06b9b5ea2ba51808901f7dfc1a8ad3b2e269f64777d3dd180e3f0e91810397_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/nl.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('nl', {
  defaultMessage: \"Deze waarde lijkt onjuist.\",
  type: {
    email:        \"Dit lijkt geen geldig e-mail adres te zijn.\",
    url:          \"Dit lijkt geen geldige URL te zijn.\",
    number:       \"Deze waarde moet een nummer zijn.\",
    integer:      \"Deze waarde moet een nummer zijn.\",
    digits:       \"Deze waarde moet numeriek zijn.\",
    alphanum:     \"Deze waarde moet alfanumeriek zijn.\"
  },
  notblank:       \"Deze waarde mag niet leeg zijn.\",
  required:       \"Dit veld is verplicht.\",
  pattern:        \"Deze waarde lijkt onjuist te zijn.\",
  min:            \"Deze waarde mag niet lager zijn dan %s.\",
  max:            \"Deze waarde mag niet groter zijn dan %s.\",
  range:          \"Deze waarde moet tussen %s en %s liggen.\",
  minlength:      \"Deze tekst is te kort. Deze moet uit minimaal %s karakters bestaan.\",
  maxlength:      \"Deze waarde is te lang. Deze mag maximaal %s karakters lang zijn.\",
  length:         \"Deze waarde moet tussen %s en %s karakters lang zijn.\",
  equalto:        \"Deze waardes moeten identiek zijn.\"
});

Parsley.setLocale('nl');
", "node_modules/parsleyjs/dist/i18n/nl.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/nl.js");
    }
}
