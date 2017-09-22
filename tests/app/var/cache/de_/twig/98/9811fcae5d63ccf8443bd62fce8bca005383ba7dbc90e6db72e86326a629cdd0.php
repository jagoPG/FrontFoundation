<?php

/* node_modules/jquery/src/css/var/isHiddenWithinTree.js */
class __TwigTemplate_fd85ef67d7a67cfa30111ca298d16edeca4e08de0db49325680fbb92aa123c58 extends Twig_Template
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
        $__internal_300c94fe03de8dd8e3188274bec4dedf9277b6e84023f7fffd7eb1ea1f14d043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300c94fe03de8dd8e3188274bec4dedf9277b6e84023f7fffd7eb1ea1f14d043->enter($__internal_300c94fe03de8dd8e3188274bec4dedf9277b6e84023f7fffd7eb1ea1f14d043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/var/isHiddenWithinTree.js"));

        // line 1
        echo "define( [
\t\"../../core\",
\t\"../../selector\"

\t// css is assumed
], function( jQuery ) {
\t\"use strict\";

\t// isHiddenWithinTree reports if an element has a non-\"none\" display style (inline and/or
\t// through the CSS cascade), which is useful in deciding whether or not to make it visible.
\t// It differs from the :hidden selector (jQuery.expr.pseudos.hidden) in two important ways:
\t// * A hidden ancestor does not force an element to be classified as hidden.
\t// * Being disconnected from the document does not force an element to be classified as hidden.
\t// These differences improve the behavior of .toggle() et al. when applied to elements that are
\t// detached or contained within hidden ancestors (gh-2404, gh-2863).
\treturn function( elem, el ) {

\t\t// isHiddenWithinTree might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;

\t\t// Inline style trumps all
\t\treturn elem.style.display === \"none\" ||
\t\t\telem.style.display === \"\" &&

\t\t\t// Otherwise, check computed style
\t\t\t// Support: Firefox <=43 - 45
\t\t\t// Disconnected elements can have computed display: none, so first confirm that elem is
\t\t\t// in the document.
\t\t\tjQuery.contains( elem.ownerDocument, elem ) &&

\t\t\tjQuery.css( elem, \"display\" ) === \"none\";
\t};
} );
";
        
        $__internal_300c94fe03de8dd8e3188274bec4dedf9277b6e84023f7fffd7eb1ea1f14d043->leave($__internal_300c94fe03de8dd8e3188274bec4dedf9277b6e84023f7fffd7eb1ea1f14d043_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/var/isHiddenWithinTree.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../../core\",
\t\"../../selector\"

\t// css is assumed
], function( jQuery ) {
\t\"use strict\";

\t// isHiddenWithinTree reports if an element has a non-\"none\" display style (inline and/or
\t// through the CSS cascade), which is useful in deciding whether or not to make it visible.
\t// It differs from the :hidden selector (jQuery.expr.pseudos.hidden) in two important ways:
\t// * A hidden ancestor does not force an element to be classified as hidden.
\t// * Being disconnected from the document does not force an element to be classified as hidden.
\t// These differences improve the behavior of .toggle() et al. when applied to elements that are
\t// detached or contained within hidden ancestors (gh-2404, gh-2863).
\treturn function( elem, el ) {

\t\t// isHiddenWithinTree might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;

\t\t// Inline style trumps all
\t\treturn elem.style.display === \"none\" ||
\t\t\telem.style.display === \"\" &&

\t\t\t// Otherwise, check computed style
\t\t\t// Support: Firefox <=43 - 45
\t\t\t// Disconnected elements can have computed display: none, so first confirm that elem is
\t\t\t// in the document.
\t\t\tjQuery.contains( elem.ownerDocument, elem ) &&

\t\t\tjQuery.css( elem, \"display\" ) === \"none\";
\t};
} );
", "node_modules/jquery/src/css/var/isHiddenWithinTree.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/var/isHiddenWithinTree.js");
    }
}
