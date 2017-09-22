<?php

/* node_modules/parsleyjs/dist/i18n/he.extra.js */
class __TwigTemplate_679f0316ca899e82e5dc51ee4918903937e3bcbb0ff2ceb75bb6cf545628e2e8 extends Twig_Template
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
        $__internal_65fafde58b8006664d5142bb3300959976b2091675007fdf0153975c0f38f129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fafde58b8006664d5142bb3300959976b2091675007fdf0153975c0f38f129->enter($__internal_65fafde58b8006664d5142bb3300959976b2091675007fdf0153975c0f38f129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/he.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('he', {
  dateiso: \"ערך זה צריך להיות תאריך בפורמט (YYYY-MM-DD).\"
});
";
        
        $__internal_65fafde58b8006664d5142bb3300959976b2091675007fdf0153975c0f38f129->leave($__internal_65fafde58b8006664d5142bb3300959976b2091675007fdf0153975c0f38f129_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/he.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('he', {
  dateiso: \"ערך זה צריך להיות תאריך בפורמט (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/dist/i18n/he.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/he.extra.js");
    }
}
