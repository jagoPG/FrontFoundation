<?php

/* node_modules/event-emitter/unify.js */
class __TwigTemplate_e0c6908bda3797a41bc752df23b0296d3b82b0e768c57fd8e085037ec2ed861a extends Twig_Template
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
        $__internal_414e263d432233f4971468beaf8706441b1e8577be9d51ea1544ba579a8f501b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414e263d432233f4971468beaf8706441b1e8577be9d51ea1544ba579a8f501b->enter($__internal_414e263d432233f4971468beaf8706441b1e8577be9d51ea1544ba579a8f501b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/unify.js"));

        // line 1
        echo "'use strict';

var forEach    = require('es5-ext/object/for-each')
  , validValue = require('es5-ext/object/valid-object')

  , push = Array.prototype.apply, defineProperty = Object.defineProperty
  , create = Object.create, hasOwnProperty = Object.prototype.hasOwnProperty
  , d = { configurable: true, enumerable: false, writable: true };

module.exports = function (e1, e2) {
\tvar data;
\t(validValue(e1) && validValue(e2));
\tif (!hasOwnProperty.call(e1, '__ee__')) {
\t\tif (!hasOwnProperty.call(e2, '__ee__')) {
\t\t\td.value = create(null);
\t\t\tdefineProperty(e1, '__ee__', d);
\t\t\tdefineProperty(e2, '__ee__', d);
\t\t\td.value = null;
\t\t\treturn;
\t\t}
\t\td.value = e2.__ee__;
\t\tdefineProperty(e1, '__ee__', d);
\t\td.value = null;
\t\treturn;
\t}
\tdata = d.value = e1.__ee__;
\tif (!hasOwnProperty.call(e2, '__ee__')) {
\t\tdefineProperty(e2, '__ee__', d);
\t\td.value = null;
\t\treturn;
\t}
\tif (data === e2.__ee__) return;
\tforEach(e2.__ee__, function (listener, name) {
\t\tif (!data[name]) {
\t\t\tdata[name] = listener;
\t\t\treturn;
\t\t}
\t\tif (typeof data[name] === 'object') {
\t\t\tif (typeof listener === 'object') push.apply(data[name], listener);
\t\t\telse data[name].push(listener);
\t\t} else if (typeof listener === 'object') {
\t\t\tlistener.unshift(data[name]);
\t\t\tdata[name] = listener;
\t\t} else {
\t\t\tdata[name] = [data[name], listener];
\t\t}
\t});
\tdefineProperty(e2, '__ee__', d);
\td.value = null;
};
";
        
        $__internal_414e263d432233f4971468beaf8706441b1e8577be9d51ea1544ba579a8f501b->leave($__internal_414e263d432233f4971468beaf8706441b1e8577be9d51ea1544ba579a8f501b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/unify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var forEach    = require('es5-ext/object/for-each')
  , validValue = require('es5-ext/object/valid-object')

  , push = Array.prototype.apply, defineProperty = Object.defineProperty
  , create = Object.create, hasOwnProperty = Object.prototype.hasOwnProperty
  , d = { configurable: true, enumerable: false, writable: true };

module.exports = function (e1, e2) {
\tvar data;
\t(validValue(e1) && validValue(e2));
\tif (!hasOwnProperty.call(e1, '__ee__')) {
\t\tif (!hasOwnProperty.call(e2, '__ee__')) {
\t\t\td.value = create(null);
\t\t\tdefineProperty(e1, '__ee__', d);
\t\t\tdefineProperty(e2, '__ee__', d);
\t\t\td.value = null;
\t\t\treturn;
\t\t}
\t\td.value = e2.__ee__;
\t\tdefineProperty(e1, '__ee__', d);
\t\td.value = null;
\t\treturn;
\t}
\tdata = d.value = e1.__ee__;
\tif (!hasOwnProperty.call(e2, '__ee__')) {
\t\tdefineProperty(e2, '__ee__', d);
\t\td.value = null;
\t\treturn;
\t}
\tif (data === e2.__ee__) return;
\tforEach(e2.__ee__, function (listener, name) {
\t\tif (!data[name]) {
\t\t\tdata[name] = listener;
\t\t\treturn;
\t\t}
\t\tif (typeof data[name] === 'object') {
\t\t\tif (typeof listener === 'object') push.apply(data[name], listener);
\t\t\telse data[name].push(listener);
\t\t} else if (typeof listener === 'object') {
\t\t\tlistener.unshift(data[name]);
\t\t\tdata[name] = listener;
\t\t} else {
\t\t\tdata[name] = [data[name], listener];
\t\t}
\t});
\tdefineProperty(e2, '__ee__', d);
\td.value = null;
};
", "node_modules/event-emitter/unify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/unify.js");
    }
}
