<?php

/* node_modules/es5-ext/array/#/values/implement.js */
class __TwigTemplate_6416a428b46e4e83cc6e4f48c162eea0f35985e71f8122f21c0d458438b32ee4 extends Twig_Template
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
        $__internal_808af2471309cf435512471e30c1444fde2fc83eb6d86da25627d1aa09e1ac13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808af2471309cf435512471e30c1444fde2fc83eb6d86da25627d1aa09e1ac13->enter($__internal_808af2471309cf435512471e30c1444fde2fc83eb6d86da25627d1aa09e1ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/values/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"values\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_808af2471309cf435512471e30c1444fde2fc83eb6d86da25627d1aa09e1ac13->leave($__internal_808af2471309cf435512471e30c1444fde2fc83eb6d86da25627d1aa09e1ac13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/values/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"values\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/values/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/values/implement.js");
    }
}
