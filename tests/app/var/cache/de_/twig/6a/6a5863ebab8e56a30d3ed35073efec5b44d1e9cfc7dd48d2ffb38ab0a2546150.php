<?php

/* node_modules/lodash/fp/forOwn.js */
class __TwigTemplate_4ada5718a0e49b9423567a7276fbb5500641c8528922edd4112e0b0341e7f844 extends Twig_Template
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
        $__internal_95d992ec086bbecf57f57ea5b8a26db4a301a4d8b9850c7bf1f5665426e761be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d992ec086bbecf57f57ea5b8a26db4a301a4d8b9850c7bf1f5665426e761be->enter($__internal_95d992ec086bbecf57f57ea5b8a26db4a301a4d8b9850c7bf1f5665426e761be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/forOwn.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('forOwn', require('../forOwn'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_95d992ec086bbecf57f57ea5b8a26db4a301a4d8b9850c7bf1f5665426e761be->leave($__internal_95d992ec086bbecf57f57ea5b8a26db4a301a4d8b9850c7bf1f5665426e761be_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/forOwn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('forOwn', require('../forOwn'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/forOwn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/forOwn.js");
    }
}
