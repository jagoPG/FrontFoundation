<?php

/* node_modules/lodash/fp/multiply.js */
class __TwigTemplate_155c3c0a73d24131c7af25ed5a489156bd3632b74153b7d6f355eca9a290fdde extends Twig_Template
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
        $__internal_655d9f0e28d53706f7456c858b1c128d1503d215f3b32990e6ad8997dacb3948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655d9f0e28d53706f7456c858b1c128d1503d215f3b32990e6ad8997dacb3948->enter($__internal_655d9f0e28d53706f7456c858b1c128d1503d215f3b32990e6ad8997dacb3948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/multiply.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('multiply', require('../multiply'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_655d9f0e28d53706f7456c858b1c128d1503d215f3b32990e6ad8997dacb3948->leave($__internal_655d9f0e28d53706f7456c858b1c128d1503d215f3b32990e6ad8997dacb3948_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/multiply.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('multiply', require('../multiply'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/multiply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/multiply.js");
    }
}
