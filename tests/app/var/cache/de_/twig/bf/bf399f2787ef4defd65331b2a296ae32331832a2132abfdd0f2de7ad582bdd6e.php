<?php

/* node_modules/es5-ext/math/hypot/shim.js */
class __TwigTemplate_f626ba4e1278e6b6646b821b400037e36741210c7bf7ad847c986039cb52ad2e extends Twig_Template
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
        $__internal_625cc8fce9b6b3ff16c2ded40fe91b2ca333a101c9ef85e38a7eab149c867a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625cc8fce9b6b3ff16c2ded40fe91b2ca333a101c9ef85e38a7eab149c867a9c->enter($__internal_625cc8fce9b6b3ff16c2ded40fe91b2ca333a101c9ef85e38a7eab149c867a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/hypot/shim.js"));

        // line 1
        echo "// Thanks for hints: https://github.com/paulmillr/es6-shim

\"use strict\";

var some = Array.prototype.some
  , abs = Math.abs
  , sqrt = Math.sqrt
  , compare = function (val1, val2) {
\treturn val2 - val1;
}
  , divide = function (value) {
\treturn value / this;
}
  , add = function (sum, number) {
\treturn sum + number * number;
};

// eslint-disable-next-line no-unused-vars
module.exports = function (val1, val2 /*, …valn*/) {
\tvar result, numbers;
\tif (!arguments.length) return 0;
\tsome.call(arguments, function (val) {
\t\tif (isNaN(val)) {
\t\t\tresult = NaN;
\t\t\treturn false;
\t\t}
\t\tif (!isFinite(val)) {
\t\t\tresult = Infinity;
\t\t\treturn true;
\t\t}
\t\tif (result !== undefined) return false;
\t\tval = Number(val);
\t\tif (val === 0) return false;
\t\tif (numbers) numbers.push(abs(val));
\t\telse numbers = [abs(val)];
\t\treturn false;
\t});
\tif (result !== undefined) return result;
\tif (!numbers) return 0;

\tnumbers.sort(compare);
\treturn numbers[0] * sqrt(numbers.map(divide, numbers[0]).reduce(add, 0));
};
";
        
        $__internal_625cc8fce9b6b3ff16c2ded40fe91b2ca333a101c9ef85e38a7eab149c867a9c->leave($__internal_625cc8fce9b6b3ff16c2ded40fe91b2ca333a101c9ef85e38a7eab149c867a9c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/hypot/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thanks for hints: https://github.com/paulmillr/es6-shim

\"use strict\";

var some = Array.prototype.some
  , abs = Math.abs
  , sqrt = Math.sqrt
  , compare = function (val1, val2) {
\treturn val2 - val1;
}
  , divide = function (value) {
\treturn value / this;
}
  , add = function (sum, number) {
\treturn sum + number * number;
};

// eslint-disable-next-line no-unused-vars
module.exports = function (val1, val2 /*, …valn*/) {
\tvar result, numbers;
\tif (!arguments.length) return 0;
\tsome.call(arguments, function (val) {
\t\tif (isNaN(val)) {
\t\t\tresult = NaN;
\t\t\treturn false;
\t\t}
\t\tif (!isFinite(val)) {
\t\t\tresult = Infinity;
\t\t\treturn true;
\t\t}
\t\tif (result !== undefined) return false;
\t\tval = Number(val);
\t\tif (val === 0) return false;
\t\tif (numbers) numbers.push(abs(val));
\t\telse numbers = [abs(val)];
\t\treturn false;
\t});
\tif (result !== undefined) return result;
\tif (!numbers) return 0;

\tnumbers.sort(compare);
\treturn numbers[0] * sqrt(numbers.map(divide, numbers[0]).reduce(add, 0));
};
", "node_modules/es5-ext/math/hypot/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/hypot/shim.js");
    }
}
