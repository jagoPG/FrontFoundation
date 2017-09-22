<?php

/* node_modules/webpack/lib/AsyncDependenciesBlock.js */
class __TwigTemplate_5d074297aa132b5cdb10acaf83ad44c5ecc3d1816bb0b4f9ab241b816f0c7adf extends Twig_Template
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
        $__internal_d75efaac8cee823b43acb48cf82c244b84c933c39861cabecff1e1f08b98315b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75efaac8cee823b43acb48cf82c244b84c933c39861cabecff1e1f08b98315b->enter($__internal_d75efaac8cee823b43acb48cf82c244b84c933c39861cabecff1e1f08b98315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/AsyncDependenciesBlock.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";
const DependenciesBlock = require(\"./DependenciesBlock\");

module.exports = class AsyncDependenciesBlock extends DependenciesBlock {
\tconstructor(name, module, loc) {
\t\tsuper();
\t\tthis.chunkName = name;
\t\tthis.chunks = null;
\t\tthis.module = module;
\t\tthis.loc = loc;
\t}
\tget chunk() {
\t\tthrow new Error(\"`chunk` was been renamed to `chunks` and is now an array\");
\t}
\tset chunk(chunk) {
\t\tthrow new Error(\"`chunk` was been renamed to `chunks` and is now an array\");
\t}
\tupdateHash(hash) {
\t\thash.update(this.chunkName || \"\");
\t\thash.update(this.chunks && this.chunks.map((chunk) => {
\t\t\treturn chunk.id !== null ? chunk.id : \"\";
\t\t}).join(\",\") || \"\");
\t\tsuper.updateHash(hash);
\t}
\tdisconnect() {
\t\tthis.chunks = null;
\t\tsuper.disconnect();
\t}
\tunseal() {
\t\tthis.chunks = null;
\t\tsuper.unseal();
\t}
\tsortItems() {
\t\tsuper.sortItems();
\t\tif(this.chunks) {
\t\t\tthis.chunks.sort((a, b) => a.compareTo(b));
\t\t}
\t}
};
";
        
        $__internal_d75efaac8cee823b43acb48cf82c244b84c933c39861cabecff1e1f08b98315b->leave($__internal_d75efaac8cee823b43acb48cf82c244b84c933c39861cabecff1e1f08b98315b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/AsyncDependenciesBlock.js";
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
const DependenciesBlock = require(\"./DependenciesBlock\");

module.exports = class AsyncDependenciesBlock extends DependenciesBlock {
\tconstructor(name, module, loc) {
\t\tsuper();
\t\tthis.chunkName = name;
\t\tthis.chunks = null;
\t\tthis.module = module;
\t\tthis.loc = loc;
\t}
\tget chunk() {
\t\tthrow new Error(\"`chunk` was been renamed to `chunks` and is now an array\");
\t}
\tset chunk(chunk) {
\t\tthrow new Error(\"`chunk` was been renamed to `chunks` and is now an array\");
\t}
\tupdateHash(hash) {
\t\thash.update(this.chunkName || \"\");
\t\thash.update(this.chunks && this.chunks.map((chunk) => {
\t\t\treturn chunk.id !== null ? chunk.id : \"\";
\t\t}).join(\",\") || \"\");
\t\tsuper.updateHash(hash);
\t}
\tdisconnect() {
\t\tthis.chunks = null;
\t\tsuper.disconnect();
\t}
\tunseal() {
\t\tthis.chunks = null;
\t\tsuper.unseal();
\t}
\tsortItems() {
\t\tsuper.sortItems();
\t\tif(this.chunks) {
\t\t\tthis.chunks.sort((a, b) => a.compareTo(b));
\t\t}
\t}
};
", "node_modules/webpack/lib/AsyncDependenciesBlock.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/AsyncDependenciesBlock.js");
    }
}
