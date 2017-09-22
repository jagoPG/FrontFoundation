<?php

/* node_modules/tar/lib/extract.js */
class __TwigTemplate_e432f56ef9f1ea01ffe7c9d130742f84fc13f3fadda304714fd99589fb74070c extends Twig_Template
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
        $__internal_47fc98c48486041d8840285a5a1110779ad5d29b2271b2993d44c2c7017fc7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fc98c48486041d8840285a5a1110779ad5d29b2271b2993d44c2c7017fc7eb->enter($__internal_47fc98c48486041d8840285a5a1110779ad5d29b2271b2993d44c2c7017fc7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/lib/extract.js"));

        // line 1
        echo "// give it a tarball and a path, and it'll dump the contents

module.exports = Extract

var tar = require(\"../tar.js\")
  , fstream = require(\"fstream\")
  , inherits = require(\"inherits\")
  , path = require(\"path\")

function Extract (opts) {
  if (!(this instanceof Extract)) return new Extract(opts)
  tar.Parse.apply(this)

  if (typeof opts !== \"object\") {
    opts = { path: opts }
  }

  // better to drop in cwd? seems more standard.
  opts.path = opts.path || path.resolve(\"node-tar-extract\")
  opts.type = \"Directory\"
  opts.Directory = true

  // similar to --strip or --strip-components
  opts.strip = +opts.strip
  if (!opts.strip || opts.strip <= 0) opts.strip = 0

  this._fst = fstream.Writer(opts)

  this.pause()
  var me = this

  // Hardlinks in tarballs are relative to the root
  // of the tarball.  So, they need to be resolved against
  // the target directory in order to be created properly.
  me.on(\"entry\", function (entry) {
    // if there's a \"strip\" argument, then strip off that many
    // path components.
    if (opts.strip) {
      var p = entry.path.split(\"/\").slice(opts.strip).join(\"/\")
      entry.path = entry.props.path = p
      if (entry.linkpath) {
        var lp = entry.linkpath.split(\"/\").slice(opts.strip).join(\"/\")
        entry.linkpath = entry.props.linkpath = lp
      }
    }
    if (entry.type === \"Link\") {
      entry.linkpath = entry.props.linkpath =
        path.join(opts.path, path.join(\"/\", entry.props.linkpath))
    }

    if (entry.type === \"SymbolicLink\") {
      var dn = path.dirname(entry.path) || \"\"
      var linkpath = entry.props.linkpath
      var target = path.resolve(opts.path, dn, linkpath)
      if (target.indexOf(opts.path) !== 0) {
        linkpath = path.join(opts.path, path.join(\"/\", linkpath))
      }
      entry.linkpath = entry.props.linkpath = linkpath
    }
  })

  this._fst.on(\"ready\", function () {
    me.pipe(me._fst, { end: false })
    me.resume()
  })

  this._fst.on('error', function(err) {
    me.emit('error', err)
  })

  this._fst.on('drain', function() {
    me.emit('drain')
  })

  // this._fst.on(\"end\", function () {
  //   console.error(\"\\nEEEE Extract End\", me._fst.path)
  // })

  this._fst.on(\"close\", function () {
    // console.error(\"\\nEEEE Extract End\", me._fst.path)
    me.emit(\"finish\")
    me.emit(\"end\")
    me.emit(\"close\")
  })
}

inherits(Extract, tar.Parse)

Extract.prototype._streamEnd = function () {
  var me = this
  if (!me._ended || me._entry) me.error(\"unexpected eof\")
  me._fst.end()
  // my .end() is coming later.
}
";
        
        $__internal_47fc98c48486041d8840285a5a1110779ad5d29b2271b2993d44c2c7017fc7eb->leave($__internal_47fc98c48486041d8840285a5a1110779ad5d29b2271b2993d44c2c7017fc7eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/lib/extract.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// give it a tarball and a path, and it'll dump the contents

module.exports = Extract

var tar = require(\"../tar.js\")
  , fstream = require(\"fstream\")
  , inherits = require(\"inherits\")
  , path = require(\"path\")

function Extract (opts) {
  if (!(this instanceof Extract)) return new Extract(opts)
  tar.Parse.apply(this)

  if (typeof opts !== \"object\") {
    opts = { path: opts }
  }

  // better to drop in cwd? seems more standard.
  opts.path = opts.path || path.resolve(\"node-tar-extract\")
  opts.type = \"Directory\"
  opts.Directory = true

  // similar to --strip or --strip-components
  opts.strip = +opts.strip
  if (!opts.strip || opts.strip <= 0) opts.strip = 0

  this._fst = fstream.Writer(opts)

  this.pause()
  var me = this

  // Hardlinks in tarballs are relative to the root
  // of the tarball.  So, they need to be resolved against
  // the target directory in order to be created properly.
  me.on(\"entry\", function (entry) {
    // if there's a \"strip\" argument, then strip off that many
    // path components.
    if (opts.strip) {
      var p = entry.path.split(\"/\").slice(opts.strip).join(\"/\")
      entry.path = entry.props.path = p
      if (entry.linkpath) {
        var lp = entry.linkpath.split(\"/\").slice(opts.strip).join(\"/\")
        entry.linkpath = entry.props.linkpath = lp
      }
    }
    if (entry.type === \"Link\") {
      entry.linkpath = entry.props.linkpath =
        path.join(opts.path, path.join(\"/\", entry.props.linkpath))
    }

    if (entry.type === \"SymbolicLink\") {
      var dn = path.dirname(entry.path) || \"\"
      var linkpath = entry.props.linkpath
      var target = path.resolve(opts.path, dn, linkpath)
      if (target.indexOf(opts.path) !== 0) {
        linkpath = path.join(opts.path, path.join(\"/\", linkpath))
      }
      entry.linkpath = entry.props.linkpath = linkpath
    }
  })

  this._fst.on(\"ready\", function () {
    me.pipe(me._fst, { end: false })
    me.resume()
  })

  this._fst.on('error', function(err) {
    me.emit('error', err)
  })

  this._fst.on('drain', function() {
    me.emit('drain')
  })

  // this._fst.on(\"end\", function () {
  //   console.error(\"\\nEEEE Extract End\", me._fst.path)
  // })

  this._fst.on(\"close\", function () {
    // console.error(\"\\nEEEE Extract End\", me._fst.path)
    me.emit(\"finish\")
    me.emit(\"end\")
    me.emit(\"close\")
  })
}

inherits(Extract, tar.Parse)

Extract.prototype._streamEnd = function () {
  var me = this
  if (!me._ended || me._entry) me.error(\"unexpected eof\")
  me._fst.end()
  // my .end() is coming later.
}
", "node_modules/tar/lib/extract.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/lib/extract.js");
    }
}
