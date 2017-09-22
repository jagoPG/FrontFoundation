<?php

/* node_modules/babylon/bin/generate-identifier-regex.js */
class __TwigTemplate_381a53916d029475ff97fe6a8ae0d46fcae58fdcc862635790f931c5f06d81db extends Twig_Template
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
        $__internal_cb7185ea04c44734771613d81b4d3f21d8944f8c444708bfff5756475e326f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7185ea04c44734771613d81b4d3f21d8944f8c444708bfff5756475e326f5f->enter($__internal_cb7185ea04c44734771613d81b4d3f21d8944f8c444708bfff5756475e326f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babylon/bin/generate-identifier-regex.js"));

        // line 1
        echo "\"use strict\";

// Which Unicode version should be used?
const version = \"9.0.0\";

const start = require(\"unicode-\" + version + \"/Binary_Property/ID_Start/code-points.js\")
    .filter(function(ch) { return ch > 0x7f; });
let last = -1;
const cont = [0x200c, 0x200d].concat(
  require(\"unicode-\" + version + \"/Binary_Property/ID_Continue/code-points.js\")
    .filter(function(ch) {
      return ch > 0x7f && search(start, ch, last + 1) == -1;
    })
  );

function search(arr, ch, starting) {
  for (let i = starting; arr[i] <= ch && i < arr.length; last = i++)
    if (arr[i] === ch)
      return i;
  return -1;
}

function pad(str, width) {
  while (str.length < width) str = \"0\" + str;
  return str;
}

function esc(code) {
  const hex = code.toString(16);
  if (hex.length <= 2) return \"\\\\x\" + pad(hex, 2);
  else return \"\\\\u\" + pad(hex, 4);
}

function generate(chars) {
  const astral = [];
  let re = \"\";
  for (let i = 0, at = 0x10000; i < chars.length; i++) {
    const from = chars[i];
    let to = from;
    while (i < chars.length - 1 && chars[i + 1] == to + 1) {
      i++;
      to++;
    }
    if (to <= 0xffff) {
      if (from == to) re += esc(from);
      else if (from + 1 == to) re += esc(from) + esc(to);
      else re += esc(from) + \"-\" + esc(to);
    } else {
      astral.push(from - at, to - from);
      at = to;
    }
  }
  return { nonASCII: re, astral: astral };
}

const startData = generate(start);
const contData = generate(cont);

console.log(\"let nonASCIIidentifierStartChars = \\\"\" + startData.nonASCII + \"\\\";\");
console.log(\"let nonASCIIidentifierChars = \\\"\" + contData.nonASCII + \"\\\";\");
console.log(\"const astralIdentifierStartCodes = \" + JSON.stringify(startData.astral) + \";\");
console.log(\"const astralIdentifierCodes = \" + JSON.stringify(contData.astral) + \";\");
";
        
        $__internal_cb7185ea04c44734771613d81b4d3f21d8944f8c444708bfff5756475e326f5f->leave($__internal_cb7185ea04c44734771613d81b4d3f21d8944f8c444708bfff5756475e326f5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babylon/bin/generate-identifier-regex.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

// Which Unicode version should be used?
const version = \"9.0.0\";

const start = require(\"unicode-\" + version + \"/Binary_Property/ID_Start/code-points.js\")
    .filter(function(ch) { return ch > 0x7f; });
let last = -1;
const cont = [0x200c, 0x200d].concat(
  require(\"unicode-\" + version + \"/Binary_Property/ID_Continue/code-points.js\")
    .filter(function(ch) {
      return ch > 0x7f && search(start, ch, last + 1) == -1;
    })
  );

function search(arr, ch, starting) {
  for (let i = starting; arr[i] <= ch && i < arr.length; last = i++)
    if (arr[i] === ch)
      return i;
  return -1;
}

function pad(str, width) {
  while (str.length < width) str = \"0\" + str;
  return str;
}

function esc(code) {
  const hex = code.toString(16);
  if (hex.length <= 2) return \"\\\\x\" + pad(hex, 2);
  else return \"\\\\u\" + pad(hex, 4);
}

function generate(chars) {
  const astral = [];
  let re = \"\";
  for (let i = 0, at = 0x10000; i < chars.length; i++) {
    const from = chars[i];
    let to = from;
    while (i < chars.length - 1 && chars[i + 1] == to + 1) {
      i++;
      to++;
    }
    if (to <= 0xffff) {
      if (from == to) re += esc(from);
      else if (from + 1 == to) re += esc(from) + esc(to);
      else re += esc(from) + \"-\" + esc(to);
    } else {
      astral.push(from - at, to - from);
      at = to;
    }
  }
  return { nonASCII: re, astral: astral };
}

const startData = generate(start);
const contData = generate(cont);

console.log(\"let nonASCIIidentifierStartChars = \\\"\" + startData.nonASCII + \"\\\";\");
console.log(\"let nonASCIIidentifierChars = \\\"\" + contData.nonASCII + \"\\\";\");
console.log(\"const astralIdentifierStartCodes = \" + JSON.stringify(startData.astral) + \";\");
console.log(\"const astralIdentifierCodes = \" + JSON.stringify(contData.astral) + \";\");
", "node_modules/babylon/bin/generate-identifier-regex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babylon/bin/generate-identifier-regex.js");
    }
}
