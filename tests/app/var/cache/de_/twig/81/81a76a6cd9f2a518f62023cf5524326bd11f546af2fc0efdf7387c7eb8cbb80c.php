<?php

/* node_modules/lodash/fp/now.js */
class __TwigTemplate_16d0ac85267346dcd70cbdd916164d8bb36c7385bb96a0f86b19654b9ff4925f extends Twig_Template
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
        $__internal_b9a157288686e153b9a8a5a2b7dccd437973a2bceedb81d009c1d1bc057862ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a157288686e153b9a8a5a2b7dccd437973a2bceedb81d009c1d1bc057862ff->enter($__internal_b9a157288686e153b9a8a5a2b7dccd437973a2bceedb81d009c1d1bc057862ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/now.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('now', require('../now'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b9a157288686e153b9a8a5a2b7dccd437973a2bceedb81d009c1d1bc057862ff->leave($__internal_b9a157288686e153b9a8a5a2b7dccd437973a2bceedb81d009c1d1bc057862ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/now.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('now', require('../now'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/now.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/now.js");
    }
}
