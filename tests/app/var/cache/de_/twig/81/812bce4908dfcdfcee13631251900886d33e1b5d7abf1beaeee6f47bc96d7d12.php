<?php

/* node_modules/lodash/fp/values.js */
class __TwigTemplate_67af629c576f8bb7bdf9e67ca8e91cf38618e6531ec01afab1ce52fe472674f7 extends Twig_Template
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
        $__internal_6cfb38916da1cefe3fc32ce99680240f1bad852c575e1fdcc50c24012a17ac79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfb38916da1cefe3fc32ce99680240f1bad852c575e1fdcc50c24012a17ac79->enter($__internal_6cfb38916da1cefe3fc32ce99680240f1bad852c575e1fdcc50c24012a17ac79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/values.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('values', require('../values'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_6cfb38916da1cefe3fc32ce99680240f1bad852c575e1fdcc50c24012a17ac79->leave($__internal_6cfb38916da1cefe3fc32ce99680240f1bad852c575e1fdcc50c24012a17ac79_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/values.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('values', require('../values'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/values.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/values.js");
    }
}
