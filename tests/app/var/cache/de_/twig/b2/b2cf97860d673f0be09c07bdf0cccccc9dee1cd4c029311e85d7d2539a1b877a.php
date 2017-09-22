<?php

/* node_modules/es5-ext/object/mixin-prototypes.js */
class __TwigTemplate_cef3bfebb9520ea664c195c87adb1a8c073aeab0a7457daf393f587bd75168cd extends Twig_Template
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
        $__internal_8938f2dcb7077f6969869568a4299dca2986aa07507b8bc297cef33ca37598b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8938f2dcb7077f6969869568a4299dca2986aa07507b8bc297cef33ca37598b6->enter($__internal_8938f2dcb7077f6969869568a4299dca2986aa07507b8bc297cef33ca37598b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/mixin-prototypes.js"));

        // line 1
        echo "\"use strict\";

var value                    = require(\"./valid-value\")
  , mixin                    = require(\"./mixin\")
  , defineProperty           = Object.defineProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor
  , getOwnPropertyNames      = Object.getOwnPropertyNames
  , getPrototypeOf           = Object.getPrototypeOf
  , objHasOwnProperty        = Object.prototype.hasOwnProperty;

module.exports = function (target, source) {
\tvar error, end, define;
\ttarget = Object(value(target));
\tsource = Object(value(source));
\tend = getPrototypeOf(target);
\tif (source === end) return target;
\ttry {
\t\tmixin(target, source);
\t} catch (e) {
\t\terror = e;
\t}
\tsource = getPrototypeOf(source);
\tdefine = function (name) {
\t\tif (objHasOwnProperty.call(target, name)) return;
\t\ttry {
\t\t\tdefineProperty(target, name, getOwnPropertyDescriptor(source, name));
\t\t} catch (e) {
\t\t\terror = e;
\t\t}
\t};
\twhile (source && source !== end) {
\t\tgetOwnPropertyNames(source).forEach(define);
\t\tsource = getPrototypeOf(source);
\t}
\tif (error) throw error;
\treturn target;
};
";
        
        $__internal_8938f2dcb7077f6969869568a4299dca2986aa07507b8bc297cef33ca37598b6->leave($__internal_8938f2dcb7077f6969869568a4299dca2986aa07507b8bc297cef33ca37598b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/mixin-prototypes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value                    = require(\"./valid-value\")
  , mixin                    = require(\"./mixin\")
  , defineProperty           = Object.defineProperty
  , getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor
  , getOwnPropertyNames      = Object.getOwnPropertyNames
  , getPrototypeOf           = Object.getPrototypeOf
  , objHasOwnProperty        = Object.prototype.hasOwnProperty;

module.exports = function (target, source) {
\tvar error, end, define;
\ttarget = Object(value(target));
\tsource = Object(value(source));
\tend = getPrototypeOf(target);
\tif (source === end) return target;
\ttry {
\t\tmixin(target, source);
\t} catch (e) {
\t\terror = e;
\t}
\tsource = getPrototypeOf(source);
\tdefine = function (name) {
\t\tif (objHasOwnProperty.call(target, name)) return;
\t\ttry {
\t\t\tdefineProperty(target, name, getOwnPropertyDescriptor(source, name));
\t\t} catch (e) {
\t\t\terror = e;
\t\t}
\t};
\twhile (source && source !== end) {
\t\tgetOwnPropertyNames(source).forEach(define);
\t\tsource = getPrototypeOf(source);
\t}
\tif (error) throw error;
\treturn target;
};
", "node_modules/es5-ext/object/mixin-prototypes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/mixin-prototypes.js");
    }
}
