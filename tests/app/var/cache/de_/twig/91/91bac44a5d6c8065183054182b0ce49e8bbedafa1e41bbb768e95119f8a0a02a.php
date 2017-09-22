<?php

/* node_modules/parsleyjs/src/i18n/nl.js */
class __TwigTemplate_5d07f0769494eddb19f6bff44c25b14cd160abb7406c3cae3a779245ee2a072b extends Twig_Template
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
        $__internal_50fe2dde87f643ac1c70515dbcb12cd246928f7ff8daa57edd84718f57d0d176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fe2dde87f643ac1c70515dbcb12cd246928f7ff8daa57edd84718f57d0d176->enter($__internal_50fe2dde87f643ac1c70515dbcb12cd246928f7ff8daa57edd84718f57d0d176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/nl.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_50fe2dde87f643ac1c70515dbcb12cd246928f7ff8daa57edd84718f57d0d176->leave($__internal_50fe2dde87f643ac1c70515dbcb12cd246928f7ff8daa57edd84718f57d0d176_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/nl.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

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
", "node_modules/parsleyjs/src/i18n/nl.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/nl.js");
    }
}
