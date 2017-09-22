<?php

/* node_modules/parsleyjs/dist/i18n/uk.js */
class __TwigTemplate_afdaf8b44f2d92255c11ad692934019bbc7ad049a4c0c5fcf76eb72f78063b5a extends Twig_Template
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
        $__internal_a27a59ff37fbdd0749c28dcacc7fef7938cca8e4999759544ce108488470e893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27a59ff37fbdd0749c28dcacc7fef7938cca8e4999759544ce108488470e893->enter($__internal_a27a59ff37fbdd0749c28dcacc7fef7938cca8e4999759544ce108488470e893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/uk.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_a27a59ff37fbdd0749c28dcacc7fef7938cca8e4999759544ce108488470e893->leave($__internal_a27a59ff37fbdd0749c28dcacc7fef7938cca8e4999759544ce108488470e893_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/uk.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/uk.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/uk.js");
    }
}
