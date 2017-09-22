<?php

/* node_modules/es5-ext/math/expm1/implement.js */
class __TwigTemplate_860269c3505ee60d2e9b8b46492b8aeae30140caae1c64bef0e6d819d42d22fd extends Twig_Template
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
        $__internal_f4ec4a4df6d077731cb859a6333e5e8a973fa6d7865c5a0e33d08a6b5da1c1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ec4a4df6d077731cb859a6333e5e8a973fa6d7865c5a0e33d08a6b5da1c1dd->enter($__internal_f4ec4a4df6d077731cb859a6333e5e8a973fa6d7865c5a0e33d08a6b5da1c1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/expm1/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"expm1\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_f4ec4a4df6d077731cb859a6333e5e8a973fa6d7865c5a0e33d08a6b5da1c1dd->leave($__internal_f4ec4a4df6d077731cb859a6333e5e8a973fa6d7865c5a0e33d08a6b5da1c1dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/expm1/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"expm1\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/expm1/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/expm1/implement.js");
    }
}
