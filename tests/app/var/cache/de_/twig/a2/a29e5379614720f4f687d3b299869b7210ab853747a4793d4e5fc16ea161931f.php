<?php

/* node_modules/es5-ext/object/mixin.js */
class __TwigTemplate_669094cbf57b67e7ca6e5251588edbe8405612dc06c7e44586352437afb6d450 extends Twig_Template
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
        $__internal_346129a4649be88a8cf7727bf470a4ac094bd98eaa3c8b41d842787bcda3da08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346129a4649be88a8cf7727bf470a4ac094bd98eaa3c8b41d842787bcda3da08->enter($__internal_346129a4649be88a8cf7727bf470a4ac094bd98eaa3c8b41d842787bcda3da08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/mixin.js"));

        // line 1
        echo "\"use strict\";

var value = require(\"./valid-value\")

  , defineProperty = Object.defineProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor
  , getOwnPropertyNames = Object.getOwnPropertyNames
  , getOwnPropertySymbols = Object.getOwnPropertySymbols;

module.exports = function (target, source) {
\tvar error, sourceObject = Object(value(source));
\ttarget = Object(value(target));
\tgetOwnPropertyNames(sourceObject).forEach(function (name) {
\t\ttry {
\t\t\tdefineProperty(target, name, getOwnPropertyDescriptor(source, name));
\t\t} catch (e) {
 error = e;
}
\t});
\tif (typeof getOwnPropertySymbols === \"function\") {
\t\tgetOwnPropertySymbols(sourceObject).forEach(function (symbol) {
\t\t\ttry {
\t\t\t\tdefineProperty(target, symbol, getOwnPropertyDescriptor(source, symbol));
\t\t\t} catch (e) {
 error = e;
}
\t\t});
\t}
\tif (error !== undefined) throw error;
\treturn target;
};
";
        
        $__internal_346129a4649be88a8cf7727bf470a4ac094bd98eaa3c8b41d842787bcda3da08->leave($__internal_346129a4649be88a8cf7727bf470a4ac094bd98eaa3c8b41d842787bcda3da08_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/mixin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value = require(\"./valid-value\")

  , defineProperty = Object.defineProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor
  , getOwnPropertyNames = Object.getOwnPropertyNames
  , getOwnPropertySymbols = Object.getOwnPropertySymbols;

module.exports = function (target, source) {
\tvar error, sourceObject = Object(value(source));
\ttarget = Object(value(target));
\tgetOwnPropertyNames(sourceObject).forEach(function (name) {
\t\ttry {
\t\t\tdefineProperty(target, name, getOwnPropertyDescriptor(source, name));
\t\t} catch (e) {
 error = e;
}
\t});
\tif (typeof getOwnPropertySymbols === \"function\") {
\t\tgetOwnPropertySymbols(sourceObject).forEach(function (symbol) {
\t\t\ttry {
\t\t\t\tdefineProperty(target, symbol, getOwnPropertyDescriptor(source, symbol));
\t\t\t} catch (e) {
 error = e;
}
\t\t});
\t}
\tif (error !== undefined) throw error;
\treturn target;
};
", "node_modules/es5-ext/object/mixin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/mixin.js");
    }
}
