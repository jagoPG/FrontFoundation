<?php

/* node_modules/lodash/fp/words.js */
class __TwigTemplate_ae2adfbca7f642f25a7f9798ef5ed17a57cf5c2ea23aa25f44d650479a0c37b2 extends Twig_Template
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
        $__internal_ad8bb268ed7a9049a12de9c8fcc8e83856f1c67bc313eb1e9036c31ecab80c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8bb268ed7a9049a12de9c8fcc8e83856f1c67bc313eb1e9036c31ecab80c2d->enter($__internal_ad8bb268ed7a9049a12de9c8fcc8e83856f1c67bc313eb1e9036c31ecab80c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/words.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('words', require('../words'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_ad8bb268ed7a9049a12de9c8fcc8e83856f1c67bc313eb1e9036c31ecab80c2d->leave($__internal_ad8bb268ed7a9049a12de9c8fcc8e83856f1c67bc313eb1e9036c31ecab80c2d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/words.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('words', require('../words'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/words.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/words.js");
    }
}
