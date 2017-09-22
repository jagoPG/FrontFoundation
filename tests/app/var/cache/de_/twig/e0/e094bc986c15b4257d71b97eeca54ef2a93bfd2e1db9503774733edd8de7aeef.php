<?php

/* node_modules/lodash/fp/wrapperValue.js */
class __TwigTemplate_b0408603199b10bc8ae30f93e14dadc7654b85f04a99f49d0a5c26865cb45118 extends Twig_Template
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
        $__internal_19794d403e4cf343a6068848448973f53c3e8a6ef30738b8b1ca80110bc76fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19794d403e4cf343a6068848448973f53c3e8a6ef30738b8b1ca80110bc76fe3->enter($__internal_19794d403e4cf343a6068848448973f53c3e8a6ef30738b8b1ca80110bc76fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/wrapperValue.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('wrapperValue', require('../wrapperValue'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_19794d403e4cf343a6068848448973f53c3e8a6ef30738b8b1ca80110bc76fe3->leave($__internal_19794d403e4cf343a6068848448973f53c3e8a6ef30738b8b1ca80110bc76fe3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/wrapperValue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('wrapperValue', require('../wrapperValue'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/wrapperValue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/wrapperValue.js");
    }
}
