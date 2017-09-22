<?php

/* node_modules/querystring/index.js */
class __TwigTemplate_9ff085daff99de171b314f9d11ab8c3906660556e6389ec9e8506c75a6fa5a36 extends Twig_Template
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
        $__internal_958b224e5f65c5ae4cd9d177fffeb4c1d4e199e5976d635a84fb00ad2d8619c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958b224e5f65c5ae4cd9d177fffeb4c1d4e199e5976d635a84fb00ad2d8619c8->enter($__internal_958b224e5f65c5ae4cd9d177fffeb4c1d4e199e5976d635a84fb00ad2d8619c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/querystring/index.js"));

        // line 1
        echo "'use strict';

exports.decode = exports.parse = require('./decode');
exports.encode = exports.stringify = require('./encode');
";
        
        $__internal_958b224e5f65c5ae4cd9d177fffeb4c1d4e199e5976d635a84fb00ad2d8619c8->leave($__internal_958b224e5f65c5ae4cd9d177fffeb4c1d4e199e5976d635a84fb00ad2d8619c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/querystring/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

exports.decode = exports.parse = require('./decode');
exports.encode = exports.stringify = require('./encode');
", "node_modules/querystring/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/querystring/index.js");
    }
}
