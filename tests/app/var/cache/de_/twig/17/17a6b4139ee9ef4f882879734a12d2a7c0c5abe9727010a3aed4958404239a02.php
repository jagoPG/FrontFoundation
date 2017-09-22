<?php

/* node_modules/lodash/fp/assignAll.js */
class __TwigTemplate_ac5718a909c0840bea268d3d2399f1efe727bc7e23fb882cb13b8c2f5f5c0758 extends Twig_Template
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
        $__internal_2a7b9537df613c9439a0e774f4db7408d1b08b37366a88e5b5c21ef55f8fabf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7b9537df613c9439a0e774f4db7408d1b08b37366a88e5b5c21ef55f8fabf3->enter($__internal_2a7b9537df613c9439a0e774f4db7408d1b08b37366a88e5b5c21ef55f8fabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assignAll.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assignAll', require('../assign'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_2a7b9537df613c9439a0e774f4db7408d1b08b37366a88e5b5c21ef55f8fabf3->leave($__internal_2a7b9537df613c9439a0e774f4db7408d1b08b37366a88e5b5c21ef55f8fabf3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assignAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assignAll', require('../assign'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assignAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assignAll.js");
    }
}
