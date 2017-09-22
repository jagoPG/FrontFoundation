<?php

/* node_modules/es5-ext/object/set-prototype-of/shim.js */
class __TwigTemplate_6ecfd0802fa2145c34fd4de1d4d774ddae052b7ef0653a32d98aebaa9900bce0 extends Twig_Template
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
        $__internal_68cab613af40e4005981e6521e89d43bef242e61aa961304276e67903e2e4e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cab613af40e4005981e6521e89d43bef242e61aa961304276e67903e2e4e72->enter($__internal_68cab613af40e4005981e6521e89d43bef242e61aa961304276e67903e2e4e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/set-prototype-of/shim.js"));

        // line 1
        echo "/* eslint no-proto: \"off\" */

// Big thanks to @WebReflection for sorting this out
// https://gist.github.com/WebReflection/5593554

\"use strict\";

var isObject        = require(\"../is-object\")
  , value           = require(\"../valid-value\")
  , objIsPrototypOf = Object.prototype.isPrototypeOf
  , defineProperty  = Object.defineProperty
  , nullDesc        = {
\tconfigurable: true,
\tenumerable: false,
\twritable: true,
\tvalue: undefined
}
  , validate;

validate = function (obj, prototype) {
\tvalue(obj);
\tif (prototype === null || isObject(prototype)) return obj;
\tthrow new TypeError(\"Prototype must be null or an object\");
};

module.exports = (function (status) {
\tvar fn, set;
\tif (!status) return null;
\tif (status.level === 2) {
\t\tif (status.set) {
\t\t\tset = status.set;
\t\t\tfn = function (obj, prototype) {
\t\t\t\tset.call(validate(obj, prototype), prototype);
\t\t\t\treturn obj;
\t\t\t};
\t\t} else {
\t\t\tfn = function (obj, prototype) {
\t\t\t\tvalidate(obj, prototype).__proto__ = prototype;
\t\t\t\treturn obj;
\t\t\t};
\t\t}
\t} else {
\t\tfn = function self (obj, prototype) {
\t\t\tvar isNullBase;
\t\t\tvalidate(obj, prototype);
\t\t\tisNullBase = objIsPrototypOf.call(self.nullPolyfill, obj);
\t\t\tif (isNullBase) delete self.nullPolyfill.__proto__;
\t\t\tif (prototype === null) prototype = self.nullPolyfill;
\t\t\tobj.__proto__ = prototype;
\t\t\tif (isNullBase) defineProperty(self.nullPolyfill, \"__proto__\", nullDesc);
\t\t\treturn obj;
\t\t};
\t}
\treturn Object.defineProperty(fn, \"level\", {
\t\tconfigurable: false,
\t\tenumerable: false,
\t\twritable: false,
\t\tvalue: status.level
\t});
}(
\t(function () {
\t\tvar tmpObj1 = Object.create(null)
\t\t  , tmpObj2 = {}
\t\t  , set
\t\t  , desc = Object.getOwnPropertyDescriptor(Object.prototype, \"__proto__\");

\t\tif (desc) {
\t\t\ttry {
\t\t\t\tset = desc.set; // Opera crashes at this point
\t\t\t\tset.call(tmpObj1, tmpObj2);
\t\t\t} catch (ignore) {}
\t\t\tif (Object.getPrototypeOf(tmpObj1) === tmpObj2) return { set: set, level: 2 };
\t\t}

\t\ttmpObj1.__proto__ = tmpObj2;
\t\tif (Object.getPrototypeOf(tmpObj1) === tmpObj2) return { level: 2 };

\t\ttmpObj1 = {};
\t\ttmpObj1.__proto__ = tmpObj2;
\t\tif (Object.getPrototypeOf(tmpObj1) === tmpObj2) return { level: 1 };

\t\treturn false;
\t})()
));

require(\"../create\");
";
        
        $__internal_68cab613af40e4005981e6521e89d43bef242e61aa961304276e67903e2e4e72->leave($__internal_68cab613af40e4005981e6521e89d43bef242e61aa961304276e67903e2e4e72_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/set-prototype-of/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-proto: \"off\" */

// Big thanks to @WebReflection for sorting this out
// https://gist.github.com/WebReflection/5593554

\"use strict\";

var isObject        = require(\"../is-object\")
  , value           = require(\"../valid-value\")
  , objIsPrototypOf = Object.prototype.isPrototypeOf
  , defineProperty  = Object.defineProperty
  , nullDesc        = {
\tconfigurable: true,
\tenumerable: false,
\twritable: true,
\tvalue: undefined
}
  , validate;

validate = function (obj, prototype) {
\tvalue(obj);
\tif (prototype === null || isObject(prototype)) return obj;
\tthrow new TypeError(\"Prototype must be null or an object\");
};

module.exports = (function (status) {
\tvar fn, set;
\tif (!status) return null;
\tif (status.level === 2) {
\t\tif (status.set) {
\t\t\tset = status.set;
\t\t\tfn = function (obj, prototype) {
\t\t\t\tset.call(validate(obj, prototype), prototype);
\t\t\t\treturn obj;
\t\t\t};
\t\t} else {
\t\t\tfn = function (obj, prototype) {
\t\t\t\tvalidate(obj, prototype).__proto__ = prototype;
\t\t\t\treturn obj;
\t\t\t};
\t\t}
\t} else {
\t\tfn = function self (obj, prototype) {
\t\t\tvar isNullBase;
\t\t\tvalidate(obj, prototype);
\t\t\tisNullBase = objIsPrototypOf.call(self.nullPolyfill, obj);
\t\t\tif (isNullBase) delete self.nullPolyfill.__proto__;
\t\t\tif (prototype === null) prototype = self.nullPolyfill;
\t\t\tobj.__proto__ = prototype;
\t\t\tif (isNullBase) defineProperty(self.nullPolyfill, \"__proto__\", nullDesc);
\t\t\treturn obj;
\t\t};
\t}
\treturn Object.defineProperty(fn, \"level\", {
\t\tconfigurable: false,
\t\tenumerable: false,
\t\twritable: false,
\t\tvalue: status.level
\t});
}(
\t(function () {
\t\tvar tmpObj1 = Object.create(null)
\t\t  , tmpObj2 = {}
\t\t  , set
\t\t  , desc = Object.getOwnPropertyDescriptor(Object.prototype, \"__proto__\");

\t\tif (desc) {
\t\t\ttry {
\t\t\t\tset = desc.set; // Opera crashes at this point
\t\t\t\tset.call(tmpObj1, tmpObj2);
\t\t\t} catch (ignore) {}
\t\t\tif (Object.getPrototypeOf(tmpObj1) === tmpObj2) return { set: set, level: 2 };
\t\t}

\t\ttmpObj1.__proto__ = tmpObj2;
\t\tif (Object.getPrototypeOf(tmpObj1) === tmpObj2) return { level: 2 };

\t\ttmpObj1 = {};
\t\ttmpObj1.__proto__ = tmpObj2;
\t\tif (Object.getPrototypeOf(tmpObj1) === tmpObj2) return { level: 1 };

\t\treturn false;
\t})()
));

require(\"../create\");
", "node_modules/es5-ext/object/set-prototype-of/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/set-prototype-of/shim.js");
    }
}
