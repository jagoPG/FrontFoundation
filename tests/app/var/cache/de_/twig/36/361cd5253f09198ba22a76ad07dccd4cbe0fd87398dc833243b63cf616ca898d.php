<?php

/* node_modules/jquery/src/core/stripAndCollapse.js */
class __TwigTemplate_af4dbc24fbfa536a8c19750bcada6761a70183e06b008f553a5171cd581a60ef extends Twig_Template
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
        $__internal_e1f22803e6f604597f313c7a8970dcc1f5688c76a541008db9ff9e5c34ba20e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f22803e6f604597f313c7a8970dcc1f5688c76a541008db9ff9e5c34ba20e1->enter($__internal_e1f22803e6f604597f313c7a8970dcc1f5688c76a541008db9ff9e5c34ba20e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/stripAndCollapse.js"));

        // line 1
        echo "define( [
\t\"../var/rnothtmlwhite\"
], function( rnothtmlwhite ) {
\t\"use strict\";

\t// Strip and collapse whitespace according to HTML spec
\t// https://html.spec.whatwg.org/multipage/infrastructure.html#strip-and-collapse-whitespace
\tfunction stripAndCollapse( value ) {
\t\tvar tokens = value.match( rnothtmlwhite ) || [];
\t\treturn tokens.join( \" \" );
\t}

\treturn stripAndCollapse;
} );
";
        
        $__internal_e1f22803e6f604597f313c7a8970dcc1f5688c76a541008db9ff9e5c34ba20e1->leave($__internal_e1f22803e6f604597f313c7a8970dcc1f5688c76a541008db9ff9e5c34ba20e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/stripAndCollapse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../var/rnothtmlwhite\"
], function( rnothtmlwhite ) {
\t\"use strict\";

\t// Strip and collapse whitespace according to HTML spec
\t// https://html.spec.whatwg.org/multipage/infrastructure.html#strip-and-collapse-whitespace
\tfunction stripAndCollapse( value ) {
\t\tvar tokens = value.match( rnothtmlwhite ) || [];
\t\treturn tokens.join( \" \" );
\t}

\treturn stripAndCollapse;
} );
", "node_modules/jquery/src/core/stripAndCollapse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/stripAndCollapse.js");
    }
}
