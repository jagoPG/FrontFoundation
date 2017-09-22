<?php

/* node_modules/parsleyjs/bower_components/jquery/src/effects.js */
class __TwigTemplate_1dc7415bec8e8c50823421a03feb3884905f1f7c24184ad2192d03c7d8a3d7f6 extends Twig_Template
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
        $__internal_d2b9bf49c0fcf2e05df003b5709507926fdc7da7937ff27058abeea90ba97d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b9bf49c0fcf2e05df003b5709507926fdc7da7937ff27058abeea90ba97d44->enter($__internal_d2b9bf49c0fcf2e05df003b5709507926fdc7da7937ff27058abeea90ba97d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/effects.js"));

        // line 1
        echo "define([
\t\"./core\",
\t\"./var/pnum\",
\t\"./css/var/cssExpand\",
\t\"./css/var/isHidden\",
\t\"./css/defaultDisplay\",
\t\"./data/var/data_priv\",

\t\"./core/init\",
\t\"./effects/Tween\",
\t\"./queue\",
\t\"./css\",
\t\"./deferred\",
\t\"./traversing\"
], function( jQuery, pnum, cssExpand, isHidden, defaultDisplay, data_priv ) {

var
\tfxNow, timerId,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trfxnum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" ),
\trrun = /queueHooks\$/,
\tanimationPrefilters = [ defaultPrefilter ],
\ttweeners = {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value ),
\t\t\t\ttarget = tween.cur(),
\t\t\t\tparts = rfxnum.exec( value ),
\t\t\t\tunit = parts && parts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t\t\t// Starting value computation is required for potential unit mismatches
\t\t\t\tstart = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +target ) &&
\t\t\t\t\trfxnum.exec( jQuery.css( tween.elem, prop ) ),
\t\t\t\tscale = 1,
\t\t\t\tmaxIterations = 20;

\t\t\tif ( start && start[ 3 ] !== unit ) {
\t\t\t\t// Trust units reported by jQuery.css
\t\t\t\tunit = unit || start[ 3 ];

\t\t\t\t// Make sure we update the tween properties later on
\t\t\t\tparts = parts || [];

\t\t\t\t// Iteratively approximate from a nonzero starting point
\t\t\t\tstart = +target || 1;

\t\t\t\tdo {
\t\t\t\t\t// If previous iteration zeroed out, double until we get *something*.
\t\t\t\t\t// Use string for doubling so we don't accidentally see scale as unchanged below
\t\t\t\t\tscale = scale || \".5\";

\t\t\t\t\t// Adjust and apply
\t\t\t\t\tstart = start / scale;
\t\t\t\t\tjQuery.style( tween.elem, prop, start + unit );

\t\t\t\t// Update scale, tolerating zero or NaN from tween.cur(),
\t\t\t\t// break the loop if scale is unchanged or perfect, or if we've just had enough
\t\t\t\t} while ( scale !== (scale = tween.cur() / target) && scale !== 1 && --maxIterations );
\t\t\t}

\t\t\t// Update tween properties
\t\t\tif ( parts ) {
\t\t\t\tstart = tween.start = +start || +target || 0;
\t\t\t\ttween.unit = unit;
\t\t\t\t// If a +=/-= token was provided, we're doing a relative animation
\t\t\t\ttween.end = parts[ 1 ] ?
\t\t\t\t\tstart + ( parts[ 1 ] + 1 ) * parts[ 2 ] :
\t\t\t\t\t+parts[ 2 ];
\t\t\t}

\t\t\treturn tween;
\t\t} ]
\t};

// Animations created synchronously will run synchronously
function createFxNow() {
\tsetTimeout(function() {
\t\tfxNow = undefined;
\t});
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
\tfor ( ; i < 4 ; i += 2 - includeWidth ) {
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
\t\tcollection = ( tweeners[ prop ] || [] ).concat( tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( (tween = collection[ index ].call( animation, prop, value )) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\t/* jshint validthis: true */
\tvar prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHidden( elem ),
\t\tdataShow = data_priv.get( elem, \"fxshow\" );

\t// Handle queue: false promises
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

\t\tanim.always(function() {
\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always(function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t});
\t\t});
\t}

\t// Height/width overflow pass
\tif ( elem.nodeType === 1 && ( \"height\" in props || \"width\" in props ) ) {
\t\t// Make sure that nothing sneaks out
\t\t// Record all 3 overflow attributes because IE9-10 do not
\t\t// change the overflow attribute when overflowX and
\t\t// overflowY are set to the same value
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Set display property to inline-block for height/width
\t\t// animations on inline elements that are having width/height animated
\t\tdisplay = jQuery.css( elem, \"display\" );

\t\t// Test default display if display is currently \"none\"
\t\tcheckDisplay = display === \"none\" ?
\t\t\tdata_priv.get( elem, \"olddisplay\" ) || defaultDisplay( elem.nodeName ) : display;

\t\tif ( checkDisplay === \"inline\" && jQuery.css( elem, \"float\" ) === \"none\" ) {
\t\t\tstyle.display = \"inline-block\";
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always(function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t});
\t}

\t// show/hide pass
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.exec( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// If there is dataShow left over from a stopped hide or show and we are going to proceed with show, we should pretend to be hidden
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );

\t\t// Any non-fx value stops us from restoring the original display value
\t\t} else {
\t\t\tdisplay = undefined;
\t\t}
\t}

\tif ( !jQuery.isEmptyObject( orig ) ) {
\t\tif ( dataShow ) {
\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\thidden = dataShow.hidden;
\t\t\t}
\t\t} else {
\t\t\tdataShow = data_priv.access( elem, \"fxshow\", {} );
\t\t}

\t\t// Store state if its toggle - enables .stop().toggle() to \"reverse\"
\t\tif ( toggle ) {
\t\t\tdataShow.hidden = !hidden;
\t\t}
\t\tif ( hidden ) {
\t\t\tjQuery( elem ).show();
\t\t} else {
\t\t\tanim.done(function() {
\t\t\t\tjQuery( elem ).hide();
\t\t\t});
\t\t}
\t\tanim.done(function() {
\t\t\tvar prop;

\t\t\tdata_priv.remove( elem, \"fxshow\" );
\t\t\tfor ( prop in orig ) {
\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t}
\t\t});
\t\tfor ( prop in orig ) {
\t\t\ttween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );

\t\t\tif ( !( prop in dataShow ) ) {
\t\t\t\tdataShow[ prop ] = tween.start;
\t\t\t\tif ( hidden ) {
\t\t\t\t\ttween.end = tween.start;
\t\t\t\t\ttween.start = prop === \"width\" || prop === \"height\" ? 1 : 0;
\t\t\t\t}
\t\t\t}
\t\t}

\t// If this is a noop like .hide().hide(), restore an overwritten display value
\t} else if ( (display === \"none\" ? defaultDisplay( elem.nodeName ) : display) === \"inline\" ) {
\t\tstyle.display = display;
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( jQuery.isArray( value ) ) {
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
\t\tlength = animationPrefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {
\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t}),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),
\t\t\t\t// Support: Android 2.3
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ]);

\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t} else {
\t\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tanimation = deferred.promise({
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, { specialEasing: {} }, options ),
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
\t\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t}),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length ; index++ ) {
\t\tresult = animationPrefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t})
\t);

\t// attach callbacks from options
\treturn animation.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.split(\" \");
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length ; index++ ) {
\t\t\tprop = props[ index ];
\t\t\ttweeners[ prop ] = tweeners[ prop ] || [];
\t\t\ttweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tanimationPrefilters.unshift( callback );
\t\t} else {
\t\t\tanimationPrefilters.push( callback );
\t\t}
\t}
});

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\topt.duration = jQuery.fx.off ? 0 : typeof opt.duration === \"number\" ? opt.duration :
\t\topt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

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

jQuery.fn.extend({
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHidden ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate({ opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {
\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || data_priv.get( this, \"finish\" ) ) {
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

\t\treturn this.each(function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = data_priv.get( this );

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
\t\t\t\tif ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {
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
\t\t});
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each(function() {
\t\t\tvar index,
\t\t\t\tdata = data_priv.get( this ),
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
\t\t});
\t}
});

jQuery.each([ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
});

// Generate shortcuts for custom animations
jQuery.each({
\tslideDown: genFx(\"show\"),
\tslideUp: genFx(\"hide\"),
\tslideToggle: genFx(\"toggle\"),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
});

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];
\t\t// Checks the timer has not already been removed
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
\tif ( timer() ) {
\t\tjQuery.fx.start();
\t} else {
\t\tjQuery.timers.pop();
\t}
};

jQuery.fx.interval = 13;

jQuery.fx.start = function() {
\tif ( !timerId ) {
\t\ttimerId = setInterval( jQuery.fx.tick, jQuery.fx.interval );
\t}
};

jQuery.fx.stop = function() {
\tclearInterval( timerId );
\ttimerId = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,
\t// Default speed
\t_default: 400
};

return jQuery;
});
";
        
        $__internal_d2b9bf49c0fcf2e05df003b5709507926fdc7da7937ff27058abeea90ba97d44->leave($__internal_d2b9bf49c0fcf2e05df003b5709507926fdc7da7937ff27058abeea90ba97d44_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/effects.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./core\",
\t\"./var/pnum\",
\t\"./css/var/cssExpand\",
\t\"./css/var/isHidden\",
\t\"./css/defaultDisplay\",
\t\"./data/var/data_priv\",

\t\"./core/init\",
\t\"./effects/Tween\",
\t\"./queue\",
\t\"./css\",
\t\"./deferred\",
\t\"./traversing\"
], function( jQuery, pnum, cssExpand, isHidden, defaultDisplay, data_priv ) {

var
\tfxNow, timerId,
\trfxtypes = /^(?:toggle|show|hide)\$/,
\trfxnum = new RegExp( \"^(?:([+-])=|)(\" + pnum + \")([a-z%]*)\$\", \"i\" ),
\trrun = /queueHooks\$/,
\tanimationPrefilters = [ defaultPrefilter ],
\ttweeners = {
\t\t\"*\": [ function( prop, value ) {
\t\t\tvar tween = this.createTween( prop, value ),
\t\t\t\ttarget = tween.cur(),
\t\t\t\tparts = rfxnum.exec( value ),
\t\t\t\tunit = parts && parts[ 3 ] || ( jQuery.cssNumber[ prop ] ? \"\" : \"px\" ),

\t\t\t\t// Starting value computation is required for potential unit mismatches
\t\t\t\tstart = ( jQuery.cssNumber[ prop ] || unit !== \"px\" && +target ) &&
\t\t\t\t\trfxnum.exec( jQuery.css( tween.elem, prop ) ),
\t\t\t\tscale = 1,
\t\t\t\tmaxIterations = 20;

\t\t\tif ( start && start[ 3 ] !== unit ) {
\t\t\t\t// Trust units reported by jQuery.css
\t\t\t\tunit = unit || start[ 3 ];

\t\t\t\t// Make sure we update the tween properties later on
\t\t\t\tparts = parts || [];

\t\t\t\t// Iteratively approximate from a nonzero starting point
\t\t\t\tstart = +target || 1;

\t\t\t\tdo {
\t\t\t\t\t// If previous iteration zeroed out, double until we get *something*.
\t\t\t\t\t// Use string for doubling so we don't accidentally see scale as unchanged below
\t\t\t\t\tscale = scale || \".5\";

\t\t\t\t\t// Adjust and apply
\t\t\t\t\tstart = start / scale;
\t\t\t\t\tjQuery.style( tween.elem, prop, start + unit );

\t\t\t\t// Update scale, tolerating zero or NaN from tween.cur(),
\t\t\t\t// break the loop if scale is unchanged or perfect, or if we've just had enough
\t\t\t\t} while ( scale !== (scale = tween.cur() / target) && scale !== 1 && --maxIterations );
\t\t\t}

\t\t\t// Update tween properties
\t\t\tif ( parts ) {
\t\t\t\tstart = tween.start = +start || +target || 0;
\t\t\t\ttween.unit = unit;
\t\t\t\t// If a +=/-= token was provided, we're doing a relative animation
\t\t\t\ttween.end = parts[ 1 ] ?
\t\t\t\t\tstart + ( parts[ 1 ] + 1 ) * parts[ 2 ] :
\t\t\t\t\t+parts[ 2 ];
\t\t\t}

\t\t\treturn tween;
\t\t} ]
\t};

// Animations created synchronously will run synchronously
function createFxNow() {
\tsetTimeout(function() {
\t\tfxNow = undefined;
\t});
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
\tfor ( ; i < 4 ; i += 2 - includeWidth ) {
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
\t\tcollection = ( tweeners[ prop ] || [] ).concat( tweeners[ \"*\" ] ),
\t\tindex = 0,
\t\tlength = collection.length;
\tfor ( ; index < length; index++ ) {
\t\tif ( (tween = collection[ index ].call( animation, prop, value )) ) {

\t\t\t// We're done with this property
\t\t\treturn tween;
\t\t}
\t}
}

function defaultPrefilter( elem, props, opts ) {
\t/* jshint validthis: true */
\tvar prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,
\t\tanim = this,
\t\torig = {},
\t\tstyle = elem.style,
\t\thidden = elem.nodeType && isHidden( elem ),
\t\tdataShow = data_priv.get( elem, \"fxshow\" );

\t// Handle queue: false promises
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

\t\tanim.always(function() {
\t\t\t// Ensure the complete handler is called before this completes
\t\t\tanim.always(function() {
\t\t\t\thooks.unqueued--;
\t\t\t\tif ( !jQuery.queue( elem, \"fx\" ).length ) {
\t\t\t\t\thooks.empty.fire();
\t\t\t\t}
\t\t\t});
\t\t});
\t}

\t// Height/width overflow pass
\tif ( elem.nodeType === 1 && ( \"height\" in props || \"width\" in props ) ) {
\t\t// Make sure that nothing sneaks out
\t\t// Record all 3 overflow attributes because IE9-10 do not
\t\t// change the overflow attribute when overflowX and
\t\t// overflowY are set to the same value
\t\topts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

\t\t// Set display property to inline-block for height/width
\t\t// animations on inline elements that are having width/height animated
\t\tdisplay = jQuery.css( elem, \"display\" );

\t\t// Test default display if display is currently \"none\"
\t\tcheckDisplay = display === \"none\" ?
\t\t\tdata_priv.get( elem, \"olddisplay\" ) || defaultDisplay( elem.nodeName ) : display;

\t\tif ( checkDisplay === \"inline\" && jQuery.css( elem, \"float\" ) === \"none\" ) {
\t\t\tstyle.display = \"inline-block\";
\t\t}
\t}

\tif ( opts.overflow ) {
\t\tstyle.overflow = \"hidden\";
\t\tanim.always(function() {
\t\t\tstyle.overflow = opts.overflow[ 0 ];
\t\t\tstyle.overflowX = opts.overflow[ 1 ];
\t\t\tstyle.overflowY = opts.overflow[ 2 ];
\t\t});
\t}

\t// show/hide pass
\tfor ( prop in props ) {
\t\tvalue = props[ prop ];
\t\tif ( rfxtypes.exec( value ) ) {
\t\t\tdelete props[ prop ];
\t\t\ttoggle = toggle || value === \"toggle\";
\t\t\tif ( value === ( hidden ? \"hide\" : \"show\" ) ) {

\t\t\t\t// If there is dataShow left over from a stopped hide or show and we are going to proceed with show, we should pretend to be hidden
\t\t\t\tif ( value === \"show\" && dataShow && dataShow[ prop ] !== undefined ) {
\t\t\t\t\thidden = true;
\t\t\t\t} else {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t}
\t\t\torig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );

\t\t// Any non-fx value stops us from restoring the original display value
\t\t} else {
\t\t\tdisplay = undefined;
\t\t}
\t}

\tif ( !jQuery.isEmptyObject( orig ) ) {
\t\tif ( dataShow ) {
\t\t\tif ( \"hidden\" in dataShow ) {
\t\t\t\thidden = dataShow.hidden;
\t\t\t}
\t\t} else {
\t\t\tdataShow = data_priv.access( elem, \"fxshow\", {} );
\t\t}

\t\t// Store state if its toggle - enables .stop().toggle() to \"reverse\"
\t\tif ( toggle ) {
\t\t\tdataShow.hidden = !hidden;
\t\t}
\t\tif ( hidden ) {
\t\t\tjQuery( elem ).show();
\t\t} else {
\t\t\tanim.done(function() {
\t\t\t\tjQuery( elem ).hide();
\t\t\t});
\t\t}
\t\tanim.done(function() {
\t\t\tvar prop;

\t\t\tdata_priv.remove( elem, \"fxshow\" );
\t\t\tfor ( prop in orig ) {
\t\t\t\tjQuery.style( elem, prop, orig[ prop ] );
\t\t\t}
\t\t});
\t\tfor ( prop in orig ) {
\t\t\ttween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );

\t\t\tif ( !( prop in dataShow ) ) {
\t\t\t\tdataShow[ prop ] = tween.start;
\t\t\t\tif ( hidden ) {
\t\t\t\t\ttween.end = tween.start;
\t\t\t\t\ttween.start = prop === \"width\" || prop === \"height\" ? 1 : 0;
\t\t\t\t}
\t\t\t}
\t\t}

\t// If this is a noop like .hide().hide(), restore an overwritten display value
\t} else if ( (display === \"none\" ? defaultDisplay( elem.nodeName ) : display) === \"inline\" ) {
\t\tstyle.display = display;
\t}
}

function propFilter( props, specialEasing ) {
\tvar index, name, easing, value, hooks;

\t// camelCase, specialEasing and expand cssHook pass
\tfor ( index in props ) {
\t\tname = jQuery.camelCase( index );
\t\teasing = specialEasing[ name ];
\t\tvalue = props[ index ];
\t\tif ( jQuery.isArray( value ) ) {
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
\t\tlength = animationPrefilters.length,
\t\tdeferred = jQuery.Deferred().always( function() {
\t\t\t// Don't match elem in the :animated selector
\t\t\tdelete tick.elem;
\t\t}),
\t\ttick = function() {
\t\t\tif ( stopped ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tvar currentTime = fxNow || createFxNow(),
\t\t\t\tremaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),
\t\t\t\t// Support: Android 2.3
\t\t\t\t// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
\t\t\t\ttemp = remaining / animation.duration || 0,
\t\t\t\tpercent = 1 - temp,
\t\t\t\tindex = 0,
\t\t\t\tlength = animation.tweens.length;

\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\tanimation.tweens[ index ].run( percent );
\t\t\t}

\t\t\tdeferred.notifyWith( elem, [ animation, percent, remaining ]);

\t\t\tif ( percent < 1 && length ) {
\t\t\t\treturn remaining;
\t\t\t} else {
\t\t\t\tdeferred.resolveWith( elem, [ animation ] );
\t\t\t\treturn false;
\t\t\t}
\t\t},
\t\tanimation = deferred.promise({
\t\t\telem: elem,
\t\t\tprops: jQuery.extend( {}, properties ),
\t\t\topts: jQuery.extend( true, { specialEasing: {} }, options ),
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
\t\t\t\tfor ( ; index < length ; index++ ) {
\t\t\t\t\tanimation.tweens[ index ].run( 1 );
\t\t\t\t}

\t\t\t\t// Resolve when we played the last frame; otherwise, reject
\t\t\t\tif ( gotoEnd ) {
\t\t\t\t\tdeferred.resolveWith( elem, [ animation, gotoEnd ] );
\t\t\t\t} else {
\t\t\t\t\tdeferred.rejectWith( elem, [ animation, gotoEnd ] );
\t\t\t\t}
\t\t\t\treturn this;
\t\t\t}
\t\t}),
\t\tprops = animation.props;

\tpropFilter( props, animation.opts.specialEasing );

\tfor ( ; index < length ; index++ ) {
\t\tresult = animationPrefilters[ index ].call( animation, elem, props, animation.opts );
\t\tif ( result ) {
\t\t\treturn result;
\t\t}
\t}

\tjQuery.map( props, createTween, animation );

\tif ( jQuery.isFunction( animation.opts.start ) ) {
\t\tanimation.opts.start.call( elem, animation );
\t}

\tjQuery.fx.timer(
\t\tjQuery.extend( tick, {
\t\t\telem: elem,
\t\t\tanim: animation,
\t\t\tqueue: animation.opts.queue
\t\t})
\t);

\t// attach callbacks from options
\treturn animation.progress( animation.opts.progress )
\t\t.done( animation.opts.done, animation.opts.complete )
\t\t.fail( animation.opts.fail )
\t\t.always( animation.opts.always );
}

jQuery.Animation = jQuery.extend( Animation, {

\ttweener: function( props, callback ) {
\t\tif ( jQuery.isFunction( props ) ) {
\t\t\tcallback = props;
\t\t\tprops = [ \"*\" ];
\t\t} else {
\t\t\tprops = props.split(\" \");
\t\t}

\t\tvar prop,
\t\t\tindex = 0,
\t\t\tlength = props.length;

\t\tfor ( ; index < length ; index++ ) {
\t\t\tprop = props[ index ];
\t\t\ttweeners[ prop ] = tweeners[ prop ] || [];
\t\t\ttweeners[ prop ].unshift( callback );
\t\t}
\t},

\tprefilter: function( callback, prepend ) {
\t\tif ( prepend ) {
\t\t\tanimationPrefilters.unshift( callback );
\t\t} else {
\t\t\tanimationPrefilters.push( callback );
\t\t}
\t}
});

jQuery.speed = function( speed, easing, fn ) {
\tvar opt = speed && typeof speed === \"object\" ? jQuery.extend( {}, speed ) : {
\t\tcomplete: fn || !fn && easing ||
\t\t\tjQuery.isFunction( speed ) && speed,
\t\tduration: speed,
\t\teasing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
\t};

\topt.duration = jQuery.fx.off ? 0 : typeof opt.duration === \"number\" ? opt.duration :
\t\topt.duration in jQuery.fx.speeds ? jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

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

jQuery.fn.extend({
\tfadeTo: function( speed, to, easing, callback ) {

\t\t// Show any hidden elements after setting opacity to 0
\t\treturn this.filter( isHidden ).css( \"opacity\", 0 ).show()

\t\t\t// Animate to the value specified
\t\t\t.end().animate({ opacity: to }, speed, easing, callback );
\t},
\tanimate: function( prop, speed, easing, callback ) {
\t\tvar empty = jQuery.isEmptyObject( prop ),
\t\t\toptall = jQuery.speed( speed, easing, callback ),
\t\t\tdoAnimation = function() {
\t\t\t\t// Operate on a copy of prop so per-property easing won't be lost
\t\t\t\tvar anim = Animation( this, jQuery.extend( {}, prop ), optall );

\t\t\t\t// Empty animations, or finishing resolves immediately
\t\t\t\tif ( empty || data_priv.get( this, \"finish\" ) ) {
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

\t\treturn this.each(function() {
\t\t\tvar dequeue = true,
\t\t\t\tindex = type != null && type + \"queueHooks\",
\t\t\t\ttimers = jQuery.timers,
\t\t\t\tdata = data_priv.get( this );

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
\t\t\t\tif ( timers[ index ].elem === this && (type == null || timers[ index ].queue === type) ) {
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
\t\t});
\t},
\tfinish: function( type ) {
\t\tif ( type !== false ) {
\t\t\ttype = type || \"fx\";
\t\t}
\t\treturn this.each(function() {
\t\t\tvar index,
\t\t\t\tdata = data_priv.get( this ),
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
\t\t});
\t}
});

jQuery.each([ \"toggle\", \"show\", \"hide\" ], function( i, name ) {
\tvar cssFn = jQuery.fn[ name ];
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn speed == null || typeof speed === \"boolean\" ?
\t\t\tcssFn.apply( this, arguments ) :
\t\t\tthis.animate( genFx( name, true ), speed, easing, callback );
\t};
});

// Generate shortcuts for custom animations
jQuery.each({
\tslideDown: genFx(\"show\"),
\tslideUp: genFx(\"hide\"),
\tslideToggle: genFx(\"toggle\"),
\tfadeIn: { opacity: \"show\" },
\tfadeOut: { opacity: \"hide\" },
\tfadeToggle: { opacity: \"toggle\" }
}, function( name, props ) {
\tjQuery.fn[ name ] = function( speed, easing, callback ) {
\t\treturn this.animate( props, speed, easing, callback );
\t};
});

jQuery.timers = [];
jQuery.fx.tick = function() {
\tvar timer,
\t\ti = 0,
\t\ttimers = jQuery.timers;

\tfxNow = jQuery.now();

\tfor ( ; i < timers.length; i++ ) {
\t\ttimer = timers[ i ];
\t\t// Checks the timer has not already been removed
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
\tif ( timer() ) {
\t\tjQuery.fx.start();
\t} else {
\t\tjQuery.timers.pop();
\t}
};

jQuery.fx.interval = 13;

jQuery.fx.start = function() {
\tif ( !timerId ) {
\t\ttimerId = setInterval( jQuery.fx.tick, jQuery.fx.interval );
\t}
};

jQuery.fx.stop = function() {
\tclearInterval( timerId );
\ttimerId = null;
};

jQuery.fx.speeds = {
\tslow: 600,
\tfast: 200,
\t// Default speed
\t_default: 400
};

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/effects.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/effects.js");
    }
}
