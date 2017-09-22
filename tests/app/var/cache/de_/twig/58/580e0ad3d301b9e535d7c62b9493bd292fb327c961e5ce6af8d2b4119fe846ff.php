<?php

/* node_modules/es5-ext/number/max-safe-integer/implement.js */
class __TwigTemplate_1c5f7f80affbb5a753341024b65529742a26b9f43fc12f5d532bfa83de3bd7de extends Twig_Template
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
        $__internal_adecfd9250b8339bd1f9468b274987831c579d4bfed356b6303447c8665e176b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adecfd9250b8339bd1f9468b274987831c579d4bfed356b6303447c8665e176b->enter($__internal_adecfd9250b8339bd1f9468b274987831c579d4bfed356b6303447c8665e176b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/max-safe-integer/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"MAX_SAFE_INTEGER\", { value: require(\"./\"),
\t\tconfigurable: false,
enumerable: false,
writable: false });
}
";
        
        $__internal_adecfd9250b8339bd1f9468b274987831c579d4bfed356b6303447c8665e176b->leave($__internal_adecfd9250b8339bd1f9468b274987831c579d4bfed356b6303447c8665e176b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/max-safe-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"MAX_SAFE_INTEGER\", { value: require(\"./\"),
\t\tconfigurable: false,
enumerable: false,
writable: false });
}
", "node_modules/es5-ext/number/max-safe-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/max-safe-integer/implement.js");
    }
}
