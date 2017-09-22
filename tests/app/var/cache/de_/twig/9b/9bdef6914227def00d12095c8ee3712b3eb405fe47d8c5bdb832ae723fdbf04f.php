<?php

/* node_modules/lodash/fp/isRegExp.js */
class __TwigTemplate_d94420726e042d4683cd1ad3a0b52c3de40e2f683e0c6e76cb69ccb793f0526c extends Twig_Template
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
        $__internal_9dd10b74231dfdb8a8494da7ba81f226e17f61e8d07a918eb4364c76ccbfd6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd10b74231dfdb8a8494da7ba81f226e17f61e8d07a918eb4364c76ccbfd6c9->enter($__internal_9dd10b74231dfdb8a8494da7ba81f226e17f61e8d07a918eb4364c76ccbfd6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isRegExp.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isRegExp', require('../isRegExp'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9dd10b74231dfdb8a8494da7ba81f226e17f61e8d07a918eb4364c76ccbfd6c9->leave($__internal_9dd10b74231dfdb8a8494da7ba81f226e17f61e8d07a918eb4364c76ccbfd6c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isRegExp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isRegExp', require('../isRegExp'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isRegExp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isRegExp.js");
    }
}
