<?php

/* node_modules/public-encrypt/test/index.js */
class __TwigTemplate_a37dbb59e0a53a6d884d3a57870d91005e5946a8c0675f9da8ea0b6a5f6d251f extends Twig_Template
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
        $__internal_e7f9d73fdb771ddfd4c573a16a6ab8a83d742a160f3fb4a4f9d7ca1d592bbbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f9d73fdb771ddfd4c573a16a6ab8a83d742a160f3fb4a4f9d7ca1d592bbbd4->enter($__internal_e7f9d73fdb771ddfd4c573a16a6ab8a83d742a160f3fb4a4f9d7ca1d592bbbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/public-encrypt/test/index.js"));

        // line 1
        echo "var test = require('tape');
var fs = require('fs');
var constants = require('constants');
var parseKeys = require('parse-asn1');
require('./nodeTests');
var priv1024 = fs.readFileSync(__dirname + '/rsa.1024.priv');
var rsa1024 = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.pub')
};
var rsa1024priv = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.priv')
};
var rsa1024 = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.pub')
};
var rsa2028 = {
  private: fs.readFileSync(__dirname + '/rsa.2028.priv'),
  public: fs.readFileSync(__dirname + '/rsa.2028.pub')
};
var nonrsa1024 = {
  private: fs.readFileSync(__dirname + '/1024.priv'),
  public: fs.readFileSync(__dirname + '/1024.pub')
};
var nonrsa1024str = {
  private: fs.readFileSync(__dirname + '/1024.priv').toString(),
  public: fs.readFileSync(__dirname + '/1024.pub').toString()
};
var pass1024 = {
  private: {
    passphrase: 'fooo',
    key:fs.readFileSync(__dirname + '/pass.1024.priv')
  },
  public: fs.readFileSync(__dirname + '/pass.1024.pub')
};
var pass2028 = {
  private: {
    passphrase: 'password',
    key:fs.readFileSync(__dirname + '/rsa.pass.priv')
  },
  public: fs.readFileSync(__dirname + '/rsa.pass.pub')
};

var nodeCrypto = require('../');
var myCrypto = require('../browser');
function _testIt(keys, message, t) {
  var pub = keys.public;
  var priv = keys.private;
  t.test(message.toString(), function (t) {
    t.plan(8);

    var myEnc = myCrypto.publicEncrypt(pub, message);
    var nodeEnc = nodeCrypto.publicEncrypt(pub, message);
    t.equals(myCrypto.privateDecrypt(priv, myEnc).toString('hex'), message.toString('hex'), 'my decrypter my message');
    t.equals(myCrypto.privateDecrypt(priv, nodeEnc).toString('hex'), message.toString('hex'), 'my decrypter node\\'s message');
    t.equals(nodeCrypto.privateDecrypt(priv, myEnc).toString('hex'), message.toString('hex'), 'node decrypter my message');
    t.equals(nodeCrypto.privateDecrypt(priv, nodeEnc).toString('hex'), message.toString('hex'), 'node decrypter node\\'s message');
    myEnc = myCrypto.privateEncrypt(priv, message);
    nodeEnc = nodeCrypto.privateEncrypt(priv, message);
    t.equals(myCrypto.publicDecrypt(pub, myEnc).toString('hex'), message.toString('hex'), 'reverse methods my decrypter my message');
    t.equals(myCrypto.publicDecrypt(pub, nodeEnc).toString('hex'), message.toString('hex'), 'reverse methods my decrypter node\\'s message');
    t.equals(nodeCrypto.publicDecrypt(pub, myEnc).toString('hex'), message.toString('hex'), 'reverse methods node decrypter my message');
    t.equals(nodeCrypto.publicDecrypt(pub, nodeEnc).toString('hex'), message.toString('hex'), 'reverse methods node decrypter node\\'s message');

  });
}
function testIt(keys, message, t) {
  _testIt(keys, message, t);
  _testIt(paddingObject(keys, 1), Buffer.concat([message, new Buffer(' with RSA_PKCS1_PADDING')]), t);
  var parsedKey = parseKeys(keys.public);
  var k = parsedKey.modulus.byteLength();
  var zBuf = new Buffer(k);
  zBuf.fill(0);
  var msg = Buffer.concat([zBuf, message, new Buffer(' with no padding')]).slice(-k);
  _testIt(paddingObject(keys, 3), msg, t);
}
function paddingObject(keys, padding) {
  return {
    public: addPadding(keys.public, padding),
    private: addPadding(keys.private, padding)
  };
}
function addPadding(key, padding) {
  if (typeof key === 'string' || Buffer.isBuffer(key)) {
    return {
      key: key,
      padding: padding
    };
  }
  var out = {
    key: key.key,
    padding:padding
  };
  if ('passphrase' in key) {
    out.passphrase = key.passphrase;
  }
  return out;
}
function testRun(i) {
  test('run ' + i, function (t) {
    testIt(rsa1024priv, new Buffer('1024 2 private keys'), t);
    testIt(rsa1024, new Buffer('1024 keys'), t);
    testIt(rsa2028, new Buffer('2028 keys'), t);
    testIt(nonrsa1024, new Buffer('1024 keys non-rsa key'), t);
    testIt(pass1024, new Buffer('1024 keys and password'), t);
    testIt(nonrsa1024str, new Buffer('1024 keys non-rsa key as a string'), t);
    testIt(pass2028, new Buffer('2028 rsa key with variant passwords'), t);
  });
}

var i = 0;
var num = 20;
while (++i <= 20) {
  testRun(i);
}
";
        
        $__internal_e7f9d73fdb771ddfd4c573a16a6ab8a83d742a160f3fb4a4f9d7ca1d592bbbd4->leave($__internal_e7f9d73fdb771ddfd4c573a16a6ab8a83d742a160f3fb4a4f9d7ca1d592bbbd4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/public-encrypt/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var fs = require('fs');
var constants = require('constants');
var parseKeys = require('parse-asn1');
require('./nodeTests');
var priv1024 = fs.readFileSync(__dirname + '/rsa.1024.priv');
var rsa1024 = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.pub')
};
var rsa1024priv = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.priv')
};
var rsa1024 = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.pub')
};
var rsa2028 = {
  private: fs.readFileSync(__dirname + '/rsa.2028.priv'),
  public: fs.readFileSync(__dirname + '/rsa.2028.pub')
};
var nonrsa1024 = {
  private: fs.readFileSync(__dirname + '/1024.priv'),
  public: fs.readFileSync(__dirname + '/1024.pub')
};
var nonrsa1024str = {
  private: fs.readFileSync(__dirname + '/1024.priv').toString(),
  public: fs.readFileSync(__dirname + '/1024.pub').toString()
};
var pass1024 = {
  private: {
    passphrase: 'fooo',
    key:fs.readFileSync(__dirname + '/pass.1024.priv')
  },
  public: fs.readFileSync(__dirname + '/pass.1024.pub')
};
var pass2028 = {
  private: {
    passphrase: 'password',
    key:fs.readFileSync(__dirname + '/rsa.pass.priv')
  },
  public: fs.readFileSync(__dirname + '/rsa.pass.pub')
};

var nodeCrypto = require('../');
var myCrypto = require('../browser');
function _testIt(keys, message, t) {
  var pub = keys.public;
  var priv = keys.private;
  t.test(message.toString(), function (t) {
    t.plan(8);

    var myEnc = myCrypto.publicEncrypt(pub, message);
    var nodeEnc = nodeCrypto.publicEncrypt(pub, message);
    t.equals(myCrypto.privateDecrypt(priv, myEnc).toString('hex'), message.toString('hex'), 'my decrypter my message');
    t.equals(myCrypto.privateDecrypt(priv, nodeEnc).toString('hex'), message.toString('hex'), 'my decrypter node\\'s message');
    t.equals(nodeCrypto.privateDecrypt(priv, myEnc).toString('hex'), message.toString('hex'), 'node decrypter my message');
    t.equals(nodeCrypto.privateDecrypt(priv, nodeEnc).toString('hex'), message.toString('hex'), 'node decrypter node\\'s message');
    myEnc = myCrypto.privateEncrypt(priv, message);
    nodeEnc = nodeCrypto.privateEncrypt(priv, message);
    t.equals(myCrypto.publicDecrypt(pub, myEnc).toString('hex'), message.toString('hex'), 'reverse methods my decrypter my message');
    t.equals(myCrypto.publicDecrypt(pub, nodeEnc).toString('hex'), message.toString('hex'), 'reverse methods my decrypter node\\'s message');
    t.equals(nodeCrypto.publicDecrypt(pub, myEnc).toString('hex'), message.toString('hex'), 'reverse methods node decrypter my message');
    t.equals(nodeCrypto.publicDecrypt(pub, nodeEnc).toString('hex'), message.toString('hex'), 'reverse methods node decrypter node\\'s message');

  });
}
function testIt(keys, message, t) {
  _testIt(keys, message, t);
  _testIt(paddingObject(keys, 1), Buffer.concat([message, new Buffer(' with RSA_PKCS1_PADDING')]), t);
  var parsedKey = parseKeys(keys.public);
  var k = parsedKey.modulus.byteLength();
  var zBuf = new Buffer(k);
  zBuf.fill(0);
  var msg = Buffer.concat([zBuf, message, new Buffer(' with no padding')]).slice(-k);
  _testIt(paddingObject(keys, 3), msg, t);
}
function paddingObject(keys, padding) {
  return {
    public: addPadding(keys.public, padding),
    private: addPadding(keys.private, padding)
  };
}
function addPadding(key, padding) {
  if (typeof key === 'string' || Buffer.isBuffer(key)) {
    return {
      key: key,
      padding: padding
    };
  }
  var out = {
    key: key.key,
    padding:padding
  };
  if ('passphrase' in key) {
    out.passphrase = key.passphrase;
  }
  return out;
}
function testRun(i) {
  test('run ' + i, function (t) {
    testIt(rsa1024priv, new Buffer('1024 2 private keys'), t);
    testIt(rsa1024, new Buffer('1024 keys'), t);
    testIt(rsa2028, new Buffer('2028 keys'), t);
    testIt(nonrsa1024, new Buffer('1024 keys non-rsa key'), t);
    testIt(pass1024, new Buffer('1024 keys and password'), t);
    testIt(nonrsa1024str, new Buffer('1024 keys non-rsa key as a string'), t);
    testIt(pass2028, new Buffer('2028 rsa key with variant passwords'), t);
  });
}

var i = 0;
var num = 20;
while (++i <= 20) {
  testRun(i);
}
", "node_modules/public-encrypt/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/public-encrypt/test/index.js");
    }
}
