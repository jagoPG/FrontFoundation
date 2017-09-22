<?php

/* node_modules/lodash/fp/sampleSize.js */
class __TwigTemplate_fd2dd39f97df7aecba765385786e98ca8c280716538c43395a4fb2e5070ff75f extends Twig_Template
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
        $__internal_4b09b662afc114e6ef53eabf03137581065f515e71a96763692b3a2a160587c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b09b662afc114e6ef53eabf03137581065f515e71a96763692b3a2a160587c7->enter($__internal_4b09b662afc114e6ef53eabf03137581065f515e71a96763692b3a2a160587c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sampleSize.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sampleSize', require('../sampleSize'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4b09b662afc114e6ef53eabf03137581065f515e71a96763692b3a2a160587c7->leave($__internal_4b09b662afc114e6ef53eabf03137581065f515e71a96763692b3a2a160587c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sampleSize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sampleSize', require('../sampleSize'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sampleSize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sampleSize.js");
    }
}
