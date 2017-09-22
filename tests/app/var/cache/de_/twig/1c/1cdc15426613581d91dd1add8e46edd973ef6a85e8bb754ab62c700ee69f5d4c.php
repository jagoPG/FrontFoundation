<?php

/* node_modules/parsleyjs/dist/i18n/ja.extra.js */
class __TwigTemplate_0aac922bbf76d500c99eead61fc9338b23bb9da24e7758491d0ec3c1a3c11ae3 extends Twig_Template
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
        $__internal_a39b9f4855c86d0f2ba546f2962df8f5e5ed51272d92263ce6298c0599b4c480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39b9f4855c86d0f2ba546f2962df8f5e5ed51272d92263ce6298c0599b4c480->enter($__internal_a39b9f4855c86d0f2ba546f2962df8f5e5ed51272d92263ce6298c0599b4c480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/ja.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('ja', {
  dateiso:  \"有効な日付を入力してください。 (YYYY-MM-DD).\",
  minwords: \"語句が短すぎます。 %s 語以上で入力してください。\",
  maxwords: \"語句が長すぎます。 %s 語以内で入力してください。\",
  words:    \"語句の長さが正しくありません。 %s 語から %s 語の間で入力してください。\",
  gt:       \"より大きい値を入力してください。\",
  gte:      \"より大きいか、同じ値を入力してください。\",
  lt:       \"より小さい値を入力してください。\",
  lte:      \"より小さいか、同じ値を入力してください。\",
  notequalto: \"異なる値を入力してください。\"
});
";
        
        $__internal_a39b9f4855c86d0f2ba546f2962df8f5e5ed51272d92263ce6298c0599b4c480->leave($__internal_a39b9f4855c86d0f2ba546f2962df8f5e5ed51272d92263ce6298c0599b4c480_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/ja.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('ja', {
  dateiso:  \"有効な日付を入力してください。 (YYYY-MM-DD).\",
  minwords: \"語句が短すぎます。 %s 語以上で入力してください。\",
  maxwords: \"語句が長すぎます。 %s 語以内で入力してください。\",
  words:    \"語句の長さが正しくありません。 %s 語から %s 語の間で入力してください。\",
  gt:       \"より大きい値を入力してください。\",
  gte:      \"より大きいか、同じ値を入力してください。\",
  lt:       \"より小さい値を入力してください。\",
  lte:      \"より小さいか、同じ値を入力してください。\",
  notequalto: \"異なる値を入力してください。\"
});
", "node_modules/parsleyjs/dist/i18n/ja.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/ja.extra.js");
    }
}
