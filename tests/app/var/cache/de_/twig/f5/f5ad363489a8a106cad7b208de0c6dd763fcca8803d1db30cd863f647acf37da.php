<?php

/* node_modules/parsleyjs/src/i18n/bg.js */
class __TwigTemplate_1871e8ba4534b30e1c8c47af054ff7202989cad708dc3db36d11cf3ab0660ef1 extends Twig_Template
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
        $__internal_f019e9d3c76ebb9b093803bfa16a34e7c797ad9625d8cae0947af89ff62f635c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f019e9d3c76ebb9b093803bfa16a34e7c797ad9625d8cae0947af89ff62f635c->enter($__internal_f019e9d3c76ebb9b093803bfa16a34e7c797ad9625d8cae0947af89ff62f635c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/bg.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_f019e9d3c76ebb9b093803bfa16a34e7c797ad9625d8cae0947af89ff62f635c->leave($__internal_f019e9d3c76ebb9b093803bfa16a34e7c797ad9625d8cae0947af89ff62f635c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/bg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

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
", "node_modules/parsleyjs/src/i18n/bg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/bg.js");
    }
}
