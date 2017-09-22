<?php

/* node_modules/es5-ext/reg-exp/#/sticky/implement.js */
class __TwigTemplate_02e9271938ad3983b794d4cff9896aa651df136019a6d6c9327cac6b92a2fded extends Twig_Template
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
        $__internal_b4788ca0f28327230ec36de1c88881922a2d25ae8f67fe321099dc2f2055536f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4788ca0f28327230ec36de1c88881922a2d25ae8f67fe321099dc2f2055536f->enter($__internal_b4788ca0f28327230ec36de1c88881922a2d25ae8f67fe321099dc2f2055536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/sticky/implement.js"));

        // line 1
        echo "\"use strict\";

var isSticky = require(\"../is-sticky\");

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"sticky\", { configurable: true,
\t\tenumerable: false,
get: isSticky });
}
";
        
        $__internal_b4788ca0f28327230ec36de1c88881922a2d25ae8f67fe321099dc2f2055536f->leave($__internal_b4788ca0f28327230ec36de1c88881922a2d25ae8f67fe321099dc2f2055536f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/sticky/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isSticky = require(\"../is-sticky\");

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(RegExp.prototype, \"sticky\", { configurable: true,
\t\tenumerable: false,
get: isSticky });
}
", "node_modules/es5-ext/reg-exp/#/sticky/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/sticky/implement.js");
    }
}
