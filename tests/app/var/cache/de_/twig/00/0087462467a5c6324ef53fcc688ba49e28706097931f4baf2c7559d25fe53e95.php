<?php

/* node_modules/regexpu-core/rewrite-pattern.js */
class __TwigTemplate_e1439980dce10d15d4f24500eb3729bfd27fd6c1f8a52a52303a2950362d716e extends Twig_Template
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
        $__internal_4123faababf1a997ac56a95214789df1dadf0b31aeb874d5cc395a5d9b18ad5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4123faababf1a997ac56a95214789df1dadf0b31aeb874d5cc395a5d9b18ad5d->enter($__internal_4123faababf1a997ac56a95214789df1dadf0b31aeb874d5cc395a5d9b18ad5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regexpu-core/rewrite-pattern.js"));

        // line 1
        echo "var generate = require('regjsgen').generate;
var parse = require('regjsparser').parse;
var regenerate = require('regenerate');
var iuMappings = require('./data/iu-mappings.json');
var ESCAPE_SETS = require('./data/character-class-escape-sets.js');

function getCharacterClassEscapeSet(character) {
\tif (unicode) {
\t\tif (ignoreCase) {
\t\t\treturn ESCAPE_SETS.UNICODE_IGNORE_CASE[character];
\t\t}
\t\treturn ESCAPE_SETS.UNICODE[character];
\t}
\treturn ESCAPE_SETS.REGULAR[character];
}

var object = {};
var hasOwnProperty = object.hasOwnProperty;
function has(object, property) {
\treturn hasOwnProperty.call(object, property);
}

// Prepare a Regenerate set containing all code points, used for negative
// character classes (if any).
var UNICODE_SET = regenerate().addRange(0x0, 0x10FFFF);
// Without the `u` flag, the range stops at 0xFFFF.
// https://mths.be/es6#sec-pattern-semantics
var BMP_SET = regenerate().addRange(0x0, 0xFFFF);

// Prepare a Regenerate set containing all code points that are supposed to be
// matched by `/./u`. https://mths.be/es6#sec-atom
var DOT_SET_UNICODE = UNICODE_SET.clone() // all Unicode code points
\t.remove(
\t\t// minus `LineTerminator`s (https://mths.be/es6#sec-line-terminators):
\t\t0x000A, // Line Feed <LF>
\t\t0x000D, // Carriage Return <CR>
\t\t0x2028, // Line Separator <LS>
\t\t0x2029  // Paragraph Separator <PS>
\t);
// Prepare a Regenerate set containing all code points that are supposed to be
// matched by `/./` (only BMP code points).
var DOT_SET = DOT_SET_UNICODE.clone()
\t.intersection(BMP_SET);

// Add a range of code points + any case-folded code points in that range to a
// set.
regenerate.prototype.iuAddRange = function(min, max) {
\tvar \$this = this;
\tdo {
\t\tvar folded = caseFold(min);
\t\tif (folded) {
\t\t\t\$this.add(folded);
\t\t}
\t} while (++min <= max);
\treturn \$this;
};

function assign(target, source) {
\tfor (var key in source) {
\t\t// Note: `hasOwnProperty` is not needed here.
\t\ttarget[key] = source[key];
\t}
}

function update(item, pattern) {
\t// TODO: Test if memoizing `pattern` here is worth the effort.
\tif (!pattern) {
\t\treturn;
\t}
\tvar tree = parse(pattern, '');
\tswitch (tree.type) {
\t\tcase 'characterClass':
\t\tcase 'group':
\t\tcase 'value':
\t\t\t// No wrapping needed.
\t\t\tbreak;
\t\tdefault:
\t\t\t// Wrap the pattern in a non-capturing group.
\t\t\ttree = wrap(tree, pattern);
\t}
\tassign(item, tree);
}

function wrap(tree, pattern) {
\t// Wrap the pattern in a non-capturing group.
\treturn {
\t\t'type': 'group',
\t\t'behavior': 'ignore',
\t\t'body': [tree],
\t\t'raw': '(?:' + pattern + ')'
\t};
}

function caseFold(codePoint) {
\treturn has(iuMappings, codePoint) ? iuMappings[codePoint] : false;
}

var ignoreCase = false;
var unicode = false;
function processCharacterClass(characterClassItem) {
\tvar set = regenerate();
\tvar body = characterClassItem.body.forEach(function(item) {
\t\tswitch (item.type) {
\t\t\tcase 'value':
\t\t\t\tset.add(item.codePoint);
\t\t\t\tif (ignoreCase && unicode) {
\t\t\t\t\tvar folded = caseFold(item.codePoint);
\t\t\t\t\tif (folded) {
\t\t\t\t\t\tset.add(folded);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'characterClassRange':
\t\t\t\tvar min = item.min.codePoint;
\t\t\t\tvar max = item.max.codePoint;
\t\t\t\tset.addRange(min, max);
\t\t\t\tif (ignoreCase && unicode) {
\t\t\t\t\tset.iuAddRange(min, max);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'characterClassEscape':
\t\t\t\tset.add(getCharacterClassEscapeSet(item.value));
\t\t\t\tbreak;
\t\t\t// The `default` clause is only here as a safeguard; it should never be
\t\t\t// reached. Code coverage tools should ignore it.
\t\t\t/* istanbul ignore next */
\t\t\tdefault:
\t\t\t\tthrow Error('Unknown term type: ' + item.type);
\t\t}
\t});
\tif (characterClassItem.negative) {
\t\tset = (unicode ? UNICODE_SET : BMP_SET).clone().remove(set);
\t}
\tupdate(characterClassItem, set.toString());
\treturn characterClassItem;
}

function processTerm(item) {
\tswitch (item.type) {
\t\tcase 'dot':
\t\t\tupdate(
\t\t\t\titem,
\t\t\t\t(unicode ? DOT_SET_UNICODE : DOT_SET).toString()
\t\t\t);
\t\t\tbreak;
\t\tcase 'characterClass':
\t\t\titem = processCharacterClass(item);
\t\t\tbreak;
\t\tcase 'characterClassEscape':
\t\t\tupdate(
\t\t\t\titem,
\t\t\t\tgetCharacterClassEscapeSet(item.value).toString()
\t\t\t);
\t\t\tbreak;
\t\tcase 'alternative':
\t\tcase 'disjunction':
\t\tcase 'group':
\t\tcase 'quantifier':
\t\t\titem.body = item.body.map(processTerm);
\t\t\tbreak;
\t\tcase 'value':
\t\t\tvar codePoint = item.codePoint;
\t\t\tvar set = regenerate(codePoint);
\t\t\tif (ignoreCase && unicode) {
\t\t\t\tvar folded = caseFold(codePoint);
\t\t\t\tif (folded) {
\t\t\t\t\tset.add(folded);
\t\t\t\t}
\t\t\t}
\t\t\tupdate(item, set.toString());
\t\t\tbreak;
\t\tcase 'anchor':
\t\tcase 'empty':
\t\tcase 'group':
\t\tcase 'reference':
\t\t\t// Nothing to do here.
\t\t\tbreak;
\t\t// The `default` clause is only here as a safeguard; it should never be
\t\t// reached. Code coverage tools should ignore it.
\t\t/* istanbul ignore next */
\t\tdefault:
\t\t\tthrow Error('Unknown term type: ' + item.type);
\t}
\treturn item;
};

module.exports = function(pattern, flags) {
\tvar tree = parse(pattern, flags);
\tignoreCase = flags ? flags.indexOf('i') > -1 : false;
\tunicode = flags ? flags.indexOf('u') > -1 : false;
\tassign(tree, processTerm(tree));
\treturn generate(tree);
};
";
        
        $__internal_4123faababf1a997ac56a95214789df1dadf0b31aeb874d5cc395a5d9b18ad5d->leave($__internal_4123faababf1a997ac56a95214789df1dadf0b31aeb874d5cc395a5d9b18ad5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regexpu-core/rewrite-pattern.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var generate = require('regjsgen').generate;
var parse = require('regjsparser').parse;
var regenerate = require('regenerate');
var iuMappings = require('./data/iu-mappings.json');
var ESCAPE_SETS = require('./data/character-class-escape-sets.js');

function getCharacterClassEscapeSet(character) {
\tif (unicode) {
\t\tif (ignoreCase) {
\t\t\treturn ESCAPE_SETS.UNICODE_IGNORE_CASE[character];
\t\t}
\t\treturn ESCAPE_SETS.UNICODE[character];
\t}
\treturn ESCAPE_SETS.REGULAR[character];
}

var object = {};
var hasOwnProperty = object.hasOwnProperty;
function has(object, property) {
\treturn hasOwnProperty.call(object, property);
}

// Prepare a Regenerate set containing all code points, used for negative
// character classes (if any).
var UNICODE_SET = regenerate().addRange(0x0, 0x10FFFF);
// Without the `u` flag, the range stops at 0xFFFF.
// https://mths.be/es6#sec-pattern-semantics
var BMP_SET = regenerate().addRange(0x0, 0xFFFF);

// Prepare a Regenerate set containing all code points that are supposed to be
// matched by `/./u`. https://mths.be/es6#sec-atom
var DOT_SET_UNICODE = UNICODE_SET.clone() // all Unicode code points
\t.remove(
\t\t// minus `LineTerminator`s (https://mths.be/es6#sec-line-terminators):
\t\t0x000A, // Line Feed <LF>
\t\t0x000D, // Carriage Return <CR>
\t\t0x2028, // Line Separator <LS>
\t\t0x2029  // Paragraph Separator <PS>
\t);
// Prepare a Regenerate set containing all code points that are supposed to be
// matched by `/./` (only BMP code points).
var DOT_SET = DOT_SET_UNICODE.clone()
\t.intersection(BMP_SET);

// Add a range of code points + any case-folded code points in that range to a
// set.
regenerate.prototype.iuAddRange = function(min, max) {
\tvar \$this = this;
\tdo {
\t\tvar folded = caseFold(min);
\t\tif (folded) {
\t\t\t\$this.add(folded);
\t\t}
\t} while (++min <= max);
\treturn \$this;
};

function assign(target, source) {
\tfor (var key in source) {
\t\t// Note: `hasOwnProperty` is not needed here.
\t\ttarget[key] = source[key];
\t}
}

function update(item, pattern) {
\t// TODO: Test if memoizing `pattern` here is worth the effort.
\tif (!pattern) {
\t\treturn;
\t}
\tvar tree = parse(pattern, '');
\tswitch (tree.type) {
\t\tcase 'characterClass':
\t\tcase 'group':
\t\tcase 'value':
\t\t\t// No wrapping needed.
\t\t\tbreak;
\t\tdefault:
\t\t\t// Wrap the pattern in a non-capturing group.
\t\t\ttree = wrap(tree, pattern);
\t}
\tassign(item, tree);
}

function wrap(tree, pattern) {
\t// Wrap the pattern in a non-capturing group.
\treturn {
\t\t'type': 'group',
\t\t'behavior': 'ignore',
\t\t'body': [tree],
\t\t'raw': '(?:' + pattern + ')'
\t};
}

function caseFold(codePoint) {
\treturn has(iuMappings, codePoint) ? iuMappings[codePoint] : false;
}

var ignoreCase = false;
var unicode = false;
function processCharacterClass(characterClassItem) {
\tvar set = regenerate();
\tvar body = characterClassItem.body.forEach(function(item) {
\t\tswitch (item.type) {
\t\t\tcase 'value':
\t\t\t\tset.add(item.codePoint);
\t\t\t\tif (ignoreCase && unicode) {
\t\t\t\t\tvar folded = caseFold(item.codePoint);
\t\t\t\t\tif (folded) {
\t\t\t\t\t\tset.add(folded);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'characterClassRange':
\t\t\t\tvar min = item.min.codePoint;
\t\t\t\tvar max = item.max.codePoint;
\t\t\t\tset.addRange(min, max);
\t\t\t\tif (ignoreCase && unicode) {
\t\t\t\t\tset.iuAddRange(min, max);
\t\t\t\t}
\t\t\t\tbreak;
\t\t\tcase 'characterClassEscape':
\t\t\t\tset.add(getCharacterClassEscapeSet(item.value));
\t\t\t\tbreak;
\t\t\t// The `default` clause is only here as a safeguard; it should never be
\t\t\t// reached. Code coverage tools should ignore it.
\t\t\t/* istanbul ignore next */
\t\t\tdefault:
\t\t\t\tthrow Error('Unknown term type: ' + item.type);
\t\t}
\t});
\tif (characterClassItem.negative) {
\t\tset = (unicode ? UNICODE_SET : BMP_SET).clone().remove(set);
\t}
\tupdate(characterClassItem, set.toString());
\treturn characterClassItem;
}

function processTerm(item) {
\tswitch (item.type) {
\t\tcase 'dot':
\t\t\tupdate(
\t\t\t\titem,
\t\t\t\t(unicode ? DOT_SET_UNICODE : DOT_SET).toString()
\t\t\t);
\t\t\tbreak;
\t\tcase 'characterClass':
\t\t\titem = processCharacterClass(item);
\t\t\tbreak;
\t\tcase 'characterClassEscape':
\t\t\tupdate(
\t\t\t\titem,
\t\t\t\tgetCharacterClassEscapeSet(item.value).toString()
\t\t\t);
\t\t\tbreak;
\t\tcase 'alternative':
\t\tcase 'disjunction':
\t\tcase 'group':
\t\tcase 'quantifier':
\t\t\titem.body = item.body.map(processTerm);
\t\t\tbreak;
\t\tcase 'value':
\t\t\tvar codePoint = item.codePoint;
\t\t\tvar set = regenerate(codePoint);
\t\t\tif (ignoreCase && unicode) {
\t\t\t\tvar folded = caseFold(codePoint);
\t\t\t\tif (folded) {
\t\t\t\t\tset.add(folded);
\t\t\t\t}
\t\t\t}
\t\t\tupdate(item, set.toString());
\t\t\tbreak;
\t\tcase 'anchor':
\t\tcase 'empty':
\t\tcase 'group':
\t\tcase 'reference':
\t\t\t// Nothing to do here.
\t\t\tbreak;
\t\t// The `default` clause is only here as a safeguard; it should never be
\t\t// reached. Code coverage tools should ignore it.
\t\t/* istanbul ignore next */
\t\tdefault:
\t\t\tthrow Error('Unknown term type: ' + item.type);
\t}
\treturn item;
};

module.exports = function(pattern, flags) {
\tvar tree = parse(pattern, flags);
\tignoreCase = flags ? flags.indexOf('i') > -1 : false;
\tunicode = flags ? flags.indexOf('u') > -1 : false;
\tassign(tree, processTerm(tree));
\treturn generate(tree);
};
", "node_modules/regexpu-core/rewrite-pattern.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regexpu-core/rewrite-pattern.js");
    }
}
