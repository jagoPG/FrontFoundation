<?php

/* node_modules/parsleyjs/bower_components/jquery/src/event/support.js */
class __TwigTemplate_99d6c1ed4f021be884bf7e9937499d194340f2a823d5c1eb976ba1a7e055654b extends Twig_Template
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
        $__internal_ef221474908f45c4a6ca64380586f45389d2454ce4113e55d507236f04813c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef221474908f45c4a6ca64380586f45389d2454ce4113e55d507236f04813c66->enter($__internal_ef221474908f45c4a6ca64380586f45389d2454ce4113e55d507236f04813c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/event/support.js"));

        // line 1
        echo "define([
\t\"../var/support\"
], function( support ) {

support.focusinBubbles = \"onfocusin\" in window;

return support;

});
";
        
        $__internal_ef221474908f45c4a6ca64380586f45389d2454ce4113e55d507236f04813c66->leave($__internal_ef221474908f45c4a6ca64380586f45389d2454ce4113e55d507236f04813c66_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/event/support.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../var/support\"
], function( support ) {

support.focusinBubbles = \"onfocusin\" in window;

return support;

});
", "node_modules/parsleyjs/bower_components/jquery/src/event/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/event/support.js");
    }
}
