<?php

/* node_modules/lodash/fp/take.js */
class __TwigTemplate_120ed9018c153b68bd48ccff7798fd0cef12840d93ae10106328443303975305 extends Twig_Template
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
        $__internal_c4aa5e3b3c99ea227ef61b42e0d769c5e7d142dd0ca2846be50a5fbdbe48aa21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4aa5e3b3c99ea227ef61b42e0d769c5e7d142dd0ca2846be50a5fbdbe48aa21->enter($__internal_c4aa5e3b3c99ea227ef61b42e0d769c5e7d142dd0ca2846be50a5fbdbe48aa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/take.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('take', require('../take'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c4aa5e3b3c99ea227ef61b42e0d769c5e7d142dd0ca2846be50a5fbdbe48aa21->leave($__internal_c4aa5e3b3c99ea227ef61b42e0d769c5e7d142dd0ca2846be50a5fbdbe48aa21_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/take.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('take', require('../take'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/take.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/take.js");
    }
}
