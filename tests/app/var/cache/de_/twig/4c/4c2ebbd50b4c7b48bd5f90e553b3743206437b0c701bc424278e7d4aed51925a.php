<?php

/* node_modules/parsleyjs/src/i18n/pl.js */
class __TwigTemplate_c669fc64ddc146e54af8cd431662da694b9cc21e1da919302b139ddcf1d515b1 extends Twig_Template
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
        $__internal_366d8f5c5b5c92d1741cc1cbbbc932fc2aa616709a8dd093f24eced5d90d091b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366d8f5c5b5c92d1741cc1cbbbc932fc2aa616709a8dd093f24eced5d90d091b->enter($__internal_366d8f5c5b5c92d1741cc1cbbbc932fc2aa616709a8dd093f24eced5d90d091b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/pl.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('pl', {
  defaultMessage: \"Wartość wygląda na nieprawidłową\",
  type: {
    email:        \"Wpisz poprawny adres e-mail.\",
    url:          \"Wpisz poprawny adres URL.\",
    number:       \"Wpisz poprawną liczbę.\",
    integer:      \"Dozwolone są jedynie liczby całkowite.\",
    digits:       \"Dozwolone są jedynie cyfry.\",
    alphanum:     \"Dozwolone są jedynie znaki alfanumeryczne.\"
  },
  notblank:       \"Pole nie może być puste.\",
  required:       \"Pole jest wymagane.\",
  pattern:        \"Pole zawiera nieprawidłową wartość.\",
  min:            \"Wartość nie może być mniejsza od %s.\",
  max:            \"Wartość nie może być większa od %s.\",
  range:          \"Wartość powinna zaweriać się pomiędzy %s a %s.\",
  minlength:      \"Minimalna ilość znaków wynosi %s.\",
  maxlength:      \"Maksymalna ilość znaków wynosi %s.\",
  length:         \"Ilość znaków wynosi od %s do %s.\",
  mincheck:       \"Wybierz minimalnie %s opcji.\",
  maxcheck:       \"Wybierz maksymalnie %s opcji.\",
  check:          \"Wybierz od %s do %s opcji.\",
  equalto:        \"Wartości nie są identyczne.\"
});

Parsley.setLocale('pl');
";
        
        $__internal_366d8f5c5b5c92d1741cc1cbbbc932fc2aa616709a8dd093f24eced5d90d091b->leave($__internal_366d8f5c5b5c92d1741cc1cbbbc932fc2aa616709a8dd093f24eced5d90d091b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/pl.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('pl', {
  defaultMessage: \"Wartość wygląda na nieprawidłową\",
  type: {
    email:        \"Wpisz poprawny adres e-mail.\",
    url:          \"Wpisz poprawny adres URL.\",
    number:       \"Wpisz poprawną liczbę.\",
    integer:      \"Dozwolone są jedynie liczby całkowite.\",
    digits:       \"Dozwolone są jedynie cyfry.\",
    alphanum:     \"Dozwolone są jedynie znaki alfanumeryczne.\"
  },
  notblank:       \"Pole nie może być puste.\",
  required:       \"Pole jest wymagane.\",
  pattern:        \"Pole zawiera nieprawidłową wartość.\",
  min:            \"Wartość nie może być mniejsza od %s.\",
  max:            \"Wartość nie może być większa od %s.\",
  range:          \"Wartość powinna zaweriać się pomiędzy %s a %s.\",
  minlength:      \"Minimalna ilość znaków wynosi %s.\",
  maxlength:      \"Maksymalna ilość znaków wynosi %s.\",
  length:         \"Ilość znaków wynosi od %s do %s.\",
  mincheck:       \"Wybierz minimalnie %s opcji.\",
  maxcheck:       \"Wybierz maksymalnie %s opcji.\",
  check:          \"Wybierz od %s do %s opcji.\",
  equalto:        \"Wartości nie są identyczne.\"
});

Parsley.setLocale('pl');
", "node_modules/parsleyjs/src/i18n/pl.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/pl.js");
    }
}
