<?php

/* node_modules/es5-ext/test/object/set-prototype-of/implement.js */
class __TwigTemplate_bb4bc65b147905c01e9d96a4d46c48706d5ccd8b74ca087bce738366602975d3 extends Twig_Template
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
        $__internal_f7b06d238c34b7ef258970c4ddf8d9305af88325cb1bc48dbd9ca828c0133300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b06d238c34b7ef258970c4ddf8d9305af88325cb1bc48dbd9ca828c0133300->enter($__internal_f7b06d238c34b7ef258970c4ddf8d9305af88325cb1bc48dbd9ca828c0133300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/set-prototype-of/implement.js"));

        // line 1
        echo "\"use strict\";

var create        = require(\"../../../object/create\")
  , isImplemented = require(\"../../../object/set-prototype-of/is-implemented\");

module.exports = function (a) {
 a(isImplemented(create), true);
};
";
        
        $__internal_f7b06d238c34b7ef258970c4ddf8d9305af88325cb1bc48dbd9ca828c0133300->leave($__internal_f7b06d238c34b7ef258970c4ddf8d9305af88325cb1bc48dbd9ca828c0133300_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/set-prototype-of/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var create        = require(\"../../../object/create\")
  , isImplemented = require(\"../../../object/set-prototype-of/is-implemented\");

module.exports = function (a) {
 a(isImplemented(create), true);
};
", "node_modules/es5-ext/test/object/set-prototype-of/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/set-prototype-of/implement.js");
    }
}
