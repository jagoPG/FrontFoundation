<?php

/* node_modules/js-tokens/index.js */
class __TwigTemplate_9aebb65f54c63fe83468873e0ef19f5955857beb930d493316cfe4f4068c19a9 extends Twig_Template
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
        $__internal_e17e1edbff078679e9d6cb5983d8701c81c1372a267182e1c675c29d45cb33bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17e1edbff078679e9d6cb5983d8701c81c1372a267182e1c675c29d45cb33bb->enter($__internal_e17e1edbff078679e9d6cb5983d8701c81c1372a267182e1c675c29d45cb33bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/js-tokens/index.js"));

        // line 1
        echo "// Copyright 2014, 2015, 2016, 2017 Simon Lydell
// License: MIT. (See LICENSE.)

Object.defineProperty(exports, \"__esModule\", {
  value: true
})

// This regex comes from regex.coffee, and is inserted here by generate-index.js
// (run `npm run build`).
exports.default = /((['\"])(?:(?!\\2|\\\\).|\\\\(?:\\r\\n|[\\s\\S]))*(\\2)?|`(?:[^`\\\\\$]|\\\\[\\s\\S]|\\\$(?!\\{)|\\\$\\{(?:[^{}]|\\{[^}]*\\}?)*\\}?)*(`)?)|(\\/\\/.*)|(\\/\\*(?:[^*]|\\*(?!\\/))*(\\*\\/)?)|(\\/(?!\\*)(?:\\[(?:(?![\\]\\\\]).|\\\\.)*\\]|(?![\\/\\]\\\\]).|\\\\.)+\\/(?:(?!\\s*(?:\\b|[\\u0080-\\uFFFF\$\\\\'\"~({]|[+\\-!](?!=)|\\.?\\d))|[gmiyu]{1,5}\\b(?![\\u0080-\\uFFFF\$\\\\]|\\s*(?:[+\\-*%&|^<>!=?({]|\\/(?![\\/*])))))|(0[xX][\\da-fA-F]+|0[oO][0-7]+|0[bB][01]+|(?:\\d*\\.\\d+|\\d+\\.?)(?:[eE][+-]?\\d+)?)|((?!\\d)(?:(?!\\s)[\$\\w\\u0080-\\uFFFF]|\\\\u[\\da-fA-F]{4}|\\\\u\\{[\\da-fA-F]+\\})+)|(--|\\+\\+|&&|\\|\\||=>|\\.{3}|(?:[+\\-\\/%&|^]|\\*{1,2}|<{1,2}|>{1,3}|!=?|={1,2})=?|[?~.,:;[\\](){}])|(\\s+)|(^\$|[\\s\\S])/g

exports.matchToToken = function(match) {
  var token = {type: \"invalid\", value: match[0]}
       if (match[ 1]) token.type = \"string\" , token.closed = !!(match[3] || match[4])
  else if (match[ 5]) token.type = \"comment\"
  else if (match[ 6]) token.type = \"comment\", token.closed = !!match[7]
  else if (match[ 8]) token.type = \"regex\"
  else if (match[ 9]) token.type = \"number\"
  else if (match[10]) token.type = \"name\"
  else if (match[11]) token.type = \"punctuator\"
  else if (match[12]) token.type = \"whitespace\"
  return token
}
";
        
        $__internal_e17e1edbff078679e9d6cb5983d8701c81c1372a267182e1c675c29d45cb33bb->leave($__internal_e17e1edbff078679e9d6cb5983d8701c81c1372a267182e1c675c29d45cb33bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/js-tokens/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright 2014, 2015, 2016, 2017 Simon Lydell
// License: MIT. (See LICENSE.)

Object.defineProperty(exports, \"__esModule\", {
  value: true
})

// This regex comes from regex.coffee, and is inserted here by generate-index.js
// (run `npm run build`).
exports.default = /((['\"])(?:(?!\\2|\\\\).|\\\\(?:\\r\\n|[\\s\\S]))*(\\2)?|`(?:[^`\\\\\$]|\\\\[\\s\\S]|\\\$(?!\\{)|\\\$\\{(?:[^{}]|\\{[^}]*\\}?)*\\}?)*(`)?)|(\\/\\/.*)|(\\/\\*(?:[^*]|\\*(?!\\/))*(\\*\\/)?)|(\\/(?!\\*)(?:\\[(?:(?![\\]\\\\]).|\\\\.)*\\]|(?![\\/\\]\\\\]).|\\\\.)+\\/(?:(?!\\s*(?:\\b|[\\u0080-\\uFFFF\$\\\\'\"~({]|[+\\-!](?!=)|\\.?\\d))|[gmiyu]{1,5}\\b(?![\\u0080-\\uFFFF\$\\\\]|\\s*(?:[+\\-*%&|^<>!=?({]|\\/(?![\\/*])))))|(0[xX][\\da-fA-F]+|0[oO][0-7]+|0[bB][01]+|(?:\\d*\\.\\d+|\\d+\\.?)(?:[eE][+-]?\\d+)?)|((?!\\d)(?:(?!\\s)[\$\\w\\u0080-\\uFFFF]|\\\\u[\\da-fA-F]{4}|\\\\u\\{[\\da-fA-F]+\\})+)|(--|\\+\\+|&&|\\|\\||=>|\\.{3}|(?:[+\\-\\/%&|^]|\\*{1,2}|<{1,2}|>{1,3}|!=?|={1,2})=?|[?~.,:;[\\](){}])|(\\s+)|(^\$|[\\s\\S])/g

exports.matchToToken = function(match) {
  var token = {type: \"invalid\", value: match[0]}
       if (match[ 1]) token.type = \"string\" , token.closed = !!(match[3] || match[4])
  else if (match[ 5]) token.type = \"comment\"
  else if (match[ 6]) token.type = \"comment\", token.closed = !!match[7]
  else if (match[ 8]) token.type = \"regex\"
  else if (match[ 9]) token.type = \"number\"
  else if (match[10]) token.type = \"name\"
  else if (match[11]) token.type = \"punctuator\"
  else if (match[12]) token.type = \"whitespace\"
  return token
}
", "node_modules/js-tokens/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/js-tokens/index.js");
    }
}
