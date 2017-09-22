<?php

/* node_modules/lodash/fp/invokeArgs.js */
class __TwigTemplate_f04a55572675caae52b39f272e03b116d192eedb1a8e3171db2771747b060e4c extends Twig_Template
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
        $__internal_02858977247c25aad43f344643e1e7e25b8ba0934d62bc2e9b71d5f712df7771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02858977247c25aad43f344643e1e7e25b8ba0934d62bc2e9b71d5f712df7771->enter($__internal_02858977247c25aad43f344643e1e7e25b8ba0934d62bc2e9b71d5f712df7771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/invokeArgs.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('invokeArgs', require('../invoke'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_02858977247c25aad43f344643e1e7e25b8ba0934d62bc2e9b71d5f712df7771->leave($__internal_02858977247c25aad43f344643e1e7e25b8ba0934d62bc2e9b71d5f712df7771_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/invokeArgs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('invokeArgs', require('../invoke'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/invokeArgs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/invokeArgs.js");
    }
}
