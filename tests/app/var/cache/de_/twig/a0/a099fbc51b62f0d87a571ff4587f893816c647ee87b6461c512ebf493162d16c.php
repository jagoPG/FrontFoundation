<?php

/* node_modules/isexe/test/basic.js */
class __TwigTemplate_3d1fc40332b6685252deebe71d892f1bf03f330e4d7dbfbb290dad4d1f559436 extends Twig_Template
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
        $__internal_cc350d0ede44378007cf7f80227499ed304d60b0202d7c2b88a84412d7a0e70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc350d0ede44378007cf7f80227499ed304d60b0202d7c2b88a84412d7a0e70d->enter($__internal_cc350d0ede44378007cf7f80227499ed304d60b0202d7c2b88a84412d7a0e70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isexe/test/basic.js"));

        // line 1
        echo "var t = require('tap')
var fs = require('fs')
var path = require('path')
var fixture = path.resolve(__dirname, 'fixtures')
var meow = fixture + '/meow.cat'
var mine = fixture + '/mine.cat'
var ours = fixture + '/ours.cat'
var fail = fixture + '/fail.false'
var noent = fixture + '/enoent.exe'
var mkdirp = require('mkdirp')
var rimraf = require('rimraf')

var isWindows = process.platform === 'win32'
var hasAccess = typeof fs.access === 'function'
var winSkip = isWindows && 'windows'
var accessSkip = !hasAccess && 'no fs.access function'
var hasPromise = typeof Promise === 'function'
var promiseSkip = !hasPromise && 'no global Promise'

function reset () {
  delete require.cache[require.resolve('../')]
  return require('../')
}

t.test('setup fixtures', function (t) {
  rimraf.sync(fixture)
  mkdirp.sync(fixture)
  fs.writeFileSync(meow, '#!/usr/bin/env cat\\nmeow\\n')
  fs.chmodSync(meow, parseInt('0755', 8))
  fs.writeFileSync(fail, '#!/usr/bin/env false\\n')
  fs.chmodSync(fail, parseInt('0644', 8))
  fs.writeFileSync(mine, '#!/usr/bin/env cat\\nmine\\n')
  fs.chmodSync(mine, parseInt('0744', 8))
  fs.writeFileSync(ours, '#!/usr/bin/env cat\\nours\\n')
  fs.chmodSync(ours, parseInt('0754', 8))
  t.end()
})

t.test('promise', { skip: promiseSkip }, function (t) {
  var isexe = reset()
  t.test('meow async', function (t) {
    isexe(meow).then(function (is) {
      t.ok(is)
      t.end()
    })
  })
  t.test('fail async', function (t) {
    isexe(fail).then(function (is) {
      t.notOk(is)
      t.end()
    })
  })
  t.test('noent async', function (t) {
    isexe(noent).catch(function (er) {
      t.ok(er)
      t.end()
    })
  })
  t.test('noent ignore async', function (t) {
    isexe(noent, { ignoreErrors: true }).then(function (is) {
      t.notOk(is)
      t.end()
    })
  })
  t.end()
})

t.test('no promise', function (t) {
  global.Promise = null
  var isexe = reset()
  t.throws('try to meow a promise', function () {
    isexe(meow)
  })
  t.end()
})

t.test('access', { skip: accessSkip || winSkip }, function (t) {
  runTest(t)
})

t.test('mode', { skip: winSkip }, function (t) {
  delete fs.access
  delete fs.accessSync
  var isexe = reset()
  t.ok(isexe.sync(ours, { uid: 0, gid: 0 }))
  t.ok(isexe.sync(mine, { uid: 0, gid: 0 }))
  runTest(t)
})

t.test('windows', function (t) {
  global.TESTING_WINDOWS = true
  var pathExt = '.EXE;.CAT;.CMD;.COM'
  t.test('pathExt option', function (t) {
    runTest(t, { pathExt: '.EXE;.CAT;.CMD;.COM' })
  })
  t.test('pathExt env', function (t) {
    process.env.PATHEXT = pathExt
    runTest(t)
  })
  t.test('no pathExt', function (t) {
    // with a pathExt of '', any filename is fine.
    // so the \"fail\" one would still pass.
    runTest(t, { pathExt: '', skipFail: true })
  })
  t.test('pathext with empty entry', function (t) {
    // with a pathExt of '', any filename is fine.
    // so the \"fail\" one would still pass.
    runTest(t, { pathExt: ';' + pathExt, skipFail: true })
  })
  t.end()
})

t.test('cleanup', function (t) {
  rimraf.sync(fixture)
  t.end()
})

function runTest (t, options) {
  var isexe = reset()

  var optionsIgnore = Object.create(options || {})
  optionsIgnore.ignoreErrors = true

  if (!options || !options.skipFail) {
    t.notOk(isexe.sync(fail, options))
  }
  t.notOk(isexe.sync(noent, optionsIgnore))
  if (!options) {
    t.ok(isexe.sync(meow))
  } else {
    t.ok(isexe.sync(meow, options))
  }

  t.ok(isexe.sync(mine, options))
  t.ok(isexe.sync(ours, options))
  t.throws(function () {
    isexe.sync(noent, options)
  })

  t.test('meow async', function (t) {
    if (!options) {
      isexe(meow, function (er, is) {
        if (er) {
          throw er
        }
        t.ok(is)
        t.end()
      })
    } else {
      isexe(meow, options, function (er, is) {
        if (er) {
          throw er
        }
        t.ok(is)
        t.end()
      })
    }
  })

  t.test('mine async', function (t) {
    isexe(mine, options, function (er, is) {
      if (er) {
        throw er
      }
      t.ok(is)
      t.end()
    })
  })

  t.test('ours async', function (t) {
    isexe(ours, options, function (er, is) {
      if (er) {
        throw er
      }
      t.ok(is)
      t.end()
    })
  })

  if (!options || !options.skipFail) {
    t.test('fail async', function (t) {
      isexe(fail, options, function (er, is) {
        if (er) {
          throw er
        }
        t.notOk(is)
        t.end()
      })
    })
  }

  t.test('noent async', function (t) {
    isexe(noent, options, function (er, is) {
      t.ok(er)
      t.notOk(is)
      t.end()
    })
  })

  t.test('noent ignore async', function (t) {
    isexe(noent, optionsIgnore, function (er, is) {
      if (er) {
        throw er
      }
      t.notOk(is)
      t.end()
    })
  })

  t.test('directory is not executable', function (t) {
    isexe(__dirname, options, function (er, is) {
      if (er) {
        throw er
      }
      t.notOk(is)
      t.end()
    })
  })

  t.end()
}
";
        
        $__internal_cc350d0ede44378007cf7f80227499ed304d60b0202d7c2b88a84412d7a0e70d->leave($__internal_cc350d0ede44378007cf7f80227499ed304d60b0202d7c2b88a84412d7a0e70d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isexe/test/basic.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var t = require('tap')
var fs = require('fs')
var path = require('path')
var fixture = path.resolve(__dirname, 'fixtures')
var meow = fixture + '/meow.cat'
var mine = fixture + '/mine.cat'
var ours = fixture + '/ours.cat'
var fail = fixture + '/fail.false'
var noent = fixture + '/enoent.exe'
var mkdirp = require('mkdirp')
var rimraf = require('rimraf')

var isWindows = process.platform === 'win32'
var hasAccess = typeof fs.access === 'function'
var winSkip = isWindows && 'windows'
var accessSkip = !hasAccess && 'no fs.access function'
var hasPromise = typeof Promise === 'function'
var promiseSkip = !hasPromise && 'no global Promise'

function reset () {
  delete require.cache[require.resolve('../')]
  return require('../')
}

t.test('setup fixtures', function (t) {
  rimraf.sync(fixture)
  mkdirp.sync(fixture)
  fs.writeFileSync(meow, '#!/usr/bin/env cat\\nmeow\\n')
  fs.chmodSync(meow, parseInt('0755', 8))
  fs.writeFileSync(fail, '#!/usr/bin/env false\\n')
  fs.chmodSync(fail, parseInt('0644', 8))
  fs.writeFileSync(mine, '#!/usr/bin/env cat\\nmine\\n')
  fs.chmodSync(mine, parseInt('0744', 8))
  fs.writeFileSync(ours, '#!/usr/bin/env cat\\nours\\n')
  fs.chmodSync(ours, parseInt('0754', 8))
  t.end()
})

t.test('promise', { skip: promiseSkip }, function (t) {
  var isexe = reset()
  t.test('meow async', function (t) {
    isexe(meow).then(function (is) {
      t.ok(is)
      t.end()
    })
  })
  t.test('fail async', function (t) {
    isexe(fail).then(function (is) {
      t.notOk(is)
      t.end()
    })
  })
  t.test('noent async', function (t) {
    isexe(noent).catch(function (er) {
      t.ok(er)
      t.end()
    })
  })
  t.test('noent ignore async', function (t) {
    isexe(noent, { ignoreErrors: true }).then(function (is) {
      t.notOk(is)
      t.end()
    })
  })
  t.end()
})

t.test('no promise', function (t) {
  global.Promise = null
  var isexe = reset()
  t.throws('try to meow a promise', function () {
    isexe(meow)
  })
  t.end()
})

t.test('access', { skip: accessSkip || winSkip }, function (t) {
  runTest(t)
})

t.test('mode', { skip: winSkip }, function (t) {
  delete fs.access
  delete fs.accessSync
  var isexe = reset()
  t.ok(isexe.sync(ours, { uid: 0, gid: 0 }))
  t.ok(isexe.sync(mine, { uid: 0, gid: 0 }))
  runTest(t)
})

t.test('windows', function (t) {
  global.TESTING_WINDOWS = true
  var pathExt = '.EXE;.CAT;.CMD;.COM'
  t.test('pathExt option', function (t) {
    runTest(t, { pathExt: '.EXE;.CAT;.CMD;.COM' })
  })
  t.test('pathExt env', function (t) {
    process.env.PATHEXT = pathExt
    runTest(t)
  })
  t.test('no pathExt', function (t) {
    // with a pathExt of '', any filename is fine.
    // so the \"fail\" one would still pass.
    runTest(t, { pathExt: '', skipFail: true })
  })
  t.test('pathext with empty entry', function (t) {
    // with a pathExt of '', any filename is fine.
    // so the \"fail\" one would still pass.
    runTest(t, { pathExt: ';' + pathExt, skipFail: true })
  })
  t.end()
})

t.test('cleanup', function (t) {
  rimraf.sync(fixture)
  t.end()
})

function runTest (t, options) {
  var isexe = reset()

  var optionsIgnore = Object.create(options || {})
  optionsIgnore.ignoreErrors = true

  if (!options || !options.skipFail) {
    t.notOk(isexe.sync(fail, options))
  }
  t.notOk(isexe.sync(noent, optionsIgnore))
  if (!options) {
    t.ok(isexe.sync(meow))
  } else {
    t.ok(isexe.sync(meow, options))
  }

  t.ok(isexe.sync(mine, options))
  t.ok(isexe.sync(ours, options))
  t.throws(function () {
    isexe.sync(noent, options)
  })

  t.test('meow async', function (t) {
    if (!options) {
      isexe(meow, function (er, is) {
        if (er) {
          throw er
        }
        t.ok(is)
        t.end()
      })
    } else {
      isexe(meow, options, function (er, is) {
        if (er) {
          throw er
        }
        t.ok(is)
        t.end()
      })
    }
  })

  t.test('mine async', function (t) {
    isexe(mine, options, function (er, is) {
      if (er) {
        throw er
      }
      t.ok(is)
      t.end()
    })
  })

  t.test('ours async', function (t) {
    isexe(ours, options, function (er, is) {
      if (er) {
        throw er
      }
      t.ok(is)
      t.end()
    })
  })

  if (!options || !options.skipFail) {
    t.test('fail async', function (t) {
      isexe(fail, options, function (er, is) {
        if (er) {
          throw er
        }
        t.notOk(is)
        t.end()
      })
    })
  }

  t.test('noent async', function (t) {
    isexe(noent, options, function (er, is) {
      t.ok(er)
      t.notOk(is)
      t.end()
    })
  })

  t.test('noent ignore async', function (t) {
    isexe(noent, optionsIgnore, function (er, is) {
      if (er) {
        throw er
      }
      t.notOk(is)
      t.end()
    })
  })

  t.test('directory is not executable', function (t) {
    isexe(__dirname, options, function (er, is) {
      if (er) {
        throw er
      }
      t.notOk(is)
      t.end()
    })
  })

  t.end()
}
", "node_modules/isexe/test/basic.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isexe/test/basic.js");
    }
}
