<?php

/* node_modules/es5-ext/math/acosh/index.js */
class __TwigTemplate_65b113f102caf80e1522eb1d9a924df1688b04cfc1fe6f85f804e7cd58bb06bf extends Twig_Template
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
        $__internal_89f10f46c5e7acd129ebacc379f43b6ac802fe559795c57cbc08f9cc7179cb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f10f46c5e7acd129ebacc379f43b6ac802fe559795c57cbc08f9cc7179cb97->enter($__internal_89f10f46c5e7acd129ebacc379f43b6ac802fe559795c57cbc08f9cc7179cb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/acosh/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.acosh
\t: require(\"./shim\");
";
        
        $__internal_89f10f46c5e7acd129ebacc379f43b6ac802fe559795c57cbc08f9cc7179cb97->leave($__internal_89f10f46c5e7acd129ebacc379f43b6ac802fe559795c57cbc08f9cc7179cb97_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/acosh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.acosh
\t: require(\"./shim\");
", "node_modules/es5-ext/math/acosh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/acosh/index.js");
    }
}
