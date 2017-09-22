<?php

/* node_modules/lodash/fp/isObject.js */
class __TwigTemplate_50235cb978740506f7448a950131c78cb8ec630e1f3c731fbd03555f7a9ea9a5 extends Twig_Template
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
        $__internal_22c35a75bc63ca67dd3f5a804d000dbfeab4f2db8532f4e86c0de2f71f8967f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c35a75bc63ca67dd3f5a804d000dbfeab4f2db8532f4e86c0de2f71f8967f7->enter($__internal_22c35a75bc63ca67dd3f5a804d000dbfeab4f2db8532f4e86c0de2f71f8967f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isObject.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isObject', require('../isObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_22c35a75bc63ca67dd3f5a804d000dbfeab4f2db8532f4e86c0de2f71f8967f7->leave($__internal_22c35a75bc63ca67dd3f5a804d000dbfeab4f2db8532f4e86c0de2f71f8967f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isObject', require('../isObject'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isObject.js");
    }
}
