<?php

/* node_modules/fsevents/node_modules/ajv/lib/compile/ucs2length.js */
class __TwigTemplate_5a4b3d979341ead55cf0e51fad53def3ecb3a3c1a01afc08209dd86580af12be extends Twig_Template
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
        $__internal_9b1947cf8da17a2226a7feb482a512108bf8752e54a4ac771fc3c01b28b9f315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1947cf8da17a2226a7feb482a512108bf8752e54a4ac771fc3c01b28b9f315->enter($__internal_9b1947cf8da17a2226a7feb482a512108bf8752e54a4ac771fc3c01b28b9f315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/compile/ucs2length.js"));

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
        
        $__internal_9b1947cf8da17a2226a7feb482a512108bf8752e54a4ac771fc3c01b28b9f315->leave($__internal_9b1947cf8da17a2226a7feb482a512108bf8752e54a4ac771fc3c01b28b9f315_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/compile/ucs2length.js";
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
", "node_modules/fsevents/node_modules/ajv/lib/compile/ucs2length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/compile/ucs2length.js");
    }
}
