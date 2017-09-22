<?php

/* node_modules/es5-ext/array/#/values/index.js */
class __TwigTemplate_785ae0676f7076cb6151f2777818855ee57eda269264716fb0472af98cd8e43b extends Twig_Template
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
        $__internal_aa9500dbed3b168124fad4a0ea64b91e9ac4a17fa7e3f375d7e6a6fa9817d66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9500dbed3b168124fad4a0ea64b91e9ac4a17fa7e3f375d7e6a6fa9817d66b->enter($__internal_aa9500dbed3b168124fad4a0ea64b91e9ac4a17fa7e3f375d7e6a6fa9817d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/values/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")() ? Array.prototype.values : require(\"./shim\");
";
        
        $__internal_aa9500dbed3b168124fad4a0ea64b91e9ac4a17fa7e3f375d7e6a6fa9817d66b->leave($__internal_aa9500dbed3b168124fad4a0ea64b91e9ac4a17fa7e3f375d7e6a6fa9817d66b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/values/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")() ? Array.prototype.values : require(\"./shim\");
", "node_modules/es5-ext/array/#/values/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/values/index.js");
    }
}
