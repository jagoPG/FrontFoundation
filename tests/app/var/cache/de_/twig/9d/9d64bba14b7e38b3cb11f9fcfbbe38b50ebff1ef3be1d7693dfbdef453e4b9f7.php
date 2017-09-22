<?php

/* node_modules/pako/lib/zlib/crc32.js */
class __TwigTemplate_68856d4aa2e1a210bb16bae40be21f5fbb983537d0f61d56b0aa0fbb586b7737 extends Twig_Template
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
        $__internal_6e5dec98899a60ebf09f28fcc6ac00acc08b1bbb27a3afb23562281bdfb738b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5dec98899a60ebf09f28fcc6ac00acc08b1bbb27a3afb23562281bdfb738b6->enter($__internal_6e5dec98899a60ebf09f28fcc6ac00acc08b1bbb27a3afb23562281bdfb738b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pako/lib/zlib/crc32.js"));

        // line 1
        echo "'use strict';

// Note: we can't get significant speed boost here.
// So write code to minimize size - no pregenerated tables
// and array tools dependencies.


// Use ordinary array, since untyped makes no boost here
function makeTable() {
  var c, table = [];

  for (var n = 0; n < 256; n++) {
    c = n;
    for (var k = 0; k < 8; k++) {
      c = ((c & 1) ? (0xEDB88320 ^ (c >>> 1)) : (c >>> 1));
    }
    table[n] = c;
  }

  return table;
}

// Create table on load. Just 255 signed longs. Not a problem.
var crcTable = makeTable();


function crc32(crc, buf, len, pos) {
  var t = crcTable,
      end = pos + len;

  crc ^= -1;

  for (var i = pos; i < end; i++) {
    crc = (crc >>> 8) ^ t[(crc ^ buf[i]) & 0xFF];
  }

  return (crc ^ (-1)); // >>> 0;
}


module.exports = crc32;
";
        
        $__internal_6e5dec98899a60ebf09f28fcc6ac00acc08b1bbb27a3afb23562281bdfb738b6->leave($__internal_6e5dec98899a60ebf09f28fcc6ac00acc08b1bbb27a3afb23562281bdfb738b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pako/lib/zlib/crc32.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// Note: we can't get significant speed boost here.
// So write code to minimize size - no pregenerated tables
// and array tools dependencies.


// Use ordinary array, since untyped makes no boost here
function makeTable() {
  var c, table = [];

  for (var n = 0; n < 256; n++) {
    c = n;
    for (var k = 0; k < 8; k++) {
      c = ((c & 1) ? (0xEDB88320 ^ (c >>> 1)) : (c >>> 1));
    }
    table[n] = c;
  }

  return table;
}

// Create table on load. Just 255 signed longs. Not a problem.
var crcTable = makeTable();


function crc32(crc, buf, len, pos) {
  var t = crcTable,
      end = pos + len;

  crc ^= -1;

  for (var i = pos; i < end; i++) {
    crc = (crc >>> 8) ^ t[(crc ^ buf[i]) & 0xFF];
  }

  return (crc ^ (-1)); // >>> 0;
}


module.exports = crc32;
", "node_modules/pako/lib/zlib/crc32.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pako/lib/zlib/crc32.js");
    }
}
