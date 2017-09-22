<?php

/* node_modules/es5-ext/test/function/identity.js */
class __TwigTemplate_173f1536e9deb1d0119c97d61cb7026aa74fbdb8fb025a5e5e4bb07543f149d6 extends Twig_Template
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
        $__internal_1721b1b0e49e5645479b030ab86f327d7d0d61ddd6656477e7cf0d4e770d2a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1721b1b0e49e5645479b030ab86f327d7d0d61ddd6656477e7cf0d4e770d2a9b->enter($__internal_1721b1b0e49e5645479b030ab86f327d7d0d61ddd6656477e7cf0d4e770d2a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/identity.js"));

        // line 1
        echo "\"use strict\";

var o = {};

module.exports = function (t, a) {
\ta(t(o), o);
};
";
        
        $__internal_1721b1b0e49e5645479b030ab86f327d7d0d61ddd6656477e7cf0d4e770d2a9b->leave($__internal_1721b1b0e49e5645479b030ab86f327d7d0d61ddd6656477e7cf0d4e770d2a9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/identity.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var o = {};

module.exports = function (t, a) {
\ta(t(o), o);
};
", "node_modules/es5-ext/test/function/identity.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/identity.js");
    }
}
