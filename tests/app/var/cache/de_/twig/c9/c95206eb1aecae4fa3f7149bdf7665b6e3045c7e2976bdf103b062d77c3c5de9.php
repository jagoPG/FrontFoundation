<?php

/* node_modules/parsleyjs/bower_components/jquery/src/manipulation/_evalUrl.js */
class __TwigTemplate_9c858c6e6744bfeebfa97128eae9b2286982ecf2ce57b819cc738dfa15c702f5 extends Twig_Template
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
        $__internal_8785ff1fc78cc2d8aabcaa91d92f141f3aabc6dea66009f4a094e43949f1b4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8785ff1fc78cc2d8aabcaa91d92f141f3aabc6dea66009f4a094e43949f1b4e0->enter($__internal_8785ff1fc78cc2d8aabcaa91d92f141f3aabc6dea66009f4a094e43949f1b4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/manipulation/_evalUrl.js"));

        // line 1
        echo "define([
\t\"../ajax\"
], function( jQuery ) {

jQuery._evalUrl = function( url ) {
\treturn jQuery.ajax({
\t\turl: url,
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tasync: false,
\t\tglobal: false,
\t\t\"throws\": true
\t});
};

return jQuery._evalUrl;

});
";
        
        $__internal_8785ff1fc78cc2d8aabcaa91d92f141f3aabc6dea66009f4a094e43949f1b4e0->leave($__internal_8785ff1fc78cc2d8aabcaa91d92f141f3aabc6dea66009f4a094e43949f1b4e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/manipulation/_evalUrl.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../ajax\"
], function( jQuery ) {

jQuery._evalUrl = function( url ) {
\treturn jQuery.ajax({
\t\turl: url,
\t\ttype: \"GET\",
\t\tdataType: \"script\",
\t\tasync: false,
\t\tglobal: false,
\t\t\"throws\": true
\t});
};

return jQuery._evalUrl;

});
", "node_modules/parsleyjs/bower_components/jquery/src/manipulation/_evalUrl.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/manipulation/_evalUrl.js");
    }
}
