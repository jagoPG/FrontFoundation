<?php

/* node_modules/webpack/lib/DelegatedModuleFactoryPlugin.js */
class __TwigTemplate_74fbe9dfb86e857f8ec4a708b7f71ff26628756ae7557a100eb7c772e47adf25 extends Twig_Template
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
        $__internal_c2b4fcc1376071a5838c9e6d537b29b6c83cfa72375d09c8440b22a12db68047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b4fcc1376071a5838c9e6d537b29b6c83cfa72375d09c8440b22a12db68047->enter($__internal_c2b4fcc1376071a5838c9e6d537b29b6c83cfa72375d09c8440b22a12db68047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/DelegatedModuleFactoryPlugin.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const DelegatedModule = require(\"./DelegatedModule\");

// options.source
// options.type
// options.context
// options.scope
// options.content
class DelegatedModuleFactoryPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t\toptions.type = options.type || \"require\";
\t\toptions.extensions = options.extensions || [\"\", \".js\"];
\t}

\tapply(normalModuleFactory) {
\t\tconst scope = this.options.scope;
\t\tif(scope) {
\t\t\tnormalModuleFactory.plugin(\"factory\", factory => (data, callback) => {
\t\t\t\tconst dependency = data.dependencies[0];
\t\t\t\tconst request = dependency.request;
\t\t\t\tif(request && request.indexOf(scope + \"/\") === 0) {
\t\t\t\t\tconst innerRequest = \".\" + request.substr(scope.length);
\t\t\t\t\tlet resolved;
\t\t\t\t\tif(innerRequest in this.options.content) {
\t\t\t\t\t\tresolved = this.options.content[innerRequest];
\t\t\t\t\t\treturn callback(null, new DelegatedModule(this.options.source, resolved, this.options.type, innerRequest, request));
\t\t\t\t\t}
\t\t\t\t\tfor(let i = 0; i < this.options.extensions.length; i++) {
\t\t\t\t\t\tconst extension = this.options.extensions[i];
\t\t\t\t\t\tconst requestPlusExt = innerRequest + extension;
\t\t\t\t\t\tif(requestPlusExt in this.options.content) {
\t\t\t\t\t\t\tresolved = this.options.content[requestPlusExt];
\t\t\t\t\t\t\treturn callback(null, new DelegatedModule(this.options.source, resolved, this.options.type, requestPlusExt, request + extension));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn factory(data, callback);
\t\t\t});
\t\t} else {
\t\t\tnormalModuleFactory.plugin(\"module\", module => {
\t\t\t\tif(module.libIdent) {
\t\t\t\t\tconst request = module.libIdent(this.options);
\t\t\t\t\tif(request && request in this.options.content) {
\t\t\t\t\t\tconst resolved = this.options.content[request];
\t\t\t\t\t\treturn new DelegatedModule(this.options.source, resolved, this.options.type, request, module);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn module;
\t\t\t});
\t\t}
\t}
}
module.exports = DelegatedModuleFactoryPlugin;
";
        
        $__internal_c2b4fcc1376071a5838c9e6d537b29b6c83cfa72375d09c8440b22a12db68047->leave($__internal_c2b4fcc1376071a5838c9e6d537b29b6c83cfa72375d09c8440b22a12db68047_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/DelegatedModuleFactoryPlugin.js";
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

const DelegatedModule = require(\"./DelegatedModule\");

// options.source
// options.type
// options.context
// options.scope
// options.content
class DelegatedModuleFactoryPlugin {
\tconstructor(options) {
\t\tthis.options = options;
\t\toptions.type = options.type || \"require\";
\t\toptions.extensions = options.extensions || [\"\", \".js\"];
\t}

\tapply(normalModuleFactory) {
\t\tconst scope = this.options.scope;
\t\tif(scope) {
\t\t\tnormalModuleFactory.plugin(\"factory\", factory => (data, callback) => {
\t\t\t\tconst dependency = data.dependencies[0];
\t\t\t\tconst request = dependency.request;
\t\t\t\tif(request && request.indexOf(scope + \"/\") === 0) {
\t\t\t\t\tconst innerRequest = \".\" + request.substr(scope.length);
\t\t\t\t\tlet resolved;
\t\t\t\t\tif(innerRequest in this.options.content) {
\t\t\t\t\t\tresolved = this.options.content[innerRequest];
\t\t\t\t\t\treturn callback(null, new DelegatedModule(this.options.source, resolved, this.options.type, innerRequest, request));
\t\t\t\t\t}
\t\t\t\t\tfor(let i = 0; i < this.options.extensions.length; i++) {
\t\t\t\t\t\tconst extension = this.options.extensions[i];
\t\t\t\t\t\tconst requestPlusExt = innerRequest + extension;
\t\t\t\t\t\tif(requestPlusExt in this.options.content) {
\t\t\t\t\t\t\tresolved = this.options.content[requestPlusExt];
\t\t\t\t\t\t\treturn callback(null, new DelegatedModule(this.options.source, resolved, this.options.type, requestPlusExt, request + extension));
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn factory(data, callback);
\t\t\t});
\t\t} else {
\t\t\tnormalModuleFactory.plugin(\"module\", module => {
\t\t\t\tif(module.libIdent) {
\t\t\t\t\tconst request = module.libIdent(this.options);
\t\t\t\t\tif(request && request in this.options.content) {
\t\t\t\t\t\tconst resolved = this.options.content[request];
\t\t\t\t\t\treturn new DelegatedModule(this.options.source, resolved, this.options.type, request, module);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn module;
\t\t\t});
\t\t}
\t}
}
module.exports = DelegatedModuleFactoryPlugin;
", "node_modules/webpack/lib/DelegatedModuleFactoryPlugin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/DelegatedModuleFactoryPlugin.js");
    }
}
