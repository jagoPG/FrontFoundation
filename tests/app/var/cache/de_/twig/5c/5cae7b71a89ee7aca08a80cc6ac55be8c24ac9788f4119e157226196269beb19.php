<?php

/* node_modules/qs/lib/formats.js */
class __TwigTemplate_5ecb9e13c8a312f2487017320b737b0d18c6e4971656a4318f87bdf65fcd0751 extends Twig_Template
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
        $__internal_b548de3d075069e00b370806e49483cf77bf144ad123b3fc6bbcf84e58c4acd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b548de3d075069e00b370806e49483cf77bf144ad123b3fc6bbcf84e58c4acd6->enter($__internal_b548de3d075069e00b370806e49483cf77bf144ad123b3fc6bbcf84e58c4acd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/qs/lib/formats.js"));

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
        
        $__internal_b548de3d075069e00b370806e49483cf77bf144ad123b3fc6bbcf84e58c4acd6->leave($__internal_b548de3d075069e00b370806e49483cf77bf144ad123b3fc6bbcf84e58c4acd6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/qs/lib/formats.js";
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
", "node_modules/qs/lib/formats.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/qs/lib/formats.js");
    }
}
