<?php

/* node_modules/lodash/fp/set.js */
class __TwigTemplate_074c50af3a3f6ee35a5a4c0cd34d7f67993417ab44dd81ff162c638d5b478555 extends Twig_Template
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
        $__internal_81b6825716e45a568b3b3cbde2a385e8e47331ee4b2db4f23e844c6d4fc46b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b6825716e45a568b3b3cbde2a385e8e47331ee4b2db4f23e844c6d4fc46b18->enter($__internal_81b6825716e45a568b3b3cbde2a385e8e47331ee4b2db4f23e844c6d4fc46b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/set.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('set', require('../set'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_81b6825716e45a568b3b3cbde2a385e8e47331ee4b2db4f23e844c6d4fc46b18->leave($__internal_81b6825716e45a568b3b3cbde2a385e8e47331ee4b2db4f23e844c6d4fc46b18_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('set', require('../set'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/set.js");
    }
}
