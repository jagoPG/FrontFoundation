<?php

/* node_modules/lodash/fp/isNull.js */
class __TwigTemplate_215aea83f4efc8c3a5cd64b7629bd3421c26d2b13d7e46262b5ce8c0c3f07f08 extends Twig_Template
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
        $__internal_81c376a84f10be48e3f3816d118a6f0eac7a2bcbe933892ea2f7d13f1409806e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c376a84f10be48e3f3816d118a6f0eac7a2bcbe933892ea2f7d13f1409806e->enter($__internal_81c376a84f10be48e3f3816d118a6f0eac7a2bcbe933892ea2f7d13f1409806e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isNull.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isNull', require('../isNull'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_81c376a84f10be48e3f3816d118a6f0eac7a2bcbe933892ea2f7d13f1409806e->leave($__internal_81c376a84f10be48e3f3816d118a6f0eac7a2bcbe933892ea2f7d13f1409806e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isNull.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isNull', require('../isNull'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isNull.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isNull.js");
    }
}
