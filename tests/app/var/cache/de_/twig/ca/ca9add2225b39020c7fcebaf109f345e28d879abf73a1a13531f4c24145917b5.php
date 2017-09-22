<?php

/* node_modules/lodash/fp/over.js */
class __TwigTemplate_1b5c4157959c3d67adbfb85f82628e0e7c228a71fb92ba0a4e16441bcc78918b extends Twig_Template
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
        $__internal_0d5eb82b1534f8489fe9a7dc587b99672ec33eb75d7d6786a404ec5a5bfae32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5eb82b1534f8489fe9a7dc587b99672ec33eb75d7d6786a404ec5a5bfae32a->enter($__internal_0d5eb82b1534f8489fe9a7dc587b99672ec33eb75d7d6786a404ec5a5bfae32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/over.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('over', require('../over'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0d5eb82b1534f8489fe9a7dc587b99672ec33eb75d7d6786a404ec5a5bfae32a->leave($__internal_0d5eb82b1534f8489fe9a7dc587b99672ec33eb75d7d6786a404ec5a5bfae32a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/over.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('over', require('../over'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/over.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/over.js");
    }
}
