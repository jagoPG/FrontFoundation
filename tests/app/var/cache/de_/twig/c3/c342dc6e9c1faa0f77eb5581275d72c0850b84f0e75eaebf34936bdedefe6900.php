<?php

/* node_modules/fsevents/fsevents.js */
class __TwigTemplate_ed99d3bb3b3cab8703e06dc0f5e3c73c8b9156e5a99664051462d8610d27e53c extends Twig_Template
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
        $__internal_b6244339253048d518358f7a1644a08a91658f7127130e26e12b819512064349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6244339253048d518358f7a1644a08a91658f7127130e26e12b819512064349->enter($__internal_b6244339253048d518358f7a1644a08a91658f7127130e26e12b819512064349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/fsevents.js"));

        // line 1
        echo "/*
 ** © 2014 by Philipp Dunkel <pip@pipobscure.com>
 ** Licensed under MIT License.
 */

/* jshint node:true */
'use strict';

if (process.platform !== 'darwin')
  throw new Error('Module \\'fsevents\\' is not compatible with platform \\'' + process.platform + '\\'');

var path = require('path');
var binary = require('node-pre-gyp');
var Native = require(binary.find(path.join(__dirname, 'package.json')));

var EventEmitter = require('events').EventEmitter;
var fs = require('fs');
var inherits = require('util').inherits;

function FSEvents(path, handler) {
  EventEmitter.call(this);

  Object.defineProperty(this, '_impl', {
    value: new Native.FSEvents(String(path || ''), handler),
    enumerable: false,
    writable: false
  });
}

inherits(FSEvents, EventEmitter);
proxies(FSEvents, Native.FSEvents);

module.exports = watch;
module.exports.getInfo = getInfo;
module.exports.FSEvents = Native.FSEvents;
module.exports.Constants = Native.Constants;

var defer = global.setImmediate || process.nextTick;

function watch(path) {
  var fse = new FSEvents(String(path || ''), handler);
  EventEmitter.call(fse);
  return fse;

  function handler(path, flags, id) {
    defer(function() {
      fse.emit('fsevent', path, flags, id);
      var info = getInfo(path, flags);
      info.id = id;
      if (info.event === 'moved') {
        fs.stat(info.path, function(err, stat) {
          info.event = (err || !stat) ? 'moved-out' : 'moved-in';
          fse.emit('change', path, info);
          fse.emit(info.event, path, info);
        });
      } else {
        fse.emit('change', path, info);
        fse.emit(info.event, path, info);
      }
    });
  }
}

function proxies(ctor, target) {
  Object.keys(target.prototype).filter(function(key) {
    return typeof target.prototype[key] === 'function';
  }).forEach(function(key) {
    ctor.prototype[key] = function() {
      this._impl[key].apply(this._impl, arguments);
      return this;
    }
  });
}

function getFileType(flags) {
  if (Native.Constants.kFSEventStreamEventFlagItemIsFile & flags) return 'file';
  if (Native.Constants.kFSEventStreamEventFlagItemIsDir & flags) return 'directory';
  if (Native.Constants.kFSEventStreamEventFlagItemIsSymlink & flags) return 'symlink';
}

function getEventType(flags) {
  if (Native.Constants.kFSEventStreamEventFlagItemRemoved & flags) return 'deleted';
  if (Native.Constants.kFSEventStreamEventFlagItemRenamed & flags) return 'moved';
  if (Native.Constants.kFSEventStreamEventFlagItemCreated & flags) return 'created';
  if (Native.Constants.kFSEventStreamEventFlagItemModified & flags) return 'modified';
  if (Native.Constants.kFSEventStreamEventFlagRootChanged & flags) return 'root-changed';

  return 'unknown';
}

function getFileChanges(flags) {
  return {
    inode: !! (Native.Constants.kFSEventStreamEventFlagItemInodeMetaMod & flags),
    finder: !! (Native.Constants.kFSEventStreamEventFlagItemFinderInfoMod & flags),
    access: !! (Native.Constants.kFSEventStreamEventFlagItemChangeOwner & flags),
    xattrs: !! (Native.Constants.kFSEventStreamEventFlagItemXattrMod & flags)
  };
}

function getInfo(path, flags) {
  return {
    path: path,
    event: getEventType(flags),
    type: getFileType(flags),
    changes: getFileChanges(flags),
    flags: flags
  };
}
";
        
        $__internal_b6244339253048d518358f7a1644a08a91658f7127130e26e12b819512064349->leave($__internal_b6244339253048d518358f7a1644a08a91658f7127130e26e12b819512064349_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/fsevents.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
 ** © 2014 by Philipp Dunkel <pip@pipobscure.com>
 ** Licensed under MIT License.
 */

/* jshint node:true */
'use strict';

if (process.platform !== 'darwin')
  throw new Error('Module \\'fsevents\\' is not compatible with platform \\'' + process.platform + '\\'');

var path = require('path');
var binary = require('node-pre-gyp');
var Native = require(binary.find(path.join(__dirname, 'package.json')));

var EventEmitter = require('events').EventEmitter;
var fs = require('fs');
var inherits = require('util').inherits;

function FSEvents(path, handler) {
  EventEmitter.call(this);

  Object.defineProperty(this, '_impl', {
    value: new Native.FSEvents(String(path || ''), handler),
    enumerable: false,
    writable: false
  });
}

inherits(FSEvents, EventEmitter);
proxies(FSEvents, Native.FSEvents);

module.exports = watch;
module.exports.getInfo = getInfo;
module.exports.FSEvents = Native.FSEvents;
module.exports.Constants = Native.Constants;

var defer = global.setImmediate || process.nextTick;

function watch(path) {
  var fse = new FSEvents(String(path || ''), handler);
  EventEmitter.call(fse);
  return fse;

  function handler(path, flags, id) {
    defer(function() {
      fse.emit('fsevent', path, flags, id);
      var info = getInfo(path, flags);
      info.id = id;
      if (info.event === 'moved') {
        fs.stat(info.path, function(err, stat) {
          info.event = (err || !stat) ? 'moved-out' : 'moved-in';
          fse.emit('change', path, info);
          fse.emit(info.event, path, info);
        });
      } else {
        fse.emit('change', path, info);
        fse.emit(info.event, path, info);
      }
    });
  }
}

function proxies(ctor, target) {
  Object.keys(target.prototype).filter(function(key) {
    return typeof target.prototype[key] === 'function';
  }).forEach(function(key) {
    ctor.prototype[key] = function() {
      this._impl[key].apply(this._impl, arguments);
      return this;
    }
  });
}

function getFileType(flags) {
  if (Native.Constants.kFSEventStreamEventFlagItemIsFile & flags) return 'file';
  if (Native.Constants.kFSEventStreamEventFlagItemIsDir & flags) return 'directory';
  if (Native.Constants.kFSEventStreamEventFlagItemIsSymlink & flags) return 'symlink';
}

function getEventType(flags) {
  if (Native.Constants.kFSEventStreamEventFlagItemRemoved & flags) return 'deleted';
  if (Native.Constants.kFSEventStreamEventFlagItemRenamed & flags) return 'moved';
  if (Native.Constants.kFSEventStreamEventFlagItemCreated & flags) return 'created';
  if (Native.Constants.kFSEventStreamEventFlagItemModified & flags) return 'modified';
  if (Native.Constants.kFSEventStreamEventFlagRootChanged & flags) return 'root-changed';

  return 'unknown';
}

function getFileChanges(flags) {
  return {
    inode: !! (Native.Constants.kFSEventStreamEventFlagItemInodeMetaMod & flags),
    finder: !! (Native.Constants.kFSEventStreamEventFlagItemFinderInfoMod & flags),
    access: !! (Native.Constants.kFSEventStreamEventFlagItemChangeOwner & flags),
    xattrs: !! (Native.Constants.kFSEventStreamEventFlagItemXattrMod & flags)
  };
}

function getInfo(path, flags) {
  return {
    path: path,
    event: getEventType(flags),
    type: getFileType(flags),
    changes: getFileChanges(flags),
    flags: flags
  };
}
", "node_modules/fsevents/fsevents.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/fsevents.js");
    }
}
