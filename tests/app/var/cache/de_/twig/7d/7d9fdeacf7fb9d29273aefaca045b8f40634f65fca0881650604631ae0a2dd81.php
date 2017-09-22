<?php

/* node_modules/lodash/fp/findLast.js */
class __TwigTemplate_4fdff2c06e6f0eeb05748212cfa678a54de910501b0bd4c4baea81a2f75f7ae4 extends Twig_Template
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
        $__internal_887b9a84f639f9cbdbd45543710e0a5669cce556e3d4f905f6a7908cb9416ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887b9a84f639f9cbdbd45543710e0a5669cce556e3d4f905f6a7908cb9416ac6->enter($__internal_887b9a84f639f9cbdbd45543710e0a5669cce556e3d4f905f6a7908cb9416ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/findLast.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('findLast', require('../findLast'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_887b9a84f639f9cbdbd45543710e0a5669cce556e3d4f905f6a7908cb9416ac6->leave($__internal_887b9a84f639f9cbdbd45543710e0a5669cce556e3d4f905f6a7908cb9416ac6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/findLast.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('findLast', require('../findLast'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/findLast.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/findLast.js");
    }
}
