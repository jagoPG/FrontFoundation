<?php

/* node_modules/enhanced-resolve/lib/concord.js */
class __TwigTemplate_1d883a12b0cc3d8abedb8ca3dfa0f5ccb898a3ee91f70a1c80aa142ae68217eb extends Twig_Template
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
        $__internal_485e49a2aaa62c6014d1aef460da28d4392a873253dabb948f96d54fa28dcdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485e49a2aaa62c6014d1aef460da28d4392a873253dabb948f96d54fa28dcdef->enter($__internal_485e49a2aaa62c6014d1aef460da28d4392a873253dabb948f96d54fa28dcdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/concord.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var globToRegExp = require(\"./globToRegExp\").globToRegExp;

function parseType(type) {
\tvar items = type.split(\"+\");
\tvar t = items.shift();
\treturn {
\t\ttype: t === \"*\" ? null : t,
\t\tfeatures: items
\t};
}

function isTypeMatched(baseType, testedType) {
\tif(typeof baseType === \"string\") baseType = parseType(baseType);
\tif(typeof testedType === \"string\") testedType = parseType(testedType);
\tif(testedType.type && testedType.type !== baseType.type) return false;
\treturn testedType.features.every(function(requiredFeature) {
\t\treturn baseType.features.indexOf(requiredFeature) >= 0;
\t});
}

function isResourceTypeMatched(baseType, testedType) {
\tbaseType = baseType.split(\"/\");
\ttestedType = testedType.split(\"/\");
\tif(baseType.length !== testedType.length) return false;
\tfor(var i = 0; i < baseType.length; i++) {
\t\tif(!isTypeMatched(baseType[i], testedType[i]))
\t\t\treturn false;
\t}
\treturn true;
}

function isResourceTypeSupported(context, type) {
\treturn context.supportedResourceTypes && context.supportedResourceTypes.some(function(supportedType) {
\t\treturn isResourceTypeMatched(supportedType, type);
\t});
}

function isEnvironment(context, env) {
\treturn context.environments && context.environments.every(function(environment) {
\t\treturn isTypeMatched(environment, env);
\t});
}

var globCache = {};

function getGlobRegExp(glob) {
\tvar regExp = globCache[glob] || (globCache[glob] = globToRegExp(glob));
\treturn regExp;
}

function matchGlob(glob, relativePath) {
\tvar regExp = getGlobRegExp(glob);
\treturn regExp.exec(relativePath);
}

function isGlobMatched(glob, relativePath) {
\treturn !!matchGlob(glob, relativePath);
}

function isConditionMatched(context, condition) {
\tvar items = condition.split(\"|\");
\treturn items.some(function testFn(item) {
\t\titem = item.trim();
\t\tvar inverted = /^!/.test(item);
\t\tif(inverted) return !testFn(item.substr(1));
\t\tif(/^[a-z]+:/.test(item)) {
\t\t\t// match named condition
\t\t\tvar match = /^([a-z]+):\\s*/.exec(item);
\t\t\tvar value = item.substr(match[0].length);
\t\t\tvar name = match[1];
\t\t\tswitch(name) {
\t\t\t\tcase \"referrer\":
\t\t\t\t\treturn isGlobMatched(value, context.referrer);
\t\t\t\tdefault:
\t\t\t\t\treturn false;
\t\t\t}
\t\t} else if(item.indexOf(\"/\") >= 0) {
\t\t\t// match supported type
\t\t\treturn isResourceTypeSupported(context, item);
\t\t} else {
\t\t\t// match environment
\t\t\treturn isEnvironment(context, item);
\t\t}
\t});
}

function isKeyMatched(context, key) {
\twhile(true) { //eslint-disable-line
\t\tvar match = /^\\[([^\\]]+)\\]\\s*/.exec(key);
\t\tif(!match) return key;
\t\tkey = key.substr(match[0].length);
\t\tvar condition = match[1];
\t\tif(!isConditionMatched(context, condition)) {
\t\t\treturn false;
\t\t}
\t}
}

function getField(context, configuration, field) {
\tvar value;
\tObject.keys(configuration).forEach(function(key) {
\t\tvar pureKey = isKeyMatched(context, key);
\t\tif(pureKey === field) {
\t\t\tvalue = configuration[key];
\t\t}
\t});
\treturn value;
}

function getMain(context, configuration) {
\treturn getField(context, configuration, \"main\");
}

function getExtensions(context, configuration) {
\treturn getField(context, configuration, \"extensions\");
}

function matchModule(context, configuration, request) {
\tvar modulesField = getField(context, configuration, \"modules\");
\tif(!modulesField) return request;
\tvar newRequest = request;
\tvar keys = Object.keys(modulesField);
\tvar iteration = 0;
\tfor(var i = 0; i < keys.length; i++) {
\t\tvar key = keys[i];
\t\tvar pureKey = isKeyMatched(context, key);
\t\tvar match = matchGlob(pureKey, newRequest);
\t\tif(match) {
\t\t\tvar value = modulesField[key];
\t\t\tif(typeof value !== \"string\") {
\t\t\t\treturn value;
\t\t\t} else if(/^\\(.+\\)\$/.test(pureKey)) {
\t\t\t\tnewRequest = newRequest.replace(getGlobRegExp(pureKey), value);
\t\t\t} else {
\t\t\t\tvar index = 1;
\t\t\t\tnewRequest = value.replace(/(\\/?\\*)?\\*/g, replaceMatcher);
\t\t\t}
\t\t\ti = -1;
\t\t\tif(iteration++ > keys.length) {
\t\t\t\tthrow new Error(\"Request '\" + request + \"' matches recursively\");
\t\t\t}
\t\t}
\t}
\treturn newRequest;

\tfunction replaceMatcher(find) {
\t\tswitch(find) {
\t\t\tcase \"/**\":
\t\t\t\tvar m = match[index++];
\t\t\t\treturn m ? \"/\" + m : \"\";
\t\t\tcase \"**\":
\t\t\tcase \"*\":
\t\t\t\treturn match[index++];
\t\t}
\t}
}

function matchType(context, configuration, relativePath) {
\tvar typesField = getField(context, configuration, \"types\");
\tif(!typesField) return undefined;
\tvar type;
\tObject.keys(typesField).forEach(function(key) {
\t\tvar pureKey = isKeyMatched(context, key);
\t\tif(isGlobMatched(pureKey, relativePath)) {
\t\t\tvar value = typesField[key];
\t\t\tif(!type && /\\/\\*\$/.test(value))
\t\t\t\tthrow new Error(\"value ('\" + value + \"') of key '\" + key + \"' contains '*', but there is no previous value defined\");
\t\t\ttype = value.replace(/\\/\\*\$/, \"/\" + type);
\t\t}
\t});
\treturn type;
}

exports.parseType = parseType;
exports.isTypeMatched = isTypeMatched;
exports.isResourceTypeSupported = isResourceTypeSupported;
exports.isEnvironment = isEnvironment;
exports.isGlobMatched = isGlobMatched;
exports.isConditionMatched = isConditionMatched;
exports.isKeyMatched = isKeyMatched;
exports.getField = getField;
exports.getMain = getMain;
exports.getExtensions = getExtensions;
exports.matchModule = matchModule;
exports.matchType = matchType;
";
        
        $__internal_485e49a2aaa62c6014d1aef460da28d4392a873253dabb948f96d54fa28dcdef->leave($__internal_485e49a2aaa62c6014d1aef460da28d4392a873253dabb948f96d54fa28dcdef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/concord.js";
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
var globToRegExp = require(\"./globToRegExp\").globToRegExp;

function parseType(type) {
\tvar items = type.split(\"+\");
\tvar t = items.shift();
\treturn {
\t\ttype: t === \"*\" ? null : t,
\t\tfeatures: items
\t};
}

function isTypeMatched(baseType, testedType) {
\tif(typeof baseType === \"string\") baseType = parseType(baseType);
\tif(typeof testedType === \"string\") testedType = parseType(testedType);
\tif(testedType.type && testedType.type !== baseType.type) return false;
\treturn testedType.features.every(function(requiredFeature) {
\t\treturn baseType.features.indexOf(requiredFeature) >= 0;
\t});
}

function isResourceTypeMatched(baseType, testedType) {
\tbaseType = baseType.split(\"/\");
\ttestedType = testedType.split(\"/\");
\tif(baseType.length !== testedType.length) return false;
\tfor(var i = 0; i < baseType.length; i++) {
\t\tif(!isTypeMatched(baseType[i], testedType[i]))
\t\t\treturn false;
\t}
\treturn true;
}

function isResourceTypeSupported(context, type) {
\treturn context.supportedResourceTypes && context.supportedResourceTypes.some(function(supportedType) {
\t\treturn isResourceTypeMatched(supportedType, type);
\t});
}

function isEnvironment(context, env) {
\treturn context.environments && context.environments.every(function(environment) {
\t\treturn isTypeMatched(environment, env);
\t});
}

var globCache = {};

function getGlobRegExp(glob) {
\tvar regExp = globCache[glob] || (globCache[glob] = globToRegExp(glob));
\treturn regExp;
}

function matchGlob(glob, relativePath) {
\tvar regExp = getGlobRegExp(glob);
\treturn regExp.exec(relativePath);
}

function isGlobMatched(glob, relativePath) {
\treturn !!matchGlob(glob, relativePath);
}

function isConditionMatched(context, condition) {
\tvar items = condition.split(\"|\");
\treturn items.some(function testFn(item) {
\t\titem = item.trim();
\t\tvar inverted = /^!/.test(item);
\t\tif(inverted) return !testFn(item.substr(1));
\t\tif(/^[a-z]+:/.test(item)) {
\t\t\t// match named condition
\t\t\tvar match = /^([a-z]+):\\s*/.exec(item);
\t\t\tvar value = item.substr(match[0].length);
\t\t\tvar name = match[1];
\t\t\tswitch(name) {
\t\t\t\tcase \"referrer\":
\t\t\t\t\treturn isGlobMatched(value, context.referrer);
\t\t\t\tdefault:
\t\t\t\t\treturn false;
\t\t\t}
\t\t} else if(item.indexOf(\"/\") >= 0) {
\t\t\t// match supported type
\t\t\treturn isResourceTypeSupported(context, item);
\t\t} else {
\t\t\t// match environment
\t\t\treturn isEnvironment(context, item);
\t\t}
\t});
}

function isKeyMatched(context, key) {
\twhile(true) { //eslint-disable-line
\t\tvar match = /^\\[([^\\]]+)\\]\\s*/.exec(key);
\t\tif(!match) return key;
\t\tkey = key.substr(match[0].length);
\t\tvar condition = match[1];
\t\tif(!isConditionMatched(context, condition)) {
\t\t\treturn false;
\t\t}
\t}
}

function getField(context, configuration, field) {
\tvar value;
\tObject.keys(configuration).forEach(function(key) {
\t\tvar pureKey = isKeyMatched(context, key);
\t\tif(pureKey === field) {
\t\t\tvalue = configuration[key];
\t\t}
\t});
\treturn value;
}

function getMain(context, configuration) {
\treturn getField(context, configuration, \"main\");
}

function getExtensions(context, configuration) {
\treturn getField(context, configuration, \"extensions\");
}

function matchModule(context, configuration, request) {
\tvar modulesField = getField(context, configuration, \"modules\");
\tif(!modulesField) return request;
\tvar newRequest = request;
\tvar keys = Object.keys(modulesField);
\tvar iteration = 0;
\tfor(var i = 0; i < keys.length; i++) {
\t\tvar key = keys[i];
\t\tvar pureKey = isKeyMatched(context, key);
\t\tvar match = matchGlob(pureKey, newRequest);
\t\tif(match) {
\t\t\tvar value = modulesField[key];
\t\t\tif(typeof value !== \"string\") {
\t\t\t\treturn value;
\t\t\t} else if(/^\\(.+\\)\$/.test(pureKey)) {
\t\t\t\tnewRequest = newRequest.replace(getGlobRegExp(pureKey), value);
\t\t\t} else {
\t\t\t\tvar index = 1;
\t\t\t\tnewRequest = value.replace(/(\\/?\\*)?\\*/g, replaceMatcher);
\t\t\t}
\t\t\ti = -1;
\t\t\tif(iteration++ > keys.length) {
\t\t\t\tthrow new Error(\"Request '\" + request + \"' matches recursively\");
\t\t\t}
\t\t}
\t}
\treturn newRequest;

\tfunction replaceMatcher(find) {
\t\tswitch(find) {
\t\t\tcase \"/**\":
\t\t\t\tvar m = match[index++];
\t\t\t\treturn m ? \"/\" + m : \"\";
\t\t\tcase \"**\":
\t\t\tcase \"*\":
\t\t\t\treturn match[index++];
\t\t}
\t}
}

function matchType(context, configuration, relativePath) {
\tvar typesField = getField(context, configuration, \"types\");
\tif(!typesField) return undefined;
\tvar type;
\tObject.keys(typesField).forEach(function(key) {
\t\tvar pureKey = isKeyMatched(context, key);
\t\tif(isGlobMatched(pureKey, relativePath)) {
\t\t\tvar value = typesField[key];
\t\t\tif(!type && /\\/\\*\$/.test(value))
\t\t\t\tthrow new Error(\"value ('\" + value + \"') of key '\" + key + \"' contains '*', but there is no previous value defined\");
\t\t\ttype = value.replace(/\\/\\*\$/, \"/\" + type);
\t\t}
\t});
\treturn type;
}

exports.parseType = parseType;
exports.isTypeMatched = isTypeMatched;
exports.isResourceTypeSupported = isResourceTypeSupported;
exports.isEnvironment = isEnvironment;
exports.isGlobMatched = isGlobMatched;
exports.isConditionMatched = isConditionMatched;
exports.isKeyMatched = isKeyMatched;
exports.getField = getField;
exports.getMain = getMain;
exports.getExtensions = getExtensions;
exports.matchModule = matchModule;
exports.matchType = matchType;
", "node_modules/enhanced-resolve/lib/concord.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/concord.js");
    }
}
