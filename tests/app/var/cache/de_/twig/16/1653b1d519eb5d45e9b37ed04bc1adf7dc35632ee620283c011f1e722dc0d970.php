<?php

/* node_modules/lodash/fp/updateWith.js */
class __TwigTemplate_665ac0f1039e48454d72262a75b2b0730ffc434238e6193993fead0b0ffe88f2 extends Twig_Template
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
        $__internal_b296909bd74bf248313b661cc2c8c4c51fe097eaae88bc3525ac084cfff3696a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b296909bd74bf248313b661cc2c8c4c51fe097eaae88bc3525ac084cfff3696a->enter($__internal_b296909bd74bf248313b661cc2c8c4c51fe097eaae88bc3525ac084cfff3696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/updateWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('updateWith', require('../updateWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b296909bd74bf248313b661cc2c8c4c51fe097eaae88bc3525ac084cfff3696a->leave($__internal_b296909bd74bf248313b661cc2c8c4c51fe097eaae88bc3525ac084cfff3696a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/updateWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('updateWith', require('../updateWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/updateWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/updateWith.js");
    }
}
