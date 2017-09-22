<?php

/* node_modules/es5-ext/reg-exp/#/search/implement.js */
class __TwigTemplate_0f3ae723fa3a71a059fb925015272abaff68be581fd61b9fb2f16e2b4da1c42f extends Twig_Template
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
        $__internal_31154646f828883be5453b2d429e3d1e95470f702d4e5b2d63abd4d3f48a4061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31154646f828883be5453b2d429e3d1e95470f702d4e5b2d63abd4d3f48a4061->enter($__internal_31154646f828883be5453b2d429e3d1e95470f702d4e5b2d63abd4d3f48a4061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/search/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"search\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_31154646f828883be5453b2d429e3d1e95470f702d4e5b2d63abd4d3f48a4061->leave($__internal_31154646f828883be5453b2d429e3d1e95470f702d4e5b2d63abd4d3f48a4061_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/search/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"search\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/reg-exp/#/search/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/search/implement.js");
    }
}
