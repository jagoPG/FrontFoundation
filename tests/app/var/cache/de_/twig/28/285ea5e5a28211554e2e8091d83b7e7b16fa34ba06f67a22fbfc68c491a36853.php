<?php

/* node_modules/parsleyjs/src/i18n/sr.js */
class __TwigTemplate_f24dc8881ccdf8031187445825d621aada361e36ff84c8c316fcc5a5d1f8fe7b extends Twig_Template
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
        $__internal_de45b370c2f38b4daa3f9e1fe852f8fdfdeaf521ce951aef19348fe2f6b00b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de45b370c2f38b4daa3f9e1fe852f8fdfdeaf521ce951aef19348fe2f6b00b21->enter($__internal_de45b370c2f38b4daa3f9e1fe852f8fdfdeaf521ce951aef19348fe2f6b00b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/sr.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sr', {
  defaultMessage: \"Uneta vrednost nije validna.\",
  type: {
    email:        \"Unesite pravilnu email adresu.\",
    url:          \"Unesite pravilnu url adresu.\",
    number:       \"Unesite numeričku vrednost.\",
    integer:      \"Unesite ceo broj bez decimala.\",
    digits:       \"Unesite samo brojeve.\",
    alphanum:     \"Unesite samo alfanumeričke znake (slova i brojeve).\"
  },
  notblank:       \"Ovo polje ne sme biti prazno.\",
  required:       \"Ovo polje je obavezno.\",
  pattern:        \"Uneta vrednost nije validna.\",
  min:            \"Vrednost mora biti veća ili jednaka %s.\",
  max:            \"Vrednost mora biti manja ili jednaka %s.\",
  range:          \"Vrednost mora biti između %s i %s.\",
  minlength:      \"Unos je prekratak. Mora imati najmanje %s znakova.\",
  maxlength:      \"Unos je predug. Može imati najviše %s znakova.\",
  length:         \"Dužina unosa je pogrešna. Broj znakova mora biti između %s i %s.\",
  mincheck:       \"Morate izabrati minimalno %s opcija.\",
  maxcheck:       \"Možete izabrati najviše %s opcija.\",
  check:          \"Broj izabranih opcija mora biti između %s i %s.\",
  equalto:        \"Unos mora biti jednak.\"
});

Parsley.setLocale('sr');
";
        
        $__internal_de45b370c2f38b4daa3f9e1fe852f8fdfdeaf521ce951aef19348fe2f6b00b21->leave($__internal_de45b370c2f38b4daa3f9e1fe852f8fdfdeaf521ce951aef19348fe2f6b00b21_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/sr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sr', {
  defaultMessage: \"Uneta vrednost nije validna.\",
  type: {
    email:        \"Unesite pravilnu email adresu.\",
    url:          \"Unesite pravilnu url adresu.\",
    number:       \"Unesite numeričku vrednost.\",
    integer:      \"Unesite ceo broj bez decimala.\",
    digits:       \"Unesite samo brojeve.\",
    alphanum:     \"Unesite samo alfanumeričke znake (slova i brojeve).\"
  },
  notblank:       \"Ovo polje ne sme biti prazno.\",
  required:       \"Ovo polje je obavezno.\",
  pattern:        \"Uneta vrednost nije validna.\",
  min:            \"Vrednost mora biti veća ili jednaka %s.\",
  max:            \"Vrednost mora biti manja ili jednaka %s.\",
  range:          \"Vrednost mora biti između %s i %s.\",
  minlength:      \"Unos je prekratak. Mora imati najmanje %s znakova.\",
  maxlength:      \"Unos je predug. Može imati najviše %s znakova.\",
  length:         \"Dužina unosa je pogrešna. Broj znakova mora biti između %s i %s.\",
  mincheck:       \"Morate izabrati minimalno %s opcija.\",
  maxcheck:       \"Možete izabrati najviše %s opcija.\",
  check:          \"Broj izabranih opcija mora biti između %s i %s.\",
  equalto:        \"Unos mora biti jednak.\"
});

Parsley.setLocale('sr');
", "node_modules/parsleyjs/src/i18n/sr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/sr.js");
    }
}
