<?php

/* node_modules/parsleyjs/dist/i18n/nl.extra.js */
class __TwigTemplate_652cb82b17fde5bec2173d275b11d87778d727dee6f289b2de4b2e18a699a8fb extends Twig_Template
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
        $__internal_970d351b46503031b11a3abf7cd5af5e137ca6ab8b929e67142d9bd7ab57758d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970d351b46503031b11a3abf7cd5af5e137ca6ab8b929e67142d9bd7ab57758d->enter($__internal_970d351b46503031b11a3abf7cd5af5e137ca6ab8b929e67142d9bd7ab57758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/nl.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('nl', {
  dateiso:  \"Deze waarde moet een datum in het volgende formaat zijn: (YYYY-MM-DD).\",
  minwords: \"Deze waarde moet minstens %s woorden bevatten.\",
  maxwords: \"Deze waarde mag maximaal %s woorden bevatten.\",
  words:    \"Deze waarde moet tussen de %s en %s woorden bevatten.\",
  gt:       \"Deze waarde moet groter dan %s zijn.\",
  lt:       \"Deze waarde moet kleiner dan %s zijn.\"
});
";
        
        $__internal_970d351b46503031b11a3abf7cd5af5e137ca6ab8b929e67142d9bd7ab57758d->leave($__internal_970d351b46503031b11a3abf7cd5af5e137ca6ab8b929e67142d9bd7ab57758d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/nl.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('nl', {
  dateiso:  \"Deze waarde moet een datum in het volgende formaat zijn: (YYYY-MM-DD).\",
  minwords: \"Deze waarde moet minstens %s woorden bevatten.\",
  maxwords: \"Deze waarde mag maximaal %s woorden bevatten.\",
  words:    \"Deze waarde moet tussen de %s en %s woorden bevatten.\",
  gt:       \"Deze waarde moet groter dan %s zijn.\",
  lt:       \"Deze waarde moet kleiner dan %s zijn.\"
});
", "node_modules/parsleyjs/dist/i18n/nl.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/nl.extra.js");
    }
}
