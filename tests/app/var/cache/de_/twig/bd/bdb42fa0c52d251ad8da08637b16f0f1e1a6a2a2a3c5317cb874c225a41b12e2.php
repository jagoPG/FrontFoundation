<?php

/* node_modules/webpack/lib/Chunk.js */
class __TwigTemplate_7329c58ee17f976a2e149a9a80fea473f9d27d52a50f1582b268426d7c454719 extends Twig_Template
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
        $__internal_f727e76cba79122f4e2e599b9ab9d8682f91d43e874a3da43e1a21e1e05b1ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f727e76cba79122f4e2e599b9ab9d8682f91d43e874a3da43e1a21e1e05b1ab1->enter($__internal_f727e76cba79122f4e2e599b9ab9d8682f91d43e874a3da43e1a21e1e05b1ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/lib/Chunk.js"));

        // line 1
        echo "/*
\tMIT License http://www.opensource.org/licenses/mit-license.php
\tAuthor Tobias Koppers @sokra
*/
\"use strict\";

const util = require(\"util\");
const compareLocations = require(\"./compareLocations\");
const SortableSet = require(\"./util/SortableSet\");
let debugId = 1000;

const sortById = (a, b) => {
\tif(a.id < b.id) return -1;
\tif(b.id < a.id) return 1;
\treturn 0;
};

const sortByIdentifier = (a, b) => {
\tif(a.identifier() > b.identifier()) return 1;
\tif(a.identifier() < b.identifier()) return -1;
\treturn 0;
};

class Chunk {

\tconstructor(name, module, loc) {
\t\tthis.id = null;
\t\tthis.ids = null;
\t\tthis.debugId = debugId++;
\t\tthis.name = name;
\t\tthis._modules = new SortableSet(undefined, sortByIdentifier);
\t\tthis.entrypoints = [];
\t\tthis.chunks = [];
\t\tthis.parents = [];
\t\tthis.blocks = [];
\t\tthis.origins = [];
\t\tthis.files = [];
\t\tthis.rendered = false;
\t\tif(module) {
\t\t\tthis.origins.push({
\t\t\t\tmodule,
\t\t\t\tloc,
\t\t\t\tname
\t\t\t});
\t\t}
\t}

\tget entry() {
\t\tthrow new Error(\"Chunk.entry was removed. Use hasRuntime()\");
\t}

\tset entry(data) {
\t\tthrow new Error(\"Chunk.entry was removed. Use hasRuntime()\");
\t}

\tget initial() {
\t\tthrow new Error(\"Chunk.initial was removed. Use isInitial()\");
\t}

\tset initial(data) {
\t\tthrow new Error(\"Chunk.initial was removed. Use isInitial()\");
\t}

\thasRuntime() {
\t\tif(this.entrypoints.length === 0) return false;
\t\treturn this.entrypoints[0].chunks[0] === this;
\t}

\tisInitial() {
\t\treturn this.entrypoints.length > 0;
\t}

\thasEntryModule() {
\t\treturn !!this.entryModule;
\t}

\taddToCollection(collection, item) {
\t\tif(item === this) {
\t\t\treturn false;
\t\t}

\t\tif(collection.indexOf(item) > -1) {
\t\t\treturn false;
\t\t}

\t\tcollection.push(item);
\t\treturn true;
\t}

\taddChunk(chunk) {
\t\treturn this.addToCollection(this.chunks, chunk);
\t}

\taddParent(parentChunk) {
\t\treturn this.addToCollection(this.parents, parentChunk);
\t}

\taddModule(module) {
\t\tif(!this._modules.has(module)) {
\t\t\tthis._modules.add(module);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\taddBlock(block) {
\t\treturn this.addToCollection(this.blocks, block);
\t}

\tremoveModule(module) {
\t\tif(this._modules.delete(module)) {
\t\t\tmodule.removeChunk(this);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\tremoveChunk(chunk) {
\t\tconst idx = this.chunks.indexOf(chunk);
\t\tif(idx >= 0) {
\t\t\tthis.chunks.splice(idx, 1);
\t\t\tchunk.removeParent(this);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\tremoveParent(chunk) {
\t\tconst idx = this.parents.indexOf(chunk);
\t\tif(idx >= 0) {
\t\t\tthis.parents.splice(idx, 1);
\t\t\tchunk.removeChunk(this);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\taddOrigin(module, loc) {
\t\tthis.origins.push({
\t\t\tmodule,
\t\t\tloc,
\t\t\tname: this.name
\t\t});
\t}

\tsetModules(modules) {
\t\tthis._modules = new SortableSet(modules, sortByIdentifier);
\t}

\tgetNumberOfModules() {
\t\treturn this._modules.size;
\t}

\tget modulesIterable() {
\t\treturn this._modules;
\t}

\tforEachModule(fn) {
\t\tthis._modules.forEach(fn);
\t}

\tmapModules(fn) {
\t\treturn Array.from(this._modules, fn);
\t}

\tcompareTo(otherChunk) {
\t\tthis._modules.sort();
\t\totherChunk._modules.sort();
\t\tif(this._modules.size > otherChunk._modules.size) return -1;
\t\tif(this._modules.size < otherChunk._modules.size) return 1;
\t\tconst a = this._modules[Symbol.iterator]();
\t\tconst b = otherChunk._modules[Symbol.iterator]();
\t\twhile(true) { // eslint-disable-line
\t\t\tconst aItem = a.next();
\t\t\tconst bItem = b.next();
\t\t\tif(aItem.done) return 0;
\t\t\tconst aModuleIdentifier = aItem.value.identifier();
\t\t\tconst bModuleIdentifier = bItem.value.identifier();
\t\t\tif(aModuleIdentifier > bModuleIdentifier) return -1;
\t\t\tif(aModuleIdentifier < bModuleIdentifier) return 1;
\t\t}
\t}

\tcontainsModule(module) {
\t\treturn this._modules.has(module);
\t}

\tgetModules() {
\t\treturn Array.from(this._modules);
\t}

\tgetModulesIdent() {
\t\tthis._modules.sort();
\t\tlet str = \"\";
\t\tthis._modules.forEach(m => {
\t\t\tstr += m.identifier() + \"#\";
\t\t});
\t\treturn str;
\t}

\tremove(reason) {
\t\t// cleanup modules
\t\t// Array.from is used here to create a clone, because removeChunk modifies this._modules
\t\tArray.from(this._modules).forEach(module => {
\t\t\tmodule.removeChunk(this);
\t\t});

\t\t// cleanup parents
\t\tthis.parents.forEach(parentChunk => {
\t\t\t// remove this chunk from its parents
\t\t\tconst idx = parentChunk.chunks.indexOf(this);
\t\t\tif(idx >= 0) {
\t\t\t\tparentChunk.chunks.splice(idx, 1);
\t\t\t}

\t\t\t// cleanup \"sub chunks\"
\t\t\tthis.chunks.forEach(chunk => {
\t\t\t\t/**
\t\t\t\t * remove this chunk as \"intermediary\" and connect
\t\t\t\t * it \"sub chunks\" and parents directly
\t\t\t\t */
\t\t\t\t// add parent to each \"sub chunk\"
\t\t\t\tchunk.addParent(parentChunk);
\t\t\t\t// add \"sub chunk\" to parent
\t\t\t\tparentChunk.addChunk(chunk);
\t\t\t});
\t\t});

\t\t/**
\t\t * we need to iterate again over the chunks
\t\t * to remove this from the chunks parents.
\t\t * This can not be done in the above loop
\t\t * as it is not garuanteed that `this.parents` contains anything.
\t\t */
\t\tthis.chunks.forEach(chunk => {
\t\t\t// remove this as parent of every \"sub chunk\"
\t\t\tconst idx = chunk.parents.indexOf(this);
\t\t\tif(idx >= 0) {
\t\t\t\tchunk.parents.splice(idx, 1);
\t\t\t}
\t\t});

\t\t// cleanup blocks
\t\tthis.blocks.forEach(block => {
\t\t\tconst idx = block.chunks.indexOf(this);
\t\t\tif(idx >= 0) {
\t\t\t\tblock.chunks.splice(idx, 1);
\t\t\t\tif(block.chunks.length === 0) {
\t\t\t\t\tblock.chunks = null;
\t\t\t\t\tblock.chunkReason = reason;
\t\t\t\t}
\t\t\t}
\t\t});
\t}

\tmoveModule(module, otherChunk) {
\t\tmodule.removeChunk(this);
\t\tmodule.addChunk(otherChunk);
\t\totherChunk.addModule(module);
\t\tmodule.rewriteChunkInReasons(this, [otherChunk]);
\t}

\treplaceChunk(oldChunk, newChunk) {
\t\tconst idx = this.chunks.indexOf(oldChunk);
\t\tif(idx >= 0) {
\t\t\tthis.chunks.splice(idx, 1);
\t\t}
\t\tif(this !== newChunk && newChunk.addParent(this)) {
\t\t\tthis.addChunk(newChunk);
\t\t}
\t}

\treplaceParentChunk(oldParentChunk, newParentChunk) {
\t\tconst idx = this.parents.indexOf(oldParentChunk);
\t\tif(idx >= 0) {
\t\t\tthis.parents.splice(idx, 1);
\t\t}
\t\tif(this !== newParentChunk && newParentChunk.addChunk(this)) {
\t\t\tthis.addParent(newParentChunk);
\t\t}
\t}

\tintegrate(otherChunk, reason) {
\t\tif(!this.canBeIntegrated(otherChunk)) {
\t\t\treturn false;
\t\t}

\t\t// Array.from is used here to create a clone, because moveModule modifies otherChunk._modules
\t\tconst otherChunkModules = Array.from(otherChunk._modules);
\t\totherChunkModules.forEach(module => otherChunk.moveModule(module, this));
\t\totherChunk._modules.clear();

\t\totherChunk.parents.forEach(parentChunk => parentChunk.replaceChunk(otherChunk, this));
\t\totherChunk.parents.length = 0;

\t\totherChunk.chunks.forEach(chunk => chunk.replaceParentChunk(otherChunk, this));
\t\totherChunk.chunks.length = 0;

\t\totherChunk.blocks.forEach(b => {
\t\t\tb.chunks = b.chunks ? b.chunks.map(c => {
\t\t\t\treturn c === otherChunk ? this : c;
\t\t\t}) : [this];
\t\t\tb.chunkReason = reason;
\t\t\tthis.addBlock(b);
\t\t});
\t\totherChunk.blocks.length = 0;

\t\totherChunk.origins.forEach(origin => {
\t\t\tthis.origins.push(origin);
\t\t});
\t\tthis.origins.forEach(origin => {
\t\t\tif(!origin.reasons) {
\t\t\t\torigin.reasons = [reason];
\t\t\t} else if(origin.reasons[0] !== reason) {
\t\t\t\torigin.reasons.unshift(reason);
\t\t\t}
\t\t});
\t\tthis.chunks = this.chunks.filter(chunk => {
\t\t\treturn chunk !== otherChunk && chunk !== this;
\t\t});
\t\tthis.parents = this.parents.filter(parentChunk => {
\t\t\treturn parentChunk !== otherChunk && parentChunk !== this;
\t\t});
\t\treturn true;
\t}

\tsplit(newChunk) {
\t\tthis.blocks.forEach(block => {
\t\t\tnewChunk.blocks.push(block);
\t\t\tblock.chunks.push(newChunk);
\t\t});
\t\tthis.chunks.forEach(chunk => {
\t\t\tnewChunk.chunks.push(chunk);
\t\t\tchunk.parents.push(newChunk);
\t\t});
\t\tthis.parents.forEach(parentChunk => {
\t\t\tparentChunk.chunks.push(newChunk);
\t\t\tnewChunk.parents.push(parentChunk);
\t\t});
\t\tthis.entrypoints.forEach(entrypoint => {
\t\t\tentrypoint.insertChunk(newChunk, this);
\t\t});
\t}

\tisEmpty() {
\t\treturn this._modules.size === 0;
\t}

\tupdateHash(hash) {
\t\thash.update(`\${this.id} `);
\t\thash.update(this.ids ? this.ids.join(\",\") : \"\");
\t\thash.update(`\${this.name || \"\"} `);
\t\tthis._modules.forEach(m => m.updateHash(hash));
\t}

\tcanBeIntegrated(otherChunk) {
\t\tif(otherChunk.isInitial()) {
\t\t\treturn false;
\t\t}
\t\tif(this.isInitial()) {
\t\t\tif(otherChunk.parents.length !== 1 || otherChunk.parents[0] !== this) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\treturn true;
\t}

\taddMultiplierAndOverhead(size, options) {
\t\tconst overhead = typeof options.chunkOverhead === \"number\" ? options.chunkOverhead : 10000;
\t\tconst multiplicator = this.isInitial() ? (options.entryChunkMultiplicator || 10) : 1;

\t\treturn size * multiplicator + overhead;
\t}

\tmodulesSize() {
\t\tlet count = 0;
\t\tfor(const module of this._modules) {
\t\t\tcount += module.size();
\t\t}
\t\treturn count;
\t}

\tsize(options) {
\t\treturn this.addMultiplierAndOverhead(this.modulesSize(), options);
\t}

\tintegratedSize(otherChunk, options) {
\t\t// Chunk if it's possible to integrate this chunk
\t\tif(!this.canBeIntegrated(otherChunk)) {
\t\t\treturn false;
\t\t}

\t\tlet integratedModulesSize = this.modulesSize();
\t\t// only count modules that do not exist in this chunk!
\t\tfor(const otherModule of otherChunk._modules) {
\t\t\tif(!this._modules.has(otherModule)) {
\t\t\t\tintegratedModulesSize += otherModule.size();
\t\t\t}
\t\t}

\t\treturn this.addMultiplierAndOverhead(integratedModulesSize, options);
\t}

\tgetChunkMaps(includeEntries, realHash) {
\t\tconst chunksProcessed = [];
\t\tconst chunkHashMap = {};
\t\tconst chunkNameMap = {};
\t\t(function addChunk(chunk) {
\t\t\tif(chunksProcessed.indexOf(chunk) >= 0) return;
\t\t\tchunksProcessed.push(chunk);
\t\t\tif(!chunk.hasRuntime() || includeEntries) {
\t\t\t\tchunkHashMap[chunk.id] = realHash ? chunk.hash : chunk.renderedHash;
\t\t\t\tif(chunk.name)
\t\t\t\t\tchunkNameMap[chunk.id] = chunk.name;
\t\t\t}
\t\t\tchunk.chunks.forEach(addChunk);
\t\t}(this));
\t\treturn {
\t\t\thash: chunkHashMap,
\t\t\tname: chunkNameMap
\t\t};
\t}

\tsortModules(sortByFn) {
\t\tthis._modules.sortWith(sortByFn || sortById);
\t}

\tsortItems() {
\t\tthis.sortModules();
\t\tthis.origins.sort((a, b) => {
\t\t\tconst aIdent = a.module.identifier();
\t\t\tconst bIdent = b.module.identifier();
\t\t\tif(aIdent < bIdent) return -1;
\t\t\tif(aIdent > bIdent) return 1;
\t\t\treturn compareLocations(a.loc, b.loc);
\t\t});
\t\tthis.origins.forEach(origin => {
\t\t\tif(origin.reasons)
\t\t\t\torigin.reasons.sort();
\t\t});
\t\tthis.parents.sort(sortById);
\t\tthis.chunks.sort(sortById);
\t}

\ttoString() {
\t\treturn `Chunk[\${Array.from(this._modules).join()}]`;
\t}

\tcheckConstraints() {
\t\tconst chunk = this;
\t\tchunk.chunks.forEach((child, idx) => {
\t\t\tif(chunk.chunks.indexOf(child) !== idx)
\t\t\t\tthrow new Error(`checkConstraints: duplicate child in chunk \${chunk.debugId} \${child.debugId}`);
\t\t\tif(child.parents.indexOf(chunk) < 0)
\t\t\t\tthrow new Error(`checkConstraints: child missing parent \${chunk.debugId} -> \${child.debugId}`);
\t\t});
\t\tchunk.parents.forEach((parentChunk, idx) => {
\t\t\tif(chunk.parents.indexOf(parentChunk) !== idx)
\t\t\t\tthrow new Error(`checkConstraints: duplicate parent in chunk \${chunk.debugId} \${parentChunk.debugId}`);
\t\t\tif(parentChunk.chunks.indexOf(chunk) < 0)
\t\t\t\tthrow new Error(`checkConstraints: parent missing child \${parentChunk.debugId} <- \${chunk.debugId}`);
\t\t});
\t}
}

Object.defineProperty(Chunk.prototype, \"modules\", {
\tconfigurable: false,
\tget: util.deprecate(function() {
\t\treturn Array.from(this._modules);
\t}, \"Chunk.modules is deprecated. Use Chunk.getNumberOfModules/mapModules/forEachModule/containsModule instead.\"),
\tset: util.deprecate(function(value) {
\t\tthis.setModules(value);
\t}, \"Chunk.modules is deprecated. Use Chunk.addModule/removeModule instead.\")
});

module.exports = Chunk;
";
        
        $__internal_f727e76cba79122f4e2e599b9ab9d8682f91d43e874a3da43e1a21e1e05b1ab1->leave($__internal_f727e76cba79122f4e2e599b9ab9d8682f91d43e874a3da43e1a21e1e05b1ab1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/lib/Chunk.js";
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

const util = require(\"util\");
const compareLocations = require(\"./compareLocations\");
const SortableSet = require(\"./util/SortableSet\");
let debugId = 1000;

const sortById = (a, b) => {
\tif(a.id < b.id) return -1;
\tif(b.id < a.id) return 1;
\treturn 0;
};

const sortByIdentifier = (a, b) => {
\tif(a.identifier() > b.identifier()) return 1;
\tif(a.identifier() < b.identifier()) return -1;
\treturn 0;
};

class Chunk {

\tconstructor(name, module, loc) {
\t\tthis.id = null;
\t\tthis.ids = null;
\t\tthis.debugId = debugId++;
\t\tthis.name = name;
\t\tthis._modules = new SortableSet(undefined, sortByIdentifier);
\t\tthis.entrypoints = [];
\t\tthis.chunks = [];
\t\tthis.parents = [];
\t\tthis.blocks = [];
\t\tthis.origins = [];
\t\tthis.files = [];
\t\tthis.rendered = false;
\t\tif(module) {
\t\t\tthis.origins.push({
\t\t\t\tmodule,
\t\t\t\tloc,
\t\t\t\tname
\t\t\t});
\t\t}
\t}

\tget entry() {
\t\tthrow new Error(\"Chunk.entry was removed. Use hasRuntime()\");
\t}

\tset entry(data) {
\t\tthrow new Error(\"Chunk.entry was removed. Use hasRuntime()\");
\t}

\tget initial() {
\t\tthrow new Error(\"Chunk.initial was removed. Use isInitial()\");
\t}

\tset initial(data) {
\t\tthrow new Error(\"Chunk.initial was removed. Use isInitial()\");
\t}

\thasRuntime() {
\t\tif(this.entrypoints.length === 0) return false;
\t\treturn this.entrypoints[0].chunks[0] === this;
\t}

\tisInitial() {
\t\treturn this.entrypoints.length > 0;
\t}

\thasEntryModule() {
\t\treturn !!this.entryModule;
\t}

\taddToCollection(collection, item) {
\t\tif(item === this) {
\t\t\treturn false;
\t\t}

\t\tif(collection.indexOf(item) > -1) {
\t\t\treturn false;
\t\t}

\t\tcollection.push(item);
\t\treturn true;
\t}

\taddChunk(chunk) {
\t\treturn this.addToCollection(this.chunks, chunk);
\t}

\taddParent(parentChunk) {
\t\treturn this.addToCollection(this.parents, parentChunk);
\t}

\taddModule(module) {
\t\tif(!this._modules.has(module)) {
\t\t\tthis._modules.add(module);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\taddBlock(block) {
\t\treturn this.addToCollection(this.blocks, block);
\t}

\tremoveModule(module) {
\t\tif(this._modules.delete(module)) {
\t\t\tmodule.removeChunk(this);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\tremoveChunk(chunk) {
\t\tconst idx = this.chunks.indexOf(chunk);
\t\tif(idx >= 0) {
\t\t\tthis.chunks.splice(idx, 1);
\t\t\tchunk.removeParent(this);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\tremoveParent(chunk) {
\t\tconst idx = this.parents.indexOf(chunk);
\t\tif(idx >= 0) {
\t\t\tthis.parents.splice(idx, 1);
\t\t\tchunk.removeChunk(this);
\t\t\treturn true;
\t\t}
\t\treturn false;
\t}

\taddOrigin(module, loc) {
\t\tthis.origins.push({
\t\t\tmodule,
\t\t\tloc,
\t\t\tname: this.name
\t\t});
\t}

\tsetModules(modules) {
\t\tthis._modules = new SortableSet(modules, sortByIdentifier);
\t}

\tgetNumberOfModules() {
\t\treturn this._modules.size;
\t}

\tget modulesIterable() {
\t\treturn this._modules;
\t}

\tforEachModule(fn) {
\t\tthis._modules.forEach(fn);
\t}

\tmapModules(fn) {
\t\treturn Array.from(this._modules, fn);
\t}

\tcompareTo(otherChunk) {
\t\tthis._modules.sort();
\t\totherChunk._modules.sort();
\t\tif(this._modules.size > otherChunk._modules.size) return -1;
\t\tif(this._modules.size < otherChunk._modules.size) return 1;
\t\tconst a = this._modules[Symbol.iterator]();
\t\tconst b = otherChunk._modules[Symbol.iterator]();
\t\twhile(true) { // eslint-disable-line
\t\t\tconst aItem = a.next();
\t\t\tconst bItem = b.next();
\t\t\tif(aItem.done) return 0;
\t\t\tconst aModuleIdentifier = aItem.value.identifier();
\t\t\tconst bModuleIdentifier = bItem.value.identifier();
\t\t\tif(aModuleIdentifier > bModuleIdentifier) return -1;
\t\t\tif(aModuleIdentifier < bModuleIdentifier) return 1;
\t\t}
\t}

\tcontainsModule(module) {
\t\treturn this._modules.has(module);
\t}

\tgetModules() {
\t\treturn Array.from(this._modules);
\t}

\tgetModulesIdent() {
\t\tthis._modules.sort();
\t\tlet str = \"\";
\t\tthis._modules.forEach(m => {
\t\t\tstr += m.identifier() + \"#\";
\t\t});
\t\treturn str;
\t}

\tremove(reason) {
\t\t// cleanup modules
\t\t// Array.from is used here to create a clone, because removeChunk modifies this._modules
\t\tArray.from(this._modules).forEach(module => {
\t\t\tmodule.removeChunk(this);
\t\t});

\t\t// cleanup parents
\t\tthis.parents.forEach(parentChunk => {
\t\t\t// remove this chunk from its parents
\t\t\tconst idx = parentChunk.chunks.indexOf(this);
\t\t\tif(idx >= 0) {
\t\t\t\tparentChunk.chunks.splice(idx, 1);
\t\t\t}

\t\t\t// cleanup \"sub chunks\"
\t\t\tthis.chunks.forEach(chunk => {
\t\t\t\t/**
\t\t\t\t * remove this chunk as \"intermediary\" and connect
\t\t\t\t * it \"sub chunks\" and parents directly
\t\t\t\t */
\t\t\t\t// add parent to each \"sub chunk\"
\t\t\t\tchunk.addParent(parentChunk);
\t\t\t\t// add \"sub chunk\" to parent
\t\t\t\tparentChunk.addChunk(chunk);
\t\t\t});
\t\t});

\t\t/**
\t\t * we need to iterate again over the chunks
\t\t * to remove this from the chunks parents.
\t\t * This can not be done in the above loop
\t\t * as it is not garuanteed that `this.parents` contains anything.
\t\t */
\t\tthis.chunks.forEach(chunk => {
\t\t\t// remove this as parent of every \"sub chunk\"
\t\t\tconst idx = chunk.parents.indexOf(this);
\t\t\tif(idx >= 0) {
\t\t\t\tchunk.parents.splice(idx, 1);
\t\t\t}
\t\t});

\t\t// cleanup blocks
\t\tthis.blocks.forEach(block => {
\t\t\tconst idx = block.chunks.indexOf(this);
\t\t\tif(idx >= 0) {
\t\t\t\tblock.chunks.splice(idx, 1);
\t\t\t\tif(block.chunks.length === 0) {
\t\t\t\t\tblock.chunks = null;
\t\t\t\t\tblock.chunkReason = reason;
\t\t\t\t}
\t\t\t}
\t\t});
\t}

\tmoveModule(module, otherChunk) {
\t\tmodule.removeChunk(this);
\t\tmodule.addChunk(otherChunk);
\t\totherChunk.addModule(module);
\t\tmodule.rewriteChunkInReasons(this, [otherChunk]);
\t}

\treplaceChunk(oldChunk, newChunk) {
\t\tconst idx = this.chunks.indexOf(oldChunk);
\t\tif(idx >= 0) {
\t\t\tthis.chunks.splice(idx, 1);
\t\t}
\t\tif(this !== newChunk && newChunk.addParent(this)) {
\t\t\tthis.addChunk(newChunk);
\t\t}
\t}

\treplaceParentChunk(oldParentChunk, newParentChunk) {
\t\tconst idx = this.parents.indexOf(oldParentChunk);
\t\tif(idx >= 0) {
\t\t\tthis.parents.splice(idx, 1);
\t\t}
\t\tif(this !== newParentChunk && newParentChunk.addChunk(this)) {
\t\t\tthis.addParent(newParentChunk);
\t\t}
\t}

\tintegrate(otherChunk, reason) {
\t\tif(!this.canBeIntegrated(otherChunk)) {
\t\t\treturn false;
\t\t}

\t\t// Array.from is used here to create a clone, because moveModule modifies otherChunk._modules
\t\tconst otherChunkModules = Array.from(otherChunk._modules);
\t\totherChunkModules.forEach(module => otherChunk.moveModule(module, this));
\t\totherChunk._modules.clear();

\t\totherChunk.parents.forEach(parentChunk => parentChunk.replaceChunk(otherChunk, this));
\t\totherChunk.parents.length = 0;

\t\totherChunk.chunks.forEach(chunk => chunk.replaceParentChunk(otherChunk, this));
\t\totherChunk.chunks.length = 0;

\t\totherChunk.blocks.forEach(b => {
\t\t\tb.chunks = b.chunks ? b.chunks.map(c => {
\t\t\t\treturn c === otherChunk ? this : c;
\t\t\t}) : [this];
\t\t\tb.chunkReason = reason;
\t\t\tthis.addBlock(b);
\t\t});
\t\totherChunk.blocks.length = 0;

\t\totherChunk.origins.forEach(origin => {
\t\t\tthis.origins.push(origin);
\t\t});
\t\tthis.origins.forEach(origin => {
\t\t\tif(!origin.reasons) {
\t\t\t\torigin.reasons = [reason];
\t\t\t} else if(origin.reasons[0] !== reason) {
\t\t\t\torigin.reasons.unshift(reason);
\t\t\t}
\t\t});
\t\tthis.chunks = this.chunks.filter(chunk => {
\t\t\treturn chunk !== otherChunk && chunk !== this;
\t\t});
\t\tthis.parents = this.parents.filter(parentChunk => {
\t\t\treturn parentChunk !== otherChunk && parentChunk !== this;
\t\t});
\t\treturn true;
\t}

\tsplit(newChunk) {
\t\tthis.blocks.forEach(block => {
\t\t\tnewChunk.blocks.push(block);
\t\t\tblock.chunks.push(newChunk);
\t\t});
\t\tthis.chunks.forEach(chunk => {
\t\t\tnewChunk.chunks.push(chunk);
\t\t\tchunk.parents.push(newChunk);
\t\t});
\t\tthis.parents.forEach(parentChunk => {
\t\t\tparentChunk.chunks.push(newChunk);
\t\t\tnewChunk.parents.push(parentChunk);
\t\t});
\t\tthis.entrypoints.forEach(entrypoint => {
\t\t\tentrypoint.insertChunk(newChunk, this);
\t\t});
\t}

\tisEmpty() {
\t\treturn this._modules.size === 0;
\t}

\tupdateHash(hash) {
\t\thash.update(`\${this.id} `);
\t\thash.update(this.ids ? this.ids.join(\",\") : \"\");
\t\thash.update(`\${this.name || \"\"} `);
\t\tthis._modules.forEach(m => m.updateHash(hash));
\t}

\tcanBeIntegrated(otherChunk) {
\t\tif(otherChunk.isInitial()) {
\t\t\treturn false;
\t\t}
\t\tif(this.isInitial()) {
\t\t\tif(otherChunk.parents.length !== 1 || otherChunk.parents[0] !== this) {
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\treturn true;
\t}

\taddMultiplierAndOverhead(size, options) {
\t\tconst overhead = typeof options.chunkOverhead === \"number\" ? options.chunkOverhead : 10000;
\t\tconst multiplicator = this.isInitial() ? (options.entryChunkMultiplicator || 10) : 1;

\t\treturn size * multiplicator + overhead;
\t}

\tmodulesSize() {
\t\tlet count = 0;
\t\tfor(const module of this._modules) {
\t\t\tcount += module.size();
\t\t}
\t\treturn count;
\t}

\tsize(options) {
\t\treturn this.addMultiplierAndOverhead(this.modulesSize(), options);
\t}

\tintegratedSize(otherChunk, options) {
\t\t// Chunk if it's possible to integrate this chunk
\t\tif(!this.canBeIntegrated(otherChunk)) {
\t\t\treturn false;
\t\t}

\t\tlet integratedModulesSize = this.modulesSize();
\t\t// only count modules that do not exist in this chunk!
\t\tfor(const otherModule of otherChunk._modules) {
\t\t\tif(!this._modules.has(otherModule)) {
\t\t\t\tintegratedModulesSize += otherModule.size();
\t\t\t}
\t\t}

\t\treturn this.addMultiplierAndOverhead(integratedModulesSize, options);
\t}

\tgetChunkMaps(includeEntries, realHash) {
\t\tconst chunksProcessed = [];
\t\tconst chunkHashMap = {};
\t\tconst chunkNameMap = {};
\t\t(function addChunk(chunk) {
\t\t\tif(chunksProcessed.indexOf(chunk) >= 0) return;
\t\t\tchunksProcessed.push(chunk);
\t\t\tif(!chunk.hasRuntime() || includeEntries) {
\t\t\t\tchunkHashMap[chunk.id] = realHash ? chunk.hash : chunk.renderedHash;
\t\t\t\tif(chunk.name)
\t\t\t\t\tchunkNameMap[chunk.id] = chunk.name;
\t\t\t}
\t\t\tchunk.chunks.forEach(addChunk);
\t\t}(this));
\t\treturn {
\t\t\thash: chunkHashMap,
\t\t\tname: chunkNameMap
\t\t};
\t}

\tsortModules(sortByFn) {
\t\tthis._modules.sortWith(sortByFn || sortById);
\t}

\tsortItems() {
\t\tthis.sortModules();
\t\tthis.origins.sort((a, b) => {
\t\t\tconst aIdent = a.module.identifier();
\t\t\tconst bIdent = b.module.identifier();
\t\t\tif(aIdent < bIdent) return -1;
\t\t\tif(aIdent > bIdent) return 1;
\t\t\treturn compareLocations(a.loc, b.loc);
\t\t});
\t\tthis.origins.forEach(origin => {
\t\t\tif(origin.reasons)
\t\t\t\torigin.reasons.sort();
\t\t});
\t\tthis.parents.sort(sortById);
\t\tthis.chunks.sort(sortById);
\t}

\ttoString() {
\t\treturn `Chunk[\${Array.from(this._modules).join()}]`;
\t}

\tcheckConstraints() {
\t\tconst chunk = this;
\t\tchunk.chunks.forEach((child, idx) => {
\t\t\tif(chunk.chunks.indexOf(child) !== idx)
\t\t\t\tthrow new Error(`checkConstraints: duplicate child in chunk \${chunk.debugId} \${child.debugId}`);
\t\t\tif(child.parents.indexOf(chunk) < 0)
\t\t\t\tthrow new Error(`checkConstraints: child missing parent \${chunk.debugId} -> \${child.debugId}`);
\t\t});
\t\tchunk.parents.forEach((parentChunk, idx) => {
\t\t\tif(chunk.parents.indexOf(parentChunk) !== idx)
\t\t\t\tthrow new Error(`checkConstraints: duplicate parent in chunk \${chunk.debugId} \${parentChunk.debugId}`);
\t\t\tif(parentChunk.chunks.indexOf(chunk) < 0)
\t\t\t\tthrow new Error(`checkConstraints: parent missing child \${parentChunk.debugId} <- \${chunk.debugId}`);
\t\t});
\t}
}

Object.defineProperty(Chunk.prototype, \"modules\", {
\tconfigurable: false,
\tget: util.deprecate(function() {
\t\treturn Array.from(this._modules);
\t}, \"Chunk.modules is deprecated. Use Chunk.getNumberOfModules/mapModules/forEachModule/containsModule instead.\"),
\tset: util.deprecate(function(value) {
\t\tthis.setModules(value);
\t}, \"Chunk.modules is deprecated. Use Chunk.addModule/removeModule instead.\")
});

module.exports = Chunk;
", "node_modules/webpack/lib/Chunk.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/lib/Chunk.js");
    }
}
