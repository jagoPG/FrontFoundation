<?php

/* node_modules/es5-ext/array/#/map/implement.js */
class __TwigTemplate_34d35207a791dc0499a448064d6a7c1d0e99482d6bdf16f10e5760d20e50976a extends Twig_Template
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
        $__internal_b638d36c552f544a1c21e034ade4e4b60528edd390e127eed71e4b2e2d7f5d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b638d36c552f544a1c21e034ade4e4b60528edd390e127eed71e4b2e2d7f5d75->enter($__internal_b638d36c552f544a1c21e034ade4e4b60528edd390e127eed71e4b2e2d7f5d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/map/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"map\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_b638d36c552f544a1c21e034ade4e4b60528edd390e127eed71e4b2e2d7f5d75->leave($__internal_b638d36c552f544a1c21e034ade4e4b60528edd390e127eed71e4b2e2d7f5d75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/map/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"map\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/map/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/map/implement.js");
    }
}
