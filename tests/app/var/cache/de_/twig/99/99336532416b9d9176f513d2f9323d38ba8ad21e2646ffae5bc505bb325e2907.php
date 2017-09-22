<?php

/* node_modules/lodash/fp/restFrom.js */
class __TwigTemplate_4dedc1e9a30be18e9279140c3a34ac7e64d5092619462fb63e6428b3b59d00a0 extends Twig_Template
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
        $__internal_0ccc4e5a3cda123676492481df4427ac8243f6be7d828abf0ee6b21152cc059c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccc4e5a3cda123676492481df4427ac8243f6be7d828abf0ee6b21152cc059c->enter($__internal_0ccc4e5a3cda123676492481df4427ac8243f6be7d828abf0ee6b21152cc059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/restFrom.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('restFrom', require('../rest'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0ccc4e5a3cda123676492481df4427ac8243f6be7d828abf0ee6b21152cc059c->leave($__internal_0ccc4e5a3cda123676492481df4427ac8243f6be7d828abf0ee6b21152cc059c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/restFrom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('restFrom', require('../rest'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/restFrom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/restFrom.js");
    }
}
