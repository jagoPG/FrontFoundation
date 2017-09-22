<?php

/* node_modules/parsleyjs/dist/i18n/sv.extra.js */
class __TwigTemplate_22984488e19e29bab5d9d981a08fed13c683f0e896732741390c22f4960d0fbb extends Twig_Template
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
        $__internal_7b7cbd93a0233db888b0b19985b18d15e4123685130d424adaa1e6f88829c501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7cbd93a0233db888b0b19985b18d15e4123685130d424adaa1e6f88829c501->enter($__internal_7b7cbd93a0233db888b0b19985b18d15e4123685130d424adaa1e6f88829c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/sv.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sv', {
  dateiso: \"Ange ett giltigt datum (ÅÅÅÅ-MM-DD).\"
});
";
        
        $__internal_7b7cbd93a0233db888b0b19985b18d15e4123685130d424adaa1e6f88829c501->leave($__internal_7b7cbd93a0233db888b0b19985b18d15e4123685130d424adaa1e6f88829c501_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/sv.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('sv', {
  dateiso: \"Ange ett giltigt datum (ÅÅÅÅ-MM-DD).\"
});
", "node_modules/parsleyjs/dist/i18n/sv.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/sv.extra.js");
    }
}
