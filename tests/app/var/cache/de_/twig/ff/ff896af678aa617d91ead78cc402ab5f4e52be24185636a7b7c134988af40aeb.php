<?php

/* node_modules/parsleyjs/dist/i18n/ru.js */
class __TwigTemplate_f0b92c169b31745976e917b4f93f1b7647122e4dbd42235caf2b798a82c4797c extends Twig_Template
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
        $__internal_c5043f024ac623a2e6f3ee56bb03fc1efd0006ee3ab4701e9e5688871a989423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5043f024ac623a2e6f3ee56bb03fc1efd0006ee3ab4701e9e5688871a989423->enter($__internal_c5043f024ac623a2e6f3ee56bb03fc1efd0006ee3ab4701e9e5688871a989423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/ru.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_c5043f024ac623a2e6f3ee56bb03fc1efd0006ee3ab4701e9e5688871a989423->leave($__internal_c5043f024ac623a2e6f3ee56bb03fc1efd0006ee3ab4701e9e5688871a989423_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/ru.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/ru.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/ru.js");
    }
}
