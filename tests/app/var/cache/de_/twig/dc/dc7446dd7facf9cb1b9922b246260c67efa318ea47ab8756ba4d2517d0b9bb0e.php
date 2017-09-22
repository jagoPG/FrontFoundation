<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/addGetHookIf.js */
class __TwigTemplate_51dd34cc0054640dc261af314da7c6250d4ae29b04ada3a2ece8b2ddde076c69 extends Twig_Template
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
        $__internal_b320d1a947a86837f513002c287d4f89e9a9b788067c7ca9ec8f42a75610b6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b320d1a947a86837f513002c287d4f89e9a9b788067c7ca9ec8f42a75610b6c1->enter($__internal_b320d1a947a86837f513002c287d4f89e9a9b788067c7ca9ec8f42a75610b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/addGetHookIf.js"));

        // line 1
        echo "define(function() {

function addGetHookIf( conditionFn, hookFn ) {
\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {
\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn (this.get = hookFn).apply( this, arguments );
\t\t}
\t};
}

return addGetHookIf;

});
";
        
        $__internal_b320d1a947a86837f513002c287d4f89e9a9b788067c7ca9ec8f42a75610b6c1->leave($__internal_b320d1a947a86837f513002c287d4f89e9a9b788067c7ca9ec8f42a75610b6c1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/addGetHookIf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define(function() {

function addGetHookIf( conditionFn, hookFn ) {
\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {
\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn (this.get = hookFn).apply( this, arguments );
\t\t}
\t};
}

return addGetHookIf;

});
", "node_modules/parsleyjs/bower_components/jquery/src/css/addGetHookIf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/addGetHookIf.js");
    }
}
