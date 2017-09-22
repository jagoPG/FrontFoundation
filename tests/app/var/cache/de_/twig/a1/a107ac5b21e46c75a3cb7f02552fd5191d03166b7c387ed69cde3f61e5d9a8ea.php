<?php

/* node_modules/jquery/src/effects.js */
class __TwigTemplate_dfaaf11f80badc4e6e7f2c55e944c21a40454affc5e4ed0cd33588c66fcc3ce1 extends Twig_Template
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
        $__internal_22052df3a0a6374a942f08310748af924be11dbd1c8eb0d9edc6f8272d960588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22052df3a0a6374a942f08310748af924be11dbd1c8eb0d9edc6f8272d960588->enter($__internal_22052df3a0a6374a942f08310748af924be11dbd1c8eb0d9edc6f8272d960588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/effects.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./var/document\",
\t\"./var/rcssNum\",
\t\"./var/rnothtmlwhite\",
\t\"./css/var/cssExpand\",
\t\"./css/var/isHiddenWithinTree\",
\t\"./css/var/swap\",
\t\"./css/adjustCSS\",
\t\"./data/var/dataPriv\",
\t\"./css/showHide\",

\t\"./core/init\",
\t\"./queue\",
\t\"./deferred\",
\t\"./traversing\",
\t\"./manipulation\",
\t\"./css\",
\t\"./effects/Tween\"
], function( jQuery, document, rcssNum, rnothtmlwhite, cssExpand, isHiddenWithinTree, swap,
\tadjustCSS, dataPriv, showHide ) {

\"use strict\";

var
\tfxNow, inProgress,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trrun = /queueHooks\$/;

function schedule() {
\tif ( inProgress ) {
\t\tif ( document.hidden === false && window.requestAnimationFrame ) {
\t\t\twindow.requestAnimationFrame( schedule );
\t\t} else {
\t\t\twindow.setTimeout( schedule, jQuery.fx.interval );
\t\t}

\t\tjQuery.fx.tick();
\t}
}

// Animations created synchronously will run synchronously
function createFxNow() {
\twindow.setTimeout( function() {
\t\tfxNow = undefined;
\t} );
\treturn ( fxNow = jQuery.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\ti = 0,
\t\tattrs = { height: type };

\t// If we include width, step value is 1 to do all cssExpand values,
\t// otherwise step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth ? 1 : 0;
\tfor ( ; i < 4; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

function createTween( value, prop, animation ) {
\tvar tween,
\t\tcollection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\tvar prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
\t\tisBox = \"width\" in props || \"height\" in props,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHiddenWithinTree( elem ),
\t\tdataShow = dataPriv.get( elem, \"fxshow\" );

\t// Queue-skipping animations hijack the fx hooks
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always( function() {

\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always( function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t} );
\t\t} );
\t}

\t// Detect show/hide animations
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.test( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// Pretend to be hidden if this is a \"show\" and
\t\t\t\t// there is still data from a stopped show/hide
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;

\t\t\t\t// Ignore all other no-op show/hide data
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
\t\t}
\t}

\t// Bail out if this is a no-op like .hide().hide()
\tpropTween = !jQuery.isEmptyObject( props );
\tif ( !propTween && jQuery.isEmptyObject( orig ) ) {
\t\treturn;
\t}

\t// Restrict \"overflow\" and \"display\" styles during box animations
\tif ( isBox && elem.nodeType === 1 ) {

\t\t// Support: IE <=9 - 11, Edge 12 - 13
\t\t// Record all 3 overflow attributes because IE does not infer the shorthand
\t\t// from identically-valued overflowX and overflowY
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Identify a display type, preferring old show/hide data over the CSS cascade
\t\trestoreDisplay = dataShow && dataShow.display;
\t\tif ( restoreDisplay == null ) {
\t\t\trestoreDisplay = dataPriv.get( elem, \"display\" );
\t\t}
\t\tdisplay = jQuery.css( elem, \"display\" );
\t\tif ( display === \"none\" ) {
\t\t\tif ( restoreDisplay ) {
\t\t\t\tdisplay = restoreDisplay;
\t\t\t} else {

\t\t\t\t// Get nonempty value(s) by temporarily forcing visibility
\t\t\t\tshowHide( [ elem ], true );
\t\t\t\trestoreDisplay = elem.style.display || restoreDisplay;
\t\t\t\tdisplay = jQuery.css( elem, \"display\" );
\t\t\t\tshowHide( [ elem ] );
\t\t\t}
\t\t}

\t\t// Animate inline elements as inline-block
\t\tif ( display === \"inline\" || display === \"inline-block\" && restoreDisplay != null ) {
\t\t\tif ( jQuery.css( elem, \"float\" ) === \"none\" ) {

\t\t\t\t// Restore the original display value at the end of pure show/hide animations
\t\t\t\tif ( !propTween ) {
\t\t\t\t\tanim.done( function() {
\t\t\t\t\t\tstyle.display = restoreDisplay;
\t\t\t\t\t} );
\t\t\t\t\tif ( restoreDisplay == null ) {
\t\t\t\t\t\tdisplay = style.display;
\t\t\t\t\t\trestoreDisplay = display === \"none\" ? \"\" : display;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tstyle.display = \"inline-block\";
\t\t\t}
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always( function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t} );
\t}

\t// Implement show/hide animations
\tpropTween = false;
\tfor ( prop in orig ) {

\t\t// General show/hide setup for this element animation
\t\tif ( !propTween ) {
\t\t\tif ( dataShow ) {
\t\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\t\thidden = dataShow.hidden;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tdataShow = dataPriv.access( elem, \"fxshow\", { display: restoreDisplay } );
\t\t\t}

\t\t\t// Store hidden/visible for toggle so `.stop().toggle()` \"reverses\"
\t\t\tif ( toggle ) {
\t\t\t\tdataShow.hidden = !hidden;
\t\t\t}

\t\t\t// Show elements before animating them
\t\t\tif ( hidden ) {
\t\t\t\tshowHide( [ elem ], true );
\t\t\t}

\t\t\t/* eslint-disable no-loop-func */

\t\t\tanim.done( function() {

\t\t\t/* eslint-enable no-loop-func */

\t\t\t\t// The final step of a \"hide\" animation is actually hiding the element
\t\t\t\tif ( !hidden ) {
\t\t\t\t\tshowHide( [ elem ] );
\t\t\t\t}
\t\t\t\tdataPriv.remove( elem, \"fxshow\" );
\t\t\t\tfor ( prop in orig ) {
\t\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t\t}
\t\t\t} );
\t\t}

\t\t// Per-property setup
\t\tpropTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
\t\tif ( !( prop in dataShow ) ) {
\t\t\tdataShow[ prop ] = propTween.start;
\t\t\tif ( hidden ) {
\t\t\t\tpropTween.end = propTween.start;
\t\t\t\tpropTween.start = 0;
\t\t\t}
\t\t}
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( Array.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// Not quite \$.extend, this won't overwrite existing keys.
\t\t\t// Reusing 'index' because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = Animation.prefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {

\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t} ),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

\t\t\t\t// Support: Android 2.3 only
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ] );

\t\t\t// If there's more to do, yield
\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t}

\t\t\t// If this was an empty animation, synthesize a final progress notification
\t\t\tif ( !length ) {
\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t}

\t\t\t// Resolve the animation and report its conclusion
\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\treturn false;
\t\t},
\t\tanimation = deferred.promise( {
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, {
\t\t\t\tspecialEasing: {},
\t\t\t\teasing: jQuery.easing._default
\t\t\t}, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,

\t\t\t\t\t// If we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t} ),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length; index++ ) {
\t\tresult = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\tif ( jQuery.isFunction( result.stop ) ) {
\t\t\t\tjQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
\t\t\t\t\tjQuery.proxy( result.stop, result );
\t\t\t}
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\t// Attach callbacks from options
\tanimation
\t\t.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t} )
\t);

\treturn animation;
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweeners: {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value );
\t\t\tadjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
\t\t\treturn tween;
\t\t} ]
\t},

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.match( rnothtmlwhite );
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length; index++ ) {
\t\t\tprop = props[ index ];
\t\t\tAnimation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
\t\t\tAnimation.tweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilters: [ defaultPrefilter ],

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tAnimation.prefilters.unshift( callback );
\t\t} else {
\t\t\tAnimation.prefilters.push( callback );
\t\t}
\t}
} );

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\t// Go to the end state if fx are off
\tif ( jQuery.fx.off ) {
\t\topt.duration = 0;

\t} else {
\t\tif ( typeof opt.duration !== \"number\" ) {
\t\t\tif ( opt.duration in jQuery.fx.speeds ) {
\t\t\t\topt.duration = jQuery.fx.speeds[ opt.duration ];

\t\t\t} else {
\t\t\t\topt.duration = jQuery.fx.speeds._default;
\t\t\t}
\t\t}
\t}

\t// Normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( jQuery.isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.fn.extend( {
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHiddenWithinTree ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate( { opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {

\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || dataPriv.get( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = dataPriv.get( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this &&
\t\t\t\t\t( type == null || timers[ index ].queue === type ) ) {

\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Start the next in the queue if the last step wasn't forced.
\t\t\t// Timers currently will call their complete callbacks, which
\t\t\t// will dequeue but only if they were gotoEnd.
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t} );
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each( function() {
\t\t\tvar index,
\t\t\t\tdata = dataPriv.get( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// Enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// Empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\thooks.stop.call( this, true );
\t\t\t}

\t\t\t// Look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// Turn off finishing flag
\t\t\tdelete data.finish;
\t\t} );
\t}
} );

jQuery.each( [ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
} );

// Generate shortcuts for custom animations
jQuery.each( {
\tslideDown: genFx( \"show\" ),
\tslideUp: genFx( \"hide\" ),
\tslideToggle: genFx( \"toggle\" ),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];

\t\t// Run the timer and safely remove it when done (allowing for external removal)
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tjQuery.timers.push( timer );
\tjQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
\tif ( inProgress ) {
\t\treturn;
\t}

\tinProgress = true;
\tschedule();
};

jQuery.fx.stop = function() {
\tinProgress = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,

\t// Default speed
\t_default: 400
};

return jQuery;
} );
";
        
        $__internal_22052df3a0a6374a942f08310748af924be11dbd1c8eb0d9edc6f8272d960588->leave($__internal_22052df3a0a6374a942f08310748af924be11dbd1c8eb0d9edc6f8272d960588_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/effects.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./var/document\",
\t\"./var/rcssNum\",
\t\"./var/rnothtmlwhite\",
\t\"./css/var/cssExpand\",
\t\"./css/var/isHiddenWithinTree\",
\t\"./css/var/swap\",
\t\"./css/adjustCSS\",
\t\"./data/var/dataPriv\",
\t\"./css/showHide\",

\t\"./core/init\",
\t\"./queue\",
\t\"./deferred\",
\t\"./traversing\",
\t\"./manipulation\",
\t\"./css\",
\t\"./effects/Tween\"
], function( jQuery, document, rcssNum, rnothtmlwhite, cssExpand, isHiddenWithinTree, swap,
\tadjustCSS, dataPriv, showHide ) {

\"use strict\";

var
\tfxNow, inProgress,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trrun = /queueHooks\$/;

function schedule() {
\tif ( inProgress ) {
\t\tif ( document.hidden === false && window.requestAnimationFrame ) {
\t\t\twindow.requestAnimationFrame( schedule );
\t\t} else {
\t\t\twindow.setTimeout( schedule, jQuery.fx.interval );
\t\t}

\t\tjQuery.fx.tick();
\t}
}

// Animations created synchronously will run synchronously
function createFxNow() {
\twindow.setTimeout( function() {
\t\tfxNow = undefined;
\t} );
\treturn ( fxNow = jQuery.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
\tvar which,
\t\ti = 0,
\t\tattrs = { height: type };

\t// If we include width, step value is 1 to do all cssExpand values,
\t// otherwise step value is 2 to skip over Left and Right
\tincludeWidth = includeWidth ? 1 : 0;
\tfor ( ; i < 4; i += 2 - includeWidth ) {
\t\twhich = cssExpand[ i ];
\t\tattrs[ \"margin\" + which ] = attrs[ \"padding\" + which ] = type;
\t}

\tif ( includeWidth ) {
\t\tattrs.opacity = attrs.width = type;
\t}

\treturn attrs;
}

function createTween( value, prop, animation ) {
\tvar tween,
\t\tcollection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\tvar prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
\t\tisBox = \"width\" in props || \"height\" in props,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHiddenWithinTree( elem ),
\t\tdataShow = dataPriv.get( elem, \"fxshow\" );

\t// Queue-skipping animations hijack the fx hooks
\tif ( !opts.queue ) {
\t\thooks = jQuery._queueHooks( elem, \"fx\" );
\t\tif ( hooks.unqueued == null ) {
\t\t\thooks.unqueued = 0;
\t\t\toldfire = hooks.empty.fire;
\t\t\thooks.empty.fire = function() {
\t\t\t\tif ( !hooks.unqueued ) {
\t\t\t\t\toldfire();
\t\t\t\t}
\t\t\t};
\t\t}
\t\thooks.unqueued++;

\t\tanim.always( function() {

\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always( function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t} );
\t\t} );
\t}

\t// Detect show/hide animations
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.test( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// Pretend to be hidden if this is a \"show\" and
\t\t\t\t// there is still data from a stopped show/hide
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;

\t\t\t\t// Ignore all other no-op show/hide data
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
\t\t}
\t}

\t// Bail out if this is a no-op like .hide().hide()
\tpropTween = !jQuery.isEmptyObject( props );
\tif ( !propTween && jQuery.isEmptyObject( orig ) ) {
\t\treturn;
\t}

\t// Restrict \"overflow\" and \"display\" styles during box animations
\tif ( isBox && elem.nodeType === 1 ) {

\t\t// Support: IE <=9 - 11, Edge 12 - 13
\t\t// Record all 3 overflow attributes because IE does not infer the shorthand
\t\t// from identically-valued overflowX and overflowY
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Identify a display type, preferring old show/hide data over the CSS cascade
\t\trestoreDisplay = dataShow && dataShow.display;
\t\tif ( restoreDisplay == null ) {
\t\t\trestoreDisplay = dataPriv.get( elem, \"display\" );
\t\t}
\t\tdisplay = jQuery.css( elem, \"display\" );
\t\tif ( display === \"none\" ) {
\t\t\tif ( restoreDisplay ) {
\t\t\t\tdisplay = restoreDisplay;
\t\t\t} else {

\t\t\t\t// Get nonempty value(s) by temporarily forcing visibility
\t\t\t\tshowHide( [ elem ], true );
\t\t\t\trestoreDisplay = elem.style.display || restoreDisplay;
\t\t\t\tdisplay = jQuery.css( elem, \"display\" );
\t\t\t\tshowHide( [ elem ] );
\t\t\t}
\t\t}

\t\t// Animate inline elements as inline-block
\t\tif ( display === \"inline\" || display === \"inline-block\" && restoreDisplay != null ) {
\t\t\tif ( jQuery.css( elem, \"float\" ) === \"none\" ) {

\t\t\t\t// Restore the original display value at the end of pure show/hide animations
\t\t\t\tif ( !propTween ) {
\t\t\t\t\tanim.done( function() {
\t\t\t\t\t\tstyle.display = restoreDisplay;
\t\t\t\t\t} );
\t\t\t\t\tif ( restoreDisplay == null ) {
\t\t\t\t\t\tdisplay = style.display;
\t\t\t\t\t\trestoreDisplay = display === \"none\" ? \"\" : display;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tstyle.display = \"inline-block\";
\t\t\t}
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always( function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t} );
\t}

\t// Implement show/hide animations
\tpropTween = false;
\tfor ( prop in orig ) {

\t\t// General show/hide setup for this element animation
\t\tif ( !propTween ) {
\t\t\tif ( dataShow ) {
\t\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\t\thidden = dataShow.hidden;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tdataShow = dataPriv.access( elem, \"fxshow\", { display: restoreDisplay } );
\t\t\t}

\t\t\t// Store hidden/visible for toggle so `.stop().toggle()` \"reverses\"
\t\t\tif ( toggle ) {
\t\t\t\tdataShow.hidden = !hidden;
\t\t\t}

\t\t\t// Show elements before animating them
\t\t\tif ( hidden ) {
\t\t\t\tshowHide( [ elem ], true );
\t\t\t}

\t\t\t/* eslint-disable no-loop-func */

\t\t\tanim.done( function() {

\t\t\t/* eslint-enable no-loop-func */

\t\t\t\t// The final step of a \"hide\" animation is actually hiding the element
\t\t\t\tif ( !hidden ) {
\t\t\t\t\tshowHide( [ elem ] );
\t\t\t\t}
\t\t\t\tdataPriv.remove( elem, \"fxshow\" );
\t\t\t\tfor ( prop in orig ) {
\t\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t\t}
\t\t\t} );
\t\t}

\t\t// Per-property setup
\t\tpropTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
\t\tif ( !( prop in dataShow ) ) {
\t\t\tdataShow[ prop ] = propTween.start;
\t\t\tif ( hidden ) {
\t\t\t\tpropTween.end = propTween.start;
\t\t\t\tpropTween.start = 0;
\t\t\t}
\t\t}
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( Array.isArray( value ) ) {
\t\t\teasing = value[ 1 ];
\t\t\tvalue = props[ index ] = value[ 0 ];
\t\t}

\t\tif ( index !== name ) {
\t\t\tprops[ name ] = value;
\t\t\tdelete props[ index ];
\t\t}

\t\thooks = jQuery.cssHooks[ name ];
\t\tif ( hooks && \"expand\" in hooks ) {
\t\t\tvalue = hooks.expand( value );
\t\t\tdelete props[ name ];

\t\t\t// Not quite \$.extend, this won't overwrite existing keys.
\t\t\t// Reusing 'index' because we have the correct \"name\"
\t\t\tfor ( index in value ) {
\t\t\t\tif ( !( index in props ) ) {
\t\t\t\t\tprops[ index ] = value[ index ];
\t\t\t\t\tspecialEasing[ index ] = easing;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tspecialEasing[ name ] = easing;
\t\t}
\t}
}

function Animation( elem, properties, options ) {
\tvar result,
\t\tstopped,
\t\tindex = 0,
\t\tlength = Animation.prefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {

\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t} ),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

\t\t\t\t// Support: Android 2.3 only
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ] );

\t\t\t// If there's more to do, yield
\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t}

\t\t\t// If this was an empty animation, synthesize a final progress notification
\t\t\tif ( !length ) {
\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t}

\t\t\t// Resolve the animation and report its conclusion
\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\treturn false;
\t\t},
\t\tanimation = deferred.promise( {
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, {
\t\t\t\tspecialEasing: {},
\t\t\t\teasing: jQuery.easing._default
\t\t\t}, options ),
\t\t\toriginalProperties: properties,
\t\t\toriginalOptions: options,
\t\t\tstartTime: fxNow || createFxNow(),
\t\t\tduration: options.duration,
\t\t\ttweens: [],
\t\t\tcreateTween: function( prop, end ) {
\t\t\t\tvar tween = jQuery.Tween( elem, animation.opts, prop, end,
\t\t\t\t\t\tanimation.opts.specialEasing[ prop ] || animation.opts.easing );
\t\t\t\tanimation.tweens.push( tween );
\t\t\t\treturn tween;
\t\t\t},
\t\t\tstop: function( gotoEnd ) {
\t\t\t\tvar index = 0,

\t\t\t\t\t// If we are going to the end, we want to run all the tweens
\t\t\t\t\t// otherwise we skip this part
\t\t\t\t\tlength = gotoEnd ? animation.tweens.length : 0;
\t\t\t\tif ( stopped ) {
\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t\tstopped = true;
\t\t\t\tfor ( ; index < length; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.notifyWith( elem, [ animation, 1, 0 ] );
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t} ),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length; index++ ) {
\t\tresult = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\tif ( jQuery.isFunction( result.stop ) ) {
\t\t\t\tjQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
\t\t\t\t\tjQuery.proxy( result.stop, result );
\t\t\t}
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\t// Attach callbacks from options
\tanimation
\t\t.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t} )
\t);

\treturn animation;
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweeners: {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value );
\t\t\tadjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
\t\t\treturn tween;
\t\t} ]
\t},

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.match( rnothtmlwhite );
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length; index++ ) {
\t\t\tprop = props[ index ];
\t\t\tAnimation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
\t\t\tAnimation.tweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilters: [ defaultPrefilter ],

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tAnimation.prefilters.unshift( callback );
\t\t} else {
\t\t\tAnimation.prefilters.push( callback );
\t\t}
\t}
} );

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\t// Go to the end state if fx are off
\tif ( jQuery.fx.off ) {
\t\topt.duration = 0;

\t} else {
\t\tif ( typeof opt.duration !== \"number\" ) {
\t\t\tif ( opt.duration in jQuery.fx.speeds ) {
\t\t\t\topt.duration = jQuery.fx.speeds[ opt.duration ];

\t\t\t} else {
\t\t\t\topt.duration = jQuery.fx.speeds._default;
\t\t\t}
\t\t}
\t}

\t// Normalize opt.queue - true/undefined/null -> \"fx\"
\tif ( opt.queue == null || opt.queue === true ) {
\t\topt.queue = \"fx\";
\t}

\t// Queueing
\topt.old = opt.complete;

\topt.complete = function() {
\t\tif ( jQuery.isFunction( opt.old ) ) {
\t\t\topt.old.call( this );
\t\t}

\t\tif ( opt.queue ) {
\t\t\tjQuery.dequeue( this, opt.queue );
\t\t}
\t};

\treturn opt;
};

jQuery.fn.extend( {
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHiddenWithinTree ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate( { opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {

\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || dataPriv.get( this, \"finish\" ) ) {
\t\t\t\t\tanim.stop( true );
\t\t\t\t}
\t\t\t};
\t\t\tdoAnimation.finish = doAnimation;

\t\treturn empty || optall.queue === false ?
\t\t\tthis.each( doAnimation ) :
\t\t\tthis.queue( optall.queue, doAnimation );
\t},
\tstop: function( type, clearQueue, gotoEnd ) {
\t\tvar stopQueue = function( hooks ) {
\t\t\tvar stop = hooks.stop;
\t\t\tdelete hooks.stop;
\t\t\tstop( gotoEnd );
\t\t};

\t\tif ( typeof type !== \"string\" ) {
\t\t\tgotoEnd = clearQueue;
\t\t\tclearQueue = type;
\t\t\ttype = undefined;
\t\t}
\t\tif ( clearQueue && type !== false ) {
\t\t\tthis.queue( type || \"fx\", [] );
\t\t}

\t\treturn this.each( function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = dataPriv.get( this );

\t\t\tif ( index ) {
\t\t\t\tif ( data[ index ] && data[ index ].stop ) {
\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( index in data ) {
\t\t\t\t\tif ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
\t\t\t\t\t\tstopQueue( data[ index ] );
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this &&
\t\t\t\t\t( type == null || timers[ index ].queue === type ) ) {

\t\t\t\t\ttimers[ index ].anim.stop( gotoEnd );
\t\t\t\t\tdequeue = false;
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Start the next in the queue if the last step wasn't forced.
\t\t\t// Timers currently will call their complete callbacks, which
\t\t\t// will dequeue but only if they were gotoEnd.
\t\t\tif ( dequeue || !gotoEnd ) {
\t\t\t\tjQuery.dequeue( this, type );
\t\t\t}
\t\t} );
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each( function() {
\t\t\tvar index,
\t\t\t\tdata = dataPriv.get( this ),
\t\t\t\tqueue = data[ type + \"queue\" ],
\t\t\t\thooks = data[ type + \"queueHooks\" ],
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tlength = queue ? queue.length : 0;

\t\t\t// Enable finishing flag on private data
\t\t\tdata.finish = true;

\t\t\t// Empty the queue first
\t\t\tjQuery.queue( this, type, [] );

\t\t\tif ( hooks && hooks.stop ) {
\t\t\t\thooks.stop.call( this, true );
\t\t\t}

\t\t\t// Look for any active animations, and finish them
\t\t\tfor ( index = timers.length; index--; ) {
\t\t\t\tif ( timers[ index ].elem === this && timers[ index ].queue === type ) {
\t\t\t\t\ttimers[ index ].anim.stop( true );
\t\t\t\t\ttimers.splice( index, 1 );
\t\t\t\t}
\t\t\t}

\t\t\t// Look for any animations in the old queue and finish them
\t\t\tfor ( index = 0; index < length; index++ ) {
\t\t\t\tif ( queue[ index ] && queue[ index ].finish ) {
\t\t\t\t\tqueue[ index ].finish.call( this );
\t\t\t\t}
\t\t\t}

\t\t\t// Turn off finishing flag
\t\t\tdelete data.finish;
\t\t} );
\t}
} );

jQuery.each( [ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
} );

// Generate shortcuts for custom animations
jQuery.each( {
\tslideDown: genFx( \"show\" ),
\tslideUp: genFx( \"hide\" ),
\tslideToggle: genFx( \"toggle\" ),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];

\t\t// Run the timer and safely remove it when done (allowing for external removal)
\t\tif ( !timer() && timers[ i ] === timer ) {
\t\t\ttimers.splice( i--, 1 );
\t\t}
\t}

\tif ( !timers.length ) {
\t\tjQuery.fx.stop();
\t}
\tfxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
\tjQuery.timers.push( timer );
\tjQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
\tif ( inProgress ) {
\t\treturn;
\t}

\tinProgress = true;
\tschedule();
};

jQuery.fx.stop = function() {
\tinProgress = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,

\t// Default speed
\t_default: 400
};

return jQuery;
} );
", "node_modules/jquery/src/effects.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/effects.js");
    }
}
