<?php

/* node_modules/lodash/fp/thru.js */
class __TwigTemplate_42237ac5ab4961dec15f7e408672c0f407d97c53c710778f60f8a48dcf3a53a0 extends Twig_Template
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
        $__internal_846c4a62b4302ef9c8b4991250c8602f2d97d38366ed585f3bdcc25574b70ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846c4a62b4302ef9c8b4991250c8602f2d97d38366ed585f3bdcc25574b70ed4->enter($__internal_846c4a62b4302ef9c8b4991250c8602f2d97d38366ed585f3bdcc25574b70ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/thru.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('thru', require('../thru'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_846c4a62b4302ef9c8b4991250c8602f2d97d38366ed585f3bdcc25574b70ed4->leave($__internal_846c4a62b4302ef9c8b4991250c8602f2d97d38366ed585f3bdcc25574b70ed4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/thru.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('thru', require('../thru'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/thru.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/thru.js");
    }
}
