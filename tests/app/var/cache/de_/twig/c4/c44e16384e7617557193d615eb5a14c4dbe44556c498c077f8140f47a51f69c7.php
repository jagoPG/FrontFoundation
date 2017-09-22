<?php

/* node_modules/es5-ext/number/min-safe-integer/implement.js */
class __TwigTemplate_43e2cc6250c67dd6c524b1690c4268253d939e58c93ff5cc036524827cbf956c extends Twig_Template
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
        $__internal_32a4c59fb57808022586c563c81ecb02b2192b32f5deb85d9bf37471fdde2920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a4c59fb57808022586c563c81ecb02b2192b32f5deb85d9bf37471fdde2920->enter($__internal_32a4c59fb57808022586c563c81ecb02b2192b32f5deb85d9bf37471fdde2920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/min-safe-integer/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"MIN_SAFE_INTEGER\", { value: require(\"./\"),
\t\tconfigurable: false,
enumerable: false,
writable: false });
}
";
        
        $__internal_32a4c59fb57808022586c563c81ecb02b2192b32f5deb85d9bf37471fdde2920->leave($__internal_32a4c59fb57808022586c563c81ecb02b2192b32f5deb85d9bf37471fdde2920_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/min-safe-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Number, \"MIN_SAFE_INTEGER\", { value: require(\"./\"),
\t\tconfigurable: false,
enumerable: false,
writable: false });
}
", "node_modules/es5-ext/number/min-safe-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/min-safe-integer/implement.js");
    }
}
