<?php

/* node_modules/es5-ext/string/#/contains/implement.js */
class __TwigTemplate_c3bc75876c7038e8a7b21957a6378da812a2af06bdbee5009f1b54aa71cc64d0 extends Twig_Template
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
        $__internal_e0d36fd1d39bbaaf24d88b7938347cc8923d3ae413705a74407c32fafa6d2649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d36fd1d39bbaaf24d88b7938347cc8923d3ae413705a74407c32fafa6d2649->enter($__internal_e0d36fd1d39bbaaf24d88b7938347cc8923d3ae413705a74407c32fafa6d2649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/contains/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"contains\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
";
        
        $__internal_e0d36fd1d39bbaaf24d88b7938347cc8923d3ae413705a74407c32fafa6d2649->leave($__internal_e0d36fd1d39bbaaf24d88b7938347cc8923d3ae413705a74407c32fafa6d2649_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/contains/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(String.prototype, \"contains\",
\t\t{ value: require(\"./shim\"),
configurable: true,
enumerable: false,
\t\t\twritable: true });
}
", "node_modules/es5-ext/string/#/contains/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/contains/implement.js");
    }
}
