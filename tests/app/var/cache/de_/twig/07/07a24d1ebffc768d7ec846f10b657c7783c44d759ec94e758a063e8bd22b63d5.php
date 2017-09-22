<?php

/* node_modules/lodash/fp/noop.js */
class __TwigTemplate_f66c22ffbaafd0c9cfe2b26b68271bebb769ffb3796134d8ca80bddd1891dae8 extends Twig_Template
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
        $__internal_62702cfd79da4c9ca314d60fd8ff58f8504a812948ea30cc19b232be19969197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62702cfd79da4c9ca314d60fd8ff58f8504a812948ea30cc19b232be19969197->enter($__internal_62702cfd79da4c9ca314d60fd8ff58f8504a812948ea30cc19b232be19969197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/noop.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('noop', require('../noop'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_62702cfd79da4c9ca314d60fd8ff58f8504a812948ea30cc19b232be19969197->leave($__internal_62702cfd79da4c9ca314d60fd8ff58f8504a812948ea30cc19b232be19969197_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/noop.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('noop', require('../noop'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/noop.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/noop.js");
    }
}
