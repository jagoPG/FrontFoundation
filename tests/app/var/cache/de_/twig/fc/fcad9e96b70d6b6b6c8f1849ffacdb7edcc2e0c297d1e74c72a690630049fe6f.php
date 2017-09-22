<?php

/* node_modules/lodash/fp/escape.js */
class __TwigTemplate_a756d8224f0b1f8d5fabbda4e9c3b8edf75ad07b15dc1e76ac2be64c75481c81 extends Twig_Template
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
        $__internal_196673812e6a9460303a0b77349cb54dd0a48c1d9d56160d4ec1f0ec969c1bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196673812e6a9460303a0b77349cb54dd0a48c1d9d56160d4ec1f0ec969c1bbc->enter($__internal_196673812e6a9460303a0b77349cb54dd0a48c1d9d56160d4ec1f0ec969c1bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/escape.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('escape', require('../escape'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_196673812e6a9460303a0b77349cb54dd0a48c1d9d56160d4ec1f0ec969c1bbc->leave($__internal_196673812e6a9460303a0b77349cb54dd0a48c1d9d56160d4ec1f0ec969c1bbc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('escape', require('../escape'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/escape.js");
    }
}
