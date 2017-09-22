<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/curCSS.js */
class __TwigTemplate_7064ed72311fedfa29f0609ab389f7cf85915c96d2e062402814cedd19ec96c3 extends Twig_Template
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
        $__internal_83cb918d65b48baf628c1d5027313fb5a8cb925acb7c84de768afdcc43be03c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cb918d65b48baf628c1d5027313fb5a8cb925acb7c84de768afdcc43be03c5->enter($__internal_83cb918d65b48baf628c1d5027313fb5a8cb925acb7c84de768afdcc43be03c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/curCSS.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"./var/rnumnonpx\",
\t\"./var/rmargin\",
\t\"./var/getStyles\",
\t\"../selector\" // contains
], function( jQuery, rnumnonpx, rmargin, getStyles ) {

function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// Support: IE9
\t// getPropertyValue is only needed for .css('filter') (#12537)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];
\t}

\tif ( computed ) {

\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// Support: iOS < 6
\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// iOS < 6 (at least) returns percentage for a larger set of values, but width seems to be reliably pixels
\t\t// this is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values
\t\tif ( rnumnonpx.test( ret ) && rmargin.test( name ) ) {

\t\t\t// Remember the original values
\t\t\twidth = style.width;
\t\t\tminWidth = style.minWidth;
\t\t\tmaxWidth = style.maxWidth;

\t\t\t// Put in the new values to get a computed value out
\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\tret = computed.width;

\t\t\t// Revert the changed values
\t\t\tstyle.width = width;
\t\t\tstyle.minWidth = minWidth;
\t\t\tstyle.maxWidth = maxWidth;
\t\t}
\t}

\treturn ret !== undefined ?
\t\t// Support: IE
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}

return curCSS;
});
";
        
        $__internal_83cb918d65b48baf628c1d5027313fb5a8cb925acb7c84de768afdcc43be03c5->leave($__internal_83cb918d65b48baf628c1d5027313fb5a8cb925acb7c84de768afdcc43be03c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/curCSS.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"./var/rnumnonpx\",
\t\"./var/rmargin\",
\t\"./var/getStyles\",
\t\"../selector\" // contains
], function( jQuery, rnumnonpx, rmargin, getStyles ) {

function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// Support: IE9
\t// getPropertyValue is only needed for .css('filter') (#12537)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];
\t}

\tif ( computed ) {

\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// Support: iOS < 6
\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// iOS < 6 (at least) returns percentage for a larger set of values, but width seems to be reliably pixels
\t\t// this is against the CSSOM draft spec: http://dev.w3.org/csswg/cssom/#resolved-values
\t\tif ( rnumnonpx.test( ret ) && rmargin.test( name ) ) {

\t\t\t// Remember the original values
\t\t\twidth = style.width;
\t\t\tminWidth = style.minWidth;
\t\t\tmaxWidth = style.maxWidth;

\t\t\t// Put in the new values to get a computed value out
\t\t\tstyle.minWidth = style.maxWidth = style.width = ret;
\t\t\tret = computed.width;

\t\t\t// Revert the changed values
\t\t\tstyle.width = width;
\t\t\tstyle.minWidth = minWidth;
\t\t\tstyle.maxWidth = maxWidth;
\t\t}
\t}

\treturn ret !== undefined ?
\t\t// Support: IE
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}

return curCSS;
});
", "node_modules/parsleyjs/bower_components/jquery/src/css/curCSS.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/curCSS.js");
    }
}
