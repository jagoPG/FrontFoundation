<?php

/* node_modules/jquery/src/var/hasOwn.js */
class __TwigTemplate_15a27b5cafa3cbc25363c33473cb26869528808b90799513bb27d812ce556d9d extends Twig_Template
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
        $__internal_2240448a4e14ae3edb4c5cacdda0b9443e5045a946ad2a9dc43204581f782fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2240448a4e14ae3edb4c5cacdda0b9443e5045a946ad2a9dc43204581f782fb9->enter($__internal_2240448a4e14ae3edb4c5cacdda0b9443e5045a946ad2a9dc43204581f782fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/hasOwn.js"));

        // line 1
        echo "define( [
\t\"./class2type\"
], function( class2type ) {
\t\"use strict\";

\treturn class2type.hasOwnProperty;
} );
";
        
        $__internal_2240448a4e14ae3edb4c5cacdda0b9443e5045a946ad2a9dc43204581f782fb9->leave($__internal_2240448a4e14ae3edb4c5cacdda0b9443e5045a946ad2a9dc43204581f782fb9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/hasOwn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"./class2type\"
], function( class2type ) {
\t\"use strict\";

\treturn class2type.hasOwnProperty;
} );
", "node_modules/jquery/src/var/hasOwn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/hasOwn.js");
    }
}
