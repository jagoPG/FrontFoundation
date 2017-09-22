<?php

/* node_modules/lodash/fp/isError.js */
class __TwigTemplate_391ddd118502bc517fe0b766eb2b94f6668a9b428a46f89209cc898aa7a0f32e extends Twig_Template
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
        $__internal_494e549b664a41e2e88ccfff0f976a91be5726bbdc4e960251e8441c4e1b8659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494e549b664a41e2e88ccfff0f976a91be5726bbdc4e960251e8441c4e1b8659->enter($__internal_494e549b664a41e2e88ccfff0f976a91be5726bbdc4e960251e8441c4e1b8659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isError.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isError', require('../isError'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_494e549b664a41e2e88ccfff0f976a91be5726bbdc4e960251e8441c4e1b8659->leave($__internal_494e549b664a41e2e88ccfff0f976a91be5726bbdc4e960251e8441c4e1b8659_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isError.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isError', require('../isError'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isError.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isError.js");
    }
}
