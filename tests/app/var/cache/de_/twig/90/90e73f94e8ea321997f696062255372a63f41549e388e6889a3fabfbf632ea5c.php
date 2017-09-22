<?php

/* node_modules/parsleyjs/dist/i18n/it.js */
class __TwigTemplate_dc28727df5efd2dea853fb0b38f45e76215082cdd01e3d334de5216f58fc69f9 extends Twig_Template
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
        $__internal_4c902456123f82844202d99c6359aa1d0791e5e0d14be3c41e7226b6efb35740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c902456123f82844202d99c6359aa1d0791e5e0d14be3c41e7226b6efb35740->enter($__internal_4c902456123f82844202d99c6359aa1d0791e5e0d14be3c41e7226b6efb35740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/it.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_4c902456123f82844202d99c6359aa1d0791e5e0d14be3c41e7226b6efb35740->leave($__internal_4c902456123f82844202d99c6359aa1d0791e5e0d14be3c41e7226b6efb35740_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/it.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/it.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/it.js");
    }
}
