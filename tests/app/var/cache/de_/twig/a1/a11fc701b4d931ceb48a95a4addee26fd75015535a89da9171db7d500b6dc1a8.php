<?php

/* node_modules/lodash/fp/tap.js */
class __TwigTemplate_74635341347d67ab3edf971480bbdc8f4018892f46ac4d73f8e07156e826807d extends Twig_Template
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
        $__internal_6a26e49e85fac783e52bb95c3df341d604b28525720121b4724fa3f12b65f31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a26e49e85fac783e52bb95c3df341d604b28525720121b4724fa3f12b65f31a->enter($__internal_6a26e49e85fac783e52bb95c3df341d604b28525720121b4724fa3f12b65f31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/tap.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('tap', require('../tap'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6a26e49e85fac783e52bb95c3df341d604b28525720121b4724fa3f12b65f31a->leave($__internal_6a26e49e85fac783e52bb95c3df341d604b28525720121b4724fa3f12b65f31a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/tap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('tap', require('../tap'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/tap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/tap.js");
    }
}
