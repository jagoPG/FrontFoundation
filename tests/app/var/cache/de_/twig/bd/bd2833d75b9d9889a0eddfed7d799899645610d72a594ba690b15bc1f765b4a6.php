<?php

/* node_modules/es5-ext/array/#/find-index/implement.js */
class __TwigTemplate_2acf19d10a1b596d36fab50ade50cac747383d7cc71c1ee49bc7b39181451317 extends Twig_Template
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
        $__internal_7e8056a11c60edf20f15fae04a8d0655b41ca9a26c36433f3338a357ebc64b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8056a11c60edf20f15fae04a8d0655b41ca9a26c36433f3338a357ebc64b08->enter($__internal_7e8056a11c60edf20f15fae04a8d0655b41ca9a26c36433f3338a357ebc64b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find-index/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"findIndex\",
\t\t{ value: require(\"./shim\"),
\t\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_7e8056a11c60edf20f15fae04a8d0655b41ca9a26c36433f3338a357ebc64b08->leave($__internal_7e8056a11c60edf20f15fae04a8d0655b41ca9a26c36433f3338a357ebc64b08_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find-index/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"findIndex\",
\t\t{ value: require(\"./shim\"),
\t\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/find-index/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find-index/implement.js");
    }
}
