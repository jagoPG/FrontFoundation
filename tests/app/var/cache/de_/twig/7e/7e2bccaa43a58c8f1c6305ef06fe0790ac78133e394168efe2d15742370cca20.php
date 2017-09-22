<?php

/* node_modules/qs/lib/index.js */
class __TwigTemplate_bd1ef546d96cc1f16cb367754959e5ba4d5347f1c22b8a763d43cba19303860c extends Twig_Template
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
        $__internal_4d8133cf2799325b073d30d8edecb5f08e41858be3b4c4bc04cd6f494c146e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8133cf2799325b073d30d8edecb5f08e41858be3b4c4bc04cd6f494c146e06->enter($__internal_4d8133cf2799325b073d30d8edecb5f08e41858be3b4c4bc04cd6f494c146e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/qs/lib/index.js"));

        // line 1
        echo "'use strict';

var stringify = require('./stringify');
var parse = require('./parse');
var formats = require('./formats');

module.exports = {
    formats: formats,
    parse: parse,
    stringify: stringify
};
";
        
        $__internal_4d8133cf2799325b073d30d8edecb5f08e41858be3b4c4bc04cd6f494c146e06->leave($__internal_4d8133cf2799325b073d30d8edecb5f08e41858be3b4c4bc04cd6f494c146e06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/qs/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var stringify = require('./stringify');
var parse = require('./parse');
var formats = require('./formats');

module.exports = {
    formats: formats,
    parse: parse,
    stringify: stringify
};
", "node_modules/qs/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/qs/lib/index.js");
    }
}
