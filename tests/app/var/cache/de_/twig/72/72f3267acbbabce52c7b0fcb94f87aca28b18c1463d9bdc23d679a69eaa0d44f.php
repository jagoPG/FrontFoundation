<?php

/* node_modules/parsleyjs/dist/i18n/sr.js */
class __TwigTemplate_ea28330e5265eb21fa238cbcc98bd81d49f729ef3b3b33cbc77235fab7eab28b extends Twig_Template
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
        $__internal_3faa82d21abe34d92544ab18a7897e2a65830b6ef654a269b4d6d63199f222ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faa82d21abe34d92544ab18a7897e2a65830b6ef654a269b4d6d63199f222ec->enter($__internal_3faa82d21abe34d92544ab18a7897e2a65830b6ef654a269b4d6d63199f222ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/sr.js"));

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
        
        $__internal_3faa82d21abe34d92544ab18a7897e2a65830b6ef654a269b4d6d63199f222ec->leave($__internal_3faa82d21abe34d92544ab18a7897e2a65830b6ef654a269b4d6d63199f222ec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/sr.js";
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
", "node_modules/parsleyjs/dist/i18n/sr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/sr.js");
    }
}
