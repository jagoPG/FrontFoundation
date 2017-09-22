<?php

/* node_modules/es6-set/test/ext/get-first.js */
class __TwigTemplate_7a8ed1550c5638e05b9b4475e37adc39d87bce2acc4163763e466d097b539055 extends Twig_Template
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
        $__internal_ffce0a9a6685b5a840e3de677295cfe13c41e24aae821b6937217bf28523f446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffce0a9a6685b5a840e3de677295cfe13c41e24aae821b6937217bf28523f446->enter($__internal_ffce0a9a6685b5a840e3de677295cfe13c41e24aae821b6937217bf28523f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/ext/get-first.js"));

        // line 1
        echo "'use strict';

var Set     = require('../../');

module.exports = function (t, a) {
\tvar content = ['raz', 2, true], set = new Set(content);

\ta(t.call(set), 'raz');

\tset = new Set();
\ta(t.call(set), undefined);
};
";
        
        $__internal_ffce0a9a6685b5a840e3de677295cfe13c41e24aae821b6937217bf28523f446->leave($__internal_ffce0a9a6685b5a840e3de677295cfe13c41e24aae821b6937217bf28523f446_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/ext/get-first.js";
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

\ta(t.call(set), 'raz');

\tset = new Set();
\ta(t.call(set), undefined);
};
", "node_modules/es6-set/test/ext/get-first.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/ext/get-first.js");
    }
}
