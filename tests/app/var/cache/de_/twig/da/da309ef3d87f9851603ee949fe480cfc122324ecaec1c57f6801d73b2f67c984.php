<?php

/* node_modules/har-validator/node_modules/ajv/lib/compile/ucs2length.js */
class __TwigTemplate_9e7ef67787c8970fc2b7523da0ce3d45b8e6d36be0d8ae114ba3d151eaebd24b extends Twig_Template
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
        $__internal_d958e34e6bcbde12e60974b643b140caaa7ec94365962a71ac24048cc472334c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d958e34e6bcbde12e60974b643b140caaa7ec94365962a71ac24048cc472334c->enter($__internal_d958e34e6bcbde12e60974b643b140caaa7ec94365962a71ac24048cc472334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/compile/ucs2length.js"));

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
        
        $__internal_d958e34e6bcbde12e60974b643b140caaa7ec94365962a71ac24048cc472334c->leave($__internal_d958e34e6bcbde12e60974b643b140caaa7ec94365962a71ac24048cc472334c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/compile/ucs2length.js";
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
", "node_modules/har-validator/node_modules/ajv/lib/compile/ucs2length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/compile/ucs2length.js");
    }
}
