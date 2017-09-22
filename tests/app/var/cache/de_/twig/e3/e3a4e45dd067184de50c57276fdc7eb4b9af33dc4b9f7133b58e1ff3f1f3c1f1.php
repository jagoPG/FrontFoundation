<?php

/* node_modules/lodash/fp/assignAllWith.js */
class __TwigTemplate_8919a6aa4e8be76853edfbb06439b9f809bf111d380ec35873e3ced97e4ef5b0 extends Twig_Template
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
        $__internal_8e0d494e42a33a82d6379bf376c0943753786ee71f4d401ac481c3d79b4343d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0d494e42a33a82d6379bf376c0943753786ee71f4d401ac481c3d79b4343d0->enter($__internal_8e0d494e42a33a82d6379bf376c0943753786ee71f4d401ac481c3d79b4343d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assignAllWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assignAllWith', require('../assignWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_8e0d494e42a33a82d6379bf376c0943753786ee71f4d401ac481c3d79b4343d0->leave($__internal_8e0d494e42a33a82d6379bf376c0943753786ee71f4d401ac481c3d79b4343d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assignAllWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assignAllWith', require('../assignWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assignAllWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assignAllWith.js");
    }
}
