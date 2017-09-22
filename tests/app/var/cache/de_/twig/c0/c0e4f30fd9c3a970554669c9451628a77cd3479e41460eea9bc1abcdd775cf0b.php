<?php

/* node_modules/parsleyjs/src/i18n/en.extra.js */
class __TwigTemplate_0ef43a48626eabb6f051b231f5e8ce6240b2da1a6053f93dd22d04c21bfdc22a extends Twig_Template
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
        $__internal_d482c850313eba6453f642dbf90becb5ca2327c833d074b78088ad42f5b79dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d482c850313eba6453f642dbf90becb5ca2327c833d074b78088ad42f5b79dd9->enter($__internal_d482c850313eba6453f642dbf90becb5ca2327c833d074b78088ad42f5b79dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/en.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('en', {
  dateiso:  \"This value should be a valid date (YYYY-MM-DD).\",
  minwords: \"This value is too short. It should have %s words or more.\",
  maxwords: \"This value is too long. It should have %s words or fewer.\",
  words:    \"This value length is invalid. It should be between %s and %s words long.\",
  gt:       \"This value should be greater.\",
  gte:      \"This value should be greater or equal.\",
  lt:       \"This value should be less.\",
  lte:      \"This value should be less or equal.\",
  notequalto: \"This value should be different.\"
});
";
        
        $__internal_d482c850313eba6453f642dbf90becb5ca2327c833d074b78088ad42f5b79dd9->leave($__internal_d482c850313eba6453f642dbf90becb5ca2327c833d074b78088ad42f5b79dd9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/en.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('en', {
  dateiso:  \"This value should be a valid date (YYYY-MM-DD).\",
  minwords: \"This value is too short. It should have %s words or more.\",
  maxwords: \"This value is too long. It should have %s words or fewer.\",
  words:    \"This value length is invalid. It should be between %s and %s words long.\",
  gt:       \"This value should be greater.\",
  gte:      \"This value should be greater or equal.\",
  lt:       \"This value should be less.\",
  lte:      \"This value should be less or equal.\",
  notequalto: \"This value should be different.\"
});
", "node_modules/parsleyjs/src/i18n/en.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/en.extra.js");
    }
}
