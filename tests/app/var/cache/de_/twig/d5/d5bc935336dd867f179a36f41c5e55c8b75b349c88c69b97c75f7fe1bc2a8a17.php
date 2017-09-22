<?php

/* node_modules/es5-ext/array/#/is-uniq.js */
class __TwigTemplate_54b6a1053805a93319e549dc12f7726a66b38c7d120cb871336432ddddc60acc extends Twig_Template
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
        $__internal_ca8253a15c08e7119b615df74d90d7afd678f024308ee9ccea19bd45631f3185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8253a15c08e7119b615df74d90d7afd678f024308ee9ccea19bd45631f3185->enter($__internal_ca8253a15c08e7119b615df74d90d7afd678f024308ee9ccea19bd45631f3185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/is-uniq.js"));

        // line 1
        echo "\"use strict\";

var indexOf = require(\"./e-index-of\")

  , every = Array.prototype.every
  , isFirst;

isFirst = function (value, index) {
\treturn indexOf.call(this, value) === index;
};

module.exports = function () {
 return every.call(this, isFirst, this);
};
";
        
        $__internal_ca8253a15c08e7119b615df74d90d7afd678f024308ee9ccea19bd45631f3185->leave($__internal_ca8253a15c08e7119b615df74d90d7afd678f024308ee9ccea19bd45631f3185_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/is-uniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var indexOf = require(\"./e-index-of\")

  , every = Array.prototype.every
  , isFirst;

isFirst = function (value, index) {
\treturn indexOf.call(this, value) === index;
};

module.exports = function () {
 return every.call(this, isFirst, this);
};
", "node_modules/es5-ext/array/#/is-uniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/is-uniq.js");
    }
}
