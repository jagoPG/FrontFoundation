<?php

/* node_modules/core-js/modules/_collection-to-json.js */
class __TwigTemplate_43a0ccf05e85a94085a5f2a2e9fbc524edbac5dbf2ee18ebed2733cd99593965 extends Twig_Template
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
        $__internal_9a4e9d51df88f8ee5fa2137ec50cb57ff08ffde42af335dc46c87d9c25b1cd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4e9d51df88f8ee5fa2137ec50cb57ff08ffde42af335dc46c87d9c25b1cd39->enter($__internal_9a4e9d51df88f8ee5fa2137ec50cb57ff08ffde42af335dc46c87d9c25b1cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_collection-to-json.js"));

        // line 1
        echo "// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var classof = require('./_classof');
var from = require('./_array-from-iterable');
module.exports = function (NAME) {
  return function toJSON() {
    if (classof(this) != NAME) throw TypeError(NAME + \"#toJSON isn't generic\");
    return from(this);
  };
};
";
        
        $__internal_9a4e9d51df88f8ee5fa2137ec50cb57ff08ffde42af335dc46c87d9c25b1cd39->leave($__internal_9a4e9d51df88f8ee5fa2137ec50cb57ff08ffde42af335dc46c87d9c25b1cd39_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_collection-to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/DavidBruant/Map-Set.prototype.toJSON
var classof = require('./_classof');
var from = require('./_array-from-iterable');
module.exports = function (NAME) {
  return function toJSON() {
    if (classof(this) != NAME) throw TypeError(NAME + \"#toJSON isn't generic\");
    return from(this);
  };
};
", "node_modules/core-js/modules/_collection-to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_collection-to-json.js");
    }
}
