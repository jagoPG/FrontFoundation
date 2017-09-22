<?php

/* node_modules/lodash/fp/flatMapDepth.js */
class __TwigTemplate_b5ca4ca7dc88e819ca4a01cbbc800e0ca106c14cd590b3eca79436cb9a1f0adc extends Twig_Template
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
        $__internal_e3a61c800d150c6a5c5557b0b9e4cf298ad64093ab8b5f88a0a95e8fd66d967c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a61c800d150c6a5c5557b0b9e4cf298ad64093ab8b5f88a0a95e8fd66d967c->enter($__internal_e3a61c800d150c6a5c5557b0b9e4cf298ad64093ab8b5f88a0a95e8fd66d967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/flatMapDepth.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('flatMapDepth', require('../flatMapDepth'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_e3a61c800d150c6a5c5557b0b9e4cf298ad64093ab8b5f88a0a95e8fd66d967c->leave($__internal_e3a61c800d150c6a5c5557b0b9e4cf298ad64093ab8b5f88a0a95e8fd66d967c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/flatMapDepth.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('flatMapDepth', require('../flatMapDepth'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/flatMapDepth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/flatMapDepth.js");
    }
}
