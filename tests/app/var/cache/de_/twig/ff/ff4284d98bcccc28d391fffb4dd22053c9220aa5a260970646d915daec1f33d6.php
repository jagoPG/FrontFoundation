<?php

/* node_modules/core-js/modules/es6.string.from-code-point.js */
class __TwigTemplate_a86d0530d00c3071154114073acf0c251337c423c09ce06e00abba5d71dd48d9 extends Twig_Template
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
        $__internal_290546b23502f5c5325152f39c5902577dbaf49fe35e34769e4742db8e9d6c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290546b23502f5c5325152f39c5902577dbaf49fe35e34769e4742db8e9d6c5d->enter($__internal_290546b23502f5c5325152f39c5902577dbaf49fe35e34769e4742db8e9d6c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.from-code-point.js"));

        // line 1
        echo "var \$export = require('./_export');
var toAbsoluteIndex = require('./_to-absolute-index');
var fromCharCode = String.fromCharCode;
var \$fromCodePoint = String.fromCodePoint;

// length should be 1, old FF problem
\$export(\$export.S + \$export.F * (!!\$fromCodePoint && \$fromCodePoint.length != 1), 'String', {
  // 21.1.2.2 String.fromCodePoint(...codePoints)
  fromCodePoint: function fromCodePoint(x) { // eslint-disable-line no-unused-vars
    var res = [];
    var aLen = arguments.length;
    var i = 0;
    var code;
    while (aLen > i) {
      code = +arguments[i++];
      if (toAbsoluteIndex(code, 0x10ffff) !== code) throw RangeError(code + ' is not a valid code point');
      res.push(code < 0x10000
        ? fromCharCode(code)
        : fromCharCode(((code -= 0x10000) >> 10) + 0xd800, code % 0x400 + 0xdc00)
      );
    } return res.join('');
  }
});
";
        
        $__internal_290546b23502f5c5325152f39c5902577dbaf49fe35e34769e4742db8e9d6c5d->leave($__internal_290546b23502f5c5325152f39c5902577dbaf49fe35e34769e4742db8e9d6c5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.from-code-point.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var toAbsoluteIndex = require('./_to-absolute-index');
var fromCharCode = String.fromCharCode;
var \$fromCodePoint = String.fromCodePoint;

// length should be 1, old FF problem
\$export(\$export.S + \$export.F * (!!\$fromCodePoint && \$fromCodePoint.length != 1), 'String', {
  // 21.1.2.2 String.fromCodePoint(...codePoints)
  fromCodePoint: function fromCodePoint(x) { // eslint-disable-line no-unused-vars
    var res = [];
    var aLen = arguments.length;
    var i = 0;
    var code;
    while (aLen > i) {
      code = +arguments[i++];
      if (toAbsoluteIndex(code, 0x10ffff) !== code) throw RangeError(code + ' is not a valid code point');
      res.push(code < 0x10000
        ? fromCharCode(code)
        : fromCharCode(((code -= 0x10000) >> 10) + 0xd800, code % 0x400 + 0xdc00)
      );
    } return res.join('');
  }
});
", "node_modules/core-js/modules/es6.string.from-code-point.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.from-code-point.js");
    }
}
