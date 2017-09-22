<?php

/* node_modules/lodash/fp/keyBy.js */
class __TwigTemplate_ed5b4f92f7e05b260dbea4d66c3ceabff0c100d7e846a40d87e2a6a8974b21f1 extends Twig_Template
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
        $__internal_26f0cc312f74a5d2b18b213841cf78c782ffa8df8aaa302ea54420b8324f22f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f0cc312f74a5d2b18b213841cf78c782ffa8df8aaa302ea54420b8324f22f5->enter($__internal_26f0cc312f74a5d2b18b213841cf78c782ffa8df8aaa302ea54420b8324f22f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/keyBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('keyBy', require('../keyBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_26f0cc312f74a5d2b18b213841cf78c782ffa8df8aaa302ea54420b8324f22f5->leave($__internal_26f0cc312f74a5d2b18b213841cf78c782ffa8df8aaa302ea54420b8324f22f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/keyBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('keyBy', require('../keyBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/keyBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/keyBy.js");
    }
}
