<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/var/isHidden.js */
class __TwigTemplate_1fea3d4c797525659d36d9cfe6ca49d47bc096c64f4bc107f7790194da99c638 extends Twig_Template
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
        $__internal_42446ff95072aea9d4f8752923f7f90cded0a54db20515a81a4b34cd7f28f408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42446ff95072aea9d4f8752923f7f90cded0a54db20515a81a4b34cd7f28f408->enter($__internal_42446ff95072aea9d4f8752923f7f90cded0a54db20515a81a4b34cd7f28f408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/var/isHidden.js"));

        // line 1
        echo "define([
\t\"../../core\",
\t\"../../selector\"
\t// css is assumed
], function( jQuery ) {

\treturn function( elem, el ) {
\t\t// isHidden might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;
\t\treturn jQuery.css( elem, \"display\" ) === \"none\" || !jQuery.contains( elem.ownerDocument, elem );
\t};
});
";
        
        $__internal_42446ff95072aea9d4f8752923f7f90cded0a54db20515a81a4b34cd7f28f408->leave($__internal_42446ff95072aea9d4f8752923f7f90cded0a54db20515a81a4b34cd7f28f408_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/var/isHidden.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../../core\",
\t\"../../selector\"
\t// css is assumed
], function( jQuery ) {

\treturn function( elem, el ) {
\t\t// isHidden might be called from jQuery#filter function;
\t\t// in that case, element will be second argument
\t\telem = el || elem;
\t\treturn jQuery.css( elem, \"display\" ) === \"none\" || !jQuery.contains( elem.ownerDocument, elem );
\t};
});
", "node_modules/parsleyjs/bower_components/jquery/src/css/var/isHidden.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/var/isHidden.js");
    }
}
