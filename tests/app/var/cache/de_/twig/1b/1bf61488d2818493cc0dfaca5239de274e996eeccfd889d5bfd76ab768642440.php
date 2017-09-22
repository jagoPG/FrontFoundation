<?php

/* node_modules/lodash/fp/attempt.js */
class __TwigTemplate_af0af291c1bf18f1d6aca924fc1028d58b8470efcf8f697461bebcb1d39bbdbf extends Twig_Template
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
        $__internal_5b0af0320327f1cba925302ce3acc8f421cb3ce1f89ae93a638ffbda5090a236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0af0320327f1cba925302ce3acc8f421cb3ce1f89ae93a638ffbda5090a236->enter($__internal_5b0af0320327f1cba925302ce3acc8f421cb3ce1f89ae93a638ffbda5090a236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/attempt.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('attempt', require('../attempt'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5b0af0320327f1cba925302ce3acc8f421cb3ce1f89ae93a638ffbda5090a236->leave($__internal_5b0af0320327f1cba925302ce3acc8f421cb3ce1f89ae93a638ffbda5090a236_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/attempt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('attempt', require('../attempt'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/attempt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/attempt.js");
    }
}
