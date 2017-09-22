<?php

/* node_modules/core-js/library/modules/_date-to-primitive.js */
class __TwigTemplate_b2bee9254d8a05d52e124bdc632fdf4dbf3c255c3187ef010030a1181a91f959 extends Twig_Template
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
        $__internal_f38a5efab158eb6470f0994f2b4b528feb47b6d9572561607315955910fd0f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38a5efab158eb6470f0994f2b4b528feb47b6d9572561607315955910fd0f50->enter($__internal_f38a5efab158eb6470f0994f2b4b528feb47b6d9572561607315955910fd0f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_date-to-primitive.js"));

        // line 1
        echo "'use strict';
var anObject = require('./_an-object');
var toPrimitive = require('./_to-primitive');
var NUMBER = 'number';

module.exports = function (hint) {
  if (hint !== 'string' && hint !== NUMBER && hint !== 'default') throw TypeError('Incorrect hint');
  return toPrimitive(anObject(this), hint != NUMBER);
};
";
        
        $__internal_f38a5efab158eb6470f0994f2b4b528feb47b6d9572561607315955910fd0f50->leave($__internal_f38a5efab158eb6470f0994f2b4b528feb47b6d9572561607315955910fd0f50_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_date-to-primitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var anObject = require('./_an-object');
var toPrimitive = require('./_to-primitive');
var NUMBER = 'number';

module.exports = function (hint) {
  if (hint !== 'string' && hint !== NUMBER && hint !== 'default') throw TypeError('Incorrect hint');
  return toPrimitive(anObject(this), hint != NUMBER);
};
", "node_modules/core-js/library/modules/_date-to-primitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_date-to-primitive.js");
    }
}
