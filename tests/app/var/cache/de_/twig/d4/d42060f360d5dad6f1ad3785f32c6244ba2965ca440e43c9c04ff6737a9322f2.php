<?php

/* node_modules/lodash/fp/includes.js */
class __TwigTemplate_bf7544130d7a35eb5be4604d16407e937fa766777d1140f1a9498cca17574f85 extends Twig_Template
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
        $__internal_6e9b5dce007c865ed5cd524ff41880ea149a80333265aaa125053f96d7a5bc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9b5dce007c865ed5cd524ff41880ea149a80333265aaa125053f96d7a5bc04->enter($__internal_6e9b5dce007c865ed5cd524ff41880ea149a80333265aaa125053f96d7a5bc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/includes.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('includes', require('../includes'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6e9b5dce007c865ed5cd524ff41880ea149a80333265aaa125053f96d7a5bc04->leave($__internal_6e9b5dce007c865ed5cd524ff41880ea149a80333265aaa125053f96d7a5bc04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('includes', require('../includes'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/includes.js");
    }
}
