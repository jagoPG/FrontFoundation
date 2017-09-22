<?php

/* node_modules/define-properties/index.js */
class __TwigTemplate_b7149cc36dd29b046466ca314c420404012d18671605959cb536113ee73680f4 extends Twig_Template
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
        $__internal_07f97e334b6b5f7e32730b676a16e12a8df05ec125ec32985b8254b72163ab43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f97e334b6b5f7e32730b676a16e12a8df05ec125ec32985b8254b72163ab43->enter($__internal_07f97e334b6b5f7e32730b676a16e12a8df05ec125ec32985b8254b72163ab43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/define-properties/index.js"));

        // line 1
        echo "'use strict';

var keys = require('object-keys');
var foreach = require('foreach');
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

var toStr = Object.prototype.toString;

var isFunction = function (fn) {
\treturn typeof fn === 'function' && toStr.call(fn) === '[object Function]';
};

var arePropertyDescriptorsSupported = function () {
\tvar obj = {};
\ttry {
\t\tObject.defineProperty(obj, 'x', { enumerable: false, value: obj });
        /* eslint-disable no-unused-vars, no-restricted-syntax */
        for (var _ in obj) { return false; }
        /* eslint-enable no-unused-vars, no-restricted-syntax */
\t\treturn obj.x === obj;
\t} catch (e) { /* this is IE 8. */
\t\treturn false;
\t}
};
var supportsDescriptors = Object.defineProperty && arePropertyDescriptorsSupported();

var defineProperty = function (object, name, value, predicate) {
\tif (name in object && (!isFunction(predicate) || !predicate())) {
\t\treturn;
\t}
\tif (supportsDescriptors) {
\t\tObject.defineProperty(object, name, {
\t\t\tconfigurable: true,
\t\t\tenumerable: false,
\t\t\tvalue: value,
\t\t\twritable: true
\t\t});
\t} else {
\t\tobject[name] = value;
\t}
};

var defineProperties = function (object, map) {
\tvar predicates = arguments.length > 2 ? arguments[2] : {};
\tvar props = keys(map);
\tif (hasSymbols) {
\t\tprops = props.concat(Object.getOwnPropertySymbols(map));
\t}
\tforeach(props, function (name) {
\t\tdefineProperty(object, name, map[name], predicates[name]);
\t});
};

defineProperties.supportsDescriptors = !!supportsDescriptors;

module.exports = defineProperties;
";
        
        $__internal_07f97e334b6b5f7e32730b676a16e12a8df05ec125ec32985b8254b72163ab43->leave($__internal_07f97e334b6b5f7e32730b676a16e12a8df05ec125ec32985b8254b72163ab43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/define-properties/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var keys = require('object-keys');
var foreach = require('foreach');
var hasSymbols = typeof Symbol === 'function' && typeof Symbol() === 'symbol';

var toStr = Object.prototype.toString;

var isFunction = function (fn) {
\treturn typeof fn === 'function' && toStr.call(fn) === '[object Function]';
};

var arePropertyDescriptorsSupported = function () {
\tvar obj = {};
\ttry {
\t\tObject.defineProperty(obj, 'x', { enumerable: false, value: obj });
        /* eslint-disable no-unused-vars, no-restricted-syntax */
        for (var _ in obj) { return false; }
        /* eslint-enable no-unused-vars, no-restricted-syntax */
\t\treturn obj.x === obj;
\t} catch (e) { /* this is IE 8. */
\t\treturn false;
\t}
};
var supportsDescriptors = Object.defineProperty && arePropertyDescriptorsSupported();

var defineProperty = function (object, name, value, predicate) {
\tif (name in object && (!isFunction(predicate) || !predicate())) {
\t\treturn;
\t}
\tif (supportsDescriptors) {
\t\tObject.defineProperty(object, name, {
\t\t\tconfigurable: true,
\t\t\tenumerable: false,
\t\t\tvalue: value,
\t\t\twritable: true
\t\t});
\t} else {
\t\tobject[name] = value;
\t}
};

var defineProperties = function (object, map) {
\tvar predicates = arguments.length > 2 ? arguments[2] : {};
\tvar props = keys(map);
\tif (hasSymbols) {
\t\tprops = props.concat(Object.getOwnPropertySymbols(map));
\t}
\tforeach(props, function (name) {
\t\tdefineProperty(object, name, map[name], predicates[name]);
\t});
};

defineProperties.supportsDescriptors = !!supportsDescriptors;

module.exports = defineProperties;
", "node_modules/define-properties/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/define-properties/index.js");
    }
}
