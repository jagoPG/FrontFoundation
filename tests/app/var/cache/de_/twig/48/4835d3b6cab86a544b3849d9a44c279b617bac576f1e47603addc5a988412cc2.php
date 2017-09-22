<?php

/* node_modules/jquery/src/css/addGetHookIf.js */
class __TwigTemplate_c5c139ba1b03ba4824c54acb9c3e495348926c27d6372989aa5b5400f78019ee extends Twig_Template
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
        $__internal_fae681813f3ba5c17b6731946f03511d54798b5f674e96026ef1d7e5c86fd4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae681813f3ba5c17b6731946f03511d54798b5f674e96026ef1d7e5c86fd4bb->enter($__internal_fae681813f3ba5c17b6731946f03511d54798b5f674e96026ef1d7e5c86fd4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/css/addGetHookIf.js"));

        // line 1
        echo "define( function() {

\"use strict\";

function addGetHookIf( conditionFn, hookFn ) {

\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {

\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn ( this.get = hookFn ).apply( this, arguments );
\t\t}
\t};
}

return addGetHookIf;

} );
";
        
        $__internal_fae681813f3ba5c17b6731946f03511d54798b5f674e96026ef1d7e5c86fd4bb->leave($__internal_fae681813f3ba5c17b6731946f03511d54798b5f674e96026ef1d7e5c86fd4bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/css/addGetHookIf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {

\"use strict\";

function addGetHookIf( conditionFn, hookFn ) {

\t// Define the hook, we'll check on the first run if it's really needed.
\treturn {
\t\tget: function() {
\t\t\tif ( conditionFn() ) {

\t\t\t\t// Hook not needed (or it's not possible to use it due
\t\t\t\t// to missing dependency), remove it.
\t\t\t\tdelete this.get;
\t\t\t\treturn;
\t\t\t}

\t\t\t// Hook needed; redefine it so that the support test is not executed again.
\t\t\treturn ( this.get = hookFn ).apply( this, arguments );
\t\t}
\t};
}

return addGetHookIf;

} );
", "node_modules/jquery/src/css/addGetHookIf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/css/addGetHookIf.js");
    }
}
