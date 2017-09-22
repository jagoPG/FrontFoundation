<?php

/* node_modules/jquery/src/css/var/rnumnonpx.js */
class __TwigTemplate_7884da7c5a20c873d06eb545b66c3f7dfc1a6f85e860818ae7425e6b195738ab extends Twig_Template
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
        $__internal_c77fed7b658651f722d856b7145563493824dd1835060a0d29a5176b7cd75ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77fed7b658651f722d856b7145563493824dd1835060a0d29a5176b7cd75ca6->enter($__internal_c77fed7b658651f722d856b7145563493824dd1835060a0d29a5176b7cd75ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/var/rnumnonpx.js"));

        // line 1
        echo "define( [
\t\"../../var/pnum\"
], function( pnum ) {
\t\"use strict\";

\treturn new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );
} );
";
        
        $__internal_c77fed7b658651f722d856b7145563493824dd1835060a0d29a5176b7cd75ca6->leave($__internal_c77fed7b658651f722d856b7145563493824dd1835060a0d29a5176b7cd75ca6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/var/rnumnonpx.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( [
\t\"../../var/pnum\"
], function( pnum ) {
\t\"use strict\";

\treturn new RegExp( \"^(\" + pnum + \")(?!px)[a-z%]+\$\", \"i\" );
} );
", "node_modules/jquery/src/css/var/rnumnonpx.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/var/rnumnonpx.js");
    }
}
