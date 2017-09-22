<?php

/* node_modules/parsleyjs/bower_components/jquery/src/core.js */
class __TwigTemplate_4e022d0ce821feee7456a6ab2c830554a5b2f8e986b291cb416971ded3d7dd4a extends Twig_Template
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
        $__internal_0e064ab511b3dee9923fe75c90c7d0a4b13969a937ce1ef1a927e07c44f00855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e064ab511b3dee9923fe75c90c7d0a4b13969a937ce1ef1a927e07c44f00855->enter($__internal_0e064ab511b3dee9923fe75c90c7d0a4b13969a937ce1ef1a927e07c44f00855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/core.js"));

        // line 1
        echo "define([
\t\"./var/arr\",
\t\"./var/slice\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./var/indexOf\",
\t\"./var/class2type\",
\t\"./var/toString\",
\t\"./var/hasOwn\",
\t\"./var/support\"
], function( arr, slice, concat, push, indexOf, class2type, toString, hasOwn, support ) {

var
\t// Use the correct document accordingly with window argument (sandbox)
\tdocument = window.document,

\tversion = \"@VERSION\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {
\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android<4.1
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([\\da-z])/gi,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t};

jQuery.fn = jQuery.prototype = {
\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// Start with an empty selector
\tselector: \"\",

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {
\t\treturn num != null ?

\t\t\t// Return just the one element from the set
\t\t\t( num < 0 ? this[ num + this.length ] : this[ num ] ) :

\t\t\t// Return all the elements in a clean array
\t\t\tslice.call( this );
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;
\t\tret.context = this.context;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\t// (You can seed the arguments with an array of args, but this is
\t// only used internally.)
\teach: function( callback, args ) {
\t\treturn jQuery.each( this, callback, args );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map(this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t}));
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
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[j] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor(null);
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[0] || {},
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
\tif ( typeof target !== \"object\" && !jQuery.isFunction(target) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {
\t\t// Only deal with non-null/undefined values
\t\tif ( (options = arguments[ i ]) != null ) {
\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {
\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && jQuery.isArray(src) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject(src) ? src : {};
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

jQuery.extend({
\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisFunction: function( obj ) {
\t\treturn jQuery.type(obj) === \"function\";
\t},

\tisArray: Array.isArray,

\tisWindow: function( obj ) {
\t\treturn obj != null && obj === obj.window;
\t},

\tisNumeric: function( obj ) {
\t\t// parseFloat NaNs numeric-cast false positives (null|true|false|\"\")
\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t// subtraction forces infinities to NaN
\t\t// adding 1 corrects loss of precision from parseFloat (#15100)
\t\treturn !jQuery.isArray( obj ) && (obj - parseFloat( obj ) + 1) >= 0;
\t},

\tisPlainObject: function( obj ) {
\t\t// Not plain objects:
\t\t// - Any object or value whose internal [[Class]] property is not \"[object Object]\"
\t\t// - DOM nodes
\t\t// - window
\t\tif ( jQuery.type( obj ) !== \"object\" || obj.nodeType || jQuery.isWindow( obj ) ) {
\t\t\treturn false;
\t\t}

\t\tif ( obj.constructor &&
\t\t\t\t!hasOwn.call( obj.constructor.prototype, \"isPrototypeOf\" ) ) {
\t\t\treturn false;
\t\t}

\t\t// If the function hasn't returned already, we're confident that
\t\t// |obj| is a plain object, created by {} or constructed with new Object
\t\treturn true;
\t},

\tisEmptyObject: function( obj ) {
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
\t\t// Support: Android<4.0, iOS<6 (functionish RegExp)
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call(obj) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code ) {
\t\tvar script,
\t\t\tindirect = eval;

\t\tcode = jQuery.trim( code );

\t\tif ( code ) {
\t\t\t// If the code includes a valid, prologue position
\t\t\t// strict mode pragma, execute code by injecting a
\t\t\t// script tag into the document.
\t\t\tif ( code.indexOf(\"use strict\") === 1 ) {
\t\t\t\tscript = document.createElement(\"script\");
\t\t\t\tscript.text = code;
\t\t\t\tdocument.head.appendChild( script ).parentNode.removeChild( script );
\t\t\t} else {
\t\t\t// Otherwise, avoid the DOM node creation, insertion
\t\t\t// and removal by using an indirect global eval
\t\t\t\tindirect( code );
\t\t\t}
\t\t}
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Support: IE9-11+
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\tnodeName: function( elem, name ) {
\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
\t},

\t// args is for internal usage only
\teach: function( obj, callback, args ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = obj.length,
\t\t\tisArray = isArraylike( obj );

\t\tif ( args ) {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// A special, fast, case for the most common use of each
\t\t} else {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android<4.1
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArraylike( Object(arr) ) ) {
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
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tisArray = isArraylike( elems ),
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArray ) {
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
});

// Populate the class2type map
jQuery.each(\"Boolean Number String Function Array Date RegExp Object Error\".split(\" \"), function(i, name) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
});

function isArraylike( obj ) {

\t// Support: iOS 8.2 (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = \"length\" in obj && obj.length,
\t\ttype = jQuery.type( obj );

\tif ( type === \"function\" || jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\tif ( obj.nodeType === 1 && length ) {
\t\treturn true;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}

return jQuery;
});
";
        
        $__internal_0e064ab511b3dee9923fe75c90c7d0a4b13969a937ce1ef1a927e07c44f00855->leave($__internal_0e064ab511b3dee9923fe75c90c7d0a4b13969a937ce1ef1a927e07c44f00855_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/core.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"./var/arr\",
\t\"./var/slice\",
\t\"./var/concat\",
\t\"./var/push\",
\t\"./var/indexOf\",
\t\"./var/class2type\",
\t\"./var/toString\",
\t\"./var/hasOwn\",
\t\"./var/support\"
], function( arr, slice, concat, push, indexOf, class2type, toString, hasOwn, support ) {

var
\t// Use the correct document accordingly with window argument (sandbox)
\tdocument = window.document,

\tversion = \"@VERSION\",

\t// Define a local copy of jQuery
\tjQuery = function( selector, context ) {
\t\t// The jQuery object is actually just the init constructor 'enhanced'
\t\t// Need init if jQuery is called (just allow error to be thrown if not included)
\t\treturn new jQuery.fn.init( selector, context );
\t},

\t// Support: Android<4.1
\t// Make sure we trim BOM and NBSP
\trtrim = /^[\\s\\uFEFF\\xA0]+|[\\s\\uFEFF\\xA0]+\$/g,

\t// Matches dashed string for camelizing
\trmsPrefix = /^-ms-/,
\trdashAlpha = /-([\\da-z])/gi,

\t// Used by jQuery.camelCase as callback to replace()
\tfcamelCase = function( all, letter ) {
\t\treturn letter.toUpperCase();
\t};

jQuery.fn = jQuery.prototype = {
\t// The current version of jQuery being used
\tjquery: version,

\tconstructor: jQuery,

\t// Start with an empty selector
\tselector: \"\",

\t// The default length of a jQuery object is 0
\tlength: 0,

\ttoArray: function() {
\t\treturn slice.call( this );
\t},

\t// Get the Nth element in the matched element set OR
\t// Get the whole matched element set as a clean array
\tget: function( num ) {
\t\treturn num != null ?

\t\t\t// Return just the one element from the set
\t\t\t( num < 0 ? this[ num + this.length ] : this[ num ] ) :

\t\t\t// Return all the elements in a clean array
\t\t\tslice.call( this );
\t},

\t// Take an array of elements and push it onto the stack
\t// (returning the new matched element set)
\tpushStack: function( elems ) {

\t\t// Build a new jQuery matched element set
\t\tvar ret = jQuery.merge( this.constructor(), elems );

\t\t// Add the old object onto the stack (as a reference)
\t\tret.prevObject = this;
\t\tret.context = this.context;

\t\t// Return the newly-formed element set
\t\treturn ret;
\t},

\t// Execute a callback for every element in the matched set.
\t// (You can seed the arguments with an array of args, but this is
\t// only used internally.)
\teach: function( callback, args ) {
\t\treturn jQuery.each( this, callback, args );
\t},

\tmap: function( callback ) {
\t\treturn this.pushStack( jQuery.map(this, function( elem, i ) {
\t\t\treturn callback.call( elem, i, elem );
\t\t}));
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
\t\treturn this.pushStack( j >= 0 && j < len ? [ this[j] ] : [] );
\t},

\tend: function() {
\t\treturn this.prevObject || this.constructor(null);
\t},

\t// For internal use only.
\t// Behaves like an Array's method, not like a jQuery method.
\tpush: push,
\tsort: arr.sort,
\tsplice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
\tvar options, name, src, copy, copyIsArray, clone,
\t\ttarget = arguments[0] || {},
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
\tif ( typeof target !== \"object\" && !jQuery.isFunction(target) ) {
\t\ttarget = {};
\t}

\t// Extend jQuery itself if only one argument is passed
\tif ( i === length ) {
\t\ttarget = this;
\t\ti--;
\t}

\tfor ( ; i < length; i++ ) {
\t\t// Only deal with non-null/undefined values
\t\tif ( (options = arguments[ i ]) != null ) {
\t\t\t// Extend the base object
\t\t\tfor ( name in options ) {
\t\t\t\tsrc = target[ name ];
\t\t\t\tcopy = options[ name ];

\t\t\t\t// Prevent never-ending loop
\t\t\t\tif ( target === copy ) {
\t\t\t\t\tcontinue;
\t\t\t\t}

\t\t\t\t// Recurse if we're merging plain objects or arrays
\t\t\t\tif ( deep && copy && ( jQuery.isPlainObject(copy) || (copyIsArray = jQuery.isArray(copy)) ) ) {
\t\t\t\t\tif ( copyIsArray ) {
\t\t\t\t\t\tcopyIsArray = false;
\t\t\t\t\t\tclone = src && jQuery.isArray(src) ? src : [];

\t\t\t\t\t} else {
\t\t\t\t\t\tclone = src && jQuery.isPlainObject(src) ? src : {};
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

jQuery.extend({
\t// Unique for each copy of jQuery on the page
\texpando: \"jQuery\" + ( version + Math.random() ).replace( /\\D/g, \"\" ),

\t// Assume jQuery is ready without the ready module
\tisReady: true,

\terror: function( msg ) {
\t\tthrow new Error( msg );
\t},

\tnoop: function() {},

\tisFunction: function( obj ) {
\t\treturn jQuery.type(obj) === \"function\";
\t},

\tisArray: Array.isArray,

\tisWindow: function( obj ) {
\t\treturn obj != null && obj === obj.window;
\t},

\tisNumeric: function( obj ) {
\t\t// parseFloat NaNs numeric-cast false positives (null|true|false|\"\")
\t\t// ...but misinterprets leading-number strings, particularly hex literals (\"0x...\")
\t\t// subtraction forces infinities to NaN
\t\t// adding 1 corrects loss of precision from parseFloat (#15100)
\t\treturn !jQuery.isArray( obj ) && (obj - parseFloat( obj ) + 1) >= 0;
\t},

\tisPlainObject: function( obj ) {
\t\t// Not plain objects:
\t\t// - Any object or value whose internal [[Class]] property is not \"[object Object]\"
\t\t// - DOM nodes
\t\t// - window
\t\tif ( jQuery.type( obj ) !== \"object\" || obj.nodeType || jQuery.isWindow( obj ) ) {
\t\t\treturn false;
\t\t}

\t\tif ( obj.constructor &&
\t\t\t\t!hasOwn.call( obj.constructor.prototype, \"isPrototypeOf\" ) ) {
\t\t\treturn false;
\t\t}

\t\t// If the function hasn't returned already, we're confident that
\t\t// |obj| is a plain object, created by {} or constructed with new Object
\t\treturn true;
\t},

\tisEmptyObject: function( obj ) {
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
\t\t// Support: Android<4.0, iOS<6 (functionish RegExp)
\t\treturn typeof obj === \"object\" || typeof obj === \"function\" ?
\t\t\tclass2type[ toString.call(obj) ] || \"object\" :
\t\t\ttypeof obj;
\t},

\t// Evaluates a script in a global context
\tglobalEval: function( code ) {
\t\tvar script,
\t\t\tindirect = eval;

\t\tcode = jQuery.trim( code );

\t\tif ( code ) {
\t\t\t// If the code includes a valid, prologue position
\t\t\t// strict mode pragma, execute code by injecting a
\t\t\t// script tag into the document.
\t\t\tif ( code.indexOf(\"use strict\") === 1 ) {
\t\t\t\tscript = document.createElement(\"script\");
\t\t\t\tscript.text = code;
\t\t\t\tdocument.head.appendChild( script ).parentNode.removeChild( script );
\t\t\t} else {
\t\t\t// Otherwise, avoid the DOM node creation, insertion
\t\t\t// and removal by using an indirect global eval
\t\t\t\tindirect( code );
\t\t\t}
\t\t}
\t},

\t// Convert dashed to camelCase; used by the css and data modules
\t// Support: IE9-11+
\t// Microsoft forgot to hump their vendor prefix (#9572)
\tcamelCase: function( string ) {
\t\treturn string.replace( rmsPrefix, \"ms-\" ).replace( rdashAlpha, fcamelCase );
\t},

\tnodeName: function( elem, name ) {
\t\treturn elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
\t},

\t// args is for internal usage only
\teach: function( obj, callback, args ) {
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = obj.length,
\t\t\tisArray = isArraylike( obj );

\t\tif ( args ) {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.apply( obj[ i ], args );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t// A special, fast, case for the most common use of each
\t\t} else {
\t\t\tif ( isArray ) {
\t\t\t\tfor ( ; i < length; i++ ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else {
\t\t\t\tfor ( i in obj ) {
\t\t\t\t\tvalue = callback.call( obj[ i ], i, obj[ i ] );

\t\t\t\t\tif ( value === false ) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn obj;
\t},

\t// Support: Android<4.1
\ttrim: function( text ) {
\t\treturn text == null ?
\t\t\t\"\" :
\t\t\t( text + \"\" ).replace( rtrim, \"\" );
\t},

\t// results is for internal usage only
\tmakeArray: function( arr, results ) {
\t\tvar ret = results || [];

\t\tif ( arr != null ) {
\t\t\tif ( isArraylike( Object(arr) ) ) {
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
\t\tvar value,
\t\t\ti = 0,
\t\t\tlength = elems.length,
\t\t\tisArray = isArraylike( elems ),
\t\t\tret = [];

\t\t// Go through the array, translating each of the items to their new values
\t\tif ( isArray ) {
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
});

// Populate the class2type map
jQuery.each(\"Boolean Number String Function Array Date RegExp Object Error\".split(\" \"), function(i, name) {
\tclass2type[ \"[object \" + name + \"]\" ] = name.toLowerCase();
});

function isArraylike( obj ) {

\t// Support: iOS 8.2 (not reproducible in simulator)
\t// `in` check used to prevent JIT error (gh-2145)
\t// hasOwn isn't used here due to false negatives
\t// regarding Nodelist length in IE
\tvar length = \"length\" in obj && obj.length,
\t\ttype = jQuery.type( obj );

\tif ( type === \"function\" || jQuery.isWindow( obj ) ) {
\t\treturn false;
\t}

\tif ( obj.nodeType === 1 && length ) {
\t\treturn true;
\t}

\treturn type === \"array\" || length === 0 ||
\t\ttypeof length === \"number\" && length > 0 && ( length - 1 ) in obj;
}

return jQuery;
});
", "node_modules/parsleyjs/bower_components/jquery/src/core.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/core.js");
    }
}
