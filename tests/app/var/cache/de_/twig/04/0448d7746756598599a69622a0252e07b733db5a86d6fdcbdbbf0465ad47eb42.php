<?php

/* node_modules/es5-ext/array/_sub-array-dummy.js */
class __TwigTemplate_7d0d735cd08b614241dd788316a34ec761950ac000464ebba155031799a50313 extends Twig_Template
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
        $__internal_67bbce754a0bfc915a8ca1b297e754ca8d9d7cf7bb6a95185b8b4e69242511c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bbce754a0bfc915a8ca1b297e754ca8d9d7cf7bb6a95185b8b4e69242511c2->enter($__internal_67bbce754a0bfc915a8ca1b297e754ca8d9d7cf7bb6a95185b8b4e69242511c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/_sub-array-dummy.js"));

        // line 1
        echo "\"use strict\";

var setPrototypeOf = require(\"../object/set-prototype-of\");

module.exports = (function () {
\tvar SubArray;

\tif (!setPrototypeOf) return null;
\tSubArray = function () {
 Array.apply(this, arguments);
};
\tsetPrototypeOf(SubArray, Array);
\tSubArray.prototype = Object.create(Array.prototype, {
\t\tconstructor: { value: SubArray,
enumerable: false,
writable: true,
\t\t\tconfigurable: true }
\t});
\treturn SubArray;
}());
";
        
        $__internal_67bbce754a0bfc915a8ca1b297e754ca8d9d7cf7bb6a95185b8b4e69242511c2->leave($__internal_67bbce754a0bfc915a8ca1b297e754ca8d9d7cf7bb6a95185b8b4e69242511c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/_sub-array-dummy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var setPrototypeOf = require(\"../object/set-prototype-of\");

module.exports = (function () {
\tvar SubArray;

\tif (!setPrototypeOf) return null;
\tSubArray = function () {
 Array.apply(this, arguments);
};
\tsetPrototypeOf(SubArray, Array);
\tSubArray.prototype = Object.create(Array.prototype, {
\t\tconstructor: { value: SubArray,
enumerable: false,
writable: true,
\t\t\tconfigurable: true }
\t});
\treturn SubArray;
}());
", "node_modules/es5-ext/array/_sub-array-dummy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/_sub-array-dummy.js");
    }
}
