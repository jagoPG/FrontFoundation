<?php

/* node_modules/lodash/fp/cloneWith.js */
class __TwigTemplate_5930a6c19eaf4a5383bf1713233627ab5bc6bf45c175ea2f8a342e8b5efed3ff extends Twig_Template
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
        $__internal_04fb49836f0e6acb06e8b2f5de75caedc6a9e9029377377bb3c46847d898bfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fb49836f0e6acb06e8b2f5de75caedc6a9e9029377377bb3c46847d898bfeb->enter($__internal_04fb49836f0e6acb06e8b2f5de75caedc6a9e9029377377bb3c46847d898bfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/cloneWith.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('cloneWith', require('../cloneWith'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_04fb49836f0e6acb06e8b2f5de75caedc6a9e9029377377bb3c46847d898bfeb->leave($__internal_04fb49836f0e6acb06e8b2f5de75caedc6a9e9029377377bb3c46847d898bfeb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/cloneWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('cloneWith', require('../cloneWith'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/cloneWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/cloneWith.js");
    }
}
