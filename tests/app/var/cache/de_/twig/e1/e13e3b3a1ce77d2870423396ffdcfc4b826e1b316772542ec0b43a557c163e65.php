<?php

/* node_modules/core-js/library/modules/_keyof.js */
class __TwigTemplate_af3883f6495a42df03b085a1a52c7ce6653b93f502e11f52fae1244b5c9a9728 extends Twig_Template
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
        $__internal_6676ddea1525483f0776bfc6e4185f64162a7813de66b18bdd59496a63cdb017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6676ddea1525483f0776bfc6e4185f64162a7813de66b18bdd59496a63cdb017->enter($__internal_6676ddea1525483f0776bfc6e4185f64162a7813de66b18bdd59496a63cdb017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_keyof.js"));

        // line 1
        echo "var getKeys = require('./_object-keys');
var toIObject = require('./_to-iobject');
module.exports = function (object, el) {
  var O = toIObject(object);
  var keys = getKeys(O);
  var length = keys.length;
  var index = 0;
  var key;
  while (length > index) if (O[key = keys[index++]] === el) return key;
};
";
        
        $__internal_6676ddea1525483f0776bfc6e4185f64162a7813de66b18bdd59496a63cdb017->leave($__internal_6676ddea1525483f0776bfc6e4185f64162a7813de66b18bdd59496a63cdb017_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_keyof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getKeys = require('./_object-keys');
var toIObject = require('./_to-iobject');
module.exports = function (object, el) {
  var O = toIObject(object);
  var keys = getKeys(O);
  var length = keys.length;
  var index = 0;
  var key;
  while (length > index) if (O[key = keys[index++]] === el) return key;
};
", "node_modules/core-js/library/modules/_keyof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_keyof.js");
    }
}
