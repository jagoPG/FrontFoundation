<?php

/* node_modules/gauge/set-immediate.js */
class __TwigTemplate_c7476edd1e1845672d9ecb047431e8c2804d14fe07bcf66618da4caceef07a9e extends Twig_Template
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
        $__internal_3f224a15118c785dfa05c14e251d13101627fa88a4e2fef67ca92681e9056cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f224a15118c785dfa05c14e251d13101627fa88a4e2fef67ca92681e9056cf7->enter($__internal_3f224a15118c785dfa05c14e251d13101627fa88a4e2fef67ca92681e9056cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/set-immediate.js"));

        // line 1
        echo "'use strict'
var process = require('./process')
try {
  module.exports = setImmediate
} catch (ex) {
  module.exports = process.nextTick
}
";
        
        $__internal_3f224a15118c785dfa05c14e251d13101627fa88a4e2fef67ca92681e9056cf7->leave($__internal_3f224a15118c785dfa05c14e251d13101627fa88a4e2fef67ca92681e9056cf7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/set-immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var process = require('./process')
try {
  module.exports = setImmediate
} catch (ex) {
  module.exports = process.nextTick
}
", "node_modules/gauge/set-immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/set-immediate.js");
    }
}
