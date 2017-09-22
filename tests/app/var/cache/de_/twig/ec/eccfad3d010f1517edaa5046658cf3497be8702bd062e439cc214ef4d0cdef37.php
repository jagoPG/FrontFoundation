<?php

/* node_modules/jquery/src/manipulation/buildFragment.js */
class __TwigTemplate_b9d3ec1caa2b7726c2b0975ff9fb1a109895b5977e91bbecee410d40aea9e77b extends Twig_Template
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
        $__internal_bda27191663492ec9be22104f101e3af3abafeb550a205524b31bfae635ea031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda27191663492ec9be22104f101e3af3abafeb550a205524b31bfae635ea031->enter($__internal_bda27191663492ec9be22104f101e3af3abafeb550a205524b31bfae635ea031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/manipulation/buildFragment.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"./var/rtagName\",
\t\"./var/rscriptType\",
\t\"./wrapMap\",
\t\"./getAll\",
\t\"./setGlobalEval\"
], function( jQuery, rtagName, rscriptType, wrapMap, getAll, setGlobalEval ) {

\"use strict\";

var rhtml = /<|&#?\\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
\tvar elem, tmp, tag, wrap, contains, j,
\t\tfragment = context.createDocumentFragment(),
\t\tnodes = [],
\t\ti = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\telem = elems[ i ];

\t\tif ( elem || elem === 0 ) {

\t\t\t// Add nodes directly
\t\t\tif ( jQuery.type( elem ) === \"object\" ) {

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t// Convert non-html into a text node
\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t// Convert html into DOM nodes
\t\t\t} else {
\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement( \"div\" ) );

\t\t\t\t// Deserialize a standard representation
\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\ttmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

\t\t\t\t// Descend through wrappers to the right content
\t\t\t\tj = wrap[ 0 ];
\t\t\t\twhile ( j-- ) {
\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t}

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t// Remember the top-level container
\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\ttmp.textContent = \"\";
\t\t\t}
\t\t}
\t}

\t// Remove wrapper from fragment
\tfragment.textContent = \"\";

\ti = 0;
\twhile ( ( elem = nodes[ i++ ] ) ) {

\t\t// Skip elements already in the context collection (trac-4087)
\t\tif ( selection && jQuery.inArray( elem, selection ) > -1 ) {
\t\t\tif ( ignored ) {
\t\t\t\tignored.push( elem );
\t\t\t}
\t\t\tcontinue;
\t\t}

\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t// Append to fragment
\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t// Preserve script evaluation history
\t\tif ( contains ) {
\t\t\tsetGlobalEval( tmp );
\t\t}

\t\t// Capture executables
\t\tif ( scripts ) {
\t\t\tj = 0;
\t\t\twhile ( ( elem = tmp[ j++ ] ) ) {
\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\tscripts.push( elem );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn fragment;
}

return buildFragment;
} );
";
        
        $__internal_bda27191663492ec9be22104f101e3af3abafeb550a205524b31bfae635ea031->leave($__internal_bda27191663492ec9be22104f101e3af3abafeb550a205524b31bfae635ea031_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/manipulation/buildFragment.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"./var/rtagName\",
\t\"./var/rscriptType\",
\t\"./wrapMap\",
\t\"./getAll\",
\t\"./setGlobalEval\"
], function( jQuery, rtagName, rscriptType, wrapMap, getAll, setGlobalEval ) {

\"use strict\";

var rhtml = /<|&#?\\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
\tvar elem, tmp, tag, wrap, contains, j,
\t\tfragment = context.createDocumentFragment(),
\t\tnodes = [],
\t\ti = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\telem = elems[ i ];

\t\tif ( elem || elem === 0 ) {

\t\t\t// Add nodes directly
\t\t\tif ( jQuery.type( elem ) === \"object\" ) {

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

\t\t\t// Convert non-html into a text node
\t\t\t} else if ( !rhtml.test( elem ) ) {
\t\t\t\tnodes.push( context.createTextNode( elem ) );

\t\t\t// Convert html into DOM nodes
\t\t\t} else {
\t\t\t\ttmp = tmp || fragment.appendChild( context.createElement( \"div\" ) );

\t\t\t\t// Deserialize a standard representation
\t\t\t\ttag = ( rtagName.exec( elem ) || [ \"\", \"\" ] )[ 1 ].toLowerCase();
\t\t\t\twrap = wrapMap[ tag ] || wrapMap._default;
\t\t\t\ttmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

\t\t\t\t// Descend through wrappers to the right content
\t\t\t\tj = wrap[ 0 ];
\t\t\t\twhile ( j-- ) {
\t\t\t\t\ttmp = tmp.lastChild;
\t\t\t\t}

\t\t\t\t// Support: Android <=4.0 only, PhantomJS 1 only
\t\t\t\t// push.apply(_, arraylike) throws on ancient WebKit
\t\t\t\tjQuery.merge( nodes, tmp.childNodes );

\t\t\t\t// Remember the top-level container
\t\t\t\ttmp = fragment.firstChild;

\t\t\t\t// Ensure the created nodes are orphaned (#12392)
\t\t\t\ttmp.textContent = \"\";
\t\t\t}
\t\t}
\t}

\t// Remove wrapper from fragment
\tfragment.textContent = \"\";

\ti = 0;
\twhile ( ( elem = nodes[ i++ ] ) ) {

\t\t// Skip elements already in the context collection (trac-4087)
\t\tif ( selection && jQuery.inArray( elem, selection ) > -1 ) {
\t\t\tif ( ignored ) {
\t\t\t\tignored.push( elem );
\t\t\t}
\t\t\tcontinue;
\t\t}

\t\tcontains = jQuery.contains( elem.ownerDocument, elem );

\t\t// Append to fragment
\t\ttmp = getAll( fragment.appendChild( elem ), \"script\" );

\t\t// Preserve script evaluation history
\t\tif ( contains ) {
\t\t\tsetGlobalEval( tmp );
\t\t}

\t\t// Capture executables
\t\tif ( scripts ) {
\t\t\tj = 0;
\t\t\twhile ( ( elem = tmp[ j++ ] ) ) {
\t\t\t\tif ( rscriptType.test( elem.type || \"\" ) ) {
\t\t\t\t\tscripts.push( elem );
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\treturn fragment;
}

return buildFragment;
} );
", "node_modules/jquery/src/manipulation/buildFragment.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/manipulation/buildFragment.js");
    }
}
