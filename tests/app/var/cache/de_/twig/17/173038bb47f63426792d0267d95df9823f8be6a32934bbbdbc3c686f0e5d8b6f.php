<?php

/* node_modules/lodash/fp/next.js */
class __TwigTemplate_1d066e76545465ff6d486e858d65901fd620cfd68664ecb6b0ff1c3c9048b77e extends Twig_Template
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
        $__internal_68e9289c150ae28064b4141cc1bcc1a35ce4338e1fe766be5ab539bdb192357a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e9289c150ae28064b4141cc1bcc1a35ce4338e1fe766be5ab539bdb192357a->enter($__internal_68e9289c150ae28064b4141cc1bcc1a35ce4338e1fe766be5ab539bdb192357a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/next.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('next', require('../next'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_68e9289c150ae28064b4141cc1bcc1a35ce4338e1fe766be5ab539bdb192357a->leave($__internal_68e9289c150ae28064b4141cc1bcc1a35ce4338e1fe766be5ab539bdb192357a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/next.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('next', require('../next'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/next.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/next.js");
    }
}
