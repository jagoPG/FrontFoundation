<?php

/* node_modules/es5-ext/math/tanh/index.js */
class __TwigTemplate_ad4a872dd45b88d979bb534a3927b829a776cf66db37e5d6fff1f2675194aa44 extends Twig_Template
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
        $__internal_6cf5c113c6ee7ad2cb5858f9a8b2faa6c391a2b9c84c9984c4d8e0c6ef3e8e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf5c113c6ee7ad2cb5858f9a8b2faa6c391a2b9c84c9984c4d8e0c6ef3e8e4f->enter($__internal_6cf5c113c6ee7ad2cb5858f9a8b2faa6c391a2b9c84c9984c4d8e0c6ef3e8e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/tanh/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.tanh
\t: require(\"./shim\");
";
        
        $__internal_6cf5c113c6ee7ad2cb5858f9a8b2faa6c391a2b9c84c9984c4d8e0c6ef3e8e4f->leave($__internal_6cf5c113c6ee7ad2cb5858f9a8b2faa6c391a2b9c84c9984c4d8e0c6ef3e8e4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/tanh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.tanh
\t: require(\"./shim\");
", "node_modules/es5-ext/math/tanh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/tanh/index.js");
    }
}
