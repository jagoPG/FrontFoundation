<?php

/* node_modules/parsleyjs/bower_components/jquery/src/core/var/rsingleTag.js */
class __TwigTemplate_97670ca205f219a615c02a12eb074d5ac31f9080ca4420e9df40dbb3bf03132e extends Twig_Template
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
        $__internal_88d5d670d15ec411672d676ac53ad7fcbcd2242782a52cd139b68eb0103a394c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d5d670d15ec411672d676ac53ad7fcbcd2242782a52cd139b68eb0103a394c->enter($__internal_88d5d670d15ec411672d676ac53ad7fcbcd2242782a52cd139b68eb0103a394c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/core/var/rsingleTag.js"));

        // line 1
        echo "define(function() {
\t// Match a standalone tag
\treturn (/^<(\\w+)\\s*\\/?>(?:<\\/\\1>|)\$/);
});
";
        
        $__internal_88d5d670d15ec411672d676ac53ad7fcbcd2242782a52cd139b68eb0103a394c->leave($__internal_88d5d670d15ec411672d676ac53ad7fcbcd2242782a52cd139b68eb0103a394c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/core/var/rsingleTag.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define(function() {
\t// Match a standalone tag
\treturn (/^<(\\w+)\\s*\\/?>(?:<\\/\\1>|)\$/);
});
", "node_modules/parsleyjs/bower_components/jquery/src/core/var/rsingleTag.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/core/var/rsingleTag.js");
    }
}
