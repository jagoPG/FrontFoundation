<?php

/* node_modules/lodash/fp/keys.js */
class __TwigTemplate_df67569d25ecade110c5dda469e6dbff12e5ec98269bad60b1cb5758de8bfed2 extends Twig_Template
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
        $__internal_9d5c9cf7d01e467cdf6fd9b736cdddbe2ba5aef1489a0b99cfca92d960821066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5c9cf7d01e467cdf6fd9b736cdddbe2ba5aef1489a0b99cfca92d960821066->enter($__internal_9d5c9cf7d01e467cdf6fd9b736cdddbe2ba5aef1489a0b99cfca92d960821066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/keys.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('keys', require('../keys'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9d5c9cf7d01e467cdf6fd9b736cdddbe2ba5aef1489a0b99cfca92d960821066->leave($__internal_9d5c9cf7d01e467cdf6fd9b736cdddbe2ba5aef1489a0b99cfca92d960821066_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('keys', require('../keys'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/keys.js");
    }
}
