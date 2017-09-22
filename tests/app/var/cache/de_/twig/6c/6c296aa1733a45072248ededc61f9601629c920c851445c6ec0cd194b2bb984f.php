<?php

/* node_modules/es5-ext/date/#/format.js */
class __TwigTemplate_77c66d7cf7d4724247615855a13c6b1327f6803907dde2949e1806e79331427c extends Twig_Template
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
        $__internal_8f727a47556f1bc9c7f43e3d70b66f4136efd6c5eca3681813c3e2f331bf020c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f727a47556f1bc9c7f43e3d70b66f4136efd6c5eca3681813c3e2f331bf020c->enter($__internal_8f727a47556f1bc9c7f43e3d70b66f4136efd6c5eca3681813c3e2f331bf020c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/#/format.js"));

        // line 1
        echo "/* eslint id-length: \"off\" */

\"use strict\";

var pad  = require(\"../../number/#/pad\")
  , date = require(\"../valid-date\")
  , format;

format = require(\"../../string/format-method\")({
\tY: function () {
\t\treturn String(this.getFullYear());
\t},
\ty: function () {
\t\treturn String(this.getFullYear()).slice(-2);
\t},
\tm: function () {
\t\treturn pad.call(this.getMonth() + 1, 2);
\t},
\td: function () {
\t\treturn pad.call(this.getDate(), 2);
\t},
\tH: function () {
\t\treturn pad.call(this.getHours(), 2);
\t},
\tM: function () {
\t\treturn pad.call(this.getMinutes(), 2);
\t},
\tS: function () {
\t\treturn pad.call(this.getSeconds(), 2);
\t},
\tL: function () {
\t\treturn pad.call(this.getMilliseconds(), 3);
\t}
});

module.exports = function (pattern) {
\treturn format.call(date(this), pattern);
};
";
        
        $__internal_8f727a47556f1bc9c7f43e3d70b66f4136efd6c5eca3681813c3e2f331bf020c->leave($__internal_8f727a47556f1bc9c7f43e3d70b66f4136efd6c5eca3681813c3e2f331bf020c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/#/format.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint id-length: \"off\" */

\"use strict\";

var pad  = require(\"../../number/#/pad\")
  , date = require(\"../valid-date\")
  , format;

format = require(\"../../string/format-method\")({
\tY: function () {
\t\treturn String(this.getFullYear());
\t},
\ty: function () {
\t\treturn String(this.getFullYear()).slice(-2);
\t},
\tm: function () {
\t\treturn pad.call(this.getMonth() + 1, 2);
\t},
\td: function () {
\t\treturn pad.call(this.getDate(), 2);
\t},
\tH: function () {
\t\treturn pad.call(this.getHours(), 2);
\t},
\tM: function () {
\t\treturn pad.call(this.getMinutes(), 2);
\t},
\tS: function () {
\t\treturn pad.call(this.getSeconds(), 2);
\t},
\tL: function () {
\t\treturn pad.call(this.getMilliseconds(), 3);
\t}
});

module.exports = function (pattern) {
\treturn format.call(date(this), pattern);
};
", "node_modules/es5-ext/date/#/format.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/#/format.js");
    }
}
