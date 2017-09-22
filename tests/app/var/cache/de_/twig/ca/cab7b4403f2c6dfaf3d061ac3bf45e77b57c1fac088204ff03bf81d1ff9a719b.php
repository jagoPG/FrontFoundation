<?php

/* node_modules/uuid/v5.js */
class __TwigTemplate_a26f53c5d2476f136e76824d8293a9d117923d275575c803750a46f5cb6827aa extends Twig_Template
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
        $__internal_cdf01eb1142a5fbd003bf75d832e6750b5d82a592a83f758972743526475cc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf01eb1142a5fbd003bf75d832e6750b5d82a592a83f758972743526475cc9f->enter($__internal_cdf01eb1142a5fbd003bf75d832e6750b5d82a592a83f758972743526475cc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/v5.js"));

        // line 1
        echo "var sha1 = require('./lib/sha1-browser');
var bytesToUuid = require('./lib/bytesToUuid');

function uuidToBytes(uuid) {
  // Note: We assume we're being passed a valid uuid string
  var bytes = [];
  uuid.replace(/[a-fA-F0-9]{2}/g, function(hex) {
    bytes.push(parseInt(hex, 16));
  });

  return bytes;
}

function stringToBytes(str) {
  str = unescape(encodeURIComponent(str)); // UTF8 escape
  var bytes = new Array(str.length);
  for (var i = 0; i < str.length; i++) {
    bytes[i] = str.charCodeAt(i);
  }
  return bytes;
}

function v5(name, namespace, buf, offset) {
  if (typeof(name) == 'string') name = stringToBytes(name);
  if (typeof(namespace) == 'string') namespace = uuidToBytes(namespace);

  if (!Array.isArray(name)) throw TypeError('name must be an array of bytes');
  if (!Array.isArray(namespace) || namespace.length != 16) throw TypeError('namespace must be uuid string or an Array of 16 byte values');

  // Per 4.3
  var bytes = sha1(namespace.concat(name));
  bytes[6] = (bytes[6] & 0x0f) | 0x50;
  bytes[8] = (bytes[8] & 0x3f) | 0x80;

  return buf || bytesToUuid(bytes);
}

// Pre-defined namespaces, per Appendix C
v5.DNS = '6ba7b810-9dad-11d1-80b4-00c04fd430c8';
v5.URL = '6ba7b811-9dad-11d1-80b4-00c04fd430c8';

module.exports = v5;
";
        
        $__internal_cdf01eb1142a5fbd003bf75d832e6750b5d82a592a83f758972743526475cc9f->leave($__internal_cdf01eb1142a5fbd003bf75d832e6750b5d82a592a83f758972743526475cc9f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/v5.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var sha1 = require('./lib/sha1-browser');
var bytesToUuid = require('./lib/bytesToUuid');

function uuidToBytes(uuid) {
  // Note: We assume we're being passed a valid uuid string
  var bytes = [];
  uuid.replace(/[a-fA-F0-9]{2}/g, function(hex) {
    bytes.push(parseInt(hex, 16));
  });

  return bytes;
}

function stringToBytes(str) {
  str = unescape(encodeURIComponent(str)); // UTF8 escape
  var bytes = new Array(str.length);
  for (var i = 0; i < str.length; i++) {
    bytes[i] = str.charCodeAt(i);
  }
  return bytes;
}

function v5(name, namespace, buf, offset) {
  if (typeof(name) == 'string') name = stringToBytes(name);
  if (typeof(namespace) == 'string') namespace = uuidToBytes(namespace);

  if (!Array.isArray(name)) throw TypeError('name must be an array of bytes');
  if (!Array.isArray(namespace) || namespace.length != 16) throw TypeError('namespace must be uuid string or an Array of 16 byte values');

  // Per 4.3
  var bytes = sha1(namespace.concat(name));
  bytes[6] = (bytes[6] & 0x0f) | 0x50;
  bytes[8] = (bytes[8] & 0x3f) | 0x80;

  return buf || bytesToUuid(bytes);
}

// Pre-defined namespaces, per Appendix C
v5.DNS = '6ba7b810-9dad-11d1-80b4-00c04fd430c8';
v5.URL = '6ba7b811-9dad-11d1-80b4-00c04fd430c8';

module.exports = v5;
", "node_modules/uuid/v5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/v5.js");
    }
}
