<?php

/* node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/state.js */
class __TwigTemplate_186c8561c7bfc6218fad9246335260788df05694ee92c84354ee6bed645d2818 extends Twig_Template
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
        $__internal_60a36582e671fd2af6a3d1cc08b992c01c0307f6b4a1d8fcf38e5f880f16696c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a36582e671fd2af6a3d1cc08b992c01c0307f6b4a1d8fcf38e5f880f16696c->enter($__internal_60a36582e671fd2af6a3d1cc08b992c01c0307f6b4a1d8fcf38e5f880f16696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/state.js"));

        // line 1
        echo "import {tokenizer, SourceLocation, tokTypes as tt, Node, lineBreak, isNewLine} from \"../index\"

// Registered plugins
export const pluginsLoose = {}

export class LooseParser {
  constructor(input, options = {}) {
    this.toks = tokenizer(input, options)
    this.options = this.toks.options
    this.input = this.toks.input
    this.tok = this.last = {type: tt.eof, start: 0, end: 0}
    if (this.options.locations) {
      let here = this.toks.curPosition()
      this.tok.loc = new SourceLocation(this.toks, here, here)
    }
    this.ahead = [] // Tokens ahead
    this.context = [] // Indentation contexted
    this.curIndent = 0
    this.curLineStart = 0
    this.nextLineStart = this.lineEnd(this.curLineStart) + 1
    this.inAsync = false
    // Load plugins
    this.options.pluginsLoose = options.pluginsLoose || {}
    this.loadPlugins(this.options.pluginsLoose)
  }

  startNode() {
    return new Node(this.toks, this.tok.start, this.options.locations ? this.tok.loc.start : null)
  }

  storeCurrentPos() {
    return this.options.locations ? [this.tok.start, this.tok.loc.start] : this.tok.start
  }

  startNodeAt(pos) {
    if (this.options.locations) {
      return new Node(this.toks, pos[0], pos[1])
    } else {
      return new Node(this.toks, pos)
    }
  }

  finishNode(node, type) {
    node.type = type
    node.end = this.last.end
    if (this.options.locations)
      node.loc.end = this.last.loc.end
    if (this.options.ranges)
      node.range[1] = this.last.end
    return node
  }

  dummyNode(type) {
    let dummy = this.startNode()
    dummy.type = type
    dummy.end = dummy.start
    if (this.options.locations)
      dummy.loc.end = dummy.loc.start
    if (this.options.ranges)
      dummy.range[1] = dummy.start
    this.last = {type: tt.name, start: dummy.start, end: dummy.start, loc: dummy.loc}
    return dummy
  }

  dummyIdent() {
    let dummy = this.dummyNode(\"Identifier\")
    dummy.name = \"✖\"
    return dummy
  }

  dummyString() {
    let dummy = this.dummyNode(\"Literal\")
    dummy.value = dummy.raw = \"✖\"
    return dummy
  }

  eat(type) {
    if (this.tok.type === type) {
      this.next()
      return true
    } else {
      return false
    }
  }

  isContextual(name) {
    return this.tok.type === tt.name && this.tok.value === name
  }

  eatContextual(name) {
    return this.tok.value === name && this.eat(tt.name)
  }

  canInsertSemicolon() {
    return this.tok.type === tt.eof || this.tok.type === tt.braceR ||
      lineBreak.test(this.input.slice(this.last.end, this.tok.start))
  }

  semicolon() {
    return this.eat(tt.semi)
  }

  expect(type) {
    if (this.eat(type)) return true
    for (let i = 1; i <= 2; i++) {
      if (this.lookAhead(i).type == type) {
        for (let j = 0; j < i; j++) this.next()
        return true
      }
    }
  }

  pushCx() {
    this.context.push(this.curIndent)
  }

  popCx() {
    this.curIndent = this.context.pop()
  }

  lineEnd(pos) {
    while (pos < this.input.length && !isNewLine(this.input.charCodeAt(pos))) ++pos
    return pos
  }

  indentationAfter(pos) {
    for (let count = 0;; ++pos) {
      let ch = this.input.charCodeAt(pos)
      if (ch === 32) ++count
      else if (ch === 9) count += this.options.tabSize
      else return count
    }
  }

  closes(closeTok, indent, line, blockHeuristic) {
    if (this.tok.type === closeTok || this.tok.type === tt.eof) return true
    return line != this.curLineStart && this.curIndent < indent && this.tokenStartsLine() &&
      (!blockHeuristic || this.nextLineStart >= this.input.length ||
       this.indentationAfter(this.nextLineStart) < indent)
  }

  tokenStartsLine() {
    for (let p = this.tok.start - 1; p >= this.curLineStart; --p) {
      let ch = this.input.charCodeAt(p)
      if (ch !== 9 && ch !== 32) return false
    }
    return true
  }

  extend(name, f) {
    this[name] = f(this[name])
  }

  loadPlugins(pluginConfigs) {
    for (let name in pluginConfigs) {
      let plugin = pluginsLoose[name]
      if (!plugin) throw new Error(\"Plugin '\" + name + \"' not found\")
      plugin(this, pluginConfigs[name])
    }
  }
}
";
        
        $__internal_60a36582e671fd2af6a3d1cc08b992c01c0307f6b4a1d8fcf38e5f880f16696c->leave($__internal_60a36582e671fd2af6a3d1cc08b992c01c0307f6b4a1d8fcf38e5f880f16696c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/state.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import {tokenizer, SourceLocation, tokTypes as tt, Node, lineBreak, isNewLine} from \"../index\"

// Registered plugins
export const pluginsLoose = {}

export class LooseParser {
  constructor(input, options = {}) {
    this.toks = tokenizer(input, options)
    this.options = this.toks.options
    this.input = this.toks.input
    this.tok = this.last = {type: tt.eof, start: 0, end: 0}
    if (this.options.locations) {
      let here = this.toks.curPosition()
      this.tok.loc = new SourceLocation(this.toks, here, here)
    }
    this.ahead = [] // Tokens ahead
    this.context = [] // Indentation contexted
    this.curIndent = 0
    this.curLineStart = 0
    this.nextLineStart = this.lineEnd(this.curLineStart) + 1
    this.inAsync = false
    // Load plugins
    this.options.pluginsLoose = options.pluginsLoose || {}
    this.loadPlugins(this.options.pluginsLoose)
  }

  startNode() {
    return new Node(this.toks, this.tok.start, this.options.locations ? this.tok.loc.start : null)
  }

  storeCurrentPos() {
    return this.options.locations ? [this.tok.start, this.tok.loc.start] : this.tok.start
  }

  startNodeAt(pos) {
    if (this.options.locations) {
      return new Node(this.toks, pos[0], pos[1])
    } else {
      return new Node(this.toks, pos)
    }
  }

  finishNode(node, type) {
    node.type = type
    node.end = this.last.end
    if (this.options.locations)
      node.loc.end = this.last.loc.end
    if (this.options.ranges)
      node.range[1] = this.last.end
    return node
  }

  dummyNode(type) {
    let dummy = this.startNode()
    dummy.type = type
    dummy.end = dummy.start
    if (this.options.locations)
      dummy.loc.end = dummy.loc.start
    if (this.options.ranges)
      dummy.range[1] = dummy.start
    this.last = {type: tt.name, start: dummy.start, end: dummy.start, loc: dummy.loc}
    return dummy
  }

  dummyIdent() {
    let dummy = this.dummyNode(\"Identifier\")
    dummy.name = \"✖\"
    return dummy
  }

  dummyString() {
    let dummy = this.dummyNode(\"Literal\")
    dummy.value = dummy.raw = \"✖\"
    return dummy
  }

  eat(type) {
    if (this.tok.type === type) {
      this.next()
      return true
    } else {
      return false
    }
  }

  isContextual(name) {
    return this.tok.type === tt.name && this.tok.value === name
  }

  eatContextual(name) {
    return this.tok.value === name && this.eat(tt.name)
  }

  canInsertSemicolon() {
    return this.tok.type === tt.eof || this.tok.type === tt.braceR ||
      lineBreak.test(this.input.slice(this.last.end, this.tok.start))
  }

  semicolon() {
    return this.eat(tt.semi)
  }

  expect(type) {
    if (this.eat(type)) return true
    for (let i = 1; i <= 2; i++) {
      if (this.lookAhead(i).type == type) {
        for (let j = 0; j < i; j++) this.next()
        return true
      }
    }
  }

  pushCx() {
    this.context.push(this.curIndent)
  }

  popCx() {
    this.curIndent = this.context.pop()
  }

  lineEnd(pos) {
    while (pos < this.input.length && !isNewLine(this.input.charCodeAt(pos))) ++pos
    return pos
  }

  indentationAfter(pos) {
    for (let count = 0;; ++pos) {
      let ch = this.input.charCodeAt(pos)
      if (ch === 32) ++count
      else if (ch === 9) count += this.options.tabSize
      else return count
    }
  }

  closes(closeTok, indent, line, blockHeuristic) {
    if (this.tok.type === closeTok || this.tok.type === tt.eof) return true
    return line != this.curLineStart && this.curIndent < indent && this.tokenStartsLine() &&
      (!blockHeuristic || this.nextLineStart >= this.input.length ||
       this.indentationAfter(this.nextLineStart) < indent)
  }

  tokenStartsLine() {
    for (let p = this.tok.start - 1; p >= this.curLineStart; --p) {
      let ch = this.input.charCodeAt(p)
      if (ch !== 9 && ch !== 32) return false
    }
    return true
  }

  extend(name, f) {
    this[name] = f(this[name])
  }

  loadPlugins(pluginConfigs) {
    for (let name in pluginConfigs) {
      let plugin = pluginsLoose[name]
      if (!plugin) throw new Error(\"Plugin '\" + name + \"' not found\")
      plugin(this, pluginConfigs[name])
    }
  }
}
", "node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/state.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/node_modules/acorn/src/loose/state.js");
    }
}
