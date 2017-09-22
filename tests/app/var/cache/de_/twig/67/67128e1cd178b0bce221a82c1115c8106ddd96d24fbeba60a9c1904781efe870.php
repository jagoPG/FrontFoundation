<?php

/* node_modules/uuid/lib/rng-browser.js */
class __TwigTemplate_002222b6cce996933e2eb3d5cfe45479f43964a34d051e0b6d95a175c793f1af extends Twig_Template
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
        $__internal_40600eaabdb8a729c858e518f7a8627a9d0f971f3c939e3808dfaf43cf11368c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40600eaabdb8a729c858e518f7a8627a9d0f971f3c939e3808dfaf43cf11368c->enter($__internal_40600eaabdb8a729c858e518f7a8627a9d0f971f3c939e3808dfaf43cf11368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/lib/rng-browser.js"));

        // line 1
        echo "// Unique ID creation requires a high quality random # generator.  In the
// browser this is a little complicated due to unknown quality of Math.random()
// and inconsistent support for the `crypto` API.  We do the best we can via
// feature-detection
var rng;

var crypto = global.crypto || global.msCrypto; // for IE 11
if (crypto && crypto.getRandomValues) {
  // WHATWG crypto RNG - http://wiki.whatwg.org/wiki/Crypto
  var rnds8 = new Uint8Array(16); // eslint-disable-line no-undef
  rng = function whatwgRNG() {
    crypto.getRandomValues(rnds8);
    return rnds8;
  };
}

if (!rng) {
  // Math.random()-based (RNG)
  //
  // If all else fails, use Math.random().  It's fast, but is of unspecified
  // quality.
  var rnds = new Array(16);
  rng = function() {
    for (var i = 0, r; i < 16; i++) {
      if ((i & 0x03) === 0) r = Math.random() * 0x100000000;
      rnds[i] = r >>> ((i & 0x03) << 3) & 0xff;
    }

    return rnds;
  };
}

module.exports = rng;
";
        
        $__internal_40600eaabdb8a729c858e518f7a8627a9d0f971f3c939e3808dfaf43cf11368c->leave($__internal_40600eaabdb8a729c858e518f7a8627a9d0f971f3c939e3808dfaf43cf11368c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/lib/rng-browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Unique ID creation requires a high quality random # generator.  In the
// browser this is a little complicated due to unknown quality of Math.random()
// and inconsistent support for the `crypto` API.  We do the best we can via
// feature-detection
var rng;

var crypto = global.crypto || global.msCrypto; // for IE 11
if (crypto && crypto.getRandomValues) {
  // WHATWG crypto RNG - http://wiki.whatwg.org/wiki/Crypto
  var rnds8 = new Uint8Array(16); // eslint-disable-line no-undef
  rng = function whatwgRNG() {
    crypto.getRandomValues(rnds8);
    return rnds8;
  };
}

if (!rng) {
  // Math.random()-based (RNG)
  //
  // If all else fails, use Math.random().  It's fast, but is of unspecified
  // quality.
  var rnds = new Array(16);
  rng = function() {
    for (var i = 0, r; i < 16; i++) {
      if ((i & 0x03) === 0) r = Math.random() * 0x100000000;
      rnds[i] = r >>> ((i & 0x03) << 3) & 0xff;
    }

    return rnds;
  };
}

module.exports = rng;
", "node_modules/uuid/lib/rng-browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/lib/rng-browser.js");
    }
}
