<?php

/* node_modules/lodash/fp/toSafeInteger.js */
class __TwigTemplate_ba565accf601f7424b523098a194a86d569f4887d37c7282388a5620f6054b9e extends Twig_Template
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
        $__internal_9fe83a05799cfb8e217237aaa5a15770bf322b34a331715125c53eca7f6fd97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe83a05799cfb8e217237aaa5a15770bf322b34a331715125c53eca7f6fd97e->enter($__internal_9fe83a05799cfb8e217237aaa5a15770bf322b34a331715125c53eca7f6fd97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toSafeInteger.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toSafeInteger', require('../toSafeInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9fe83a05799cfb8e217237aaa5a15770bf322b34a331715125c53eca7f6fd97e->leave($__internal_9fe83a05799cfb8e217237aaa5a15770bf322b34a331715125c53eca7f6fd97e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toSafeInteger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toSafeInteger', require('../toSafeInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toSafeInteger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toSafeInteger.js");
    }
}
