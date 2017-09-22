<?php

/* node_modules/parsleyjs/bower_components/jquery/src/attributes/prop.js */
class __TwigTemplate_ef08611c40428c050abb666cacf7255c56bd7d1fd891c066bf2e1957cd71e086 extends Twig_Template
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
        $__internal_a01c70eab61214606c8526ddae2620c9309dd55e1a057ad67a9da004f28687fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01c70eab61214606c8526ddae2620c9309dd55e1a057ad67a9da004f28687fc->enter($__internal_a01c70eab61214606c8526ddae2620c9309dd55e1a057ad67a9da004f28687fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/attributes/prop.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../core/access\",
\t\"./support\"
], function( jQuery, access, support ) {

var rfocusable = /^(?:input|select|textarea|button)\$/i;

jQuery.fn.extend({
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each(function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t});
\t}
});

jQuery.extend({
\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t},

\tprop: function( elem, name, value ) {
\t\tvar ret, hooks, notxml,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tnotxml = nType !== 1 || !jQuery.isXMLDoc( elem );

\t\tif ( notxml ) {
\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\treturn hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ?
\t\t\t\tret :
\t\t\t\t( elem[ name ] = value );

\t\t} else {
\t\t\treturn hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ?
\t\t\t\tret :
\t\t\t\telem[ name ];
\t\t}
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {
\t\t\t\treturn elem.hasAttribute( \"tabindex\" ) || rfocusable.test( elem.nodeName ) || elem.href ?
\t\t\t\t\telem.tabIndex :
\t\t\t\t\t-1;
\t\t\t}
\t\t}
\t}
});

if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {
\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t}
\t};
}

jQuery.each([
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
});

});
";
        
        $__internal_a01c70eab61214606c8526ddae2620c9309dd55e1a057ad67a9da004f28687fc->leave($__internal_a01c70eab61214606c8526ddae2620c9309dd55e1a057ad67a9da004f28687fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/attributes/prop.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../core/access\",
\t\"./support\"
], function( jQuery, access, support ) {

var rfocusable = /^(?:input|select|textarea|button)\$/i;

jQuery.fn.extend({
\tprop: function( name, value ) {
\t\treturn access( this, jQuery.prop, name, value, arguments.length > 1 );
\t},

\tremoveProp: function( name ) {
\t\treturn this.each(function() {
\t\t\tdelete this[ jQuery.propFix[ name ] || name ];
\t\t});
\t}
});

jQuery.extend({
\tpropFix: {
\t\t\"for\": \"htmlFor\",
\t\t\"class\": \"className\"
\t},

\tprop: function( elem, name, value ) {
\t\tvar ret, hooks, notxml,
\t\t\tnType = elem.nodeType;

\t\t// Don't get/set properties on text, comment and attribute nodes
\t\tif ( !elem || nType === 3 || nType === 8 || nType === 2 ) {
\t\t\treturn;
\t\t}

\t\tnotxml = nType !== 1 || !jQuery.isXMLDoc( elem );

\t\tif ( notxml ) {
\t\t\t// Fix name and attach hooks
\t\t\tname = jQuery.propFix[ name ] || name;
\t\t\thooks = jQuery.propHooks[ name ];
\t\t}

\t\tif ( value !== undefined ) {
\t\t\treturn hooks && \"set\" in hooks && (ret = hooks.set( elem, value, name )) !== undefined ?
\t\t\t\tret :
\t\t\t\t( elem[ name ] = value );

\t\t} else {
\t\t\treturn hooks && \"get\" in hooks && (ret = hooks.get( elem, name )) !== null ?
\t\t\t\tret :
\t\t\t\telem[ name ];
\t\t}
\t},

\tpropHooks: {
\t\ttabIndex: {
\t\t\tget: function( elem ) {
\t\t\t\treturn elem.hasAttribute( \"tabindex\" ) || rfocusable.test( elem.nodeName ) || elem.href ?
\t\t\t\t\telem.tabIndex :
\t\t\t\t\t-1;
\t\t\t}
\t\t}
\t}
});

if ( !support.optSelected ) {
\tjQuery.propHooks.selected = {
\t\tget: function( elem ) {
\t\t\tvar parent = elem.parentNode;
\t\t\tif ( parent && parent.parentNode ) {
\t\t\t\tparent.parentNode.selectedIndex;
\t\t\t}
\t\t\treturn null;
\t\t}
\t};
}

jQuery.each([
\t\"tabIndex\",
\t\"readOnly\",
\t\"maxLength\",
\t\"cellSpacing\",
\t\"cellPadding\",
\t\"rowSpan\",
\t\"colSpan\",
\t\"useMap\",
\t\"frameBorder\",
\t\"contentEditable\"
], function() {
\tjQuery.propFix[ this.toLowerCase() ] = this;
});

});
", "node_modules/parsleyjs/bower_components/jquery/src/attributes/prop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/attributes/prop.js");
    }
}
