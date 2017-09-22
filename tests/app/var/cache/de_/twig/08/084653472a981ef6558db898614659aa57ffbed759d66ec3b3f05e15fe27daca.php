<?php

/* node_modules/lodash/fp/stubObject.js */
class __TwigTemplate_ef0a903cb6aaff97d5ff05232148a13847143be2797d535bcc6d08ccb9786c01 extends Twig_Template
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
        $__internal_1ce22fd18dea6caace30efdac329075c12d1b88684e2f30ab5b8c2d16bc49c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce22fd18dea6caace30efdac329075c12d1b88684e2f30ab5b8c2d16bc49c90->enter($__internal_1ce22fd18dea6caace30efdac329075c12d1b88684e2f30ab5b8c2d16bc49c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/stubObject.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('stubObject', require('../stubObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_1ce22fd18dea6caace30efdac329075c12d1b88684e2f30ab5b8c2d16bc49c90->leave($__internal_1ce22fd18dea6caace30efdac329075c12d1b88684e2f30ab5b8c2d16bc49c90_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/stubObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('stubObject', require('../stubObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/stubObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/stubObject.js");
    }
}
