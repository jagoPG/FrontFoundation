<?php

/* node_modules/lodash/fp/isNative.js */
class __TwigTemplate_32d8bc4e5e2b43badc64eaefc964c705fcaccdd79a67895af7ae9496add31306 extends Twig_Template
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
        $__internal_7efa4fe127aef491862ff5fb4a39b6c76ee96025379b22219abe134b6c07eb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efa4fe127aef491862ff5fb4a39b6c76ee96025379b22219abe134b6c07eb68->enter($__internal_7efa4fe127aef491862ff5fb4a39b6c76ee96025379b22219abe134b6c07eb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isNative.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isNative', require('../isNative'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_7efa4fe127aef491862ff5fb4a39b6c76ee96025379b22219abe134b6c07eb68->leave($__internal_7efa4fe127aef491862ff5fb4a39b6c76ee96025379b22219abe134b6c07eb68_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isNative.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isNative', require('../isNative'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isNative.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isNative.js");
    }
}
