<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/tokencontext.js */
class __TwigTemplate_a6b929bccef6a832e50b7fb1c877dc1115c05eef9b452214bc963192521925e1 extends Twig_Template
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
        $__internal_6ff3f3ac33bfaa47bc4b6a4fa87463cb00fe91fbf90b7c24dc0a986325db43e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff3f3ac33bfaa47bc4b6a4fa87463cb00fe91fbf90b7c24dc0a986325db43e4->enter($__internal_6ff3f3ac33bfaa47bc4b6a4fa87463cb00fe91fbf90b7c24dc0a986325db43e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/tokencontext.js"));

        // line 1
        echo "// The algorithm used to determine whether a regexp can appear at a
// given point in the program is loosely based on sweet.js' approach.
// See https://github.com/mozilla/sweet.js/wiki/design

import {Parser} from \"./state\"
import {types as tt} from \"./tokentype\"
import {lineBreak} from \"./whitespace\"

export class TokContext {
  constructor(token, isExpr, preserveSpace, override) {
    this.token = token
    this.isExpr = !!isExpr
    this.preserveSpace = !!preserveSpace
    this.override = override
  }
}

export const types = {
  b_stat: new TokContext(\"{\", false),
  b_expr: new TokContext(\"{\", true),
  b_tmpl: new TokContext(\"\${\", true),
  p_stat: new TokContext(\"(\", false),
  p_expr: new TokContext(\"(\", true),
  q_tmpl: new TokContext(\"`\", true, true, p => p.readTmplToken()),
  f_expr: new TokContext(\"function\", true)
}

const pp = Parser.prototype

pp.initialContext = function() {
  return [types.b_stat]
}

pp.braceIsBlock = function(prevType) {
  if (prevType === tt.colon) {
    let parent = this.curContext()
    if (parent === types.b_stat || parent === types.b_expr)
      return !parent.isExpr
  }
  if (prevType === tt._return)
    return lineBreak.test(this.input.slice(this.lastTokEnd, this.start))
  if (prevType === tt._else || prevType === tt.semi || prevType === tt.eof || prevType === tt.parenR)
    return true
  if (prevType == tt.braceL)
    return this.curContext() === types.b_stat
  return !this.exprAllowed
}

pp.updateContext = function(prevType) {
  let update, type = this.type
  if (type.keyword && prevType == tt.dot)
    this.exprAllowed = false
  else if (update = type.updateContext)
    update.call(this, prevType)
  else
    this.exprAllowed = type.beforeExpr
}

// Token-specific context update code

tt.parenR.updateContext = tt.braceR.updateContext = function() {
  if (this.context.length == 1) {
    this.exprAllowed = true
    return
  }
  let out = this.context.pop()
  if (out === types.b_stat && this.curContext() === types.f_expr) {
    this.context.pop()
    this.exprAllowed = false
  } else if (out === types.b_tmpl) {
    this.exprAllowed = true
  } else {
    this.exprAllowed = !out.isExpr
  }
}

tt.braceL.updateContext = function(prevType) {
  this.context.push(this.braceIsBlock(prevType) ? types.b_stat : types.b_expr)
  this.exprAllowed = true
}

tt.dollarBraceL.updateContext = function() {
  this.context.push(types.b_tmpl)
  this.exprAllowed = true
}

tt.parenL.updateContext = function(prevType) {
  let statementParens = prevType === tt._if || prevType === tt._for || prevType === tt._with || prevType === tt._while
  this.context.push(statementParens ? types.p_stat : types.p_expr)
  this.exprAllowed = true
}

tt.incDec.updateContext = function() {
  // tokExprAllowed stays unchanged
}

tt._function.updateContext = function(prevType) {
  if (prevType.beforeExpr && prevType !== tt.semi && prevType !== tt._else &&
      !((prevType === tt.colon || prevType === tt.braceL) && this.curContext() === types.b_stat))
    this.context.push(types.f_expr)
  this.exprAllowed = false
}

tt.backQuote.updateContext = function() {
  if (this.curContext() === types.q_tmpl)
    this.context.pop()
  else
    this.context.push(types.q_tmpl)
  this.exprAllowed = false
}
";
        
        $__internal_6ff3f3ac33bfaa47bc4b6a4fa87463cb00fe91fbf90b7c24dc0a986325db43e4->leave($__internal_6ff3f3ac33bfaa47bc4b6a4fa87463cb00fe91fbf90b7c24dc0a986325db43e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/tokencontext.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// The algorithm used to determine whether a regexp can appear at a
// given point in the program is loosely based on sweet.js' approach.
// See https://github.com/mozilla/sweet.js/wiki/design

import {Parser} from \"./state\"
import {types as tt} from \"./tokentype\"
import {lineBreak} from \"./whitespace\"

export class TokContext {
  constructor(token, isExpr, preserveSpace, override) {
    this.token = token
    this.isExpr = !!isExpr
    this.preserveSpace = !!preserveSpace
    this.override = override
  }
}

export const types = {
  b_stat: new TokContext(\"{\", false),
  b_expr: new TokContext(\"{\", true),
  b_tmpl: new TokContext(\"\${\", true),
  p_stat: new TokContext(\"(\", false),
  p_expr: new TokContext(\"(\", true),
  q_tmpl: new TokContext(\"`\", true, true, p => p.readTmplToken()),
  f_expr: new TokContext(\"function\", true)
}

const pp = Parser.prototype

pp.initialContext = function() {
  return [types.b_stat]
}

pp.braceIsBlock = function(prevType) {
  if (prevType === tt.colon) {
    let parent = this.curContext()
    if (parent === types.b_stat || parent === types.b_expr)
      return !parent.isExpr
  }
  if (prevType === tt._return)
    return lineBreak.test(this.input.slice(this.lastTokEnd, this.start))
  if (prevType === tt._else || prevType === tt.semi || prevType === tt.eof || prevType === tt.parenR)
    return true
  if (prevType == tt.braceL)
    return this.curContext() === types.b_stat
  return !this.exprAllowed
}

pp.updateContext = function(prevType) {
  let update, type = this.type
  if (type.keyword && prevType == tt.dot)
    this.exprAllowed = false
  else if (update = type.updateContext)
    update.call(this, prevType)
  else
    this.exprAllowed = type.beforeExpr
}

// Token-specific context update code

tt.parenR.updateContext = tt.braceR.updateContext = function() {
  if (this.context.length == 1) {
    this.exprAllowed = true
    return
  }
  let out = this.context.pop()
  if (out === types.b_stat && this.curContext() === types.f_expr) {
    this.context.pop()
    this.exprAllowed = false
  } else if (out === types.b_tmpl) {
    this.exprAllowed = true
  } else {
    this.exprAllowed = !out.isExpr
  }
}

tt.braceL.updateContext = function(prevType) {
  this.context.push(this.braceIsBlock(prevType) ? types.b_stat : types.b_expr)
  this.exprAllowed = true
}

tt.dollarBraceL.updateContext = function() {
  this.context.push(types.b_tmpl)
  this.exprAllowed = true
}

tt.parenL.updateContext = function(prevType) {
  let statementParens = prevType === tt._if || prevType === tt._for || prevType === tt._with || prevType === tt._while
  this.context.push(statementParens ? types.p_stat : types.p_expr)
  this.exprAllowed = true
}

tt.incDec.updateContext = function() {
  // tokExprAllowed stays unchanged
}

tt._function.updateContext = function(prevType) {
  if (prevType.beforeExpr && prevType !== tt.semi && prevType !== tt._else &&
      !((prevType === tt.colon || prevType === tt.braceL) && this.curContext() === types.b_stat))
    this.context.push(types.f_expr)
  this.exprAllowed = false
}

tt.backQuote.updateContext = function() {
  if (this.curContext() === types.q_tmpl)
    this.context.pop()
  else
    this.context.push(types.q_tmpl)
  this.exprAllowed = false
}
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/tokencontext.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/tokencontext.js");
    }
}
