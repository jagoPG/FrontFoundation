<?php

/* node_modules/core-js/modules/_add-to-unscopables.js */
class __TwigTemplate_020a18b9fca07ac8c21f2dd966158ec6a7fed70fdbd72a6f1b88165525d7798a extends Twig_Template
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
        $__internal_1b8f22a4e37a500715f91bcc223723c34db37198f5d64bf1e7bdb1170e60110b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8f22a4e37a500715f91bcc223723c34db37198f5d64bf1e7bdb1170e60110b->enter($__internal_1b8f22a4e37a500715f91bcc223723c34db37198f5d64bf1e7bdb1170e60110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_add-to-unscopables.js"));

        // line 1
        echo "// 22.1.3.31 Array.prototype[@@unscopables]
var UNSCOPABLES = require('./_wks')('unscopables');
var ArrayProto = Array.prototype;
if (ArrayProto[UNSCOPABLES] == undefined) require('./_hide')(ArrayProto, UNSCOPABLES, {});
module.exports = function (key) {
  ArrayProto[UNSCOPABLES][key] = true;
};
";
        
        $__internal_1b8f22a4e37a500715f91bcc223723c34db37198f5d64bf1e7bdb1170e60110b->leave($__internal_1b8f22a4e37a500715f91bcc223723c34db37198f5d64bf1e7bdb1170e60110b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_add-to-unscopables.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 22.1.3.31 Array.prototype[@@unscopables]
var UNSCOPABLES = require('./_wks')('unscopables');
var ArrayProto = Array.prototype;
if (ArrayProto[UNSCOPABLES] == undefined) require('./_hide')(ArrayProto, UNSCOPABLES, {});
module.exports = function (key) {
  ArrayProto[UNSCOPABLES][key] = true;
};
", "node_modules/core-js/modules/_add-to-unscopables.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_add-to-unscopables.js");
    }
}
