<?php

/* node_modules/parsleyjs/src/i18n/ja.js */
class __TwigTemplate_1468cbd4b6b3e51c80b99c19ce6b203e9caed0d8efdfcde078b55d243f0872b5 extends Twig_Template
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
        $__internal_7cbbe0ce83888a6b57cd7b6972080bca9c67c76b96e445a3affcb5141eeffd96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbbe0ce83888a6b57cd7b6972080bca9c67c76b96e445a3affcb5141eeffd96->enter($__internal_7cbbe0ce83888a6b57cd7b6972080bca9c67c76b96e445a3affcb5141eeffd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ja.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ja', {
  defaultMessage: \"無効な値です。\",
  type: {
    email:        \"有効なメールアドレスを入力してください。\",
    url:          \"有効なURLを入力してください。\",
    number:       \"数値を入力してください。\",
    integer:      \"整数を入力してください。\",
    digits:       \"数字を入力してください。\",
    alphanum:     \"英数字を入力してください。\"
  },
  notblank:       \"この値を入力してください\",
  required:       \"この値は必須です。\",
  pattern:        \"この値は無効です。\",
  min:            \"%s 以上の値にしてください。\",
  max:            \"%s 以下の値にしてください。\",
  range:          \"%s から %s の値にしてください。\",
  minlength:      \"%s 文字以上で入力してください。\",
  maxlength:      \"%s 文字以下で入力してください。\",
  length:         \"%s から %s 文字の間で入力してください。\",
  mincheck:       \"%s 個以上選択してください。\",
  maxcheck:       \"%s 個以下選択してください。\",
  check:          \"%s から %s 個選択してください。\",
  equalto:        \"値が違います。\"
});

Parsley.setLocale('ja');
";
        
        $__internal_7cbbe0ce83888a6b57cd7b6972080bca9c67c76b96e445a3affcb5141eeffd96->leave($__internal_7cbbe0ce83888a6b57cd7b6972080bca9c67c76b96e445a3affcb5141eeffd96_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ja.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ja', {
  defaultMessage: \"無効な値です。\",
  type: {
    email:        \"有効なメールアドレスを入力してください。\",
    url:          \"有効なURLを入力してください。\",
    number:       \"数値を入力してください。\",
    integer:      \"整数を入力してください。\",
    digits:       \"数字を入力してください。\",
    alphanum:     \"英数字を入力してください。\"
  },
  notblank:       \"この値を入力してください\",
  required:       \"この値は必須です。\",
  pattern:        \"この値は無効です。\",
  min:            \"%s 以上の値にしてください。\",
  max:            \"%s 以下の値にしてください。\",
  range:          \"%s から %s の値にしてください。\",
  minlength:      \"%s 文字以上で入力してください。\",
  maxlength:      \"%s 文字以下で入力してください。\",
  length:         \"%s から %s 文字の間で入力してください。\",
  mincheck:       \"%s 個以上選択してください。\",
  maxcheck:       \"%s 個以下選択してください。\",
  check:          \"%s から %s 個選択してください。\",
  equalto:        \"値が違います。\"
});

Parsley.setLocale('ja');
", "node_modules/parsleyjs/src/i18n/ja.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ja.js");
    }
}
