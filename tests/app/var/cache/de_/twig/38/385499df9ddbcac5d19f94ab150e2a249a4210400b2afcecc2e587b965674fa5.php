<?php

/* node_modules/enhanced-resolve/lib/ConcordMainPlugin.js */
class __TwigTemplate_c476543372ec7c8f75ada2d50f4c93802ec646f025ddd6e96a6123ce864faa5f extends Twig_Template
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
        $__internal_ca1df0805c4b4924f9e82a5dd5152cbe29435a6d5f2a420c98f4a924f446ffd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1df0805c4b4924f9e82a5dd5152cbe29435a6d5f2a420c98f4a924f446ffd7->enter($__internal_ca1df0805c4b4924f9e82a5dd5152cbe29435a6d5f2a420c98f4a924f446ffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/lib/ConcordMainPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
var path = require(\"path\");
var concord = require(\"./concord\");
var DescriptionFileUtils = require(\"./DescriptionFileUtils\");

function ConcordMainPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = ConcordMainPlugin;

ConcordMainPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(request.path !== request.descriptionFileRoot) return callback();
\t\tvar concordField = DescriptionFileUtils.getField(request.descriptionFileData, \"concord\");
\t\tif(!concordField) return callback();
\t\tvar mainModule = concord.getMain(request.context, concordField);
\t\tif(!mainModule) return callback();
\t\tvar obj = Object.assign({}, request, {
\t\t\trequest: mainModule
\t\t});
\t\tvar filename = path.basename(request.descriptionFilePath);
\t\treturn resolver.doResolve(target, obj, \"use \" + mainModule + \" from \" + filename, callback);
\t});
};
";
        
        $__internal_ca1df0805c4b4924f9e82a5dd5152cbe29435a6d5f2a420c98f4a924f446ffd7->leave($__internal_ca1df0805c4b4924f9e82a5dd5152cbe29435a6d5f2a420c98f4a924f446ffd7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/lib/ConcordMainPlugin.js";
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
var path = require(\"path\");
var concord = require(\"./concord\");
var DescriptionFileUtils = require(\"./DescriptionFileUtils\");

function ConcordMainPlugin(source, options, target) {
\tthis.source = source;
\tthis.options = options;
\tthis.target = target;
}
module.exports = ConcordMainPlugin;

ConcordMainPlugin.prototype.apply = function(resolver) {
\tvar target = this.target;
\tresolver.plugin(this.source, function(request, callback) {
\t\tif(request.path !== request.descriptionFileRoot) return callback();
\t\tvar concordField = DescriptionFileUtils.getField(request.descriptionFileData, \"concord\");
\t\tif(!concordField) return callback();
\t\tvar mainModule = concord.getMain(request.context, concordField);
\t\tif(!mainModule) return callback();
\t\tvar obj = Object.assign({}, request, {
\t\t\trequest: mainModule
\t\t});
\t\tvar filename = path.basename(request.descriptionFilePath);
\t\treturn resolver.doResolve(target, obj, \"use \" + mainModule + \" from \" + filename, callback);
\t});
};
", "node_modules/enhanced-resolve/lib/ConcordMainPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/lib/ConcordMainPlugin.js");
    }
}
