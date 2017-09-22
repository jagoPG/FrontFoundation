<?php

/* node_modules/parsleyjs/dist/i18n/uk.extra.js */
class __TwigTemplate_ca4d62fe5495eaaf54a4e73f34775c7db12d94900019cc7b2a9e55c2bc1db0c2 extends Twig_Template
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
        $__internal_8663c39e43d23b9390f413574c1ba3a9ece1b8d2e765c64973a7e39a210af873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8663c39e43d23b9390f413574c1ba3a9ece1b8d2e765c64973a7e39a210af873->enter($__internal_8663c39e43d23b9390f413574c1ba3a9ece1b8d2e765c64973a7e39a210af873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/uk.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('uk', {
  dateiso:  \"Це значення має бути коректною датою (РРРР-ММ-ДД).\",
  minwords: \"Це значення повинно містити не менше %s слів.\",
  maxwords: \"Це значення повинно містити не більше %s слів.\",
  words:    \"Це значення повинно містити від %s до %s слів.\"
});
";
        
        $__internal_8663c39e43d23b9390f413574c1ba3a9ece1b8d2e765c64973a7e39a210af873->leave($__internal_8663c39e43d23b9390f413574c1ba3a9ece1b8d2e765c64973a7e39a210af873_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/uk.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('uk', {
  dateiso:  \"Це значення має бути коректною датою (РРРР-ММ-ДД).\",
  minwords: \"Це значення повинно містити не менше %s слів.\",
  maxwords: \"Це значення повинно містити не більше %s слів.\",
  words:    \"Це значення повинно містити від %s до %s слів.\"
});
", "node_modules/parsleyjs/dist/i18n/uk.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/uk.extra.js");
    }
}
