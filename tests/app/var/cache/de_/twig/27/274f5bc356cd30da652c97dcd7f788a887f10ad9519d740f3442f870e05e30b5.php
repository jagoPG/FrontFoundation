<?php

/* node_modules/lodash/fp/replace.js */
class __TwigTemplate_9244ff72c5749a4d02a26eca2f8aab26f8d7ad566a769f60737f428485fe8df2 extends Twig_Template
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
        $__internal_9cabd5cd87b7a46c739b42c36eef84680bc2c3ba5fd2d6c97dce3a058ddd800d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cabd5cd87b7a46c739b42c36eef84680bc2c3ba5fd2d6c97dce3a058ddd800d->enter($__internal_9cabd5cd87b7a46c739b42c36eef84680bc2c3ba5fd2d6c97dce3a058ddd800d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/replace.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('replace', require('../replace'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9cabd5cd87b7a46c739b42c36eef84680bc2c3ba5fd2d6c97dce3a058ddd800d->leave($__internal_9cabd5cd87b7a46c739b42c36eef84680bc2c3ba5fd2d6c97dce3a058ddd800d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('replace', require('../replace'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/replace.js");
    }
}
