<?php

/* node_modules/enhanced-resolve/lib/forEachBail.js */
class __TwigTemplate_6ee3744cfdfbc5d1f3b7e28c1df72d56f9e891fe89f6cba18ed1f6ea82b6265f extends Twig_Template
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
        $__internal_e7705ffd8fc1d447086b6b9054e8b84be103c9f50254d73f33492761419ba1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7705ffd8fc1d447086b6b9054e8b84be103c9f50254d73f33492761419ba1ca->enter($__internal_e7705ffd8fc1d447086b6b9054e8b84be103c9f50254d73f33492761419ba1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/forEachBail.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function forEachBail(array, iterator, callback) {
\tif(array.length === 0) return callback();
\tvar currentPos = array.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < array.length; i++) {
\t\tvar itCb = createIteratorCallback(i);
\t\titerator(array[i], itCb);
\t\tif(currentPos === 0) break;
\t}

\tfunction createIteratorCallback(i) {
\t\treturn function() {
\t\t\tif(i >= currentPos) return; // ignore
\t\t\tvar args = Array.prototype.slice.call(arguments);
\t\t\tdone.push(i);
\t\t\tif(args.length > 0) {
\t\t\t\tcurrentPos = i + 1;
\t\t\t\tdone = done.filter(function(item) {
\t\t\t\t\treturn item <= i;
\t\t\t\t});
\t\t\t\tcurrentResult = args;
\t\t\t}
\t\t\tif(done.length === currentPos) {
\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\tcurrentPos = 0;
\t\t\t}
\t\t};
\t}
};

module.exports.withIndex = function forEachBailWithIndex(array, iterator, callback) {
\tif(array.length === 0) return callback();
\tvar currentPos = array.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < array.length; i++) {
\t\tvar itCb = createIteratorCallback(i);
\t\titerator(array[i], i, itCb);
\t\tif(currentPos === 0) break;
\t}

\tfunction createIteratorCallback(i) {
\t\treturn function() {
\t\t\tif(i >= currentPos) return; // ignore
\t\t\tvar args = Array.prototype.slice.call(arguments);
\t\t\tdone.push(i);
\t\t\tif(args.length > 0) {
\t\t\t\tcurrentPos = i + 1;
\t\t\t\tdone = done.filter(function(item) {
\t\t\t\t\treturn item <= i;
\t\t\t\t});
\t\t\t\tcurrentResult = args;
\t\t\t}
\t\t\tif(done.length === currentPos) {
\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\tcurrentPos = 0;
\t\t\t}
\t\t};
\t}
};
";
        
        $__internal_e7705ffd8fc1d447086b6b9054e8b84be103c9f50254d73f33492761419ba1ca->leave($__internal_e7705ffd8fc1d447086b6b9054e8b84be103c9f50254d73f33492761419ba1ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/forEachBail.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
module.exports = function forEachBail(array, iterator, callback) {
\tif(array.length === 0) return callback();
\tvar currentPos = array.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < array.length; i++) {
\t\tvar itCb = createIteratorCallback(i);
\t\titerator(array[i], itCb);
\t\tif(currentPos === 0) break;
\t}

\tfunction createIteratorCallback(i) {
\t\treturn function() {
\t\t\tif(i >= currentPos) return; // ignore
\t\t\tvar args = Array.prototype.slice.call(arguments);
\t\t\tdone.push(i);
\t\t\tif(args.length > 0) {
\t\t\t\tcurrentPos = i + 1;
\t\t\t\tdone = done.filter(function(item) {
\t\t\t\t\treturn item <= i;
\t\t\t\t});
\t\t\t\tcurrentResult = args;
\t\t\t}
\t\t\tif(done.length === currentPos) {
\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\tcurrentPos = 0;
\t\t\t}
\t\t};
\t}
};

module.exports.withIndex = function forEachBailWithIndex(array, iterator, callback) {
\tif(array.length === 0) return callback();
\tvar currentPos = array.length;
\tvar currentResult;
\tvar done = [];
\tfor(var i = 0; i < array.length; i++) {
\t\tvar itCb = createIteratorCallback(i);
\t\titerator(array[i], i, itCb);
\t\tif(currentPos === 0) break;
\t}

\tfunction createIteratorCallback(i) {
\t\treturn function() {
\t\t\tif(i >= currentPos) return; // ignore
\t\t\tvar args = Array.prototype.slice.call(arguments);
\t\t\tdone.push(i);
\t\t\tif(args.length > 0) {
\t\t\t\tcurrentPos = i + 1;
\t\t\t\tdone = done.filter(function(item) {
\t\t\t\t\treturn item <= i;
\t\t\t\t});
\t\t\t\tcurrentResult = args;
\t\t\t}
\t\t\tif(done.length === currentPos) {
\t\t\t\tcallback.apply(null, currentResult);
\t\t\t\tcurrentPos = 0;
\t\t\t}
\t\t};
\t}
};
", "node_modules/enhanced-resolve/lib/forEachBail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/forEachBail.js");
    }
}
