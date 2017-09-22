<?php

/* node_modules/parsleyjs/src/i18n/fi.extra.js */
class __TwigTemplate_6c1dccf364fde958098fab82036c46e5bcf9bf158c4a468c1b136c8f71568761 extends Twig_Template
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
        $__internal_ad7e80ba2ae82cdc626882912f6288e40e4e2b5c62e45b2cecb54470f2deeac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7e80ba2ae82cdc626882912f6288e40e4e2b5c62e45b2cecb54470f2deeac9->enter($__internal_ad7e80ba2ae82cdc626882912f6288e40e4e2b5c62e45b2cecb54470f2deeac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/i18n/fi.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('fi', {
  dateiso: \"Sy&ouml;t&auml; oikea p&auml;iv&auml;m&auml;&auml;r&auml; (YYYY-MM-DD).\"
});
";
        
        $__internal_ad7e80ba2ae82cdc626882912f6288e40e4e2b5c62e45b2cecb54470f2deeac9->leave($__internal_ad7e80ba2ae82cdc626882912f6288e40e4e2b5c62e45b2cecb54470f2deeac9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/i18n/fi.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
import Parsley from '../parsley';

Parsley.addMessages('fi', {
  dateiso: \"Sy&ouml;t&auml; oikea p&auml;iv&auml;m&auml;&auml;r&auml; (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/src/i18n/fi.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/i18n/fi.extra.js");
    }
}
