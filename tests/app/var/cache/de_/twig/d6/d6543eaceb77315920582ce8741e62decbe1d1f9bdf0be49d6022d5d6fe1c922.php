<?php

/* node_modules/lodash/fp/gt.js */
class __TwigTemplate_8b8554fe12c866ca6f353b3591917e0ca37b12d1b06cf82c0bc6b6d5cfa06a9c extends Twig_Template
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
        $__internal_6427491484fb6757e8dc9a29026565b83d6716d787c38feb5335c9fa7f0d0f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6427491484fb6757e8dc9a29026565b83d6716d787c38feb5335c9fa7f0d0f27->enter($__internal_6427491484fb6757e8dc9a29026565b83d6716d787c38feb5335c9fa7f0d0f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/gt.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('gt', require('../gt'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6427491484fb6757e8dc9a29026565b83d6716d787c38feb5335c9fa7f0d0f27->leave($__internal_6427491484fb6757e8dc9a29026565b83d6716d787c38feb5335c9fa7f0d0f27_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/gt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('gt', require('../gt'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/gt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/gt.js");
    }
}
