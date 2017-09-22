<?php

/* node_modules/webpack/lib/BasicEvaluatedExpression.js */
class __TwigTemplate_de8f81c6b8517606c1b7f8daab1ee7295a31556f5d30a3e10aa7cbee13c56f9c extends Twig_Template
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
        $__internal_1dc183ca8eb9c9717fd16dee264b29ebc1a98dfd467230878d282fb3e61cfe17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc183ca8eb9c9717fd16dee264b29ebc1a98dfd467230878d282fb3e61cfe17->enter($__internal_1dc183ca8eb9c9717fd16dee264b29ebc1a98dfd467230878d282fb3e61cfe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/BasicEvaluatedExpression.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/

\"use strict\";

class BasicEvaluatedExpression {

\tconstructor() {
\t\tthis.range = null;
\t}

\tisNull() {
\t\treturn !!this.null;
\t}

\tisString() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"string\");
\t}

\tisNumber() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"number\");
\t}

\tisBoolean() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"bool\");
\t}

\tisRegExp() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"regExp\");
\t}

\tisConditional() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"options\");
\t}

\tisArray() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"items\");
\t}

\tisConstArray() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"array\");
\t}

\tisIdentifier() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"identifier\");
\t}

\tisWrapped() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"prefix\") || Object.prototype.hasOwnProperty.call(this, \"postfix\");
\t}

\tisTemplateString() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"quasis\");
\t}

\tisTruthy() {
\t\treturn this.truthy;
\t}

\tisFalsy() {
\t\treturn this.falsy;
\t}

\tasBool() {
\t\tif(this.truthy) return true;
\t\telse if(this.falsy) return false;
\t\telse if(this.isBoolean()) return this.bool;
\t\telse if(this.isNull()) return false;
\t\telse if(this.isString()) return !!this.string;
\t\telse if(this.isNumber()) return !!this.number;
\t\telse if(this.isRegExp()) return true;
\t\telse if(this.isArray()) return true;
\t\telse if(this.isConstArray()) return true;
\t\telse if(this.isWrapped()) return this.prefix && this.prefix.asBool() || this.postfix && this.postfix.asBool() ? true : undefined;
\t\telse if(this.isTemplateString()) {
\t\t\tif(this.quasis.length === 1) return this.quasis[0].asBool();
\t\t\tfor(let i = 0; i < this.quasis.length; i++) {
\t\t\t\tif(this.quasis[i].asBool()) return true;
\t\t\t}
\t\t\t// can't tell if string will be empty without executing
\t\t}
\t\treturn undefined;
\t}

\tsetString(str) {
\t\tif(str === null)
\t\t\tdelete this.string;
\t\telse
\t\t\tthis.string = str;
\t\treturn this;
\t}

\tsetNull() {
\t\tthis.null = true;
\t\treturn this;
\t}

\tsetNumber(num) {
\t\tif(num === null)
\t\t\tdelete this.number;
\t\telse
\t\t\tthis.number = num;
\t\treturn this;
\t}

\tsetBoolean(bool) {
\t\tif(bool === null)
\t\t\tdelete this.bool;
\t\telse
\t\t\tthis.bool = bool;
\t\treturn this;
\t}

\tsetRegExp(regExp) {
\t\tif(regExp === null)
\t\t\tdelete this.regExp;
\t\telse
\t\t\tthis.regExp = regExp;
\t\treturn this;
\t}

\tsetIdentifier(identifier) {
\t\tif(identifier === null)
\t\t\tdelete this.identifier;
\t\telse
\t\t\tthis.identifier = identifier;
\t\treturn this;
\t}

\tsetWrapped(prefix, postfix) {
\t\tthis.prefix = prefix;
\t\tthis.postfix = postfix;
\t\treturn this;
\t}

\tunsetWrapped() {
\t\tdelete this.prefix;
\t\tdelete this.postfix;
\t\treturn this;
\t}

\tsetOptions(options) {
\t\tif(options === null)
\t\t\tdelete this.options;
\t\telse
\t\t\tthis.options = options;
\t\treturn this;
\t}

\tsetItems(items) {
\t\tif(items === null)
\t\t\tdelete this.items;
\t\telse
\t\t\tthis.items = items;
\t\treturn this;
\t}

\tsetArray(array) {
\t\tif(array === null)
\t\t\tdelete this.array;
\t\telse
\t\t\tthis.array = array;
\t\treturn this;
\t}

\tsetTemplateString(quasis) {
\t\tif(quasis === null)
\t\t\tdelete this.quasis;
\t\telse
\t\t\tthis.quasis = quasis;
\t\treturn this;
\t}

\tsetTruthy() {
\t\tthis.falsy = false;
\t\tthis.truthy = true;
\t\treturn this;
\t}

\tsetFalsy() {
\t\tthis.falsy = true;
\t\tthis.truthy = false;
\t\treturn this;
\t}

\taddOptions(options) {
\t\tif(!this.options) this.options = [];
\t\toptions.forEach(item => {
\t\t\tthis.options.push(item);
\t\t}, this);
\t\treturn this;
\t}

\tsetRange(range) {
\t\tthis.range = range;
\t\treturn this;
\t}

}

module.exports = BasicEvaluatedExpression;
";
        
        $__internal_1dc183ca8eb9c9717fd16dee264b29ebc1a98dfd467230878d282fb3e61cfe17->leave($__internal_1dc183ca8eb9c9717fd16dee264b29ebc1a98dfd467230878d282fb3e61cfe17_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/BasicEvaluatedExpression.js";
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

\"use strict\";

class BasicEvaluatedExpression {

\tconstructor() {
\t\tthis.range = null;
\t}

\tisNull() {
\t\treturn !!this.null;
\t}

\tisString() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"string\");
\t}

\tisNumber() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"number\");
\t}

\tisBoolean() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"bool\");
\t}

\tisRegExp() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"regExp\");
\t}

\tisConditional() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"options\");
\t}

\tisArray() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"items\");
\t}

\tisConstArray() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"array\");
\t}

\tisIdentifier() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"identifier\");
\t}

\tisWrapped() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"prefix\") || Object.prototype.hasOwnProperty.call(this, \"postfix\");
\t}

\tisTemplateString() {
\t\treturn Object.prototype.hasOwnProperty.call(this, \"quasis\");
\t}

\tisTruthy() {
\t\treturn this.truthy;
\t}

\tisFalsy() {
\t\treturn this.falsy;
\t}

\tasBool() {
\t\tif(this.truthy) return true;
\t\telse if(this.falsy) return false;
\t\telse if(this.isBoolean()) return this.bool;
\t\telse if(this.isNull()) return false;
\t\telse if(this.isString()) return !!this.string;
\t\telse if(this.isNumber()) return !!this.number;
\t\telse if(this.isRegExp()) return true;
\t\telse if(this.isArray()) return true;
\t\telse if(this.isConstArray()) return true;
\t\telse if(this.isWrapped()) return this.prefix && this.prefix.asBool() || this.postfix && this.postfix.asBool() ? true : undefined;
\t\telse if(this.isTemplateString()) {
\t\t\tif(this.quasis.length === 1) return this.quasis[0].asBool();
\t\t\tfor(let i = 0; i < this.quasis.length; i++) {
\t\t\t\tif(this.quasis[i].asBool()) return true;
\t\t\t}
\t\t\t// can't tell if string will be empty without executing
\t\t}
\t\treturn undefined;
\t}

\tsetString(str) {
\t\tif(str === null)
\t\t\tdelete this.string;
\t\telse
\t\t\tthis.string = str;
\t\treturn this;
\t}

\tsetNull() {
\t\tthis.null = true;
\t\treturn this;
\t}

\tsetNumber(num) {
\t\tif(num === null)
\t\t\tdelete this.number;
\t\telse
\t\t\tthis.number = num;
\t\treturn this;
\t}

\tsetBoolean(bool) {
\t\tif(bool === null)
\t\t\tdelete this.bool;
\t\telse
\t\t\tthis.bool = bool;
\t\treturn this;
\t}

\tsetRegExp(regExp) {
\t\tif(regExp === null)
\t\t\tdelete this.regExp;
\t\telse
\t\t\tthis.regExp = regExp;
\t\treturn this;
\t}

\tsetIdentifier(identifier) {
\t\tif(identifier === null)
\t\t\tdelete this.identifier;
\t\telse
\t\t\tthis.identifier = identifier;
\t\treturn this;
\t}

\tsetWrapped(prefix, postfix) {
\t\tthis.prefix = prefix;
\t\tthis.postfix = postfix;
\t\treturn this;
\t}

\tunsetWrapped() {
\t\tdelete this.prefix;
\t\tdelete this.postfix;
\t\treturn this;
\t}

\tsetOptions(options) {
\t\tif(options === null)
\t\t\tdelete this.options;
\t\telse
\t\t\tthis.options = options;
\t\treturn this;
\t}

\tsetItems(items) {
\t\tif(items === null)
\t\t\tdelete this.items;
\t\telse
\t\t\tthis.items = items;
\t\treturn this;
\t}

\tsetArray(array) {
\t\tif(array === null)
\t\t\tdelete this.array;
\t\telse
\t\t\tthis.array = array;
\t\treturn this;
\t}

\tsetTemplateString(quasis) {
\t\tif(quasis === null)
\t\t\tdelete this.quasis;
\t\telse
\t\t\tthis.quasis = quasis;
\t\treturn this;
\t}

\tsetTruthy() {
\t\tthis.falsy = false;
\t\tthis.truthy = true;
\t\treturn this;
\t}

\tsetFalsy() {
\t\tthis.falsy = true;
\t\tthis.truthy = false;
\t\treturn this;
\t}

\taddOptions(options) {
\t\tif(!this.options) this.options = [];
\t\toptions.forEach(item => {
\t\t\tthis.options.push(item);
\t\t}, this);
\t\treturn this;
\t}

\tsetRange(range) {
\t\tthis.range = range;
\t\treturn this;
\t}

}

module.exports = BasicEvaluatedExpression;
", "node_modules/webpack/lib/BasicEvaluatedExpression.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/BasicEvaluatedExpression.js");
    }
}
