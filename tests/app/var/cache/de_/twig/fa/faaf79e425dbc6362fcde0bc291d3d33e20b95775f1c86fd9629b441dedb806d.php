<?php

/* node_modules/es6-set/ext/get-first.js */
class __TwigTemplate_f96f26bff30b4fef104b4ce927fecb160cc998ab2a19e0b8a860c5f16ddb3d93 extends Twig_Template
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
        $__internal_7648d9bcdad37b999484b8a9fb9845220be27690bb8e2545a783db705c7307cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7648d9bcdad37b999484b8a9fb9845220be27690bb8e2545a783db705c7307cb->enter($__internal_7648d9bcdad37b999484b8a9fb9845220be27690bb8e2545a783db705c7307cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/ext/get-first.js"));

        // line 1
        echo "'use strict';

module.exports = function () {
\treturn this.values().next().value;
};
";
        
        $__internal_7648d9bcdad37b999484b8a9fb9845220be27690bb8e2545a783db705c7307cb->leave($__internal_7648d9bcdad37b999484b8a9fb9845220be27690bb8e2545a783db705c7307cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/ext/get-first.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function () {
\treturn this.values().next().value;
};
", "node_modules/es6-set/ext/get-first.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/ext/get-first.js");
    }
}
