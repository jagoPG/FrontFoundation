<?php

/* node_modules/lodash/fp/isInteger.js */
class __TwigTemplate_3301f2f0a3d86af9da04617a280af9d18a494ec60ce6e00911b564d5202f8f48 extends Twig_Template
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
        $__internal_269302fe288615ce18bf220430b933c94867ec158df4f150bd63da0c7760bad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269302fe288615ce18bf220430b933c94867ec158df4f150bd63da0c7760bad7->enter($__internal_269302fe288615ce18bf220430b933c94867ec158df4f150bd63da0c7760bad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isInteger.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isInteger', require('../isInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_269302fe288615ce18bf220430b933c94867ec158df4f150bd63da0c7760bad7->leave($__internal_269302fe288615ce18bf220430b933c94867ec158df4f150bd63da0c7760bad7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isInteger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isInteger', require('../isInteger'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isInteger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isInteger.js");
    }
}
