<?php

/* node_modules/es5-ext/error/index.js */
class __TwigTemplate_b02bea73a0cdafc5b05a67af0a7b1915b0009a5508c688af8e5864a925c9979e extends Twig_Template
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
        $__internal_a613bfc3afcb681b0b796912907de08827d54f7feb12e8698c96e4eef0e21ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a613bfc3afcb681b0b796912907de08827d54f7feb12e8698c96e4eef0e21ef7->enter($__internal_a613bfc3afcb681b0b796912907de08827d54f7feb12e8698c96e4eef0e21ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/error/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"#\": require(\"./#\"),
\t\"custom\": require(\"./custom\"),
\t\"isError\": require(\"./is-error\"),
\t\"validError\": require(\"./valid-error\")
};
";
        
        $__internal_a613bfc3afcb681b0b796912907de08827d54f7feb12e8698c96e4eef0e21ef7->leave($__internal_a613bfc3afcb681b0b796912907de08827d54f7feb12e8698c96e4eef0e21ef7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/error/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = {
\t\"#\": require(\"./#\"),
\t\"custom\": require(\"./custom\"),
\t\"isError\": require(\"./is-error\"),
\t\"validError\": require(\"./valid-error\")
};
", "node_modules/es5-ext/error/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/error/index.js");
    }
}
