<?php

/* node_modules/lodash/fp/cloneDeep.js */
class __TwigTemplate_595897d33b2929846151a5f0aa63f2b72b80466c7bddfb878ef02527ae7a1f12 extends Twig_Template
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
        $__internal_93ca543375db7118c50a84aafa3b6abad40e7112226b35a30b7b5410acf41a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ca543375db7118c50a84aafa3b6abad40e7112226b35a30b7b5410acf41a1c->enter($__internal_93ca543375db7118c50a84aafa3b6abad40e7112226b35a30b7b5410acf41a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/cloneDeep.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('cloneDeep', require('../cloneDeep'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_93ca543375db7118c50a84aafa3b6abad40e7112226b35a30b7b5410acf41a1c->leave($__internal_93ca543375db7118c50a84aafa3b6abad40e7112226b35a30b7b5410acf41a1c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/cloneDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('cloneDeep', require('../cloneDeep'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/cloneDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/cloneDeep.js");
    }
}
