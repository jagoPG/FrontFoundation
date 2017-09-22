<?php

/* node_modules/es5-ext/string/#/normalize/shim.js */
class __TwigTemplate_965d46c62b5437a8ad5a5fc7344986c6fc1012a59630a6848742f63c3af148d6 extends Twig_Template
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
        $__internal_54a80226d705f2765c6acaba87213dcc74944be044015ec2ef58bd1d629762b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a80226d705f2765c6acaba87213dcc74944be044015ec2ef58bd1d629762b2->enter($__internal_54a80226d705f2765c6acaba87213dcc74944be044015ec2ef58bd1d629762b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/normalize/shim.js"));

        // line 1
        echo "/* eslint no-bitwise: \"off\", max-statements: \"off\", max-lines: \"off\" */

// Taken from: https://github.com/walling/unorm/blob/master/lib/unorm.js

/*
\t* UnicodeNormalizer 1.0.0
\t* Copyright (c) 2008 Matsuza
\t* Dual licensed under the MIT (MIT-LICENSE.txt) and
\t* GPL (GPL-LICENSE.txt) licenses.
\t* \$Date: 2008-06-05 16:44:17 +0200 (Thu, 05 Jun 2008) \$
\t* \$Rev: 13309 \$
*/

\"use strict\";

var primitiveSet = require(\"../../../object/primitive-set\")
  , validValue   = require(\"../../../object/valid-value\")
  , data         = require(\"./_data\");

var floor = Math.floor
  , forms = primitiveSet(\"NFC\", \"NFD\", \"NFKC\", \"NFKD\")
  , DEFAULT_FEATURE = [null, 0, {}]
  , CACHE_THRESHOLD = 10
  , SBase = 0xac00
  , LBase = 0x1100
  , VBase = 0x1161
  , TBase = 0x11a7
  , LCount = 19
  , VCount = 21
  , TCount = 28
  , NCount = VCount * TCount
  , SCount = LCount * NCount
  , UChar
  , cache = {}
  , cacheCounter = []
  , fromCache
  , fromData
  , fromCpOnly
  , fromRuleBasedJamo
  , fromCpFilter
  , strategies
  , UCharIterator
  , RecursDecompIterator
  , DecompIterator
  , CompIterator
  , createIterator
  , normalize;

UChar = function (cp, feature) {
\tthis.codepoint = cp;
\tthis.feature = feature;
};

// Strategies
(function () {
\tfor (var i = 0; i <= 0xff; ++i) cacheCounter[i] = 0;
}());

fromCache = function (nextStep, cp, needFeature) {
\tvar ret = cache[cp];
\tif (!ret) {
\t\tret = nextStep(cp, needFeature);
\t\tif (Boolean(ret.feature) && ++cacheCounter[(cp >> 8) & 0xff] > CACHE_THRESHOLD) {
\t\t\tcache[cp] = ret;
\t\t}
\t}
\treturn ret;
};

fromData = function (next, cp) {
\tvar hash = cp & 0xff00, dunit = UChar.udata[hash] || {}, feature = dunit[cp];
\treturn feature ? new UChar(cp, feature) : new UChar(cp, DEFAULT_FEATURE);
};
fromCpOnly = function (next, cp, needFeature) {
\treturn needFeature ? next(cp, needFeature) : new UChar(cp, null);
};

fromRuleBasedJamo = function (next, cp, needFeature) {
\tvar char, base, i, arr, SIndex, TIndex, feature, j;
\tif (cp < LBase || (LBase + LCount <= cp && cp < SBase) || SBase + SCount < cp) {
\t\treturn next(cp, needFeature);
\t}
\tif (LBase <= cp && cp < LBase + LCount) {
\t\tchar = {};
\t\tbase = (cp - LBase) * VCount;
\t\tfor (i = 0; i < VCount; ++i) {
\t\t\tchar[VBase + i] = SBase + TCount * (i + base);
\t\t}
\t\tarr = new Array(3);
\t\tarr[2] = char;
\t\treturn new UChar(cp, arr);
\t}

\tSIndex = cp - SBase;
\tTIndex = SIndex % TCount;
\tfeature = [];
\tif (TIndex === 0) {
\t\tfeature[0] = [LBase + floor(SIndex / NCount), VBase + floor(SIndex % NCount / TCount)];
\t\tfeature[2] = {};
\t\tfor (j = 1; j < TCount; ++j) {
\t\t\tfeature[2][TBase + j] = cp + j;
\t\t}
\t} else {
\t\tfeature[0] = [SBase + SIndex - TIndex, TBase + TIndex];
\t}
\treturn new UChar(cp, feature);
};

fromCpFilter = function (next, cp, needFeature) {
\treturn cp < 60 || (cp > 13311 && cp < 42607)
\t\t? new UChar(cp, DEFAULT_FEATURE)
\t\t: next(cp, needFeature);
};

strategies = [fromCpFilter, fromCache, fromCpOnly, fromRuleBasedJamo, fromData];

UChar.fromCharCode = strategies.reduceRight(function (next, strategy) {
\treturn function (cp, needFeature) {
\t\treturn strategy(next, cp, needFeature);
\t};
}, null);

UChar.isHighSurrogate = function (cp) {
\treturn cp >= 0xd800 && cp <= 0xdbff;
};
UChar.isLowSurrogate = function (cp) {
\treturn cp >= 0xdc00 && cp <= 0xdfff;
};

UChar.prototype.prepFeature = function () {
\tif (!this.feature) {
\t\tthis.feature = UChar.fromCharCode(this.codepoint, true).feature;
\t}
};

UChar.prototype.toString = function () {
\tvar num;
\tif (this.codepoint < 0x10000) return String.fromCharCode(this.codepoint);
\tnum = this.codepoint - 0x10000;
\treturn String.fromCharCode(floor(num / 0x400) + 0xd800, num % 0x400 + 0xdc00);
};

UChar.prototype.getDecomp = function () {
\tthis.prepFeature();
\treturn this.feature[0] || null;
};

UChar.prototype.isCompatibility = function () {
\tthis.prepFeature();
\treturn Boolean(this.feature[1]) && this.feature[1] & (1 << 8);
};
UChar.prototype.isExclude = function () {
\tthis.prepFeature();
\treturn Boolean(this.feature[1]) && this.feature[1] & (1 << 9);
};
UChar.prototype.getCanonicalClass = function () {
\tthis.prepFeature();
\treturn this.feature[1] ? this.feature[1] & 0xff : 0;
};
UChar.prototype.getComposite = function (following) {
\tvar cp;
\tthis.prepFeature();
\tif (!this.feature[2]) return null;
\tcp = this.feature[2][following.codepoint];
\treturn cp ? UChar.fromCharCode(cp) : null;
};

UCharIterator = function (str) {
\tthis.str = str;
\tthis.cursor = 0;
};
UCharIterator.prototype.next = function () {
\tif (Boolean(this.str) && this.cursor < this.str.length) {
\t\tvar cp = this.str.charCodeAt(this.cursor++), d;
\t\tif (
\t\t\tUChar.isHighSurrogate(cp) &&
\t\t\tthis.cursor < this.str.length &&
\t\t\tUChar.isLowSurrogate(d = this.str.charCodeAt(this.cursor))
\t\t) {
\t\t\tcp = (cp - 0xd800) * 0x400 + (d - 0xdc00) + 0x10000;
\t\t\t++this.cursor;
\t\t}
\t\treturn UChar.fromCharCode(cp);
\t}
\tthis.str = null;
\treturn null;
};

RecursDecompIterator = function (it, cano) {
\tthis.it = it;
\tthis.canonical = cano;
\tthis.resBuf = [];
};

RecursDecompIterator.prototype.next = function () {
\tvar recursiveDecomp, uchar;
\trecursiveDecomp = function (cano, ucharLoc) {
\t\tvar decomp = ucharLoc.getDecomp(), ret, i, a, j;
\t\tif (Boolean(decomp) && !(cano && ucharLoc.isCompatibility())) {
\t\t\tret = [];
\t\t\tfor (i = 0; i < decomp.length; ++i) {
\t\t\t\ta = recursiveDecomp(cano, UChar.fromCharCode(decomp[i]));
\t\t\t\t// Ret.concat(a); //<-why does not this work?
\t\t\t\t// following block is a workaround.
\t\t\t\tfor (j = 0; j < a.length; ++j) ret.push(a[j]);
\t\t\t}
\t\t\treturn ret;
\t\t}
\t\treturn [ucharLoc];
\t};
\tif (this.resBuf.length === 0) {
\t\tuchar = this.it.next();
\t\tif (!uchar) return null;
\t\tthis.resBuf = recursiveDecomp(this.canonical, uchar);
\t}
\treturn this.resBuf.shift();
};

DecompIterator = function (it) {
\tthis.it = it;
\tthis.resBuf = [];
};

DecompIterator.prototype.next = function () {
\tvar cc, uchar, inspt, uchar2, cc2;
\tif (this.resBuf.length === 0) {
\t\tdo {
\t\t\tuchar = this.it.next();
\t\t\tif (!uchar) break;
\t\t\tcc = uchar.getCanonicalClass();
\t\t\tinspt = this.resBuf.length;
\t\t\tif (cc !== 0) {
\t\t\t\tfor (inspt; inspt > 0; --inspt) {
\t\t\t\t\tuchar2 = this.resBuf[inspt - 1];
\t\t\t\t\tcc2 = uchar2.getCanonicalClass();
\t\t\t\t\t// eslint-disable-next-line max-depth
\t\t\t\t\tif (cc2 <= cc) break;
\t\t\t\t}
\t\t\t}
\t\t\tthis.resBuf.splice(inspt, 0, uchar);
\t\t} while (cc !== 0);
\t}
\treturn this.resBuf.shift();
};

CompIterator = function (it) {
\tthis.it = it;
\tthis.procBuf = [];
\tthis.resBuf = [];
\tthis.lastClass = null;
};

CompIterator.prototype.next = function () {
\tvar uchar, starter, composite, cc;
\twhile (this.resBuf.length === 0) {
\t\tuchar = this.it.next();
\t\tif (!uchar) {
\t\t\tthis.resBuf = this.procBuf;
\t\t\tthis.procBuf = [];
\t\t\tbreak;
\t\t}
\t\tif (this.procBuf.length === 0) {
\t\t\tthis.lastClass = uchar.getCanonicalClass();
\t\t\tthis.procBuf.push(uchar);
\t\t} else {
\t\t\tstarter = this.procBuf[0];
\t\t\tcomposite = starter.getComposite(uchar);
\t\t\tcc = uchar.getCanonicalClass();
\t\t\tif (Boolean(composite) && (this.lastClass < cc || this.lastClass === 0)) {
\t\t\t\tthis.procBuf[0] = composite;
\t\t\t} else {
\t\t\t\tif (cc === 0) {
\t\t\t\t\tthis.resBuf = this.procBuf;
\t\t\t\t\tthis.procBuf = [];
\t\t\t\t}
\t\t\t\tthis.lastClass = cc;
\t\t\t\tthis.procBuf.push(uchar);
\t\t\t}
\t\t}
\t}
\treturn this.resBuf.shift();
};

createIterator = function (mode, str) {
\tswitch (mode) {
\t\tcase \"NFD\":
\t\t\treturn new DecompIterator(new RecursDecompIterator(new UCharIterator(str), true));
\t\tcase \"NFKD\":
\t\t\treturn new DecompIterator(new RecursDecompIterator(new UCharIterator(str), false));
\t\tcase \"NFC\":
\t\t\treturn new CompIterator(
\t\t\t\tnew DecompIterator(new RecursDecompIterator(new UCharIterator(str), true))
\t\t\t);
\t\tcase \"NFKC\":
\t\t\treturn new CompIterator(
\t\t\t\tnew DecompIterator(new RecursDecompIterator(new UCharIterator(str), false))
\t\t\t);
\t\tdefault:
\t\t\tthrow new Error(mode + \" is invalid\");
\t}
};
normalize = function (mode, str) {
\tvar it = createIterator(mode, str), ret = \"\", uchar;
\twhile ((uchar = it.next())) ret += uchar.toString();
\treturn ret;
};

/* Unicode data */
UChar.udata = data;

module.exports = function (/* Form*/) {
\tvar str = String(validValue(this)), form = arguments[0];
\tif (form === undefined) form = \"NFC\";
\telse form = String(form);
\tif (!forms[form]) throw new RangeError(\"Invalid normalization form: \" + form);
\treturn normalize(form, str);
};
";
        
        $__internal_54a80226d705f2765c6acaba87213dcc74944be044015ec2ef58bd1d629762b2->leave($__internal_54a80226d705f2765c6acaba87213dcc74944be044015ec2ef58bd1d629762b2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/normalize/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-bitwise: \"off\", max-statements: \"off\", max-lines: \"off\" */

// Taken from: https://github.com/walling/unorm/blob/master/lib/unorm.js

/*
\t* UnicodeNormalizer 1.0.0
\t* Copyright (c) 2008 Matsuza
\t* Dual licensed under the MIT (MIT-LICENSE.txt) and
\t* GPL (GPL-LICENSE.txt) licenses.
\t* \$Date: 2008-06-05 16:44:17 +0200 (Thu, 05 Jun 2008) \$
\t* \$Rev: 13309 \$
*/

\"use strict\";

var primitiveSet = require(\"../../../object/primitive-set\")
  , validValue   = require(\"../../../object/valid-value\")
  , data         = require(\"./_data\");

var floor = Math.floor
  , forms = primitiveSet(\"NFC\", \"NFD\", \"NFKC\", \"NFKD\")
  , DEFAULT_FEATURE = [null, 0, {}]
  , CACHE_THRESHOLD = 10
  , SBase = 0xac00
  , LBase = 0x1100
  , VBase = 0x1161
  , TBase = 0x11a7
  , LCount = 19
  , VCount = 21
  , TCount = 28
  , NCount = VCount * TCount
  , SCount = LCount * NCount
  , UChar
  , cache = {}
  , cacheCounter = []
  , fromCache
  , fromData
  , fromCpOnly
  , fromRuleBasedJamo
  , fromCpFilter
  , strategies
  , UCharIterator
  , RecursDecompIterator
  , DecompIterator
  , CompIterator
  , createIterator
  , normalize;

UChar = function (cp, feature) {
\tthis.codepoint = cp;
\tthis.feature = feature;
};

// Strategies
(function () {
\tfor (var i = 0; i <= 0xff; ++i) cacheCounter[i] = 0;
}());

fromCache = function (nextStep, cp, needFeature) {
\tvar ret = cache[cp];
\tif (!ret) {
\t\tret = nextStep(cp, needFeature);
\t\tif (Boolean(ret.feature) && ++cacheCounter[(cp >> 8) & 0xff] > CACHE_THRESHOLD) {
\t\t\tcache[cp] = ret;
\t\t}
\t}
\treturn ret;
};

fromData = function (next, cp) {
\tvar hash = cp & 0xff00, dunit = UChar.udata[hash] || {}, feature = dunit[cp];
\treturn feature ? new UChar(cp, feature) : new UChar(cp, DEFAULT_FEATURE);
};
fromCpOnly = function (next, cp, needFeature) {
\treturn needFeature ? next(cp, needFeature) : new UChar(cp, null);
};

fromRuleBasedJamo = function (next, cp, needFeature) {
\tvar char, base, i, arr, SIndex, TIndex, feature, j;
\tif (cp < LBase || (LBase + LCount <= cp && cp < SBase) || SBase + SCount < cp) {
\t\treturn next(cp, needFeature);
\t}
\tif (LBase <= cp && cp < LBase + LCount) {
\t\tchar = {};
\t\tbase = (cp - LBase) * VCount;
\t\tfor (i = 0; i < VCount; ++i) {
\t\t\tchar[VBase + i] = SBase + TCount * (i + base);
\t\t}
\t\tarr = new Array(3);
\t\tarr[2] = char;
\t\treturn new UChar(cp, arr);
\t}

\tSIndex = cp - SBase;
\tTIndex = SIndex % TCount;
\tfeature = [];
\tif (TIndex === 0) {
\t\tfeature[0] = [LBase + floor(SIndex / NCount), VBase + floor(SIndex % NCount / TCount)];
\t\tfeature[2] = {};
\t\tfor (j = 1; j < TCount; ++j) {
\t\t\tfeature[2][TBase + j] = cp + j;
\t\t}
\t} else {
\t\tfeature[0] = [SBase + SIndex - TIndex, TBase + TIndex];
\t}
\treturn new UChar(cp, feature);
};

fromCpFilter = function (next, cp, needFeature) {
\treturn cp < 60 || (cp > 13311 && cp < 42607)
\t\t? new UChar(cp, DEFAULT_FEATURE)
\t\t: next(cp, needFeature);
};

strategies = [fromCpFilter, fromCache, fromCpOnly, fromRuleBasedJamo, fromData];

UChar.fromCharCode = strategies.reduceRight(function (next, strategy) {
\treturn function (cp, needFeature) {
\t\treturn strategy(next, cp, needFeature);
\t};
}, null);

UChar.isHighSurrogate = function (cp) {
\treturn cp >= 0xd800 && cp <= 0xdbff;
};
UChar.isLowSurrogate = function (cp) {
\treturn cp >= 0xdc00 && cp <= 0xdfff;
};

UChar.prototype.prepFeature = function () {
\tif (!this.feature) {
\t\tthis.feature = UChar.fromCharCode(this.codepoint, true).feature;
\t}
};

UChar.prototype.toString = function () {
\tvar num;
\tif (this.codepoint < 0x10000) return String.fromCharCode(this.codepoint);
\tnum = this.codepoint - 0x10000;
\treturn String.fromCharCode(floor(num / 0x400) + 0xd800, num % 0x400 + 0xdc00);
};

UChar.prototype.getDecomp = function () {
\tthis.prepFeature();
\treturn this.feature[0] || null;
};

UChar.prototype.isCompatibility = function () {
\tthis.prepFeature();
\treturn Boolean(this.feature[1]) && this.feature[1] & (1 << 8);
};
UChar.prototype.isExclude = function () {
\tthis.prepFeature();
\treturn Boolean(this.feature[1]) && this.feature[1] & (1 << 9);
};
UChar.prototype.getCanonicalClass = function () {
\tthis.prepFeature();
\treturn this.feature[1] ? this.feature[1] & 0xff : 0;
};
UChar.prototype.getComposite = function (following) {
\tvar cp;
\tthis.prepFeature();
\tif (!this.feature[2]) return null;
\tcp = this.feature[2][following.codepoint];
\treturn cp ? UChar.fromCharCode(cp) : null;
};

UCharIterator = function (str) {
\tthis.str = str;
\tthis.cursor = 0;
};
UCharIterator.prototype.next = function () {
\tif (Boolean(this.str) && this.cursor < this.str.length) {
\t\tvar cp = this.str.charCodeAt(this.cursor++), d;
\t\tif (
\t\t\tUChar.isHighSurrogate(cp) &&
\t\t\tthis.cursor < this.str.length &&
\t\t\tUChar.isLowSurrogate(d = this.str.charCodeAt(this.cursor))
\t\t) {
\t\t\tcp = (cp - 0xd800) * 0x400 + (d - 0xdc00) + 0x10000;
\t\t\t++this.cursor;
\t\t}
\t\treturn UChar.fromCharCode(cp);
\t}
\tthis.str = null;
\treturn null;
};

RecursDecompIterator = function (it, cano) {
\tthis.it = it;
\tthis.canonical = cano;
\tthis.resBuf = [];
};

RecursDecompIterator.prototype.next = function () {
\tvar recursiveDecomp, uchar;
\trecursiveDecomp = function (cano, ucharLoc) {
\t\tvar decomp = ucharLoc.getDecomp(), ret, i, a, j;
\t\tif (Boolean(decomp) && !(cano && ucharLoc.isCompatibility())) {
\t\t\tret = [];
\t\t\tfor (i = 0; i < decomp.length; ++i) {
\t\t\t\ta = recursiveDecomp(cano, UChar.fromCharCode(decomp[i]));
\t\t\t\t// Ret.concat(a); //<-why does not this work?
\t\t\t\t// following block is a workaround.
\t\t\t\tfor (j = 0; j < a.length; ++j) ret.push(a[j]);
\t\t\t}
\t\t\treturn ret;
\t\t}
\t\treturn [ucharLoc];
\t};
\tif (this.resBuf.length === 0) {
\t\tuchar = this.it.next();
\t\tif (!uchar) return null;
\t\tthis.resBuf = recursiveDecomp(this.canonical, uchar);
\t}
\treturn this.resBuf.shift();
};

DecompIterator = function (it) {
\tthis.it = it;
\tthis.resBuf = [];
};

DecompIterator.prototype.next = function () {
\tvar cc, uchar, inspt, uchar2, cc2;
\tif (this.resBuf.length === 0) {
\t\tdo {
\t\t\tuchar = this.it.next();
\t\t\tif (!uchar) break;
\t\t\tcc = uchar.getCanonicalClass();
\t\t\tinspt = this.resBuf.length;
\t\t\tif (cc !== 0) {
\t\t\t\tfor (inspt; inspt > 0; --inspt) {
\t\t\t\t\tuchar2 = this.resBuf[inspt - 1];
\t\t\t\t\tcc2 = uchar2.getCanonicalClass();
\t\t\t\t\t// eslint-disable-next-line max-depth
\t\t\t\t\tif (cc2 <= cc) break;
\t\t\t\t}
\t\t\t}
\t\t\tthis.resBuf.splice(inspt, 0, uchar);
\t\t} while (cc !== 0);
\t}
\treturn this.resBuf.shift();
};

CompIterator = function (it) {
\tthis.it = it;
\tthis.procBuf = [];
\tthis.resBuf = [];
\tthis.lastClass = null;
};

CompIterator.prototype.next = function () {
\tvar uchar, starter, composite, cc;
\twhile (this.resBuf.length === 0) {
\t\tuchar = this.it.next();
\t\tif (!uchar) {
\t\t\tthis.resBuf = this.procBuf;
\t\t\tthis.procBuf = [];
\t\t\tbreak;
\t\t}
\t\tif (this.procBuf.length === 0) {
\t\t\tthis.lastClass = uchar.getCanonicalClass();
\t\t\tthis.procBuf.push(uchar);
\t\t} else {
\t\t\tstarter = this.procBuf[0];
\t\t\tcomposite = starter.getComposite(uchar);
\t\t\tcc = uchar.getCanonicalClass();
\t\t\tif (Boolean(composite) && (this.lastClass < cc || this.lastClass === 0)) {
\t\t\t\tthis.procBuf[0] = composite;
\t\t\t} else {
\t\t\t\tif (cc === 0) {
\t\t\t\t\tthis.resBuf = this.procBuf;
\t\t\t\t\tthis.procBuf = [];
\t\t\t\t}
\t\t\t\tthis.lastClass = cc;
\t\t\t\tthis.procBuf.push(uchar);
\t\t\t}
\t\t}
\t}
\treturn this.resBuf.shift();
};

createIterator = function (mode, str) {
\tswitch (mode) {
\t\tcase \"NFD\":
\t\t\treturn new DecompIterator(new RecursDecompIterator(new UCharIterator(str), true));
\t\tcase \"NFKD\":
\t\t\treturn new DecompIterator(new RecursDecompIterator(new UCharIterator(str), false));
\t\tcase \"NFC\":
\t\t\treturn new CompIterator(
\t\t\t\tnew DecompIterator(new RecursDecompIterator(new UCharIterator(str), true))
\t\t\t);
\t\tcase \"NFKC\":
\t\t\treturn new CompIterator(
\t\t\t\tnew DecompIterator(new RecursDecompIterator(new UCharIterator(str), false))
\t\t\t);
\t\tdefault:
\t\t\tthrow new Error(mode + \" is invalid\");
\t}
};
normalize = function (mode, str) {
\tvar it = createIterator(mode, str), ret = \"\", uchar;
\twhile ((uchar = it.next())) ret += uchar.toString();
\treturn ret;
};

/* Unicode data */
UChar.udata = data;

module.exports = function (/* Form*/) {
\tvar str = String(validValue(this)), form = arguments[0];
\tif (form === undefined) form = \"NFC\";
\telse form = String(form);
\tif (!forms[form]) throw new RangeError(\"Invalid normalization form: \" + form);
\treturn normalize(form, str);
};
", "node_modules/es5-ext/string/#/normalize/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/normalize/shim.js");
    }
}
