<?php

/* node_modules/es-to-primitive/es5.js */
class __TwigTemplate_aa19f011c9f2cc56593e5e86a165ff2f11f1403243884fd13e3dbfa3423488ce extends Twig_Template
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
        $__internal_cfb761c2dfa192c7232c2efb9f9c25d4696a39a56435d8bf4d76f588b6032eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb761c2dfa192c7232c2efb9f9c25d4696a39a56435d8bf4d76f588b6032eda->enter($__internal_cfb761c2dfa192c7232c2efb9f9c25d4696a39a56435d8bf4d76f588b6032eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/es5.js"));

        // line 1
        echo "'use strict';

var toStr = Object.prototype.toString;

var isPrimitive = require('./helpers/isPrimitive');

var isCallable = require('is-callable');

// https://es5.github.io/#x8.12
var ES5internalSlots = {
\t'[[DefaultValue]]': function (O, hint) {
\t\tvar actualHint = hint || (toStr.call(O) === '[object Date]' ? String : Number);

\t\tif (actualHint === String || actualHint === Number) {
\t\t\tvar methods = actualHint === String ? ['toString', 'valueOf'] : ['valueOf', 'toString'];
\t\t\tvar value, i;
\t\t\tfor (i = 0; i < methods.length; ++i) {
\t\t\t\tif (isCallable(O[methods[i]])) {
\t\t\t\t\tvalue = O[methods[i]]();
\t\t\t\t\tif (isPrimitive(value)) {
\t\t\t\t\t\treturn value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tthrow new TypeError('No default value');
\t\t}
\t\tthrow new TypeError('invalid [[DefaultValue]] hint supplied');
\t}
};

// https://es5.github.io/#x9
module.exports = function ToPrimitive(input, PreferredType) {
\tif (isPrimitive(input)) {
\t\treturn input;
\t}
\treturn ES5internalSlots['[[DefaultValue]]'](input, PreferredType);
};
";
        
        $__internal_cfb761c2dfa192c7232c2efb9f9c25d4696a39a56435d8bf4d76f588b6032eda->leave($__internal_cfb761c2dfa192c7232c2efb9f9c25d4696a39a56435d8bf4d76f588b6032eda_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/es5.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var toStr = Object.prototype.toString;

var isPrimitive = require('./helpers/isPrimitive');

var isCallable = require('is-callable');

// https://es5.github.io/#x8.12
var ES5internalSlots = {
\t'[[DefaultValue]]': function (O, hint) {
\t\tvar actualHint = hint || (toStr.call(O) === '[object Date]' ? String : Number);

\t\tif (actualHint === String || actualHint === Number) {
\t\t\tvar methods = actualHint === String ? ['toString', 'valueOf'] : ['valueOf', 'toString'];
\t\t\tvar value, i;
\t\t\tfor (i = 0; i < methods.length; ++i) {
\t\t\t\tif (isCallable(O[methods[i]])) {
\t\t\t\t\tvalue = O[methods[i]]();
\t\t\t\t\tif (isPrimitive(value)) {
\t\t\t\t\t\treturn value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tthrow new TypeError('No default value');
\t\t}
\t\tthrow new TypeError('invalid [[DefaultValue]] hint supplied');
\t}
};

// https://es5.github.io/#x9
module.exports = function ToPrimitive(input, PreferredType) {
\tif (isPrimitive(input)) {
\t\treturn input;
\t}
\treturn ES5internalSlots['[[DefaultValue]]'](input, PreferredType);
};
", "node_modules/es-to-primitive/es5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/es5.js");
    }
}
