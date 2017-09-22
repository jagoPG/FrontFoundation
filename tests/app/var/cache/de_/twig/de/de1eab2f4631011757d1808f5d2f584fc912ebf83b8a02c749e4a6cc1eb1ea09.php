<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/var/getStyles.js */
class __TwigTemplate_77c5b00919801e4fe092840db088e926e410917af411b7dd36962b7315c40c9e extends Twig_Template
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
        $__internal_bc147b04eb9a9b6c41d1bdcd0953cc200907e7fcb4dc18fc049c53417dc08ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc147b04eb9a9b6c41d1bdcd0953cc200907e7fcb4dc18fc049c53417dc08ec0->enter($__internal_bc147b04eb9a9b6c41d1bdcd0953cc200907e7fcb4dc18fc049c53417dc08ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/var/getStyles.js"));

        // line 1
        echo "define(function() {
\treturn function( elem ) {
\t\t// Support: IE<=11+, Firefox<=30+ (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tif ( elem.ownerDocument.defaultView.opener ) {
\t\t\treturn elem.ownerDocument.defaultView.getComputedStyle( elem, null );
\t\t}

\t\treturn window.getComputedStyle( elem, null );
\t};
});
";
        
        $__internal_bc147b04eb9a9b6c41d1bdcd0953cc200907e7fcb4dc18fc049c53417dc08ec0->leave($__internal_bc147b04eb9a9b6c41d1bdcd0953cc200907e7fcb4dc18fc049c53417dc08ec0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/var/getStyles.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define(function() {
\treturn function( elem ) {
\t\t// Support: IE<=11+, Firefox<=30+ (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tif ( elem.ownerDocument.defaultView.opener ) {
\t\t\treturn elem.ownerDocument.defaultView.getComputedStyle( elem, null );
\t\t}

\t\treturn window.getComputedStyle( elem, null );
\t};
});
", "node_modules/parsleyjs/bower_components/jquery/src/css/var/getStyles.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/var/getStyles.js");
    }
}
