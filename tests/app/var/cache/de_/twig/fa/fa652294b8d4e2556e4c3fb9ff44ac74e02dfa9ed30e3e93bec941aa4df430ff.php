<?php

/* node_modules/es-abstract/test/helpers/values.js */
class __TwigTemplate_6b95e2a4f7153b54276c2ffcfd68484d8d991ca73a919a70d16cb8e293424de5 extends Twig_Template
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
        $__internal_08524fd1041a3ed58f0e61564086d809912df9d7610664c86c1b8cfaa8ae669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08524fd1041a3ed58f0e61564086d809912df9d7610664c86c1b8cfaa8ae669b->enter($__internal_08524fd1041a3ed58f0e61564086d809912df9d7610664c86c1b8cfaa8ae669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/test/helpers/values.js"));

        // line 1
        echo "'use strict';

var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';

var coercibleObject = { valueOf: function () { return 3; }, toString: function () { return 42; } };
var valueOfOnlyObject = { valueOf: function () { return 4; }, toString: function () { return {}; } };
var toStringOnlyObject = { valueOf: function () { return {}; }, toString: function () { return 7; } };
var uncoercibleObject = { valueOf: function () { return {}; }, toString: function () { return {}; } };
var objects = [{}, coercibleObject, toStringOnlyObject, valueOfOnlyObject];
var nullPrimitives = [undefined, null];
var numbers = [0, -0, Infinity, -Infinity, 42];
var strings = ['', 'foo'];
var booleans = [true, false];
var symbols = hasSymbols ? [Symbol.iterator, Symbol('foo')] : [];
var nonSymbolPrimitives = [].concat(nullPrimitives, booleans, strings, numbers);
var nonNumberPrimitives = [].concat(nullPrimitives, booleans, strings, symbols);
var nonNullPrimitives = [].concat(booleans, strings, numbers, symbols);
var nonUndefinedPrimitives = [].concat(null, nonNullPrimitives);
var nonStrings = [].concat(nullPrimitives, booleans, numbers, symbols, objects);
var primitives = [].concat(nullPrimitives, nonNullPrimitives);
var nonPropertyKeys = [].concat(nullPrimitives, booleans, numbers, objects);
var propertyKeys = [].concat(strings, symbols);
var nonBooleans = [].concat(nullPrimitives, strings, symbols, numbers, objects);
var falsies = [].concat(nullPrimitives, false, '', 0, -0, NaN);
var truthies = [].concat(true, 'foo', 42, symbols, objects);

module.exports = {
\tcoercibleObject: coercibleObject,
\tvalueOfOnlyObject: valueOfOnlyObject,
\ttoStringOnlyObject: toStringOnlyObject,
\tuncoercibleObject: uncoercibleObject,
\tobjects: objects,
\tnullPrimitives: nullPrimitives,
\tnumbers: numbers,
\tstrings: strings,
\tbooleans: booleans,
\tsymbols: symbols,
\thasSymbols: hasSymbols,
\tnonSymbolPrimitives: nonSymbolPrimitives,
\tnonNumberPrimitives: nonNumberPrimitives,
\tnonNullPrimitives: nonNullPrimitives,
\tnonUndefinedPrimitives: nonUndefinedPrimitives,
\tnonStrings: nonStrings,
\tprimitives: primitives,
\tnonPropertyKeys: nonPropertyKeys,
\tpropertyKeys: propertyKeys,
\tnonBooleans: nonBooleans,
\tfalsies: falsies,
\ttruthies: truthies
};
";
        
        $__internal_08524fd1041a3ed58f0e61564086d809912df9d7610664c86c1b8cfaa8ae669b->leave($__internal_08524fd1041a3ed58f0e61564086d809912df9d7610664c86c1b8cfaa8ae669b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/test/helpers/values.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var hasSymbols = typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol';

var coercibleObject = { valueOf: function () { return 3; }, toString: function () { return 42; } };
var valueOfOnlyObject = { valueOf: function () { return 4; }, toString: function () { return {}; } };
var toStringOnlyObject = { valueOf: function () { return {}; }, toString: function () { return 7; } };
var uncoercibleObject = { valueOf: function () { return {}; }, toString: function () { return {}; } };
var objects = [{}, coercibleObject, toStringOnlyObject, valueOfOnlyObject];
var nullPrimitives = [undefined, null];
var numbers = [0, -0, Infinity, -Infinity, 42];
var strings = ['', 'foo'];
var booleans = [true, false];
var symbols = hasSymbols ? [Symbol.iterator, Symbol('foo')] : [];
var nonSymbolPrimitives = [].concat(nullPrimitives, booleans, strings, numbers);
var nonNumberPrimitives = [].concat(nullPrimitives, booleans, strings, symbols);
var nonNullPrimitives = [].concat(booleans, strings, numbers, symbols);
var nonUndefinedPrimitives = [].concat(null, nonNullPrimitives);
var nonStrings = [].concat(nullPrimitives, booleans, numbers, symbols, objects);
var primitives = [].concat(nullPrimitives, nonNullPrimitives);
var nonPropertyKeys = [].concat(nullPrimitives, booleans, numbers, objects);
var propertyKeys = [].concat(strings, symbols);
var nonBooleans = [].concat(nullPrimitives, strings, symbols, numbers, objects);
var falsies = [].concat(nullPrimitives, false, '', 0, -0, NaN);
var truthies = [].concat(true, 'foo', 42, symbols, objects);

module.exports = {
\tcoercibleObject: coercibleObject,
\tvalueOfOnlyObject: valueOfOnlyObject,
\ttoStringOnlyObject: toStringOnlyObject,
\tuncoercibleObject: uncoercibleObject,
\tobjects: objects,
\tnullPrimitives: nullPrimitives,
\tnumbers: numbers,
\tstrings: strings,
\tbooleans: booleans,
\tsymbols: symbols,
\thasSymbols: hasSymbols,
\tnonSymbolPrimitives: nonSymbolPrimitives,
\tnonNumberPrimitives: nonNumberPrimitives,
\tnonNullPrimitives: nonNullPrimitives,
\tnonUndefinedPrimitives: nonUndefinedPrimitives,
\tnonStrings: nonStrings,
\tprimitives: primitives,
\tnonPropertyKeys: nonPropertyKeys,
\tpropertyKeys: propertyKeys,
\tnonBooleans: nonBooleans,
\tfalsies: falsies,
\ttruthies: truthies
};
", "node_modules/es-abstract/test/helpers/values.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/test/helpers/values.js");
    }
}
