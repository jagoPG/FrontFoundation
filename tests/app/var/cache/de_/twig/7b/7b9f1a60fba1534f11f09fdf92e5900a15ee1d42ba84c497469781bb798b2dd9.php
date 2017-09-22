<?php

/* node_modules/parsleyjs/dist/i18n/sv.js */
class __TwigTemplate_46eb245911c1bbb7e06e9e26783d4f07fb55211d0e06b26b90aae1f09ab38ccc extends Twig_Template
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
        $__internal_8ad9e5bd6c28128c5eec68b2432483af5fa22cf175218878a56704058ba3152f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad9e5bd6c28128c5eec68b2432483af5fa22cf175218878a56704058ba3152f->enter($__internal_8ad9e5bd6c28128c5eec68b2432483af5fa22cf175218878a56704058ba3152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/sv.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sv', {
  defaultMessage: \"Ogiltigt värde.\",
  type: {
    email:        \"Ange en giltig e-postadress.\",
    url:          \"Ange en giltig URL.\",
    number:       \"Ange ett giltigt nummer.\",
    integer:      \"Ange ett heltal.\",
    digits:       \"Ange endast siffror.\",
    alphanum:     \"Ange endast bokstäver och siffror.\"
  },
  notblank:       \"Värdet får inte vara tomt.\",
  required:       \"Måste fyllas i.\",
  pattern:        \"Värdet är ej giltigt.\",
  min:            \"Värdet måste vara större än eller lika med %s.\",
  max:            \"Värdet måste vara mindre än eller lika med %s.\",
  range:          \"Värdet måste vara mellan %s och %s.\",
  minlength:      \"Värdet måste vara minst %s tecken.\",
  maxlength:      \"Värdet får maximalt innehålla %s tecken.\",
  length:         \"Värdet måste vara mellan %s och %s tecken.\",
  mincheck:       \"Minst %s val måste göras.\",
  maxcheck:       \"Maximalt %s val får göras.\",
  check:          \"Mellan %s och %s val måste göras.\",
  equalto:        \"Värdena måste vara lika.\"
});

Parsley.setLocale('sv');
";
        
        $__internal_8ad9e5bd6c28128c5eec68b2432483af5fa22cf175218878a56704058ba3152f->leave($__internal_8ad9e5bd6c28128c5eec68b2432483af5fa22cf175218878a56704058ba3152f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/sv.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sv', {
  defaultMessage: \"Ogiltigt värde.\",
  type: {
    email:        \"Ange en giltig e-postadress.\",
    url:          \"Ange en giltig URL.\",
    number:       \"Ange ett giltigt nummer.\",
    integer:      \"Ange ett heltal.\",
    digits:       \"Ange endast siffror.\",
    alphanum:     \"Ange endast bokstäver och siffror.\"
  },
  notblank:       \"Värdet får inte vara tomt.\",
  required:       \"Måste fyllas i.\",
  pattern:        \"Värdet är ej giltigt.\",
  min:            \"Värdet måste vara större än eller lika med %s.\",
  max:            \"Värdet måste vara mindre än eller lika med %s.\",
  range:          \"Värdet måste vara mellan %s och %s.\",
  minlength:      \"Värdet måste vara minst %s tecken.\",
  maxlength:      \"Värdet får maximalt innehålla %s tecken.\",
  length:         \"Värdet måste vara mellan %s och %s tecken.\",
  mincheck:       \"Minst %s val måste göras.\",
  maxcheck:       \"Maximalt %s val får göras.\",
  check:          \"Mellan %s och %s val måste göras.\",
  equalto:        \"Värdena måste vara lika.\"
});

Parsley.setLocale('sv');
", "node_modules/parsleyjs/dist/i18n/sv.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/sv.js");
    }
}
