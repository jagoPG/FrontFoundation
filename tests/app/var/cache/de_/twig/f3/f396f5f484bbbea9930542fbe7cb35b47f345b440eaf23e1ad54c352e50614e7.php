<?php

/* node_modules/es5-ext/string/#/hyphen-to-camel.js */
class __TwigTemplate_a86097b25ea43d2a3ec48610324b99b908a0ab023cff7aabf654da05d4a616bf extends Twig_Template
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
        $__internal_e480400d719781dda7b265a6975b98ddc6dcb33785873db53eba7dc30aaaae8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e480400d719781dda7b265a6975b98ddc6dcb33785873db53eba7dc30aaaae8f->enter($__internal_e480400d719781dda7b265a6975b98ddc6dcb33785873db53eba7dc30aaaae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/hyphen-to-camel.js"));

        // line 1
        echo "\"use strict\";

var replace = String.prototype.replace, re = /-([a-z0-9])/g;
var toUpperCase = function (ignored, a) {
\treturn a.toUpperCase();
};

module.exports = function () {
\treturn replace.call(this, re, toUpperCase);
};
";
        
        $__internal_e480400d719781dda7b265a6975b98ddc6dcb33785873db53eba7dc30aaaae8f->leave($__internal_e480400d719781dda7b265a6975b98ddc6dcb33785873db53eba7dc30aaaae8f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/hyphen-to-camel.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var replace = String.prototype.replace, re = /-([a-z0-9])/g;
var toUpperCase = function (ignored, a) {
\treturn a.toUpperCase();
};

module.exports = function () {
\treturn replace.call(this, re, toUpperCase);
};
", "node_modules/es5-ext/string/#/hyphen-to-camel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/hyphen-to-camel.js");
    }
}
