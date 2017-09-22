<?php

/* node_modules/es5-ext/number/is-finite/index.js */
class __TwigTemplate_bb41e9075c860ad9e8f71c5fb2e5457d151cd582fb8ea16bda95a9eaf8e68c26 extends Twig_Template
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
        $__internal_d17cc345cc8f9957c2a96a1f95999d3809871dc6efefa0bea5a40de4ba87af41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17cc345cc8f9957c2a96a1f95999d3809871dc6efefa0bea5a40de4ba87af41->enter($__internal_d17cc345cc8f9957c2a96a1f95999d3809871dc6efefa0bea5a40de4ba87af41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-finite/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isFinite
\t: require(\"./shim\");
";
        
        $__internal_d17cc345cc8f9957c2a96a1f95999d3809871dc6efefa0bea5a40de4ba87af41->leave($__internal_d17cc345cc8f9957c2a96a1f95999d3809871dc6efefa0bea5a40de4ba87af41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-finite/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isFinite
\t: require(\"./shim\");
", "node_modules/es5-ext/number/is-finite/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-finite/index.js");
    }
}
