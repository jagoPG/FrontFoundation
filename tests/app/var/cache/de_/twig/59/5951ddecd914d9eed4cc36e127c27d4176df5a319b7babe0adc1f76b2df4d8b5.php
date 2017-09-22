<?php

/* node_modules/lodash/fp/differenceWith.js */
class __TwigTemplate_26ca588c99b042ad18c1e6f20345d5f108ed34f614893582fb7dd1d75dd3b70b extends Twig_Template
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
        $__internal_627b2127d83258b7b2a983a036cbf010fe045854384a655630111192139f2c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627b2127d83258b7b2a983a036cbf010fe045854384a655630111192139f2c45->enter($__internal_627b2127d83258b7b2a983a036cbf010fe045854384a655630111192139f2c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/differenceWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('differenceWith', require('../differenceWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_627b2127d83258b7b2a983a036cbf010fe045854384a655630111192139f2c45->leave($__internal_627b2127d83258b7b2a983a036cbf010fe045854384a655630111192139f2c45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/differenceWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('differenceWith', require('../differenceWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/differenceWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/differenceWith.js");
    }
}
