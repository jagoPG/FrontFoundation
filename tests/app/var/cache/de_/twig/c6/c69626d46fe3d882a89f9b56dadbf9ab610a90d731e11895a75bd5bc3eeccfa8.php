<?php

/* node_modules/es5-ext/array/#/concat/implement.js */
class __TwigTemplate_fa3ce24e577f7331b6fb5f31dd76847bdb4ae9892a6a48af1c504527c79dac9d extends Twig_Template
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
        $__internal_cc17d27de3b0941f2023f9180d408d3858dd72bc5def547034326bd2a68e73e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc17d27de3b0941f2023f9180d408d3858dd72bc5def547034326bd2a68e73e7->enter($__internal_cc17d27de3b0941f2023f9180d408d3858dd72bc5def547034326bd2a68e73e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/concat/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"concat\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_cc17d27de3b0941f2023f9180d408d3858dd72bc5def547034326bd2a68e73e7->leave($__internal_cc17d27de3b0941f2023f9180d408d3858dd72bc5def547034326bd2a68e73e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/concat/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"concat\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/concat/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/concat/implement.js");
    }
}
