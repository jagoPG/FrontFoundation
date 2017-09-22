<?php

/* node_modules/jquery/src/css/adjustCSS.js */
class __TwigTemplate_26e7a1a776ed47ba0a62ff3058edd6d9a30f0d60896846c7e61bb976898640ac extends Twig_Template
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
        $__internal_6f0f6f2dee4e720f4bda52247a954266541af8729b32a38db870502406011f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0f6f2dee4e720f4bda52247a954266541af8729b32a38db870502406011f28->enter($__internal_6f0f6f2dee4e720f4bda52247a954266541af8729b32a38db870502406011f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/adjustCSS.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../var/rcssNum\"
], function( jQuery, rcssNum ) {

\"use strict\";

function adjustCSS( elem, prop, valueParts, tween ) {
\tvar adjusted,
\t\tscale = 1,
\t\tmaxIterations = 20,
\t\tcurrentValue = tween ?
\t\t\tfunction() {
\t\t\t\treturn tween.cur();
\t\t\t} :
\t\t\tfunction() {
\t\t\t\treturn jQuery.css( elem, prop, \"\" );
\t\t\t},
\t\tinitial = currentValue(),
\t\tunit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t// Starting value computation is required for potential unit mismatches
\t\tinitialInUnit = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +initial ) &&
\t\t\trcssNum.exec( jQuery.css( elem, prop ) );

\tif ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

\t\t// Trust units reported by jQuery.css
\t\tunit = unit || initialInUnit[ 3 ];

\t\t// Make sure we update the tween properties later on
\t\tvalueParts = valueParts || [];

\t\t// Iteratively approximate from a nonzero starting point
\t\tinitialInUnit = +initial || 1;

\t\tdo {

\t\t\t// If previous iteration zeroed out, double until we get *something*.
\t\t\t// Use string for doubling so we don't accidentally see scale as unchanged below
\t\t\tscale = scale || \".5\";

\t\t\t// Adjust and apply
\t\t\tinitialInUnit = initialInUnit / scale;
\t\t\tjQuery.style( elem, prop, initialInUnit + unit );

\t\t// Update scale, tolerating zero or NaN from tween.cur()
\t\t// Break the loop if scale is unchanged or perfect, or if we've just had enough.
\t\t} while (
\t\t\tscale !== ( scale = currentValue() / initial ) && scale !== 1 && --maxIterations
\t\t);
\t}

\tif ( valueParts ) {
\t\tinitialInUnit = +initialInUnit || +initial || 0;

\t\t// Apply relative offset (+=/-=) if specified
\t\tadjusted = valueParts[ 1 ] ?
\t\t\tinitialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
\t\t\t+valueParts[ 2 ];
\t\tif ( tween ) {
\t\t\ttween.unit = unit;
\t\t\ttween.start = initialInUnit;
\t\t\ttween.end = adjusted;
\t\t}
\t}
\treturn adjusted;
}

return adjustCSS;
} );
";
        
        $__internal_6f0f6f2dee4e720f4bda52247a954266541af8729b32a38db870502406011f28->leave($__internal_6f0f6f2dee4e720f4bda52247a954266541af8729b32a38db870502406011f28_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/adjustCSS.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../var/rcssNum\"
], function( jQuery, rcssNum ) {

\"use strict\";

function adjustCSS( elem, prop, valueParts, tween ) {
\tvar adjusted,
\t\tscale = 1,
\t\tmaxIterations = 20,
\t\tcurrentValue = tween ?
\t\t\tfunction() {
\t\t\t\treturn tween.cur();
\t\t\t} :
\t\t\tfunction() {
\t\t\t\treturn jQuery.css( elem, prop, \"\" );
\t\t\t},
\t\tinitial = currentValue(),
\t\tunit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t// Starting value computation is required for potential unit mismatches
\t\tinitialInUnit = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +initial ) &&
\t\t\trcssNum.exec( jQuery.css( elem, prop ) );

\tif ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

\t\t// Trust units reported by jQuery.css
\t\tunit = unit || initialInUnit[ 3 ];

\t\t// Make sure we update the tween properties later on
\t\tvalueParts = valueParts || [];

\t\t// Iteratively approximate from a nonzero starting point
\t\tinitialInUnit = +initial || 1;

\t\tdo {

\t\t\t// If previous iteration zeroed out, double until we get *something*.
\t\t\t// Use string for doubling so we don't accidentally see scale as unchanged below
\t\t\tscale = scale || \".5\";

\t\t\t// Adjust and apply
\t\t\tinitialInUnit = initialInUnit / scale;
\t\t\tjQuery.style( elem, prop, initialInUnit + unit );

\t\t// Update scale, tolerating zero or NaN from tween.cur()
\t\t// Break the loop if scale is unchanged or perfect, or if we've just had enough.
\t\t} while (
\t\t\tscale !== ( scale = currentValue() / initial ) && scale !== 1 && --maxIterations
\t\t);
\t}

\tif ( valueParts ) {
\t\tinitialInUnit = +initialInUnit || +initial || 0;

\t\t// Apply relative offset (+=/-=) if specified
\t\tadjusted = valueParts[ 1 ] ?
\t\t\tinitialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
\t\t\t+valueParts[ 2 ];
\t\tif ( tween ) {
\t\t\ttween.unit = unit;
\t\t\ttween.start = initialInUnit;
\t\t\ttween.end = adjusted;
\t\t}
\t}
\treturn adjusted;
}

return adjustCSS;
} );
", "node_modules/jquery/src/css/adjustCSS.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/adjustCSS.js");
    }
}
