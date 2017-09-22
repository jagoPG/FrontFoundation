<?php

/* node_modules/parsleyjs/bower_components/jquery/src/attributes/classes.js */
class __TwigTemplate_700f240020f46bffbe7ccfb218ac6390fbef139da231317fc09179c69a2890d3 extends Twig_Template
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
        $__internal_624364079d2823ff7e752d87ceef6f96e1f78336359a14229c726717e0c79fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624364079d2823ff7e752d87ceef6f96e1f78336359a14229c726717e0c79fd5->enter($__internal_624364079d2823ff7e752d87ceef6f96e1f78336359a14229c726717e0c79fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/attributes/classes.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../var/rnotwhite\",
\t\"../var/strundefined\",
\t\"../data/var/data_priv\",
\t\"../core/init\"
], function( jQuery, rnotwhite, strundefined, data_priv ) {

var rclass = /[\\t\\r\\n\\f]/g;

jQuery.fn.extend({
\taddClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}

\t\tif ( proceed ) {
\t\t\t// The disjunction here is for better compressibility (see removeClass)
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\" \"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = jQuery.trim( cur );
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = arguments.length === 0 || typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}
\t\tif ( proceed ) {
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\"\"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) >= 0 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = value ? jQuery.trim( cur ) : \"\";
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value;

\t\tif ( typeof stateVal === \"boolean\" && type === \"string\" ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( type === \"string\" ) {
\t\t\t\t// Toggle individual class names
\t\t\t\tvar className,
\t\t\t\t\ti = 0,
\t\t\t\t\tself = jQuery( this ),
\t\t\t\t\tclassNames = value.match( rnotwhite ) || [];

\t\t\t\twhile ( (className = classNames[ i++ ]) ) {
\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( type === strundefined || type === \"boolean\" ) {
\t\t\t\tif ( this.className ) {
\t\t\t\t\t// store className if set
\t\t\t\t\tdata_priv.set( this, \"__className__\", this.className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tthis.className = this.className || value === false ? \"\" : data_priv.get( this, \"__className__\" ) || \"\";
\t\t\t}
\t\t});
\t},

\thasClass: function( selector ) {
\t\tvar className = \" \" + selector + \" \",
\t\t\ti = 0,
\t\t\tl = this.length;
\t\tfor ( ; i < l; i++ ) {
\t\t\tif ( this[i].nodeType === 1 && (\" \" + this[i].className + \" \").replace(rclass, \" \").indexOf( className ) >= 0 ) {
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
});

});
";
        
        $__internal_624364079d2823ff7e752d87ceef6f96e1f78336359a14229c726717e0c79fd5->leave($__internal_624364079d2823ff7e752d87ceef6f96e1f78336359a14229c726717e0c79fd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/attributes/classes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../var/rnotwhite\",
\t\"../var/strundefined\",
\t\"../data/var/data_priv\",
\t\"../core/init\"
], function( jQuery, rnotwhite, strundefined, data_priv ) {

var rclass = /[\\t\\r\\n\\f]/g;

jQuery.fn.extend({
\taddClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).addClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}

\t\tif ( proceed ) {
\t\t\t// The disjunction here is for better compressibility (see removeClass)
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\" \"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\tif ( cur.indexOf( \" \" + clazz + \" \" ) < 0 ) {
\t\t\t\t\t\t\tcur += clazz + \" \";
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = jQuery.trim( cur );
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\tremoveClass: function( value ) {
\t\tvar classes, elem, cur, clazz, j, finalValue,
\t\t\tproceed = arguments.length === 0 || typeof value === \"string\" && value,
\t\t\ti = 0,
\t\t\tlen = this.length;

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( j ) {
\t\t\t\tjQuery( this ).removeClass( value.call( this, j, this.className ) );
\t\t\t});
\t\t}
\t\tif ( proceed ) {
\t\t\tclasses = ( value || \"\" ).match( rnotwhite ) || [];

\t\t\tfor ( ; i < len; i++ ) {
\t\t\t\telem = this[ i ];
\t\t\t\t// This expression is here for better compressibility (see addClass)
\t\t\t\tcur = elem.nodeType === 1 && ( elem.className ?
\t\t\t\t\t( \" \" + elem.className + \" \" ).replace( rclass, \" \" ) :
\t\t\t\t\t\"\"
\t\t\t\t);

\t\t\t\tif ( cur ) {
\t\t\t\t\tj = 0;
\t\t\t\t\twhile ( (clazz = classes[j++]) ) {
\t\t\t\t\t\t// Remove *all* instances
\t\t\t\t\t\twhile ( cur.indexOf( \" \" + clazz + \" \" ) >= 0 ) {
\t\t\t\t\t\t\tcur = cur.replace( \" \" + clazz + \" \", \" \" );
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Only assign if different to avoid unneeded rendering.
\t\t\t\t\tfinalValue = value ? jQuery.trim( cur ) : \"\";
\t\t\t\t\tif ( elem.className !== finalValue ) {
\t\t\t\t\t\telem.className = finalValue;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn this;
\t},

\ttoggleClass: function( value, stateVal ) {
\t\tvar type = typeof value;

\t\tif ( typeof stateVal === \"boolean\" && type === \"string\" ) {
\t\t\treturn stateVal ? this.addClass( value ) : this.removeClass( value );
\t\t}

\t\tif ( jQuery.isFunction( value ) ) {
\t\t\treturn this.each(function( i ) {
\t\t\t\tjQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
\t\t\t});
\t\t}

\t\treturn this.each(function() {
\t\t\tif ( type === \"string\" ) {
\t\t\t\t// Toggle individual class names
\t\t\t\tvar className,
\t\t\t\t\ti = 0,
\t\t\t\t\tself = jQuery( this ),
\t\t\t\t\tclassNames = value.match( rnotwhite ) || [];

\t\t\t\twhile ( (className = classNames[ i++ ]) ) {
\t\t\t\t\t// Check each className given, space separated list
\t\t\t\t\tif ( self.hasClass( className ) ) {
\t\t\t\t\t\tself.removeClass( className );
\t\t\t\t\t} else {
\t\t\t\t\t\tself.addClass( className );
\t\t\t\t\t}
\t\t\t\t}

\t\t\t// Toggle whole class name
\t\t\t} else if ( type === strundefined || type === \"boolean\" ) {
\t\t\t\tif ( this.className ) {
\t\t\t\t\t// store className if set
\t\t\t\t\tdata_priv.set( this, \"__className__\", this.className );
\t\t\t\t}

\t\t\t\t// If the element has a class name or if we're passed `false`,
\t\t\t\t// then remove the whole classname (if there was one, the above saved it).
\t\t\t\t// Otherwise bring back whatever was previously saved (if anything),
\t\t\t\t// falling back to the empty string if nothing was stored.
\t\t\t\tthis.className = this.className || value === false ? \"\" : data_priv.get( this, \"__className__\" ) || \"\";
\t\t\t}
\t\t});
\t},

\thasClass: function( selector ) {
\t\tvar className = \" \" + selector + \" \",
\t\t\ti = 0,
\t\t\tl = this.length;
\t\tfor ( ; i < l; i++ ) {
\t\t\tif ( this[i].nodeType === 1 && (\" \" + this[i].className + \" \").replace(rclass, \" \").indexOf( className ) >= 0 ) {
\t\t\t\treturn true;
\t\t\t}
\t\t}

\t\treturn false;
\t}
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/attributes/classes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/attributes/classes.js");
    }
}
