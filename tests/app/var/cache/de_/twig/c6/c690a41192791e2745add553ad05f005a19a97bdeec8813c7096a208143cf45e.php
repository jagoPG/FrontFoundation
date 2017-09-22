<?php

/* node_modules/es6-symbol/polyfill.js */
class __TwigTemplate_013704ddff8305cf6efb08d48213f2ca72cded25afa0dd8a7b149c0ca3baba29 extends Twig_Template
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
        $__internal_0e7e60dde468f7dc403c68a60b5c823b174f3a3f680e0aebed66560132ea1a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7e60dde468f7dc403c68a60b5c823b174f3a3f680e0aebed66560132ea1a9b->enter($__internal_0e7e60dde468f7dc403c68a60b5c823b174f3a3f680e0aebed66560132ea1a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/polyfill.js"));

        // line 1
        echo "// ES2015 Symbol polyfill for environments that do not (or partially) support it

'use strict';

var d              = require('d')
  , validateSymbol = require('./validate-symbol')

  , create = Object.create, defineProperties = Object.defineProperties
  , defineProperty = Object.defineProperty, objPrototype = Object.prototype
  , NativeSymbol, SymbolPolyfill, HiddenSymbol, globalSymbols = create(null)
  , isNativeSafe;

if (typeof Symbol === 'function') {
\tNativeSymbol = Symbol;
\ttry {
\t\tString(NativeSymbol());
\t\tisNativeSafe = true;
\t} catch (ignore) {}
}

var generateName = (function () {
\tvar created = create(null);
\treturn function (desc) {
\t\tvar postfix = 0, name, ie11BugWorkaround;
\t\twhile (created[desc + (postfix || '')]) ++postfix;
\t\tdesc += (postfix || '');
\t\tcreated[desc] = true;
\t\tname = '@@' + desc;
\t\tdefineProperty(objPrototype, name, d.gs(null, function (value) {
\t\t\t// For IE11 issue see:
\t\t\t// https://connect.microsoft.com/IE/feedbackdetail/view/1928508/
\t\t\t//    ie11-broken-getters-on-dom-objects
\t\t\t// https://github.com/medikoo/es6-symbol/issues/12
\t\t\tif (ie11BugWorkaround) return;
\t\t\tie11BugWorkaround = true;
\t\t\tdefineProperty(this, name, d(value));
\t\t\tie11BugWorkaround = false;
\t\t}));
\t\treturn name;
\t};
}());

// Internal constructor (not one exposed) for creating Symbol instances.
// This one is used to ensure that `someSymbol instanceof Symbol` always return false
HiddenSymbol = function Symbol(description) {
\tif (this instanceof HiddenSymbol) throw new TypeError('Symbol is not a constructor');
\treturn SymbolPolyfill(description);
};

// Exposed `Symbol` constructor
// (returns instances of HiddenSymbol)
module.exports = SymbolPolyfill = function Symbol(description) {
\tvar symbol;
\tif (this instanceof Symbol) throw new TypeError('Symbol is not a constructor');
\tif (isNativeSafe) return NativeSymbol(description);
\tsymbol = create(HiddenSymbol.prototype);
\tdescription = (description === undefined ? '' : String(description));
\treturn defineProperties(symbol, {
\t\t__description__: d('', description),
\t\t__name__: d('', generateName(description))
\t});
};
defineProperties(SymbolPolyfill, {
\tfor: d(function (key) {
\t\tif (globalSymbols[key]) return globalSymbols[key];
\t\treturn (globalSymbols[key] = SymbolPolyfill(String(key)));
\t}),
\tkeyFor: d(function (s) {
\t\tvar key;
\t\tvalidateSymbol(s);
\t\tfor (key in globalSymbols) if (globalSymbols[key] === s) return key;
\t}),

\t// To ensure proper interoperability with other native functions (e.g. Array.from)
\t// fallback to eventual native implementation of given symbol
\thasInstance: d('', (NativeSymbol && NativeSymbol.hasInstance) || SymbolPolyfill('hasInstance')),
\tisConcatSpreadable: d('', (NativeSymbol && NativeSymbol.isConcatSpreadable) ||
\t\tSymbolPolyfill('isConcatSpreadable')),
\titerator: d('', (NativeSymbol && NativeSymbol.iterator) || SymbolPolyfill('iterator')),
\tmatch: d('', (NativeSymbol && NativeSymbol.match) || SymbolPolyfill('match')),
\treplace: d('', (NativeSymbol && NativeSymbol.replace) || SymbolPolyfill('replace')),
\tsearch: d('', (NativeSymbol && NativeSymbol.search) || SymbolPolyfill('search')),
\tspecies: d('', (NativeSymbol && NativeSymbol.species) || SymbolPolyfill('species')),
\tsplit: d('', (NativeSymbol && NativeSymbol.split) || SymbolPolyfill('split')),
\ttoPrimitive: d('', (NativeSymbol && NativeSymbol.toPrimitive) || SymbolPolyfill('toPrimitive')),
\ttoStringTag: d('', (NativeSymbol && NativeSymbol.toStringTag) || SymbolPolyfill('toStringTag')),
\tunscopables: d('', (NativeSymbol && NativeSymbol.unscopables) || SymbolPolyfill('unscopables'))
});

// Internal tweaks for real symbol producer
defineProperties(HiddenSymbol.prototype, {
\tconstructor: d(SymbolPolyfill),
\ttoString: d('', function () { return this.__name__; })
});

// Proper implementation of methods exposed on Symbol.prototype
// They won't be accessible on produced symbol instances as they derive from HiddenSymbol.prototype
defineProperties(SymbolPolyfill.prototype, {
\ttoString: d(function () { return 'Symbol (' + validateSymbol(this).__description__ + ')'; }),
\tvalueOf: d(function () { return validateSymbol(this); })
});
defineProperty(SymbolPolyfill.prototype, SymbolPolyfill.toPrimitive, d('', function () {
\tvar symbol = validateSymbol(this);
\tif (typeof symbol === 'symbol') return symbol;
\treturn symbol.toString();
}));
defineProperty(SymbolPolyfill.prototype, SymbolPolyfill.toStringTag, d('c', 'Symbol'));

// Proper implementaton of toPrimitive and toStringTag for returned symbol instances
defineProperty(HiddenSymbol.prototype, SymbolPolyfill.toStringTag,
\td('c', SymbolPolyfill.prototype[SymbolPolyfill.toStringTag]));

// Note: It's important to define `toPrimitive` as last one, as some implementations
// implement `toPrimitive` natively without implementing `toStringTag` (or other specified symbols)
// And that may invoke error in definition flow:
// See: https://github.com/medikoo/es6-symbol/issues/13#issuecomment-164146149
defineProperty(HiddenSymbol.prototype, SymbolPolyfill.toPrimitive,
\td('c', SymbolPolyfill.prototype[SymbolPolyfill.toPrimitive]));
";
        
        $__internal_0e7e60dde468f7dc403c68a60b5c823b174f3a3f680e0aebed66560132ea1a9b->leave($__internal_0e7e60dde468f7dc403c68a60b5c823b174f3a3f680e0aebed66560132ea1a9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/polyfill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// ES2015 Symbol polyfill for environments that do not (or partially) support it

'use strict';

var d              = require('d')
  , validateSymbol = require('./validate-symbol')

  , create = Object.create, defineProperties = Object.defineProperties
  , defineProperty = Object.defineProperty, objPrototype = Object.prototype
  , NativeSymbol, SymbolPolyfill, HiddenSymbol, globalSymbols = create(null)
  , isNativeSafe;

if (typeof Symbol === 'function') {
\tNativeSymbol = Symbol;
\ttry {
\t\tString(NativeSymbol());
\t\tisNativeSafe = true;
\t} catch (ignore) {}
}

var generateName = (function () {
\tvar created = create(null);
\treturn function (desc) {
\t\tvar postfix = 0, name, ie11BugWorkaround;
\t\twhile (created[desc + (postfix || '')]) ++postfix;
\t\tdesc += (postfix || '');
\t\tcreated[desc] = true;
\t\tname = '@@' + desc;
\t\tdefineProperty(objPrototype, name, d.gs(null, function (value) {
\t\t\t// For IE11 issue see:
\t\t\t// https://connect.microsoft.com/IE/feedbackdetail/view/1928508/
\t\t\t//    ie11-broken-getters-on-dom-objects
\t\t\t// https://github.com/medikoo/es6-symbol/issues/12
\t\t\tif (ie11BugWorkaround) return;
\t\t\tie11BugWorkaround = true;
\t\t\tdefineProperty(this, name, d(value));
\t\t\tie11BugWorkaround = false;
\t\t}));
\t\treturn name;
\t};
}());

// Internal constructor (not one exposed) for creating Symbol instances.
// This one is used to ensure that `someSymbol instanceof Symbol` always return false
HiddenSymbol = function Symbol(description) {
\tif (this instanceof HiddenSymbol) throw new TypeError('Symbol is not a constructor');
\treturn SymbolPolyfill(description);
};

// Exposed `Symbol` constructor
// (returns instances of HiddenSymbol)
module.exports = SymbolPolyfill = function Symbol(description) {
\tvar symbol;
\tif (this instanceof Symbol) throw new TypeError('Symbol is not a constructor');
\tif (isNativeSafe) return NativeSymbol(description);
\tsymbol = create(HiddenSymbol.prototype);
\tdescription = (description === undefined ? '' : String(description));
\treturn defineProperties(symbol, {
\t\t__description__: d('', description),
\t\t__name__: d('', generateName(description))
\t});
};
defineProperties(SymbolPolyfill, {
\tfor: d(function (key) {
\t\tif (globalSymbols[key]) return globalSymbols[key];
\t\treturn (globalSymbols[key] = SymbolPolyfill(String(key)));
\t}),
\tkeyFor: d(function (s) {
\t\tvar key;
\t\tvalidateSymbol(s);
\t\tfor (key in globalSymbols) if (globalSymbols[key] === s) return key;
\t}),

\t// To ensure proper interoperability with other native functions (e.g. Array.from)
\t// fallback to eventual native implementation of given symbol
\thasInstance: d('', (NativeSymbol && NativeSymbol.hasInstance) || SymbolPolyfill('hasInstance')),
\tisConcatSpreadable: d('', (NativeSymbol && NativeSymbol.isConcatSpreadable) ||
\t\tSymbolPolyfill('isConcatSpreadable')),
\titerator: d('', (NativeSymbol && NativeSymbol.iterator) || SymbolPolyfill('iterator')),
\tmatch: d('', (NativeSymbol && NativeSymbol.match) || SymbolPolyfill('match')),
\treplace: d('', (NativeSymbol && NativeSymbol.replace) || SymbolPolyfill('replace')),
\tsearch: d('', (NativeSymbol && NativeSymbol.search) || SymbolPolyfill('search')),
\tspecies: d('', (NativeSymbol && NativeSymbol.species) || SymbolPolyfill('species')),
\tsplit: d('', (NativeSymbol && NativeSymbol.split) || SymbolPolyfill('split')),
\ttoPrimitive: d('', (NativeSymbol && NativeSymbol.toPrimitive) || SymbolPolyfill('toPrimitive')),
\ttoStringTag: d('', (NativeSymbol && NativeSymbol.toStringTag) || SymbolPolyfill('toStringTag')),
\tunscopables: d('', (NativeSymbol && NativeSymbol.unscopables) || SymbolPolyfill('unscopables'))
});

// Internal tweaks for real symbol producer
defineProperties(HiddenSymbol.prototype, {
\tconstructor: d(SymbolPolyfill),
\ttoString: d('', function () { return this.__name__; })
});

// Proper implementation of methods exposed on Symbol.prototype
// They won't be accessible on produced symbol instances as they derive from HiddenSymbol.prototype
defineProperties(SymbolPolyfill.prototype, {
\ttoString: d(function () { return 'Symbol (' + validateSymbol(this).__description__ + ')'; }),
\tvalueOf: d(function () { return validateSymbol(this); })
});
defineProperty(SymbolPolyfill.prototype, SymbolPolyfill.toPrimitive, d('', function () {
\tvar symbol = validateSymbol(this);
\tif (typeof symbol === 'symbol') return symbol;
\treturn symbol.toString();
}));
defineProperty(SymbolPolyfill.prototype, SymbolPolyfill.toStringTag, d('c', 'Symbol'));

// Proper implementaton of toPrimitive and toStringTag for returned symbol instances
defineProperty(HiddenSymbol.prototype, SymbolPolyfill.toStringTag,
\td('c', SymbolPolyfill.prototype[SymbolPolyfill.toStringTag]));

// Note: It's important to define `toPrimitive` as last one, as some implementations
// implement `toPrimitive` natively without implementing `toStringTag` (or other specified symbols)
// And that may invoke error in definition flow:
// See: https://github.com/medikoo/es6-symbol/issues/13#issuecomment-164146149
defineProperty(HiddenSymbol.prototype, SymbolPolyfill.toPrimitive,
\td('c', SymbolPolyfill.prototype[SymbolPolyfill.toPrimitive]));
", "node_modules/es6-symbol/polyfill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/polyfill.js");
    }
}
