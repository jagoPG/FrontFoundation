<?php

/* node_modules/jquery/src/css/curCSS.js */
class __TwigTemplate_aba02f447e653f3162d7c996f4946260ad705aab6e2054421b319f010e8ed2c8 extends Twig_Template
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
        $__internal_212dfec407dba63bed7a90725d29fbcd28dbd100940bf47ebda519fb0d70f470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212dfec407dba63bed7a90725d29fbcd28dbd100940bf47ebda519fb0d70f470->enter($__internal_212dfec407dba63bed7a90725d29fbcd28dbd100940bf47ebda519fb0d70f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/curCSS.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"./var/rnumnonpx\",
\t\"./var/rmargin\",
\t\"./var/getStyles\",
\t\"./support\",
\t\"../selector\" // Get jQuery.contains
], function( jQuery, rnumnonpx, rmargin, getStyles, support ) {

\"use strict\";

function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,

\t\t// Support: Firefox 51+
\t\t// Retrieving style before computed somehow
\t\t// fixes an issue with getting wrong values
\t\t// on detached elements
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// getPropertyValue is needed for:
\t//   .css('filter') (IE 9 only, #12537)
\t//   .css('--customProperty) (#3144)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];

\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// Android Browser returns percentage for some values,
\t\t// but width seems to be reliably pixels.
\t\t// This is against the CSSOM draft spec:
\t\t// https://drafts.csswg.org/cssom/#resolved-values
\t\tif ( !support.pixelMarginRight() && rnumnonpx.test( ret ) && rmargin.test( name ) ) {

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

\t\t// Support: IE <=9 - 11 only
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}

return curCSS;
} );
";
        
        $__internal_212dfec407dba63bed7a90725d29fbcd28dbd100940bf47ebda519fb0d70f470->leave($__internal_212dfec407dba63bed7a90725d29fbcd28dbd100940bf47ebda519fb0d70f470_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/curCSS.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"./var/rnumnonpx\",
\t\"./var/rmargin\",
\t\"./var/getStyles\",
\t\"./support\",
\t\"../selector\" // Get jQuery.contains
], function( jQuery, rnumnonpx, rmargin, getStyles, support ) {

\"use strict\";

function curCSS( elem, name, computed ) {
\tvar width, minWidth, maxWidth, ret,

\t\t// Support: Firefox 51+
\t\t// Retrieving style before computed somehow
\t\t// fixes an issue with getting wrong values
\t\t// on detached elements
\t\tstyle = elem.style;

\tcomputed = computed || getStyles( elem );

\t// getPropertyValue is needed for:
\t//   .css('filter') (IE 9 only, #12537)
\t//   .css('--customProperty) (#3144)
\tif ( computed ) {
\t\tret = computed.getPropertyValue( name ) || computed[ name ];

\t\tif ( ret === \"\" && !jQuery.contains( elem.ownerDocument, elem ) ) {
\t\t\tret = jQuery.style( elem, name );
\t\t}

\t\t// A tribute to the \"awesome hack by Dean Edwards\"
\t\t// Android Browser returns percentage for some values,
\t\t// but width seems to be reliably pixels.
\t\t// This is against the CSSOM draft spec:
\t\t// https://drafts.csswg.org/cssom/#resolved-values
\t\tif ( !support.pixelMarginRight() && rnumnonpx.test( ret ) && rmargin.test( name ) ) {

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

\t\t// Support: IE <=9 - 11 only
\t\t// IE returns zIndex value as an integer.
\t\tret + \"\" :
\t\tret;
}

return curCSS;
} );
", "node_modules/jquery/src/css/curCSS.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/curCSS.js");
    }
}
