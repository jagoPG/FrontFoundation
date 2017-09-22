<?php

/* node_modules/parsleyjs/bower_components/jquery/src/core/access.js */
class __TwigTemplate_3a9c4616dddfbd5c17b5d7bef42109a1886e0417a1802c7ca95c8f5291759044 extends Twig_Template
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
        $__internal_093260ca8e53f74d1cbcd580568e9ee11403c7810128d54f88577f1706255ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093260ca8e53f74d1cbcd580568e9ee11403c7810128d54f88577f1706255ffb->enter($__internal_093260ca8e53f74d1cbcd580568e9ee11403c7810128d54f88577f1706255ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/core/access.js"));

        // line 1
        echo "define([
\t\"../core\"
], function( jQuery ) {

// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = jQuery.access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( jQuery.type( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\tjQuery.access( elems, fn, i, key[i], true, emptyGet, raw );
\t\t}

\t// Sets one value
\t} else if ( value !== undefined ) {
\t\tchainable = true;

\t\tif ( !jQuery.isFunction( value ) ) {
\t\t\traw = true;
\t\t}

\t\tif ( bulk ) {
\t\t\t// Bulk operations run against the entire set
\t\t\tif ( raw ) {
\t\t\t\tfn.call( elems, value );
\t\t\t\tfn = null;

\t\t\t// ...except when executing function values
\t\t\t} else {
\t\t\t\tbulk = fn;
\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t};
\t\t\t}
\t\t}

\t\tif ( fn ) {
\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\tfn( elems[i], key, raw ? value : value.call( elems[i], i, fn( elems[i], key ) ) );
\t\t\t}
\t\t}
\t}

\treturn chainable ?
\t\telems :

\t\t// Gets
\t\tbulk ?
\t\t\tfn.call( elems ) :
\t\t\tlen ? fn( elems[0], key ) : emptyGet;
};

return access;

});
";
        
        $__internal_093260ca8e53f74d1cbcd580568e9ee11403c7810128d54f88577f1706255ffb->leave($__internal_093260ca8e53f74d1cbcd580568e9ee11403c7810128d54f88577f1706255ffb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/core/access.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\"
], function( jQuery ) {

// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = jQuery.access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( jQuery.type( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\tjQuery.access( elems, fn, i, key[i], true, emptyGet, raw );
\t\t}

\t// Sets one value
\t} else if ( value !== undefined ) {
\t\tchainable = true;

\t\tif ( !jQuery.isFunction( value ) ) {
\t\t\traw = true;
\t\t}

\t\tif ( bulk ) {
\t\t\t// Bulk operations run against the entire set
\t\t\tif ( raw ) {
\t\t\t\tfn.call( elems, value );
\t\t\t\tfn = null;

\t\t\t// ...except when executing function values
\t\t\t} else {
\t\t\t\tbulk = fn;
\t\t\t\tfn = function( elem, key, value ) {
\t\t\t\t\treturn bulk.call( jQuery( elem ), value );
\t\t\t\t};
\t\t\t}
\t\t}

\t\tif ( fn ) {
\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\tfn( elems[i], key, raw ? value : value.call( elems[i], i, fn( elems[i], key ) ) );
\t\t\t}
\t\t}
\t}

\treturn chainable ?
\t\telems :

\t\t// Gets
\t\tbulk ?
\t\t\tfn.call( elems ) :
\t\t\tlen ? fn( elems[0], key ) : emptyGet;
};

return access;

});
", "node_modules/parsleyjs/bower_components/jquery/src/core/access.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/core/access.js");
    }
}
