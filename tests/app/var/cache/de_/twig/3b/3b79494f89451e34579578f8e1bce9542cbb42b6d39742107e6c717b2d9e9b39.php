<?php

/* node_modules/fsevents/node_modules/uid-number/uid-number.js */
class __TwigTemplate_a5cd25f5943d6a169cc6d6d980314fe2b0b63d7a05c4b8504c0320a9f2804d64 extends Twig_Template
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
        $__internal_b7ffadcb2910733f7203103631636e1a2e37d913eb866b8573440ca00d13935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ffadcb2910733f7203103631636e1a2e37d913eb866b8573440ca00d13935d->enter($__internal_b7ffadcb2910733f7203103631636e1a2e37d913eb866b8573440ca00d13935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/uid-number/uid-number.js"));

        // line 1
        echo "module.exports = uidNumber

// This module calls into get-uid-gid.js, which sets the
// uid and gid to the supplied argument, in order to find out their
// numeric value.  This can't be done in the main node process,
// because otherwise node would be running as that user from this
// point on.

var child_process = require(\"child_process\")
  , path = require(\"path\")
  , uidSupport = process.getuid && process.setuid
  , uidCache = {}
  , gidCache = {}

function uidNumber (uid, gid, cb) {
  if (!uidSupport) return cb()
  if (typeof cb !== \"function\") cb = gid, gid = null
  if (typeof cb !== \"function\") cb = uid, uid = null
  if (gid == null) gid = process.getgid()
  if (uid == null) uid = process.getuid()
  if (!isNaN(gid)) gid = gidCache[gid] = +gid
  if (!isNaN(uid)) uid = uidCache[uid] = +uid

  if (uidCache.hasOwnProperty(uid)) uid = uidCache[uid]
  if (gidCache.hasOwnProperty(gid)) gid = gidCache[gid]

  if (typeof gid === \"number\" && typeof uid === \"number\") {
    return process.nextTick(cb.bind(null, null, uid, gid))
  }

  var getter = require.resolve(\"./get-uid-gid.js\")

  child_process.execFile( process.execPath
                        , [getter, uid, gid]
                        , function (code, out, stderr) {
    if (code) {
      var er = new Error(\"could not get uid/gid\\n\" + stderr)
      er.code = code
      return cb(er)
    }

    try {
      out = JSON.parse(out+\"\")
    } catch (ex) {
      return cb(ex)
    }

    if (out.error) {
      var er = new Error(out.error)
      er.errno = out.errno
      return cb(er)
    }

    if (isNaN(out.uid) || isNaN(out.gid)) return cb(new Error(
      \"Could not get uid/gid: \"+JSON.stringify(out)))

    cb(null, uidCache[uid] = +out.uid, gidCache[gid] = +out.gid)
  })
}
";
        
        $__internal_b7ffadcb2910733f7203103631636e1a2e37d913eb866b8573440ca00d13935d->leave($__internal_b7ffadcb2910733f7203103631636e1a2e37d913eb866b8573440ca00d13935d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/uid-number/uid-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = uidNumber

// This module calls into get-uid-gid.js, which sets the
// uid and gid to the supplied argument, in order to find out their
// numeric value.  This can't be done in the main node process,
// because otherwise node would be running as that user from this
// point on.

var child_process = require(\"child_process\")
  , path = require(\"path\")
  , uidSupport = process.getuid && process.setuid
  , uidCache = {}
  , gidCache = {}

function uidNumber (uid, gid, cb) {
  if (!uidSupport) return cb()
  if (typeof cb !== \"function\") cb = gid, gid = null
  if (typeof cb !== \"function\") cb = uid, uid = null
  if (gid == null) gid = process.getgid()
  if (uid == null) uid = process.getuid()
  if (!isNaN(gid)) gid = gidCache[gid] = +gid
  if (!isNaN(uid)) uid = uidCache[uid] = +uid

  if (uidCache.hasOwnProperty(uid)) uid = uidCache[uid]
  if (gidCache.hasOwnProperty(gid)) gid = gidCache[gid]

  if (typeof gid === \"number\" && typeof uid === \"number\") {
    return process.nextTick(cb.bind(null, null, uid, gid))
  }

  var getter = require.resolve(\"./get-uid-gid.js\")

  child_process.execFile( process.execPath
                        , [getter, uid, gid]
                        , function (code, out, stderr) {
    if (code) {
      var er = new Error(\"could not get uid/gid\\n\" + stderr)
      er.code = code
      return cb(er)
    }

    try {
      out = JSON.parse(out+\"\")
    } catch (ex) {
      return cb(ex)
    }

    if (out.error) {
      var er = new Error(out.error)
      er.errno = out.errno
      return cb(er)
    }

    if (isNaN(out.uid) || isNaN(out.gid)) return cb(new Error(
      \"Could not get uid/gid: \"+JSON.stringify(out)))

    cb(null, uidCache[uid] = +out.uid, gidCache[gid] = +out.gid)
  })
}
", "node_modules/fsevents/node_modules/uid-number/uid-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/uid-number/uid-number.js");
    }
}
