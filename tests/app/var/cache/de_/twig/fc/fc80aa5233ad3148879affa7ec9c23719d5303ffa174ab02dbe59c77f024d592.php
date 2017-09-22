<?php

/* node_modules/lodash/fp/assignIn.js */
class __TwigTemplate_ef52b4c248da85b887e49826038ce16c52d6b5d45b5ec050a291b0899d38ad7b extends Twig_Template
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
        $__internal_d7261fafb13f8fdb645a639118d5e4c8961247845765418150fe14cac8cfd0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7261fafb13f8fdb645a639118d5e4c8961247845765418150fe14cac8cfd0f0->enter($__internal_d7261fafb13f8fdb645a639118d5e4c8961247845765418150fe14cac8cfd0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assignIn.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assignIn', require('../assignIn'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_d7261fafb13f8fdb645a639118d5e4c8961247845765418150fe14cac8cfd0f0->leave($__internal_d7261fafb13f8fdb645a639118d5e4c8961247845765418150fe14cac8cfd0f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assignIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assignIn', require('../assignIn'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assignIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assignIn.js");
    }
}
