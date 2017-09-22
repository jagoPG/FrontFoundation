<?php

/* node_modules/es5-ext/math/cbrt/implement.js */
class __TwigTemplate_3cdae21cb50d68be2afc08f0f2e2282be9e12fdf57c786139b6207a084b47d56 extends Twig_Template
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
        $__internal_2ab77cd0bd8c5ac257b43f58c5a912ce0f5eef244a3dc8d80ef9fe9a1dc9550b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab77cd0bd8c5ac257b43f58c5a912ce0f5eef244a3dc8d80ef9fe9a1dc9550b->enter($__internal_2ab77cd0bd8c5ac257b43f58c5a912ce0f5eef244a3dc8d80ef9fe9a1dc9550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cbrt/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"cbrt\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_2ab77cd0bd8c5ac257b43f58c5a912ce0f5eef244a3dc8d80ef9fe9a1dc9550b->leave($__internal_2ab77cd0bd8c5ac257b43f58c5a912ce0f5eef244a3dc8d80ef9fe9a1dc9550b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cbrt/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"cbrt\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/cbrt/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cbrt/implement.js");
    }
}
