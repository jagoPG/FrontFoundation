<?php

/* node_modules/lodash/fp/initial.js */
class __TwigTemplate_2fac3f2f79b97ac50951d6c77e0e6344ed1f3445214d9471f6b204bec042c96e extends Twig_Template
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
        $__internal_15b716371cb1ec63b60329b08cfbaee3e5b354a757495bdcbbd30f7709962063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b716371cb1ec63b60329b08cfbaee3e5b354a757495bdcbbd30f7709962063->enter($__internal_15b716371cb1ec63b60329b08cfbaee3e5b354a757495bdcbbd30f7709962063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/initial.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('initial', require('../initial'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_15b716371cb1ec63b60329b08cfbaee3e5b354a757495bdcbbd30f7709962063->leave($__internal_15b716371cb1ec63b60329b08cfbaee3e5b354a757495bdcbbd30f7709962063_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/initial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('initial', require('../initial'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/initial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/initial.js");
    }
}
