<?php

/* node_modules/babel-runtime/helpers/_self-global.js */
class __TwigTemplate_79acfd00417ead7201d7bf016152c3cb5991b35d6e8e3825a3482a1b8d4b51a5 extends Twig_Template
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
        $__internal_36d44fffa662f4dbf55859db1d2232535038a400ade1ddfc29a98abb644b24c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d44fffa662f4dbf55859db1d2232535038a400ade1ddfc29a98abb644b24c4->enter($__internal_36d44fffa662f4dbf55859db1d2232535038a400ade1ddfc29a98abb644b24c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_self-global.js"));

        // line 1
        echo "module.exports = require(\"./selfGlobal.js\");";
        
        $__internal_36d44fffa662f4dbf55859db1d2232535038a400ade1ddfc29a98abb644b24c4->leave($__internal_36d44fffa662f4dbf55859db1d2232535038a400ade1ddfc29a98abb644b24c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_self-global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./selfGlobal.js\");", "node_modules/babel-runtime/helpers/_self-global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_self-global.js");
    }
}
