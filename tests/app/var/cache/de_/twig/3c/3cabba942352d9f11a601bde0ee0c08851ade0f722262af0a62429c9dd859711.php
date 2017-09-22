<?php

/* node_modules/loader-utils/lib/interpolateName.js */
class __TwigTemplate_5cf5dc83650b7c9dd1eebe6b37221dae0bc6884ab74a142e42a0b84d113f7a09 extends Twig_Template
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
        $__internal_7693eab4de3a2e6808323b461b92f0136822391017e8f5dc31d653619e62ad2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7693eab4de3a2e6808323b461b92f0136822391017e8f5dc31d653619e62ad2b->enter($__internal_7693eab4de3a2e6808323b461b92f0136822391017e8f5dc31d653619e62ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/lib/interpolateName.js"));

        // line 1
        echo "\"use strict\";

const path = require(\"path\");
const emojisList = require(\"emojis-list\");
const getHashDigest = require(\"./getHashDigest\");

const emojiRegex = /[\\uD800-\\uDFFF]./;
const emojiList = emojisList.filter(emoji => emojiRegex.test(emoji));
const emojiCache = {};

function encodeStringToEmoji(content, length) {
\tif(emojiCache[content]) return emojiCache[content];
\tlength = length || 1;
\tconst emojis = [];
\tdo {
\t\tconst index = Math.floor(Math.random() * emojiList.length);
\t\temojis.push(emojiList[index]);
\t\temojiList.splice(index, 1);
\t} while(--length > 0);
\tconst emojiEncoding = emojis.join(\"\");
\temojiCache[content] = emojiEncoding;
\treturn emojiEncoding;
}

function interpolateName(loaderContext, name, options) {
\tlet filename;
\tif(typeof name === \"function\") {
\t\tfilename = name(loaderContext.resourcePath);
\t} else {
\t\tfilename = name || \"[hash].[ext]\";
\t}
\tconst context = options.context;
\tconst content = options.content;
\tconst regExp = options.regExp;
\tlet ext = \"bin\";
\tlet basename = \"file\";
\tlet directory = \"\";
\tlet folder = \"\";
\tif(loaderContext.resourcePath) {
\t\tconst parsed = path.parse(loaderContext.resourcePath);
\t\tlet resourcePath = loaderContext.resourcePath;

\t\tif(parsed.ext) {
\t\t\text = parsed.ext.substr(1);
\t\t}
\t\tif(parsed.dir) {
\t\t\tbasename = parsed.name;
\t\t\tresourcePath = parsed.dir + path.sep;
\t\t}
\t\tif(typeof context !== \"undefined\") {
\t\t\tdirectory = path.relative(context, resourcePath + \"_\").replace(/\\\\/g, \"/\").replace(/\\.\\.(\\/)?/g, \"_\$1\");
\t\t\tdirectory = directory.substr(0, directory.length - 1);
\t\t} else {
\t\t\tdirectory = resourcePath.replace(/\\\\/g, \"/\").replace(/\\.\\.(\\/)?/g, \"_\$1\");
\t\t}
\t\tif(directory.length === 1) {
\t\t\tdirectory = \"\";
\t\t} else if(directory.length > 1) {
\t\t\tfolder = path.basename(directory);
\t\t}
\t}
\tlet url = filename;
\tif(content) {
\t\t// Match hash template
\t\turl = url
\t\t\t.replace(
\t\t\t\t/\\[(?:(\\w+):)?hash(?::([a-z]+\\d*))?(?::(\\d+))?\\]/ig,
\t\t\t\t(all, hashType, digestType, maxLength) => getHashDigest(content, hashType, digestType, parseInt(maxLength, 10))
\t\t\t)
\t\t\t.replace(
\t\t\t\t/\\[emoji(?::(\\d+))?\\]/ig,
\t\t\t\t(all, length) => encodeStringToEmoji(content, length)
\t\t\t);
\t}
\turl = url
\t\t.replace(/\\[ext\\]/ig, () => ext)
\t\t.replace(/\\[name\\]/ig, () => basename)
\t\t.replace(/\\[path\\]/ig, () => directory)
\t\t.replace(/\\[folder\\]/ig, () => folder);
\tif(regExp && loaderContext.resourcePath) {
\t\tconst match = loaderContext.resourcePath.match(new RegExp(regExp));
\t\tmatch && match.forEach((matched, i) => {
\t\t\turl = url.replace(
\t\t\t\tnew RegExp(\"\\\\[\" + i + \"\\\\]\", \"ig\"),
\t\t\t\tmatched
\t\t\t);
\t\t});
\t}
\tif(typeof loaderContext.options === \"object\" && typeof loaderContext.options.customInterpolateName === \"function\") {
\t\turl = loaderContext.options.customInterpolateName.call(loaderContext, url, name, options);
\t}
\treturn url;
}

module.exports = interpolateName;
";
        
        $__internal_7693eab4de3a2e6808323b461b92f0136822391017e8f5dc31d653619e62ad2b->leave($__internal_7693eab4de3a2e6808323b461b92f0136822391017e8f5dc31d653619e62ad2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/lib/interpolateName.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

const path = require(\"path\");
const emojisList = require(\"emojis-list\");
const getHashDigest = require(\"./getHashDigest\");

const emojiRegex = /[\\uD800-\\uDFFF]./;
const emojiList = emojisList.filter(emoji => emojiRegex.test(emoji));
const emojiCache = {};

function encodeStringToEmoji(content, length) {
\tif(emojiCache[content]) return emojiCache[content];
\tlength = length || 1;
\tconst emojis = [];
\tdo {
\t\tconst index = Math.floor(Math.random() * emojiList.length);
\t\temojis.push(emojiList[index]);
\t\temojiList.splice(index, 1);
\t} while(--length > 0);
\tconst emojiEncoding = emojis.join(\"\");
\temojiCache[content] = emojiEncoding;
\treturn emojiEncoding;
}

function interpolateName(loaderContext, name, options) {
\tlet filename;
\tif(typeof name === \"function\") {
\t\tfilename = name(loaderContext.resourcePath);
\t} else {
\t\tfilename = name || \"[hash].[ext]\";
\t}
\tconst context = options.context;
\tconst content = options.content;
\tconst regExp = options.regExp;
\tlet ext = \"bin\";
\tlet basename = \"file\";
\tlet directory = \"\";
\tlet folder = \"\";
\tif(loaderContext.resourcePath) {
\t\tconst parsed = path.parse(loaderContext.resourcePath);
\t\tlet resourcePath = loaderContext.resourcePath;

\t\tif(parsed.ext) {
\t\t\text = parsed.ext.substr(1);
\t\t}
\t\tif(parsed.dir) {
\t\t\tbasename = parsed.name;
\t\t\tresourcePath = parsed.dir + path.sep;
\t\t}
\t\tif(typeof context !== \"undefined\") {
\t\t\tdirectory = path.relative(context, resourcePath + \"_\").replace(/\\\\/g, \"/\").replace(/\\.\\.(\\/)?/g, \"_\$1\");
\t\t\tdirectory = directory.substr(0, directory.length - 1);
\t\t} else {
\t\t\tdirectory = resourcePath.replace(/\\\\/g, \"/\").replace(/\\.\\.(\\/)?/g, \"_\$1\");
\t\t}
\t\tif(directory.length === 1) {
\t\t\tdirectory = \"\";
\t\t} else if(directory.length > 1) {
\t\t\tfolder = path.basename(directory);
\t\t}
\t}
\tlet url = filename;
\tif(content) {
\t\t// Match hash template
\t\turl = url
\t\t\t.replace(
\t\t\t\t/\\[(?:(\\w+):)?hash(?::([a-z]+\\d*))?(?::(\\d+))?\\]/ig,
\t\t\t\t(all, hashType, digestType, maxLength) => getHashDigest(content, hashType, digestType, parseInt(maxLength, 10))
\t\t\t)
\t\t\t.replace(
\t\t\t\t/\\[emoji(?::(\\d+))?\\]/ig,
\t\t\t\t(all, length) => encodeStringToEmoji(content, length)
\t\t\t);
\t}
\turl = url
\t\t.replace(/\\[ext\\]/ig, () => ext)
\t\t.replace(/\\[name\\]/ig, () => basename)
\t\t.replace(/\\[path\\]/ig, () => directory)
\t\t.replace(/\\[folder\\]/ig, () => folder);
\tif(regExp && loaderContext.resourcePath) {
\t\tconst match = loaderContext.resourcePath.match(new RegExp(regExp));
\t\tmatch && match.forEach((matched, i) => {
\t\t\turl = url.replace(
\t\t\t\tnew RegExp(\"\\\\[\" + i + \"\\\\]\", \"ig\"),
\t\t\t\tmatched
\t\t\t);
\t\t});
\t}
\tif(typeof loaderContext.options === \"object\" && typeof loaderContext.options.customInterpolateName === \"function\") {
\t\turl = loaderContext.options.customInterpolateName.call(loaderContext, url, name, options);
\t}
\treturn url;
}

module.exports = interpolateName;
", "node_modules/loader-utils/lib/interpolateName.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/lib/interpolateName.js");
    }
}
