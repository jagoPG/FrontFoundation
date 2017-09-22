<?php

/* node_modules/parsleyjs/src/i18n/ru.extra.js */
class __TwigTemplate_937a96abf2d3185572c8c329f40fc232c3583a7844620f813d3de93af2438ec1 extends Twig_Template
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
        $__internal_d66aee90c45ecc0c6b8d258527a516c213e09e42a90fb98e0dd46a8841dbad19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66aee90c45ecc0c6b8d258527a516c213e09e42a90fb98e0dd46a8841dbad19->enter($__internal_d66aee90c45ecc0c6b8d258527a516c213e09e42a90fb98e0dd46a8841dbad19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/ru.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('ru', {
  dateiso:  \"Это значение должно быть корректной датой (ГГГГ-ММ-ДД).\",
  minwords: \"Это значение должно содержать не менее %s слов.\",
  maxwords: \"Это значение должно содержать не более %s слов.\",
  words:    \"Это значение должно содержать от %s до %s слов.\",
  gt:       \"Это значение должно быть больше.\",
  gte:      \"Это значение должно быть больше или равно.\",
  lt:       \"Это значение должно быть меньше.\",
  lte:      \"Это значение должно быть меньше или равно.\",
  notequalto: \"Это значение должно отличаться.\"
});
";
        
        $__internal_d66aee90c45ecc0c6b8d258527a516c213e09e42a90fb98e0dd46a8841dbad19->leave($__internal_d66aee90c45ecc0c6b8d258527a516c213e09e42a90fb98e0dd46a8841dbad19_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/ru.extra.js";
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
  dateiso:  \"Это значение должно быть корректной датой (ГГГГ-ММ-ДД).\",
  minwords: \"Это значение должно содержать не менее %s слов.\",
  maxwords: \"Это значение должно содержать не более %s слов.\",
  words:    \"Это значение должно содержать от %s до %s слов.\",
  gt:       \"Это значение должно быть больше.\",
  gte:      \"Это значение должно быть больше или равно.\",
  lt:       \"Это значение должно быть меньше.\",
  lte:      \"Это значение должно быть меньше или равно.\",
  notequalto: \"Это значение должно отличаться.\"
});
", "node_modules/parsleyjs/src/i18n/ru.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/ru.extra.js");
    }
}
