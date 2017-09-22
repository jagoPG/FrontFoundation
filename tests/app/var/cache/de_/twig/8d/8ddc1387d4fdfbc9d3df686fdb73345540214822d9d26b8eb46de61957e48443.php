<?php

/* node_modules/jquery/src/core/access.js */
class __TwigTemplate_d3a932887467440805176d5154d69e01ea2e3c0629ae379d519f86906d505073 extends Twig_Template
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
        $__internal_b89fe7b1754d8976d9082613e90215a0d9868ac15ebcaf0c982d2aaac0f1bc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89fe7b1754d8976d9082613e90215a0d9868ac15ebcaf0c982d2aaac0f1bc6c->enter($__internal_b89fe7b1754d8976d9082613e90215a0d9868ac15ebcaf0c982d2aaac0f1bc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/access.js"));

        // line 1
        echo "define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( jQuery.type( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\taccess( elems, fn, i, key[ i ], true, emptyGet, raw );
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
\t\t\t\tfn(
\t\t\t\t\telems[ i ], key, raw ?
\t\t\t\t\tvalue :
\t\t\t\t\tvalue.call( elems[ i ], i, fn( elems[ i ], key ) )
\t\t\t\t);
\t\t\t}
\t\t}
\t}

\tif ( chainable ) {
\t\treturn elems;
\t}

\t// Gets
\tif ( bulk ) {
\t\treturn fn.call( elems );
\t}

\treturn len ? fn( elems[ 0 ], key ) : emptyGet;
};

return access;

} );
";
        
        $__internal_b89fe7b1754d8976d9082613e90215a0d9868ac15ebcaf0c982d2aaac0f1bc6c->leave($__internal_b89fe7b1754d8976d9082613e90215a0d9868ac15ebcaf0c982d2aaac0f1bc6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/access.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\"
], function( jQuery ) {

\"use strict\";

// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
\tvar i = 0,
\t\tlen = elems.length,
\t\tbulk = key == null;

\t// Sets many values
\tif ( jQuery.type( key ) === \"object\" ) {
\t\tchainable = true;
\t\tfor ( i in key ) {
\t\t\taccess( elems, fn, i, key[ i ], true, emptyGet, raw );
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
\t\t\t\tfn(
\t\t\t\t\telems[ i ], key, raw ?
\t\t\t\t\tvalue :
\t\t\t\t\tvalue.call( elems[ i ], i, fn( elems[ i ], key ) )
\t\t\t\t);
\t\t\t}
\t\t}
\t}

\tif ( chainable ) {
\t\treturn elems;
\t}

\t// Gets
\tif ( bulk ) {
\t\treturn fn.call( elems );
\t}

\treturn len ? fn( elems[ 0 ], key ) : emptyGet;
};

return access;

} );
", "node_modules/jquery/src/core/access.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/access.js");
    }
}
