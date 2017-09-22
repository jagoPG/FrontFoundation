<?php

/* node_modules/parsleyjs/src/i18n/ja.extra.js */
class __TwigTemplate_55abb36d58e41cc21ba7a517a11165982cd2530bd680b1d6cd167320962871e3 extends Twig_Template
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
        $__internal_64dbc75c5ce43da522a5a5078f831f2d1f961d4b33910f53648b9859a6aaec8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dbc75c5ce43da522a5a5078f831f2d1f961d4b33910f53648b9859a6aaec8a->enter($__internal_64dbc75c5ce43da522a5a5078f831f2d1f961d4b33910f53648b9859a6aaec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ja.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

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
        
        $__internal_64dbc75c5ce43da522a5a5078f831f2d1f961d4b33910f53648b9859a6aaec8a->leave($__internal_64dbc75c5ce43da522a5a5078f831f2d1f961d4b33910f53648b9859a6aaec8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ja.extra.js";
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
", "node_modules/parsleyjs/src/i18n/ja.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ja.extra.js");
    }
}
