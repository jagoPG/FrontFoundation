<?php

/* node_modules/parsleyjs/dist/i18n/fr.js */
class __TwigTemplate_748683a887a2c17e673c3c7231129baa8764c56efafb91973af7ec5f1f459dac extends Twig_Template
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
        $__internal_2edc3d29b22f41e0e20d5801d54819adcba832ed59a204f6047b7f12fac13eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edc3d29b22f41e0e20d5801d54819adcba832ed59a204f6047b7f12fac13eeb->enter($__internal_2edc3d29b22f41e0e20d5801d54819adcba832ed59a204f6047b7f12fac13eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/fr.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('fr', {
  defaultMessage: \"Cette valeur semble non valide.\",
  type: {
    email:        \"Cette valeur n'est pas une adresse email valide.\",
    url:          \"Cette valeur n'est pas une URL valide.\",
    number:       \"Cette valeur doit être un nombre.\",
    integer:      \"Cette valeur doit être un entier.\",
    digits:       \"Cette valeur doit être numérique.\",
    alphanum:     \"Cette valeur doit être alphanumérique.\"
  },
  notblank:       \"Cette valeur ne peut pas être vide.\",
  required:       \"Ce champ est requis.\",
  pattern:        \"Cette valeur semble non valide.\",
  min:            \"Cette valeur ne doit pas être inférieure à %s.\",
  max:            \"Cette valeur ne doit pas excéder %s.\",
  range:          \"Cette valeur doit être comprise entre %s et %s.\",
  minlength:      \"Cette chaîne est trop courte. Elle doit avoir au minimum %s caractères.\",
  maxlength:      \"Cette chaîne est trop longue. Elle doit avoir au maximum %s caractères.\",
  length:         \"Cette valeur doit contenir entre %s et %s caractères.\",
  mincheck:       \"Vous devez sélectionner au moins %s choix.\",
  maxcheck:       \"Vous devez sélectionner %s choix maximum.\",
  check:          \"Vous devez sélectionner entre %s et %s choix.\",
  equalto:        \"Cette valeur devrait être identique.\"
});

Parsley.setLocale('fr');
";
        
        $__internal_2edc3d29b22f41e0e20d5801d54819adcba832ed59a204f6047b7f12fac13eeb->leave($__internal_2edc3d29b22f41e0e20d5801d54819adcba832ed59a204f6047b7f12fac13eeb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/fr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('fr', {
  defaultMessage: \"Cette valeur semble non valide.\",
  type: {
    email:        \"Cette valeur n'est pas une adresse email valide.\",
    url:          \"Cette valeur n'est pas une URL valide.\",
    number:       \"Cette valeur doit être un nombre.\",
    integer:      \"Cette valeur doit être un entier.\",
    digits:       \"Cette valeur doit être numérique.\",
    alphanum:     \"Cette valeur doit être alphanumérique.\"
  },
  notblank:       \"Cette valeur ne peut pas être vide.\",
  required:       \"Ce champ est requis.\",
  pattern:        \"Cette valeur semble non valide.\",
  min:            \"Cette valeur ne doit pas être inférieure à %s.\",
  max:            \"Cette valeur ne doit pas excéder %s.\",
  range:          \"Cette valeur doit être comprise entre %s et %s.\",
  minlength:      \"Cette chaîne est trop courte. Elle doit avoir au minimum %s caractères.\",
  maxlength:      \"Cette chaîne est trop longue. Elle doit avoir au maximum %s caractères.\",
  length:         \"Cette valeur doit contenir entre %s et %s caractères.\",
  mincheck:       \"Vous devez sélectionner au moins %s choix.\",
  maxcheck:       \"Vous devez sélectionner %s choix maximum.\",
  check:          \"Vous devez sélectionner entre %s et %s choix.\",
  equalto:        \"Cette valeur devrait être identique.\"
});

Parsley.setLocale('fr');
", "node_modules/parsleyjs/dist/i18n/fr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/fr.js");
    }
}
