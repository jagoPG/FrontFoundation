<?php

/* node_modules/lodash/fp/clone.js */
class __TwigTemplate_21f482ae48a03b4709599b31ef08710b314fc8dba37fc46cb5e080a0857f4b36 extends Twig_Template
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
        $__internal_af7130352c1e768ded5661d34148dfa5258ab5ca301a805866171f147dec9e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7130352c1e768ded5661d34148dfa5258ab5ca301a805866171f147dec9e52->enter($__internal_af7130352c1e768ded5661d34148dfa5258ab5ca301a805866171f147dec9e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/clone.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('clone', require('../clone'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_af7130352c1e768ded5661d34148dfa5258ab5ca301a805866171f147dec9e52->leave($__internal_af7130352c1e768ded5661d34148dfa5258ab5ca301a805866171f147dec9e52_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/clone.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('clone', require('../clone'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/clone.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/clone.js");
    }
}
