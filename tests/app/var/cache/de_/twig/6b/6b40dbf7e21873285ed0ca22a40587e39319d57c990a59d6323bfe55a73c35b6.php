<?php

/* node_modules/es5-ext/test/object/keys/index.js */
class __TwigTemplate_861734d4ba8d2d1ca03a7d06f86e50ff949a5ad36597a536b34eb142ff86d184 extends Twig_Template
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
        $__internal_bda19aac397421e0fbbbabe95ceef8053acb4d2e79bed350e6248b456f6108de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda19aac397421e0fbbbabe95ceef8053acb4d2e79bed350e6248b456f6108de->enter($__internal_bda19aac397421e0fbbbabe95ceef8053acb4d2e79bed350e6248b456f6108de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/keys/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./shim\");
";
        
        $__internal_bda19aac397421e0fbbbabe95ceef8053acb4d2e79bed350e6248b456f6108de->leave($__internal_bda19aac397421e0fbbbabe95ceef8053acb4d2e79bed350e6248b456f6108de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/keys/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./shim\");
", "node_modules/es5-ext/test/object/keys/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/keys/index.js");
    }
}
