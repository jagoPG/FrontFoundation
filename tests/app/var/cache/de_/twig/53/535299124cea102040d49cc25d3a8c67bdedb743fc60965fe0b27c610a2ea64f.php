<?php

/* node_modules/parsleyjs/src/i18n/ru.js */
class __TwigTemplate_89cc1a124c4ad6df13f539240940b68fc2a37c2cb184b4621af1f2f6c68ab114 extends Twig_Template
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
        $__internal_fd3148c4d124bf51c1b55cf56d20426ce32ec12be254c08ba4aa3aed0f8c256a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3148c4d124bf51c1b55cf56d20426ce32ec12be254c08ba4aa3aed0f8c256a->enter($__internal_fd3148c4d124bf51c1b55cf56d20426ce32ec12be254c08ba4aa3aed0f8c256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ru.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ru', {
  defaultMessage: \"Некорректное значение.\",
  type: {
    email:        \"Введите адрес электронной почты.\",
    url:          \"Введите URL адрес.\",
    number:       \"Введите число.\",
    integer:      \"Введите целое число.\",
    digits:       \"Введите только цифры.\",
    alphanum:     \"Введите буквенно-цифровое значение.\"
  },
  notblank:       \"Это поле должно быть заполнено.\",
  required:       \"Обязательное поле.\",
  pattern:        \"Это значение некорректно.\",
  min:            \"Это значение должно быть не менее чем %s.\",
  max:            \"Это значение должно быть не более чем %s.\",
  range:          \"Это значение должно быть от %s до %s.\",
  minlength:      \"Это значение должно содержать не менее %s символов.\",
  maxlength:      \"Это значение должно содержать не более %s символов.\",
  length:         \"Это значение должно содержать от %s до %s символов.\",
  mincheck:       \"Выберите не менее %s значений.\",
  maxcheck:       \"Выберите не более %s значений.\",
  check:          \"Выберите от %s до %s значений.\",
  equalto:        \"Это значение должно совпадать.\"
});

Parsley.setLocale('ru');
";
        
        $__internal_fd3148c4d124bf51c1b55cf56d20426ce32ec12be254c08ba4aa3aed0f8c256a->leave($__internal_fd3148c4d124bf51c1b55cf56d20426ce32ec12be254c08ba4aa3aed0f8c256a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ru.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ru', {
  defaultMessage: \"Некорректное значение.\",
  type: {
    email:        \"Введите адрес электронной почты.\",
    url:          \"Введите URL адрес.\",
    number:       \"Введите число.\",
    integer:      \"Введите целое число.\",
    digits:       \"Введите только цифры.\",
    alphanum:     \"Введите буквенно-цифровое значение.\"
  },
  notblank:       \"Это поле должно быть заполнено.\",
  required:       \"Обязательное поле.\",
  pattern:        \"Это значение некорректно.\",
  min:            \"Это значение должно быть не менее чем %s.\",
  max:            \"Это значение должно быть не более чем %s.\",
  range:          \"Это значение должно быть от %s до %s.\",
  minlength:      \"Это значение должно содержать не менее %s символов.\",
  maxlength:      \"Это значение должно содержать не более %s символов.\",
  length:         \"Это значение должно содержать от %s до %s символов.\",
  mincheck:       \"Выберите не менее %s значений.\",
  maxcheck:       \"Выберите не более %s значений.\",
  check:          \"Выберите от %s до %s значений.\",
  equalto:        \"Это значение должно совпадать.\"
});

Parsley.setLocale('ru');
", "node_modules/parsleyjs/src/i18n/ru.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ru.js");
    }
}
