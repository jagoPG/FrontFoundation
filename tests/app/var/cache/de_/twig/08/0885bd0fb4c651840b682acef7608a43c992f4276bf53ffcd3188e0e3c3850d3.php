<?php

/* node_modules/parsleyjs/src/i18n/de.js */
class __TwigTemplate_8a1fd993805a9c4322654b010cf3b0890d1ae96a67a98178ab2f5c44842a2197 extends Twig_Template
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
        $__internal_d81f4114ede6a680dd2a9e951b567baefcf3f3ab35b3c4646619d797ad129156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81f4114ede6a680dd2a9e951b567baefcf3f3ab35b3c4646619d797ad129156->enter($__internal_d81f4114ede6a680dd2a9e951b567baefcf3f3ab35b3c4646619d797ad129156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/de.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('de', {
  defaultMessage: \"Die Eingabe scheint nicht korrekt zu sein.\",
  type: {
    email:        \"Die Eingabe muss eine gültige E-Mail-Adresse sein.\",
    url:          \"Die Eingabe muss eine gültige URL sein.\",
    number:       \"Die Eingabe muss eine Zahl sein.\",
    integer:      \"Die Eingabe muss eine Zahl sein.\",
    digits:       \"Die Eingabe darf nur Ziffern enthalten.\",
    alphanum:     \"Die Eingabe muss alphanumerisch sein.\"
  },
  notblank:       \"Die Eingabe darf nicht leer sein.\",
  required:       \"Dies ist ein Pflichtfeld.\",
  pattern:        \"Die Eingabe scheint ungültig zu sein.\",
  min:            \"Die Eingabe muss größer oder gleich %s sein.\",
  max:            \"Die Eingabe muss kleiner oder gleich %s sein.\",
  range:          \"Die Eingabe muss zwischen %s und %s liegen.\",
  minlength:      \"Die Eingabe ist zu kurz. Es müssen mindestens %s Zeichen eingegeben werden.\",
  maxlength:      \"Die Eingabe ist zu lang. Es dürfen höchstens %s Zeichen eingegeben werden.\",
  length:         \"Die Länge der Eingabe ist ungültig. Es müssen zwischen %s und %s Zeichen eingegeben werden.\",
  mincheck:       \"Wählen Sie mindestens %s Angaben aus.\",
  maxcheck:       \"Wählen Sie maximal %s Angaben aus.\",
  check:          \"Wählen Sie zwischen %s und %s Angaben.\",
  equalto:        \"Dieses Feld muss dem anderen entsprechen.\"
});

Parsley.setLocale('de');
";
        
        $__internal_d81f4114ede6a680dd2a9e951b567baefcf3f3ab35b3c4646619d797ad129156->leave($__internal_d81f4114ede6a680dd2a9e951b567baefcf3f3ab35b3c4646619d797ad129156_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/de.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('de', {
  defaultMessage: \"Die Eingabe scheint nicht korrekt zu sein.\",
  type: {
    email:        \"Die Eingabe muss eine gültige E-Mail-Adresse sein.\",
    url:          \"Die Eingabe muss eine gültige URL sein.\",
    number:       \"Die Eingabe muss eine Zahl sein.\",
    integer:      \"Die Eingabe muss eine Zahl sein.\",
    digits:       \"Die Eingabe darf nur Ziffern enthalten.\",
    alphanum:     \"Die Eingabe muss alphanumerisch sein.\"
  },
  notblank:       \"Die Eingabe darf nicht leer sein.\",
  required:       \"Dies ist ein Pflichtfeld.\",
  pattern:        \"Die Eingabe scheint ungültig zu sein.\",
  min:            \"Die Eingabe muss größer oder gleich %s sein.\",
  max:            \"Die Eingabe muss kleiner oder gleich %s sein.\",
  range:          \"Die Eingabe muss zwischen %s und %s liegen.\",
  minlength:      \"Die Eingabe ist zu kurz. Es müssen mindestens %s Zeichen eingegeben werden.\",
  maxlength:      \"Die Eingabe ist zu lang. Es dürfen höchstens %s Zeichen eingegeben werden.\",
  length:         \"Die Länge der Eingabe ist ungültig. Es müssen zwischen %s und %s Zeichen eingegeben werden.\",
  mincheck:       \"Wählen Sie mindestens %s Angaben aus.\",
  maxcheck:       \"Wählen Sie maximal %s Angaben aus.\",
  check:          \"Wählen Sie zwischen %s und %s Angaben.\",
  equalto:        \"Dieses Feld muss dem anderen entsprechen.\"
});

Parsley.setLocale('de');
", "node_modules/parsleyjs/src/i18n/de.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/de.js");
    }
}
