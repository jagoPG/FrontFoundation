<?php

/* node_modules/parsleyjs/src/i18n/uk.js */
class __TwigTemplate_fadbcbab7397a6d0bfc2d01137ec4e82bf716e3b105ed06d6d8a63bd3a0ee2e1 extends Twig_Template
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
        $__internal_8ed49080c13efd46e6605cd98308b0d1787d7ab9e97f1754b95b1524191bac04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed49080c13efd46e6605cd98308b0d1787d7ab9e97f1754b95b1524191bac04->enter($__internal_8ed49080c13efd46e6605cd98308b0d1787d7ab9e97f1754b95b1524191bac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/uk.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('uk', {
  defaultMessage: \"Некоректне значення.\",
  type: {
    email:        \"Введіть адресу електронної пошти.\",
    url:          \"Введіть URL-адресу.\",
    number:       \"Введіть число.\",
    integer:      \"Введіть ціле число.\",
    digits:       \"Введіть тільки цифри.\",
    alphanum:     \"Введіть буквено-цифрове значення.\"
  },
  notblank:       \"Це поле повинно бути заповнено.\",
  required:       \"Обов'язкове поле\",
  pattern:        \"Це значення некоректно.\",
  min:            \"Це значення повинно бути не менше ніж %s.\",
  max:            \"Це значення повинно бути не більше ніж %s.\",
  range:          \"Це значення повинно бути від %s до %s.\",
  minlength:      \"Це значення повинно містити не менше ніж %s символів.\",
  maxlength:      \"Це значення повинно містити не більше ніж %s символів.\",
  length:         \"Це значення повинно містити від %s до %s символів.\",
  mincheck:       \"Виберіть не менше %s значень.\",
  maxcheck:       \"Виберіть не більше %s значень.\",
  check:          \"Виберіть від %s до %s значень.\",
  equalto:        \"Це значення повинно збігатися.\"
});

Parsley.setLocale('uk');
";
        
        $__internal_8ed49080c13efd46e6605cd98308b0d1787d7ab9e97f1754b95b1524191bac04->leave($__internal_8ed49080c13efd46e6605cd98308b0d1787d7ab9e97f1754b95b1524191bac04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/uk.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('uk', {
  defaultMessage: \"Некоректне значення.\",
  type: {
    email:        \"Введіть адресу електронної пошти.\",
    url:          \"Введіть URL-адресу.\",
    number:       \"Введіть число.\",
    integer:      \"Введіть ціле число.\",
    digits:       \"Введіть тільки цифри.\",
    alphanum:     \"Введіть буквено-цифрове значення.\"
  },
  notblank:       \"Це поле повинно бути заповнено.\",
  required:       \"Обов'язкове поле\",
  pattern:        \"Це значення некоректно.\",
  min:            \"Це значення повинно бути не менше ніж %s.\",
  max:            \"Це значення повинно бути не більше ніж %s.\",
  range:          \"Це значення повинно бути від %s до %s.\",
  minlength:      \"Це значення повинно містити не менше ніж %s символів.\",
  maxlength:      \"Це значення повинно містити не більше ніж %s символів.\",
  length:         \"Це значення повинно містити від %s до %s символів.\",
  mincheck:       \"Виберіть не менше %s значень.\",
  maxcheck:       \"Виберіть не більше %s значень.\",
  check:          \"Виберіть від %s до %s значень.\",
  equalto:        \"Це значення повинно збігатися.\"
});

Parsley.setLocale('uk');
", "node_modules/parsleyjs/src/i18n/uk.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/uk.js");
    }
}
