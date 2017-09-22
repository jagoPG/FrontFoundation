<?php

/* node_modules/es5-ext/array/#/find/implement.js */
class __TwigTemplate_247a6ed0a42aeb399c3ef33248259ed8fd0f881aad2e24f8c7fbaf0380738e77 extends Twig_Template
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
        $__internal_035985d762af9d74e2ca2ab6749f08de7cd07cc260a56c8df83deea605a0db12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035985d762af9d74e2ca2ab6749f08de7cd07cc260a56c8df83deea605a0db12->enter($__internal_035985d762af9d74e2ca2ab6749f08de7cd07cc260a56c8df83deea605a0db12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"find\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_035985d762af9d74e2ca2ab6749f08de7cd07cc260a56c8df83deea605a0db12->leave($__internal_035985d762af9d74e2ca2ab6749f08de7cd07cc260a56c8df83deea605a0db12_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Array.prototype, \"find\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/array/#/find/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find/implement.js");
    }
}
