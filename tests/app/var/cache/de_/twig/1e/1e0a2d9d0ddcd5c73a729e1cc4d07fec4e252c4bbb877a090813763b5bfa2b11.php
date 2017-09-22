<?php

/* node_modules/bn.js/util/genCombMulTo10.js */
class __TwigTemplate_438d377d769271012f509b01f5d9dcb8be4345959becc1ad45659f9110c46748 extends Twig_Template
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
        $__internal_d4b344cbb03a4140ec89cc75374bcadf8097b81902e6809d68ca677734aa524a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b344cbb03a4140ec89cc75374bcadf8097b81902e6809d68ca677734aa524a->enter($__internal_d4b344cbb03a4140ec89cc75374bcadf8097b81902e6809d68ca677734aa524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/bn.js/util/genCombMulTo10.js"));

        // line 1
        echo "'use strict';

function genCombMulTo (alen, blen) {
  var len = alen + blen - 1;
  var src = [
    'var a = self.words;',
    'var b = num.words;',
    'var o = out.words;',
    'var c = 0;',
    'var lo;',
    'var mid;',
    'var hi;'
  ];
  for (var i = 0; i < alen; i++) {
    src.push('var a' + i + ' = a[' + i + '] | 0;');
    src.push('var al' + i + ' = a' + i + ' & 0x1fff;');
    src.push('var ah' + i + ' = a' + i + ' >>> 13;');
  }
  for (i = 0; i < blen; i++) {
    src.push('var b' + i + ' = b[' + i + '] | 0;');
    src.push('var bl' + i + ' = b' + i + ' & 0x1fff;');
    src.push('var bh' + i + ' = b' + i + ' >>> 13;');
  }
  src.push('');
  src.push('out.negative = self.negative ^ num.negative;');
  src.push('out.length = ' + len + ';');

  for (var k = 0; k < len; k++) {
    var minJ = Math.max(0, k - alen + 1);
    var maxJ = Math.min(k, blen - 1);

    src.push('\\/* k = ' + k + ' *\\/');
    src.push('lo = Math.imul(al' + (k - minJ) + ', bl' + minJ + ');');
    src.push('mid = Math.imul(al' + (k - minJ) + ', bh' + minJ + ');');
    src.push(
        'mid = (mid + Math.imul(ah' + (k - minJ) + ', bl' + minJ + ')) | 0;');
    src.push('hi = Math.imul(ah' + (k - minJ) + ', bh' + minJ + ');');

    for (var j = minJ + 1; j <= maxJ; j++) {
      i = k - j;

      src.push('lo = (lo + Math.imul(al' + i + ', bl' + j + ')) | 0;');
      src.push('mid = (mid + Math.imul(al' + i + ', bh' + j + ')) | 0;');
      src.push('mid = (mid + Math.imul(ah' + i + ', bl' + j + ')) | 0;');
      src.push('hi = (hi + Math.imul(ah' + i + ', bh' + j + ')) | 0;');
    }

    src.push('var w' + k + ' = (((c + lo) | 0) + ((mid & 0x1fff) << 13)) | 0;');
    src.push('c = (((hi + (mid >>> 13)) | 0) + (w' + k + ' >>> 26)) | 0;');
    src.push('w' + k + ' &= 0x3ffffff;');
  }
  // Store in separate step for better memory access
  for (k = 0; k < len; k++) {
    src.push('o[' + k + '] = w' + k + ';');
  }
  src.push('if (c !== 0) {',
           '  o[' + k + '] = c;',
           '  out.length++;',
           '}',
           'return out;');

  return src.join('\\n');
}

console.log(genCombMulTo(10, 10));
";
        
        $__internal_d4b344cbb03a4140ec89cc75374bcadf8097b81902e6809d68ca677734aa524a->leave($__internal_d4b344cbb03a4140ec89cc75374bcadf8097b81902e6809d68ca677734aa524a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/bn.js/util/genCombMulTo10.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

function genCombMulTo (alen, blen) {
  var len = alen + blen - 1;
  var src = [
    'var a = self.words;',
    'var b = num.words;',
    'var o = out.words;',
    'var c = 0;',
    'var lo;',
    'var mid;',
    'var hi;'
  ];
  for (var i = 0; i < alen; i++) {
    src.push('var a' + i + ' = a[' + i + '] | 0;');
    src.push('var al' + i + ' = a' + i + ' & 0x1fff;');
    src.push('var ah' + i + ' = a' + i + ' >>> 13;');
  }
  for (i = 0; i < blen; i++) {
    src.push('var b' + i + ' = b[' + i + '] | 0;');
    src.push('var bl' + i + ' = b' + i + ' & 0x1fff;');
    src.push('var bh' + i + ' = b' + i + ' >>> 13;');
  }
  src.push('');
  src.push('out.negative = self.negative ^ num.negative;');
  src.push('out.length = ' + len + ';');

  for (var k = 0; k < len; k++) {
    var minJ = Math.max(0, k - alen + 1);
    var maxJ = Math.min(k, blen - 1);

    src.push('\\/* k = ' + k + ' *\\/');
    src.push('lo = Math.imul(al' + (k - minJ) + ', bl' + minJ + ');');
    src.push('mid = Math.imul(al' + (k - minJ) + ', bh' + minJ + ');');
    src.push(
        'mid = (mid + Math.imul(ah' + (k - minJ) + ', bl' + minJ + ')) | 0;');
    src.push('hi = Math.imul(ah' + (k - minJ) + ', bh' + minJ + ');');

    for (var j = minJ + 1; j <= maxJ; j++) {
      i = k - j;

      src.push('lo = (lo + Math.imul(al' + i + ', bl' + j + ')) | 0;');
      src.push('mid = (mid + Math.imul(al' + i + ', bh' + j + ')) | 0;');
      src.push('mid = (mid + Math.imul(ah' + i + ', bl' + j + ')) | 0;');
      src.push('hi = (hi + Math.imul(ah' + i + ', bh' + j + ')) | 0;');
    }

    src.push('var w' + k + ' = (((c + lo) | 0) + ((mid & 0x1fff) << 13)) | 0;');
    src.push('c = (((hi + (mid >>> 13)) | 0) + (w' + k + ' >>> 26)) | 0;');
    src.push('w' + k + ' &= 0x3ffffff;');
  }
  // Store in separate step for better memory access
  for (k = 0; k < len; k++) {
    src.push('o[' + k + '] = w' + k + ';');
  }
  src.push('if (c !== 0) {',
           '  o[' + k + '] = c;',
           '  out.length++;',
           '}',
           'return out;');

  return src.join('\\n');
}

console.log(genCombMulTo(10, 10));
", "node_modules/bn.js/util/genCombMulTo10.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/bn.js/util/genCombMulTo10.js");
    }
}
