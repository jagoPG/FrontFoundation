<?php

/* node_modules/es5-ext/math/hypot/implement.js */
class __TwigTemplate_59f4f45660558579738bea8f4199fd003c125b1c4d7e20e04f5eedf2d3285626 extends Twig_Template
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
        $__internal_0ae8a91f1a6cf937a2c406a75760029bb274990cfe14fa2f84ce9d326c871cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae8a91f1a6cf937a2c406a75760029bb274990cfe14fa2f84ce9d326c871cbd->enter($__internal_0ae8a91f1a6cf937a2c406a75760029bb274990cfe14fa2f84ce9d326c871cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/hypot/implement.js"));

        // line 1
        echo "\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"hypot\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
";
        
        $__internal_0ae8a91f1a6cf937a2c406a75760029bb274990cfe14fa2f84ce9d326c871cbd->leave($__internal_0ae8a91f1a6cf937a2c406a75760029bb274990cfe14fa2f84ce9d326c871cbd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/hypot/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

if (!require(\"./is-implemented\")()) {
\tObject.defineProperty(Math, \"hypot\", { value: require(\"./shim\"),
\t\tconfigurable: true,
enumerable: false,
writable: true });
}
", "node_modules/es5-ext/math/hypot/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/hypot/implement.js");
    }
}
