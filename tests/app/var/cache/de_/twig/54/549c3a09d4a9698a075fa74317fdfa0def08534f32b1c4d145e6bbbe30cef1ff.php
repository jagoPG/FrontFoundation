<?php

/* node_modules/jquery/src/core/DOMEval.js */
class __TwigTemplate_38e2cec92882288f192756c7f223c94e69f269f0f2e567013e46a0380013fc3c extends Twig_Template
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
        $__internal_e5f7441feb151c3b07f8d6a2ae849b0b0d39ea2b299156142439b1ff0850d52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f7441feb151c3b07f8d6a2ae849b0b0d39ea2b299156142439b1ff0850d52e->enter($__internal_e5f7441feb151c3b07f8d6a2ae849b0b0d39ea2b299156142439b1ff0850d52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/DOMEval.js"));

        // line 1
        echo "define( [
\t\"../var/document\"
], function( document ) {
\t\"use strict\";

\tfunction DOMEval( code, doc ) {
\t\tdoc = doc || document;

\t\tvar script = doc.createElement( \"script\" );

\t\tscript.text = code;
\t\tdoc.head.appendChild( script ).parentNode.removeChild( script );
\t}

\treturn DOMEval;
} );
";
        
        $__internal_e5f7441feb151c3b07f8d6a2ae849b0b0d39ea2b299156142439b1ff0850d52e->leave($__internal_e5f7441feb151c3b07f8d6a2ae849b0b0d39ea2b299156142439b1ff0850d52e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/DOMEval.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../var/document\"
], function( document ) {
\t\"use strict\";

\tfunction DOMEval( code, doc ) {
\t\tdoc = doc || document;

\t\tvar script = doc.createElement( \"script\" );

\t\tscript.text = code;
\t\tdoc.head.appendChild( script ).parentNode.removeChild( script );
\t}

\treturn DOMEval;
} );
", "node_modules/jquery/src/core/DOMEval.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/DOMEval.js");
    }
}
