<?php

/* node_modules/es5-ext/array/#/copy-within/implement.js */
class __TwigTemplate_c347d2dca0e57bc1d9a2e3192744f8e96fec8e4bdec5c1bddf9c3db06d1c8eb7 extends Twig_Template
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
        $__internal_fc8824664d3d0d50c88d582d40a27a2aa5f5098ed472333035f3f10cfe0a3b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8824664d3d0d50c88d582d40a27a2aa5f5098ed472333035f3f10cfe0a3b63->enter($__internal_fc8824664d3d0d50c88d582d40a27a2aa5f5098ed472333035f3f10cfe0a3b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/copy-within/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"copyWithin\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_fc8824664d3d0d50c88d582d40a27a2aa5f5098ed472333035f3f10cfe0a3b63->leave($__internal_fc8824664d3d0d50c88d582d40a27a2aa5f5098ed472333035f3f10cfe0a3b63_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/copy-within/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"copyWithin\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es5-ext/array/#/copy-within/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/copy-within/implement.js");
    }
}
