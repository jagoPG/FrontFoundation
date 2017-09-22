<?php

/* node_modules/fstream/examples/pipe.js */
class __TwigTemplate_5bcd45324cc8145bb7afa4f5bdcd6b41a1be7c449c47da3660c92ab13ab6a98d extends Twig_Template
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
        $__internal_d1bccfe4b6a58ce2925f953e2c956ab8b1da286d5ea49598a6f4557f01d077b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bccfe4b6a58ce2925f953e2c956ab8b1da286d5ea49598a6f4557f01d077b6->enter($__internal_d1bccfe4b6a58ce2925f953e2c956ab8b1da286d5ea49598a6f4557f01d077b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/examples/pipe.js"));

        // line 1
        echo "var fstream = require('../fstream.js')
var path = require('path')

var r = fstream.Reader({
  path: path.dirname(__dirname),
  filter: function () {
    return !this.basename.match(/^\\./) &&
      !this.basename.match(/^node_modules\$/) &&
      !this.basename.match(/^deep-copy\$/)
  }
})

var w = fstream.Writer({
  path: path.resolve(__dirname, 'deep-copy'),
  type: 'Directory'
})

var indent = ''

r.on('entry', appears)
r.on('ready', function () {
  console.error('ready to begin!', r.path)
})

function appears (entry) {
  console.error(indent + 'a %s appears!', entry.type, entry.basename, typeof entry.basename, entry)
  if (foggy) {
    console.error('FOGGY!')
    var p = entry
    do {
      console.error(p.depth, p.path, p._paused)
      p = p.parent
    } while (p)

    throw new Error('\\u001b[mshould not have entries while foggy')
  }
  indent += '\\t'
  entry.on('data', missile(entry))
  entry.on('end', runaway(entry))
  entry.on('entry', appears)
}

var foggy
function missile (entry) {
  function liftFog (who) {
    if (!foggy) return
    if (who) {
      console.error('%s breaks the spell!', who && who.path)
    } else {
      console.error('the spell expires!')
    }
    console.error('\\u001b[mthe fog lifts!\\n')
    clearTimeout(foggy)
    foggy = null
    if (entry._paused) entry.resume()
  }

  if (entry.type === 'Directory') {
    var ended = false
    entry.once('end', function () { ended = true })
    return function (c) {
      // throw in some pathological pause()/resume() behavior
      // just for extra fun.
      process.nextTick(function () {
        if (!foggy && !ended) { // && Math.random() < 0.3) {
          console.error(indent + '%s casts a spell', entry.basename)
          console.error('\\na slowing fog comes over the battlefield...\\n\\u001b[32m')
          entry.pause()
          entry.once('resume', liftFog)
          foggy = setTimeout(liftFog, 10)
        }
      })
    }
  }

  return function (c) {
    var e = Math.random() < 0.5
    console.error(indent + '%s %s for %d damage!',
      entry.basename,
      e ? 'is struck' : 'fires a chunk',
      c.length)
  }
}

function runaway (entry) {
  return function () {
    var e = Math.random() < 0.5
    console.error(indent + '%s %s',
      entry.basename,
      e ? 'turns to flee' : 'is vanquished!')
    indent = indent.slice(0, -1)
  }
}

w.on('entry', attacks)
// w.on('ready', function () { attacks(w) })
function attacks (entry) {
  console.error(indent + '%s %s!', entry.basename,
    entry.type === 'Directory' ? 'calls for backup' : 'attacks')
  entry.on('entry', attacks)
}

var ended = false
r.on('end', function () {
  if (foggy) clearTimeout(foggy)
  console.error(\"\\u001b[mIT'S OVER!!\")
  console.error('A WINNAR IS YOU!')

  console.log('ok 1 A WINNAR IS YOU')
  ended = true
})

process.on('exit', function () {
  console.log((ended ? '' : 'not ') + 'ok 2 ended')
  console.log('1..2')
})

r.pipe(w)
";
        
        $__internal_d1bccfe4b6a58ce2925f953e2c956ab8b1da286d5ea49598a6f4557f01d077b6->leave($__internal_d1bccfe4b6a58ce2925f953e2c956ab8b1da286d5ea49598a6f4557f01d077b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/examples/pipe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fstream = require('../fstream.js')
var path = require('path')

var r = fstream.Reader({
  path: path.dirname(__dirname),
  filter: function () {
    return !this.basename.match(/^\\./) &&
      !this.basename.match(/^node_modules\$/) &&
      !this.basename.match(/^deep-copy\$/)
  }
})

var w = fstream.Writer({
  path: path.resolve(__dirname, 'deep-copy'),
  type: 'Directory'
})

var indent = ''

r.on('entry', appears)
r.on('ready', function () {
  console.error('ready to begin!', r.path)
})

function appears (entry) {
  console.error(indent + 'a %s appears!', entry.type, entry.basename, typeof entry.basename, entry)
  if (foggy) {
    console.error('FOGGY!')
    var p = entry
    do {
      console.error(p.depth, p.path, p._paused)
      p = p.parent
    } while (p)

    throw new Error('\\u001b[mshould not have entries while foggy')
  }
  indent += '\\t'
  entry.on('data', missile(entry))
  entry.on('end', runaway(entry))
  entry.on('entry', appears)
}

var foggy
function missile (entry) {
  function liftFog (who) {
    if (!foggy) return
    if (who) {
      console.error('%s breaks the spell!', who && who.path)
    } else {
      console.error('the spell expires!')
    }
    console.error('\\u001b[mthe fog lifts!\\n')
    clearTimeout(foggy)
    foggy = null
    if (entry._paused) entry.resume()
  }

  if (entry.type === 'Directory') {
    var ended = false
    entry.once('end', function () { ended = true })
    return function (c) {
      // throw in some pathological pause()/resume() behavior
      // just for extra fun.
      process.nextTick(function () {
        if (!foggy && !ended) { // && Math.random() < 0.3) {
          console.error(indent + '%s casts a spell', entry.basename)
          console.error('\\na slowing fog comes over the battlefield...\\n\\u001b[32m')
          entry.pause()
          entry.once('resume', liftFog)
          foggy = setTimeout(liftFog, 10)
        }
      })
    }
  }

  return function (c) {
    var e = Math.random() < 0.5
    console.error(indent + '%s %s for %d damage!',
      entry.basename,
      e ? 'is struck' : 'fires a chunk',
      c.length)
  }
}

function runaway (entry) {
  return function () {
    var e = Math.random() < 0.5
    console.error(indent + '%s %s',
      entry.basename,
      e ? 'turns to flee' : 'is vanquished!')
    indent = indent.slice(0, -1)
  }
}

w.on('entry', attacks)
// w.on('ready', function () { attacks(w) })
function attacks (entry) {
  console.error(indent + '%s %s!', entry.basename,
    entry.type === 'Directory' ? 'calls for backup' : 'attacks')
  entry.on('entry', attacks)
}

var ended = false
r.on('end', function () {
  if (foggy) clearTimeout(foggy)
  console.error(\"\\u001b[mIT'S OVER!!\")
  console.error('A WINNAR IS YOU!')

  console.log('ok 1 A WINNAR IS YOU')
  ended = true
})

process.on('exit', function () {
  console.log((ended ? '' : 'not ') + 'ok 2 ended')
  console.log('1..2')
})

r.pipe(w)
", "node_modules/fstream/examples/pipe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/examples/pipe.js");
    }
}
