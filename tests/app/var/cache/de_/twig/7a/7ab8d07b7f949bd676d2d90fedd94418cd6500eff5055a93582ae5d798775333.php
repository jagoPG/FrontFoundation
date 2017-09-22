<?php

/* node_modules/jquery/src/css/var/getStyles.js */
class __TwigTemplate_c35257cab3b9f778ecbd93eccc708e921798a55274892cf38764293162670c90 extends Twig_Template
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
        $__internal_6858e869012ebc20f8097a88beafc2b66ac535747d323b04905769c6a18cb188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6858e869012ebc20f8097a88beafc2b66ac535747d323b04905769c6a18cb188->enter($__internal_6858e869012ebc20f8097a88beafc2b66ac535747d323b04905769c6a18cb188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/var/getStyles.js"));

        // line 1
        echo "define( function() {
\t\"use strict\";

\treturn function( elem ) {

\t\t// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tvar view = elem.ownerDocument.defaultView;

\t\tif ( !view || !view.opener ) {
\t\t\tview = window;
\t\t}

\t\treturn view.getComputedStyle( elem );
\t};
} );
";
        
        $__internal_6858e869012ebc20f8097a88beafc2b66ac535747d323b04905769c6a18cb188->leave($__internal_6858e869012ebc20f8097a88beafc2b66ac535747d323b04905769c6a18cb188_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/var/getStyles.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {
\t\"use strict\";

\treturn function( elem ) {

\t\t// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
\t\t// IE throws on elements created in popups
\t\t// FF meanwhile throws on frame elements through \"defaultView.getComputedStyle\"
\t\tvar view = elem.ownerDocument.defaultView;

\t\tif ( !view || !view.opener ) {
\t\t\tview = window;
\t\t}

\t\treturn view.getComputedStyle( elem );
\t};
} );
", "node_modules/jquery/src/css/var/getStyles.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/var/getStyles.js");
    }
}
