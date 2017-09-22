<?php

/* node_modules/parsleyjs/bower_components/jquery/src/ajax/parseXML.js */
class __TwigTemplate_f32fbc6419a58505941b58c00afc97b8b00e4934c07e11f2be6b063a550a0896 extends Twig_Template
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
        $__internal_4a6752c7834d6d202638c7a28868c60e1dde112f284e5deadeee09732b4b8b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6752c7834d6d202638c7a28868c60e1dde112f284e5deadeee09732b4b8b74->enter($__internal_4a6752c7834d6d202638c7a28868c60e1dde112f284e5deadeee09732b4b8b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/ajax/parseXML.js"));

        // line 1
        echo "define([
\t\"../core\"
], function( jQuery ) {

// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml, tmp;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE9
\ttry {
\t\ttmp = new DOMParser();
\t\txml = tmp.parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};

return jQuery.parseXML;

});
";
        
        $__internal_4a6752c7834d6d202638c7a28868c60e1dde112f284e5deadeee09732b4b8b74->leave($__internal_4a6752c7834d6d202638c7a28868c60e1dde112f284e5deadeee09732b4b8b74_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/ajax/parseXML.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\"
], function( jQuery ) {

// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml, tmp;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE9
\ttry {
\t\ttmp = new DOMParser();
\t\txml = tmp.parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};

return jQuery.parseXML;

});
", "node_modules/parsleyjs/bower_components/jquery/src/ajax/parseXML.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/ajax/parseXML.js");
    }
}
