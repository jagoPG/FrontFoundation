<?php

/* node_modules/es5-ext/test/string/raw/index.js */
class __TwigTemplate_a6f1ec12c4abecdb7a383cec0b837f6fab55f7014d26d5bcbb2049b533ae123e extends Twig_Template
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
        $__internal_c617fe129c74f058d98438aec462cab74473a377af216d3ce322c54c4896b42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c617fe129c74f058d98438aec462cab74473a377af216d3ce322c54c4896b42b->enter($__internal_c617fe129c74f058d98438aec462cab74473a377af216d3ce322c54c4896b42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/raw/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./shim\");
";
        
        $__internal_c617fe129c74f058d98438aec462cab74473a377af216d3ce322c54c4896b42b->leave($__internal_c617fe129c74f058d98438aec462cab74473a377af216d3ce322c54c4896b42b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/raw/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./shim\");
", "node_modules/es5-ext/test/string/raw/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/raw/index.js");
    }
}
