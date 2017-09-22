<?php

/* node_modules/core-js/library/modules/core.get-iterator-method.js */
class __TwigTemplate_0fa64d93c3268a58a086cfda79af413eaf166394131edf83dbd6ad62375c238a extends Twig_Template
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
        $__internal_0e27a2b0e4b1c9a1e609116ab89150e868e7c7e3f6bbd894fc3fdc6d955c174c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e27a2b0e4b1c9a1e609116ab89150e868e7c7e3f6bbd894fc3fdc6d955c174c->enter($__internal_0e27a2b0e4b1c9a1e609116ab89150e868e7c7e3f6bbd894fc3fdc6d955c174c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.get-iterator-method.js"));

        // line 1
        echo "var classof = require('./_classof');
var ITERATOR = require('./_wks')('iterator');
var Iterators = require('./_iterators');
module.exports = require('./_core').getIteratorMethod = function (it) {
  if (it != undefined) return it[ITERATOR]
    || it['@@iterator']
    || Iterators[classof(it)];
};
";
        
        $__internal_0e27a2b0e4b1c9a1e609116ab89150e868e7c7e3f6bbd894fc3fdc6d955c174c->leave($__internal_0e27a2b0e4b1c9a1e609116ab89150e868e7c7e3f6bbd894fc3fdc6d955c174c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.get-iterator-method.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var classof = require('./_classof');
var ITERATOR = require('./_wks')('iterator');
var Iterators = require('./_iterators');
module.exports = require('./_core').getIteratorMethod = function (it) {
  if (it != undefined) return it[ITERATOR]
    || it['@@iterator']
    || Iterators[classof(it)];
};
", "node_modules/core-js/library/modules/core.get-iterator-method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.get-iterator-method.js");
    }
}
