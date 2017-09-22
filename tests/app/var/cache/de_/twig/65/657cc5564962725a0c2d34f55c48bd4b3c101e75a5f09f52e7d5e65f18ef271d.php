<?php

/* node_modules/parsleyjs/dist/i18n/en.extra.js */
class __TwigTemplate_4001c33c5772a2873ba2ea06a9546c25c20389d017962d44283c6a3b78b1340f extends Twig_Template
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
        $__internal_84bf799e51453170fc2eb50afd1833e0e72aa2c03043a70ba6e97d5c6e766c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bf799e51453170fc2eb50afd1833e0e72aa2c03043a70ba6e97d5c6e766c70->enter($__internal_84bf799e51453170fc2eb50afd1833e0e72aa2c03043a70ba6e97d5c6e766c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/en.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

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
        
        $__internal_84bf799e51453170fc2eb50afd1833e0e72aa2c03043a70ba6e97d5c6e766c70->leave($__internal_84bf799e51453170fc2eb50afd1833e0e72aa2c03043a70ba6e97d5c6e766c70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/en.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

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
", "node_modules/parsleyjs/dist/i18n/en.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/en.extra.js");
    }
}
