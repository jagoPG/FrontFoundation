<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/support.js */
class __TwigTemplate_1811cd8790db12c7bd985abc4fc59457c23fdb997643a19f9e5e9bcca682508d extends Twig_Template
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
        $__internal_8adc381bdcf9f08df525ba59accabea4fa2d907bdc07ecbab5e2b2c33083e758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adc381bdcf9f08df525ba59accabea4fa2d907bdc07ecbab5e2b2c33083e758->enter($__internal_8adc381bdcf9f08df525ba59accabea4fa2d907bdc07ecbab5e2b2c33083e758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/support.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../var/support\"
], function( jQuery, support ) {

(function() {
\tvar pixelPositionVal, boxSizingReliableVal,
\t\tdocElem = document.documentElement,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE9-11+
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tcontainer.style.cssText = \"border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;\" +
\t\t\"position:absolute\";
\tcontainer.appendChild( div );

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computePixelPositionAndBoxSizingReliable() {
\t\tdiv.style.cssText =
\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t// Vendor-prefix box-sizing
\t\t\t\"-webkit-box-sizing:border-box;-moz-box-sizing:border-box;\" +
\t\t\t\"box-sizing:border-box;display:block;margin-top:1%;top:1%;\" +
\t\t\t\"border:1px;padding:1px;width:4px;position:absolute\";
\t\tdiv.innerHTML = \"\";
\t\tdocElem.appendChild( container );

\t\tvar divStyle = window.getComputedStyle( div, null );
\t\tpixelPositionVal = divStyle.top !== \"1%\";
\t\tboxSizingReliableVal = divStyle.width === \"4px\";

\t\tdocElem.removeChild( container );
\t}

\t// Support: node.js jsdom
\t// Don't assume that getComputedStyle is a property of the global object
\tif ( window.getComputedStyle ) {
\t\tjQuery.extend( support, {
\t\t\tpixelPosition: function() {

\t\t\t\t// This test is executed only once but we still do memoizing
\t\t\t\t// since we can use the boxSizingReliable pre-computing.
\t\t\t\t// No need to check if the test was already performed, though.
\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\treturn pixelPositionVal;
\t\t\t},
\t\t\tboxSizingReliable: function() {
\t\t\t\tif ( boxSizingReliableVal == null ) {
\t\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\t}
\t\t\t\treturn boxSizingReliableVal;
\t\t\t},
\t\t\treliableMarginRight: function() {

\t\t\t\t// Support: Android 2.3
\t\t\t\t// Check if div with explicit width and no margin-right incorrectly
\t\t\t\t// gets computed margin-right based on width of container. (#3333)
\t\t\t\t// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
\t\t\t\t// This support function is only executed once so no memoizing is needed.
\t\t\t\tvar ret,
\t\t\t\t\tmarginDiv = div.appendChild( document.createElement( \"div\" ) );

\t\t\t\t// Reset CSS: box-sizing; display; margin; border; padding
\t\t\t\tmarginDiv.style.cssText = div.style.cssText =
\t\t\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t\t\t// Vendor-prefix box-sizing
\t\t\t\t\t\"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;\" +
\t\t\t\t\t\"box-sizing:content-box;display:block;margin:0;border:0;padding:0\";
\t\t\t\tmarginDiv.style.marginRight = marginDiv.style.width = \"0\";
\t\t\t\tdiv.style.width = \"1px\";
\t\t\t\tdocElem.appendChild( container );

\t\t\t\tret = !parseFloat( window.getComputedStyle( marginDiv, null ).marginRight );

\t\t\t\tdocElem.removeChild( container );
\t\t\t\tdiv.removeChild( marginDiv );

\t\t\t\treturn ret;
\t\t\t}
\t\t});
\t}
})();

return support;

});
";
        
        $__internal_8adc381bdcf9f08df525ba59accabea4fa2d907bdc07ecbab5e2b2c33083e758->leave($__internal_8adc381bdcf9f08df525ba59accabea4fa2d907bdc07ecbab5e2b2c33083e758_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/support.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../var/support\"
], function( jQuery, support ) {

(function() {
\tvar pixelPositionVal, boxSizingReliableVal,
\t\tdocElem = document.documentElement,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE9-11+
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tcontainer.style.cssText = \"border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;\" +
\t\t\"position:absolute\";
\tcontainer.appendChild( div );

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computePixelPositionAndBoxSizingReliable() {
\t\tdiv.style.cssText =
\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t// Vendor-prefix box-sizing
\t\t\t\"-webkit-box-sizing:border-box;-moz-box-sizing:border-box;\" +
\t\t\t\"box-sizing:border-box;display:block;margin-top:1%;top:1%;\" +
\t\t\t\"border:1px;padding:1px;width:4px;position:absolute\";
\t\tdiv.innerHTML = \"\";
\t\tdocElem.appendChild( container );

\t\tvar divStyle = window.getComputedStyle( div, null );
\t\tpixelPositionVal = divStyle.top !== \"1%\";
\t\tboxSizingReliableVal = divStyle.width === \"4px\";

\t\tdocElem.removeChild( container );
\t}

\t// Support: node.js jsdom
\t// Don't assume that getComputedStyle is a property of the global object
\tif ( window.getComputedStyle ) {
\t\tjQuery.extend( support, {
\t\t\tpixelPosition: function() {

\t\t\t\t// This test is executed only once but we still do memoizing
\t\t\t\t// since we can use the boxSizingReliable pre-computing.
\t\t\t\t// No need to check if the test was already performed, though.
\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\treturn pixelPositionVal;
\t\t\t},
\t\t\tboxSizingReliable: function() {
\t\t\t\tif ( boxSizingReliableVal == null ) {
\t\t\t\t\tcomputePixelPositionAndBoxSizingReliable();
\t\t\t\t}
\t\t\t\treturn boxSizingReliableVal;
\t\t\t},
\t\t\treliableMarginRight: function() {

\t\t\t\t// Support: Android 2.3
\t\t\t\t// Check if div with explicit width and no margin-right incorrectly
\t\t\t\t// gets computed margin-right based on width of container. (#3333)
\t\t\t\t// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
\t\t\t\t// This support function is only executed once so no memoizing is needed.
\t\t\t\tvar ret,
\t\t\t\t\tmarginDiv = div.appendChild( document.createElement( \"div\" ) );

\t\t\t\t// Reset CSS: box-sizing; display; margin; border; padding
\t\t\t\tmarginDiv.style.cssText = div.style.cssText =
\t\t\t\t\t// Support: Firefox<29, Android 2.3
\t\t\t\t\t// Vendor-prefix box-sizing
\t\t\t\t\t\"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;\" +
\t\t\t\t\t\"box-sizing:content-box;display:block;margin:0;border:0;padding:0\";
\t\t\t\tmarginDiv.style.marginRight = marginDiv.style.width = \"0\";
\t\t\t\tdiv.style.width = \"1px\";
\t\t\t\tdocElem.appendChild( container );

\t\t\t\tret = !parseFloat( window.getComputedStyle( marginDiv, null ).marginRight );

\t\t\t\tdocElem.removeChild( container );
\t\t\t\tdiv.removeChild( marginDiv );

\t\t\t\treturn ret;
\t\t\t}
\t\t});
\t}
})();

return support;

});
", "node_modules/parsleyjs/bower_components/jquery/src/css/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/support.js");
    }
}
