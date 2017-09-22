<?php

/* node_modules/es6-set/test/ext/get-last.js */
class __TwigTemplate_edbb816ce910c9e39d30309a85c8add9444b7fd2291afc18c15504396987f89f extends Twig_Template
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
        $__internal_054dc7bc758f157a3aa1042d4b0b443fbd97dafab2ed439734aba634b47bc8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054dc7bc758f157a3aa1042d4b0b443fbd97dafab2ed439734aba634b47bc8e4->enter($__internal_054dc7bc758f157a3aa1042d4b0b443fbd97dafab2ed439734aba634b47bc8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/ext/get-last.js"));

        // line 1
        echo "'use strict';

var Set     = require('../../');

module.exports = function (t, a) {
\tvar content = ['raz', 2, true], set = new Set(content);

\ta(t.call(set), true);

\tset = new Set();
\ta(t.call(set), undefined);
};
";
        
        $__internal_054dc7bc758f157a3aa1042d4b0b443fbd97dafab2ed439734aba634b47bc8e4->leave($__internal_054dc7bc758f157a3aa1042d4b0b443fbd97dafab2ed439734aba634b47bc8e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/ext/get-last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Set     = require('../../');

module.exports = function (t, a) {
\tvar content = ['raz', 2, true], set = new Set(content);

\ta(t.call(set), true);

\tset = new Set();
\ta(t.call(set), undefined);
};
", "node_modules/es6-set/test/ext/get-last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/ext/get-last.js");
    }
}
