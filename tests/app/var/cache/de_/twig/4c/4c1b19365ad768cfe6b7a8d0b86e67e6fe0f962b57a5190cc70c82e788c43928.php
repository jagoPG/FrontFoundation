<?php

/* node_modules/source-map/dist/source-map.js */
class __TwigTemplate_334f59a0d2b392e4a33383bb02ba8f7aa32368214843dc3d1159ceffffbb716d extends Twig_Template
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
        $__internal_b34d5de444a55f16db0253edf4ca49d71f78bce51c8822a37d0385bbafb82740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34d5de444a55f16db0253edf4ca49d71f78bce51c8822a37d0385bbafb82740->enter($__internal_b34d5de444a55f16db0253edf4ca49d71f78bce51c8822a37d0385bbafb82740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/source-map/dist/source-map.js"));

        // line 1
        echo "(function webpackUniversalModuleDefinition(root, factory) {
\tif(typeof exports === 'object' && typeof module === 'object')
\t\tmodule.exports = factory();
\telse if(typeof define === 'function' && define.amd)
\t\tdefine([], factory);
\telse if(typeof exports === 'object')
\t\texports[\"sourceMap\"] = factory();
\telse
\t\troot[\"sourceMap\"] = factory();
})(this, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ \t// The module cache
/******/ \tvar installedModules = {};

/******/ \t// The require function
/******/ \tfunction __webpack_require__(moduleId) {

/******/ \t\t// Check if module is in cache
/******/ \t\tif(installedModules[moduleId])
/******/ \t\t\treturn installedModules[moduleId].exports;

/******/ \t\t// Create a new module (and put it into the cache)
/******/ \t\tvar module = installedModules[moduleId] = {
/******/ \t\t\texports: {},
/******/ \t\t\tid: moduleId,
/******/ \t\t\tloaded: false
/******/ \t\t};

/******/ \t\t// Execute the module function
/******/ \t\tmodules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ \t\t// Flag the module as loaded
/******/ \t\tmodule.loaded = true;

/******/ \t\t// Return the exports of the module
/******/ \t\treturn module.exports;
/******/ \t}


/******/ \t// expose the modules object (__webpack_modules__)
/******/ \t__webpack_require__.m = modules;

/******/ \t// expose the module cache
/******/ \t__webpack_require__.c = installedModules;

/******/ \t// __webpack_public_path__
/******/ \t__webpack_require__.p = \"\";

/******/ \t// Load entry module and return exports
/******/ \treturn __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

\t/*
\t * Copyright 2009-2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE.txt or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */
\texports.SourceMapGenerator = __webpack_require__(1).SourceMapGenerator;
\texports.SourceMapConsumer = __webpack_require__(7).SourceMapConsumer;
\texports.SourceNode = __webpack_require__(10).SourceNode;


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar base64VLQ = __webpack_require__(2);
\tvar util = __webpack_require__(4);
\tvar ArraySet = __webpack_require__(5).ArraySet;
\tvar MappingList = __webpack_require__(6).MappingList;

\t/**
\t * An instance of the SourceMapGenerator represents a source map which is
\t * being built incrementally. You may pass an object with the following
\t * properties:
\t *
\t *   - file: The filename of the generated source.
\t *   - sourceRoot: A root for all relative URLs in this source map.
\t */
\tfunction SourceMapGenerator(aArgs) {
\t  if (!aArgs) {
\t    aArgs = {};
\t  }
\t  this._file = util.getArg(aArgs, 'file', null);
\t  this._sourceRoot = util.getArg(aArgs, 'sourceRoot', null);
\t  this._skipValidation = util.getArg(aArgs, 'skipValidation', false);
\t  this._sources = new ArraySet();
\t  this._names = new ArraySet();
\t  this._mappings = new MappingList();
\t  this._sourcesContents = null;
\t}

\tSourceMapGenerator.prototype._version = 3;

\t/**
\t * Creates a new SourceMapGenerator based on a SourceMapConsumer
\t *
\t * @param aSourceMapConsumer The SourceMap.
\t */
\tSourceMapGenerator.fromSourceMap =
\t  function SourceMapGenerator_fromSourceMap(aSourceMapConsumer) {
\t    var sourceRoot = aSourceMapConsumer.sourceRoot;
\t    var generator = new SourceMapGenerator({
\t      file: aSourceMapConsumer.file,
\t      sourceRoot: sourceRoot
\t    });
\t    aSourceMapConsumer.eachMapping(function (mapping) {
\t      var newMapping = {
\t        generated: {
\t          line: mapping.generatedLine,
\t          column: mapping.generatedColumn
\t        }
\t      };

\t      if (mapping.source != null) {
\t        newMapping.source = mapping.source;
\t        if (sourceRoot != null) {
\t          newMapping.source = util.relative(sourceRoot, newMapping.source);
\t        }

\t        newMapping.original = {
\t          line: mapping.originalLine,
\t          column: mapping.originalColumn
\t        };

\t        if (mapping.name != null) {
\t          newMapping.name = mapping.name;
\t        }
\t      }

\t      generator.addMapping(newMapping);
\t    });
\t    aSourceMapConsumer.sources.forEach(function (sourceFile) {
\t      var content = aSourceMapConsumer.sourceContentFor(sourceFile);
\t      if (content != null) {
\t        generator.setSourceContent(sourceFile, content);
\t      }
\t    });
\t    return generator;
\t  };

\t/**
\t * Add a single mapping from original source line and column to the generated
\t * source's line and column for this source map being created. The mapping
\t * object should have the following properties:
\t *
\t *   - generated: An object with the generated line and column positions.
\t *   - original: An object with the original line and column positions.
\t *   - source: The original source file (relative to the sourceRoot).
\t *   - name: An optional original token name for this mapping.
\t */
\tSourceMapGenerator.prototype.addMapping =
\t  function SourceMapGenerator_addMapping(aArgs) {
\t    var generated = util.getArg(aArgs, 'generated');
\t    var original = util.getArg(aArgs, 'original', null);
\t    var source = util.getArg(aArgs, 'source', null);
\t    var name = util.getArg(aArgs, 'name', null);

\t    if (!this._skipValidation) {
\t      this._validateMapping(generated, original, source, name);
\t    }

\t    if (source != null) {
\t      source = String(source);
\t      if (!this._sources.has(source)) {
\t        this._sources.add(source);
\t      }
\t    }

\t    if (name != null) {
\t      name = String(name);
\t      if (!this._names.has(name)) {
\t        this._names.add(name);
\t      }
\t    }

\t    this._mappings.add({
\t      generatedLine: generated.line,
\t      generatedColumn: generated.column,
\t      originalLine: original != null && original.line,
\t      originalColumn: original != null && original.column,
\t      source: source,
\t      name: name
\t    });
\t  };

\t/**
\t * Set the source content for a source file.
\t */
\tSourceMapGenerator.prototype.setSourceContent =
\t  function SourceMapGenerator_setSourceContent(aSourceFile, aSourceContent) {
\t    var source = aSourceFile;
\t    if (this._sourceRoot != null) {
\t      source = util.relative(this._sourceRoot, source);
\t    }

\t    if (aSourceContent != null) {
\t      // Add the source content to the _sourcesContents map.
\t      // Create a new _sourcesContents map if the property is null.
\t      if (!this._sourcesContents) {
\t        this._sourcesContents = Object.create(null);
\t      }
\t      this._sourcesContents[util.toSetString(source)] = aSourceContent;
\t    } else if (this._sourcesContents) {
\t      // Remove the source file from the _sourcesContents map.
\t      // If the _sourcesContents map is empty, set the property to null.
\t      delete this._sourcesContents[util.toSetString(source)];
\t      if (Object.keys(this._sourcesContents).length === 0) {
\t        this._sourcesContents = null;
\t      }
\t    }
\t  };

\t/**
\t * Applies the mappings of a sub-source-map for a specific source file to the
\t * source map being generated. Each mapping to the supplied source file is
\t * rewritten using the supplied source map. Note: The resolution for the
\t * resulting mappings is the minimium of this map and the supplied map.
\t *
\t * @param aSourceMapConsumer The source map to be applied.
\t * @param aSourceFile Optional. The filename of the source file.
\t *        If omitted, SourceMapConsumer's file property will be used.
\t * @param aSourceMapPath Optional. The dirname of the path to the source map
\t *        to be applied. If relative, it is relative to the SourceMapConsumer.
\t *        This parameter is needed when the two source maps aren't in the same
\t *        directory, and the source map to be applied contains relative source
\t *        paths. If so, those relative source paths need to be rewritten
\t *        relative to the SourceMapGenerator.
\t */
\tSourceMapGenerator.prototype.applySourceMap =
\t  function SourceMapGenerator_applySourceMap(aSourceMapConsumer, aSourceFile, aSourceMapPath) {
\t    var sourceFile = aSourceFile;
\t    // If aSourceFile is omitted, we will use the file property of the SourceMap
\t    if (aSourceFile == null) {
\t      if (aSourceMapConsumer.file == null) {
\t        throw new Error(
\t          'SourceMapGenerator.prototype.applySourceMap requires either an explicit source file, ' +
\t          'or the source map\\'s \"file\" property. Both were omitted.'
\t        );
\t      }
\t      sourceFile = aSourceMapConsumer.file;
\t    }
\t    var sourceRoot = this._sourceRoot;
\t    // Make \"sourceFile\" relative if an absolute Url is passed.
\t    if (sourceRoot != null) {
\t      sourceFile = util.relative(sourceRoot, sourceFile);
\t    }
\t    // Applying the SourceMap can add and remove items from the sources and
\t    // the names array.
\t    var newSources = new ArraySet();
\t    var newNames = new ArraySet();

\t    // Find mappings for the \"sourceFile\"
\t    this._mappings.unsortedForEach(function (mapping) {
\t      if (mapping.source === sourceFile && mapping.originalLine != null) {
\t        // Check if it can be mapped by the source map, then update the mapping.
\t        var original = aSourceMapConsumer.originalPositionFor({
\t          line: mapping.originalLine,
\t          column: mapping.originalColumn
\t        });
\t        if (original.source != null) {
\t          // Copy mapping
\t          mapping.source = original.source;
\t          if (aSourceMapPath != null) {
\t            mapping.source = util.join(aSourceMapPath, mapping.source)
\t          }
\t          if (sourceRoot != null) {
\t            mapping.source = util.relative(sourceRoot, mapping.source);
\t          }
\t          mapping.originalLine = original.line;
\t          mapping.originalColumn = original.column;
\t          if (original.name != null) {
\t            mapping.name = original.name;
\t          }
\t        }
\t      }

\t      var source = mapping.source;
\t      if (source != null && !newSources.has(source)) {
\t        newSources.add(source);
\t      }

\t      var name = mapping.name;
\t      if (name != null && !newNames.has(name)) {
\t        newNames.add(name);
\t      }

\t    }, this);
\t    this._sources = newSources;
\t    this._names = newNames;

\t    // Copy sourcesContents of applied map.
\t    aSourceMapConsumer.sources.forEach(function (sourceFile) {
\t      var content = aSourceMapConsumer.sourceContentFor(sourceFile);
\t      if (content != null) {
\t        if (aSourceMapPath != null) {
\t          sourceFile = util.join(aSourceMapPath, sourceFile);
\t        }
\t        if (sourceRoot != null) {
\t          sourceFile = util.relative(sourceRoot, sourceFile);
\t        }
\t        this.setSourceContent(sourceFile, content);
\t      }
\t    }, this);
\t  };

\t/**
\t * A mapping can have one of the three levels of data:
\t *
\t *   1. Just the generated position.
\t *   2. The Generated position, original position, and original source.
\t *   3. Generated and original position, original source, as well as a name
\t *      token.
\t *
\t * To maintain consistency, we validate that any new mapping being added falls
\t * in to one of these categories.
\t */
\tSourceMapGenerator.prototype._validateMapping =
\t  function SourceMapGenerator_validateMapping(aGenerated, aOriginal, aSource,
\t                                              aName) {
\t    // When aOriginal is truthy but has empty values for .line and .column,
\t    // it is most likely a programmer error. In this case we throw a very
\t    // specific error message to try to guide them the right way.
\t    // For example: https://github.com/Polymer/polymer-bundler/pull/519
\t    if (aOriginal && typeof aOriginal.line !== 'number' && typeof aOriginal.column !== 'number') {
\t        throw new Error(
\t            'original.line and original.column are not numbers -- you probably meant to omit ' +
\t            'the original mapping entirely and only map the generated position. If so, pass ' +
\t            'null for the original mapping instead of an object with empty or null values.'
\t        );
\t    }

\t    if (aGenerated && 'line' in aGenerated && 'column' in aGenerated
\t        && aGenerated.line > 0 && aGenerated.column >= 0
\t        && !aOriginal && !aSource && !aName) {
\t      // Case 1.
\t      return;
\t    }
\t    else if (aGenerated && 'line' in aGenerated && 'column' in aGenerated
\t             && aOriginal && 'line' in aOriginal && 'column' in aOriginal
\t             && aGenerated.line > 0 && aGenerated.column >= 0
\t             && aOriginal.line > 0 && aOriginal.column >= 0
\t             && aSource) {
\t      // Cases 2 and 3.
\t      return;
\t    }
\t    else {
\t      throw new Error('Invalid mapping: ' + JSON.stringify({
\t        generated: aGenerated,
\t        source: aSource,
\t        original: aOriginal,
\t        name: aName
\t      }));
\t    }
\t  };

\t/**
\t * Serialize the accumulated mappings in to the stream of base 64 VLQs
\t * specified by the source map format.
\t */
\tSourceMapGenerator.prototype._serializeMappings =
\t  function SourceMapGenerator_serializeMappings() {
\t    var previousGeneratedColumn = 0;
\t    var previousGeneratedLine = 1;
\t    var previousOriginalColumn = 0;
\t    var previousOriginalLine = 0;
\t    var previousName = 0;
\t    var previousSource = 0;
\t    var result = '';
\t    var next;
\t    var mapping;
\t    var nameIdx;
\t    var sourceIdx;

\t    var mappings = this._mappings.toArray();
\t    for (var i = 0, len = mappings.length; i < len; i++) {
\t      mapping = mappings[i];
\t      next = ''

\t      if (mapping.generatedLine !== previousGeneratedLine) {
\t        previousGeneratedColumn = 0;
\t        while (mapping.generatedLine !== previousGeneratedLine) {
\t          next += ';';
\t          previousGeneratedLine++;
\t        }
\t      }
\t      else {
\t        if (i > 0) {
\t          if (!util.compareByGeneratedPositionsInflated(mapping, mappings[i - 1])) {
\t            continue;
\t          }
\t          next += ',';
\t        }
\t      }

\t      next += base64VLQ.encode(mapping.generatedColumn
\t                                 - previousGeneratedColumn);
\t      previousGeneratedColumn = mapping.generatedColumn;

\t      if (mapping.source != null) {
\t        sourceIdx = this._sources.indexOf(mapping.source);
\t        next += base64VLQ.encode(sourceIdx - previousSource);
\t        previousSource = sourceIdx;

\t        // lines are stored 0-based in SourceMap spec version 3
\t        next += base64VLQ.encode(mapping.originalLine - 1
\t                                   - previousOriginalLine);
\t        previousOriginalLine = mapping.originalLine - 1;

\t        next += base64VLQ.encode(mapping.originalColumn
\t                                   - previousOriginalColumn);
\t        previousOriginalColumn = mapping.originalColumn;

\t        if (mapping.name != null) {
\t          nameIdx = this._names.indexOf(mapping.name);
\t          next += base64VLQ.encode(nameIdx - previousName);
\t          previousName = nameIdx;
\t        }
\t      }

\t      result += next;
\t    }

\t    return result;
\t  };

\tSourceMapGenerator.prototype._generateSourcesContent =
\t  function SourceMapGenerator_generateSourcesContent(aSources, aSourceRoot) {
\t    return aSources.map(function (source) {
\t      if (!this._sourcesContents) {
\t        return null;
\t      }
\t      if (aSourceRoot != null) {
\t        source = util.relative(aSourceRoot, source);
\t      }
\t      var key = util.toSetString(source);
\t      return Object.prototype.hasOwnProperty.call(this._sourcesContents, key)
\t        ? this._sourcesContents[key]
\t        : null;
\t    }, this);
\t  };

\t/**
\t * Externalize the source map.
\t */
\tSourceMapGenerator.prototype.toJSON =
\t  function SourceMapGenerator_toJSON() {
\t    var map = {
\t      version: this._version,
\t      sources: this._sources.toArray(),
\t      names: this._names.toArray(),
\t      mappings: this._serializeMappings()
\t    };
\t    if (this._file != null) {
\t      map.file = this._file;
\t    }
\t    if (this._sourceRoot != null) {
\t      map.sourceRoot = this._sourceRoot;
\t    }
\t    if (this._sourcesContents) {
\t      map.sourcesContent = this._generateSourcesContent(map.sources, map.sourceRoot);
\t    }

\t    return map;
\t  };

\t/**
\t * Render the source map being generated to a string.
\t */
\tSourceMapGenerator.prototype.toString =
\t  function SourceMapGenerator_toString() {
\t    return JSON.stringify(this.toJSON());
\t  };

\texports.SourceMapGenerator = SourceMapGenerator;


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t *
\t * Based on the Base 64 VLQ implementation in Closure Compiler:
\t * https://code.google.com/p/closure-compiler/source/browse/trunk/src/com/google/debugging/sourcemap/Base64VLQ.java
\t *
\t * Copyright 2011 The Closure Compiler Authors. All rights reserved.
\t * Redistribution and use in source and binary forms, with or without
\t * modification, are permitted provided that the following conditions are
\t * met:
\t *
\t *  * Redistributions of source code must retain the above copyright
\t *    notice, this list of conditions and the following disclaimer.
\t *  * Redistributions in binary form must reproduce the above
\t *    copyright notice, this list of conditions and the following
\t *    disclaimer in the documentation and/or other materials provided
\t *    with the distribution.
\t *  * Neither the name of Google Inc. nor the names of its
\t *    contributors may be used to endorse or promote products derived
\t *    from this software without specific prior written permission.
\t *
\t * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
\t * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
\t * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
\t * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
\t * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
\t * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
\t * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
\t * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
\t * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
\t * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
\t * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
\t */

\tvar base64 = __webpack_require__(3);

\t// A single base 64 digit can contain 6 bits of data. For the base 64 variable
\t// length quantities we use in the source map spec, the first bit is the sign,
\t// the next four bits are the actual value, and the 6th bit is the
\t// continuation bit. The continuation bit tells us whether there are more
\t// digits in this value following this digit.
\t//
\t//   Continuation
\t//   |    Sign
\t//   |    |
\t//   V    V
\t//   101011

\tvar VLQ_BASE_SHIFT = 5;

\t// binary: 100000
\tvar VLQ_BASE = 1 << VLQ_BASE_SHIFT;

\t// binary: 011111
\tvar VLQ_BASE_MASK = VLQ_BASE - 1;

\t// binary: 100000
\tvar VLQ_CONTINUATION_BIT = VLQ_BASE;

\t/**
\t * Converts from a two-complement value to a value where the sign bit is
\t * placed in the least significant bit.  For example, as decimals:
\t *   1 becomes 2 (10 binary), -1 becomes 3 (11 binary)
\t *   2 becomes 4 (100 binary), -2 becomes 5 (101 binary)
\t */
\tfunction toVLQSigned(aValue) {
\t  return aValue < 0
\t    ? ((-aValue) << 1) + 1
\t    : (aValue << 1) + 0;
\t}

\t/**
\t * Converts to a two-complement value from a value where the sign bit is
\t * placed in the least significant bit.  For example, as decimals:
\t *   2 (10 binary) becomes 1, 3 (11 binary) becomes -1
\t *   4 (100 binary) becomes 2, 5 (101 binary) becomes -2
\t */
\tfunction fromVLQSigned(aValue) {
\t  var isNegative = (aValue & 1) === 1;
\t  var shifted = aValue >> 1;
\t  return isNegative
\t    ? -shifted
\t    : shifted;
\t}

\t/**
\t * Returns the base 64 VLQ encoded value.
\t */
\texports.encode = function base64VLQ_encode(aValue) {
\t  var encoded = \"\";
\t  var digit;

\t  var vlq = toVLQSigned(aValue);

\t  do {
\t    digit = vlq & VLQ_BASE_MASK;
\t    vlq >>>= VLQ_BASE_SHIFT;
\t    if (vlq > 0) {
\t      // There are still more digits in this value, so we must make sure the
\t      // continuation bit is marked.
\t      digit |= VLQ_CONTINUATION_BIT;
\t    }
\t    encoded += base64.encode(digit);
\t  } while (vlq > 0);

\t  return encoded;
\t};

\t/**
\t * Decodes the next base 64 VLQ value from the given string and returns the
\t * value and the rest of the string via the out parameter.
\t */
\texports.decode = function base64VLQ_decode(aStr, aIndex, aOutParam) {
\t  var strLen = aStr.length;
\t  var result = 0;
\t  var shift = 0;
\t  var continuation, digit;

\t  do {
\t    if (aIndex >= strLen) {
\t      throw new Error(\"Expected more digits in base 64 VLQ value.\");
\t    }

\t    digit = base64.decode(aStr.charCodeAt(aIndex++));
\t    if (digit === -1) {
\t      throw new Error(\"Invalid base64 digit: \" + aStr.charAt(aIndex - 1));
\t    }

\t    continuation = !!(digit & VLQ_CONTINUATION_BIT);
\t    digit &= VLQ_BASE_MASK;
\t    result = result + (digit << shift);
\t    shift += VLQ_BASE_SHIFT;
\t  } while (continuation);

\t  aOutParam.value = fromVLQSigned(result);
\t  aOutParam.rest = aIndex;
\t};


/***/ }),
/* 3 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar intToCharMap = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'.split('');

\t/**
\t * Encode an integer in the range of 0 to 63 to a single base 64 digit.
\t */
\texports.encode = function (number) {
\t  if (0 <= number && number < intToCharMap.length) {
\t    return intToCharMap[number];
\t  }
\t  throw new TypeError(\"Must be between 0 and 63: \" + number);
\t};

\t/**
\t * Decode a single base 64 character code digit to an integer. Returns -1 on
\t * failure.
\t */
\texports.decode = function (charCode) {
\t  var bigA = 65;     // 'A'
\t  var bigZ = 90;     // 'Z'

\t  var littleA = 97;  // 'a'
\t  var littleZ = 122; // 'z'

\t  var zero = 48;     // '0'
\t  var nine = 57;     // '9'

\t  var plus = 43;     // '+'
\t  var slash = 47;    // '/'

\t  var littleOffset = 26;
\t  var numberOffset = 52;

\t  // 0 - 25: ABCDEFGHIJKLMNOPQRSTUVWXYZ
\t  if (bigA <= charCode && charCode <= bigZ) {
\t    return (charCode - bigA);
\t  }

\t  // 26 - 51: abcdefghijklmnopqrstuvwxyz
\t  if (littleA <= charCode && charCode <= littleZ) {
\t    return (charCode - littleA + littleOffset);
\t  }

\t  // 52 - 61: 0123456789
\t  if (zero <= charCode && charCode <= nine) {
\t    return (charCode - zero + numberOffset);
\t  }

\t  // 62: +
\t  if (charCode == plus) {
\t    return 62;
\t  }

\t  // 63: /
\t  if (charCode == slash) {
\t    return 63;
\t  }

\t  // Invalid base64 digit.
\t  return -1;
\t};


/***/ }),
/* 4 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\t/**
\t * This is a helper function for getting values from parameter/options
\t * objects.
\t *
\t * @param args The object we are extracting values from
\t * @param name The name of the property we are getting.
\t * @param defaultValue An optional value to return if the property is missing
\t * from the object. If this is not specified and the property is missing, an
\t * error will be thrown.
\t */
\tfunction getArg(aArgs, aName, aDefaultValue) {
\t  if (aName in aArgs) {
\t    return aArgs[aName];
\t  } else if (arguments.length === 3) {
\t    return aDefaultValue;
\t  } else {
\t    throw new Error('\"' + aName + '\" is a required argument.');
\t  }
\t}
\texports.getArg = getArg;

\tvar urlRegexp = /^(?:([\\w+\\-.]+):)?\\/\\/(?:(\\w+:\\w+)@)?([\\w.]*)(?::(\\d+))?(\\S*)\$/;
\tvar dataUrlRegexp = /^data:.+\\,.+\$/;

\tfunction urlParse(aUrl) {
\t  var match = aUrl.match(urlRegexp);
\t  if (!match) {
\t    return null;
\t  }
\t  return {
\t    scheme: match[1],
\t    auth: match[2],
\t    host: match[3],
\t    port: match[4],
\t    path: match[5]
\t  };
\t}
\texports.urlParse = urlParse;

\tfunction urlGenerate(aParsedUrl) {
\t  var url = '';
\t  if (aParsedUrl.scheme) {
\t    url += aParsedUrl.scheme + ':';
\t  }
\t  url += '//';
\t  if (aParsedUrl.auth) {
\t    url += aParsedUrl.auth + '@';
\t  }
\t  if (aParsedUrl.host) {
\t    url += aParsedUrl.host;
\t  }
\t  if (aParsedUrl.port) {
\t    url += \":\" + aParsedUrl.port
\t  }
\t  if (aParsedUrl.path) {
\t    url += aParsedUrl.path;
\t  }
\t  return url;
\t}
\texports.urlGenerate = urlGenerate;

\t/**
\t * Normalizes a path, or the path portion of a URL:
\t *
\t * - Replaces consecutive slashes with one slash.
\t * - Removes unnecessary '.' parts.
\t * - Removes unnecessary '<dir>/..' parts.
\t *
\t * Based on code in the Node.js 'path' core module.
\t *
\t * @param aPath The path or url to normalize.
\t */
\tfunction normalize(aPath) {
\t  var path = aPath;
\t  var url = urlParse(aPath);
\t  if (url) {
\t    if (!url.path) {
\t      return aPath;
\t    }
\t    path = url.path;
\t  }
\t  var isAbsolute = exports.isAbsolute(path);

\t  var parts = path.split(/\\/+/);
\t  for (var part, up = 0, i = parts.length - 1; i >= 0; i--) {
\t    part = parts[i];
\t    if (part === '.') {
\t      parts.splice(i, 1);
\t    } else if (part === '..') {
\t      up++;
\t    } else if (up > 0) {
\t      if (part === '') {
\t        // The first part is blank if the path is absolute. Trying to go
\t        // above the root is a no-op. Therefore we can remove all '..' parts
\t        // directly after the root.
\t        parts.splice(i + 1, up);
\t        up = 0;
\t      } else {
\t        parts.splice(i, 2);
\t        up--;
\t      }
\t    }
\t  }
\t  path = parts.join('/');

\t  if (path === '') {
\t    path = isAbsolute ? '/' : '.';
\t  }

\t  if (url) {
\t    url.path = path;
\t    return urlGenerate(url);
\t  }
\t  return path;
\t}
\texports.normalize = normalize;

\t/**
\t * Joins two paths/URLs.
\t *
\t * @param aRoot The root path or URL.
\t * @param aPath The path or URL to be joined with the root.
\t *
\t * - If aPath is a URL or a data URI, aPath is returned, unless aPath is a
\t *   scheme-relative URL: Then the scheme of aRoot, if any, is prepended
\t *   first.
\t * - Otherwise aPath is a path. If aRoot is a URL, then its path portion
\t *   is updated with the result and aRoot is returned. Otherwise the result
\t *   is returned.
\t *   - If aPath is absolute, the result is aPath.
\t *   - Otherwise the two paths are joined with a slash.
\t * - Joining for example 'http://' and 'www.example.com' is also supported.
\t */
\tfunction join(aRoot, aPath) {
\t  if (aRoot === \"\") {
\t    aRoot = \".\";
\t  }
\t  if (aPath === \"\") {
\t    aPath = \".\";
\t  }
\t  var aPathUrl = urlParse(aPath);
\t  var aRootUrl = urlParse(aRoot);
\t  if (aRootUrl) {
\t    aRoot = aRootUrl.path || '/';
\t  }

\t  // `join(foo, '//www.example.org')`
\t  if (aPathUrl && !aPathUrl.scheme) {
\t    if (aRootUrl) {
\t      aPathUrl.scheme = aRootUrl.scheme;
\t    }
\t    return urlGenerate(aPathUrl);
\t  }

\t  if (aPathUrl || aPath.match(dataUrlRegexp)) {
\t    return aPath;
\t  }

\t  // `join('http://', 'www.example.com')`
\t  if (aRootUrl && !aRootUrl.host && !aRootUrl.path) {
\t    aRootUrl.host = aPath;
\t    return urlGenerate(aRootUrl);
\t  }

\t  var joined = aPath.charAt(0) === '/'
\t    ? aPath
\t    : normalize(aRoot.replace(/\\/+\$/, '') + '/' + aPath);

\t  if (aRootUrl) {
\t    aRootUrl.path = joined;
\t    return urlGenerate(aRootUrl);
\t  }
\t  return joined;
\t}
\texports.join = join;

\texports.isAbsolute = function (aPath) {
\t  return aPath.charAt(0) === '/' || !!aPath.match(urlRegexp);
\t};

\t/**
\t * Make a path relative to a URL or another path.
\t *
\t * @param aRoot The root path or URL.
\t * @param aPath The path or URL to be made relative to aRoot.
\t */
\tfunction relative(aRoot, aPath) {
\t  if (aRoot === \"\") {
\t    aRoot = \".\";
\t  }

\t  aRoot = aRoot.replace(/\\/\$/, '');

\t  // It is possible for the path to be above the root. In this case, simply
\t  // checking whether the root is a prefix of the path won't work. Instead, we
\t  // need to remove components from the root one by one, until either we find
\t  // a prefix that fits, or we run out of components to remove.
\t  var level = 0;
\t  while (aPath.indexOf(aRoot + '/') !== 0) {
\t    var index = aRoot.lastIndexOf(\"/\");
\t    if (index < 0) {
\t      return aPath;
\t    }

\t    // If the only part of the root that is left is the scheme (i.e. http://,
\t    // file:///, etc.), one or more slashes (/), or simply nothing at all, we
\t    // have exhausted all components, so the path is not relative to the root.
\t    aRoot = aRoot.slice(0, index);
\t    if (aRoot.match(/^([^\\/]+:\\/)?\\/*\$/)) {
\t      return aPath;
\t    }

\t    ++level;
\t  }

\t  // Make sure we add a \"../\" for each component we removed from the root.
\t  return Array(level + 1).join(\"../\") + aPath.substr(aRoot.length + 1);
\t}
\texports.relative = relative;

\tvar supportsNullProto = (function () {
\t  var obj = Object.create(null);
\t  return !('__proto__' in obj);
\t}());

\tfunction identity (s) {
\t  return s;
\t}

\t/**
\t * Because behavior goes wacky when you set `__proto__` on objects, we
\t * have to prefix all the strings in our set with an arbitrary character.
\t *
\t * See https://github.com/mozilla/source-map/pull/31 and
\t * https://github.com/mozilla/source-map/issues/30
\t *
\t * @param String aStr
\t */
\tfunction toSetString(aStr) {
\t  if (isProtoString(aStr)) {
\t    return '\$' + aStr;
\t  }

\t  return aStr;
\t}
\texports.toSetString = supportsNullProto ? identity : toSetString;

\tfunction fromSetString(aStr) {
\t  if (isProtoString(aStr)) {
\t    return aStr.slice(1);
\t  }

\t  return aStr;
\t}
\texports.fromSetString = supportsNullProto ? identity : fromSetString;

\tfunction isProtoString(s) {
\t  if (!s) {
\t    return false;
\t  }

\t  var length = s.length;

\t  if (length < 9 /* \"__proto__\".length */) {
\t    return false;
\t  }

\t  if (s.charCodeAt(length - 1) !== 95  /* '_' */ ||
\t      s.charCodeAt(length - 2) !== 95  /* '_' */ ||
\t      s.charCodeAt(length - 3) !== 111 /* 'o' */ ||
\t      s.charCodeAt(length - 4) !== 116 /* 't' */ ||
\t      s.charCodeAt(length - 5) !== 111 /* 'o' */ ||
\t      s.charCodeAt(length - 6) !== 114 /* 'r' */ ||
\t      s.charCodeAt(length - 7) !== 112 /* 'p' */ ||
\t      s.charCodeAt(length - 8) !== 95  /* '_' */ ||
\t      s.charCodeAt(length - 9) !== 95  /* '_' */) {
\t    return false;
\t  }

\t  for (var i = length - 10; i >= 0; i--) {
\t    if (s.charCodeAt(i) !== 36 /* '\$' */) {
\t      return false;
\t    }
\t  }

\t  return true;
\t}

\t/**
\t * Comparator between two mappings where the original positions are compared.
\t *
\t * Optionally pass in `true` as `onlyCompareGenerated` to consider two
\t * mappings with the same original source/line/column, but different generated
\t * line and column the same. Useful when searching for a mapping with a
\t * stubbed out mapping.
\t */
\tfunction compareByOriginalPositions(mappingA, mappingB, onlyCompareOriginal) {
\t  var cmp = mappingA.source - mappingB.source;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalLine - mappingB.originalLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalColumn - mappingB.originalColumn;
\t  if (cmp !== 0 || onlyCompareOriginal) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedColumn - mappingB.generatedColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedLine - mappingB.generatedLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  return mappingA.name - mappingB.name;
\t}
\texports.compareByOriginalPositions = compareByOriginalPositions;

\t/**
\t * Comparator between two mappings with deflated source and name indices where
\t * the generated positions are compared.
\t *
\t * Optionally pass in `true` as `onlyCompareGenerated` to consider two
\t * mappings with the same generated line and column, but different
\t * source/name/original line and column the same. Useful when searching for a
\t * mapping with a stubbed out mapping.
\t */
\tfunction compareByGeneratedPositionsDeflated(mappingA, mappingB, onlyCompareGenerated) {
\t  var cmp = mappingA.generatedLine - mappingB.generatedLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedColumn - mappingB.generatedColumn;
\t  if (cmp !== 0 || onlyCompareGenerated) {
\t    return cmp;
\t  }

\t  cmp = mappingA.source - mappingB.source;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalLine - mappingB.originalLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalColumn - mappingB.originalColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  return mappingA.name - mappingB.name;
\t}
\texports.compareByGeneratedPositionsDeflated = compareByGeneratedPositionsDeflated;

\tfunction strcmp(aStr1, aStr2) {
\t  if (aStr1 === aStr2) {
\t    return 0;
\t  }

\t  if (aStr1 > aStr2) {
\t    return 1;
\t  }

\t  return -1;
\t}

\t/**
\t * Comparator between two mappings with inflated source and name strings where
\t * the generated positions are compared.
\t */
\tfunction compareByGeneratedPositionsInflated(mappingA, mappingB) {
\t  var cmp = mappingA.generatedLine - mappingB.generatedLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedColumn - mappingB.generatedColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = strcmp(mappingA.source, mappingB.source);
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalLine - mappingB.originalLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalColumn - mappingB.originalColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  return strcmp(mappingA.name, mappingB.name);
\t}
\texports.compareByGeneratedPositionsInflated = compareByGeneratedPositionsInflated;


/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar util = __webpack_require__(4);
\tvar has = Object.prototype.hasOwnProperty;
\tvar hasNativeMap = typeof Map !== \"undefined\";

\t/**
\t * A data structure which is a combination of an array and a set. Adding a new
\t * member is O(1), testing for membership is O(1), and finding the index of an
\t * element is O(1). Removing elements from the set is not supported. Only
\t * strings are supported for membership.
\t */
\tfunction ArraySet() {
\t  this._array = [];
\t  this._set = hasNativeMap ? new Map() : Object.create(null);
\t}

\t/**
\t * Static method for creating ArraySet instances from an existing array.
\t */
\tArraySet.fromArray = function ArraySet_fromArray(aArray, aAllowDuplicates) {
\t  var set = new ArraySet();
\t  for (var i = 0, len = aArray.length; i < len; i++) {
\t    set.add(aArray[i], aAllowDuplicates);
\t  }
\t  return set;
\t};

\t/**
\t * Return how many unique items are in this ArraySet. If duplicates have been
\t * added, than those do not count towards the size.
\t *
\t * @returns Number
\t */
\tArraySet.prototype.size = function ArraySet_size() {
\t  return hasNativeMap ? this._set.size : Object.getOwnPropertyNames(this._set).length;
\t};

\t/**
\t * Add the given string to this set.
\t *
\t * @param String aStr
\t */
\tArraySet.prototype.add = function ArraySet_add(aStr, aAllowDuplicates) {
\t  var sStr = hasNativeMap ? aStr : util.toSetString(aStr);
\t  var isDuplicate = hasNativeMap ? this.has(aStr) : has.call(this._set, sStr);
\t  var idx = this._array.length;
\t  if (!isDuplicate || aAllowDuplicates) {
\t    this._array.push(aStr);
\t  }
\t  if (!isDuplicate) {
\t    if (hasNativeMap) {
\t      this._set.set(aStr, idx);
\t    } else {
\t      this._set[sStr] = idx;
\t    }
\t  }
\t};

\t/**
\t * Is the given string a member of this set?
\t *
\t * @param String aStr
\t */
\tArraySet.prototype.has = function ArraySet_has(aStr) {
\t  if (hasNativeMap) {
\t    return this._set.has(aStr);
\t  } else {
\t    var sStr = util.toSetString(aStr);
\t    return has.call(this._set, sStr);
\t  }
\t};

\t/**
\t * What is the index of the given string in the array?
\t *
\t * @param String aStr
\t */
\tArraySet.prototype.indexOf = function ArraySet_indexOf(aStr) {
\t  if (hasNativeMap) {
\t    var idx = this._set.get(aStr);
\t    if (idx >= 0) {
\t        return idx;
\t    }
\t  } else {
\t    var sStr = util.toSetString(aStr);
\t    if (has.call(this._set, sStr)) {
\t      return this._set[sStr];
\t    }
\t  }

\t  throw new Error('\"' + aStr + '\" is not in the set.');
\t};

\t/**
\t * What is the element at the given index?
\t *
\t * @param Number aIdx
\t */
\tArraySet.prototype.at = function ArraySet_at(aIdx) {
\t  if (aIdx >= 0 && aIdx < this._array.length) {
\t    return this._array[aIdx];
\t  }
\t  throw new Error('No element indexed by ' + aIdx);
\t};

\t/**
\t * Returns the array representation of this set (which has the proper indices
\t * indicated by indexOf). Note that this is a copy of the internal array used
\t * for storing the members so that no one can mess with internal state.
\t */
\tArraySet.prototype.toArray = function ArraySet_toArray() {
\t  return this._array.slice();
\t};

\texports.ArraySet = ArraySet;


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2014 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar util = __webpack_require__(4);

\t/**
\t * Determine whether mappingB is after mappingA with respect to generated
\t * position.
\t */
\tfunction generatedPositionAfter(mappingA, mappingB) {
\t  // Optimized for most common case
\t  var lineA = mappingA.generatedLine;
\t  var lineB = mappingB.generatedLine;
\t  var columnA = mappingA.generatedColumn;
\t  var columnB = mappingB.generatedColumn;
\t  return lineB > lineA || lineB == lineA && columnB >= columnA ||
\t         util.compareByGeneratedPositionsInflated(mappingA, mappingB) <= 0;
\t}

\t/**
\t * A data structure to provide a sorted view of accumulated mappings in a
\t * performance conscious manner. It trades a neglibable overhead in general
\t * case for a large speedup in case of mappings being added in order.
\t */
\tfunction MappingList() {
\t  this._array = [];
\t  this._sorted = true;
\t  // Serves as infimum
\t  this._last = {generatedLine: -1, generatedColumn: 0};
\t}

\t/**
\t * Iterate through internal items. This method takes the same arguments that
\t * `Array.prototype.forEach` takes.
\t *
\t * NOTE: The order of the mappings is NOT guaranteed.
\t */
\tMappingList.prototype.unsortedForEach =
\t  function MappingList_forEach(aCallback, aThisArg) {
\t    this._array.forEach(aCallback, aThisArg);
\t  };

\t/**
\t * Add the given source mapping.
\t *
\t * @param Object aMapping
\t */
\tMappingList.prototype.add = function MappingList_add(aMapping) {
\t  if (generatedPositionAfter(this._last, aMapping)) {
\t    this._last = aMapping;
\t    this._array.push(aMapping);
\t  } else {
\t    this._sorted = false;
\t    this._array.push(aMapping);
\t  }
\t};

\t/**
\t * Returns the flat, sorted array of mappings. The mappings are sorted by
\t * generated position.
\t *
\t * WARNING: This method returns internal data without copying, for
\t * performance. The return value must NOT be mutated, and should be treated as
\t * an immutable borrow. If you want to take ownership, you must make your own
\t * copy.
\t */
\tMappingList.prototype.toArray = function MappingList_toArray() {
\t  if (!this._sorted) {
\t    this._array.sort(util.compareByGeneratedPositionsInflated);
\t    this._sorted = true;
\t  }
\t  return this._array;
\t};

\texports.MappingList = MappingList;


/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar util = __webpack_require__(4);
\tvar binarySearch = __webpack_require__(8);
\tvar ArraySet = __webpack_require__(5).ArraySet;
\tvar base64VLQ = __webpack_require__(2);
\tvar quickSort = __webpack_require__(9).quickSort;

\tfunction SourceMapConsumer(aSourceMap) {
\t  var sourceMap = aSourceMap;
\t  if (typeof aSourceMap === 'string') {
\t    sourceMap = JSON.parse(aSourceMap.replace(/^\\)\\]\\}'/, ''));
\t  }

\t  return sourceMap.sections != null
\t    ? new IndexedSourceMapConsumer(sourceMap)
\t    : new BasicSourceMapConsumer(sourceMap);
\t}

\tSourceMapConsumer.fromSourceMap = function(aSourceMap) {
\t  return BasicSourceMapConsumer.fromSourceMap(aSourceMap);
\t}

\t/**
\t * The version of the source mapping spec that we are consuming.
\t */
\tSourceMapConsumer.prototype._version = 3;

\t// `__generatedMappings` and `__originalMappings` are arrays that hold the
\t// parsed mapping coordinates from the source map's \"mappings\" attribute. They
\t// are lazily instantiated, accessed via the `_generatedMappings` and
\t// `_originalMappings` getters respectively, and we only parse the mappings
\t// and create these arrays once queried for a source location. We jump through
\t// these hoops because there can be many thousands of mappings, and parsing
\t// them is expensive, so we only want to do it if we must.
\t//
\t// Each object in the arrays is of the form:
\t//
\t//     {
\t//       generatedLine: The line number in the generated code,
\t//       generatedColumn: The column number in the generated code,
\t//       source: The path to the original source file that generated this
\t//               chunk of code,
\t//       originalLine: The line number in the original source that
\t//                     corresponds to this chunk of generated code,
\t//       originalColumn: The column number in the original source that
\t//                       corresponds to this chunk of generated code,
\t//       name: The name of the original symbol which generated this chunk of
\t//             code.
\t//     }
\t//
\t// All properties except for `generatedLine` and `generatedColumn` can be
\t// `null`.
\t//
\t// `_generatedMappings` is ordered by the generated positions.
\t//
\t// `_originalMappings` is ordered by the original positions.

\tSourceMapConsumer.prototype.__generatedMappings = null;
\tObject.defineProperty(SourceMapConsumer.prototype, '_generatedMappings', {
\t  get: function () {
\t    if (!this.__generatedMappings) {
\t      this._parseMappings(this._mappings, this.sourceRoot);
\t    }

\t    return this.__generatedMappings;
\t  }
\t});

\tSourceMapConsumer.prototype.__originalMappings = null;
\tObject.defineProperty(SourceMapConsumer.prototype, '_originalMappings', {
\t  get: function () {
\t    if (!this.__originalMappings) {
\t      this._parseMappings(this._mappings, this.sourceRoot);
\t    }

\t    return this.__originalMappings;
\t  }
\t});

\tSourceMapConsumer.prototype._charIsMappingSeparator =
\t  function SourceMapConsumer_charIsMappingSeparator(aStr, index) {
\t    var c = aStr.charAt(index);
\t    return c === \";\" || c === \",\";
\t  };

\t/**
\t * Parse the mappings in a string in to a data structure which we can easily
\t * query (the ordered arrays in the `this.__generatedMappings` and
\t * `this.__originalMappings` properties).
\t */
\tSourceMapConsumer.prototype._parseMappings =
\t  function SourceMapConsumer_parseMappings(aStr, aSourceRoot) {
\t    throw new Error(\"Subclasses must implement _parseMappings\");
\t  };

\tSourceMapConsumer.GENERATED_ORDER = 1;
\tSourceMapConsumer.ORIGINAL_ORDER = 2;

\tSourceMapConsumer.GREATEST_LOWER_BOUND = 1;
\tSourceMapConsumer.LEAST_UPPER_BOUND = 2;

\t/**
\t * Iterate over each mapping between an original source/line/column and a
\t * generated line/column in this source map.
\t *
\t * @param Function aCallback
\t *        The function that is called with each mapping.
\t * @param Object aContext
\t *        Optional. If specified, this object will be the value of `this` every
\t *        time that `aCallback` is called.
\t * @param aOrder
\t *        Either `SourceMapConsumer.GENERATED_ORDER` or
\t *        `SourceMapConsumer.ORIGINAL_ORDER`. Specifies whether you want to
\t *        iterate over the mappings sorted by the generated file's line/column
\t *        order or the original's source/line/column order, respectively. Defaults to
\t *        `SourceMapConsumer.GENERATED_ORDER`.
\t */
\tSourceMapConsumer.prototype.eachMapping =
\t  function SourceMapConsumer_eachMapping(aCallback, aContext, aOrder) {
\t    var context = aContext || null;
\t    var order = aOrder || SourceMapConsumer.GENERATED_ORDER;

\t    var mappings;
\t    switch (order) {
\t    case SourceMapConsumer.GENERATED_ORDER:
\t      mappings = this._generatedMappings;
\t      break;
\t    case SourceMapConsumer.ORIGINAL_ORDER:
\t      mappings = this._originalMappings;
\t      break;
\t    default:
\t      throw new Error(\"Unknown order of iteration.\");
\t    }

\t    var sourceRoot = this.sourceRoot;
\t    mappings.map(function (mapping) {
\t      var source = mapping.source === null ? null : this._sources.at(mapping.source);
\t      if (source != null && sourceRoot != null) {
\t        source = util.join(sourceRoot, source);
\t      }
\t      return {
\t        source: source,
\t        generatedLine: mapping.generatedLine,
\t        generatedColumn: mapping.generatedColumn,
\t        originalLine: mapping.originalLine,
\t        originalColumn: mapping.originalColumn,
\t        name: mapping.name === null ? null : this._names.at(mapping.name)
\t      };
\t    }, this).forEach(aCallback, context);
\t  };

\t/**
\t * Returns all generated line and column information for the original source,
\t * line, and column provided. If no column is provided, returns all mappings
\t * corresponding to a either the line we are searching for or the next
\t * closest line that has any mappings. Otherwise, returns all mappings
\t * corresponding to the given line and either the column we are searching for
\t * or the next closest column that has any offsets.
\t *
\t * The only argument is an object with the following properties:
\t *
\t *   - source: The filename of the original source.
\t *   - line: The line number in the original source.
\t *   - column: Optional. the column number in the original source.
\t *
\t * and an array of objects is returned, each with the following properties:
\t *
\t *   - line: The line number in the generated source, or null.
\t *   - column: The column number in the generated source, or null.
\t */
\tSourceMapConsumer.prototype.allGeneratedPositionsFor =
\t  function SourceMapConsumer_allGeneratedPositionsFor(aArgs) {
\t    var line = util.getArg(aArgs, 'line');

\t    // When there is no exact match, BasicSourceMapConsumer.prototype._findMapping
\t    // returns the index of the closest mapping less than the needle. By
\t    // setting needle.originalColumn to 0, we thus find the last mapping for
\t    // the given line, provided such a mapping exists.
\t    var needle = {
\t      source: util.getArg(aArgs, 'source'),
\t      originalLine: line,
\t      originalColumn: util.getArg(aArgs, 'column', 0)
\t    };

\t    if (this.sourceRoot != null) {
\t      needle.source = util.relative(this.sourceRoot, needle.source);
\t    }
\t    if (!this._sources.has(needle.source)) {
\t      return [];
\t    }
\t    needle.source = this._sources.indexOf(needle.source);

\t    var mappings = [];

\t    var index = this._findMapping(needle,
\t                                  this._originalMappings,
\t                                  \"originalLine\",
\t                                  \"originalColumn\",
\t                                  util.compareByOriginalPositions,
\t                                  binarySearch.LEAST_UPPER_BOUND);
\t    if (index >= 0) {
\t      var mapping = this._originalMappings[index];

\t      if (aArgs.column === undefined) {
\t        var originalLine = mapping.originalLine;

\t        // Iterate until either we run out of mappings, or we run into
\t        // a mapping for a different line than the one we found. Since
\t        // mappings are sorted, this is guaranteed to find all mappings for
\t        // the line we found.
\t        while (mapping && mapping.originalLine === originalLine) {
\t          mappings.push({
\t            line: util.getArg(mapping, 'generatedLine', null),
\t            column: util.getArg(mapping, 'generatedColumn', null),
\t            lastColumn: util.getArg(mapping, 'lastGeneratedColumn', null)
\t          });

\t          mapping = this._originalMappings[++index];
\t        }
\t      } else {
\t        var originalColumn = mapping.originalColumn;

\t        // Iterate until either we run out of mappings, or we run into
\t        // a mapping for a different line than the one we were searching for.
\t        // Since mappings are sorted, this is guaranteed to find all mappings for
\t        // the line we are searching for.
\t        while (mapping &&
\t               mapping.originalLine === line &&
\t               mapping.originalColumn == originalColumn) {
\t          mappings.push({
\t            line: util.getArg(mapping, 'generatedLine', null),
\t            column: util.getArg(mapping, 'generatedColumn', null),
\t            lastColumn: util.getArg(mapping, 'lastGeneratedColumn', null)
\t          });

\t          mapping = this._originalMappings[++index];
\t        }
\t      }
\t    }

\t    return mappings;
\t  };

\texports.SourceMapConsumer = SourceMapConsumer;

\t/**
\t * A BasicSourceMapConsumer instance represents a parsed source map which we can
\t * query for information about the original file positions by giving it a file
\t * position in the generated source.
\t *
\t * The only parameter is the raw source map (either as a JSON string, or
\t * already parsed to an object). According to the spec, source maps have the
\t * following attributes:
\t *
\t *   - version: Which version of the source map spec this map is following.
\t *   - sources: An array of URLs to the original source files.
\t *   - names: An array of identifiers which can be referrenced by individual mappings.
\t *   - sourceRoot: Optional. The URL root from which all sources are relative.
\t *   - sourcesContent: Optional. An array of contents of the original source files.
\t *   - mappings: A string of base64 VLQs which contain the actual mappings.
\t *   - file: Optional. The generated file this source map is associated with.
\t *
\t * Here is an example source map, taken from the source map spec[0]:
\t *
\t *     {
\t *       version : 3,
\t *       file: \"out.js\",
\t *       sourceRoot : \"\",
\t *       sources: [\"foo.js\", \"bar.js\"],
\t *       names: [\"src\", \"maps\", \"are\", \"fun\"],
\t *       mappings: \"AA,AB;;ABCDE;\"
\t *     }
\t *
\t * [0]: https://docs.google.com/document/d/1U1RGAehQwRypUTovF1KRlpiOFze0b-_2gc6fAH0KY0k/edit?pli=1#
\t */
\tfunction BasicSourceMapConsumer(aSourceMap) {
\t  var sourceMap = aSourceMap;
\t  if (typeof aSourceMap === 'string') {
\t    sourceMap = JSON.parse(aSourceMap.replace(/^\\)\\]\\}'/, ''));
\t  }

\t  var version = util.getArg(sourceMap, 'version');
\t  var sources = util.getArg(sourceMap, 'sources');
\t  // Sass 3.3 leaves out the 'names' array, so we deviate from the spec (which
\t  // requires the array) to play nice here.
\t  var names = util.getArg(sourceMap, 'names', []);
\t  var sourceRoot = util.getArg(sourceMap, 'sourceRoot', null);
\t  var sourcesContent = util.getArg(sourceMap, 'sourcesContent', null);
\t  var mappings = util.getArg(sourceMap, 'mappings');
\t  var file = util.getArg(sourceMap, 'file', null);

\t  // Once again, Sass deviates from the spec and supplies the version as a
\t  // string rather than a number, so we use loose equality checking here.
\t  if (version != this._version) {
\t    throw new Error('Unsupported version: ' + version);
\t  }

\t  sources = sources
\t    .map(String)
\t    // Some source maps produce relative source paths like \"./foo.js\" instead of
\t    // \"foo.js\".  Normalize these first so that future comparisons will succeed.
\t    // See bugzil.la/1090768.
\t    .map(util.normalize)
\t    // Always ensure that absolute sources are internally stored relative to
\t    // the source root, if the source root is absolute. Not doing this would
\t    // be particularly problematic when the source root is a prefix of the
\t    // source (valid, but why??). See github issue #199 and bugzil.la/1188982.
\t    .map(function (source) {
\t      return sourceRoot && util.isAbsolute(sourceRoot) && util.isAbsolute(source)
\t        ? util.relative(sourceRoot, source)
\t        : source;
\t    });

\t  // Pass `true` below to allow duplicate names and sources. While source maps
\t  // are intended to be compressed and deduplicated, the TypeScript compiler
\t  // sometimes generates source maps with duplicates in them. See Github issue
\t  // #72 and bugzil.la/889492.
\t  this._names = ArraySet.fromArray(names.map(String), true);
\t  this._sources = ArraySet.fromArray(sources, true);

\t  this.sourceRoot = sourceRoot;
\t  this.sourcesContent = sourcesContent;
\t  this._mappings = mappings;
\t  this.file = file;
\t}

\tBasicSourceMapConsumer.prototype = Object.create(SourceMapConsumer.prototype);
\tBasicSourceMapConsumer.prototype.consumer = SourceMapConsumer;

\t/**
\t * Create a BasicSourceMapConsumer from a SourceMapGenerator.
\t *
\t * @param SourceMapGenerator aSourceMap
\t *        The source map that will be consumed.
\t * @returns BasicSourceMapConsumer
\t */
\tBasicSourceMapConsumer.fromSourceMap =
\t  function SourceMapConsumer_fromSourceMap(aSourceMap) {
\t    var smc = Object.create(BasicSourceMapConsumer.prototype);

\t    var names = smc._names = ArraySet.fromArray(aSourceMap._names.toArray(), true);
\t    var sources = smc._sources = ArraySet.fromArray(aSourceMap._sources.toArray(), true);
\t    smc.sourceRoot = aSourceMap._sourceRoot;
\t    smc.sourcesContent = aSourceMap._generateSourcesContent(smc._sources.toArray(),
\t                                                            smc.sourceRoot);
\t    smc.file = aSourceMap._file;

\t    // Because we are modifying the entries (by converting string sources and
\t    // names to indices into the sources and names ArraySets), we have to make
\t    // a copy of the entry or else bad things happen. Shared mutable state
\t    // strikes again! See github issue #191.

\t    var generatedMappings = aSourceMap._mappings.toArray().slice();
\t    var destGeneratedMappings = smc.__generatedMappings = [];
\t    var destOriginalMappings = smc.__originalMappings = [];

\t    for (var i = 0, length = generatedMappings.length; i < length; i++) {
\t      var srcMapping = generatedMappings[i];
\t      var destMapping = new Mapping;
\t      destMapping.generatedLine = srcMapping.generatedLine;
\t      destMapping.generatedColumn = srcMapping.generatedColumn;

\t      if (srcMapping.source) {
\t        destMapping.source = sources.indexOf(srcMapping.source);
\t        destMapping.originalLine = srcMapping.originalLine;
\t        destMapping.originalColumn = srcMapping.originalColumn;

\t        if (srcMapping.name) {
\t          destMapping.name = names.indexOf(srcMapping.name);
\t        }

\t        destOriginalMappings.push(destMapping);
\t      }

\t      destGeneratedMappings.push(destMapping);
\t    }

\t    quickSort(smc.__originalMappings, util.compareByOriginalPositions);

\t    return smc;
\t  };

\t/**
\t * The version of the source mapping spec that we are consuming.
\t */
\tBasicSourceMapConsumer.prototype._version = 3;

\t/**
\t * The list of original sources.
\t */
\tObject.defineProperty(BasicSourceMapConsumer.prototype, 'sources', {
\t  get: function () {
\t    return this._sources.toArray().map(function (s) {
\t      return this.sourceRoot != null ? util.join(this.sourceRoot, s) : s;
\t    }, this);
\t  }
\t});

\t/**
\t * Provide the JIT with a nice shape / hidden class.
\t */
\tfunction Mapping() {
\t  this.generatedLine = 0;
\t  this.generatedColumn = 0;
\t  this.source = null;
\t  this.originalLine = null;
\t  this.originalColumn = null;
\t  this.name = null;
\t}

\t/**
\t * Parse the mappings in a string in to a data structure which we can easily
\t * query (the ordered arrays in the `this.__generatedMappings` and
\t * `this.__originalMappings` properties).
\t */
\tBasicSourceMapConsumer.prototype._parseMappings =
\t  function SourceMapConsumer_parseMappings(aStr, aSourceRoot) {
\t    var generatedLine = 1;
\t    var previousGeneratedColumn = 0;
\t    var previousOriginalLine = 0;
\t    var previousOriginalColumn = 0;
\t    var previousSource = 0;
\t    var previousName = 0;
\t    var length = aStr.length;
\t    var index = 0;
\t    var cachedSegments = {};
\t    var temp = {};
\t    var originalMappings = [];
\t    var generatedMappings = [];
\t    var mapping, str, segment, end, value;

\t    while (index < length) {
\t      if (aStr.charAt(index) === ';') {
\t        generatedLine++;
\t        index++;
\t        previousGeneratedColumn = 0;
\t      }
\t      else if (aStr.charAt(index) === ',') {
\t        index++;
\t      }
\t      else {
\t        mapping = new Mapping();
\t        mapping.generatedLine = generatedLine;

\t        // Because each offset is encoded relative to the previous one,
\t        // many segments often have the same encoding. We can exploit this
\t        // fact by caching the parsed variable length fields of each segment,
\t        // allowing us to avoid a second parse if we encounter the same
\t        // segment again.
\t        for (end = index; end < length; end++) {
\t          if (this._charIsMappingSeparator(aStr, end)) {
\t            break;
\t          }
\t        }
\t        str = aStr.slice(index, end);

\t        segment = cachedSegments[str];
\t        if (segment) {
\t          index += str.length;
\t        } else {
\t          segment = [];
\t          while (index < end) {
\t            base64VLQ.decode(aStr, index, temp);
\t            value = temp.value;
\t            index = temp.rest;
\t            segment.push(value);
\t          }

\t          if (segment.length === 2) {
\t            throw new Error('Found a source, but no line and column');
\t          }

\t          if (segment.length === 3) {
\t            throw new Error('Found a source and line, but no column');
\t          }

\t          cachedSegments[str] = segment;
\t        }

\t        // Generated column.
\t        mapping.generatedColumn = previousGeneratedColumn + segment[0];
\t        previousGeneratedColumn = mapping.generatedColumn;

\t        if (segment.length > 1) {
\t          // Original source.
\t          mapping.source = previousSource + segment[1];
\t          previousSource += segment[1];

\t          // Original line.
\t          mapping.originalLine = previousOriginalLine + segment[2];
\t          previousOriginalLine = mapping.originalLine;
\t          // Lines are stored 0-based
\t          mapping.originalLine += 1;

\t          // Original column.
\t          mapping.originalColumn = previousOriginalColumn + segment[3];
\t          previousOriginalColumn = mapping.originalColumn;

\t          if (segment.length > 4) {
\t            // Original name.
\t            mapping.name = previousName + segment[4];
\t            previousName += segment[4];
\t          }
\t        }

\t        generatedMappings.push(mapping);
\t        if (typeof mapping.originalLine === 'number') {
\t          originalMappings.push(mapping);
\t        }
\t      }
\t    }

\t    quickSort(generatedMappings, util.compareByGeneratedPositionsDeflated);
\t    this.__generatedMappings = generatedMappings;

\t    quickSort(originalMappings, util.compareByOriginalPositions);
\t    this.__originalMappings = originalMappings;
\t  };

\t/**
\t * Find the mapping that best matches the hypothetical \"needle\" mapping that
\t * we are searching for in the given \"haystack\" of mappings.
\t */
\tBasicSourceMapConsumer.prototype._findMapping =
\t  function SourceMapConsumer_findMapping(aNeedle, aMappings, aLineName,
\t                                         aColumnName, aComparator, aBias) {
\t    // To return the position we are searching for, we must first find the
\t    // mapping for the given position and then return the opposite position it
\t    // points to. Because the mappings are sorted, we can use binary search to
\t    // find the best mapping.

\t    if (aNeedle[aLineName] <= 0) {
\t      throw new TypeError('Line must be greater than or equal to 1, got '
\t                          + aNeedle[aLineName]);
\t    }
\t    if (aNeedle[aColumnName] < 0) {
\t      throw new TypeError('Column must be greater than or equal to 0, got '
\t                          + aNeedle[aColumnName]);
\t    }

\t    return binarySearch.search(aNeedle, aMappings, aComparator, aBias);
\t  };

\t/**
\t * Compute the last column for each generated mapping. The last column is
\t * inclusive.
\t */
\tBasicSourceMapConsumer.prototype.computeColumnSpans =
\t  function SourceMapConsumer_computeColumnSpans() {
\t    for (var index = 0; index < this._generatedMappings.length; ++index) {
\t      var mapping = this._generatedMappings[index];

\t      // Mappings do not contain a field for the last generated columnt. We
\t      // can come up with an optimistic estimate, however, by assuming that
\t      // mappings are contiguous (i.e. given two consecutive mappings, the
\t      // first mapping ends where the second one starts).
\t      if (index + 1 < this._generatedMappings.length) {
\t        var nextMapping = this._generatedMappings[index + 1];

\t        if (mapping.generatedLine === nextMapping.generatedLine) {
\t          mapping.lastGeneratedColumn = nextMapping.generatedColumn - 1;
\t          continue;
\t        }
\t      }

\t      // The last mapping for each line spans the entire line.
\t      mapping.lastGeneratedColumn = Infinity;
\t    }
\t  };

\t/**
\t * Returns the original source, line, and column information for the generated
\t * source's line and column positions provided. The only argument is an object
\t * with the following properties:
\t *
\t *   - line: The line number in the generated source.
\t *   - column: The column number in the generated source.
\t *   - bias: Either 'SourceMapConsumer.GREATEST_LOWER_BOUND' or
\t *     'SourceMapConsumer.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t *     Defaults to 'SourceMapConsumer.GREATEST_LOWER_BOUND'.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - source: The original source file, or null.
\t *   - line: The line number in the original source, or null.
\t *   - column: The column number in the original source, or null.
\t *   - name: The original identifier, or null.
\t */
\tBasicSourceMapConsumer.prototype.originalPositionFor =
\t  function SourceMapConsumer_originalPositionFor(aArgs) {
\t    var needle = {
\t      generatedLine: util.getArg(aArgs, 'line'),
\t      generatedColumn: util.getArg(aArgs, 'column')
\t    };

\t    var index = this._findMapping(
\t      needle,
\t      this._generatedMappings,
\t      \"generatedLine\",
\t      \"generatedColumn\",
\t      util.compareByGeneratedPositionsDeflated,
\t      util.getArg(aArgs, 'bias', SourceMapConsumer.GREATEST_LOWER_BOUND)
\t    );

\t    if (index >= 0) {
\t      var mapping = this._generatedMappings[index];

\t      if (mapping.generatedLine === needle.generatedLine) {
\t        var source = util.getArg(mapping, 'source', null);
\t        if (source !== null) {
\t          source = this._sources.at(source);
\t          if (this.sourceRoot != null) {
\t            source = util.join(this.sourceRoot, source);
\t          }
\t        }
\t        var name = util.getArg(mapping, 'name', null);
\t        if (name !== null) {
\t          name = this._names.at(name);
\t        }
\t        return {
\t          source: source,
\t          line: util.getArg(mapping, 'originalLine', null),
\t          column: util.getArg(mapping, 'originalColumn', null),
\t          name: name
\t        };
\t      }
\t    }

\t    return {
\t      source: null,
\t      line: null,
\t      column: null,
\t      name: null
\t    };
\t  };

\t/**
\t * Return true if we have the source content for every source in the source
\t * map, false otherwise.
\t */
\tBasicSourceMapConsumer.prototype.hasContentsOfAllSources =
\t  function BasicSourceMapConsumer_hasContentsOfAllSources() {
\t    if (!this.sourcesContent) {
\t      return false;
\t    }
\t    return this.sourcesContent.length >= this._sources.size() &&
\t      !this.sourcesContent.some(function (sc) { return sc == null; });
\t  };

\t/**
\t * Returns the original source content. The only argument is the url of the
\t * original source file. Returns null if no original source content is
\t * available.
\t */
\tBasicSourceMapConsumer.prototype.sourceContentFor =
\t  function SourceMapConsumer_sourceContentFor(aSource, nullOnMissing) {
\t    if (!this.sourcesContent) {
\t      return null;
\t    }

\t    if (this.sourceRoot != null) {
\t      aSource = util.relative(this.sourceRoot, aSource);
\t    }

\t    if (this._sources.has(aSource)) {
\t      return this.sourcesContent[this._sources.indexOf(aSource)];
\t    }

\t    var url;
\t    if (this.sourceRoot != null
\t        && (url = util.urlParse(this.sourceRoot))) {
\t      // XXX: file:// URIs and absolute paths lead to unexpected behavior for
\t      // many users. We can help them out when they expect file:// URIs to
\t      // behave like it would if they were running a local HTTP server. See
\t      // https://bugzilla.mozilla.org/show_bug.cgi?id=885597.
\t      var fileUriAbsPath = aSource.replace(/^file:\\/\\//, \"\");
\t      if (url.scheme == \"file\"
\t          && this._sources.has(fileUriAbsPath)) {
\t        return this.sourcesContent[this._sources.indexOf(fileUriAbsPath)]
\t      }

\t      if ((!url.path || url.path == \"/\")
\t          && this._sources.has(\"/\" + aSource)) {
\t        return this.sourcesContent[this._sources.indexOf(\"/\" + aSource)];
\t      }
\t    }

\t    // This function is used recursively from
\t    // IndexedSourceMapConsumer.prototype.sourceContentFor. In that case, we
\t    // don't want to throw if we can't find the source - we just want to
\t    // return null, so we provide a flag to exit gracefully.
\t    if (nullOnMissing) {
\t      return null;
\t    }
\t    else {
\t      throw new Error('\"' + aSource + '\" is not in the SourceMap.');
\t    }
\t  };

\t/**
\t * Returns the generated line and column information for the original source,
\t * line, and column positions provided. The only argument is an object with
\t * the following properties:
\t *
\t *   - source: The filename of the original source.
\t *   - line: The line number in the original source.
\t *   - column: The column number in the original source.
\t *   - bias: Either 'SourceMapConsumer.GREATEST_LOWER_BOUND' or
\t *     'SourceMapConsumer.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t *     Defaults to 'SourceMapConsumer.GREATEST_LOWER_BOUND'.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - line: The line number in the generated source, or null.
\t *   - column: The column number in the generated source, or null.
\t */
\tBasicSourceMapConsumer.prototype.generatedPositionFor =
\t  function SourceMapConsumer_generatedPositionFor(aArgs) {
\t    var source = util.getArg(aArgs, 'source');
\t    if (this.sourceRoot != null) {
\t      source = util.relative(this.sourceRoot, source);
\t    }
\t    if (!this._sources.has(source)) {
\t      return {
\t        line: null,
\t        column: null,
\t        lastColumn: null
\t      };
\t    }
\t    source = this._sources.indexOf(source);

\t    var needle = {
\t      source: source,
\t      originalLine: util.getArg(aArgs, 'line'),
\t      originalColumn: util.getArg(aArgs, 'column')
\t    };

\t    var index = this._findMapping(
\t      needle,
\t      this._originalMappings,
\t      \"originalLine\",
\t      \"originalColumn\",
\t      util.compareByOriginalPositions,
\t      util.getArg(aArgs, 'bias', SourceMapConsumer.GREATEST_LOWER_BOUND)
\t    );

\t    if (index >= 0) {
\t      var mapping = this._originalMappings[index];

\t      if (mapping.source === needle.source) {
\t        return {
\t          line: util.getArg(mapping, 'generatedLine', null),
\t          column: util.getArg(mapping, 'generatedColumn', null),
\t          lastColumn: util.getArg(mapping, 'lastGeneratedColumn', null)
\t        };
\t      }
\t    }

\t    return {
\t      line: null,
\t      column: null,
\t      lastColumn: null
\t    };
\t  };

\texports.BasicSourceMapConsumer = BasicSourceMapConsumer;

\t/**
\t * An IndexedSourceMapConsumer instance represents a parsed source map which
\t * we can query for information. It differs from BasicSourceMapConsumer in
\t * that it takes \"indexed\" source maps (i.e. ones with a \"sections\" field) as
\t * input.
\t *
\t * The only parameter is a raw source map (either as a JSON string, or already
\t * parsed to an object). According to the spec for indexed source maps, they
\t * have the following attributes:
\t *
\t *   - version: Which version of the source map spec this map is following.
\t *   - file: Optional. The generated file this source map is associated with.
\t *   - sections: A list of section definitions.
\t *
\t * Each value under the \"sections\" field has two fields:
\t *   - offset: The offset into the original specified at which this section
\t *       begins to apply, defined as an object with a \"line\" and \"column\"
\t *       field.
\t *   - map: A source map definition. This source map could also be indexed,
\t *       but doesn't have to be.
\t *
\t * Instead of the \"map\" field, it's also possible to have a \"url\" field
\t * specifying a URL to retrieve a source map from, but that's currently
\t * unsupported.
\t *
\t * Here's an example source map, taken from the source map spec[0], but
\t * modified to omit a section which uses the \"url\" field.
\t *
\t *  {
\t *    version : 3,
\t *    file: \"app.js\",
\t *    sections: [{
\t *      offset: {line:100, column:10},
\t *      map: {
\t *        version : 3,
\t *        file: \"section.js\",
\t *        sources: [\"foo.js\", \"bar.js\"],
\t *        names: [\"src\", \"maps\", \"are\", \"fun\"],
\t *        mappings: \"AAAA,E;;ABCDE;\"
\t *      }
\t *    }],
\t *  }
\t *
\t * [0]: https://docs.google.com/document/d/1U1RGAehQwRypUTovF1KRlpiOFze0b-_2gc6fAH0KY0k/edit#heading=h.535es3xeprgt
\t */
\tfunction IndexedSourceMapConsumer(aSourceMap) {
\t  var sourceMap = aSourceMap;
\t  if (typeof aSourceMap === 'string') {
\t    sourceMap = JSON.parse(aSourceMap.replace(/^\\)\\]\\}'/, ''));
\t  }

\t  var version = util.getArg(sourceMap, 'version');
\t  var sections = util.getArg(sourceMap, 'sections');

\t  if (version != this._version) {
\t    throw new Error('Unsupported version: ' + version);
\t  }

\t  this._sources = new ArraySet();
\t  this._names = new ArraySet();

\t  var lastOffset = {
\t    line: -1,
\t    column: 0
\t  };
\t  this._sections = sections.map(function (s) {
\t    if (s.url) {
\t      // The url field will require support for asynchronicity.
\t      // See https://github.com/mozilla/source-map/issues/16
\t      throw new Error('Support for url field in sections not implemented.');
\t    }
\t    var offset = util.getArg(s, 'offset');
\t    var offsetLine = util.getArg(offset, 'line');
\t    var offsetColumn = util.getArg(offset, 'column');

\t    if (offsetLine < lastOffset.line ||
\t        (offsetLine === lastOffset.line && offsetColumn < lastOffset.column)) {
\t      throw new Error('Section offsets must be ordered and non-overlapping.');
\t    }
\t    lastOffset = offset;

\t    return {
\t      generatedOffset: {
\t        // The offset fields are 0-based, but we use 1-based indices when
\t        // encoding/decoding from VLQ.
\t        generatedLine: offsetLine + 1,
\t        generatedColumn: offsetColumn + 1
\t      },
\t      consumer: new SourceMapConsumer(util.getArg(s, 'map'))
\t    }
\t  });
\t}

\tIndexedSourceMapConsumer.prototype = Object.create(SourceMapConsumer.prototype);
\tIndexedSourceMapConsumer.prototype.constructor = SourceMapConsumer;

\t/**
\t * The version of the source mapping spec that we are consuming.
\t */
\tIndexedSourceMapConsumer.prototype._version = 3;

\t/**
\t * The list of original sources.
\t */
\tObject.defineProperty(IndexedSourceMapConsumer.prototype, 'sources', {
\t  get: function () {
\t    var sources = [];
\t    for (var i = 0; i < this._sections.length; i++) {
\t      for (var j = 0; j < this._sections[i].consumer.sources.length; j++) {
\t        sources.push(this._sections[i].consumer.sources[j]);
\t      }
\t    }
\t    return sources;
\t  }
\t});

\t/**
\t * Returns the original source, line, and column information for the generated
\t * source's line and column positions provided. The only argument is an object
\t * with the following properties:
\t *
\t *   - line: The line number in the generated source.
\t *   - column: The column number in the generated source.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - source: The original source file, or null.
\t *   - line: The line number in the original source, or null.
\t *   - column: The column number in the original source, or null.
\t *   - name: The original identifier, or null.
\t */
\tIndexedSourceMapConsumer.prototype.originalPositionFor =
\t  function IndexedSourceMapConsumer_originalPositionFor(aArgs) {
\t    var needle = {
\t      generatedLine: util.getArg(aArgs, 'line'),
\t      generatedColumn: util.getArg(aArgs, 'column')
\t    };

\t    // Find the section containing the generated position we're trying to map
\t    // to an original position.
\t    var sectionIndex = binarySearch.search(needle, this._sections,
\t      function(needle, section) {
\t        var cmp = needle.generatedLine - section.generatedOffset.generatedLine;
\t        if (cmp) {
\t          return cmp;
\t        }

\t        return (needle.generatedColumn -
\t                section.generatedOffset.generatedColumn);
\t      });
\t    var section = this._sections[sectionIndex];

\t    if (!section) {
\t      return {
\t        source: null,
\t        line: null,
\t        column: null,
\t        name: null
\t      };
\t    }

\t    return section.consumer.originalPositionFor({
\t      line: needle.generatedLine -
\t        (section.generatedOffset.generatedLine - 1),
\t      column: needle.generatedColumn -
\t        (section.generatedOffset.generatedLine === needle.generatedLine
\t         ? section.generatedOffset.generatedColumn - 1
\t         : 0),
\t      bias: aArgs.bias
\t    });
\t  };

\t/**
\t * Return true if we have the source content for every source in the source
\t * map, false otherwise.
\t */
\tIndexedSourceMapConsumer.prototype.hasContentsOfAllSources =
\t  function IndexedSourceMapConsumer_hasContentsOfAllSources() {
\t    return this._sections.every(function (s) {
\t      return s.consumer.hasContentsOfAllSources();
\t    });
\t  };

\t/**
\t * Returns the original source content. The only argument is the url of the
\t * original source file. Returns null if no original source content is
\t * available.
\t */
\tIndexedSourceMapConsumer.prototype.sourceContentFor =
\t  function IndexedSourceMapConsumer_sourceContentFor(aSource, nullOnMissing) {
\t    for (var i = 0; i < this._sections.length; i++) {
\t      var section = this._sections[i];

\t      var content = section.consumer.sourceContentFor(aSource, true);
\t      if (content) {
\t        return content;
\t      }
\t    }
\t    if (nullOnMissing) {
\t      return null;
\t    }
\t    else {
\t      throw new Error('\"' + aSource + '\" is not in the SourceMap.');
\t    }
\t  };

\t/**
\t * Returns the generated line and column information for the original source,
\t * line, and column positions provided. The only argument is an object with
\t * the following properties:
\t *
\t *   - source: The filename of the original source.
\t *   - line: The line number in the original source.
\t *   - column: The column number in the original source.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - line: The line number in the generated source, or null.
\t *   - column: The column number in the generated source, or null.
\t */
\tIndexedSourceMapConsumer.prototype.generatedPositionFor =
\t  function IndexedSourceMapConsumer_generatedPositionFor(aArgs) {
\t    for (var i = 0; i < this._sections.length; i++) {
\t      var section = this._sections[i];

\t      // Only consider this section if the requested source is in the list of
\t      // sources of the consumer.
\t      if (section.consumer.sources.indexOf(util.getArg(aArgs, 'source')) === -1) {
\t        continue;
\t      }
\t      var generatedPosition = section.consumer.generatedPositionFor(aArgs);
\t      if (generatedPosition) {
\t        var ret = {
\t          line: generatedPosition.line +
\t            (section.generatedOffset.generatedLine - 1),
\t          column: generatedPosition.column +
\t            (section.generatedOffset.generatedLine === generatedPosition.line
\t             ? section.generatedOffset.generatedColumn - 1
\t             : 0)
\t        };
\t        return ret;
\t      }
\t    }

\t    return {
\t      line: null,
\t      column: null
\t    };
\t  };

\t/**
\t * Parse the mappings in a string in to a data structure which we can easily
\t * query (the ordered arrays in the `this.__generatedMappings` and
\t * `this.__originalMappings` properties).
\t */
\tIndexedSourceMapConsumer.prototype._parseMappings =
\t  function IndexedSourceMapConsumer_parseMappings(aStr, aSourceRoot) {
\t    this.__generatedMappings = [];
\t    this.__originalMappings = [];
\t    for (var i = 0; i < this._sections.length; i++) {
\t      var section = this._sections[i];
\t      var sectionMappings = section.consumer._generatedMappings;
\t      for (var j = 0; j < sectionMappings.length; j++) {
\t        var mapping = sectionMappings[j];

\t        var source = section.consumer._sources.at(mapping.source);
\t        if (section.consumer.sourceRoot !== null) {
\t          source = util.join(section.consumer.sourceRoot, source);
\t        }
\t        this._sources.add(source);
\t        source = this._sources.indexOf(source);

\t        var name = section.consumer._names.at(mapping.name);
\t        this._names.add(name);
\t        name = this._names.indexOf(name);

\t        // The mappings coming from the consumer for the section have
\t        // generated positions relative to the start of the section, so we
\t        // need to offset them to be relative to the start of the concatenated
\t        // generated file.
\t        var adjustedMapping = {
\t          source: source,
\t          generatedLine: mapping.generatedLine +
\t            (section.generatedOffset.generatedLine - 1),
\t          generatedColumn: mapping.generatedColumn +
\t            (section.generatedOffset.generatedLine === mapping.generatedLine
\t            ? section.generatedOffset.generatedColumn - 1
\t            : 0),
\t          originalLine: mapping.originalLine,
\t          originalColumn: mapping.originalColumn,
\t          name: name
\t        };

\t        this.__generatedMappings.push(adjustedMapping);
\t        if (typeof adjustedMapping.originalLine === 'number') {
\t          this.__originalMappings.push(adjustedMapping);
\t        }
\t      }
\t    }

\t    quickSort(this.__generatedMappings, util.compareByGeneratedPositionsDeflated);
\t    quickSort(this.__originalMappings, util.compareByOriginalPositions);
\t  };

\texports.IndexedSourceMapConsumer = IndexedSourceMapConsumer;


/***/ }),
/* 8 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\texports.GREATEST_LOWER_BOUND = 1;
\texports.LEAST_UPPER_BOUND = 2;

\t/**
\t * Recursive implementation of binary search.
\t *
\t * @param aLow Indices here and lower do not contain the needle.
\t * @param aHigh Indices here and higher do not contain the needle.
\t * @param aNeedle The element being searched for.
\t * @param aHaystack The non-empty array being searched.
\t * @param aCompare Function which takes two elements and returns -1, 0, or 1.
\t * @param aBias Either 'binarySearch.GREATEST_LOWER_BOUND' or
\t *     'binarySearch.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t */
\tfunction recursiveSearch(aLow, aHigh, aNeedle, aHaystack, aCompare, aBias) {
\t  // This function terminates when one of the following is true:
\t  //
\t  //   1. We find the exact element we are looking for.
\t  //
\t  //   2. We did not find the exact element, but we can return the index of
\t  //      the next-closest element.
\t  //
\t  //   3. We did not find the exact element, and there is no next-closest
\t  //      element than the one we are searching for, so we return -1.
\t  var mid = Math.floor((aHigh - aLow) / 2) + aLow;
\t  var cmp = aCompare(aNeedle, aHaystack[mid], true);
\t  if (cmp === 0) {
\t    // Found the element we are looking for.
\t    return mid;
\t  }
\t  else if (cmp > 0) {
\t    // Our needle is greater than aHaystack[mid].
\t    if (aHigh - mid > 1) {
\t      // The element is in the upper half.
\t      return recursiveSearch(mid, aHigh, aNeedle, aHaystack, aCompare, aBias);
\t    }

\t    // The exact needle element was not found in this haystack. Determine if
\t    // we are in termination case (3) or (2) and return the appropriate thing.
\t    if (aBias == exports.LEAST_UPPER_BOUND) {
\t      return aHigh < aHaystack.length ? aHigh : -1;
\t    } else {
\t      return mid;
\t    }
\t  }
\t  else {
\t    // Our needle is less than aHaystack[mid].
\t    if (mid - aLow > 1) {
\t      // The element is in the lower half.
\t      return recursiveSearch(aLow, mid, aNeedle, aHaystack, aCompare, aBias);
\t    }

\t    // we are in termination case (3) or (2) and return the appropriate thing.
\t    if (aBias == exports.LEAST_UPPER_BOUND) {
\t      return mid;
\t    } else {
\t      return aLow < 0 ? -1 : aLow;
\t    }
\t  }
\t}

\t/**
\t * This is an implementation of binary search which will always try and return
\t * the index of the closest element if there is no exact hit. This is because
\t * mappings between original and generated line/col pairs are single points,
\t * and there is an implicit region between each of them, so a miss just means
\t * that you aren't on the very start of a region.
\t *
\t * @param aNeedle The element you are looking for.
\t * @param aHaystack The array that is being searched.
\t * @param aCompare A function which takes the needle and an element in the
\t *     array and returns -1, 0, or 1 depending on whether the needle is less
\t *     than, equal to, or greater than the element, respectively.
\t * @param aBias Either 'binarySearch.GREATEST_LOWER_BOUND' or
\t *     'binarySearch.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t *     Defaults to 'binarySearch.GREATEST_LOWER_BOUND'.
\t */
\texports.search = function search(aNeedle, aHaystack, aCompare, aBias) {
\t  if (aHaystack.length === 0) {
\t    return -1;
\t  }

\t  var index = recursiveSearch(-1, aHaystack.length, aNeedle, aHaystack,
\t                              aCompare, aBias || exports.GREATEST_LOWER_BOUND);
\t  if (index < 0) {
\t    return -1;
\t  }

\t  // We have found either the exact element, or the next-closest element than
\t  // the one we are searching for. However, there may be more than one such
\t  // element. Make sure we always return the smallest of these.
\t  while (index - 1 >= 0) {
\t    if (aCompare(aHaystack[index], aHaystack[index - 1], true) !== 0) {
\t      break;
\t    }
\t    --index;
\t  }

\t  return index;
\t};


/***/ }),
/* 9 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\t// It turns out that some (most?) JavaScript engines don't self-host
\t// `Array.prototype.sort`. This makes sense because C++ will likely remain
\t// faster than JS when doing raw CPU-intensive sorting. However, when using a
\t// custom comparator function, calling back and forth between the VM's C++ and
\t// JIT'd JS is rather slow *and* loses JIT type information, resulting in
\t// worse generated code for the comparator function than would be optimal. In
\t// fact, when sorting with a comparator, these costs outweigh the benefits of
\t// sorting in C++. By using our own JS-implemented Quick Sort (below), we get
\t// a ~3500ms mean speed-up in `bench/bench.html`.

\t/**
\t * Swap the elements indexed by `x` and `y` in the array `ary`.
\t *
\t * @param {Array} ary
\t *        The array.
\t * @param {Number} x
\t *        The index of the first item.
\t * @param {Number} y
\t *        The index of the second item.
\t */
\tfunction swap(ary, x, y) {
\t  var temp = ary[x];
\t  ary[x] = ary[y];
\t  ary[y] = temp;
\t}

\t/**
\t * Returns a random integer within the range `low .. high` inclusive.
\t *
\t * @param {Number} low
\t *        The lower bound on the range.
\t * @param {Number} high
\t *        The upper bound on the range.
\t */
\tfunction randomIntInRange(low, high) {
\t  return Math.round(low + (Math.random() * (high - low)));
\t}

\t/**
\t * The Quick Sort algorithm.
\t *
\t * @param {Array} ary
\t *        An array to sort.
\t * @param {function} comparator
\t *        Function to use to compare two items.
\t * @param {Number} p
\t *        Start index of the array
\t * @param {Number} r
\t *        End index of the array
\t */
\tfunction doQuickSort(ary, comparator, p, r) {
\t  // If our lower bound is less than our upper bound, we (1) partition the
\t  // array into two pieces and (2) recurse on each half. If it is not, this is
\t  // the empty array and our base case.

\t  if (p < r) {
\t    // (1) Partitioning.
\t    //
\t    // The partitioning chooses a pivot between `p` and `r` and moves all
\t    // elements that are less than or equal to the pivot to the before it, and
\t    // all the elements that are greater than it after it. The effect is that
\t    // once partition is done, the pivot is in the exact place it will be when
\t    // the array is put in sorted order, and it will not need to be moved
\t    // again. This runs in O(n) time.

\t    // Always choose a random pivot so that an input array which is reverse
\t    // sorted does not cause O(n^2) running time.
\t    var pivotIndex = randomIntInRange(p, r);
\t    var i = p - 1;

\t    swap(ary, pivotIndex, r);
\t    var pivot = ary[r];

\t    // Immediately after `j` is incremented in this loop, the following hold
\t    // true:
\t    //
\t    //   * Every element in `ary[p .. i]` is less than or equal to the pivot.
\t    //
\t    //   * Every element in `ary[i+1 .. j-1]` is greater than the pivot.
\t    for (var j = p; j < r; j++) {
\t      if (comparator(ary[j], pivot) <= 0) {
\t        i += 1;
\t        swap(ary, i, j);
\t      }
\t    }

\t    swap(ary, i + 1, j);
\t    var q = i + 1;

\t    // (2) Recurse on each half.

\t    doQuickSort(ary, comparator, p, q - 1);
\t    doQuickSort(ary, comparator, q + 1, r);
\t  }
\t}

\t/**
\t * Sort the given array in-place with the given comparator function.
\t *
\t * @param {Array} ary
\t *        An array to sort.
\t * @param {function} comparator
\t *        Function to use to compare two items.
\t */
\texports.quickSort = function (ary, comparator) {
\t  doQuickSort(ary, comparator, 0, ary.length - 1);
\t};


/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar SourceMapGenerator = __webpack_require__(1).SourceMapGenerator;
\tvar util = __webpack_require__(4);

\t// Matches a Windows-style `\\r\\n` newline or a `\\n` newline used by all other
\t// operating systems these days (capturing the result).
\tvar REGEX_NEWLINE = /(\\r?\\n)/;

\t// Newline character code for charCodeAt() comparisons
\tvar NEWLINE_CODE = 10;

\t// Private symbol for identifying `SourceNode`s when multiple versions of
\t// the source-map library are loaded. This MUST NOT CHANGE across
\t// versions!
\tvar isSourceNode = \"\$\$\$isSourceNode\$\$\$\";

\t/**
\t * SourceNodes provide a way to abstract over interpolating/concatenating
\t * snippets of generated JavaScript source code while maintaining the line and
\t * column information associated with the original source code.
\t *
\t * @param aLine The original line number.
\t * @param aColumn The original column number.
\t * @param aSource The original source's filename.
\t * @param aChunks Optional. An array of strings which are snippets of
\t *        generated JS, or other SourceNodes.
\t * @param aName The original identifier.
\t */
\tfunction SourceNode(aLine, aColumn, aSource, aChunks, aName) {
\t  this.children = [];
\t  this.sourceContents = {};
\t  this.line = aLine == null ? null : aLine;
\t  this.column = aColumn == null ? null : aColumn;
\t  this.source = aSource == null ? null : aSource;
\t  this.name = aName == null ? null : aName;
\t  this[isSourceNode] = true;
\t  if (aChunks != null) this.add(aChunks);
\t}

\t/**
\t * Creates a SourceNode from generated code and a SourceMapConsumer.
\t *
\t * @param aGeneratedCode The generated code
\t * @param aSourceMapConsumer The SourceMap for the generated code
\t * @param aRelativePath Optional. The path that relative sources in the
\t *        SourceMapConsumer should be relative to.
\t */
\tSourceNode.fromStringWithSourceMap =
\t  function SourceNode_fromStringWithSourceMap(aGeneratedCode, aSourceMapConsumer, aRelativePath) {
\t    // The SourceNode we want to fill with the generated code
\t    // and the SourceMap
\t    var node = new SourceNode();

\t    // All even indices of this array are one line of the generated code,
\t    // while all odd indices are the newlines between two adjacent lines
\t    // (since `REGEX_NEWLINE` captures its match).
\t    // Processed fragments are accessed by calling `shiftNextLine`.
\t    var remainingLines = aGeneratedCode.split(REGEX_NEWLINE);
\t    var remainingLinesIndex = 0;
\t    var shiftNextLine = function() {
\t      var lineContents = getNextLine();
\t      // The last line of a file might not have a newline.
\t      var newLine = getNextLine() || \"\";
\t      return lineContents + newLine;

\t      function getNextLine() {
\t        return remainingLinesIndex < remainingLines.length ?
\t            remainingLines[remainingLinesIndex++] : undefined;
\t      }
\t    };

\t    // We need to remember the position of \"remainingLines\"
\t    var lastGeneratedLine = 1, lastGeneratedColumn = 0;

\t    // The generate SourceNodes we need a code range.
\t    // To extract it current and last mapping is used.
\t    // Here we store the last mapping.
\t    var lastMapping = null;

\t    aSourceMapConsumer.eachMapping(function (mapping) {
\t      if (lastMapping !== null) {
\t        // We add the code from \"lastMapping\" to \"mapping\":
\t        // First check if there is a new line in between.
\t        if (lastGeneratedLine < mapping.generatedLine) {
\t          // Associate first line with \"lastMapping\"
\t          addMappingWithCode(lastMapping, shiftNextLine());
\t          lastGeneratedLine++;
\t          lastGeneratedColumn = 0;
\t          // The remaining code is added without mapping
\t        } else {
\t          // There is no new line in between.
\t          // Associate the code between \"lastGeneratedColumn\" and
\t          // \"mapping.generatedColumn\" with \"lastMapping\"
\t          var nextLine = remainingLines[remainingLinesIndex];
\t          var code = nextLine.substr(0, mapping.generatedColumn -
\t                                        lastGeneratedColumn);
\t          remainingLines[remainingLinesIndex] = nextLine.substr(mapping.generatedColumn -
\t                                              lastGeneratedColumn);
\t          lastGeneratedColumn = mapping.generatedColumn;
\t          addMappingWithCode(lastMapping, code);
\t          // No more remaining code, continue
\t          lastMapping = mapping;
\t          return;
\t        }
\t      }
\t      // We add the generated code until the first mapping
\t      // to the SourceNode without any mapping.
\t      // Each line is added as separate string.
\t      while (lastGeneratedLine < mapping.generatedLine) {
\t        node.add(shiftNextLine());
\t        lastGeneratedLine++;
\t      }
\t      if (lastGeneratedColumn < mapping.generatedColumn) {
\t        var nextLine = remainingLines[remainingLinesIndex];
\t        node.add(nextLine.substr(0, mapping.generatedColumn));
\t        remainingLines[remainingLinesIndex] = nextLine.substr(mapping.generatedColumn);
\t        lastGeneratedColumn = mapping.generatedColumn;
\t      }
\t      lastMapping = mapping;
\t    }, this);
\t    // We have processed all mappings.
\t    if (remainingLinesIndex < remainingLines.length) {
\t      if (lastMapping) {
\t        // Associate the remaining code in the current line with \"lastMapping\"
\t        addMappingWithCode(lastMapping, shiftNextLine());
\t      }
\t      // and add the remaining lines without any mapping
\t      node.add(remainingLines.splice(remainingLinesIndex).join(\"\"));
\t    }

\t    // Copy sourcesContent into SourceNode
\t    aSourceMapConsumer.sources.forEach(function (sourceFile) {
\t      var content = aSourceMapConsumer.sourceContentFor(sourceFile);
\t      if (content != null) {
\t        if (aRelativePath != null) {
\t          sourceFile = util.join(aRelativePath, sourceFile);
\t        }
\t        node.setSourceContent(sourceFile, content);
\t      }
\t    });

\t    return node;

\t    function addMappingWithCode(mapping, code) {
\t      if (mapping === null || mapping.source === undefined) {
\t        node.add(code);
\t      } else {
\t        var source = aRelativePath
\t          ? util.join(aRelativePath, mapping.source)
\t          : mapping.source;
\t        node.add(new SourceNode(mapping.originalLine,
\t                                mapping.originalColumn,
\t                                source,
\t                                code,
\t                                mapping.name));
\t      }
\t    }
\t  };

\t/**
\t * Add a chunk of generated JS to this source node.
\t *
\t * @param aChunk A string snippet of generated JS code, another instance of
\t *        SourceNode, or an array where each member is one of those things.
\t */
\tSourceNode.prototype.add = function SourceNode_add(aChunk) {
\t  if (Array.isArray(aChunk)) {
\t    aChunk.forEach(function (chunk) {
\t      this.add(chunk);
\t    }, this);
\t  }
\t  else if (aChunk[isSourceNode] || typeof aChunk === \"string\") {
\t    if (aChunk) {
\t      this.children.push(aChunk);
\t    }
\t  }
\t  else {
\t    throw new TypeError(
\t      \"Expected a SourceNode, string, or an array of SourceNodes and strings. Got \" + aChunk
\t    );
\t  }
\t  return this;
\t};

\t/**
\t * Add a chunk of generated JS to the beginning of this source node.
\t *
\t * @param aChunk A string snippet of generated JS code, another instance of
\t *        SourceNode, or an array where each member is one of those things.
\t */
\tSourceNode.prototype.prepend = function SourceNode_prepend(aChunk) {
\t  if (Array.isArray(aChunk)) {
\t    for (var i = aChunk.length-1; i >= 0; i--) {
\t      this.prepend(aChunk[i]);
\t    }
\t  }
\t  else if (aChunk[isSourceNode] || typeof aChunk === \"string\") {
\t    this.children.unshift(aChunk);
\t  }
\t  else {
\t    throw new TypeError(
\t      \"Expected a SourceNode, string, or an array of SourceNodes and strings. Got \" + aChunk
\t    );
\t  }
\t  return this;
\t};

\t/**
\t * Walk over the tree of JS snippets in this node and its children. The
\t * walking function is called once for each snippet of JS and is passed that
\t * snippet and the its original associated source's line/column location.
\t *
\t * @param aFn The traversal function.
\t */
\tSourceNode.prototype.walk = function SourceNode_walk(aFn) {
\t  var chunk;
\t  for (var i = 0, len = this.children.length; i < len; i++) {
\t    chunk = this.children[i];
\t    if (chunk[isSourceNode]) {
\t      chunk.walk(aFn);
\t    }
\t    else {
\t      if (chunk !== '') {
\t        aFn(chunk, { source: this.source,
\t                     line: this.line,
\t                     column: this.column,
\t                     name: this.name });
\t      }
\t    }
\t  }
\t};

\t/**
\t * Like `String.prototype.join` except for SourceNodes. Inserts `aStr` between
\t * each of `this.children`.
\t *
\t * @param aSep The separator.
\t */
\tSourceNode.prototype.join = function SourceNode_join(aSep) {
\t  var newChildren;
\t  var i;
\t  var len = this.children.length;
\t  if (len > 0) {
\t    newChildren = [];
\t    for (i = 0; i < len-1; i++) {
\t      newChildren.push(this.children[i]);
\t      newChildren.push(aSep);
\t    }
\t    newChildren.push(this.children[i]);
\t    this.children = newChildren;
\t  }
\t  return this;
\t};

\t/**
\t * Call String.prototype.replace on the very right-most source snippet. Useful
\t * for trimming whitespace from the end of a source node, etc.
\t *
\t * @param aPattern The pattern to replace.
\t * @param aReplacement The thing to replace the pattern with.
\t */
\tSourceNode.prototype.replaceRight = function SourceNode_replaceRight(aPattern, aReplacement) {
\t  var lastChild = this.children[this.children.length - 1];
\t  if (lastChild[isSourceNode]) {
\t    lastChild.replaceRight(aPattern, aReplacement);
\t  }
\t  else if (typeof lastChild === 'string') {
\t    this.children[this.children.length - 1] = lastChild.replace(aPattern, aReplacement);
\t  }
\t  else {
\t    this.children.push(''.replace(aPattern, aReplacement));
\t  }
\t  return this;
\t};

\t/**
\t * Set the source content for a source file. This will be added to the SourceMapGenerator
\t * in the sourcesContent field.
\t *
\t * @param aSourceFile The filename of the source file
\t * @param aSourceContent The content of the source file
\t */
\tSourceNode.prototype.setSourceContent =
\t  function SourceNode_setSourceContent(aSourceFile, aSourceContent) {
\t    this.sourceContents[util.toSetString(aSourceFile)] = aSourceContent;
\t  };

\t/**
\t * Walk over the tree of SourceNodes. The walking function is called for each
\t * source file content and is passed the filename and source content.
\t *
\t * @param aFn The traversal function.
\t */
\tSourceNode.prototype.walkSourceContents =
\t  function SourceNode_walkSourceContents(aFn) {
\t    for (var i = 0, len = this.children.length; i < len; i++) {
\t      if (this.children[i][isSourceNode]) {
\t        this.children[i].walkSourceContents(aFn);
\t      }
\t    }

\t    var sources = Object.keys(this.sourceContents);
\t    for (var i = 0, len = sources.length; i < len; i++) {
\t      aFn(util.fromSetString(sources[i]), this.sourceContents[sources[i]]);
\t    }
\t  };

\t/**
\t * Return the string representation of this source node. Walks over the tree
\t * and concatenates all the various snippets together to one string.
\t */
\tSourceNode.prototype.toString = function SourceNode_toString() {
\t  var str = \"\";
\t  this.walk(function (chunk) {
\t    str += chunk;
\t  });
\t  return str;
\t};

\t/**
\t * Returns the string representation of this source node along with a source
\t * map.
\t */
\tSourceNode.prototype.toStringWithSourceMap = function SourceNode_toStringWithSourceMap(aArgs) {
\t  var generated = {
\t    code: \"\",
\t    line: 1,
\t    column: 0
\t  };
\t  var map = new SourceMapGenerator(aArgs);
\t  var sourceMappingActive = false;
\t  var lastOriginalSource = null;
\t  var lastOriginalLine = null;
\t  var lastOriginalColumn = null;
\t  var lastOriginalName = null;
\t  this.walk(function (chunk, original) {
\t    generated.code += chunk;
\t    if (original.source !== null
\t        && original.line !== null
\t        && original.column !== null) {
\t      if(lastOriginalSource !== original.source
\t         || lastOriginalLine !== original.line
\t         || lastOriginalColumn !== original.column
\t         || lastOriginalName !== original.name) {
\t        map.addMapping({
\t          source: original.source,
\t          original: {
\t            line: original.line,
\t            column: original.column
\t          },
\t          generated: {
\t            line: generated.line,
\t            column: generated.column
\t          },
\t          name: original.name
\t        });
\t      }
\t      lastOriginalSource = original.source;
\t      lastOriginalLine = original.line;
\t      lastOriginalColumn = original.column;
\t      lastOriginalName = original.name;
\t      sourceMappingActive = true;
\t    } else if (sourceMappingActive) {
\t      map.addMapping({
\t        generated: {
\t          line: generated.line,
\t          column: generated.column
\t        }
\t      });
\t      lastOriginalSource = null;
\t      sourceMappingActive = false;
\t    }
\t    for (var idx = 0, length = chunk.length; idx < length; idx++) {
\t      if (chunk.charCodeAt(idx) === NEWLINE_CODE) {
\t        generated.line++;
\t        generated.column = 0;
\t        // Mappings end at eol
\t        if (idx + 1 === length) {
\t          lastOriginalSource = null;
\t          sourceMappingActive = false;
\t        } else if (sourceMappingActive) {
\t          map.addMapping({
\t            source: original.source,
\t            original: {
\t              line: original.line,
\t              column: original.column
\t            },
\t            generated: {
\t              line: generated.line,
\t              column: generated.column
\t            },
\t            name: original.name
\t          });
\t        }
\t      } else {
\t        generated.column++;
\t      }
\t    }
\t  });
\t  this.walkSourceContents(function (sourceFile, sourceContent) {
\t    map.setSourceContent(sourceFile, sourceContent);
\t  });

\t  return { code: generated.code, map: map };
\t};

\texports.SourceNode = SourceNode;


/***/ })
/******/ ])
});
;";
        
        $__internal_b34d5de444a55f16db0253edf4ca49d71f78bce51c8822a37d0385bbafb82740->leave($__internal_b34d5de444a55f16db0253edf4ca49d71f78bce51c8822a37d0385bbafb82740_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/source-map/dist/source-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function webpackUniversalModuleDefinition(root, factory) {
\tif(typeof exports === 'object' && typeof module === 'object')
\t\tmodule.exports = factory();
\telse if(typeof define === 'function' && define.amd)
\t\tdefine([], factory);
\telse if(typeof exports === 'object')
\t\texports[\"sourceMap\"] = factory();
\telse
\t\troot[\"sourceMap\"] = factory();
})(this, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ \t// The module cache
/******/ \tvar installedModules = {};

/******/ \t// The require function
/******/ \tfunction __webpack_require__(moduleId) {

/******/ \t\t// Check if module is in cache
/******/ \t\tif(installedModules[moduleId])
/******/ \t\t\treturn installedModules[moduleId].exports;

/******/ \t\t// Create a new module (and put it into the cache)
/******/ \t\tvar module = installedModules[moduleId] = {
/******/ \t\t\texports: {},
/******/ \t\t\tid: moduleId,
/******/ \t\t\tloaded: false
/******/ \t\t};

/******/ \t\t// Execute the module function
/******/ \t\tmodules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ \t\t// Flag the module as loaded
/******/ \t\tmodule.loaded = true;

/******/ \t\t// Return the exports of the module
/******/ \t\treturn module.exports;
/******/ \t}


/******/ \t// expose the modules object (__webpack_modules__)
/******/ \t__webpack_require__.m = modules;

/******/ \t// expose the module cache
/******/ \t__webpack_require__.c = installedModules;

/******/ \t// __webpack_public_path__
/******/ \t__webpack_require__.p = \"\";

/******/ \t// Load entry module and return exports
/******/ \treturn __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

\t/*
\t * Copyright 2009-2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE.txt or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */
\texports.SourceMapGenerator = __webpack_require__(1).SourceMapGenerator;
\texports.SourceMapConsumer = __webpack_require__(7).SourceMapConsumer;
\texports.SourceNode = __webpack_require__(10).SourceNode;


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar base64VLQ = __webpack_require__(2);
\tvar util = __webpack_require__(4);
\tvar ArraySet = __webpack_require__(5).ArraySet;
\tvar MappingList = __webpack_require__(6).MappingList;

\t/**
\t * An instance of the SourceMapGenerator represents a source map which is
\t * being built incrementally. You may pass an object with the following
\t * properties:
\t *
\t *   - file: The filename of the generated source.
\t *   - sourceRoot: A root for all relative URLs in this source map.
\t */
\tfunction SourceMapGenerator(aArgs) {
\t  if (!aArgs) {
\t    aArgs = {};
\t  }
\t  this._file = util.getArg(aArgs, 'file', null);
\t  this._sourceRoot = util.getArg(aArgs, 'sourceRoot', null);
\t  this._skipValidation = util.getArg(aArgs, 'skipValidation', false);
\t  this._sources = new ArraySet();
\t  this._names = new ArraySet();
\t  this._mappings = new MappingList();
\t  this._sourcesContents = null;
\t}

\tSourceMapGenerator.prototype._version = 3;

\t/**
\t * Creates a new SourceMapGenerator based on a SourceMapConsumer
\t *
\t * @param aSourceMapConsumer The SourceMap.
\t */
\tSourceMapGenerator.fromSourceMap =
\t  function SourceMapGenerator_fromSourceMap(aSourceMapConsumer) {
\t    var sourceRoot = aSourceMapConsumer.sourceRoot;
\t    var generator = new SourceMapGenerator({
\t      file: aSourceMapConsumer.file,
\t      sourceRoot: sourceRoot
\t    });
\t    aSourceMapConsumer.eachMapping(function (mapping) {
\t      var newMapping = {
\t        generated: {
\t          line: mapping.generatedLine,
\t          column: mapping.generatedColumn
\t        }
\t      };

\t      if (mapping.source != null) {
\t        newMapping.source = mapping.source;
\t        if (sourceRoot != null) {
\t          newMapping.source = util.relative(sourceRoot, newMapping.source);
\t        }

\t        newMapping.original = {
\t          line: mapping.originalLine,
\t          column: mapping.originalColumn
\t        };

\t        if (mapping.name != null) {
\t          newMapping.name = mapping.name;
\t        }
\t      }

\t      generator.addMapping(newMapping);
\t    });
\t    aSourceMapConsumer.sources.forEach(function (sourceFile) {
\t      var content = aSourceMapConsumer.sourceContentFor(sourceFile);
\t      if (content != null) {
\t        generator.setSourceContent(sourceFile, content);
\t      }
\t    });
\t    return generator;
\t  };

\t/**
\t * Add a single mapping from original source line and column to the generated
\t * source's line and column for this source map being created. The mapping
\t * object should have the following properties:
\t *
\t *   - generated: An object with the generated line and column positions.
\t *   - original: An object with the original line and column positions.
\t *   - source: The original source file (relative to the sourceRoot).
\t *   - name: An optional original token name for this mapping.
\t */
\tSourceMapGenerator.prototype.addMapping =
\t  function SourceMapGenerator_addMapping(aArgs) {
\t    var generated = util.getArg(aArgs, 'generated');
\t    var original = util.getArg(aArgs, 'original', null);
\t    var source = util.getArg(aArgs, 'source', null);
\t    var name = util.getArg(aArgs, 'name', null);

\t    if (!this._skipValidation) {
\t      this._validateMapping(generated, original, source, name);
\t    }

\t    if (source != null) {
\t      source = String(source);
\t      if (!this._sources.has(source)) {
\t        this._sources.add(source);
\t      }
\t    }

\t    if (name != null) {
\t      name = String(name);
\t      if (!this._names.has(name)) {
\t        this._names.add(name);
\t      }
\t    }

\t    this._mappings.add({
\t      generatedLine: generated.line,
\t      generatedColumn: generated.column,
\t      originalLine: original != null && original.line,
\t      originalColumn: original != null && original.column,
\t      source: source,
\t      name: name
\t    });
\t  };

\t/**
\t * Set the source content for a source file.
\t */
\tSourceMapGenerator.prototype.setSourceContent =
\t  function SourceMapGenerator_setSourceContent(aSourceFile, aSourceContent) {
\t    var source = aSourceFile;
\t    if (this._sourceRoot != null) {
\t      source = util.relative(this._sourceRoot, source);
\t    }

\t    if (aSourceContent != null) {
\t      // Add the source content to the _sourcesContents map.
\t      // Create a new _sourcesContents map if the property is null.
\t      if (!this._sourcesContents) {
\t        this._sourcesContents = Object.create(null);
\t      }
\t      this._sourcesContents[util.toSetString(source)] = aSourceContent;
\t    } else if (this._sourcesContents) {
\t      // Remove the source file from the _sourcesContents map.
\t      // If the _sourcesContents map is empty, set the property to null.
\t      delete this._sourcesContents[util.toSetString(source)];
\t      if (Object.keys(this._sourcesContents).length === 0) {
\t        this._sourcesContents = null;
\t      }
\t    }
\t  };

\t/**
\t * Applies the mappings of a sub-source-map for a specific source file to the
\t * source map being generated. Each mapping to the supplied source file is
\t * rewritten using the supplied source map. Note: The resolution for the
\t * resulting mappings is the minimium of this map and the supplied map.
\t *
\t * @param aSourceMapConsumer The source map to be applied.
\t * @param aSourceFile Optional. The filename of the source file.
\t *        If omitted, SourceMapConsumer's file property will be used.
\t * @param aSourceMapPath Optional. The dirname of the path to the source map
\t *        to be applied. If relative, it is relative to the SourceMapConsumer.
\t *        This parameter is needed when the two source maps aren't in the same
\t *        directory, and the source map to be applied contains relative source
\t *        paths. If so, those relative source paths need to be rewritten
\t *        relative to the SourceMapGenerator.
\t */
\tSourceMapGenerator.prototype.applySourceMap =
\t  function SourceMapGenerator_applySourceMap(aSourceMapConsumer, aSourceFile, aSourceMapPath) {
\t    var sourceFile = aSourceFile;
\t    // If aSourceFile is omitted, we will use the file property of the SourceMap
\t    if (aSourceFile == null) {
\t      if (aSourceMapConsumer.file == null) {
\t        throw new Error(
\t          'SourceMapGenerator.prototype.applySourceMap requires either an explicit source file, ' +
\t          'or the source map\\'s \"file\" property. Both were omitted.'
\t        );
\t      }
\t      sourceFile = aSourceMapConsumer.file;
\t    }
\t    var sourceRoot = this._sourceRoot;
\t    // Make \"sourceFile\" relative if an absolute Url is passed.
\t    if (sourceRoot != null) {
\t      sourceFile = util.relative(sourceRoot, sourceFile);
\t    }
\t    // Applying the SourceMap can add and remove items from the sources and
\t    // the names array.
\t    var newSources = new ArraySet();
\t    var newNames = new ArraySet();

\t    // Find mappings for the \"sourceFile\"
\t    this._mappings.unsortedForEach(function (mapping) {
\t      if (mapping.source === sourceFile && mapping.originalLine != null) {
\t        // Check if it can be mapped by the source map, then update the mapping.
\t        var original = aSourceMapConsumer.originalPositionFor({
\t          line: mapping.originalLine,
\t          column: mapping.originalColumn
\t        });
\t        if (original.source != null) {
\t          // Copy mapping
\t          mapping.source = original.source;
\t          if (aSourceMapPath != null) {
\t            mapping.source = util.join(aSourceMapPath, mapping.source)
\t          }
\t          if (sourceRoot != null) {
\t            mapping.source = util.relative(sourceRoot, mapping.source);
\t          }
\t          mapping.originalLine = original.line;
\t          mapping.originalColumn = original.column;
\t          if (original.name != null) {
\t            mapping.name = original.name;
\t          }
\t        }
\t      }

\t      var source = mapping.source;
\t      if (source != null && !newSources.has(source)) {
\t        newSources.add(source);
\t      }

\t      var name = mapping.name;
\t      if (name != null && !newNames.has(name)) {
\t        newNames.add(name);
\t      }

\t    }, this);
\t    this._sources = newSources;
\t    this._names = newNames;

\t    // Copy sourcesContents of applied map.
\t    aSourceMapConsumer.sources.forEach(function (sourceFile) {
\t      var content = aSourceMapConsumer.sourceContentFor(sourceFile);
\t      if (content != null) {
\t        if (aSourceMapPath != null) {
\t          sourceFile = util.join(aSourceMapPath, sourceFile);
\t        }
\t        if (sourceRoot != null) {
\t          sourceFile = util.relative(sourceRoot, sourceFile);
\t        }
\t        this.setSourceContent(sourceFile, content);
\t      }
\t    }, this);
\t  };

\t/**
\t * A mapping can have one of the three levels of data:
\t *
\t *   1. Just the generated position.
\t *   2. The Generated position, original position, and original source.
\t *   3. Generated and original position, original source, as well as a name
\t *      token.
\t *
\t * To maintain consistency, we validate that any new mapping being added falls
\t * in to one of these categories.
\t */
\tSourceMapGenerator.prototype._validateMapping =
\t  function SourceMapGenerator_validateMapping(aGenerated, aOriginal, aSource,
\t                                              aName) {
\t    // When aOriginal is truthy but has empty values for .line and .column,
\t    // it is most likely a programmer error. In this case we throw a very
\t    // specific error message to try to guide them the right way.
\t    // For example: https://github.com/Polymer/polymer-bundler/pull/519
\t    if (aOriginal && typeof aOriginal.line !== 'number' && typeof aOriginal.column !== 'number') {
\t        throw new Error(
\t            'original.line and original.column are not numbers -- you probably meant to omit ' +
\t            'the original mapping entirely and only map the generated position. If so, pass ' +
\t            'null for the original mapping instead of an object with empty or null values.'
\t        );
\t    }

\t    if (aGenerated && 'line' in aGenerated && 'column' in aGenerated
\t        && aGenerated.line > 0 && aGenerated.column >= 0
\t        && !aOriginal && !aSource && !aName) {
\t      // Case 1.
\t      return;
\t    }
\t    else if (aGenerated && 'line' in aGenerated && 'column' in aGenerated
\t             && aOriginal && 'line' in aOriginal && 'column' in aOriginal
\t             && aGenerated.line > 0 && aGenerated.column >= 0
\t             && aOriginal.line > 0 && aOriginal.column >= 0
\t             && aSource) {
\t      // Cases 2 and 3.
\t      return;
\t    }
\t    else {
\t      throw new Error('Invalid mapping: ' + JSON.stringify({
\t        generated: aGenerated,
\t        source: aSource,
\t        original: aOriginal,
\t        name: aName
\t      }));
\t    }
\t  };

\t/**
\t * Serialize the accumulated mappings in to the stream of base 64 VLQs
\t * specified by the source map format.
\t */
\tSourceMapGenerator.prototype._serializeMappings =
\t  function SourceMapGenerator_serializeMappings() {
\t    var previousGeneratedColumn = 0;
\t    var previousGeneratedLine = 1;
\t    var previousOriginalColumn = 0;
\t    var previousOriginalLine = 0;
\t    var previousName = 0;
\t    var previousSource = 0;
\t    var result = '';
\t    var next;
\t    var mapping;
\t    var nameIdx;
\t    var sourceIdx;

\t    var mappings = this._mappings.toArray();
\t    for (var i = 0, len = mappings.length; i < len; i++) {
\t      mapping = mappings[i];
\t      next = ''

\t      if (mapping.generatedLine !== previousGeneratedLine) {
\t        previousGeneratedColumn = 0;
\t        while (mapping.generatedLine !== previousGeneratedLine) {
\t          next += ';';
\t          previousGeneratedLine++;
\t        }
\t      }
\t      else {
\t        if (i > 0) {
\t          if (!util.compareByGeneratedPositionsInflated(mapping, mappings[i - 1])) {
\t            continue;
\t          }
\t          next += ',';
\t        }
\t      }

\t      next += base64VLQ.encode(mapping.generatedColumn
\t                                 - previousGeneratedColumn);
\t      previousGeneratedColumn = mapping.generatedColumn;

\t      if (mapping.source != null) {
\t        sourceIdx = this._sources.indexOf(mapping.source);
\t        next += base64VLQ.encode(sourceIdx - previousSource);
\t        previousSource = sourceIdx;

\t        // lines are stored 0-based in SourceMap spec version 3
\t        next += base64VLQ.encode(mapping.originalLine - 1
\t                                   - previousOriginalLine);
\t        previousOriginalLine = mapping.originalLine - 1;

\t        next += base64VLQ.encode(mapping.originalColumn
\t                                   - previousOriginalColumn);
\t        previousOriginalColumn = mapping.originalColumn;

\t        if (mapping.name != null) {
\t          nameIdx = this._names.indexOf(mapping.name);
\t          next += base64VLQ.encode(nameIdx - previousName);
\t          previousName = nameIdx;
\t        }
\t      }

\t      result += next;
\t    }

\t    return result;
\t  };

\tSourceMapGenerator.prototype._generateSourcesContent =
\t  function SourceMapGenerator_generateSourcesContent(aSources, aSourceRoot) {
\t    return aSources.map(function (source) {
\t      if (!this._sourcesContents) {
\t        return null;
\t      }
\t      if (aSourceRoot != null) {
\t        source = util.relative(aSourceRoot, source);
\t      }
\t      var key = util.toSetString(source);
\t      return Object.prototype.hasOwnProperty.call(this._sourcesContents, key)
\t        ? this._sourcesContents[key]
\t        : null;
\t    }, this);
\t  };

\t/**
\t * Externalize the source map.
\t */
\tSourceMapGenerator.prototype.toJSON =
\t  function SourceMapGenerator_toJSON() {
\t    var map = {
\t      version: this._version,
\t      sources: this._sources.toArray(),
\t      names: this._names.toArray(),
\t      mappings: this._serializeMappings()
\t    };
\t    if (this._file != null) {
\t      map.file = this._file;
\t    }
\t    if (this._sourceRoot != null) {
\t      map.sourceRoot = this._sourceRoot;
\t    }
\t    if (this._sourcesContents) {
\t      map.sourcesContent = this._generateSourcesContent(map.sources, map.sourceRoot);
\t    }

\t    return map;
\t  };

\t/**
\t * Render the source map being generated to a string.
\t */
\tSourceMapGenerator.prototype.toString =
\t  function SourceMapGenerator_toString() {
\t    return JSON.stringify(this.toJSON());
\t  };

\texports.SourceMapGenerator = SourceMapGenerator;


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t *
\t * Based on the Base 64 VLQ implementation in Closure Compiler:
\t * https://code.google.com/p/closure-compiler/source/browse/trunk/src/com/google/debugging/sourcemap/Base64VLQ.java
\t *
\t * Copyright 2011 The Closure Compiler Authors. All rights reserved.
\t * Redistribution and use in source and binary forms, with or without
\t * modification, are permitted provided that the following conditions are
\t * met:
\t *
\t *  * Redistributions of source code must retain the above copyright
\t *    notice, this list of conditions and the following disclaimer.
\t *  * Redistributions in binary form must reproduce the above
\t *    copyright notice, this list of conditions and the following
\t *    disclaimer in the documentation and/or other materials provided
\t *    with the distribution.
\t *  * Neither the name of Google Inc. nor the names of its
\t *    contributors may be used to endorse or promote products derived
\t *    from this software without specific prior written permission.
\t *
\t * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
\t * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
\t * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
\t * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
\t * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
\t * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
\t * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
\t * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
\t * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
\t * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
\t * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
\t */

\tvar base64 = __webpack_require__(3);

\t// A single base 64 digit can contain 6 bits of data. For the base 64 variable
\t// length quantities we use in the source map spec, the first bit is the sign,
\t// the next four bits are the actual value, and the 6th bit is the
\t// continuation bit. The continuation bit tells us whether there are more
\t// digits in this value following this digit.
\t//
\t//   Continuation
\t//   |    Sign
\t//   |    |
\t//   V    V
\t//   101011

\tvar VLQ_BASE_SHIFT = 5;

\t// binary: 100000
\tvar VLQ_BASE = 1 << VLQ_BASE_SHIFT;

\t// binary: 011111
\tvar VLQ_BASE_MASK = VLQ_BASE - 1;

\t// binary: 100000
\tvar VLQ_CONTINUATION_BIT = VLQ_BASE;

\t/**
\t * Converts from a two-complement value to a value where the sign bit is
\t * placed in the least significant bit.  For example, as decimals:
\t *   1 becomes 2 (10 binary), -1 becomes 3 (11 binary)
\t *   2 becomes 4 (100 binary), -2 becomes 5 (101 binary)
\t */
\tfunction toVLQSigned(aValue) {
\t  return aValue < 0
\t    ? ((-aValue) << 1) + 1
\t    : (aValue << 1) + 0;
\t}

\t/**
\t * Converts to a two-complement value from a value where the sign bit is
\t * placed in the least significant bit.  For example, as decimals:
\t *   2 (10 binary) becomes 1, 3 (11 binary) becomes -1
\t *   4 (100 binary) becomes 2, 5 (101 binary) becomes -2
\t */
\tfunction fromVLQSigned(aValue) {
\t  var isNegative = (aValue & 1) === 1;
\t  var shifted = aValue >> 1;
\t  return isNegative
\t    ? -shifted
\t    : shifted;
\t}

\t/**
\t * Returns the base 64 VLQ encoded value.
\t */
\texports.encode = function base64VLQ_encode(aValue) {
\t  var encoded = \"\";
\t  var digit;

\t  var vlq = toVLQSigned(aValue);

\t  do {
\t    digit = vlq & VLQ_BASE_MASK;
\t    vlq >>>= VLQ_BASE_SHIFT;
\t    if (vlq > 0) {
\t      // There are still more digits in this value, so we must make sure the
\t      // continuation bit is marked.
\t      digit |= VLQ_CONTINUATION_BIT;
\t    }
\t    encoded += base64.encode(digit);
\t  } while (vlq > 0);

\t  return encoded;
\t};

\t/**
\t * Decodes the next base 64 VLQ value from the given string and returns the
\t * value and the rest of the string via the out parameter.
\t */
\texports.decode = function base64VLQ_decode(aStr, aIndex, aOutParam) {
\t  var strLen = aStr.length;
\t  var result = 0;
\t  var shift = 0;
\t  var continuation, digit;

\t  do {
\t    if (aIndex >= strLen) {
\t      throw new Error(\"Expected more digits in base 64 VLQ value.\");
\t    }

\t    digit = base64.decode(aStr.charCodeAt(aIndex++));
\t    if (digit === -1) {
\t      throw new Error(\"Invalid base64 digit: \" + aStr.charAt(aIndex - 1));
\t    }

\t    continuation = !!(digit & VLQ_CONTINUATION_BIT);
\t    digit &= VLQ_BASE_MASK;
\t    result = result + (digit << shift);
\t    shift += VLQ_BASE_SHIFT;
\t  } while (continuation);

\t  aOutParam.value = fromVLQSigned(result);
\t  aOutParam.rest = aIndex;
\t};


/***/ }),
/* 3 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar intToCharMap = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'.split('');

\t/**
\t * Encode an integer in the range of 0 to 63 to a single base 64 digit.
\t */
\texports.encode = function (number) {
\t  if (0 <= number && number < intToCharMap.length) {
\t    return intToCharMap[number];
\t  }
\t  throw new TypeError(\"Must be between 0 and 63: \" + number);
\t};

\t/**
\t * Decode a single base 64 character code digit to an integer. Returns -1 on
\t * failure.
\t */
\texports.decode = function (charCode) {
\t  var bigA = 65;     // 'A'
\t  var bigZ = 90;     // 'Z'

\t  var littleA = 97;  // 'a'
\t  var littleZ = 122; // 'z'

\t  var zero = 48;     // '0'
\t  var nine = 57;     // '9'

\t  var plus = 43;     // '+'
\t  var slash = 47;    // '/'

\t  var littleOffset = 26;
\t  var numberOffset = 52;

\t  // 0 - 25: ABCDEFGHIJKLMNOPQRSTUVWXYZ
\t  if (bigA <= charCode && charCode <= bigZ) {
\t    return (charCode - bigA);
\t  }

\t  // 26 - 51: abcdefghijklmnopqrstuvwxyz
\t  if (littleA <= charCode && charCode <= littleZ) {
\t    return (charCode - littleA + littleOffset);
\t  }

\t  // 52 - 61: 0123456789
\t  if (zero <= charCode && charCode <= nine) {
\t    return (charCode - zero + numberOffset);
\t  }

\t  // 62: +
\t  if (charCode == plus) {
\t    return 62;
\t  }

\t  // 63: /
\t  if (charCode == slash) {
\t    return 63;
\t  }

\t  // Invalid base64 digit.
\t  return -1;
\t};


/***/ }),
/* 4 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\t/**
\t * This is a helper function for getting values from parameter/options
\t * objects.
\t *
\t * @param args The object we are extracting values from
\t * @param name The name of the property we are getting.
\t * @param defaultValue An optional value to return if the property is missing
\t * from the object. If this is not specified and the property is missing, an
\t * error will be thrown.
\t */
\tfunction getArg(aArgs, aName, aDefaultValue) {
\t  if (aName in aArgs) {
\t    return aArgs[aName];
\t  } else if (arguments.length === 3) {
\t    return aDefaultValue;
\t  } else {
\t    throw new Error('\"' + aName + '\" is a required argument.');
\t  }
\t}
\texports.getArg = getArg;

\tvar urlRegexp = /^(?:([\\w+\\-.]+):)?\\/\\/(?:(\\w+:\\w+)@)?([\\w.]*)(?::(\\d+))?(\\S*)\$/;
\tvar dataUrlRegexp = /^data:.+\\,.+\$/;

\tfunction urlParse(aUrl) {
\t  var match = aUrl.match(urlRegexp);
\t  if (!match) {
\t    return null;
\t  }
\t  return {
\t    scheme: match[1],
\t    auth: match[2],
\t    host: match[3],
\t    port: match[4],
\t    path: match[5]
\t  };
\t}
\texports.urlParse = urlParse;

\tfunction urlGenerate(aParsedUrl) {
\t  var url = '';
\t  if (aParsedUrl.scheme) {
\t    url += aParsedUrl.scheme + ':';
\t  }
\t  url += '//';
\t  if (aParsedUrl.auth) {
\t    url += aParsedUrl.auth + '@';
\t  }
\t  if (aParsedUrl.host) {
\t    url += aParsedUrl.host;
\t  }
\t  if (aParsedUrl.port) {
\t    url += \":\" + aParsedUrl.port
\t  }
\t  if (aParsedUrl.path) {
\t    url += aParsedUrl.path;
\t  }
\t  return url;
\t}
\texports.urlGenerate = urlGenerate;

\t/**
\t * Normalizes a path, or the path portion of a URL:
\t *
\t * - Replaces consecutive slashes with one slash.
\t * - Removes unnecessary '.' parts.
\t * - Removes unnecessary '<dir>/..' parts.
\t *
\t * Based on code in the Node.js 'path' core module.
\t *
\t * @param aPath The path or url to normalize.
\t */
\tfunction normalize(aPath) {
\t  var path = aPath;
\t  var url = urlParse(aPath);
\t  if (url) {
\t    if (!url.path) {
\t      return aPath;
\t    }
\t    path = url.path;
\t  }
\t  var isAbsolute = exports.isAbsolute(path);

\t  var parts = path.split(/\\/+/);
\t  for (var part, up = 0, i = parts.length - 1; i >= 0; i--) {
\t    part = parts[i];
\t    if (part === '.') {
\t      parts.splice(i, 1);
\t    } else if (part === '..') {
\t      up++;
\t    } else if (up > 0) {
\t      if (part === '') {
\t        // The first part is blank if the path is absolute. Trying to go
\t        // above the root is a no-op. Therefore we can remove all '..' parts
\t        // directly after the root.
\t        parts.splice(i + 1, up);
\t        up = 0;
\t      } else {
\t        parts.splice(i, 2);
\t        up--;
\t      }
\t    }
\t  }
\t  path = parts.join('/');

\t  if (path === '') {
\t    path = isAbsolute ? '/' : '.';
\t  }

\t  if (url) {
\t    url.path = path;
\t    return urlGenerate(url);
\t  }
\t  return path;
\t}
\texports.normalize = normalize;

\t/**
\t * Joins two paths/URLs.
\t *
\t * @param aRoot The root path or URL.
\t * @param aPath The path or URL to be joined with the root.
\t *
\t * - If aPath is a URL or a data URI, aPath is returned, unless aPath is a
\t *   scheme-relative URL: Then the scheme of aRoot, if any, is prepended
\t *   first.
\t * - Otherwise aPath is a path. If aRoot is a URL, then its path portion
\t *   is updated with the result and aRoot is returned. Otherwise the result
\t *   is returned.
\t *   - If aPath is absolute, the result is aPath.
\t *   - Otherwise the two paths are joined with a slash.
\t * - Joining for example 'http://' and 'www.example.com' is also supported.
\t */
\tfunction join(aRoot, aPath) {
\t  if (aRoot === \"\") {
\t    aRoot = \".\";
\t  }
\t  if (aPath === \"\") {
\t    aPath = \".\";
\t  }
\t  var aPathUrl = urlParse(aPath);
\t  var aRootUrl = urlParse(aRoot);
\t  if (aRootUrl) {
\t    aRoot = aRootUrl.path || '/';
\t  }

\t  // `join(foo, '//www.example.org')`
\t  if (aPathUrl && !aPathUrl.scheme) {
\t    if (aRootUrl) {
\t      aPathUrl.scheme = aRootUrl.scheme;
\t    }
\t    return urlGenerate(aPathUrl);
\t  }

\t  if (aPathUrl || aPath.match(dataUrlRegexp)) {
\t    return aPath;
\t  }

\t  // `join('http://', 'www.example.com')`
\t  if (aRootUrl && !aRootUrl.host && !aRootUrl.path) {
\t    aRootUrl.host = aPath;
\t    return urlGenerate(aRootUrl);
\t  }

\t  var joined = aPath.charAt(0) === '/'
\t    ? aPath
\t    : normalize(aRoot.replace(/\\/+\$/, '') + '/' + aPath);

\t  if (aRootUrl) {
\t    aRootUrl.path = joined;
\t    return urlGenerate(aRootUrl);
\t  }
\t  return joined;
\t}
\texports.join = join;

\texports.isAbsolute = function (aPath) {
\t  return aPath.charAt(0) === '/' || !!aPath.match(urlRegexp);
\t};

\t/**
\t * Make a path relative to a URL or another path.
\t *
\t * @param aRoot The root path or URL.
\t * @param aPath The path or URL to be made relative to aRoot.
\t */
\tfunction relative(aRoot, aPath) {
\t  if (aRoot === \"\") {
\t    aRoot = \".\";
\t  }

\t  aRoot = aRoot.replace(/\\/\$/, '');

\t  // It is possible for the path to be above the root. In this case, simply
\t  // checking whether the root is a prefix of the path won't work. Instead, we
\t  // need to remove components from the root one by one, until either we find
\t  // a prefix that fits, or we run out of components to remove.
\t  var level = 0;
\t  while (aPath.indexOf(aRoot + '/') !== 0) {
\t    var index = aRoot.lastIndexOf(\"/\");
\t    if (index < 0) {
\t      return aPath;
\t    }

\t    // If the only part of the root that is left is the scheme (i.e. http://,
\t    // file:///, etc.), one or more slashes (/), or simply nothing at all, we
\t    // have exhausted all components, so the path is not relative to the root.
\t    aRoot = aRoot.slice(0, index);
\t    if (aRoot.match(/^([^\\/]+:\\/)?\\/*\$/)) {
\t      return aPath;
\t    }

\t    ++level;
\t  }

\t  // Make sure we add a \"../\" for each component we removed from the root.
\t  return Array(level + 1).join(\"../\") + aPath.substr(aRoot.length + 1);
\t}
\texports.relative = relative;

\tvar supportsNullProto = (function () {
\t  var obj = Object.create(null);
\t  return !('__proto__' in obj);
\t}());

\tfunction identity (s) {
\t  return s;
\t}

\t/**
\t * Because behavior goes wacky when you set `__proto__` on objects, we
\t * have to prefix all the strings in our set with an arbitrary character.
\t *
\t * See https://github.com/mozilla/source-map/pull/31 and
\t * https://github.com/mozilla/source-map/issues/30
\t *
\t * @param String aStr
\t */
\tfunction toSetString(aStr) {
\t  if (isProtoString(aStr)) {
\t    return '\$' + aStr;
\t  }

\t  return aStr;
\t}
\texports.toSetString = supportsNullProto ? identity : toSetString;

\tfunction fromSetString(aStr) {
\t  if (isProtoString(aStr)) {
\t    return aStr.slice(1);
\t  }

\t  return aStr;
\t}
\texports.fromSetString = supportsNullProto ? identity : fromSetString;

\tfunction isProtoString(s) {
\t  if (!s) {
\t    return false;
\t  }

\t  var length = s.length;

\t  if (length < 9 /* \"__proto__\".length */) {
\t    return false;
\t  }

\t  if (s.charCodeAt(length - 1) !== 95  /* '_' */ ||
\t      s.charCodeAt(length - 2) !== 95  /* '_' */ ||
\t      s.charCodeAt(length - 3) !== 111 /* 'o' */ ||
\t      s.charCodeAt(length - 4) !== 116 /* 't' */ ||
\t      s.charCodeAt(length - 5) !== 111 /* 'o' */ ||
\t      s.charCodeAt(length - 6) !== 114 /* 'r' */ ||
\t      s.charCodeAt(length - 7) !== 112 /* 'p' */ ||
\t      s.charCodeAt(length - 8) !== 95  /* '_' */ ||
\t      s.charCodeAt(length - 9) !== 95  /* '_' */) {
\t    return false;
\t  }

\t  for (var i = length - 10; i >= 0; i--) {
\t    if (s.charCodeAt(i) !== 36 /* '\$' */) {
\t      return false;
\t    }
\t  }

\t  return true;
\t}

\t/**
\t * Comparator between two mappings where the original positions are compared.
\t *
\t * Optionally pass in `true` as `onlyCompareGenerated` to consider two
\t * mappings with the same original source/line/column, but different generated
\t * line and column the same. Useful when searching for a mapping with a
\t * stubbed out mapping.
\t */
\tfunction compareByOriginalPositions(mappingA, mappingB, onlyCompareOriginal) {
\t  var cmp = mappingA.source - mappingB.source;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalLine - mappingB.originalLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalColumn - mappingB.originalColumn;
\t  if (cmp !== 0 || onlyCompareOriginal) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedColumn - mappingB.generatedColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedLine - mappingB.generatedLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  return mappingA.name - mappingB.name;
\t}
\texports.compareByOriginalPositions = compareByOriginalPositions;

\t/**
\t * Comparator between two mappings with deflated source and name indices where
\t * the generated positions are compared.
\t *
\t * Optionally pass in `true` as `onlyCompareGenerated` to consider two
\t * mappings with the same generated line and column, but different
\t * source/name/original line and column the same. Useful when searching for a
\t * mapping with a stubbed out mapping.
\t */
\tfunction compareByGeneratedPositionsDeflated(mappingA, mappingB, onlyCompareGenerated) {
\t  var cmp = mappingA.generatedLine - mappingB.generatedLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedColumn - mappingB.generatedColumn;
\t  if (cmp !== 0 || onlyCompareGenerated) {
\t    return cmp;
\t  }

\t  cmp = mappingA.source - mappingB.source;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalLine - mappingB.originalLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalColumn - mappingB.originalColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  return mappingA.name - mappingB.name;
\t}
\texports.compareByGeneratedPositionsDeflated = compareByGeneratedPositionsDeflated;

\tfunction strcmp(aStr1, aStr2) {
\t  if (aStr1 === aStr2) {
\t    return 0;
\t  }

\t  if (aStr1 > aStr2) {
\t    return 1;
\t  }

\t  return -1;
\t}

\t/**
\t * Comparator between two mappings with inflated source and name strings where
\t * the generated positions are compared.
\t */
\tfunction compareByGeneratedPositionsInflated(mappingA, mappingB) {
\t  var cmp = mappingA.generatedLine - mappingB.generatedLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.generatedColumn - mappingB.generatedColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = strcmp(mappingA.source, mappingB.source);
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalLine - mappingB.originalLine;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  cmp = mappingA.originalColumn - mappingB.originalColumn;
\t  if (cmp !== 0) {
\t    return cmp;
\t  }

\t  return strcmp(mappingA.name, mappingB.name);
\t}
\texports.compareByGeneratedPositionsInflated = compareByGeneratedPositionsInflated;


/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar util = __webpack_require__(4);
\tvar has = Object.prototype.hasOwnProperty;
\tvar hasNativeMap = typeof Map !== \"undefined\";

\t/**
\t * A data structure which is a combination of an array and a set. Adding a new
\t * member is O(1), testing for membership is O(1), and finding the index of an
\t * element is O(1). Removing elements from the set is not supported. Only
\t * strings are supported for membership.
\t */
\tfunction ArraySet() {
\t  this._array = [];
\t  this._set = hasNativeMap ? new Map() : Object.create(null);
\t}

\t/**
\t * Static method for creating ArraySet instances from an existing array.
\t */
\tArraySet.fromArray = function ArraySet_fromArray(aArray, aAllowDuplicates) {
\t  var set = new ArraySet();
\t  for (var i = 0, len = aArray.length; i < len; i++) {
\t    set.add(aArray[i], aAllowDuplicates);
\t  }
\t  return set;
\t};

\t/**
\t * Return how many unique items are in this ArraySet. If duplicates have been
\t * added, than those do not count towards the size.
\t *
\t * @returns Number
\t */
\tArraySet.prototype.size = function ArraySet_size() {
\t  return hasNativeMap ? this._set.size : Object.getOwnPropertyNames(this._set).length;
\t};

\t/**
\t * Add the given string to this set.
\t *
\t * @param String aStr
\t */
\tArraySet.prototype.add = function ArraySet_add(aStr, aAllowDuplicates) {
\t  var sStr = hasNativeMap ? aStr : util.toSetString(aStr);
\t  var isDuplicate = hasNativeMap ? this.has(aStr) : has.call(this._set, sStr);
\t  var idx = this._array.length;
\t  if (!isDuplicate || aAllowDuplicates) {
\t    this._array.push(aStr);
\t  }
\t  if (!isDuplicate) {
\t    if (hasNativeMap) {
\t      this._set.set(aStr, idx);
\t    } else {
\t      this._set[sStr] = idx;
\t    }
\t  }
\t};

\t/**
\t * Is the given string a member of this set?
\t *
\t * @param String aStr
\t */
\tArraySet.prototype.has = function ArraySet_has(aStr) {
\t  if (hasNativeMap) {
\t    return this._set.has(aStr);
\t  } else {
\t    var sStr = util.toSetString(aStr);
\t    return has.call(this._set, sStr);
\t  }
\t};

\t/**
\t * What is the index of the given string in the array?
\t *
\t * @param String aStr
\t */
\tArraySet.prototype.indexOf = function ArraySet_indexOf(aStr) {
\t  if (hasNativeMap) {
\t    var idx = this._set.get(aStr);
\t    if (idx >= 0) {
\t        return idx;
\t    }
\t  } else {
\t    var sStr = util.toSetString(aStr);
\t    if (has.call(this._set, sStr)) {
\t      return this._set[sStr];
\t    }
\t  }

\t  throw new Error('\"' + aStr + '\" is not in the set.');
\t};

\t/**
\t * What is the element at the given index?
\t *
\t * @param Number aIdx
\t */
\tArraySet.prototype.at = function ArraySet_at(aIdx) {
\t  if (aIdx >= 0 && aIdx < this._array.length) {
\t    return this._array[aIdx];
\t  }
\t  throw new Error('No element indexed by ' + aIdx);
\t};

\t/**
\t * Returns the array representation of this set (which has the proper indices
\t * indicated by indexOf). Note that this is a copy of the internal array used
\t * for storing the members so that no one can mess with internal state.
\t */
\tArraySet.prototype.toArray = function ArraySet_toArray() {
\t  return this._array.slice();
\t};

\texports.ArraySet = ArraySet;


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2014 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar util = __webpack_require__(4);

\t/**
\t * Determine whether mappingB is after mappingA with respect to generated
\t * position.
\t */
\tfunction generatedPositionAfter(mappingA, mappingB) {
\t  // Optimized for most common case
\t  var lineA = mappingA.generatedLine;
\t  var lineB = mappingB.generatedLine;
\t  var columnA = mappingA.generatedColumn;
\t  var columnB = mappingB.generatedColumn;
\t  return lineB > lineA || lineB == lineA && columnB >= columnA ||
\t         util.compareByGeneratedPositionsInflated(mappingA, mappingB) <= 0;
\t}

\t/**
\t * A data structure to provide a sorted view of accumulated mappings in a
\t * performance conscious manner. It trades a neglibable overhead in general
\t * case for a large speedup in case of mappings being added in order.
\t */
\tfunction MappingList() {
\t  this._array = [];
\t  this._sorted = true;
\t  // Serves as infimum
\t  this._last = {generatedLine: -1, generatedColumn: 0};
\t}

\t/**
\t * Iterate through internal items. This method takes the same arguments that
\t * `Array.prototype.forEach` takes.
\t *
\t * NOTE: The order of the mappings is NOT guaranteed.
\t */
\tMappingList.prototype.unsortedForEach =
\t  function MappingList_forEach(aCallback, aThisArg) {
\t    this._array.forEach(aCallback, aThisArg);
\t  };

\t/**
\t * Add the given source mapping.
\t *
\t * @param Object aMapping
\t */
\tMappingList.prototype.add = function MappingList_add(aMapping) {
\t  if (generatedPositionAfter(this._last, aMapping)) {
\t    this._last = aMapping;
\t    this._array.push(aMapping);
\t  } else {
\t    this._sorted = false;
\t    this._array.push(aMapping);
\t  }
\t};

\t/**
\t * Returns the flat, sorted array of mappings. The mappings are sorted by
\t * generated position.
\t *
\t * WARNING: This method returns internal data without copying, for
\t * performance. The return value must NOT be mutated, and should be treated as
\t * an immutable borrow. If you want to take ownership, you must make your own
\t * copy.
\t */
\tMappingList.prototype.toArray = function MappingList_toArray() {
\t  if (!this._sorted) {
\t    this._array.sort(util.compareByGeneratedPositionsInflated);
\t    this._sorted = true;
\t  }
\t  return this._array;
\t};

\texports.MappingList = MappingList;


/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar util = __webpack_require__(4);
\tvar binarySearch = __webpack_require__(8);
\tvar ArraySet = __webpack_require__(5).ArraySet;
\tvar base64VLQ = __webpack_require__(2);
\tvar quickSort = __webpack_require__(9).quickSort;

\tfunction SourceMapConsumer(aSourceMap) {
\t  var sourceMap = aSourceMap;
\t  if (typeof aSourceMap === 'string') {
\t    sourceMap = JSON.parse(aSourceMap.replace(/^\\)\\]\\}'/, ''));
\t  }

\t  return sourceMap.sections != null
\t    ? new IndexedSourceMapConsumer(sourceMap)
\t    : new BasicSourceMapConsumer(sourceMap);
\t}

\tSourceMapConsumer.fromSourceMap = function(aSourceMap) {
\t  return BasicSourceMapConsumer.fromSourceMap(aSourceMap);
\t}

\t/**
\t * The version of the source mapping spec that we are consuming.
\t */
\tSourceMapConsumer.prototype._version = 3;

\t// `__generatedMappings` and `__originalMappings` are arrays that hold the
\t// parsed mapping coordinates from the source map's \"mappings\" attribute. They
\t// are lazily instantiated, accessed via the `_generatedMappings` and
\t// `_originalMappings` getters respectively, and we only parse the mappings
\t// and create these arrays once queried for a source location. We jump through
\t// these hoops because there can be many thousands of mappings, and parsing
\t// them is expensive, so we only want to do it if we must.
\t//
\t// Each object in the arrays is of the form:
\t//
\t//     {
\t//       generatedLine: The line number in the generated code,
\t//       generatedColumn: The column number in the generated code,
\t//       source: The path to the original source file that generated this
\t//               chunk of code,
\t//       originalLine: The line number in the original source that
\t//                     corresponds to this chunk of generated code,
\t//       originalColumn: The column number in the original source that
\t//                       corresponds to this chunk of generated code,
\t//       name: The name of the original symbol which generated this chunk of
\t//             code.
\t//     }
\t//
\t// All properties except for `generatedLine` and `generatedColumn` can be
\t// `null`.
\t//
\t// `_generatedMappings` is ordered by the generated positions.
\t//
\t// `_originalMappings` is ordered by the original positions.

\tSourceMapConsumer.prototype.__generatedMappings = null;
\tObject.defineProperty(SourceMapConsumer.prototype, '_generatedMappings', {
\t  get: function () {
\t    if (!this.__generatedMappings) {
\t      this._parseMappings(this._mappings, this.sourceRoot);
\t    }

\t    return this.__generatedMappings;
\t  }
\t});

\tSourceMapConsumer.prototype.__originalMappings = null;
\tObject.defineProperty(SourceMapConsumer.prototype, '_originalMappings', {
\t  get: function () {
\t    if (!this.__originalMappings) {
\t      this._parseMappings(this._mappings, this.sourceRoot);
\t    }

\t    return this.__originalMappings;
\t  }
\t});

\tSourceMapConsumer.prototype._charIsMappingSeparator =
\t  function SourceMapConsumer_charIsMappingSeparator(aStr, index) {
\t    var c = aStr.charAt(index);
\t    return c === \";\" || c === \",\";
\t  };

\t/**
\t * Parse the mappings in a string in to a data structure which we can easily
\t * query (the ordered arrays in the `this.__generatedMappings` and
\t * `this.__originalMappings` properties).
\t */
\tSourceMapConsumer.prototype._parseMappings =
\t  function SourceMapConsumer_parseMappings(aStr, aSourceRoot) {
\t    throw new Error(\"Subclasses must implement _parseMappings\");
\t  };

\tSourceMapConsumer.GENERATED_ORDER = 1;
\tSourceMapConsumer.ORIGINAL_ORDER = 2;

\tSourceMapConsumer.GREATEST_LOWER_BOUND = 1;
\tSourceMapConsumer.LEAST_UPPER_BOUND = 2;

\t/**
\t * Iterate over each mapping between an original source/line/column and a
\t * generated line/column in this source map.
\t *
\t * @param Function aCallback
\t *        The function that is called with each mapping.
\t * @param Object aContext
\t *        Optional. If specified, this object will be the value of `this` every
\t *        time that `aCallback` is called.
\t * @param aOrder
\t *        Either `SourceMapConsumer.GENERATED_ORDER` or
\t *        `SourceMapConsumer.ORIGINAL_ORDER`. Specifies whether you want to
\t *        iterate over the mappings sorted by the generated file's line/column
\t *        order or the original's source/line/column order, respectively. Defaults to
\t *        `SourceMapConsumer.GENERATED_ORDER`.
\t */
\tSourceMapConsumer.prototype.eachMapping =
\t  function SourceMapConsumer_eachMapping(aCallback, aContext, aOrder) {
\t    var context = aContext || null;
\t    var order = aOrder || SourceMapConsumer.GENERATED_ORDER;

\t    var mappings;
\t    switch (order) {
\t    case SourceMapConsumer.GENERATED_ORDER:
\t      mappings = this._generatedMappings;
\t      break;
\t    case SourceMapConsumer.ORIGINAL_ORDER:
\t      mappings = this._originalMappings;
\t      break;
\t    default:
\t      throw new Error(\"Unknown order of iteration.\");
\t    }

\t    var sourceRoot = this.sourceRoot;
\t    mappings.map(function (mapping) {
\t      var source = mapping.source === null ? null : this._sources.at(mapping.source);
\t      if (source != null && sourceRoot != null) {
\t        source = util.join(sourceRoot, source);
\t      }
\t      return {
\t        source: source,
\t        generatedLine: mapping.generatedLine,
\t        generatedColumn: mapping.generatedColumn,
\t        originalLine: mapping.originalLine,
\t        originalColumn: mapping.originalColumn,
\t        name: mapping.name === null ? null : this._names.at(mapping.name)
\t      };
\t    }, this).forEach(aCallback, context);
\t  };

\t/**
\t * Returns all generated line and column information for the original source,
\t * line, and column provided. If no column is provided, returns all mappings
\t * corresponding to a either the line we are searching for or the next
\t * closest line that has any mappings. Otherwise, returns all mappings
\t * corresponding to the given line and either the column we are searching for
\t * or the next closest column that has any offsets.
\t *
\t * The only argument is an object with the following properties:
\t *
\t *   - source: The filename of the original source.
\t *   - line: The line number in the original source.
\t *   - column: Optional. the column number in the original source.
\t *
\t * and an array of objects is returned, each with the following properties:
\t *
\t *   - line: The line number in the generated source, or null.
\t *   - column: The column number in the generated source, or null.
\t */
\tSourceMapConsumer.prototype.allGeneratedPositionsFor =
\t  function SourceMapConsumer_allGeneratedPositionsFor(aArgs) {
\t    var line = util.getArg(aArgs, 'line');

\t    // When there is no exact match, BasicSourceMapConsumer.prototype._findMapping
\t    // returns the index of the closest mapping less than the needle. By
\t    // setting needle.originalColumn to 0, we thus find the last mapping for
\t    // the given line, provided such a mapping exists.
\t    var needle = {
\t      source: util.getArg(aArgs, 'source'),
\t      originalLine: line,
\t      originalColumn: util.getArg(aArgs, 'column', 0)
\t    };

\t    if (this.sourceRoot != null) {
\t      needle.source = util.relative(this.sourceRoot, needle.source);
\t    }
\t    if (!this._sources.has(needle.source)) {
\t      return [];
\t    }
\t    needle.source = this._sources.indexOf(needle.source);

\t    var mappings = [];

\t    var index = this._findMapping(needle,
\t                                  this._originalMappings,
\t                                  \"originalLine\",
\t                                  \"originalColumn\",
\t                                  util.compareByOriginalPositions,
\t                                  binarySearch.LEAST_UPPER_BOUND);
\t    if (index >= 0) {
\t      var mapping = this._originalMappings[index];

\t      if (aArgs.column === undefined) {
\t        var originalLine = mapping.originalLine;

\t        // Iterate until either we run out of mappings, or we run into
\t        // a mapping for a different line than the one we found. Since
\t        // mappings are sorted, this is guaranteed to find all mappings for
\t        // the line we found.
\t        while (mapping && mapping.originalLine === originalLine) {
\t          mappings.push({
\t            line: util.getArg(mapping, 'generatedLine', null),
\t            column: util.getArg(mapping, 'generatedColumn', null),
\t            lastColumn: util.getArg(mapping, 'lastGeneratedColumn', null)
\t          });

\t          mapping = this._originalMappings[++index];
\t        }
\t      } else {
\t        var originalColumn = mapping.originalColumn;

\t        // Iterate until either we run out of mappings, or we run into
\t        // a mapping for a different line than the one we were searching for.
\t        // Since mappings are sorted, this is guaranteed to find all mappings for
\t        // the line we are searching for.
\t        while (mapping &&
\t               mapping.originalLine === line &&
\t               mapping.originalColumn == originalColumn) {
\t          mappings.push({
\t            line: util.getArg(mapping, 'generatedLine', null),
\t            column: util.getArg(mapping, 'generatedColumn', null),
\t            lastColumn: util.getArg(mapping, 'lastGeneratedColumn', null)
\t          });

\t          mapping = this._originalMappings[++index];
\t        }
\t      }
\t    }

\t    return mappings;
\t  };

\texports.SourceMapConsumer = SourceMapConsumer;

\t/**
\t * A BasicSourceMapConsumer instance represents a parsed source map which we can
\t * query for information about the original file positions by giving it a file
\t * position in the generated source.
\t *
\t * The only parameter is the raw source map (either as a JSON string, or
\t * already parsed to an object). According to the spec, source maps have the
\t * following attributes:
\t *
\t *   - version: Which version of the source map spec this map is following.
\t *   - sources: An array of URLs to the original source files.
\t *   - names: An array of identifiers which can be referrenced by individual mappings.
\t *   - sourceRoot: Optional. The URL root from which all sources are relative.
\t *   - sourcesContent: Optional. An array of contents of the original source files.
\t *   - mappings: A string of base64 VLQs which contain the actual mappings.
\t *   - file: Optional. The generated file this source map is associated with.
\t *
\t * Here is an example source map, taken from the source map spec[0]:
\t *
\t *     {
\t *       version : 3,
\t *       file: \"out.js\",
\t *       sourceRoot : \"\",
\t *       sources: [\"foo.js\", \"bar.js\"],
\t *       names: [\"src\", \"maps\", \"are\", \"fun\"],
\t *       mappings: \"AA,AB;;ABCDE;\"
\t *     }
\t *
\t * [0]: https://docs.google.com/document/d/1U1RGAehQwRypUTovF1KRlpiOFze0b-_2gc6fAH0KY0k/edit?pli=1#
\t */
\tfunction BasicSourceMapConsumer(aSourceMap) {
\t  var sourceMap = aSourceMap;
\t  if (typeof aSourceMap === 'string') {
\t    sourceMap = JSON.parse(aSourceMap.replace(/^\\)\\]\\}'/, ''));
\t  }

\t  var version = util.getArg(sourceMap, 'version');
\t  var sources = util.getArg(sourceMap, 'sources');
\t  // Sass 3.3 leaves out the 'names' array, so we deviate from the spec (which
\t  // requires the array) to play nice here.
\t  var names = util.getArg(sourceMap, 'names', []);
\t  var sourceRoot = util.getArg(sourceMap, 'sourceRoot', null);
\t  var sourcesContent = util.getArg(sourceMap, 'sourcesContent', null);
\t  var mappings = util.getArg(sourceMap, 'mappings');
\t  var file = util.getArg(sourceMap, 'file', null);

\t  // Once again, Sass deviates from the spec and supplies the version as a
\t  // string rather than a number, so we use loose equality checking here.
\t  if (version != this._version) {
\t    throw new Error('Unsupported version: ' + version);
\t  }

\t  sources = sources
\t    .map(String)
\t    // Some source maps produce relative source paths like \"./foo.js\" instead of
\t    // \"foo.js\".  Normalize these first so that future comparisons will succeed.
\t    // See bugzil.la/1090768.
\t    .map(util.normalize)
\t    // Always ensure that absolute sources are internally stored relative to
\t    // the source root, if the source root is absolute. Not doing this would
\t    // be particularly problematic when the source root is a prefix of the
\t    // source (valid, but why??). See github issue #199 and bugzil.la/1188982.
\t    .map(function (source) {
\t      return sourceRoot && util.isAbsolute(sourceRoot) && util.isAbsolute(source)
\t        ? util.relative(sourceRoot, source)
\t        : source;
\t    });

\t  // Pass `true` below to allow duplicate names and sources. While source maps
\t  // are intended to be compressed and deduplicated, the TypeScript compiler
\t  // sometimes generates source maps with duplicates in them. See Github issue
\t  // #72 and bugzil.la/889492.
\t  this._names = ArraySet.fromArray(names.map(String), true);
\t  this._sources = ArraySet.fromArray(sources, true);

\t  this.sourceRoot = sourceRoot;
\t  this.sourcesContent = sourcesContent;
\t  this._mappings = mappings;
\t  this.file = file;
\t}

\tBasicSourceMapConsumer.prototype = Object.create(SourceMapConsumer.prototype);
\tBasicSourceMapConsumer.prototype.consumer = SourceMapConsumer;

\t/**
\t * Create a BasicSourceMapConsumer from a SourceMapGenerator.
\t *
\t * @param SourceMapGenerator aSourceMap
\t *        The source map that will be consumed.
\t * @returns BasicSourceMapConsumer
\t */
\tBasicSourceMapConsumer.fromSourceMap =
\t  function SourceMapConsumer_fromSourceMap(aSourceMap) {
\t    var smc = Object.create(BasicSourceMapConsumer.prototype);

\t    var names = smc._names = ArraySet.fromArray(aSourceMap._names.toArray(), true);
\t    var sources = smc._sources = ArraySet.fromArray(aSourceMap._sources.toArray(), true);
\t    smc.sourceRoot = aSourceMap._sourceRoot;
\t    smc.sourcesContent = aSourceMap._generateSourcesContent(smc._sources.toArray(),
\t                                                            smc.sourceRoot);
\t    smc.file = aSourceMap._file;

\t    // Because we are modifying the entries (by converting string sources and
\t    // names to indices into the sources and names ArraySets), we have to make
\t    // a copy of the entry or else bad things happen. Shared mutable state
\t    // strikes again! See github issue #191.

\t    var generatedMappings = aSourceMap._mappings.toArray().slice();
\t    var destGeneratedMappings = smc.__generatedMappings = [];
\t    var destOriginalMappings = smc.__originalMappings = [];

\t    for (var i = 0, length = generatedMappings.length; i < length; i++) {
\t      var srcMapping = generatedMappings[i];
\t      var destMapping = new Mapping;
\t      destMapping.generatedLine = srcMapping.generatedLine;
\t      destMapping.generatedColumn = srcMapping.generatedColumn;

\t      if (srcMapping.source) {
\t        destMapping.source = sources.indexOf(srcMapping.source);
\t        destMapping.originalLine = srcMapping.originalLine;
\t        destMapping.originalColumn = srcMapping.originalColumn;

\t        if (srcMapping.name) {
\t          destMapping.name = names.indexOf(srcMapping.name);
\t        }

\t        destOriginalMappings.push(destMapping);
\t      }

\t      destGeneratedMappings.push(destMapping);
\t    }

\t    quickSort(smc.__originalMappings, util.compareByOriginalPositions);

\t    return smc;
\t  };

\t/**
\t * The version of the source mapping spec that we are consuming.
\t */
\tBasicSourceMapConsumer.prototype._version = 3;

\t/**
\t * The list of original sources.
\t */
\tObject.defineProperty(BasicSourceMapConsumer.prototype, 'sources', {
\t  get: function () {
\t    return this._sources.toArray().map(function (s) {
\t      return this.sourceRoot != null ? util.join(this.sourceRoot, s) : s;
\t    }, this);
\t  }
\t});

\t/**
\t * Provide the JIT with a nice shape / hidden class.
\t */
\tfunction Mapping() {
\t  this.generatedLine = 0;
\t  this.generatedColumn = 0;
\t  this.source = null;
\t  this.originalLine = null;
\t  this.originalColumn = null;
\t  this.name = null;
\t}

\t/**
\t * Parse the mappings in a string in to a data structure which we can easily
\t * query (the ordered arrays in the `this.__generatedMappings` and
\t * `this.__originalMappings` properties).
\t */
\tBasicSourceMapConsumer.prototype._parseMappings =
\t  function SourceMapConsumer_parseMappings(aStr, aSourceRoot) {
\t    var generatedLine = 1;
\t    var previousGeneratedColumn = 0;
\t    var previousOriginalLine = 0;
\t    var previousOriginalColumn = 0;
\t    var previousSource = 0;
\t    var previousName = 0;
\t    var length = aStr.length;
\t    var index = 0;
\t    var cachedSegments = {};
\t    var temp = {};
\t    var originalMappings = [];
\t    var generatedMappings = [];
\t    var mapping, str, segment, end, value;

\t    while (index < length) {
\t      if (aStr.charAt(index) === ';') {
\t        generatedLine++;
\t        index++;
\t        previousGeneratedColumn = 0;
\t      }
\t      else if (aStr.charAt(index) === ',') {
\t        index++;
\t      }
\t      else {
\t        mapping = new Mapping();
\t        mapping.generatedLine = generatedLine;

\t        // Because each offset is encoded relative to the previous one,
\t        // many segments often have the same encoding. We can exploit this
\t        // fact by caching the parsed variable length fields of each segment,
\t        // allowing us to avoid a second parse if we encounter the same
\t        // segment again.
\t        for (end = index; end < length; end++) {
\t          if (this._charIsMappingSeparator(aStr, end)) {
\t            break;
\t          }
\t        }
\t        str = aStr.slice(index, end);

\t        segment = cachedSegments[str];
\t        if (segment) {
\t          index += str.length;
\t        } else {
\t          segment = [];
\t          while (index < end) {
\t            base64VLQ.decode(aStr, index, temp);
\t            value = temp.value;
\t            index = temp.rest;
\t            segment.push(value);
\t          }

\t          if (segment.length === 2) {
\t            throw new Error('Found a source, but no line and column');
\t          }

\t          if (segment.length === 3) {
\t            throw new Error('Found a source and line, but no column');
\t          }

\t          cachedSegments[str] = segment;
\t        }

\t        // Generated column.
\t        mapping.generatedColumn = previousGeneratedColumn + segment[0];
\t        previousGeneratedColumn = mapping.generatedColumn;

\t        if (segment.length > 1) {
\t          // Original source.
\t          mapping.source = previousSource + segment[1];
\t          previousSource += segment[1];

\t          // Original line.
\t          mapping.originalLine = previousOriginalLine + segment[2];
\t          previousOriginalLine = mapping.originalLine;
\t          // Lines are stored 0-based
\t          mapping.originalLine += 1;

\t          // Original column.
\t          mapping.originalColumn = previousOriginalColumn + segment[3];
\t          previousOriginalColumn = mapping.originalColumn;

\t          if (segment.length > 4) {
\t            // Original name.
\t            mapping.name = previousName + segment[4];
\t            previousName += segment[4];
\t          }
\t        }

\t        generatedMappings.push(mapping);
\t        if (typeof mapping.originalLine === 'number') {
\t          originalMappings.push(mapping);
\t        }
\t      }
\t    }

\t    quickSort(generatedMappings, util.compareByGeneratedPositionsDeflated);
\t    this.__generatedMappings = generatedMappings;

\t    quickSort(originalMappings, util.compareByOriginalPositions);
\t    this.__originalMappings = originalMappings;
\t  };

\t/**
\t * Find the mapping that best matches the hypothetical \"needle\" mapping that
\t * we are searching for in the given \"haystack\" of mappings.
\t */
\tBasicSourceMapConsumer.prototype._findMapping =
\t  function SourceMapConsumer_findMapping(aNeedle, aMappings, aLineName,
\t                                         aColumnName, aComparator, aBias) {
\t    // To return the position we are searching for, we must first find the
\t    // mapping for the given position and then return the opposite position it
\t    // points to. Because the mappings are sorted, we can use binary search to
\t    // find the best mapping.

\t    if (aNeedle[aLineName] <= 0) {
\t      throw new TypeError('Line must be greater than or equal to 1, got '
\t                          + aNeedle[aLineName]);
\t    }
\t    if (aNeedle[aColumnName] < 0) {
\t      throw new TypeError('Column must be greater than or equal to 0, got '
\t                          + aNeedle[aColumnName]);
\t    }

\t    return binarySearch.search(aNeedle, aMappings, aComparator, aBias);
\t  };

\t/**
\t * Compute the last column for each generated mapping. The last column is
\t * inclusive.
\t */
\tBasicSourceMapConsumer.prototype.computeColumnSpans =
\t  function SourceMapConsumer_computeColumnSpans() {
\t    for (var index = 0; index < this._generatedMappings.length; ++index) {
\t      var mapping = this._generatedMappings[index];

\t      // Mappings do not contain a field for the last generated columnt. We
\t      // can come up with an optimistic estimate, however, by assuming that
\t      // mappings are contiguous (i.e. given two consecutive mappings, the
\t      // first mapping ends where the second one starts).
\t      if (index + 1 < this._generatedMappings.length) {
\t        var nextMapping = this._generatedMappings[index + 1];

\t        if (mapping.generatedLine === nextMapping.generatedLine) {
\t          mapping.lastGeneratedColumn = nextMapping.generatedColumn - 1;
\t          continue;
\t        }
\t      }

\t      // The last mapping for each line spans the entire line.
\t      mapping.lastGeneratedColumn = Infinity;
\t    }
\t  };

\t/**
\t * Returns the original source, line, and column information for the generated
\t * source's line and column positions provided. The only argument is an object
\t * with the following properties:
\t *
\t *   - line: The line number in the generated source.
\t *   - column: The column number in the generated source.
\t *   - bias: Either 'SourceMapConsumer.GREATEST_LOWER_BOUND' or
\t *     'SourceMapConsumer.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t *     Defaults to 'SourceMapConsumer.GREATEST_LOWER_BOUND'.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - source: The original source file, or null.
\t *   - line: The line number in the original source, or null.
\t *   - column: The column number in the original source, or null.
\t *   - name: The original identifier, or null.
\t */
\tBasicSourceMapConsumer.prototype.originalPositionFor =
\t  function SourceMapConsumer_originalPositionFor(aArgs) {
\t    var needle = {
\t      generatedLine: util.getArg(aArgs, 'line'),
\t      generatedColumn: util.getArg(aArgs, 'column')
\t    };

\t    var index = this._findMapping(
\t      needle,
\t      this._generatedMappings,
\t      \"generatedLine\",
\t      \"generatedColumn\",
\t      util.compareByGeneratedPositionsDeflated,
\t      util.getArg(aArgs, 'bias', SourceMapConsumer.GREATEST_LOWER_BOUND)
\t    );

\t    if (index >= 0) {
\t      var mapping = this._generatedMappings[index];

\t      if (mapping.generatedLine === needle.generatedLine) {
\t        var source = util.getArg(mapping, 'source', null);
\t        if (source !== null) {
\t          source = this._sources.at(source);
\t          if (this.sourceRoot != null) {
\t            source = util.join(this.sourceRoot, source);
\t          }
\t        }
\t        var name = util.getArg(mapping, 'name', null);
\t        if (name !== null) {
\t          name = this._names.at(name);
\t        }
\t        return {
\t          source: source,
\t          line: util.getArg(mapping, 'originalLine', null),
\t          column: util.getArg(mapping, 'originalColumn', null),
\t          name: name
\t        };
\t      }
\t    }

\t    return {
\t      source: null,
\t      line: null,
\t      column: null,
\t      name: null
\t    };
\t  };

\t/**
\t * Return true if we have the source content for every source in the source
\t * map, false otherwise.
\t */
\tBasicSourceMapConsumer.prototype.hasContentsOfAllSources =
\t  function BasicSourceMapConsumer_hasContentsOfAllSources() {
\t    if (!this.sourcesContent) {
\t      return false;
\t    }
\t    return this.sourcesContent.length >= this._sources.size() &&
\t      !this.sourcesContent.some(function (sc) { return sc == null; });
\t  };

\t/**
\t * Returns the original source content. The only argument is the url of the
\t * original source file. Returns null if no original source content is
\t * available.
\t */
\tBasicSourceMapConsumer.prototype.sourceContentFor =
\t  function SourceMapConsumer_sourceContentFor(aSource, nullOnMissing) {
\t    if (!this.sourcesContent) {
\t      return null;
\t    }

\t    if (this.sourceRoot != null) {
\t      aSource = util.relative(this.sourceRoot, aSource);
\t    }

\t    if (this._sources.has(aSource)) {
\t      return this.sourcesContent[this._sources.indexOf(aSource)];
\t    }

\t    var url;
\t    if (this.sourceRoot != null
\t        && (url = util.urlParse(this.sourceRoot))) {
\t      // XXX: file:// URIs and absolute paths lead to unexpected behavior for
\t      // many users. We can help them out when they expect file:// URIs to
\t      // behave like it would if they were running a local HTTP server. See
\t      // https://bugzilla.mozilla.org/show_bug.cgi?id=885597.
\t      var fileUriAbsPath = aSource.replace(/^file:\\/\\//, \"\");
\t      if (url.scheme == \"file\"
\t          && this._sources.has(fileUriAbsPath)) {
\t        return this.sourcesContent[this._sources.indexOf(fileUriAbsPath)]
\t      }

\t      if ((!url.path || url.path == \"/\")
\t          && this._sources.has(\"/\" + aSource)) {
\t        return this.sourcesContent[this._sources.indexOf(\"/\" + aSource)];
\t      }
\t    }

\t    // This function is used recursively from
\t    // IndexedSourceMapConsumer.prototype.sourceContentFor. In that case, we
\t    // don't want to throw if we can't find the source - we just want to
\t    // return null, so we provide a flag to exit gracefully.
\t    if (nullOnMissing) {
\t      return null;
\t    }
\t    else {
\t      throw new Error('\"' + aSource + '\" is not in the SourceMap.');
\t    }
\t  };

\t/**
\t * Returns the generated line and column information for the original source,
\t * line, and column positions provided. The only argument is an object with
\t * the following properties:
\t *
\t *   - source: The filename of the original source.
\t *   - line: The line number in the original source.
\t *   - column: The column number in the original source.
\t *   - bias: Either 'SourceMapConsumer.GREATEST_LOWER_BOUND' or
\t *     'SourceMapConsumer.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t *     Defaults to 'SourceMapConsumer.GREATEST_LOWER_BOUND'.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - line: The line number in the generated source, or null.
\t *   - column: The column number in the generated source, or null.
\t */
\tBasicSourceMapConsumer.prototype.generatedPositionFor =
\t  function SourceMapConsumer_generatedPositionFor(aArgs) {
\t    var source = util.getArg(aArgs, 'source');
\t    if (this.sourceRoot != null) {
\t      source = util.relative(this.sourceRoot, source);
\t    }
\t    if (!this._sources.has(source)) {
\t      return {
\t        line: null,
\t        column: null,
\t        lastColumn: null
\t      };
\t    }
\t    source = this._sources.indexOf(source);

\t    var needle = {
\t      source: source,
\t      originalLine: util.getArg(aArgs, 'line'),
\t      originalColumn: util.getArg(aArgs, 'column')
\t    };

\t    var index = this._findMapping(
\t      needle,
\t      this._originalMappings,
\t      \"originalLine\",
\t      \"originalColumn\",
\t      util.compareByOriginalPositions,
\t      util.getArg(aArgs, 'bias', SourceMapConsumer.GREATEST_LOWER_BOUND)
\t    );

\t    if (index >= 0) {
\t      var mapping = this._originalMappings[index];

\t      if (mapping.source === needle.source) {
\t        return {
\t          line: util.getArg(mapping, 'generatedLine', null),
\t          column: util.getArg(mapping, 'generatedColumn', null),
\t          lastColumn: util.getArg(mapping, 'lastGeneratedColumn', null)
\t        };
\t      }
\t    }

\t    return {
\t      line: null,
\t      column: null,
\t      lastColumn: null
\t    };
\t  };

\texports.BasicSourceMapConsumer = BasicSourceMapConsumer;

\t/**
\t * An IndexedSourceMapConsumer instance represents a parsed source map which
\t * we can query for information. It differs from BasicSourceMapConsumer in
\t * that it takes \"indexed\" source maps (i.e. ones with a \"sections\" field) as
\t * input.
\t *
\t * The only parameter is a raw source map (either as a JSON string, or already
\t * parsed to an object). According to the spec for indexed source maps, they
\t * have the following attributes:
\t *
\t *   - version: Which version of the source map spec this map is following.
\t *   - file: Optional. The generated file this source map is associated with.
\t *   - sections: A list of section definitions.
\t *
\t * Each value under the \"sections\" field has two fields:
\t *   - offset: The offset into the original specified at which this section
\t *       begins to apply, defined as an object with a \"line\" and \"column\"
\t *       field.
\t *   - map: A source map definition. This source map could also be indexed,
\t *       but doesn't have to be.
\t *
\t * Instead of the \"map\" field, it's also possible to have a \"url\" field
\t * specifying a URL to retrieve a source map from, but that's currently
\t * unsupported.
\t *
\t * Here's an example source map, taken from the source map spec[0], but
\t * modified to omit a section which uses the \"url\" field.
\t *
\t *  {
\t *    version : 3,
\t *    file: \"app.js\",
\t *    sections: [{
\t *      offset: {line:100, column:10},
\t *      map: {
\t *        version : 3,
\t *        file: \"section.js\",
\t *        sources: [\"foo.js\", \"bar.js\"],
\t *        names: [\"src\", \"maps\", \"are\", \"fun\"],
\t *        mappings: \"AAAA,E;;ABCDE;\"
\t *      }
\t *    }],
\t *  }
\t *
\t * [0]: https://docs.google.com/document/d/1U1RGAehQwRypUTovF1KRlpiOFze0b-_2gc6fAH0KY0k/edit#heading=h.535es3xeprgt
\t */
\tfunction IndexedSourceMapConsumer(aSourceMap) {
\t  var sourceMap = aSourceMap;
\t  if (typeof aSourceMap === 'string') {
\t    sourceMap = JSON.parse(aSourceMap.replace(/^\\)\\]\\}'/, ''));
\t  }

\t  var version = util.getArg(sourceMap, 'version');
\t  var sections = util.getArg(sourceMap, 'sections');

\t  if (version != this._version) {
\t    throw new Error('Unsupported version: ' + version);
\t  }

\t  this._sources = new ArraySet();
\t  this._names = new ArraySet();

\t  var lastOffset = {
\t    line: -1,
\t    column: 0
\t  };
\t  this._sections = sections.map(function (s) {
\t    if (s.url) {
\t      // The url field will require support for asynchronicity.
\t      // See https://github.com/mozilla/source-map/issues/16
\t      throw new Error('Support for url field in sections not implemented.');
\t    }
\t    var offset = util.getArg(s, 'offset');
\t    var offsetLine = util.getArg(offset, 'line');
\t    var offsetColumn = util.getArg(offset, 'column');

\t    if (offsetLine < lastOffset.line ||
\t        (offsetLine === lastOffset.line && offsetColumn < lastOffset.column)) {
\t      throw new Error('Section offsets must be ordered and non-overlapping.');
\t    }
\t    lastOffset = offset;

\t    return {
\t      generatedOffset: {
\t        // The offset fields are 0-based, but we use 1-based indices when
\t        // encoding/decoding from VLQ.
\t        generatedLine: offsetLine + 1,
\t        generatedColumn: offsetColumn + 1
\t      },
\t      consumer: new SourceMapConsumer(util.getArg(s, 'map'))
\t    }
\t  });
\t}

\tIndexedSourceMapConsumer.prototype = Object.create(SourceMapConsumer.prototype);
\tIndexedSourceMapConsumer.prototype.constructor = SourceMapConsumer;

\t/**
\t * The version of the source mapping spec that we are consuming.
\t */
\tIndexedSourceMapConsumer.prototype._version = 3;

\t/**
\t * The list of original sources.
\t */
\tObject.defineProperty(IndexedSourceMapConsumer.prototype, 'sources', {
\t  get: function () {
\t    var sources = [];
\t    for (var i = 0; i < this._sections.length; i++) {
\t      for (var j = 0; j < this._sections[i].consumer.sources.length; j++) {
\t        sources.push(this._sections[i].consumer.sources[j]);
\t      }
\t    }
\t    return sources;
\t  }
\t});

\t/**
\t * Returns the original source, line, and column information for the generated
\t * source's line and column positions provided. The only argument is an object
\t * with the following properties:
\t *
\t *   - line: The line number in the generated source.
\t *   - column: The column number in the generated source.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - source: The original source file, or null.
\t *   - line: The line number in the original source, or null.
\t *   - column: The column number in the original source, or null.
\t *   - name: The original identifier, or null.
\t */
\tIndexedSourceMapConsumer.prototype.originalPositionFor =
\t  function IndexedSourceMapConsumer_originalPositionFor(aArgs) {
\t    var needle = {
\t      generatedLine: util.getArg(aArgs, 'line'),
\t      generatedColumn: util.getArg(aArgs, 'column')
\t    };

\t    // Find the section containing the generated position we're trying to map
\t    // to an original position.
\t    var sectionIndex = binarySearch.search(needle, this._sections,
\t      function(needle, section) {
\t        var cmp = needle.generatedLine - section.generatedOffset.generatedLine;
\t        if (cmp) {
\t          return cmp;
\t        }

\t        return (needle.generatedColumn -
\t                section.generatedOffset.generatedColumn);
\t      });
\t    var section = this._sections[sectionIndex];

\t    if (!section) {
\t      return {
\t        source: null,
\t        line: null,
\t        column: null,
\t        name: null
\t      };
\t    }

\t    return section.consumer.originalPositionFor({
\t      line: needle.generatedLine -
\t        (section.generatedOffset.generatedLine - 1),
\t      column: needle.generatedColumn -
\t        (section.generatedOffset.generatedLine === needle.generatedLine
\t         ? section.generatedOffset.generatedColumn - 1
\t         : 0),
\t      bias: aArgs.bias
\t    });
\t  };

\t/**
\t * Return true if we have the source content for every source in the source
\t * map, false otherwise.
\t */
\tIndexedSourceMapConsumer.prototype.hasContentsOfAllSources =
\t  function IndexedSourceMapConsumer_hasContentsOfAllSources() {
\t    return this._sections.every(function (s) {
\t      return s.consumer.hasContentsOfAllSources();
\t    });
\t  };

\t/**
\t * Returns the original source content. The only argument is the url of the
\t * original source file. Returns null if no original source content is
\t * available.
\t */
\tIndexedSourceMapConsumer.prototype.sourceContentFor =
\t  function IndexedSourceMapConsumer_sourceContentFor(aSource, nullOnMissing) {
\t    for (var i = 0; i < this._sections.length; i++) {
\t      var section = this._sections[i];

\t      var content = section.consumer.sourceContentFor(aSource, true);
\t      if (content) {
\t        return content;
\t      }
\t    }
\t    if (nullOnMissing) {
\t      return null;
\t    }
\t    else {
\t      throw new Error('\"' + aSource + '\" is not in the SourceMap.');
\t    }
\t  };

\t/**
\t * Returns the generated line and column information for the original source,
\t * line, and column positions provided. The only argument is an object with
\t * the following properties:
\t *
\t *   - source: The filename of the original source.
\t *   - line: The line number in the original source.
\t *   - column: The column number in the original source.
\t *
\t * and an object is returned with the following properties:
\t *
\t *   - line: The line number in the generated source, or null.
\t *   - column: The column number in the generated source, or null.
\t */
\tIndexedSourceMapConsumer.prototype.generatedPositionFor =
\t  function IndexedSourceMapConsumer_generatedPositionFor(aArgs) {
\t    for (var i = 0; i < this._sections.length; i++) {
\t      var section = this._sections[i];

\t      // Only consider this section if the requested source is in the list of
\t      // sources of the consumer.
\t      if (section.consumer.sources.indexOf(util.getArg(aArgs, 'source')) === -1) {
\t        continue;
\t      }
\t      var generatedPosition = section.consumer.generatedPositionFor(aArgs);
\t      if (generatedPosition) {
\t        var ret = {
\t          line: generatedPosition.line +
\t            (section.generatedOffset.generatedLine - 1),
\t          column: generatedPosition.column +
\t            (section.generatedOffset.generatedLine === generatedPosition.line
\t             ? section.generatedOffset.generatedColumn - 1
\t             : 0)
\t        };
\t        return ret;
\t      }
\t    }

\t    return {
\t      line: null,
\t      column: null
\t    };
\t  };

\t/**
\t * Parse the mappings in a string in to a data structure which we can easily
\t * query (the ordered arrays in the `this.__generatedMappings` and
\t * `this.__originalMappings` properties).
\t */
\tIndexedSourceMapConsumer.prototype._parseMappings =
\t  function IndexedSourceMapConsumer_parseMappings(aStr, aSourceRoot) {
\t    this.__generatedMappings = [];
\t    this.__originalMappings = [];
\t    for (var i = 0; i < this._sections.length; i++) {
\t      var section = this._sections[i];
\t      var sectionMappings = section.consumer._generatedMappings;
\t      for (var j = 0; j < sectionMappings.length; j++) {
\t        var mapping = sectionMappings[j];

\t        var source = section.consumer._sources.at(mapping.source);
\t        if (section.consumer.sourceRoot !== null) {
\t          source = util.join(section.consumer.sourceRoot, source);
\t        }
\t        this._sources.add(source);
\t        source = this._sources.indexOf(source);

\t        var name = section.consumer._names.at(mapping.name);
\t        this._names.add(name);
\t        name = this._names.indexOf(name);

\t        // The mappings coming from the consumer for the section have
\t        // generated positions relative to the start of the section, so we
\t        // need to offset them to be relative to the start of the concatenated
\t        // generated file.
\t        var adjustedMapping = {
\t          source: source,
\t          generatedLine: mapping.generatedLine +
\t            (section.generatedOffset.generatedLine - 1),
\t          generatedColumn: mapping.generatedColumn +
\t            (section.generatedOffset.generatedLine === mapping.generatedLine
\t            ? section.generatedOffset.generatedColumn - 1
\t            : 0),
\t          originalLine: mapping.originalLine,
\t          originalColumn: mapping.originalColumn,
\t          name: name
\t        };

\t        this.__generatedMappings.push(adjustedMapping);
\t        if (typeof adjustedMapping.originalLine === 'number') {
\t          this.__originalMappings.push(adjustedMapping);
\t        }
\t      }
\t    }

\t    quickSort(this.__generatedMappings, util.compareByGeneratedPositionsDeflated);
\t    quickSort(this.__originalMappings, util.compareByOriginalPositions);
\t  };

\texports.IndexedSourceMapConsumer = IndexedSourceMapConsumer;


/***/ }),
/* 8 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\texports.GREATEST_LOWER_BOUND = 1;
\texports.LEAST_UPPER_BOUND = 2;

\t/**
\t * Recursive implementation of binary search.
\t *
\t * @param aLow Indices here and lower do not contain the needle.
\t * @param aHigh Indices here and higher do not contain the needle.
\t * @param aNeedle The element being searched for.
\t * @param aHaystack The non-empty array being searched.
\t * @param aCompare Function which takes two elements and returns -1, 0, or 1.
\t * @param aBias Either 'binarySearch.GREATEST_LOWER_BOUND' or
\t *     'binarySearch.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t */
\tfunction recursiveSearch(aLow, aHigh, aNeedle, aHaystack, aCompare, aBias) {
\t  // This function terminates when one of the following is true:
\t  //
\t  //   1. We find the exact element we are looking for.
\t  //
\t  //   2. We did not find the exact element, but we can return the index of
\t  //      the next-closest element.
\t  //
\t  //   3. We did not find the exact element, and there is no next-closest
\t  //      element than the one we are searching for, so we return -1.
\t  var mid = Math.floor((aHigh - aLow) / 2) + aLow;
\t  var cmp = aCompare(aNeedle, aHaystack[mid], true);
\t  if (cmp === 0) {
\t    // Found the element we are looking for.
\t    return mid;
\t  }
\t  else if (cmp > 0) {
\t    // Our needle is greater than aHaystack[mid].
\t    if (aHigh - mid > 1) {
\t      // The element is in the upper half.
\t      return recursiveSearch(mid, aHigh, aNeedle, aHaystack, aCompare, aBias);
\t    }

\t    // The exact needle element was not found in this haystack. Determine if
\t    // we are in termination case (3) or (2) and return the appropriate thing.
\t    if (aBias == exports.LEAST_UPPER_BOUND) {
\t      return aHigh < aHaystack.length ? aHigh : -1;
\t    } else {
\t      return mid;
\t    }
\t  }
\t  else {
\t    // Our needle is less than aHaystack[mid].
\t    if (mid - aLow > 1) {
\t      // The element is in the lower half.
\t      return recursiveSearch(aLow, mid, aNeedle, aHaystack, aCompare, aBias);
\t    }

\t    // we are in termination case (3) or (2) and return the appropriate thing.
\t    if (aBias == exports.LEAST_UPPER_BOUND) {
\t      return mid;
\t    } else {
\t      return aLow < 0 ? -1 : aLow;
\t    }
\t  }
\t}

\t/**
\t * This is an implementation of binary search which will always try and return
\t * the index of the closest element if there is no exact hit. This is because
\t * mappings between original and generated line/col pairs are single points,
\t * and there is an implicit region between each of them, so a miss just means
\t * that you aren't on the very start of a region.
\t *
\t * @param aNeedle The element you are looking for.
\t * @param aHaystack The array that is being searched.
\t * @param aCompare A function which takes the needle and an element in the
\t *     array and returns -1, 0, or 1 depending on whether the needle is less
\t *     than, equal to, or greater than the element, respectively.
\t * @param aBias Either 'binarySearch.GREATEST_LOWER_BOUND' or
\t *     'binarySearch.LEAST_UPPER_BOUND'. Specifies whether to return the
\t *     closest element that is smaller than or greater than the one we are
\t *     searching for, respectively, if the exact element cannot be found.
\t *     Defaults to 'binarySearch.GREATEST_LOWER_BOUND'.
\t */
\texports.search = function search(aNeedle, aHaystack, aCompare, aBias) {
\t  if (aHaystack.length === 0) {
\t    return -1;
\t  }

\t  var index = recursiveSearch(-1, aHaystack.length, aNeedle, aHaystack,
\t                              aCompare, aBias || exports.GREATEST_LOWER_BOUND);
\t  if (index < 0) {
\t    return -1;
\t  }

\t  // We have found either the exact element, or the next-closest element than
\t  // the one we are searching for. However, there may be more than one such
\t  // element. Make sure we always return the smallest of these.
\t  while (index - 1 >= 0) {
\t    if (aCompare(aHaystack[index], aHaystack[index - 1], true) !== 0) {
\t      break;
\t    }
\t    --index;
\t  }

\t  return index;
\t};


/***/ }),
/* 9 */
/***/ (function(module, exports) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\t// It turns out that some (most?) JavaScript engines don't self-host
\t// `Array.prototype.sort`. This makes sense because C++ will likely remain
\t// faster than JS when doing raw CPU-intensive sorting. However, when using a
\t// custom comparator function, calling back and forth between the VM's C++ and
\t// JIT'd JS is rather slow *and* loses JIT type information, resulting in
\t// worse generated code for the comparator function than would be optimal. In
\t// fact, when sorting with a comparator, these costs outweigh the benefits of
\t// sorting in C++. By using our own JS-implemented Quick Sort (below), we get
\t// a ~3500ms mean speed-up in `bench/bench.html`.

\t/**
\t * Swap the elements indexed by `x` and `y` in the array `ary`.
\t *
\t * @param {Array} ary
\t *        The array.
\t * @param {Number} x
\t *        The index of the first item.
\t * @param {Number} y
\t *        The index of the second item.
\t */
\tfunction swap(ary, x, y) {
\t  var temp = ary[x];
\t  ary[x] = ary[y];
\t  ary[y] = temp;
\t}

\t/**
\t * Returns a random integer within the range `low .. high` inclusive.
\t *
\t * @param {Number} low
\t *        The lower bound on the range.
\t * @param {Number} high
\t *        The upper bound on the range.
\t */
\tfunction randomIntInRange(low, high) {
\t  return Math.round(low + (Math.random() * (high - low)));
\t}

\t/**
\t * The Quick Sort algorithm.
\t *
\t * @param {Array} ary
\t *        An array to sort.
\t * @param {function} comparator
\t *        Function to use to compare two items.
\t * @param {Number} p
\t *        Start index of the array
\t * @param {Number} r
\t *        End index of the array
\t */
\tfunction doQuickSort(ary, comparator, p, r) {
\t  // If our lower bound is less than our upper bound, we (1) partition the
\t  // array into two pieces and (2) recurse on each half. If it is not, this is
\t  // the empty array and our base case.

\t  if (p < r) {
\t    // (1) Partitioning.
\t    //
\t    // The partitioning chooses a pivot between `p` and `r` and moves all
\t    // elements that are less than or equal to the pivot to the before it, and
\t    // all the elements that are greater than it after it. The effect is that
\t    // once partition is done, the pivot is in the exact place it will be when
\t    // the array is put in sorted order, and it will not need to be moved
\t    // again. This runs in O(n) time.

\t    // Always choose a random pivot so that an input array which is reverse
\t    // sorted does not cause O(n^2) running time.
\t    var pivotIndex = randomIntInRange(p, r);
\t    var i = p - 1;

\t    swap(ary, pivotIndex, r);
\t    var pivot = ary[r];

\t    // Immediately after `j` is incremented in this loop, the following hold
\t    // true:
\t    //
\t    //   * Every element in `ary[p .. i]` is less than or equal to the pivot.
\t    //
\t    //   * Every element in `ary[i+1 .. j-1]` is greater than the pivot.
\t    for (var j = p; j < r; j++) {
\t      if (comparator(ary[j], pivot) <= 0) {
\t        i += 1;
\t        swap(ary, i, j);
\t      }
\t    }

\t    swap(ary, i + 1, j);
\t    var q = i + 1;

\t    // (2) Recurse on each half.

\t    doQuickSort(ary, comparator, p, q - 1);
\t    doQuickSort(ary, comparator, q + 1, r);
\t  }
\t}

\t/**
\t * Sort the given array in-place with the given comparator function.
\t *
\t * @param {Array} ary
\t *        An array to sort.
\t * @param {function} comparator
\t *        Function to use to compare two items.
\t */
\texports.quickSort = function (ary, comparator) {
\t  doQuickSort(ary, comparator, 0, ary.length - 1);
\t};


/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

\t/* -*- Mode: js; js-indent-level: 2; -*- */
\t/*
\t * Copyright 2011 Mozilla Foundation and contributors
\t * Licensed under the New BSD license. See LICENSE or:
\t * http://opensource.org/licenses/BSD-3-Clause
\t */

\tvar SourceMapGenerator = __webpack_require__(1).SourceMapGenerator;
\tvar util = __webpack_require__(4);

\t// Matches a Windows-style `\\r\\n` newline or a `\\n` newline used by all other
\t// operating systems these days (capturing the result).
\tvar REGEX_NEWLINE = /(\\r?\\n)/;

\t// Newline character code for charCodeAt() comparisons
\tvar NEWLINE_CODE = 10;

\t// Private symbol for identifying `SourceNode`s when multiple versions of
\t// the source-map library are loaded. This MUST NOT CHANGE across
\t// versions!
\tvar isSourceNode = \"\$\$\$isSourceNode\$\$\$\";

\t/**
\t * SourceNodes provide a way to abstract over interpolating/concatenating
\t * snippets of generated JavaScript source code while maintaining the line and
\t * column information associated with the original source code.
\t *
\t * @param aLine The original line number.
\t * @param aColumn The original column number.
\t * @param aSource The original source's filename.
\t * @param aChunks Optional. An array of strings which are snippets of
\t *        generated JS, or other SourceNodes.
\t * @param aName The original identifier.
\t */
\tfunction SourceNode(aLine, aColumn, aSource, aChunks, aName) {
\t  this.children = [];
\t  this.sourceContents = {};
\t  this.line = aLine == null ? null : aLine;
\t  this.column = aColumn == null ? null : aColumn;
\t  this.source = aSource == null ? null : aSource;
\t  this.name = aName == null ? null : aName;
\t  this[isSourceNode] = true;
\t  if (aChunks != null) this.add(aChunks);
\t}

\t/**
\t * Creates a SourceNode from generated code and a SourceMapConsumer.
\t *
\t * @param aGeneratedCode The generated code
\t * @param aSourceMapConsumer The SourceMap for the generated code
\t * @param aRelativePath Optional. The path that relative sources in the
\t *        SourceMapConsumer should be relative to.
\t */
\tSourceNode.fromStringWithSourceMap =
\t  function SourceNode_fromStringWithSourceMap(aGeneratedCode, aSourceMapConsumer, aRelativePath) {
\t    // The SourceNode we want to fill with the generated code
\t    // and the SourceMap
\t    var node = new SourceNode();

\t    // All even indices of this array are one line of the generated code,
\t    // while all odd indices are the newlines between two adjacent lines
\t    // (since `REGEX_NEWLINE` captures its match).
\t    // Processed fragments are accessed by calling `shiftNextLine`.
\t    var remainingLines = aGeneratedCode.split(REGEX_NEWLINE);
\t    var remainingLinesIndex = 0;
\t    var shiftNextLine = function() {
\t      var lineContents = getNextLine();
\t      // The last line of a file might not have a newline.
\t      var newLine = getNextLine() || \"\";
\t      return lineContents + newLine;

\t      function getNextLine() {
\t        return remainingLinesIndex < remainingLines.length ?
\t            remainingLines[remainingLinesIndex++] : undefined;
\t      }
\t    };

\t    // We need to remember the position of \"remainingLines\"
\t    var lastGeneratedLine = 1, lastGeneratedColumn = 0;

\t    // The generate SourceNodes we need a code range.
\t    // To extract it current and last mapping is used.
\t    // Here we store the last mapping.
\t    var lastMapping = null;

\t    aSourceMapConsumer.eachMapping(function (mapping) {
\t      if (lastMapping !== null) {
\t        // We add the code from \"lastMapping\" to \"mapping\":
\t        // First check if there is a new line in between.
\t        if (lastGeneratedLine < mapping.generatedLine) {
\t          // Associate first line with \"lastMapping\"
\t          addMappingWithCode(lastMapping, shiftNextLine());
\t          lastGeneratedLine++;
\t          lastGeneratedColumn = 0;
\t          // The remaining code is added without mapping
\t        } else {
\t          // There is no new line in between.
\t          // Associate the code between \"lastGeneratedColumn\" and
\t          // \"mapping.generatedColumn\" with \"lastMapping\"
\t          var nextLine = remainingLines[remainingLinesIndex];
\t          var code = nextLine.substr(0, mapping.generatedColumn -
\t                                        lastGeneratedColumn);
\t          remainingLines[remainingLinesIndex] = nextLine.substr(mapping.generatedColumn -
\t                                              lastGeneratedColumn);
\t          lastGeneratedColumn = mapping.generatedColumn;
\t          addMappingWithCode(lastMapping, code);
\t          // No more remaining code, continue
\t          lastMapping = mapping;
\t          return;
\t        }
\t      }
\t      // We add the generated code until the first mapping
\t      // to the SourceNode without any mapping.
\t      // Each line is added as separate string.
\t      while (lastGeneratedLine < mapping.generatedLine) {
\t        node.add(shiftNextLine());
\t        lastGeneratedLine++;
\t      }
\t      if (lastGeneratedColumn < mapping.generatedColumn) {
\t        var nextLine = remainingLines[remainingLinesIndex];
\t        node.add(nextLine.substr(0, mapping.generatedColumn));
\t        remainingLines[remainingLinesIndex] = nextLine.substr(mapping.generatedColumn);
\t        lastGeneratedColumn = mapping.generatedColumn;
\t      }
\t      lastMapping = mapping;
\t    }, this);
\t    // We have processed all mappings.
\t    if (remainingLinesIndex < remainingLines.length) {
\t      if (lastMapping) {
\t        // Associate the remaining code in the current line with \"lastMapping\"
\t        addMappingWithCode(lastMapping, shiftNextLine());
\t      }
\t      // and add the remaining lines without any mapping
\t      node.add(remainingLines.splice(remainingLinesIndex).join(\"\"));
\t    }

\t    // Copy sourcesContent into SourceNode
\t    aSourceMapConsumer.sources.forEach(function (sourceFile) {
\t      var content = aSourceMapConsumer.sourceContentFor(sourceFile);
\t      if (content != null) {
\t        if (aRelativePath != null) {
\t          sourceFile = util.join(aRelativePath, sourceFile);
\t        }
\t        node.setSourceContent(sourceFile, content);
\t      }
\t    });

\t    return node;

\t    function addMappingWithCode(mapping, code) {
\t      if (mapping === null || mapping.source === undefined) {
\t        node.add(code);
\t      } else {
\t        var source = aRelativePath
\t          ? util.join(aRelativePath, mapping.source)
\t          : mapping.source;
\t        node.add(new SourceNode(mapping.originalLine,
\t                                mapping.originalColumn,
\t                                source,
\t                                code,
\t                                mapping.name));
\t      }
\t    }
\t  };

\t/**
\t * Add a chunk of generated JS to this source node.
\t *
\t * @param aChunk A string snippet of generated JS code, another instance of
\t *        SourceNode, or an array where each member is one of those things.
\t */
\tSourceNode.prototype.add = function SourceNode_add(aChunk) {
\t  if (Array.isArray(aChunk)) {
\t    aChunk.forEach(function (chunk) {
\t      this.add(chunk);
\t    }, this);
\t  }
\t  else if (aChunk[isSourceNode] || typeof aChunk === \"string\") {
\t    if (aChunk) {
\t      this.children.push(aChunk);
\t    }
\t  }
\t  else {
\t    throw new TypeError(
\t      \"Expected a SourceNode, string, or an array of SourceNodes and strings. Got \" + aChunk
\t    );
\t  }
\t  return this;
\t};

\t/**
\t * Add a chunk of generated JS to the beginning of this source node.
\t *
\t * @param aChunk A string snippet of generated JS code, another instance of
\t *        SourceNode, or an array where each member is one of those things.
\t */
\tSourceNode.prototype.prepend = function SourceNode_prepend(aChunk) {
\t  if (Array.isArray(aChunk)) {
\t    for (var i = aChunk.length-1; i >= 0; i--) {
\t      this.prepend(aChunk[i]);
\t    }
\t  }
\t  else if (aChunk[isSourceNode] || typeof aChunk === \"string\") {
\t    this.children.unshift(aChunk);
\t  }
\t  else {
\t    throw new TypeError(
\t      \"Expected a SourceNode, string, or an array of SourceNodes and strings. Got \" + aChunk
\t    );
\t  }
\t  return this;
\t};

\t/**
\t * Walk over the tree of JS snippets in this node and its children. The
\t * walking function is called once for each snippet of JS and is passed that
\t * snippet and the its original associated source's line/column location.
\t *
\t * @param aFn The traversal function.
\t */
\tSourceNode.prototype.walk = function SourceNode_walk(aFn) {
\t  var chunk;
\t  for (var i = 0, len = this.children.length; i < len; i++) {
\t    chunk = this.children[i];
\t    if (chunk[isSourceNode]) {
\t      chunk.walk(aFn);
\t    }
\t    else {
\t      if (chunk !== '') {
\t        aFn(chunk, { source: this.source,
\t                     line: this.line,
\t                     column: this.column,
\t                     name: this.name });
\t      }
\t    }
\t  }
\t};

\t/**
\t * Like `String.prototype.join` except for SourceNodes. Inserts `aStr` between
\t * each of `this.children`.
\t *
\t * @param aSep The separator.
\t */
\tSourceNode.prototype.join = function SourceNode_join(aSep) {
\t  var newChildren;
\t  var i;
\t  var len = this.children.length;
\t  if (len > 0) {
\t    newChildren = [];
\t    for (i = 0; i < len-1; i++) {
\t      newChildren.push(this.children[i]);
\t      newChildren.push(aSep);
\t    }
\t    newChildren.push(this.children[i]);
\t    this.children = newChildren;
\t  }
\t  return this;
\t};

\t/**
\t * Call String.prototype.replace on the very right-most source snippet. Useful
\t * for trimming whitespace from the end of a source node, etc.
\t *
\t * @param aPattern The pattern to replace.
\t * @param aReplacement The thing to replace the pattern with.
\t */
\tSourceNode.prototype.replaceRight = function SourceNode_replaceRight(aPattern, aReplacement) {
\t  var lastChild = this.children[this.children.length - 1];
\t  if (lastChild[isSourceNode]) {
\t    lastChild.replaceRight(aPattern, aReplacement);
\t  }
\t  else if (typeof lastChild === 'string') {
\t    this.children[this.children.length - 1] = lastChild.replace(aPattern, aReplacement);
\t  }
\t  else {
\t    this.children.push(''.replace(aPattern, aReplacement));
\t  }
\t  return this;
\t};

\t/**
\t * Set the source content for a source file. This will be added to the SourceMapGenerator
\t * in the sourcesContent field.
\t *
\t * @param aSourceFile The filename of the source file
\t * @param aSourceContent The content of the source file
\t */
\tSourceNode.prototype.setSourceContent =
\t  function SourceNode_setSourceContent(aSourceFile, aSourceContent) {
\t    this.sourceContents[util.toSetString(aSourceFile)] = aSourceContent;
\t  };

\t/**
\t * Walk over the tree of SourceNodes. The walking function is called for each
\t * source file content and is passed the filename and source content.
\t *
\t * @param aFn The traversal function.
\t */
\tSourceNode.prototype.walkSourceContents =
\t  function SourceNode_walkSourceContents(aFn) {
\t    for (var i = 0, len = this.children.length; i < len; i++) {
\t      if (this.children[i][isSourceNode]) {
\t        this.children[i].walkSourceContents(aFn);
\t      }
\t    }

\t    var sources = Object.keys(this.sourceContents);
\t    for (var i = 0, len = sources.length; i < len; i++) {
\t      aFn(util.fromSetString(sources[i]), this.sourceContents[sources[i]]);
\t    }
\t  };

\t/**
\t * Return the string representation of this source node. Walks over the tree
\t * and concatenates all the various snippets together to one string.
\t */
\tSourceNode.prototype.toString = function SourceNode_toString() {
\t  var str = \"\";
\t  this.walk(function (chunk) {
\t    str += chunk;
\t  });
\t  return str;
\t};

\t/**
\t * Returns the string representation of this source node along with a source
\t * map.
\t */
\tSourceNode.prototype.toStringWithSourceMap = function SourceNode_toStringWithSourceMap(aArgs) {
\t  var generated = {
\t    code: \"\",
\t    line: 1,
\t    column: 0
\t  };
\t  var map = new SourceMapGenerator(aArgs);
\t  var sourceMappingActive = false;
\t  var lastOriginalSource = null;
\t  var lastOriginalLine = null;
\t  var lastOriginalColumn = null;
\t  var lastOriginalName = null;
\t  this.walk(function (chunk, original) {
\t    generated.code += chunk;
\t    if (original.source !== null
\t        && original.line !== null
\t        && original.column !== null) {
\t      if(lastOriginalSource !== original.source
\t         || lastOriginalLine !== original.line
\t         || lastOriginalColumn !== original.column
\t         || lastOriginalName !== original.name) {
\t        map.addMapping({
\t          source: original.source,
\t          original: {
\t            line: original.line,
\t            column: original.column
\t          },
\t          generated: {
\t            line: generated.line,
\t            column: generated.column
\t          },
\t          name: original.name
\t        });
\t      }
\t      lastOriginalSource = original.source;
\t      lastOriginalLine = original.line;
\t      lastOriginalColumn = original.column;
\t      lastOriginalName = original.name;
\t      sourceMappingActive = true;
\t    } else if (sourceMappingActive) {
\t      map.addMapping({
\t        generated: {
\t          line: generated.line,
\t          column: generated.column
\t        }
\t      });
\t      lastOriginalSource = null;
\t      sourceMappingActive = false;
\t    }
\t    for (var idx = 0, length = chunk.length; idx < length; idx++) {
\t      if (chunk.charCodeAt(idx) === NEWLINE_CODE) {
\t        generated.line++;
\t        generated.column = 0;
\t        // Mappings end at eol
\t        if (idx + 1 === length) {
\t          lastOriginalSource = null;
\t          sourceMappingActive = false;
\t        } else if (sourceMappingActive) {
\t          map.addMapping({
\t            source: original.source,
\t            original: {
\t              line: original.line,
\t              column: original.column
\t            },
\t            generated: {
\t              line: generated.line,
\t              column: generated.column
\t            },
\t            name: original.name
\t          });
\t        }
\t      } else {
\t        generated.column++;
\t      }
\t    }
\t  });
\t  this.walkSourceContents(function (sourceFile, sourceContent) {
\t    map.setSourceContent(sourceFile, sourceContent);
\t  });

\t  return { code: generated.code, map: map };
\t};

\texports.SourceNode = SourceNode;


/***/ })
/******/ ])
});
;", "node_modules/source-map/dist/source-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/source-map/dist/source-map.js");
    }
}
