<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/index.js */
class __TwigTemplate_3686b5e1cb6d455df16b354cb4c6cc1f8a54080cfea5a7087c940b391c828c37 extends Twig_Template
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
        $__internal_531cd6adb092acc17dfb68383f85701ba068f02513ba9153a719bac198522f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531cd6adb092acc17dfb68383f85701ba068f02513ba9153a719bac198522f2e->enter($__internal_531cd6adb092acc17dfb68383f85701ba068f02513ba9153a719bac198522f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/index.js"));

        // line 1
        echo "// Acorn is a tiny, fast JavaScript parser written in JavaScript.
//
// Acorn was written by Marijn Haverbeke, Ingvar Stepanyan, and
// various contributors and released under an MIT license.
//
// Git repositories for Acorn are available at
//
//     http://marijnhaverbeke.nl/git/acorn
//     https://github.com/ternjs/acorn.git
//
// Please use the [github bug tracker][ghbt] to report issues.
//
// [ghbt]: https://github.com/ternjs/acorn/issues
//
// This file defines the main parser interface. The library also comes
// with a [error-tolerant parser][dammit] and an
// [abstract syntax tree walker][walk], defined in other files.
//
// [dammit]: acorn_loose.js
// [walk]: util/walk.js

import {Parser} from \"./state\"
import \"./parseutil\"
import \"./statement\"
import \"./lval\"
import \"./expression\"
import \"./location\"

export {Parser, plugins} from \"./state\"
export {defaultOptions} from \"./options\"
export {Position, SourceLocation, getLineInfo} from \"./locutil\"
export {Node} from \"./node\"
export {TokenType, types as tokTypes, keywords as keywordTypes} from \"./tokentype\"
export {TokContext, types as tokContexts} from \"./tokencontext\"
export {isIdentifierChar, isIdentifierStart} from \"./identifier\"
export {Token} from \"./tokenize\"
export {isNewLine, lineBreak, lineBreakG} from \"./whitespace\"

export const version = \"4.0.11\"

// The main exported interface (under `self.acorn` when in the
// browser) is a `parse` function that takes a code string and
// returns an abstract syntax tree as specified by [Mozilla parser
// API][api].
//
// [api]: https://developer.mozilla.org/en-US/docs/SpiderMonkey/Parser_API

export function parse(input, options) {
  return new Parser(options, input).parse()
}

// This function tries to parse a single expression at a given
// offset in a string. Useful for parsing mixed-language formats
// that embed JavaScript expressions.

export function parseExpressionAt(input, pos, options) {
  let p = new Parser(options, input, pos)
  p.nextToken()
  return p.parseExpression()
}

// Acorn is organized as a tokenizer and a recursive-descent parser.
// The `tokenizer` export provides an interface to the tokenizer.

export function tokenizer(input, options) {
  return new Parser(options, input)
}

// This is a terrible kludge to support the existing, pre-ES6
// interface where the loose parser module retroactively adds exports
// to this module.
export let parse_dammit, LooseParser, pluginsLoose
export function addLooseExports(parse, Parser, plugins) {
  parse_dammit = parse
  LooseParser = Parser
  pluginsLoose = plugins
}
";
        
        $__internal_531cd6adb092acc17dfb68383f85701ba068f02513ba9153a719bac198522f2e->leave($__internal_531cd6adb092acc17dfb68383f85701ba068f02513ba9153a719bac198522f2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Acorn is a tiny, fast JavaScript parser written in JavaScript.
//
// Acorn was written by Marijn Haverbeke, Ingvar Stepanyan, and
// various contributors and released under an MIT license.
//
// Git repositories for Acorn are available at
//
//     http://marijnhaverbeke.nl/git/acorn
//     https://github.com/ternjs/acorn.git
//
// Please use the [github bug tracker][ghbt] to report issues.
//
// [ghbt]: https://github.com/ternjs/acorn/issues
//
// This file defines the main parser interface. The library also comes
// with a [error-tolerant parser][dammit] and an
// [abstract syntax tree walker][walk], defined in other files.
//
// [dammit]: acorn_loose.js
// [walk]: util/walk.js

import {Parser} from \"./state\"
import \"./parseutil\"
import \"./statement\"
import \"./lval\"
import \"./expression\"
import \"./location\"

export {Parser, plugins} from \"./state\"
export {defaultOptions} from \"./options\"
export {Position, SourceLocation, getLineInfo} from \"./locutil\"
export {Node} from \"./node\"
export {TokenType, types as tokTypes, keywords as keywordTypes} from \"./tokentype\"
export {TokContext, types as tokContexts} from \"./tokencontext\"
export {isIdentifierChar, isIdentifierStart} from \"./identifier\"
export {Token} from \"./tokenize\"
export {isNewLine, lineBreak, lineBreakG} from \"./whitespace\"

export const version = \"4.0.11\"

// The main exported interface (under `self.acorn` when in the
// browser) is a `parse` function that takes a code string and
// returns an abstract syntax tree as specified by [Mozilla parser
// API][api].
//
// [api]: https://developer.mozilla.org/en-US/docs/SpiderMonkey/Parser_API

export function parse(input, options) {
  return new Parser(options, input).parse()
}

// This function tries to parse a single expression at a given
// offset in a string. Useful for parsing mixed-language formats
// that embed JavaScript expressions.

export function parseExpressionAt(input, pos, options) {
  let p = new Parser(options, input, pos)
  p.nextToken()
  return p.parseExpression()
}

// Acorn is organized as a tokenizer and a recursive-descent parser.
// The `tokenizer` export provides an interface to the tokenizer.

export function tokenizer(input, options) {
  return new Parser(options, input)
}

// This is a terrible kludge to support the existing, pre-ES6
// interface where the loose parser module retroactively adds exports
// to this module.
export let parse_dammit, LooseParser, pluginsLoose
export function addLooseExports(parse, Parser, plugins) {
  parse_dammit = parse
  LooseParser = Parser
  pluginsLoose = plugins
}
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/index.js");
    }
}
