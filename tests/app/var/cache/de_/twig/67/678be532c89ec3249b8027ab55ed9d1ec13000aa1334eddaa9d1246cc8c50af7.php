<?php

/* node_modules/es5-ext/object/validate-stringifiable-value.js */
class __TwigTemplate_6bf954a7996ed8066022e0f4c08f36db3f933fb81a9f7469469b91923742a67e extends Twig_Template
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
        $__internal_6a4b318d5fa6955c1d16a5783943893b5ef866d19579ef6ba1a7b0a9f7e4077a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4b318d5fa6955c1d16a5783943893b5ef866d19579ef6ba1a7b0a9f7e4077a->enter($__internal_6a4b318d5fa6955c1d16a5783943893b5ef866d19579ef6ba1a7b0a9f7e4077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/validate-stringifiable-value.js"));

        // line 1
        echo "\"use strict\";

var ensureValue   = require(\"./valid-value\")
  , stringifiable = require(\"./validate-stringifiable\");

module.exports = function (value) {
\treturn stringifiable(ensureValue(value));
};
";
        
        $__internal_6a4b318d5fa6955c1d16a5783943893b5ef866d19579ef6ba1a7b0a9f7e4077a->leave($__internal_6a4b318d5fa6955c1d16a5783943893b5ef866d19579ef6ba1a7b0a9f7e4077a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/validate-stringifiable-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ensureValue   = require(\"./valid-value\")
  , stringifiable = require(\"./validate-stringifiable\");

module.exports = function (value) {
\treturn stringifiable(ensureValue(value));
};
", "node_modules/es5-ext/object/validate-stringifiable-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/validate-stringifiable-value.js");
    }
}
