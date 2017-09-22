<?php

/* node_modules/parsleyjs/dist/i18n/bg.js */
class __TwigTemplate_7517ab340e527a6dd68182fb9dd4bddb2e6a61fed64abbbb06d5f3ee64d6efb7 extends Twig_Template
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
        $__internal_13fac172c7a3b03a0f29b3430e2378c8b0e20cc0c937596d85337c9549b396cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fac172c7a3b03a0f29b3430e2378c8b0e20cc0c937596d85337c9549b396cf->enter($__internal_13fac172c7a3b03a0f29b3430e2378c8b0e20cc0c937596d85337c9549b396cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/bg.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('bg', {
  defaultMessage: \"Невалидна стойност.\",
  type: {
    email:        \"Невалиден имейл адрес.\",
    url:          \"Невалиден URL адрес.\",
    number:       \"Невалиден номер.\",
    integer:      \"Невалиден номер.\",
    digits:       \"Невалидни цифри.\",
    alphanum:     \"Стойността трябва да садържа само букви или цифри.\"
  },
  notblank:       \"Полето е задължително.\",
  required:       \"Полето е задължително.\",
  pattern:        \"Невалидна стойност.\",
  min:            \"Стойността трябва да бъде по-голяма или равна на %s.\",
  max:            \"Стойността трябва да бъде по-малка или равна на %s.\",
  range:          \"Стойността трябва да бъде между %s и %s.\",
  minlength:      \"Стойността е прекалено кратка. Мин. дължина: %s символа.\",
  maxlength:      \"Стойността е прекалено дълга. Макс. дължина: %s символа.\",
  length:         \"Дължината на стойността трябва да бъде между %s и %s символа.\",
  mincheck:       \"Трябва да изберете поне %s стойности.\",
  maxcheck:       \"Трябва да изберете най-много %s стойности.\",
  check:          \"Трябва да изберете между %s и %s стойности.\",
  equalto:        \"Стойността трябва да съвпада.\"
});

Parsley.setLocale('bg');
";
        
        $__internal_13fac172c7a3b03a0f29b3430e2378c8b0e20cc0c937596d85337c9549b396cf->leave($__internal_13fac172c7a3b03a0f29b3430e2378c8b0e20cc0c937596d85337c9549b396cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/bg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('bg', {
  defaultMessage: \"Невалидна стойност.\",
  type: {
    email:        \"Невалиден имейл адрес.\",
    url:          \"Невалиден URL адрес.\",
    number:       \"Невалиден номер.\",
    integer:      \"Невалиден номер.\",
    digits:       \"Невалидни цифри.\",
    alphanum:     \"Стойността трябва да садържа само букви или цифри.\"
  },
  notblank:       \"Полето е задължително.\",
  required:       \"Полето е задължително.\",
  pattern:        \"Невалидна стойност.\",
  min:            \"Стойността трябва да бъде по-голяма или равна на %s.\",
  max:            \"Стойността трябва да бъде по-малка или равна на %s.\",
  range:          \"Стойността трябва да бъде между %s и %s.\",
  minlength:      \"Стойността е прекалено кратка. Мин. дължина: %s символа.\",
  maxlength:      \"Стойността е прекалено дълга. Макс. дължина: %s символа.\",
  length:         \"Дължината на стойността трябва да бъде между %s и %s символа.\",
  mincheck:       \"Трябва да изберете поне %s стойности.\",
  maxcheck:       \"Трябва да изберете най-много %s стойности.\",
  check:          \"Трябва да изберете между %s и %s стойности.\",
  equalto:        \"Стойността трябва да съвпада.\"
});

Parsley.setLocale('bg');
", "node_modules/parsleyjs/dist/i18n/bg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/bg.js");
    }
}
