<?php

/* node_modules/jquery/src/css/support.js */
class __TwigTemplate_decb3b8de8f952e5a3aa1ce5e58c6c7b1f687c48b97515429c853b8a31fb0901 extends Twig_Template
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
        $__internal_8df8adbd3a3286337dce0c449975fb4500c6637c6eb631adfdd58f1ff72c37dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df8adbd3a3286337dce0c449975fb4500c6637c6eb631adfdd58f1ff72c37dc->enter($__internal_8df8adbd3a3286337dce0c449975fb4500c6637c6eb631adfdd58f1ff72c37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/support.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/document\",
\t\"../var/documentElement\",
\t\"../var/support\"
], function( jQuery, document, documentElement, support ) {

\"use strict\";

( function() {

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computeStyleTests() {

\t\t// This is a singleton, we need to execute it only once
\t\tif ( !div ) {
\t\t\treturn;
\t\t}

\t\tdiv.style.cssText =
\t\t\t\"box-sizing:border-box;\" +
\t\t\t\"position:relative;display:block;\" +
\t\t\t\"margin:auto;border:1px;padding:1px;\" +
\t\t\t\"top:1%;width:50%\";
\t\tdiv.innerHTML = \"\";
\t\tdocumentElement.appendChild( container );

\t\tvar divStyle = window.getComputedStyle( div );
\t\tpixelPositionVal = divStyle.top !== \"1%\";

\t\t// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
\t\treliableMarginLeftVal = divStyle.marginLeft === \"2px\";
\t\tboxSizingReliableVal = divStyle.width === \"4px\";

\t\t// Support: Android 4.0 - 4.3 only
\t\t// Some styles come back with percentage values, even though they shouldn't
\t\tdiv.style.marginRight = \"50%\";
\t\tpixelMarginRightVal = divStyle.marginRight === \"4px\";

\t\tdocumentElement.removeChild( container );

\t\t// Nullify the div so it wouldn't be stored in the memory and
\t\t// it will also be a sign that checks already performed
\t\tdiv = null;
\t}

\tvar pixelPositionVal, boxSizingReliableVal, pixelMarginRightVal, reliableMarginLeftVal,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\t// Finish early in limited (non-browser) environments
\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE <=9 - 11 only
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tcontainer.style.cssText = \"border:0;width:8px;height:0;top:0;left:-9999px;\" +
\t\t\"padding:0;margin-top:1px;position:absolute\";
\tcontainer.appendChild( div );

\tjQuery.extend( support, {
\t\tpixelPosition: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelPositionVal;
\t\t},
\t\tboxSizingReliable: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn boxSizingReliableVal;
\t\t},
\t\tpixelMarginRight: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelMarginRightVal;
\t\t},
\t\treliableMarginLeft: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn reliableMarginLeftVal;
\t\t}
\t} );
} )();

return support;

} );
";
        
        $__internal_8df8adbd3a3286337dce0c449975fb4500c6637c6eb631adfdd58f1ff72c37dc->leave($__internal_8df8adbd3a3286337dce0c449975fb4500c6637c6eb631adfdd58f1ff72c37dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/support.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/document\",
\t\"../var/documentElement\",
\t\"../var/support\"
], function( jQuery, document, documentElement, support ) {

\"use strict\";

( function() {

\t// Executing both pixelPosition & boxSizingReliable tests require only one layout
\t// so they're executed at the same time to save the second computation.
\tfunction computeStyleTests() {

\t\t// This is a singleton, we need to execute it only once
\t\tif ( !div ) {
\t\t\treturn;
\t\t}

\t\tdiv.style.cssText =
\t\t\t\"box-sizing:border-box;\" +
\t\t\t\"position:relative;display:block;\" +
\t\t\t\"margin:auto;border:1px;padding:1px;\" +
\t\t\t\"top:1%;width:50%\";
\t\tdiv.innerHTML = \"\";
\t\tdocumentElement.appendChild( container );

\t\tvar divStyle = window.getComputedStyle( div );
\t\tpixelPositionVal = divStyle.top !== \"1%\";

\t\t// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
\t\treliableMarginLeftVal = divStyle.marginLeft === \"2px\";
\t\tboxSizingReliableVal = divStyle.width === \"4px\";

\t\t// Support: Android 4.0 - 4.3 only
\t\t// Some styles come back with percentage values, even though they shouldn't
\t\tdiv.style.marginRight = \"50%\";
\t\tpixelMarginRightVal = divStyle.marginRight === \"4px\";

\t\tdocumentElement.removeChild( container );

\t\t// Nullify the div so it wouldn't be stored in the memory and
\t\t// it will also be a sign that checks already performed
\t\tdiv = null;
\t}

\tvar pixelPositionVal, boxSizingReliableVal, pixelMarginRightVal, reliableMarginLeftVal,
\t\tcontainer = document.createElement( \"div\" ),
\t\tdiv = document.createElement( \"div\" );

\t// Finish early in limited (non-browser) environments
\tif ( !div.style ) {
\t\treturn;
\t}

\t// Support: IE <=9 - 11 only
\t// Style of cloned element affects source element cloned (#8908)
\tdiv.style.backgroundClip = \"content-box\";
\tdiv.cloneNode( true ).style.backgroundClip = \"\";
\tsupport.clearCloneStyle = div.style.backgroundClip === \"content-box\";

\tcontainer.style.cssText = \"border:0;width:8px;height:0;top:0;left:-9999px;\" +
\t\t\"padding:0;margin-top:1px;position:absolute\";
\tcontainer.appendChild( div );

\tjQuery.extend( support, {
\t\tpixelPosition: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelPositionVal;
\t\t},
\t\tboxSizingReliable: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn boxSizingReliableVal;
\t\t},
\t\tpixelMarginRight: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn pixelMarginRightVal;
\t\t},
\t\treliableMarginLeft: function() {
\t\t\tcomputeStyleTests();
\t\t\treturn reliableMarginLeftVal;
\t\t}
\t} );
} )();

return support;

} );
", "node_modules/jquery/src/css/support.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/support.js");
    }
}
