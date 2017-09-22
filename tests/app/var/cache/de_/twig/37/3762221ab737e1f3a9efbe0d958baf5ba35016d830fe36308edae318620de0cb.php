<?php

/* node_modules/lodash/fp/mapKeys.js */
class __TwigTemplate_bf29eae088761481bbf7c030274292466ab342d90003f03bc216716d6fbfb310 extends Twig_Template
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
        $__internal_7b2c6a681eb8bfa4ee22e8f4df3beb5db677966342bcb9f50015288b3bbc2f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2c6a681eb8bfa4ee22e8f4df3beb5db677966342bcb9f50015288b3bbc2f9d->enter($__internal_7b2c6a681eb8bfa4ee22e8f4df3beb5db677966342bcb9f50015288b3bbc2f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/mapKeys.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('mapKeys', require('../mapKeys'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7b2c6a681eb8bfa4ee22e8f4df3beb5db677966342bcb9f50015288b3bbc2f9d->leave($__internal_7b2c6a681eb8bfa4ee22e8f4df3beb5db677966342bcb9f50015288b3bbc2f9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/mapKeys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('mapKeys', require('../mapKeys'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/mapKeys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/mapKeys.js");
    }
}
