<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/index.js */
class __TwigTemplate_fb3463f5843a78528259cff318bc7b603dbf480c3c996659c753e55e4335fac1 extends Twig_Template
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
        $__internal_53af145ab2b2dbdcc3cb11f9c62e32d72195476928ef72f6e0226ca06b8c440b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53af145ab2b2dbdcc3cb11f9c62e32d72195476928ef72f6e0226ca06b8c440b->enter($__internal_53af145ab2b2dbdcc3cb11f9c62e32d72195476928ef72f6e0226ca06b8c440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/index.js"));

        // line 1
        echo "// Acorn: Loose parser
//
// This module provides an alternative parser (`parse_dammit`) that
// exposes that same interface as `parse`, but will try to parse
// anything as JavaScript, repairing syntax error the best it can.
// There are circumstances in which it will raise an error and give
// up, but they are very rare. The resulting AST will be a mostly
// valid JavaScript AST (as per the [Mozilla parser API][api], except
// that:
//
// - Return outside functions is allowed
//
// - Label consistency (no conflicts, break only to existing labels)
//   is not enforced.
//
// - Bogus Identifier nodes with a name of `\"✖\"` are inserted whenever
//   the parser got too confused to return anything meaningful.
//
// [api]: https://developer.mozilla.org/en-US/docs/SpiderMonkey/Parser_API
//
// The expected use for this is to *first* try `acorn.parse`, and only
// if that fails switch to `parse_dammit`. The loose parser might
// parse badly indented code incorrectly, so **don't** use it as
// your default parser.
//
// Quite a lot of acorn.js is duplicated here. The alternative was to
// add a *lot* of extra cruft to that file, making it less readable
// and slower. Copying and editing the code allowed me to make
// invasive changes and simplifications without creating a complicated
// tangle.

import {addLooseExports, defaultOptions} from \"../index\"
import {LooseParser, pluginsLoose} from \"./state\"
import \"./tokenize\"
import \"./statement\"
import \"./expression\"

export {LooseParser, pluginsLoose} from \"./state\"

defaultOptions.tabSize = 4

export function parse_dammit(input, options) {
  let p = new LooseParser(input, options)
  p.next()
  return p.parseTopLevel()
}

addLooseExports(parse_dammit, LooseParser, pluginsLoose)
";
        
        $__internal_53af145ab2b2dbdcc3cb11f9c62e32d72195476928ef72f6e0226ca06b8c440b->leave($__internal_53af145ab2b2dbdcc3cb11f9c62e32d72195476928ef72f6e0226ca06b8c440b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Acorn: Loose parser
//
// This module provides an alternative parser (`parse_dammit`) that
// exposes that same interface as `parse`, but will try to parse
// anything as JavaScript, repairing syntax error the best it can.
// There are circumstances in which it will raise an error and give
// up, but they are very rare. The resulting AST will be a mostly
// valid JavaScript AST (as per the [Mozilla parser API][api], except
// that:
//
// - Return outside functions is allowed
//
// - Label consistency (no conflicts, break only to existing labels)
//   is not enforced.
//
// - Bogus Identifier nodes with a name of `\"✖\"` are inserted whenever
//   the parser got too confused to return anything meaningful.
//
// [api]: https://developer.mozilla.org/en-US/docs/SpiderMonkey/Parser_API
//
// The expected use for this is to *first* try `acorn.parse`, and only
// if that fails switch to `parse_dammit`. The loose parser might
// parse badly indented code incorrectly, so **don't** use it as
// your default parser.
//
// Quite a lot of acorn.js is duplicated here. The alternative was to
// add a *lot* of extra cruft to that file, making it less readable
// and slower. Copying and editing the code allowed me to make
// invasive changes and simplifications without creating a complicated
// tangle.

import {addLooseExports, defaultOptions} from \"../index\"
import {LooseParser, pluginsLoose} from \"./state\"
import \"./tokenize\"
import \"./statement\"
import \"./expression\"

export {LooseParser, pluginsLoose} from \"./state\"

defaultOptions.tabSize = 4

export function parse_dammit(input, options) {
  let p = new LooseParser(input, options)
  p.next()
  return p.parseTopLevel()
}

addLooseExports(parse_dammit, LooseParser, pluginsLoose)
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/index.js");
    }
}
