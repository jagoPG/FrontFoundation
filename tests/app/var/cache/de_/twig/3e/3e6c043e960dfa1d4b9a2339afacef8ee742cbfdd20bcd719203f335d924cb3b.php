<?php

/* node_modules/es5-ext/iterable/for-each.js */
class __TwigTemplate_68babb5100614017d2f43111da7d0a40e58c963029152bdb888734958e49ec20 extends Twig_Template
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
        $__internal_28ba87acf698e8ed4beb34beca411227bfdf5f485857dbe34609eff417d6d0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ba87acf698e8ed4beb34beca411227bfdf5f485857dbe34609eff417d6d0c4->enter($__internal_28ba87acf698e8ed4beb34beca411227bfdf5f485857dbe34609eff417d6d0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/iterable/for-each.js"));

        // line 1
        echo "\"use strict\";

var forOf      = require(\"es6-iterator/for-of\")
  , isIterable = require(\"es6-iterator/is-iterable\")
  , iterable   = require(\"./validate\")

  , forEach = Array.prototype.forEach;

module.exports = function (target, cb/*, thisArg*/) {
\tif (isIterable(iterable(target))) forOf(target, cb, arguments[2]);
\telse forEach.call(target, cb, arguments[2]);
};
";
        
        $__internal_28ba87acf698e8ed4beb34beca411227bfdf5f485857dbe34609eff417d6d0c4->leave($__internal_28ba87acf698e8ed4beb34beca411227bfdf5f485857dbe34609eff417d6d0c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/iterable/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var forOf      = require(\"es6-iterator/for-of\")
  , isIterable = require(\"es6-iterator/is-iterable\")
  , iterable   = require(\"./validate\")

  , forEach = Array.prototype.forEach;

module.exports = function (target, cb/*, thisArg*/) {
\tif (isIterable(iterable(target))) forOf(target, cb, arguments[2]);
\telse forEach.call(target, cb, arguments[2]);
};
", "node_modules/es5-ext/iterable/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/iterable/for-each.js");
    }
}
