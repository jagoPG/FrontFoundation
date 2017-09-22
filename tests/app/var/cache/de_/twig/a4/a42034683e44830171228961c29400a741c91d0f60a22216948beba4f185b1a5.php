<?php

/* node_modules/parsleyjs/dist/i18n/zh_cn.js */
class __TwigTemplate_3553f73ed43f21907c3f3e584847e5982190c70b31a92355d18c4f80855fdbd4 extends Twig_Template
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
        $__internal_41d94a759943713b0beb910ad32900a33a9f664a752777e213a295cc574e4ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d94a759943713b0beb910ad32900a33a9f664a752777e213a295cc574e4ed3->enter($__internal_41d94a759943713b0beb910ad32900a33a9f664a752777e213a295cc574e4ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/zh_cn.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('zh-cn', {
  defaultMessage: \"不正确的值\",
  type: {
    email:        \"请输入一个有效的电子邮箱地址\",
    url:          \"请输入一个有效的链接\",
    number:       \"请输入正确的数字\",
    integer:      \"请输入正确的整数\",
    digits:       \"请输入正确的号码\",
    alphanum:     \"请输入字母或数字\"
  },
  notblank:       \"请输入值\",
  required:       \"必填项\",
  pattern:        \"格式不正确\",
  min:            \"输入值请大于或等于 %s\",
  max:            \"输入值请小于或等于 %s\",
  range:          \"输入值应该在 %s 到 %s 之间\",
  minlength:      \"请输入至少 %s 个字符\",
  maxlength:      \"请输入至多 %s 个字符\",
  length:         \"字符长度应该在 %s 到 %s 之间\",
  mincheck:       \"请至少选择 %s 个选项\",
  maxcheck:       \"请选择不超过 %s 个选项\",
  check:          \"请选择 %s 到 %s 个选项\",
  equalto:        \"输入值不同\"
});

Parsley.setLocale('zh-cn');
";
        
        $__internal_41d94a759943713b0beb910ad32900a33a9f664a752777e213a295cc574e4ed3->leave($__internal_41d94a759943713b0beb910ad32900a33a9f664a752777e213a295cc574e4ed3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/zh_cn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('zh-cn', {
  defaultMessage: \"不正确的值\",
  type: {
    email:        \"请输入一个有效的电子邮箱地址\",
    url:          \"请输入一个有效的链接\",
    number:       \"请输入正确的数字\",
    integer:      \"请输入正确的整数\",
    digits:       \"请输入正确的号码\",
    alphanum:     \"请输入字母或数字\"
  },
  notblank:       \"请输入值\",
  required:       \"必填项\",
  pattern:        \"格式不正确\",
  min:            \"输入值请大于或等于 %s\",
  max:            \"输入值请小于或等于 %s\",
  range:          \"输入值应该在 %s 到 %s 之间\",
  minlength:      \"请输入至少 %s 个字符\",
  maxlength:      \"请输入至多 %s 个字符\",
  length:         \"字符长度应该在 %s 到 %s 之间\",
  mincheck:       \"请至少选择 %s 个选项\",
  maxcheck:       \"请选择不超过 %s 个选项\",
  check:          \"请选择 %s 到 %s 个选项\",
  equalto:        \"输入值不同\"
});

Parsley.setLocale('zh-cn');
", "node_modules/parsleyjs/dist/i18n/zh_cn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/zh_cn.js");
    }
}
