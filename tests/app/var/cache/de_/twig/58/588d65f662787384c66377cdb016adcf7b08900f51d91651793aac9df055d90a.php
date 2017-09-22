<?php

/* node_modules/jquery/src/manipulation/setGlobalEval.js */
class __TwigTemplate_bff8f9fd236b9cff73e03b22bfc360d8b5013ad4edc0916ba8f8a9ec91693ec5 extends Twig_Template
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
        $__internal_3b4425fb0c4e06f646f09802edb33a4bc7a146f35215bb2a07ff2bdaa998df4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4425fb0c4e06f646f09802edb33a4bc7a146f35215bb2a07ff2bdaa998df4e->enter($__internal_3b4425fb0c4e06f646f09802edb33a4bc7a146f35215bb2a07ff2bdaa998df4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/manipulation/setGlobalEval.js"));

        // line 1
        echo "define( [
\t\"../data/var/dataPriv\"
], function( dataPriv ) {

\"use strict\";

// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdataPriv.set(
\t\t\telems[ i ],
\t\t\t\"globalEval\",
\t\t\t!refElements || dataPriv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}

return setGlobalEval;
} );
";
        
        $__internal_3b4425fb0c4e06f646f09802edb33a4bc7a146f35215bb2a07ff2bdaa998df4e->leave($__internal_3b4425fb0c4e06f646f09802edb33a4bc7a146f35215bb2a07ff2bdaa998df4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/manipulation/setGlobalEval.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../data/var/dataPriv\"
], function( dataPriv ) {

\"use strict\";

// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
\tvar i = 0,
\t\tl = elems.length;

\tfor ( ; i < l; i++ ) {
\t\tdataPriv.set(
\t\t\telems[ i ],
\t\t\t\"globalEval\",
\t\t\t!refElements || dataPriv.get( refElements[ i ], \"globalEval\" )
\t\t);
\t}
}

return setGlobalEval;
} );
", "node_modules/jquery/src/manipulation/setGlobalEval.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/manipulation/setGlobalEval.js");
    }
}
