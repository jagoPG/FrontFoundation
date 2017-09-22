<?php

/* node_modules/parsleyjs/src/i18n/uk.extra.js */
class __TwigTemplate_dbb30e1225ede835782ae109e0227a088de36aa3801d3c6504b2157185c62d39 extends Twig_Template
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
        $__internal_6e0748f82400888655a99241123eaffc9b66e11ad0fd9dbdb3d320ebbac852bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0748f82400888655a99241123eaffc9b66e11ad0fd9dbdb3d320ebbac852bb->enter($__internal_6e0748f82400888655a99241123eaffc9b66e11ad0fd9dbdb3d320ebbac852bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/uk.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('uk', {
  dateiso:  \"Це значення має бути коректною датою (РРРР-ММ-ДД).\",
  minwords: \"Це значення повинно містити не менше %s слів.\",
  maxwords: \"Це значення повинно містити не більше %s слів.\",
  words:    \"Це значення повинно містити від %s до %s слів.\"
});
";
        
        $__internal_6e0748f82400888655a99241123eaffc9b66e11ad0fd9dbdb3d320ebbac852bb->leave($__internal_6e0748f82400888655a99241123eaffc9b66e11ad0fd9dbdb3d320ebbac852bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/uk.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('uk', {
  dateiso:  \"Це значення має бути коректною датою (РРРР-ММ-ДД).\",
  minwords: \"Це значення повинно містити не менше %s слів.\",
  maxwords: \"Це значення повинно містити не більше %s слів.\",
  words:    \"Це значення повинно містити від %s до %s слів.\"
});
", "node_modules/parsleyjs/src/i18n/uk.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/uk.extra.js");
    }
}
