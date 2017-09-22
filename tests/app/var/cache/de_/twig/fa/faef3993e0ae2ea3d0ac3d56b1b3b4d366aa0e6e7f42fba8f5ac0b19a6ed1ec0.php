<?php

/* node_modules/lodash/fp/curry.js */
class __TwigTemplate_c414969be457e25482f9a1ddd73130de5d7cecd8a731d4d89f4da024b4631135 extends Twig_Template
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
        $__internal_e2b5ff42a1c1ccafa485dfed088e03181511065fde29e3f18b84b88bb88aa429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b5ff42a1c1ccafa485dfed088e03181511065fde29e3f18b84b88bb88aa429->enter($__internal_e2b5ff42a1c1ccafa485dfed088e03181511065fde29e3f18b84b88bb88aa429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/curry.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('curry', require('../curry'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e2b5ff42a1c1ccafa485dfed088e03181511065fde29e3f18b84b88bb88aa429->leave($__internal_e2b5ff42a1c1ccafa485dfed088e03181511065fde29e3f18b84b88bb88aa429_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/curry.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('curry', require('../curry'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/curry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/curry.js");
    }
}
