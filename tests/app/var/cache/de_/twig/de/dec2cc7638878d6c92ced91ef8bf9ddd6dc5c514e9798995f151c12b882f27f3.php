<?php

/* node_modules/parsleyjs/dist/i18n/fi.extra.js */
class __TwigTemplate_57b5282308ad03e84cc79d77c0e30dbcf186f5acc6e767db564749104f498bcc extends Twig_Template
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
        $__internal_f26598277cc6dec912873af19bb25a8fa4e7d331c6238c92bf161533f8c566f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26598277cc6dec912873af19bb25a8fa4e7d331c6238c92bf161533f8c566f6->enter($__internal_f26598277cc6dec912873af19bb25a8fa4e7d331c6238c92bf161533f8c566f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/fi.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('fi', {
  dateiso: \"Sy&ouml;t&auml; oikea p&auml;iv&auml;m&auml;&auml;r&auml; (YYYY-MM-DD).\"
});
";
        
        $__internal_f26598277cc6dec912873af19bb25a8fa4e7d331c6238c92bf161533f8c566f6->leave($__internal_f26598277cc6dec912873af19bb25a8fa4e7d331c6238c92bf161533f8c566f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/fi.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('fi', {
  dateiso: \"Sy&ouml;t&auml; oikea p&auml;iv&auml;m&auml;&auml;r&auml; (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/dist/i18n/fi.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/fi.extra.js");
    }
}
