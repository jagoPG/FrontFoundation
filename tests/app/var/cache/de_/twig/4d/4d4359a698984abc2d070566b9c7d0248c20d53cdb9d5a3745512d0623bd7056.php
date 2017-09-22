<?php

/* node_modules/lodash/fp/findKey.js */
class __TwigTemplate_401152c580b3bfc12853118f1b16a435be3cedae08994994eeea1d29f44427ec extends Twig_Template
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
        $__internal_9b4cd7c1517ca2f3828ec2d88fcb8aa279ca56e3ec1ee60b3191b1df3f557e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4cd7c1517ca2f3828ec2d88fcb8aa279ca56e3ec1ee60b3191b1df3f557e98->enter($__internal_9b4cd7c1517ca2f3828ec2d88fcb8aa279ca56e3ec1ee60b3191b1df3f557e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/findKey.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('findKey', require('../findKey'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9b4cd7c1517ca2f3828ec2d88fcb8aa279ca56e3ec1ee60b3191b1df3f557e98->leave($__internal_9b4cd7c1517ca2f3828ec2d88fcb8aa279ca56e3ec1ee60b3191b1df3f557e98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/findKey.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('findKey', require('../findKey'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/findKey.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/findKey.js");
    }
}
