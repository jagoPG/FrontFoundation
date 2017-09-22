<?php

/* node_modules/jquery/src/core/var/rsingleTag.js */
class __TwigTemplate_21ae15e5a067616058fe3abddc62369841c4bdbc9342f11bd0ba8cb0e238a6ac extends Twig_Template
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
        $__internal_563e49988aa0c7243d17c7db70d2b203f90e67abbdf2c39efded4edcc8ed70f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563e49988aa0c7243d17c7db70d2b203f90e67abbdf2c39efded4edcc8ed70f0->enter($__internal_563e49988aa0c7243d17c7db70d2b203f90e67abbdf2c39efded4edcc8ed70f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/core/var/rsingleTag.js"));

        // line 1
        echo "define( function() {
\t\"use strict\";

\t// Match a standalone tag
\treturn ( /^<([a-z][^\\/\\0>:\\x20\\t\\r\\n\\f]*)[\\x20\\t\\r\\n\\f]*\\/?>(?:<\\/\\1>|)\$/i );
} );
";
        
        $__internal_563e49988aa0c7243d17c7db70d2b203f90e67abbdf2c39efded4edcc8ed70f0->leave($__internal_563e49988aa0c7243d17c7db70d2b203f90e67abbdf2c39efded4edcc8ed70f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/core/var/rsingleTag.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {
\t\"use strict\";

\t// Match a standalone tag
\treturn ( /^<([a-z][^\\/\\0>:\\x20\\t\\r\\n\\f]*)[\\x20\\t\\r\\n\\f]*\\/?>(?:<\\/\\1>|)\$/i );
} );
", "node_modules/jquery/src/core/var/rsingleTag.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/core/var/rsingleTag.js");
    }
}
