<?php

/* node_modules/parsleyjs/src/i18n/ua.js */
class __TwigTemplate_1ac41de962af7dc55676e9b1ef3368f4cfafabba2de1261c738caaff0af3603d extends Twig_Template
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
        $__internal_e82d83ab5b9edd69b760c0e26c53b3422484f4099dd7b3cffd2601cb69a385d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82d83ab5b9edd69b760c0e26c53b3422484f4099dd7b3cffd2601cb69a385d9->enter($__internal_e82d83ab5b9edd69b760c0e26c53b3422484f4099dd7b3cffd2601cb69a385d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ua.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ua', {
  defaultMessage: \"Некоректне значення.\",
  type: {
    email:        \"Введіть адресу електронної пошти.\",
    url:          \"Введіть URL адресу.\",
    number:       \"Введіть число.\",
    integer:      \"Введіть ціле число.\",
    digits:       \"Введіть тільки цифри.\",
    alphanum:     \"Введіть буквено-цифрове значення.\"
  },
  notblank:       \"Це поле має бути заповненим.\",
  required:       \"Обов'язкове поле.\",
  pattern:        \"Це значення некоректне.\",
  min:            \"Це значення повинно бути не менше ніж %s.\",
  max:            \"Це значення повинно бути не більше ніж %s.\",
  range:          \"Це значення повинно бути від %s до %s.\",
  minlength:      \"Це значення повинно містити не менше %s символів.\",
  maxlength:      \"Це значення повинно містити не більше %s символів.\",
  length:         \"Це значення повинно містити від %s до %s символів.\",
  mincheck:       \"Виберіть не менше %s значень.\",
  maxcheck:       \"Виберіть не більше %s значень.\",
  check:          \"Виберіть від %s до %s значень.\",
  equalto:        \"Це значення повинно співпадати.\"
});

Parsley.setLocale('ua');
";
        
        $__internal_e82d83ab5b9edd69b760c0e26c53b3422484f4099dd7b3cffd2601cb69a385d9->leave($__internal_e82d83ab5b9edd69b760c0e26c53b3422484f4099dd7b3cffd2601cb69a385d9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ua.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ua', {
  defaultMessage: \"Некоректне значення.\",
  type: {
    email:        \"Введіть адресу електронної пошти.\",
    url:          \"Введіть URL адресу.\",
    number:       \"Введіть число.\",
    integer:      \"Введіть ціле число.\",
    digits:       \"Введіть тільки цифри.\",
    alphanum:     \"Введіть буквено-цифрове значення.\"
  },
  notblank:       \"Це поле має бути заповненим.\",
  required:       \"Обов'язкове поле.\",
  pattern:        \"Це значення некоректне.\",
  min:            \"Це значення повинно бути не менше ніж %s.\",
  max:            \"Це значення повинно бути не більше ніж %s.\",
  range:          \"Це значення повинно бути від %s до %s.\",
  minlength:      \"Це значення повинно містити не менше %s символів.\",
  maxlength:      \"Це значення повинно містити не більше %s символів.\",
  length:         \"Це значення повинно містити від %s до %s символів.\",
  mincheck:       \"Виберіть не менше %s значень.\",
  maxcheck:       \"Виберіть не більше %s значень.\",
  check:          \"Виберіть від %s до %s значень.\",
  equalto:        \"Це значення повинно співпадати.\"
});

Parsley.setLocale('ua');
", "node_modules/parsleyjs/src/i18n/ua.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ua.js");
    }
}
