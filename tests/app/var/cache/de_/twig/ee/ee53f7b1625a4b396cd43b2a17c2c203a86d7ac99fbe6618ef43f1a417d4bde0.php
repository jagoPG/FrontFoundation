<?php

/* node_modules/mime-db/index.js */
class __TwigTemplate_9b5c60a37b5f139eccbc15b209dff8662664ed30c8b864d770ebf07a9989f938 extends Twig_Template
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
        $__internal_a8d79c0c7578909387d9dcb83f61613f255d5b9315cb230af3994b16ae32a63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d79c0c7578909387d9dcb83f61613f255d5b9315cb230af3994b16ae32a63f->enter($__internal_a8d79c0c7578909387d9dcb83f61613f255d5b9315cb230af3994b16ae32a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mime-db/index.js"));

        // line 1
        echo "/*!
 * mime-db
 * Copyright(c) 2014 Jonathan Ong
 * MIT Licensed
 */

/**
 * Module exports.
 */

module.exports = require('./db.json')
";
        
        $__internal_a8d79c0c7578909387d9dcb83f61613f255d5b9315cb230af3994b16ae32a63f->leave($__internal_a8d79c0c7578909387d9dcb83f61613f255d5b9315cb230af3994b16ae32a63f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mime-db/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * mime-db
 * Copyright(c) 2014 Jonathan Ong
 * MIT Licensed
 */

/**
 * Module exports.
 */

module.exports = require('./db.json')
", "node_modules/mime-db/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mime-db/index.js");
    }
}
