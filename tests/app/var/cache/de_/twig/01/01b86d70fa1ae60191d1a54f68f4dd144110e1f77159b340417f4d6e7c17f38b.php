<?php

/* node_modules/request/node_modules/qs/lib/formats.js */
class __TwigTemplate_972f1f78cbaac59d562e1a792b721b793198e1414f7f186bb8134cf4151990b9 extends Twig_Template
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
        $__internal_02d7daa1cbbb9b60f41bf363d2c9192e56306cf3c4ac2e8cb3b056f0b0897e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d7daa1cbbb9b60f41bf363d2c9192e56306cf3c4ac2e8cb3b056f0b0897e70->enter($__internal_02d7daa1cbbb9b60f41bf363d2c9192e56306cf3c4ac2e8cb3b056f0b0897e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/request/node_modules/qs/lib/formats.js"));

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
        
        $__internal_02d7daa1cbbb9b60f41bf363d2c9192e56306cf3c4ac2e8cb3b056f0b0897e70->leave($__internal_02d7daa1cbbb9b60f41bf363d2c9192e56306cf3c4ac2e8cb3b056f0b0897e70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/request/node_modules/qs/lib/formats.js";
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
", "node_modules/request/node_modules/qs/lib/formats.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/request/node_modules/qs/lib/formats.js");
    }
}
