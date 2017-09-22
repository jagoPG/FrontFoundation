<?php

/* node_modules/webpack/lib/CaseSensitiveModulesWarning.js */
class __TwigTemplate_082d1d155c0857a377d598107b1fc78a07f39dcf144a8675a4e7fc17f4c58231 extends Twig_Template
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
        $__internal_8b2995988b2879d8911971f478636bff0e863b2dea4250b6e6c2111ac57a63fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2995988b2879d8911971f478636bff0e863b2dea4250b6e6c2111ac57a63fe->enter($__internal_8b2995988b2879d8911971f478636bff0e863b2dea4250b6e6c2111ac57a63fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/CaseSensitiveModulesWarning.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const WebpackError = require(\"./WebpackError\");

module.exports = class CaseSensitiveModulesWarning extends WebpackError {
\tconstructor(modules) {
\t\tsuper();

\t\tthis.name = \"CaseSensitiveModulesWarning\";
\t\tconst sortedModules = this._sort(modules);
\t\tconst modulesList = this._moduleMessages(sortedModules);
\t\tthis.message = \"There are multiple modules with names that only differ in casing.\\n\" +
\t\t\t\"This can lead to unexpected behavior when compiling on a filesystem with other case-semantic.\\n\" +
\t\t\t`Use equal casing. Compare these module identifiers:\\n\${modulesList}`;
\t\tthis.origin = this.module = sortedModules[0];

\t\tError.captureStackTrace(this, this.constructor);
\t}

\t_sort(modules) {
\t\treturn modules.slice().sort((a, b) => {
\t\t\ta = a.identifier();
\t\t\tb = b.identifier();
\t\t\t/* istanbul ignore next */
\t\t\tif(a < b) return -1;
\t\t\t/* istanbul ignore next */
\t\t\tif(a > b) return 1;
\t\t\t/* istanbul ignore next */
\t\t\treturn 0;
\t\t});
\t}

\t_moduleMessages(modules) {
\t\treturn modules.map((m) => {
\t\t\tlet message = `* \${m.identifier()}`;
\t\t\tconst validReasons = m.reasons.filter((reason) => reason.module);

\t\t\tif(validReasons.length > 0) {
\t\t\t\tmessage += `\\n    Used by \${validReasons.length} module(s), i. e.`;
\t\t\t\tmessage += `\\n    \${validReasons[0].module.identifier()}`;
\t\t\t}
\t\t\treturn message;
\t\t}).join(\"\\n\");
\t}
};
";
        
        $__internal_8b2995988b2879d8911971f478636bff0e863b2dea4250b6e6c2111ac57a63fe->leave($__internal_8b2995988b2879d8911971f478636bff0e863b2dea4250b6e6c2111ac57a63fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/CaseSensitiveModulesWarning.js";
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

const WebpackError = require(\"./WebpackError\");

module.exports = class CaseSensitiveModulesWarning extends WebpackError {
\tconstructor(modules) {
\t\tsuper();

\t\tthis.name = \"CaseSensitiveModulesWarning\";
\t\tconst sortedModules = this._sort(modules);
\t\tconst modulesList = this._moduleMessages(sortedModules);
\t\tthis.message = \"There are multiple modules with names that only differ in casing.\\n\" +
\t\t\t\"This can lead to unexpected behavior when compiling on a filesystem with other case-semantic.\\n\" +
\t\t\t`Use equal casing. Compare these module identifiers:\\n\${modulesList}`;
\t\tthis.origin = this.module = sortedModules[0];

\t\tError.captureStackTrace(this, this.constructor);
\t}

\t_sort(modules) {
\t\treturn modules.slice().sort((a, b) => {
\t\t\ta = a.identifier();
\t\t\tb = b.identifier();
\t\t\t/* istanbul ignore next */
\t\t\tif(a < b) return -1;
\t\t\t/* istanbul ignore next */
\t\t\tif(a > b) return 1;
\t\t\t/* istanbul ignore next */
\t\t\treturn 0;
\t\t});
\t}

\t_moduleMessages(modules) {
\t\treturn modules.map((m) => {
\t\t\tlet message = `* \${m.identifier()}`;
\t\t\tconst validReasons = m.reasons.filter((reason) => reason.module);

\t\t\tif(validReasons.length > 0) {
\t\t\t\tmessage += `\\n    Used by \${validReasons.length} module(s), i. e.`;
\t\t\t\tmessage += `\\n    \${validReasons[0].module.identifier()}`;
\t\t\t}
\t\t\treturn message;
\t\t}).join(\"\\n\");
\t}
};
", "node_modules/webpack/lib/CaseSensitiveModulesWarning.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/CaseSensitiveModulesWarning.js");
    }
}
