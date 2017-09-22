<?php

/* node_modules/parsleyjs/bower_components/jquery/src/css/hiddenVisibleSelectors.js */
class __TwigTemplate_be1e6591005da48eb405a846b261b82566af89752e8dfa2e31abc1b09771393f extends Twig_Template
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
        $__internal_a01c4ca6ce4d0025a201dd61b95047f0e802abfd1688446af35f96f35c2eff7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01c4ca6ce4d0025a201dd61b95047f0e802abfd1688446af35f96f35c2eff7d->enter($__internal_a01c4ca6ce4d0025a201dd61b95047f0e802abfd1688446af35f96f35c2eff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/jquery/src/css/hiddenVisibleSelectors.js"));

        // line 1
        echo "define([
\t\"../core\",
\t\"../selector\"
], function( jQuery ) {

jQuery.expr.filters.hidden = function( elem ) {
\t// Support: Opera <= 12.12
\t// Opera reports offsetWidths and offsetHeights less than zero on some elements
\treturn elem.offsetWidth <= 0 && elem.offsetHeight <= 0;
};
jQuery.expr.filters.visible = function( elem ) {
\treturn !jQuery.expr.filters.hidden( elem );
};

});
";
        
        $__internal_a01c4ca6ce4d0025a201dd61b95047f0e802abfd1688446af35f96f35c2eff7d->leave($__internal_a01c4ca6ce4d0025a201dd61b95047f0e802abfd1688446af35f96f35c2eff7d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/jquery/src/css/hiddenVisibleSelectors.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define([
\t\"../core\",
\t\"../selector\"
], function( jQuery ) {

jQuery.expr.filters.hidden = function( elem ) {
\t// Support: Opera <= 12.12
\t// Opera reports offsetWidths and offsetHeights less than zero on some elements
\treturn elem.offsetWidth <= 0 && elem.offsetHeight <= 0;
};
jQuery.expr.filters.visible = function( elem ) {
\treturn !jQuery.expr.filters.hidden( elem );
};

});
", "node_modules/parsleyjs/bower_components/jquery/src/css/hiddenVisibleSelectors.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/jquery/src/css/hiddenVisibleSelectors.js");
    }
}
