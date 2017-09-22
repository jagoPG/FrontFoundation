<?php

/* node_modules/es6-map/test/index.js */
class __TwigTemplate_7ecc1f7131b0be119f6fd7ef1c5525897a055a618bffc837f809e3e0a9efbc21 extends Twig_Template
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
        $__internal_68f41ba9e2b450a84472cbbcbb3b15314424d88ae58586ceabc6b5aec1572358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f41ba9e2b450a84472cbbcbb3b15314424d88ae58586ceabc6b5aec1572358->enter($__internal_68f41ba9e2b450a84472cbbcbb3b15314424d88ae58586ceabc6b5aec1572358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/index.js"));

        // line 1
        echo "'use strict';

module.exports = function (T, a) {
\ta((new T([['raz', 1], ['dwa', 2]])).size, 2);
};
";
        
        $__internal_68f41ba9e2b450a84472cbbcbb3b15314424d88ae58586ceabc6b5aec1572358->leave($__internal_68f41ba9e2b450a84472cbbcbb3b15314424d88ae58586ceabc6b5aec1572358_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (T, a) {
\ta((new T([['raz', 1], ['dwa', 2]])).size, 2);
};
", "node_modules/es6-map/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/index.js");
    }
}
