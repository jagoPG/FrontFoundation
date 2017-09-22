<?php

/* node_modules/jquery/src/traversing/var/siblings.js */
class __TwigTemplate_5f6aa8873f1f70e491ff6a523a37c404d601cedbc9ac6324b05a2a05fc11348f extends Twig_Template
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
        $__internal_c6b1445cbd7d5b418e34938cfc52f176b99fcaf6d29d37e891bfd312a6d24d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b1445cbd7d5b418e34938cfc52f176b99fcaf6d29d37e891bfd312a6d24d5e->enter($__internal_c6b1445cbd7d5b418e34938cfc52f176b99fcaf6d29d37e891bfd312a6d24d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/traversing/var/siblings.js"));

        // line 1
        echo "define( function() {

\"use strict\";

return function( n, elem ) {
\tvar matched = [];

\tfor ( ; n; n = n.nextSibling ) {
\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\tmatched.push( n );
\t\t}
\t}

\treturn matched;
};

} );
";
        
        $__internal_c6b1445cbd7d5b418e34938cfc52f176b99fcaf6d29d37e891bfd312a6d24d5e->leave($__internal_c6b1445cbd7d5b418e34938cfc52f176b99fcaf6d29d37e891bfd312a6d24d5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/traversing/var/siblings.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {

\"use strict\";

return function( n, elem ) {
\tvar matched = [];

\tfor ( ; n; n = n.nextSibling ) {
\t\tif ( n.nodeType === 1 && n !== elem ) {
\t\t\tmatched.push( n );
\t\t}
\t}

\treturn matched;
};

} );
", "node_modules/jquery/src/traversing/var/siblings.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/traversing/var/siblings.js");
    }
}
