<?php

/* node_modules/parsleyjs/src/i18n/it.js */
class __TwigTemplate_d5e800f79678a4bd04bd9b58384ddb3aef284df25ae5b0eb25cc44020dae1334 extends Twig_Template
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
        $__internal_004ac7f6ef996105de716477696d20334841efbf2f15322b9ff35debddd699ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004ac7f6ef996105de716477696d20334841efbf2f15322b9ff35debddd699ee->enter($__internal_004ac7f6ef996105de716477696d20334841efbf2f15322b9ff35debddd699ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/it.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('it', {
  defaultMessage: \"Questo valore sembra essere non valido.\",
  type: {
    email:        \"Questo valore deve essere un indirizzo email valido.\",
    url:          \"Questo valore deve essere un URL valido.\",
    number:       \"Questo valore deve essere un numero valido.\",
    integer:      \"Questo valore deve essere un numero valido.\",
    digits:       \"Questo valore deve essere di tipo numerico.\",
    alphanum:     \"Questo valore deve essere di tipo alfanumerico.\"
  },
  notblank:       \"Questo valore non deve essere vuoto.\",
  required:       \"Questo valore è richiesto.\",
  pattern:        \"Questo valore non è corretto.\",
  min:            \"Questo valore deve essere maggiore di %s.\",
  max:            \"Questo valore deve essere minore di %s.\",
  range:          \"Questo valore deve essere compreso tra %s e %s.\",
  minlength:      \"Questo valore è troppo corto. La lunghezza minima è di %s caratteri.\",
  maxlength:      \"Questo valore è troppo lungo. La lunghezza massima è di %s caratteri.\",
  length:         \"La lunghezza di questo valore deve essere compresa fra %s e %s caratteri.\",
  mincheck:       \"Devi scegliere almeno %s opzioni.\",
  maxcheck:       \"Devi scegliere al più %s opzioni.\",
  check:          \"Devi scegliere tra %s e %s opzioni.\",
  equalto:        \"Questo valore deve essere identico.\"
});

Parsley.setLocale('it');
";
        
        $__internal_004ac7f6ef996105de716477696d20334841efbf2f15322b9ff35debddd699ee->leave($__internal_004ac7f6ef996105de716477696d20334841efbf2f15322b9ff35debddd699ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/it.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('it', {
  defaultMessage: \"Questo valore sembra essere non valido.\",
  type: {
    email:        \"Questo valore deve essere un indirizzo email valido.\",
    url:          \"Questo valore deve essere un URL valido.\",
    number:       \"Questo valore deve essere un numero valido.\",
    integer:      \"Questo valore deve essere un numero valido.\",
    digits:       \"Questo valore deve essere di tipo numerico.\",
    alphanum:     \"Questo valore deve essere di tipo alfanumerico.\"
  },
  notblank:       \"Questo valore non deve essere vuoto.\",
  required:       \"Questo valore è richiesto.\",
  pattern:        \"Questo valore non è corretto.\",
  min:            \"Questo valore deve essere maggiore di %s.\",
  max:            \"Questo valore deve essere minore di %s.\",
  range:          \"Questo valore deve essere compreso tra %s e %s.\",
  minlength:      \"Questo valore è troppo corto. La lunghezza minima è di %s caratteri.\",
  maxlength:      \"Questo valore è troppo lungo. La lunghezza massima è di %s caratteri.\",
  length:         \"La lunghezza di questo valore deve essere compresa fra %s e %s caratteri.\",
  mincheck:       \"Devi scegliere almeno %s opzioni.\",
  maxcheck:       \"Devi scegliere al più %s opzioni.\",
  check:          \"Devi scegliere tra %s e %s opzioni.\",
  equalto:        \"Questo valore deve essere identico.\"
});

Parsley.setLocale('it');
", "node_modules/parsleyjs/src/i18n/it.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/it.js");
    }
}
