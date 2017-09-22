<?php

/* node_modules/core-js/modules/es6.date.to-string.js */
class __TwigTemplate_bbf7de1b81bf32a5f0f350bd9f9f00b6f7734fd2945bde47dd49379420447a3e extends Twig_Template
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
        $__internal_dbe2fab479098e1c8c5148e97442de46189018f888c6e286885296fb14b4c374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe2fab479098e1c8c5148e97442de46189018f888c6e286885296fb14b4c374->enter($__internal_dbe2fab479098e1c8c5148e97442de46189018f888c6e286885296fb14b4c374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.date.to-string.js"));

        // line 1
        echo "var DateProto = Date.prototype;
var INVALID_DATE = 'Invalid Date';
var TO_STRING = 'toString';
var \$toString = DateProto[TO_STRING];
var getTime = DateProto.getTime;
if (new Date(NaN) + '' != INVALID_DATE) {
  require('./_redefine')(DateProto, TO_STRING, function toString() {
    var value = getTime.call(this);
    // eslint-disable-next-line no-self-compare
    return value === value ? \$toString.call(this) : INVALID_DATE;
  });
}
";
        
        $__internal_dbe2fab479098e1c8c5148e97442de46189018f888c6e286885296fb14b4c374->leave($__internal_dbe2fab479098e1c8c5148e97442de46189018f888c6e286885296fb14b4c374_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.date.to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var DateProto = Date.prototype;
var INVALID_DATE = 'Invalid Date';
var TO_STRING = 'toString';
var \$toString = DateProto[TO_STRING];
var getTime = DateProto.getTime;
if (new Date(NaN) + '' != INVALID_DATE) {
  require('./_redefine')(DateProto, TO_STRING, function toString() {
    var value = getTime.call(this);
    // eslint-disable-next-line no-self-compare
    return value === value ? \$toString.call(this) : INVALID_DATE;
  });
}
", "node_modules/core-js/modules/es6.date.to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.date.to-string.js");
    }
}
