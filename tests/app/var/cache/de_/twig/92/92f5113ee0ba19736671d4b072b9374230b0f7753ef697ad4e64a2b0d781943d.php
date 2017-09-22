<?php

/* node_modules/lodash/fp/filter.js */
class __TwigTemplate_068a10e0956830076fdcd87910221f7b6b770fe08867f06fb1eb56ba91fea1d9 extends Twig_Template
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
        $__internal_218d527d21d71219441a06f3938e454aeedf58e972c35865ff6dd0536ff3b947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218d527d21d71219441a06f3938e454aeedf58e972c35865ff6dd0536ff3b947->enter($__internal_218d527d21d71219441a06f3938e454aeedf58e972c35865ff6dd0536ff3b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/filter.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('filter', require('../filter'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_218d527d21d71219441a06f3938e454aeedf58e972c35865ff6dd0536ff3b947->leave($__internal_218d527d21d71219441a06f3938e454aeedf58e972c35865ff6dd0536ff3b947_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/filter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('filter', require('../filter'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/filter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/filter.js");
    }
}
