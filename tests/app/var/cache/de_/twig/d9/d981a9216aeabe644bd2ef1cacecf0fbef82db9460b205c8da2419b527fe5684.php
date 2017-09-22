<?php

/* node_modules/ajv/lib/compile/ucs2length.js */
class __TwigTemplate_8248e680f053cdd9404c83d9bb3af520538a0a634c63ad57173bedb868fec676 extends Twig_Template
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
        $__internal_b4bc94b6f2427f46412ce7c42fb4bfe5fa0c53b1c51ef506c7200ab606d90baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bc94b6f2427f46412ce7c42fb4bfe5fa0c53b1c51ef506c7200ab606d90baf->enter($__internal_b4bc94b6f2427f46412ce7c42fb4bfe5fa0c53b1c51ef506c7200ab606d90baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/compile/ucs2length.js"));

        // line 1
        echo "'use strict';

// https://mathiasbynens.be/notes/javascript-encoding
// https://github.com/bestiejs/punycode.js - punycode.ucs2.decode
module.exports = function ucs2length(str) {
  var length = 0
    , len = str.length
    , pos = 0
    , value;
  while (pos < len) {
    length++;
    value = str.charCodeAt(pos++);
    if (value >= 0xD800 && value <= 0xDBFF && pos < len) {
      // high surrogate, and there is a next character
      value = str.charCodeAt(pos);
      if ((value & 0xFC00) == 0xDC00) pos++; // low surrogate
    }
  }
  return length;
};
";
        
        $__internal_b4bc94b6f2427f46412ce7c42fb4bfe5fa0c53b1c51ef506c7200ab606d90baf->leave($__internal_b4bc94b6f2427f46412ce7c42fb4bfe5fa0c53b1c51ef506c7200ab606d90baf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/compile/ucs2length.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// https://mathiasbynens.be/notes/javascript-encoding
// https://github.com/bestiejs/punycode.js - punycode.ucs2.decode
module.exports = function ucs2length(str) {
  var length = 0
    , len = str.length
    , pos = 0
    , value;
  while (pos < len) {
    length++;
    value = str.charCodeAt(pos++);
    if (value >= 0xD800 && value <= 0xDBFF && pos < len) {
      // high surrogate, and there is a next character
      value = str.charCodeAt(pos);
      if ((value & 0xFC00) == 0xDC00) pos++; // low surrogate
    }
  }
  return length;
};
", "node_modules/ajv/lib/compile/ucs2length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/compile/ucs2length.js");
    }
}
