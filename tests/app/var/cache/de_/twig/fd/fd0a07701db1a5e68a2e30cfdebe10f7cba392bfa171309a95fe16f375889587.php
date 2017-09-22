<?php

/* node_modules/jquery/src/effects/Tween.js */
class __TwigTemplate_00e483955151568c03f611599c603d857b5a917f79b00e6aec0dd046f9e2d2eb extends Twig_Template
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
        $__internal_d6923257fc873f301fd639c4ff0f9dba5ccc7115b4ab2a2654008957e2449a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6923257fc873f301fd639c4ff0f9dba5ccc7115b4ab2a2654008957e2449a2b->enter($__internal_d6923257fc873f301fd639c4ff0f9dba5ccc7115b4ab2a2654008957e2449a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/effects/Tween.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../css\"
], function( jQuery ) {

\"use strict\";

function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || jQuery.easing._default;
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\t// Use a property on the element directly when it is not a DOM element,
\t\t\t// or when there is no matching style property that exists.
\t\t\tif ( tween.elem.nodeType !== 1 ||
\t\t\t\ttween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// Passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails.
\t\t\t// Simple values such as \"10px\" are parsed to Float;
\t\t\t// complex values such as \"rotate(1rad)\" are returned as-is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );

\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {

\t\t\t// Use step hook for back compat.
\t\t\t// Use cssHook if its there.
\t\t\t// Use .style if available and use plain properties where available.
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.nodeType === 1 &&
\t\t\t\t( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
\t\t\t\t\tjQuery.cssHooks[ tween.prop ] ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t},
\t_default: \"swing\"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};

} );
";
        
        $__internal_d6923257fc873f301fd639c4ff0f9dba5ccc7115b4ab2a2654008957e2449a2b->leave($__internal_d6923257fc873f301fd639c4ff0f9dba5ccc7115b4ab2a2654008957e2449a2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/effects/Tween.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../css\"
], function( jQuery ) {

\"use strict\";

function Tween( elem, options, prop, end, easing ) {
\treturn new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
\tconstructor: Tween,
\tinit: function( elem, options, prop, end, easing, unit ) {
\t\tthis.elem = elem;
\t\tthis.prop = prop;
\t\tthis.easing = easing || jQuery.easing._default;
\t\tthis.options = options;
\t\tthis.start = this.now = this.cur();
\t\tthis.end = end;
\t\tthis.unit = unit || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" );
\t},
\tcur: function() {
\t\tvar hooks = Tween.propHooks[ this.prop ];

\t\treturn hooks && hooks.get ?
\t\t\thooks.get( this ) :
\t\t\tTween.propHooks._default.get( this );
\t},
\trun: function( percent ) {
\t\tvar eased,
\t\t\thooks = Tween.propHooks[ this.prop ];

\t\tif ( this.options.duration ) {
\t\t\tthis.pos = eased = jQuery.easing[ this.easing ](
\t\t\t\tpercent, this.options.duration * percent, 0, 1, this.options.duration
\t\t\t);
\t\t} else {
\t\t\tthis.pos = eased = percent;
\t\t}
\t\tthis.now = ( this.end - this.start ) * eased + this.start;

\t\tif ( this.options.step ) {
\t\t\tthis.options.step.call( this.elem, this.now, this );
\t\t}

\t\tif ( hooks && hooks.set ) {
\t\t\thooks.set( this );
\t\t} else {
\t\t\tTween.propHooks._default.set( this );
\t\t}
\t\treturn this;
\t}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
\t_default: {
\t\tget: function( tween ) {
\t\t\tvar result;

\t\t\t// Use a property on the element directly when it is not a DOM element,
\t\t\t// or when there is no matching style property that exists.
\t\t\tif ( tween.elem.nodeType !== 1 ||
\t\t\t\ttween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
\t\t\t\treturn tween.elem[ tween.prop ];
\t\t\t}

\t\t\t// Passing an empty string as a 3rd parameter to .css will automatically
\t\t\t// attempt a parseFloat and fallback to a string if the parse fails.
\t\t\t// Simple values such as \"10px\" are parsed to Float;
\t\t\t// complex values such as \"rotate(1rad)\" are returned as-is.
\t\t\tresult = jQuery.css( tween.elem, tween.prop, \"\" );

\t\t\t// Empty strings, null, undefined and \"auto\" are converted to 0.
\t\t\treturn !result || result === \"auto\" ? 0 : result;
\t\t},
\t\tset: function( tween ) {

\t\t\t// Use step hook for back compat.
\t\t\t// Use cssHook if its there.
\t\t\t// Use .style if available and use plain properties where available.
\t\t\tif ( jQuery.fx.step[ tween.prop ] ) {
\t\t\t\tjQuery.fx.step[ tween.prop ]( tween );
\t\t\t} else if ( tween.elem.nodeType === 1 &&
\t\t\t\t( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
\t\t\t\t\tjQuery.cssHooks[ tween.prop ] ) ) {
\t\t\t\tjQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
\t\t\t} else {
\t\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t\t}
\t\t}
\t}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
\tset: function( tween ) {
\t\tif ( tween.elem.nodeType && tween.elem.parentNode ) {
\t\t\ttween.elem[ tween.prop ] = tween.now;
\t\t}
\t}
};

jQuery.easing = {
\tlinear: function( p ) {
\t\treturn p;
\t},
\tswing: function( p ) {
\t\treturn 0.5 - Math.cos( p * Math.PI ) / 2;
\t},
\t_default: \"swing\"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};

} );
", "node_modules/jquery/src/effects/Tween.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/effects/Tween.js");
    }
}