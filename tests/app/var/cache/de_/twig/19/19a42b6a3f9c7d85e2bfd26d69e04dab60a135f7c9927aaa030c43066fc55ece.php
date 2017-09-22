<?php

/* node_modules/jquery/src/core.js */
class __TwigTemplate_93f70cda5c10b23db0f26ecff6f5e2d1aa6e15986742ddbf3967471d5df73a88 extends Twig_Template
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
        $__internal_97ac55df9a55a46df3d2895a21a192ab4514f529ef75814950b3c71369c1d6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ac55df9a55a46df3d2895a21a192ab4514f529ef75814950b3c71369c1d6fa->enter($__internal_97ac55df9a55a46df3d2895a21a192ab4514f529ef75814950b3c71369c1d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core.js"));

        // line 1
        echo "/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module

define( [
\t\"./var/arr\",
\t\"./var/document\",
\t\"./var/getProto\",
\t\"./var/slice\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./var/indexOf\",
\t\"./var/class2type\",
\t\"./var/toString\",
\t\"./var/hasOwn\",
\t\"./var/fnToString\",
\t\"./var/ObjectFunctionString\",
\t\"./var/support\",
\t\"./core/DOMEval\"
], function( arr, document, getProto, slice, concat, push, indexOf,
\tclass2type, toString, hasOwn, fnToString, ObjectFunctionString,
\tsupport, DOMEval ) {

\"use strict\";

var
\tversion = \"3.2.1\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {

\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android <=4.0 only
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([a-z])/g,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t};

jQuery.fn = jQuery.prototype = {

\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {

\t\t// Return all the elements in a clean array
\t\tif ( num == null ) {
\t\t\treturn slice.call( this );
\t\t}

\t\t// Return just the one element from the set
\t\treturn num < 0 ? this[ num + this.length ] : this[ num ];
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\teach: function( callback ) {
\t\treturn jQuery.each( this, callback );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map( this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t} ) );
\t},

\tslice: function() {
\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor();
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[ 0 ] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;

\t\t// Skip the boolean and the target
\t\ttarget = arguments[ i ] || {};
\t\ti++;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !jQuery.isFunction( target ) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {

\t\t// Only deal with non-null/undefined values
\t\tif ( ( options = arguments[ i ] ) != null ) {

\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject( copy ) ||
\t\t\t\t\t( copyIsArray = Array.isArray( copy ) ) ) ) {

\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && Array.isArray( src ) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject( src ) ? src : {};
\t\t\t\t\t}

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend( {

\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisFunction: function( obj ) {
\t\treturn jQuery.type( obj ) === \"function\";
\t},

\tisWindow: function( obj ) {
\t\treturn obj != null && obj === obj.window;
\t},

\tisNumeric: function( obj ) {

\t\t// As of jQuery 3.0, isNumeric is limited to
\t\t// strings and numbers (primitives or objects)
\t\t// that can be coerced to finite numbers (gh-2662)
\t\tvar type = jQuery.type( obj );
\t\treturn ( type === \"number\" || type === \"string\" ) &&

\t\t\t// parseFloat NaNs numeric-cast false positives (\"\")
\t\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t\t// subtraction forces infinities to NaN
\t\t\t!isNaN( obj - parseFloat( obj ) );
\t},

\tisPlainObject: function( obj ) {
\t\tvar proto, Ctor;

\t\t// Detect obvious negatives
\t\t// Use toString instead of jQuery.type to catch host objects
\t\tif ( !obj || toString.call( obj ) !== \"[object Object]\" ) {
\t\t\treturn false;
\t\t}

\t\tproto = getProto( obj );

\t\t// Objects with no prototype (e.g., `Object.create( null )`) are plain
\t\tif ( !proto ) {
\t\t\treturn true;
\t\t}

\t\t// Objects with prototype are plain iff they were constructed by a global Object function
\t\tCtor = hasOwn.call( proto, \"constructor\" ) && proto.constructor;
\t\treturn typeof Ctor === \"function\" && fnToString.call( Ctor ) === ObjectFunctionString;
\t},

\tisEmptyObject: function( obj ) {

\t\t/* eslint-disable no-unused-vars */
\t\t// See https://github.com/eslint/eslint/issues/6125
\t\tvar name;

\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\ttype: function( obj ) {
\t\tif ( obj == null ) {
\t\t\treturn obj + \"\";
\t\t}

\t\t// Support: Android <=2.3 only (functionish RegExp)
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call( obj ) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code ) {
\t\tDOMEval( code );
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Support: IE <=9 - 11, Edge 12 - 13
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\teach: function( obj, callback ) {
\t\tvar length, i = 0;

\t\tif ( isArrayLike( obj ) ) {
\t\t\tlength = obj.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tfor ( i in obj ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android <=4.0 only
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArrayLike( Object( arr ) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tpush.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\treturn arr == null ? -1 : indexOf.call( arr, elem, i );
\t},

\t// Support: Android <=4.0 only, PhantomJS 1 only
\t// push.apply(_, arraylike) throws on ancient WebKit
\tmerge: function( first, second ) {
\t\tvar len = +second.length,
\t\t\tj = 0,
\t\t\ti = first.length;

\t\tfor ( ; j < len; j++ ) {
\t\t\tfirst[ i++ ] = second[ j ];
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, invert ) {
\t\tvar callbackInverse,
\t\t\tmatches = [],
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tcallbackExpect = !invert;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\tmatches.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn matches;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar length, value,
\t\t\ti = 0,
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArrayLike( elems ) ) {
\t\t\tlength = elems.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// Bind a function to a context, optionally partially applying any
\t// arguments.
\tproxy: function( fn, context ) {
\t\tvar tmp, args, proxy;

\t\tif ( typeof context === \"string\" ) {
\t\t\ttmp = fn[ context ];
\t\t\tcontext = fn;
\t\t\tfn = tmp;
\t\t}

\t\t// Quick check to determine if target is callable, in the spec
\t\t// this throws a TypeError, but we will just return undefined.
\t\tif ( !jQuery.isFunction( fn ) ) {
\t\t\treturn undefined;
\t\t}

\t\t// Simulated bind
\t\targs = slice.call( arguments, 2 );
\t\tproxy = function() {
\t\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t\t};

\t\t// Set the guid of unique handler to the same of original handler, so it can be removed
\t\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\t\treturn proxy;
\t},

\tnow: Date.now,

\t// jQuery.support is not used in Core but other projects attach their
\t// properties to it so it needs to exist.
\tsupport: support
} );

if ( typeof Symbol === \"function\" ) {
\tjQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( \"Boolean Number String Function Array Date RegExp Object Error Symbol\".split( \" \" ),
function( i, name ) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

\t// Support: real iOS 8.2 only (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = !!obj && \"length\" in obj && obj.length,
\t\ttype = jQuery.type( obj );

\tif ( type === \"function\" || jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}

return jQuery;
} );
";
        
        $__internal_97ac55df9a55a46df3d2895a21a192ab4514f529ef75814950b3c71369c1d6fa->leave($__internal_97ac55df9a55a46df3d2895a21a192ab4514f529ef75814950b3c71369c1d6fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module

define( [
\t\"./var/arr\",
\t\"./var/document\",
\t\"./var/getProto\",
\t\"./var/slice\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./var/indexOf\",
\t\"./var/class2type\",
\t\"./var/toString\",
\t\"./var/hasOwn\",
\t\"./var/fnToString\",
\t\"./var/ObjectFunctionString\",
\t\"./var/support\",
\t\"./core/DOMEval\"
], function( arr, document, getProto, slice, concat, push, indexOf,
\tclass2type, toString, hasOwn, fnToString, ObjectFunctionString,
\tsupport, DOMEval ) {

\"use strict\";

var
\tversion = \"3.2.1\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {

\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android <=4.0 only
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([a-z])/g,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t};

jQuery.fn = jQuery.prototype = {

\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {

\t\t// Return all the elements in a clean array
\t\tif ( num == null ) {
\t\t\treturn slice.call( this );
\t\t}

\t\t// Return just the one element from the set
\t\treturn num < 0 ? this[ num + this.length ] : this[ num ];
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\teach: function( callback ) {
\t\treturn jQuery.each( this, callback );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map( this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t} ) );
\t},

\tslice: function() {
\t\treturn this.pushStack( slice.apply( this, arguments ) );
\t},

\tfirst: function() {
\t\treturn this.eq( 0 );
\t},

\tlast: function() {
\t\treturn this.eq( -1 );
\t},

\teq: function( i ) {
\t\tvar len = this.length,
\t\t\tj = +i + ( i < 0 ? len : 0 );
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor();
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[ 0 ] || {},
\t\ti = 1,
\t\tlength = arguments.length,
\t\tdeep = false;

\t// Handle a deep copy situation
\tif ( typeof target === \"boolean\" ) {
\t\tdeep = target;

\t\t// Skip the boolean and the target
\t\ttarget = arguments[ i ] || {};
\t\ti++;
\t}

\t// Handle case when target is a string or something (possible in deep copy)
\tif ( typeof target !== \"object\" && !jQuery.isFunction( target ) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {

\t\t// Only deal with non-null/undefined values
\t\tif ( ( options = arguments[ i ] ) != null ) {

\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject( copy ) ||
\t\t\t\t\t( copyIsArray = Array.isArray( copy ) ) ) ) {

\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && Array.isArray( src ) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject( src ) ? src : {};
\t\t\t\t\t}

\t\t\t\t\t// Never move original objects, clone them
\t\t\t\t\ttarget[ name ] = jQuery.extend( deep, clone, copy );

\t\t\t\t// Don't bring in undefined values
\t\t\t\t} else if ( copy !== undefined ) {
\t\t\t\t\ttarget[ name ] = copy;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t// Return the modified object
\treturn target;
};

jQuery.extend( {

\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisFunction: function( obj ) {
\t\treturn jQuery.type( obj ) === \"function\";
\t},

\tisWindow: function( obj ) {
\t\treturn obj != null && obj === obj.window;
\t},

\tisNumeric: function( obj ) {

\t\t// As of jQuery 3.0, isNumeric is limited to
\t\t// strings and numbers (primitives or objects)
\t\t// that can be coerced to finite numbers (gh-2662)
\t\tvar type = jQuery.type( obj );
\t\treturn ( type === \"number\" || type === \"string\" ) &&

\t\t\t// parseFloat NaNs numeric-cast false positives (\"\")
\t\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t\t// subtraction forces infinities to NaN
\t\t\t!isNaN( obj - parseFloat( obj ) );
\t},

\tisPlainObject: function( obj ) {
\t\tvar proto, Ctor;

\t\t// Detect obvious negatives
\t\t// Use toString instead of jQuery.type to catch host objects
\t\tif ( !obj || toString.call( obj ) !== \"[object Object]\" ) {
\t\t\treturn false;
\t\t}

\t\tproto = getProto( obj );

\t\t// Objects with no prototype (e.g., `Object.create( null )`) are plain
\t\tif ( !proto ) {
\t\t\treturn true;
\t\t}

\t\t// Objects with prototype are plain iff they were constructed by a global Object function
\t\tCtor = hasOwn.call( proto, \"constructor\" ) && proto.constructor;
\t\treturn typeof Ctor === \"function\" && fnToString.call( Ctor ) === ObjectFunctionString;
\t},

\tisEmptyObject: function( obj ) {

\t\t/* eslint-disable no-unused-vars */
\t\t// See https://github.com/eslint/eslint/issues/6125
\t\tvar name;

\t\tfor ( name in obj ) {
\t\t\treturn false;
\t\t}
\t\treturn true;
\t},

\ttype: function( obj ) {
\t\tif ( obj == null ) {
\t\t\treturn obj + \"\";
\t\t}

\t\t// Support: Android <=2.3 only (functionish RegExp)
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call( obj ) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code ) {
\t\tDOMEval( code );
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Support: IE <=9 - 11, Edge 12 - 13
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\teach: function( obj, callback ) {
\t\tvar length, i = 0;

\t\tif ( isArrayLike( obj ) ) {
\t\t\tlength = obj.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\tfor ( i in obj ) {
\t\t\t\tif ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android <=4.0 only
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArrayLike( Object( arr ) ) ) {
\t\t\t\tjQuery.merge( ret,
\t\t\t\t\ttypeof arr === \"string\" ?
\t\t\t\t\t[ arr ] : arr
\t\t\t\t);
\t\t\t} else {
\t\t\t\tpush.call( ret, arr );
\t\t\t}
\t\t}

\t\treturn ret;
\t},

\tinArray: function( elem, arr, i ) {
\t\treturn arr == null ? -1 : indexOf.call( arr, elem, i );
\t},

\t// Support: Android <=4.0 only, PhantomJS 1 only
\t// push.apply(_, arraylike) throws on ancient WebKit
\tmerge: function( first, second ) {
\t\tvar len = +second.length,
\t\t\tj = 0,
\t\t\ti = first.length;

\t\tfor ( ; j < len; j++ ) {
\t\t\tfirst[ i++ ] = second[ j ];
\t\t}

\t\tfirst.length = i;

\t\treturn first;
\t},

\tgrep: function( elems, callback, invert ) {
\t\tvar callbackInverse,
\t\t\tmatches = [],
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tcallbackExpect = !invert;

\t\t// Go through the array, only saving the items
\t\t// that pass the validator function
\t\tfor ( ; i < length; i++ ) {
\t\t\tcallbackInverse = !callback( elems[ i ], i );
\t\t\tif ( callbackInverse !== callbackExpect ) {
\t\t\t\tmatches.push( elems[ i ] );
\t\t\t}
\t\t}

\t\treturn matches;
\t},

\t// arg is for internal usage only
\tmap: function( elems, callback, arg ) {
\t\tvar length, value,
\t\t\ti = 0,
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArrayLike( elems ) ) {
\t\t\tlength = elems.length;
\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}

\t\t// Go through every key on the object,
\t\t} else {
\t\t\tfor ( i in elems ) {
\t\t\t\tvalue = callback( elems[ i ], i, arg );

\t\t\t\tif ( value != null ) {
\t\t\t\t\tret.push( value );
\t\t\t\t}
\t\t\t}
\t\t}

\t\t// Flatten any nested arrays
\t\treturn concat.apply( [], ret );
\t},

\t// A global GUID counter for objects
\tguid: 1,

\t// Bind a function to a context, optionally partially applying any
\t// arguments.
\tproxy: function( fn, context ) {
\t\tvar tmp, args, proxy;

\t\tif ( typeof context === \"string\" ) {
\t\t\ttmp = fn[ context ];
\t\t\tcontext = fn;
\t\t\tfn = tmp;
\t\t}

\t\t// Quick check to determine if target is callable, in the spec
\t\t// this throws a TypeError, but we will just return undefined.
\t\tif ( !jQuery.isFunction( fn ) ) {
\t\t\treturn undefined;
\t\t}

\t\t// Simulated bind
\t\targs = slice.call( arguments, 2 );
\t\tproxy = function() {
\t\t\treturn fn.apply( context || this, args.concat( slice.call( arguments ) ) );
\t\t};

\t\t// Set the guid of unique handler to the same of original handler, so it can be removed
\t\tproxy.guid = fn.guid = fn.guid || jQuery.guid++;

\t\treturn proxy;
\t},

\tnow: Date.now,

\t// jQuery.support is not used in Core but other projects attach their
\t// properties to it so it needs to exist.
\tsupport: support
} );

if ( typeof Symbol === \"function\" ) {
\tjQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( \"Boolean Number String Function Array Date RegExp Object Error Symbol\".split( \" \" ),
function( i, name ) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

\t// Support: real iOS 8.2 only (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = !!obj && \"length\" in obj && obj.length,
\t\ttype = jQuery.type( obj );

\tif ( type === \"function\" || jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}

return jQuery;
} );
", "node_modules/jquery/src/core.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core.js");
    }
}
