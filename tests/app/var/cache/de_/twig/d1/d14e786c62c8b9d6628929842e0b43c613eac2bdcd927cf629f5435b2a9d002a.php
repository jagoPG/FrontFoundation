<?php

/* node_modules/strip-ansi/index.js */
class __TwigTemplate_c71a520513112f8635e6b5b158ae446d480ceb72b84faebe0de01f5c634128e9 extends Twig_Template
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
        $__internal_a3ef7a5f0b71b7fde738d2aac37920b48c633d9ed3ecac8690d56fa576150cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ef7a5f0b71b7fde738d2aac37920b48c633d9ed3ecac8690d56fa576150cc7->enter($__internal_a3ef7a5f0b71b7fde738d2aac37920b48c633d9ed3ecac8690d56fa576150cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/strip-ansi/index.js"));

        // line 1
        echo "'use strict';
var ansiRegex = require('ansi-regex')();

module.exports = function (str) {
\treturn typeof str === 'string' ? str.replace(ansiRegex, '') : str;
};
";
        
        $__internal_a3ef7a5f0b71b7fde738d2aac37920b48c633d9ed3ecac8690d56fa576150cc7->leave($__internal_a3ef7a5f0b71b7fde738d2aac37920b48c633d9ed3ecac8690d56fa576150cc7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/strip-ansi/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var ansiRegex = require('ansi-regex')();

module.exports = function (str) {
\treturn typeof str === 'string' ? str.replace(ansiRegex, '') : str;
};
", "node_modules/strip-ansi/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/strip-ansi/index.js");
    }
}
