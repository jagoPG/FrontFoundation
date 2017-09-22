<?php

/* node_modules/lodash/fp/lastIndexOfFrom.js */
class __TwigTemplate_6718fb681e9e4d2cde05f00af4f9368cfeba011094b64acb82ef5c309d0ff92b extends Twig_Template
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
        $__internal_5c4635a9b20d55a8818aa8e5a649077594408ab1239f2524da7ff4298ad6c5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4635a9b20d55a8818aa8e5a649077594408ab1239f2524da7ff4298ad6c5d6->enter($__internal_5c4635a9b20d55a8818aa8e5a649077594408ab1239f2524da7ff4298ad6c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/lastIndexOfFrom.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('lastIndexOfFrom', require('../lastIndexOf'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5c4635a9b20d55a8818aa8e5a649077594408ab1239f2524da7ff4298ad6c5d6->leave($__internal_5c4635a9b20d55a8818aa8e5a649077594408ab1239f2524da7ff4298ad6c5d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/lastIndexOfFrom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('lastIndexOfFrom', require('../lastIndexOf'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/lastIndexOfFrom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/lastIndexOfFrom.js");
    }
}
