<?php

/* node_modules/lodash/fp/castArray.js */
class __TwigTemplate_fecf70176a40be1f483884c3b83601ca89ea9efbd4ed8fd77a9a5d74b6bf80b7 extends Twig_Template
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
        $__internal_68f2a273dde01126f7c2fe3c667bad757aa51eb416d051e64ed53025be74f328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f2a273dde01126f7c2fe3c667bad757aa51eb416d051e64ed53025be74f328->enter($__internal_68f2a273dde01126f7c2fe3c667bad757aa51eb416d051e64ed53025be74f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/castArray.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('castArray', require('../castArray'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_68f2a273dde01126f7c2fe3c667bad757aa51eb416d051e64ed53025be74f328->leave($__internal_68f2a273dde01126f7c2fe3c667bad757aa51eb416d051e64ed53025be74f328_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/castArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('castArray', require('../castArray'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/castArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/castArray.js");
    }
}
