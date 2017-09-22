<?php

/* node_modules/fsevents/node_modules/strip-ansi/index.js */
class __TwigTemplate_97a12017d23dd18fb239639f4f0c5e0809f12337abaf455fc4ad46ff8c22968d extends Twig_Template
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
        $__internal_09108a79fc02175223b1d75cfe113ddaa237f493808d3783f2801321c6480e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09108a79fc02175223b1d75cfe113ddaa237f493808d3783f2801321c6480e17->enter($__internal_09108a79fc02175223b1d75cfe113ddaa237f493808d3783f2801321c6480e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/strip-ansi/index.js"));

        // line 1
        echo "'use strict';
var ansiRegex = require('ansi-regex')();

module.exports = function (str) {
\treturn typeof str === 'string' ? str.replace(ansiRegex, '') : str;
};
";
        
        $__internal_09108a79fc02175223b1d75cfe113ddaa237f493808d3783f2801321c6480e17->leave($__internal_09108a79fc02175223b1d75cfe113ddaa237f493808d3783f2801321c6480e17_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/strip-ansi/index.js";
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
", "node_modules/fsevents/node_modules/strip-ansi/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/strip-ansi/index.js");
    }
}
