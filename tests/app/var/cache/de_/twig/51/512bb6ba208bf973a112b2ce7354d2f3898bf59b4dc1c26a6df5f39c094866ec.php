<?php

/* node_modules/fsevents/node_modules/qs/lib/formats.js */
class __TwigTemplate_76f04c60fd1261804c8c0661eaa8f0e1ed89d2c498113edd2bd16075a78f7684 extends Twig_Template
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
        $__internal_30ea40e21633d2b8047a0a262fc43d5ed5f4b3402cf0dfb034efc82fd3e364c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ea40e21633d2b8047a0a262fc43d5ed5f4b3402cf0dfb034efc82fd3e364c6->enter($__internal_30ea40e21633d2b8047a0a262fc43d5ed5f4b3402cf0dfb034efc82fd3e364c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/qs/lib/formats.js"));

        // line 1
        echo "'use strict';

var replace = String.prototype.replace;
var percentTwenties = /%20/g;

module.exports = {
    'default': 'RFC3986',
    formatters: {
        RFC1738: function (value) {
            return replace.call(value, percentTwenties, '+');
        },
        RFC3986: function (value) {
            return value;
        }
    },
    RFC1738: 'RFC1738',
    RFC3986: 'RFC3986'
};
";
        
        $__internal_30ea40e21633d2b8047a0a262fc43d5ed5f4b3402cf0dfb034efc82fd3e364c6->leave($__internal_30ea40e21633d2b8047a0a262fc43d5ed5f4b3402cf0dfb034efc82fd3e364c6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/qs/lib/formats.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var replace = String.prototype.replace;
var percentTwenties = /%20/g;

module.exports = {
    'default': 'RFC3986',
    formatters: {
        RFC1738: function (value) {
            return replace.call(value, percentTwenties, '+');
        },
        RFC3986: function (value) {
            return value;
        }
    },
    RFC1738: 'RFC1738',
    RFC3986: 'RFC3986'
};
", "node_modules/fsevents/node_modules/qs/lib/formats.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/qs/lib/formats.js");
    }
}
