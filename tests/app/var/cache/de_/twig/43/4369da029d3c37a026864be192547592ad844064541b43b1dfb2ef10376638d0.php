<?php

/* node_modules/lodash/fp/maxBy.js */
class __TwigTemplate_1dc8d9b303e53b007c1a16603e79d4fd268976ef3166dc687833fb651176406f extends Twig_Template
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
        $__internal_f2ebdcafc7ea3104e2bbe27e6ce95c611731da1d04998fbf7b88bab4cb82f41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ebdcafc7ea3104e2bbe27e6ce95c611731da1d04998fbf7b88bab4cb82f41d->enter($__internal_f2ebdcafc7ea3104e2bbe27e6ce95c611731da1d04998fbf7b88bab4cb82f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/maxBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('maxBy', require('../maxBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f2ebdcafc7ea3104e2bbe27e6ce95c611731da1d04998fbf7b88bab4cb82f41d->leave($__internal_f2ebdcafc7ea3104e2bbe27e6ce95c611731da1d04998fbf7b88bab4cb82f41d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/maxBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('maxBy', require('../maxBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/maxBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/maxBy.js");
    }
}
