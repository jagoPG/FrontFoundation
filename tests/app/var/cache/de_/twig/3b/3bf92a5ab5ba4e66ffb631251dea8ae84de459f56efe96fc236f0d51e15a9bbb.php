<?php

/* node_modules/lodash/fp/takeWhile.js */
class __TwigTemplate_353fc345a1dcc46921d4505748070af098695638a34e20833cad1e836f935dfd extends Twig_Template
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
        $__internal_c43c70c676e172c501e100ad89c6f0b17da2c9d465d7d78224e5a4bd8a683fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43c70c676e172c501e100ad89c6f0b17da2c9d465d7d78224e5a4bd8a683fd3->enter($__internal_c43c70c676e172c501e100ad89c6f0b17da2c9d465d7d78224e5a4bd8a683fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/takeWhile.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('takeWhile', require('../takeWhile'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c43c70c676e172c501e100ad89c6f0b17da2c9d465d7d78224e5a4bd8a683fd3->leave($__internal_c43c70c676e172c501e100ad89c6f0b17da2c9d465d7d78224e5a4bd8a683fd3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/takeWhile.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('takeWhile', require('../takeWhile'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/takeWhile.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/takeWhile.js");
    }
}
