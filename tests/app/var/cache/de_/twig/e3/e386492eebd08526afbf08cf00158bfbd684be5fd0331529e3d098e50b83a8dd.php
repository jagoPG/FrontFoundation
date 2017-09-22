<?php

/* node_modules/core-js/library/fn/string/virtual/iterator.js */
class __TwigTemplate_1920267a0f0284b3fc46834f48839a50d6980c1a644f5f314e52e3db3f946cc4 extends Twig_Template
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
        $__internal_e82c2de5a48c13b40b974ae63e5f342e60ac5519c42286ca235b6408ef7ab39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82c2de5a48c13b40b974ae63e5f342e60ac5519c42286ca235b6408ef7ab39c->enter($__internal_e82c2de5a48c13b40b974ae63e5f342e60ac5519c42286ca235b6408ef7ab39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/iterator.js"));

        // line 1
        echo "require('../../../modules/es6.string.iterator');
module.exports = require('../../../modules/_iterators').String;
";
        
        $__internal_e82c2de5a48c13b40b974ae63e5f342e60ac5519c42286ca235b6408ef7ab39c->leave($__internal_e82c2de5a48c13b40b974ae63e5f342e60ac5519c42286ca235b6408ef7ab39c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.iterator');
module.exports = require('../../../modules/_iterators').String;
", "node_modules/core-js/library/fn/string/virtual/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/iterator.js");
    }
}
