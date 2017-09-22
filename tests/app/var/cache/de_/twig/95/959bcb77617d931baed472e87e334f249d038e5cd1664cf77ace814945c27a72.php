<?php

/* node_modules/parsleyjs/dist/i18n/id.extra.js */
class __TwigTemplate_cf3c85f4466c3bd573005f165807a1292dbc0cd385b171b34c57f49241944d1e extends Twig_Template
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
        $__internal_e0a1c3052619e80df855bf1dcd9889b38a981197ef947f5ebde214bb14ac4bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a1c3052619e80df855bf1dcd9889b38a981197ef947f5ebde214bb14ac4bfc->enter($__internal_e0a1c3052619e80df855bf1dcd9889b38a981197ef947f5ebde214bb14ac4bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/dist/i18n/id.extra.js"));

        // line 1
        echo "// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('id', {
  dateiso: \"Harus tanggal yang valid (YYYY-MM-DD).\"
});
";
        
        $__internal_e0a1c3052619e80df855bf1dcd9889b38a981197ef947f5ebde214bb14ac4bfc->leave($__internal_e0a1c3052619e80df855bf1dcd9889b38a981197ef947f5ebde214bb14ac4bfc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/dist/i18n/id.extra.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('id', {
  dateiso: \"Harus tanggal yang valid (YYYY-MM-DD).\"
});
", "node_modules/parsleyjs/dist/i18n/id.extra.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/dist/i18n/id.extra.js");
    }
}
