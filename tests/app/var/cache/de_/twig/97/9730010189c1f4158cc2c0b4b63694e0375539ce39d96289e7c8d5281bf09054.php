<?php

/* node_modules/lodash/fp/propertyOf.js */
class __TwigTemplate_73f10a5c889d13340d29edc5480983002ff5a5761e7fea2aa941e83b464325a9 extends Twig_Template
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
        $__internal_69be151d6f72bc6f37d01b2a75a8c5edd3eebc00dcce19609af50d2e583e65ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69be151d6f72bc6f37d01b2a75a8c5edd3eebc00dcce19609af50d2e583e65ad->enter($__internal_69be151d6f72bc6f37d01b2a75a8c5edd3eebc00dcce19609af50d2e583e65ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/propertyOf.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('propertyOf', require('../get'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_69be151d6f72bc6f37d01b2a75a8c5edd3eebc00dcce19609af50d2e583e65ad->leave($__internal_69be151d6f72bc6f37d01b2a75a8c5edd3eebc00dcce19609af50d2e583e65ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/propertyOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('propertyOf', require('../get'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/propertyOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/propertyOf.js");
    }
}
