<?php

/* node_modules/jquery/src/var/rnothtmlwhite.js */
class __TwigTemplate_51817f13aa621465e5ae8d74cd879d55ef3daed57ad261b41fffd242f862dc02 extends Twig_Template
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
        $__internal_2ddd29f3221edd9ac44ba1f2c4dab1eb9b5d84ec13a216b064846e6d9caa445f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddd29f3221edd9ac44ba1f2c4dab1eb9b5d84ec13a216b064846e6d9caa445f->enter($__internal_2ddd29f3221edd9ac44ba1f2c4dab1eb9b5d84ec13a216b064846e6d9caa445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/rnothtmlwhite.js"));

        // line 1
        echo "define( function() {
\t\"use strict\";

\t// Only count HTML whitespace
\t// Other whitespace should count in values
\t// https://html.spec.whatwg.org/multipage/infrastructure.html#space-character
\treturn ( /[^\\x20\\t\\r\\n\\f]+/g );
} );
";
        
        $__internal_2ddd29f3221edd9ac44ba1f2c4dab1eb9b5d84ec13a216b064846e6d9caa445f->leave($__internal_2ddd29f3221edd9ac44ba1f2c4dab1eb9b5d84ec13a216b064846e6d9caa445f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/rnothtmlwhite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {
\t\"use strict\";

\t// Only count HTML whitespace
\t// Other whitespace should count in values
\t// https://html.spec.whatwg.org/multipage/infrastructure.html#space-character
\treturn ( /[^\\x20\\t\\r\\n\\f]+/g );
} );
", "node_modules/jquery/src/var/rnothtmlwhite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/rnothtmlwhite.js");
    }
}
