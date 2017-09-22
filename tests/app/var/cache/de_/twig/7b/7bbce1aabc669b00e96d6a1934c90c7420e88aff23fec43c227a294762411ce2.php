<?php

/* node_modules/lodash/fp/upperFirst.js */
class __TwigTemplate_8be43ac52c4498e7475d6614f80311577bb77503cae076a3b7aea061a93b93bb extends Twig_Template
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
        $__internal_f56c924b840c8c1b9b2c2e511c581b923c11524abec7344256551b7e9137bc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56c924b840c8c1b9b2c2e511c581b923c11524abec7344256551b7e9137bc57->enter($__internal_f56c924b840c8c1b9b2c2e511c581b923c11524abec7344256551b7e9137bc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/upperFirst.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('upperFirst', require('../upperFirst'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f56c924b840c8c1b9b2c2e511c581b923c11524abec7344256551b7e9137bc57->leave($__internal_f56c924b840c8c1b9b2c2e511c581b923c11524abec7344256551b7e9137bc57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/upperFirst.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('upperFirst', require('../upperFirst'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/upperFirst.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/upperFirst.js");
    }
}
