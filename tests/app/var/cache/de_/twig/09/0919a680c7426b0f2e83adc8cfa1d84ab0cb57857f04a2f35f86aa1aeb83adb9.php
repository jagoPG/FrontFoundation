<?php

/* node_modules/jquery/src/css/hiddenVisibleSelectors.js */
class __TwigTemplate_689db69baa5c1dfb200e6fa52d757d6e332239991726302c88d56a854dc250fe extends Twig_Template
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
        $__internal_5ae129b77c1b5d7f40b62a57bc63ce0ac917a3c9f826f9c0d6b8059904123802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae129b77c1b5d7f40b62a57bc63ce0ac917a3c9f826f9c0d6b8059904123802->enter($__internal_5ae129b77c1b5d7f40b62a57bc63ce0ac917a3c9f826f9c0d6b8059904123802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/hiddenVisibleSelectors.js"));

        // line 1
        echo "define( [
\t\"../core\",
\t\"../selector\"
], function( jQuery ) {

\"use strict\";

jQuery.expr.pseudos.hidden = function( elem ) {
\treturn !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
\treturn !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};

} );
";
        
        $__internal_5ae129b77c1b5d7f40b62a57bc63ce0ac917a3c9f826f9c0d6b8059904123802->leave($__internal_5ae129b77c1b5d7f40b62a57bc63ce0ac917a3c9f826f9c0d6b8059904123802_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/hiddenVisibleSelectors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../core\",
\t\"../selector\"
], function( jQuery ) {

\"use strict\";

jQuery.expr.pseudos.hidden = function( elem ) {
\treturn !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
\treturn !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};

} );
", "node_modules/jquery/src/css/hiddenVisibleSelectors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/hiddenVisibleSelectors.js");
    }
}
