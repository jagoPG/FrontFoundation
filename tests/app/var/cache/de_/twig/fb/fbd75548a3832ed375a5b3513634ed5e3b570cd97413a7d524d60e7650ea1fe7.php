<?php

/* node_modules/lodash/fp/method.js */
class __TwigTemplate_6c9cbfd52e8893c7f941bafa8d2cb6ca38c4d5b7f9a976c5e5cb9811571bc153 extends Twig_Template
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
        $__internal_5447efad3167ffff67e057f3d558914fba2f084f41b0b81ad821d35fb6c77a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5447efad3167ffff67e057f3d558914fba2f084f41b0b81ad821d35fb6c77a66->enter($__internal_5447efad3167ffff67e057f3d558914fba2f084f41b0b81ad821d35fb6c77a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/method.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('method', require('../method'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5447efad3167ffff67e057f3d558914fba2f084f41b0b81ad821d35fb6c77a66->leave($__internal_5447efad3167ffff67e057f3d558914fba2f084f41b0b81ad821d35fb6c77a66_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/method.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('method', require('../method'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/method.js");
    }
}
