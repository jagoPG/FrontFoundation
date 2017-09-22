<?php

/* node_modules/parsleyjs/dist/i18n/ua.js */
class __TwigTemplate_8994066ecb2d89018bc03b2b973bf49d3aa6cf090a8081009bfaf74d2cdebb14 extends Twig_Template
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
        $__internal_4014d3618d4834595f162e508181679a7a56582c53dabd716058a46d651edfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4014d3618d4834595f162e508181679a7a56582c53dabd716058a46d651edfca->enter($__internal_4014d3618d4834595f162e508181679a7a56582c53dabd716058a46d651edfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/ua.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_4014d3618d4834595f162e508181679a7a56582c53dabd716058a46d651edfca->leave($__internal_4014d3618d4834595f162e508181679a7a56582c53dabd716058a46d651edfca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/ua.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/ua.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/ua.js");
    }
}
