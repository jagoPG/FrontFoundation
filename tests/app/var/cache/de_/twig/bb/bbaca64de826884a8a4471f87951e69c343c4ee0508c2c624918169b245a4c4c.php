<?php

/* node_modules/parsleyjs/dist/i18n/zh_tw.js */
class __TwigTemplate_ff1e91c3ede73b4e92010a6898846c991d5c4accb08eff6b4f2609d43e6ee90a extends Twig_Template
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
        $__internal_281e2a558eee24d0faacdb9a21a25bd543d2bd8e3048121f3cf88006eab1f2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281e2a558eee24d0faacdb9a21a25bd543d2bd8e3048121f3cf88006eab1f2b1->enter($__internal_281e2a558eee24d0faacdb9a21a25bd543d2bd8e3048121f3cf88006eab1f2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/zh_tw.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('zh-tw', {
  defaultMessage: \"這個值似乎是無效的。\",
  type: {
    email:        \"請輸入一個正確的電子郵件地址。\",
    url:          \"請輸入一個有效的網址。\",
    number:       \"請輸入一個數字。\",
    integer:      \"請輸入一個整數。\",
    digits:       \"這個欄位只接受數字。\",
    alphanum:     \"這個欄位只接受英文字母或是數字。\"
  },
  notblank:       \"這個欄位不能為空白。\",
  required:       \"這個欄位必須填寫。\",
  pattern:        \"這個值似乎是無效的。\",
  min:            \"輸入的值應該大於或等於 %s\",
  max:            \"輸入的值應該小於或等於 %s\",
  range:          \"輸入的值應該在 %s 和 %s 之間。\",
  minlength:      \"輸入的值至少要有 %s 個字元。\",
  maxlength:      \"輸入的值最多可以有 %s 個字元。\",
  length:         \"字元長度應該在 %s 和 %s 之間。\",
  mincheck:       \"你至少要選擇 %s 個項目。\",
  maxcheck:       \"你最多可選擇 %s 個項目。\",
  check:          \"你必須選擇 %s 到 %s 個項目。\",
  equalto:        \"輸入值不同。\"
});

Parsley.setLocale('zh-tw');
";
        
        $__internal_281e2a558eee24d0faacdb9a21a25bd543d2bd8e3048121f3cf88006eab1f2b1->leave($__internal_281e2a558eee24d0faacdb9a21a25bd543d2bd8e3048121f3cf88006eab1f2b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/zh_tw.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('zh-tw', {
  defaultMessage: \"這個值似乎是無效的。\",
  type: {
    email:        \"請輸入一個正確的電子郵件地址。\",
    url:          \"請輸入一個有效的網址。\",
    number:       \"請輸入一個數字。\",
    integer:      \"請輸入一個整數。\",
    digits:       \"這個欄位只接受數字。\",
    alphanum:     \"這個欄位只接受英文字母或是數字。\"
  },
  notblank:       \"這個欄位不能為空白。\",
  required:       \"這個欄位必須填寫。\",
  pattern:        \"這個值似乎是無效的。\",
  min:            \"輸入的值應該大於或等於 %s\",
  max:            \"輸入的值應該小於或等於 %s\",
  range:          \"輸入的值應該在 %s 和 %s 之間。\",
  minlength:      \"輸入的值至少要有 %s 個字元。\",
  maxlength:      \"輸入的值最多可以有 %s 個字元。\",
  length:         \"字元長度應該在 %s 和 %s 之間。\",
  mincheck:       \"你至少要選擇 %s 個項目。\",
  maxcheck:       \"你最多可選擇 %s 個項目。\",
  check:          \"你必須選擇 %s 到 %s 個項目。\",
  equalto:        \"輸入值不同。\"
});

Parsley.setLocale('zh-tw');
", "node_modules/parsleyjs/dist/i18n/zh_tw.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/zh_tw.js");
    }
}
