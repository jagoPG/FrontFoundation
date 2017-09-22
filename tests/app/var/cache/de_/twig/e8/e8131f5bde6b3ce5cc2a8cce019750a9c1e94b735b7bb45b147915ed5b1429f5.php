<?php

/* node_modules/lodash/fp/some.js */
class __TwigTemplate_2924e0fc5f0e5489ee5d703f25de89457596aa8f3b2b8b14d23f214f358cfe17 extends Twig_Template
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
        $__internal_588b822e12aaf4f970747739a1e367069ab23ceb7cb4bf82cff9153cc85a06f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588b822e12aaf4f970747739a1e367069ab23ceb7cb4bf82cff9153cc85a06f7->enter($__internal_588b822e12aaf4f970747739a1e367069ab23ceb7cb4bf82cff9153cc85a06f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/some.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('some', require('../some'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_588b822e12aaf4f970747739a1e367069ab23ceb7cb4bf82cff9153cc85a06f7->leave($__internal_588b822e12aaf4f970747739a1e367069ab23ceb7cb4bf82cff9153cc85a06f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('some', require('../some'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/some.js");
    }
}
