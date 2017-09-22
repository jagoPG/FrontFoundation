<?php

/* node_modules/jquery/src/ajax/parseXML.js */
class __TwigTemplate_b111d94239bc55edea8953e621c0690e1e348f9ba3798edd779875799804521f extends Twig_Template
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
        $__internal_f11eb408e06128e1f7d63e979b0938c791e5b71b4c038ebcce5304738db38d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11eb408e06128e1f7d63e979b0938c791e5b71b4c038ebcce5304738db38d43->enter($__internal_f11eb408e06128e1f7d63e979b0938c791e5b71b4c038ebcce5304738db38d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/ajax/parseXML.js"));

        // line 1
        echo "define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE 9 - 11 only
\t// IE throws on parseFromString with invalid input.
\ttry {
\t\txml = ( new window.DOMParser() ).parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};

return jQuery.parseXML;

} );
";
        
        $__internal_f11eb408e06128e1f7d63e979b0938c791e5b71b4c038ebcce5304738db38d43->leave($__internal_f11eb408e06128e1f7d63e979b0938c791e5b71b4c038ebcce5304738db38d43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/ajax/parseXML.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
\tvar xml;
\tif ( !data || typeof data !== \"string\" ) {
\t\treturn null;
\t}

\t// Support: IE 9 - 11 only
\t// IE throws on parseFromString with invalid input.
\ttry {
\t\txml = ( new window.DOMParser() ).parseFromString( data, \"text/xml\" );
\t} catch ( e ) {
\t\txml = undefined;
\t}

\tif ( !xml || xml.getElementsByTagName( \"parsererror\" ).length ) {
\t\tjQuery.error( \"Invalid XML: \" + data );
\t}
\treturn xml;
};

return jQuery.parseXML;

} );
", "node_modules/jquery/src/ajax/parseXML.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/ajax/parseXML.js");
    }
}
