<?php

/* node_modules/jquery/src/deprecated.js */
class __TwigTemplate_2d1c7cf9f1d511d27dc34bdd2f26568055632ed73da8ec27bda25077e0987afb extends Twig_Template
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
        $__internal_548d82413f5d0735575aa042b375ad3d0c43f0acaaa230164722ab3830ccab11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548d82413f5d0735575aa042b375ad3d0c43f0acaaa230164722ab3830ccab11->enter($__internal_548d82413f5d0735575aa042b375ad3d0c43f0acaaa230164722ab3830ccab11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/deprecated.js"));

        // line 1
        echo "define( [
\t\"./core\",
\t\"./core/nodeName\"
], function( jQuery, nodeName ) {

\"use strict\";

jQuery.fn.extend( {

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {

\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ?
\t\t\tthis.off( selector, \"**\" ) :
\t\t\tthis.off( types, selector || \"**\", fn );
\t}
} );

jQuery.holdReady = function( hold ) {
\tif ( hold ) {
\t\tjQuery.readyWait++;
\t} else {
\t\tjQuery.ready( true );
\t}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;

} );
";
        
        $__internal_548d82413f5d0735575aa042b375ad3d0c43f0acaaa230164722ab3830ccab11->leave($__internal_548d82413f5d0735575aa042b375ad3d0c43f0acaaa230164722ab3830ccab11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/deprecated.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./core\",
\t\"./core/nodeName\"
], function( jQuery, nodeName ) {

\"use strict\";

jQuery.fn.extend( {

\tbind: function( types, data, fn ) {
\t\treturn this.on( types, null, data, fn );
\t},
\tunbind: function( types, fn ) {
\t\treturn this.off( types, null, fn );
\t},

\tdelegate: function( selector, types, data, fn ) {
\t\treturn this.on( types, selector, data, fn );
\t},
\tundelegate: function( selector, types, fn ) {

\t\t// ( namespace ) or ( selector, types [, fn] )
\t\treturn arguments.length === 1 ?
\t\t\tthis.off( selector, \"**\" ) :
\t\t\tthis.off( types, selector || \"**\", fn );
\t}
} );

jQuery.holdReady = function( hold ) {
\tif ( hold ) {
\t\tjQuery.readyWait++;
\t} else {
\t\tjQuery.ready( true );
\t}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;

} );
", "node_modules/jquery/src/deprecated.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/deprecated.js");
    }
}
