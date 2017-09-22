<?php

/* node_modules/es5-ext/object/copy-deep.js */
class __TwigTemplate_43228be2ab03225f6e88b45cde59d6f17e55195e5837a81b32f7fa390c964e9d extends Twig_Template
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
        $__internal_dadfad75154d03a0f7964d2c17277bde297b89151503da6a9af85baae7768bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadfad75154d03a0f7964d2c17277bde297b89151503da6a9af85baae7768bdb->enter($__internal_dadfad75154d03a0f7964d2c17277bde297b89151503da6a9af85baae7768bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/copy-deep.js"));

        // line 1
        echo "\"use strict\";

var forEach       = require(\"./for-each\")
  , isPlainObject = require(\"./is-plain-object\")
  , ensureValue   = require(\"./valid-value\")
  , isArray       = Array.isArray
  , copy
  , copyItem;

copyItem = function (value) {
\tvar index;
\tif (!isPlainObject(value) && !isArray(value)) return value;
\tindex = this[0].indexOf(value);
\tif (index === -1) return copy.call(this, value);
\treturn this[1][index];
};

copy = function (source) {
\tvar target = isArray(source) ? [] : {};
\tthis[0].push(source);
\tthis[1].push(target);
\tif (isArray(source)) {
\t\tsource.forEach(function (value, key) {
\t\t\ttarget[key] = copyItem.call(this, value, key);
\t\t}, this);
\t} else {
\t\tforEach(
\t\t\tsource,
\t\t\tfunction (value, key) {
\t\t\t\ttarget[key] = copyItem.call(this, value, key);
\t\t\t},
\t\t\tthis
\t\t);
\t}
\treturn target;
};

module.exports = function (source) {
\tvar obj = Object(ensureValue(source));
\tif (obj !== source) return obj;
\treturn copy.call([[], []], obj);
};
";
        
        $__internal_dadfad75154d03a0f7964d2c17277bde297b89151503da6a9af85baae7768bdb->leave($__internal_dadfad75154d03a0f7964d2c17277bde297b89151503da6a9af85baae7768bdb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/copy-deep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var forEach       = require(\"./for-each\")
  , isPlainObject = require(\"./is-plain-object\")
  , ensureValue   = require(\"./valid-value\")
  , isArray       = Array.isArray
  , copy
  , copyItem;

copyItem = function (value) {
\tvar index;
\tif (!isPlainObject(value) && !isArray(value)) return value;
\tindex = this[0].indexOf(value);
\tif (index === -1) return copy.call(this, value);
\treturn this[1][index];
};

copy = function (source) {
\tvar target = isArray(source) ? [] : {};
\tthis[0].push(source);
\tthis[1].push(target);
\tif (isArray(source)) {
\t\tsource.forEach(function (value, key) {
\t\t\ttarget[key] = copyItem.call(this, value, key);
\t\t}, this);
\t} else {
\t\tforEach(
\t\t\tsource,
\t\t\tfunction (value, key) {
\t\t\t\ttarget[key] = copyItem.call(this, value, key);
\t\t\t},
\t\t\tthis
\t\t);
\t}
\treturn target;
};

module.exports = function (source) {
\tvar obj = Object(ensureValue(source));
\tif (obj !== source) return obj;
\treturn copy.call([[], []], obj);
};
", "node_modules/es5-ext/object/copy-deep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/copy-deep.js");
    }
}
