<?php

/* node_modules/lodash/fp/constant.js */
class __TwigTemplate_dbed9249703257944bc5db3ddcd4b7e414f0945ed023650db9deefd7887e3476 extends Twig_Template
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
        $__internal_dd02c3025d6a3e2c59b87cb43954170f3df2334460593eb473c08a39bf041855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd02c3025d6a3e2c59b87cb43954170f3df2334460593eb473c08a39bf041855->enter($__internal_dd02c3025d6a3e2c59b87cb43954170f3df2334460593eb473c08a39bf041855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/constant.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('constant', require('../constant'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_dd02c3025d6a3e2c59b87cb43954170f3df2334460593eb473c08a39bf041855->leave($__internal_dd02c3025d6a3e2c59b87cb43954170f3df2334460593eb473c08a39bf041855_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/constant.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('constant', require('../constant'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/constant.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/constant.js");
    }
}
