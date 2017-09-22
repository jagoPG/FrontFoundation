<?php

/* node_modules/is-date-object/index.js */
class __TwigTemplate_46488beffa6bc742786e8812bf4eaf6c78e555fb2cce90edb007eb3614e307fa extends Twig_Template
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
        $__internal_c597caf714be11c0a94034534074cad6edec48de76d83103f007ef72f4df0c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c597caf714be11c0a94034534074cad6edec48de76d83103f007ef72f4df0c95->enter($__internal_c597caf714be11c0a94034534074cad6edec48de76d83103f007ef72f4df0c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-date-object/index.js"));

        // line 1
        echo "'use strict';

var getDay = Date.prototype.getDay;
var tryDateObject = function tryDateObject(value) {
\ttry {
\t\tgetDay.call(value);
\t\treturn true;
\t} catch (e) {
\t\treturn false;
\t}
};

var toStr = Object.prototype.toString;
var dateClass = '[object Date]';
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

module.exports = function isDateObject(value) {
\tif (typeof value !== 'object' || value === null) { return false; }
\treturn hasToStringTag ? tryDateObject(value) : toStr.call(value) === dateClass;
};
";
        
        $__internal_c597caf714be11c0a94034534074cad6edec48de76d83103f007ef72f4df0c95->leave($__internal_c597caf714be11c0a94034534074cad6edec48de76d83103f007ef72f4df0c95_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-date-object/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var getDay = Date.prototype.getDay;
var tryDateObject = function tryDateObject(value) {
\ttry {
\t\tgetDay.call(value);
\t\treturn true;
\t} catch (e) {
\t\treturn false;
\t}
};

var toStr = Object.prototype.toString;
var dateClass = '[object Date]';
var hasToStringTag = typeof Symbol === 'function' && typeof Symbol.toStringTag === 'symbol';

module.exports = function isDateObject(value) {
\tif (typeof value !== 'object' || value === null) { return false; }
\treturn hasToStringTag ? tryDateObject(value) : toStr.call(value) === dateClass;
};
", "node_modules/is-date-object/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-date-object/index.js");
    }
}
