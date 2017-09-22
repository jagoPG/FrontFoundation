<?php

/* node_modules/es5-ext/number/is-integer/index.js */
class __TwigTemplate_cb05c1693b773a89e313a0429eaa28e03e28965d233eeb8c192ed9258822c9dc extends Twig_Template
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
        $__internal_eda3a632e881e9fcd308d1ecb8ed3e4e19d39fbff5555ffd0f1903fa47f368aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda3a632e881e9fcd308d1ecb8ed3e4e19d39fbff5555ffd0f1903fa47f368aa->enter($__internal_eda3a632e881e9fcd308d1ecb8ed3e4e19d39fbff5555ffd0f1903fa47f368aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-integer/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isInteger
\t: require(\"./shim\");
";
        
        $__internal_eda3a632e881e9fcd308d1ecb8ed3e4e19d39fbff5555ffd0f1903fa47f368aa->leave($__internal_eda3a632e881e9fcd308d1ecb8ed3e4e19d39fbff5555ffd0f1903fa47f368aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-integer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Number.isInteger
\t: require(\"./shim\");
", "node_modules/es5-ext/number/is-integer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-integer/index.js");
    }
}
