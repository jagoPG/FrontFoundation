<?php

/* node_modules/es-abstract/es2017.js */
class __TwigTemplate_8dc9ea10ca60fc532f4cddcbe4ddc8a783b3d1e459c11aaffed26be136208576 extends Twig_Template
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
        $__internal_5b27dc9ed49a4509e162c5a11f9904aae8d9c0058a8fb7b860a7e98fb1265918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b27dc9ed49a4509e162c5a11f9904aae8d9c0058a8fb7b860a7e98fb1265918->enter($__internal_5b27dc9ed49a4509e162c5a11f9904aae8d9c0058a8fb7b860a7e98fb1265918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-abstract/es2017.js"));

        // line 1
        echo "'use strict';

var ES2016 = require('./es2016');
var assign = require('./helpers/assign');

var ES2017 = assign(assign({}, ES2016), {
\tToIndex: function ToIndex(value) {
\t\tif (typeof value === 'undefined') {
\t\t\treturn 0;
\t\t}
\t\tvar integerIndex = this.ToInteger(value);
\t\tif (integerIndex < 0) {
\t\t\tthrow new RangeError('index must be >= 0');
\t\t}
\t\tvar index = this.ToLength(integerIndex);
\t\tif (!this.SameValueZero(integerIndex, index)) {
\t\t\tthrow new RangeError('index must be >= 0 and < 2 ** 53 - 1');
\t\t}
\t\treturn index;
\t}
});

delete ES2017.EnumerableOwnNames; // replaced with EnumerableOwnProperties

module.exports = ES2017;
";
        
        $__internal_5b27dc9ed49a4509e162c5a11f9904aae8d9c0058a8fb7b860a7e98fb1265918->leave($__internal_5b27dc9ed49a4509e162c5a11f9904aae8d9c0058a8fb7b860a7e98fb1265918_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-abstract/es2017.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ES2016 = require('./es2016');
var assign = require('./helpers/assign');

var ES2017 = assign(assign({}, ES2016), {
\tToIndex: function ToIndex(value) {
\t\tif (typeof value === 'undefined') {
\t\t\treturn 0;
\t\t}
\t\tvar integerIndex = this.ToInteger(value);
\t\tif (integerIndex < 0) {
\t\t\tthrow new RangeError('index must be >= 0');
\t\t}
\t\tvar index = this.ToLength(integerIndex);
\t\tif (!this.SameValueZero(integerIndex, index)) {
\t\t\tthrow new RangeError('index must be >= 0 and < 2 ** 53 - 1');
\t\t}
\t\treturn index;
\t}
});

delete ES2017.EnumerableOwnNames; // replaced with EnumerableOwnProperties

module.exports = ES2017;
", "node_modules/es-abstract/es2017.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-abstract/es2017.js");
    }
}
