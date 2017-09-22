<?php

/* node_modules/lodash/fp/trimEnd.js */
class __TwigTemplate_34fbd1c2916348462bedf67f31dc26b2be3489a0d7b7960d1ddc64fea1ef1955 extends Twig_Template
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
        $__internal_676044ebac14b8e0f740f49ad3c13b50b1aedfab8a01d9ef92bdcb89e376f86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676044ebac14b8e0f740f49ad3c13b50b1aedfab8a01d9ef92bdcb89e376f86b->enter($__internal_676044ebac14b8e0f740f49ad3c13b50b1aedfab8a01d9ef92bdcb89e376f86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/trimEnd.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('trimEnd', require('../trimEnd'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_676044ebac14b8e0f740f49ad3c13b50b1aedfab8a01d9ef92bdcb89e376f86b->leave($__internal_676044ebac14b8e0f740f49ad3c13b50b1aedfab8a01d9ef92bdcb89e376f86b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/trimEnd.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('trimEnd', require('../trimEnd'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/trimEnd.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/trimEnd.js");
    }
}
