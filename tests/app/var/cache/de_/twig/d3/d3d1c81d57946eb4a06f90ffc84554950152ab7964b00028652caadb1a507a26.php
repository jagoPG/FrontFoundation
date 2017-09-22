<?php

/* node_modules/es5-ext/reg-exp/index.js */
class __TwigTemplate_5d9b40f1a71b225d15877d34bcbc324c87e16acd1bad6a9a2e3de64df19af56a extends Twig_Template
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
        $__internal_1eb2327578917a96d6381c68d62fd398ee30a2e9c02496b53bfbb04b012bfc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb2327578917a96d6381c68d62fd398ee30a2e9c02496b53bfbb04b012bfc28->enter($__internal_1eb2327578917a96d6381c68d62fd398ee30a2e9c02496b53bfbb04b012bfc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = {
\t\"#\": require(\"./#\"),
\t\"escape\": require(\"./escape\"),
\t\"isRegExp\": require(\"./is-reg-exp\"),
\t\"validRegExp\": require(\"./valid-reg-exp\")
};
";
        
        $__internal_1eb2327578917a96d6381c68d62fd398ee30a2e9c02496b53bfbb04b012bfc28->leave($__internal_1eb2327578917a96d6381c68d62fd398ee30a2e9c02496b53bfbb04b012bfc28_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/index.js";
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
\t\"escape\": require(\"./escape\"),
\t\"isRegExp\": require(\"./is-reg-exp\"),
\t\"validRegExp\": require(\"./valid-reg-exp\")
};
", "node_modules/es5-ext/reg-exp/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/index.js");
    }
}
