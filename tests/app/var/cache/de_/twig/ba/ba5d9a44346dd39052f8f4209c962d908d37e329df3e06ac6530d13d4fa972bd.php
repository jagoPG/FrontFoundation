<?php

/* node_modules/pako/lib/zlib/adler32.js */
class __TwigTemplate_39caa992e7b4970faf9516d90857f4e05bd9debdc3b9aa7c7aab9d3440aca502 extends Twig_Template
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
        $__internal_bf6037dd3a5af2d9396e42f26c85460e38b459714fdc094d098122785f18ff13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6037dd3a5af2d9396e42f26c85460e38b459714fdc094d098122785f18ff13->enter($__internal_bf6037dd3a5af2d9396e42f26c85460e38b459714fdc094d098122785f18ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pako/lib/zlib/adler32.js"));

        // line 1
        echo "'use strict';

// Note: adler32 takes 12% for level 0 and 2% for level 6.
// It doesn't worth to make additional optimizationa as in original.
// Small size is preferable.

function adler32(adler, buf, len, pos) {
  var s1 = (adler & 0xffff) |0,
      s2 = ((adler >>> 16) & 0xffff) |0,
      n = 0;

  while (len !== 0) {
    // Set limit ~ twice less than 5552, to keep
    // s2 in 31-bits, because we force signed ints.
    // in other case %= will fail.
    n = len > 2000 ? 2000 : len;
    len -= n;

    do {
      s1 = (s1 + buf[pos++]) |0;
      s2 = (s2 + s1) |0;
    } while (--n);

    s1 %= 65521;
    s2 %= 65521;
  }

  return (s1 | (s2 << 16)) |0;
}


module.exports = adler32;
";
        
        $__internal_bf6037dd3a5af2d9396e42f26c85460e38b459714fdc094d098122785f18ff13->leave($__internal_bf6037dd3a5af2d9396e42f26c85460e38b459714fdc094d098122785f18ff13_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pako/lib/zlib/adler32.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// Note: adler32 takes 12% for level 0 and 2% for level 6.
// It doesn't worth to make additional optimizationa as in original.
// Small size is preferable.

function adler32(adler, buf, len, pos) {
  var s1 = (adler & 0xffff) |0,
      s2 = ((adler >>> 16) & 0xffff) |0,
      n = 0;

  while (len !== 0) {
    // Set limit ~ twice less than 5552, to keep
    // s2 in 31-bits, because we force signed ints.
    // in other case %= will fail.
    n = len > 2000 ? 2000 : len;
    len -= n;

    do {
      s1 = (s1 + buf[pos++]) |0;
      s2 = (s2 + s1) |0;
    } while (--n);

    s1 %= 65521;
    s2 %= 65521;
  }

  return (s1 | (s2 << 16)) |0;
}


module.exports = adler32;
", "node_modules/pako/lib/zlib/adler32.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pako/lib/zlib/adler32.js");
    }
}
