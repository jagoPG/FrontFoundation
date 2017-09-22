<?php

/* node_modules/es5-ext/string/raw/index.js */
class __TwigTemplate_d53e04d5682f999ed05c31fbde6223442c7e35152a77987264f047cb7a66ae19 extends Twig_Template
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
        $__internal_b490d1bc51c2204d1a9641b2f0ea37c3ce189686c493ae20416278418b098978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b490d1bc51c2204d1a9641b2f0ea37c3ce189686c493ae20416278418b098978->enter($__internal_b490d1bc51c2204d1a9641b2f0ea37c3ce189686c493ae20416278418b098978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/raw/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.raw
\t: require(\"./shim\");
";
        
        $__internal_b490d1bc51c2204d1a9641b2f0ea37c3ce189686c493ae20416278418b098978->leave($__internal_b490d1bc51c2204d1a9641b2f0ea37c3ce189686c493ae20416278418b098978_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/raw/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? String.raw
\t: require(\"./shim\");
", "node_modules/es5-ext/string/raw/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/raw/index.js");
    }
}
