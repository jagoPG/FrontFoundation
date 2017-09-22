<?php

/* node_modules/parsleyjs/src/i18n/fr.js */
class __TwigTemplate_0edc4cdc8e26c8cd69873a3639ce2d660a096924d0cb132e932110af35cdfac7 extends Twig_Template
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
        $__internal_b7e0bacb89b75f8c529269cd9bf0b90f36ea139ba4e267b29e6b59fe1cca72e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e0bacb89b75f8c529269cd9bf0b90f36ea139ba4e267b29e6b59fe1cca72e6->enter($__internal_b7e0bacb89b75f8c529269cd9bf0b90f36ea139ba4e267b29e6b59fe1cca72e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/fr.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_b7e0bacb89b75f8c529269cd9bf0b90f36ea139ba4e267b29e6b59fe1cca72e6->leave($__internal_b7e0bacb89b75f8c529269cd9bf0b90f36ea139ba4e267b29e6b59fe1cca72e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/fr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

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
", "node_modules/parsleyjs/src/i18n/fr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/fr.js");
    }
}
