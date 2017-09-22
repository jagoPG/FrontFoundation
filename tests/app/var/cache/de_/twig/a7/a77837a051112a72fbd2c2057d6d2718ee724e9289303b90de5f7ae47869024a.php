<?php

/* node_modules/es5-ext/math/log1p/implement.js */
class __TwigTemplate_629355d66fcf781365a56d135b2f113643e84c51d3689ae469ad37879a0ef520 extends Twig_Template
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
        $__internal_57612f40ab2b0895295fc41f39b92ca2606ae68a2411400bde8dcb2d09abf8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57612f40ab2b0895295fc41f39b92ca2606ae68a2411400bde8dcb2d09abf8ad->enter($__internal_57612f40ab2b0895295fc41f39b92ca2606ae68a2411400bde8dcb2d09abf8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log1p/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"log1p\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_57612f40ab2b0895295fc41f39b92ca2606ae68a2411400bde8dcb2d09abf8ad->leave($__internal_57612f40ab2b0895295fc41f39b92ca2606ae68a2411400bde8dcb2d09abf8ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log1p/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"log1p\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/log1p/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log1p/implement.js");
    }
}
