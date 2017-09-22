<?php

/* node_modules/es5-ext/math/log1p/index.js */
class __TwigTemplate_cf0faf1ba27be0997eed8e95b538719f7279949af3993392167005454c751954 extends Twig_Template
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
        $__internal_c6bc0f73485f8f949fdcc3906a50f1fa9b7b11a8de5b016f4cb85bf8dd5a358d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bc0f73485f8f949fdcc3906a50f1fa9b7b11a8de5b016f4cb85bf8dd5a358d->enter($__internal_c6bc0f73485f8f949fdcc3906a50f1fa9b7b11a8de5b016f4cb85bf8dd5a358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log1p/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.log1p
\t: require(\"./shim\");
";
        
        $__internal_c6bc0f73485f8f949fdcc3906a50f1fa9b7b11a8de5b016f4cb85bf8dd5a358d->leave($__internal_c6bc0f73485f8f949fdcc3906a50f1fa9b7b11a8de5b016f4cb85bf8dd5a358d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log1p/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.log1p
\t: require(\"./shim\");
", "node_modules/es5-ext/math/log1p/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log1p/index.js");
    }
}
