<?php

/* node_modules/tar-pack/test/index.js */
class __TwigTemplate_dc31eb48610482245d73552adade5d223b99d430b7cb65409fe3252def2f6eb8 extends Twig_Template
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
        $__internal_5f46f5d41e434601409d139f165f12335d6b5d2c13009347e0331fa2b7a5721f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f46f5d41e434601409d139f165f12335d6b5d2c13009347e0331fa2b7a5721f->enter($__internal_5f46f5d41e434601409d139f165f12335d6b5d2c13009347e0331fa2b7a5721f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar-pack/test/index.js"));

        // line 1
        echo "var tar = require('../')
var path = require('path')
var rfile = require('rfile')
var rimraf = require('rimraf').sync
var mkdir = require('mkdirp').sync

var read = require('fs').createReadStream
var write = require('fs').createWriteStream
var assert = require('assert')

beforeEach(function () {
  rimraf(__dirname + '/output')
})
afterEach(function () {
  rimraf(__dirname + '/output')
})
describe('tarball.pipe(unpack(directory, callback))', function () {
  it('unpacks the tarball into the directory', function (done) {
    read(__dirname + '/fixtures/packed.tar').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
      assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
      done()
    }))
  })
  it('unpacks the tarball into the directory without deleting existing files', function (done) {
    read(__dirname + '/fixtures/packed-file.txt').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      read(__dirname + '/fixtures/packed.tar').pipe(tar.unpack(__dirname + '/output/unpacked', {keepFiles: true}, function (err) {
        if (err) return done(err)
        assert.equal(rfile('./output/unpacked/index.js'), rfile('./fixtures/packed-file.txt'))
        done()
      }))
    }))
  })
})
describe('tarball.pipe(unpack(directory, { strip: 0 }, callback))', function () {
  it('unpacks the tarball into the directory with subdir package', function (done) {
    read(__dirname + '/fixtures/packed.tar').pipe(tar.unpack(__dirname + '/output/unpacked', { strip: 0 } , function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/package/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
      assert.equal(rfile('./output/unpacked/package/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
      done()
    }))
  })
})
describe('gziptarball.pipe(unpack(directory, callback))', function () {
  it('unpacks the tarball into the directory', function (done) {
    read(__dirname + '/fixtures/packed.tar.gz').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
      assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
      done()
    }))
  })
})
describe('file.pipe(unpack(directory, callback))', function () {
  it('copies the file into the directory', function (done) {
    read(__dirname + '/fixtures/packed-file.txt').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/index.js'), rfile('./fixtures/packed-file.txt'))
      done()
    }))
  })
})
describe('pack(directory).pipe(tarball)', function () {
  it('packs the directory into the output', function (done) {
    var called = false
    mkdir(__dirname + '/output/')
    tar.pack(__dirname + '/fixtures/to-pack').pipe(write(__dirname + '/output/packed.tar.gz'))
      .on('error', function (err) {
        if (called) return
        called = true
        done(err)
      })
      .on('close', function () {
        if (called) return
        called = true
        read(__dirname + '/output/packed.tar.gz').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
          if (err) return done(err)
          assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
          assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
          done()
        }))
      })
  })
})
describe('pack(directory, { fromBase: true }).pipe(tarball)', function () {
  it('packs the directory with input dir as base dir', function (done) {
    var called = false
    mkdir(__dirname + '/output/')
    tar.pack(__dirname + '/fixtures/to-pack', { fromBase: true }).pipe(write(__dirname + '/output/packed.tar.gz'))
      .on('error', function (err) {
        if (called) return
        called = true
        done(err)
      })
      .on('close', function () {
        if (called) return
        called = true
        read(__dirname + '/output/packed.tar.gz').pipe(tar.unpack(__dirname + '/output/unpacked', { strip: 0 }, function (err) {
          if (err) return done(err)
          assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
          assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
          done()
        }))
      })
  })
})
";
        
        $__internal_5f46f5d41e434601409d139f165f12335d6b5d2c13009347e0331fa2b7a5721f->leave($__internal_5f46f5d41e434601409d139f165f12335d6b5d2c13009347e0331fa2b7a5721f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar-pack/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tar = require('../')
var path = require('path')
var rfile = require('rfile')
var rimraf = require('rimraf').sync
var mkdir = require('mkdirp').sync

var read = require('fs').createReadStream
var write = require('fs').createWriteStream
var assert = require('assert')

beforeEach(function () {
  rimraf(__dirname + '/output')
})
afterEach(function () {
  rimraf(__dirname + '/output')
})
describe('tarball.pipe(unpack(directory, callback))', function () {
  it('unpacks the tarball into the directory', function (done) {
    read(__dirname + '/fixtures/packed.tar').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
      assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
      done()
    }))
  })
  it('unpacks the tarball into the directory without deleting existing files', function (done) {
    read(__dirname + '/fixtures/packed-file.txt').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      read(__dirname + '/fixtures/packed.tar').pipe(tar.unpack(__dirname + '/output/unpacked', {keepFiles: true}, function (err) {
        if (err) return done(err)
        assert.equal(rfile('./output/unpacked/index.js'), rfile('./fixtures/packed-file.txt'))
        done()
      }))
    }))
  })
})
describe('tarball.pipe(unpack(directory, { strip: 0 }, callback))', function () {
  it('unpacks the tarball into the directory with subdir package', function (done) {
    read(__dirname + '/fixtures/packed.tar').pipe(tar.unpack(__dirname + '/output/unpacked', { strip: 0 } , function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/package/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
      assert.equal(rfile('./output/unpacked/package/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
      done()
    }))
  })
})
describe('gziptarball.pipe(unpack(directory, callback))', function () {
  it('unpacks the tarball into the directory', function (done) {
    read(__dirname + '/fixtures/packed.tar.gz').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
      assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
      done()
    }))
  })
})
describe('file.pipe(unpack(directory, callback))', function () {
  it('copies the file into the directory', function (done) {
    read(__dirname + '/fixtures/packed-file.txt').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
      if (err) return done(err)
      assert.equal(rfile('./output/unpacked/index.js'), rfile('./fixtures/packed-file.txt'))
      done()
    }))
  })
})
describe('pack(directory).pipe(tarball)', function () {
  it('packs the directory into the output', function (done) {
    var called = false
    mkdir(__dirname + '/output/')
    tar.pack(__dirname + '/fixtures/to-pack').pipe(write(__dirname + '/output/packed.tar.gz'))
      .on('error', function (err) {
        if (called) return
        called = true
        done(err)
      })
      .on('close', function () {
        if (called) return
        called = true
        read(__dirname + '/output/packed.tar.gz').pipe(tar.unpack(__dirname + '/output/unpacked', function (err) {
          if (err) return done(err)
          assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
          assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
          done()
        }))
      })
  })
})
describe('pack(directory, { fromBase: true }).pipe(tarball)', function () {
  it('packs the directory with input dir as base dir', function (done) {
    var called = false
    mkdir(__dirname + '/output/')
    tar.pack(__dirname + '/fixtures/to-pack', { fromBase: true }).pipe(write(__dirname + '/output/packed.tar.gz'))
      .on('error', function (err) {
        if (called) return
        called = true
        done(err)
      })
      .on('close', function () {
        if (called) return
        called = true
        read(__dirname + '/output/packed.tar.gz').pipe(tar.unpack(__dirname + '/output/unpacked', { strip: 0 }, function (err) {
          if (err) return done(err)
          assert.equal(rfile('./output/unpacked/bar.txt'), rfile('./fixtures/to-pack/bar.txt'))
          assert.equal(rfile('./output/unpacked/foo.txt'), rfile('./fixtures/to-pack/foo.txt'))
          done()
        }))
      })
  })
})
", "node_modules/tar-pack/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar-pack/test/index.js");
    }
}
