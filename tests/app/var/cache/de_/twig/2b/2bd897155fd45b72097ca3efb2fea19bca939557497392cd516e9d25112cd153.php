<?php

/* node_modules/es5-ext/reg-exp/#/match/implement.js */
class __TwigTemplate_412b6a063ae0f512a224a153bccef1110be34c95df98905366ca8610e224a673 extends Twig_Template
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
        $__internal_7041b30a62bbb20783f5fd2f3781b311e8b347d711bc46431d5b0e95f38a1afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7041b30a62bbb20783f5fd2f3781b311e8b347d711bc46431d5b0e95f38a1afe->enter($__internal_7041b30a62bbb20783f5fd2f3781b311e8b347d711bc46431d5b0e95f38a1afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/match/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"match\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_7041b30a62bbb20783f5fd2f3781b311e8b347d711bc46431d5b0e95f38a1afe->leave($__internal_7041b30a62bbb20783f5fd2f3781b311e8b347d711bc46431d5b0e95f38a1afe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/match/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"match\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/reg-exp/#/match/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/match/implement.js");
    }
}
