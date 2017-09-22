<?php

/* node_modules/parse-asn1/test/index.js */
class __TwigTemplate_d5e663472d91156fe5486d4aa2725cdab1cea936d6465a08e1ecf19e6b148ce3 extends Twig_Template
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
        $__internal_82e7cd73ba2b32ee1ff7c842de28b616f8f9115b5a9233e605e147e93b6c81b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e7cd73ba2b32ee1ff7c842de28b616f8f9115b5a9233e605e147e93b6c81b1->enter($__internal_82e7cd73ba2b32ee1ff7c842de28b616f8f9115b5a9233e605e147e93b6c81b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parse-asn1/test/index.js"));

        // line 1
        echo "var test = require('tape')
var fs = require('fs')
var parseKey = require('../')
var rsa1024 = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.pub')
}
var rsa2028 = {
  private: fs.readFileSync(__dirname + '/rsa.2028.priv'),
  public: fs.readFileSync(__dirname + '/rsa.2028.pub')
}
var nonrsa1024 = {
  private: fs.readFileSync(__dirname + '/1024.priv'),
  public: fs.readFileSync(__dirname + '/1024.pub')
}
var pass1024 = {
  private: {
    passphrase: 'fooo',
    key: fs.readFileSync(__dirname + '/pass.1024.priv')
  },
  public: fs.readFileSync(__dirname + '/pass.1024.pub')
}
var ec = {
  private: fs.readFileSync(__dirname + '/ec.priv'),
  public: fs.readFileSync(__dirname + '/ec.pub')
}
var ecpass = {
  private: {
    key: fs.readFileSync(__dirname + '/ec.pass.priv'),
    passphrase: 'bard'
  },
  public: fs.readFileSync(__dirname + '/ec.pub')
}
var dsa = {
  private: fs.readFileSync(__dirname + '/dsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/dsa.1024.pub')
}
var dsa2 = {
  private: fs.readFileSync(__dirname + '/dsa.2048.priv'),
  public: fs.readFileSync(__dirname + '/dsa.2048.pub')
}
var dsapass = {
  private: {
    key: fs.readFileSync(__dirname + '/pass.dsa.1024.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass.dsa.1024.pub')
}
var dsapass2 = {
  private: {
    key: fs.readFileSync(__dirname + '/pass2.dsa.1024.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass2.dsa.1024.pub')
}
var rsapass = {
  private: {
    key: fs.readFileSync(__dirname + '/pass.rsa.1024.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass.rsa.1024.pub')
}
var rsapass2 = {
  private: {
    key: fs.readFileSync(__dirname + '/pass.rsa.2028.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass.rsa.2028.pub')
}
var cert = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/node.cert')
}
var i = 0
function testIt (keys) {
  test('key ' + (++i), function (t) {
    t.plan(2)
    t.ok(parseKey(keys.public), 'public key')
    t.ok(parseKey(keys.private), 'private key')
  })
}

testIt(dsa)
testIt(dsa2)
testIt(rsa1024)
testIt(ec)
testIt(rsa2028)
testIt(nonrsa1024)
testIt(ecpass)
testIt(dsapass)
testIt(dsapass2)
testIt(rsapass)
testIt(rsapass2)
testIt(pass1024)
testIt(pass1024)
testIt(cert)
";
        
        $__internal_82e7cd73ba2b32ee1ff7c842de28b616f8f9115b5a9233e605e147e93b6c81b1->leave($__internal_82e7cd73ba2b32ee1ff7c842de28b616f8f9115b5a9233e605e147e93b6c81b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parse-asn1/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var fs = require('fs')
var parseKey = require('../')
var rsa1024 = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/rsa.1024.pub')
}
var rsa2028 = {
  private: fs.readFileSync(__dirname + '/rsa.2028.priv'),
  public: fs.readFileSync(__dirname + '/rsa.2028.pub')
}
var nonrsa1024 = {
  private: fs.readFileSync(__dirname + '/1024.priv'),
  public: fs.readFileSync(__dirname + '/1024.pub')
}
var pass1024 = {
  private: {
    passphrase: 'fooo',
    key: fs.readFileSync(__dirname + '/pass.1024.priv')
  },
  public: fs.readFileSync(__dirname + '/pass.1024.pub')
}
var ec = {
  private: fs.readFileSync(__dirname + '/ec.priv'),
  public: fs.readFileSync(__dirname + '/ec.pub')
}
var ecpass = {
  private: {
    key: fs.readFileSync(__dirname + '/ec.pass.priv'),
    passphrase: 'bard'
  },
  public: fs.readFileSync(__dirname + '/ec.pub')
}
var dsa = {
  private: fs.readFileSync(__dirname + '/dsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/dsa.1024.pub')
}
var dsa2 = {
  private: fs.readFileSync(__dirname + '/dsa.2048.priv'),
  public: fs.readFileSync(__dirname + '/dsa.2048.pub')
}
var dsapass = {
  private: {
    key: fs.readFileSync(__dirname + '/pass.dsa.1024.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass.dsa.1024.pub')
}
var dsapass2 = {
  private: {
    key: fs.readFileSync(__dirname + '/pass2.dsa.1024.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass2.dsa.1024.pub')
}
var rsapass = {
  private: {
    key: fs.readFileSync(__dirname + '/pass.rsa.1024.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass.rsa.1024.pub')
}
var rsapass2 = {
  private: {
    key: fs.readFileSync(__dirname + '/pass.rsa.2028.priv'),
    passphrase: 'password'
  },
  public: fs.readFileSync(__dirname + '/pass.rsa.2028.pub')
}
var cert = {
  private: fs.readFileSync(__dirname + '/rsa.1024.priv'),
  public: fs.readFileSync(__dirname + '/node.cert')
}
var i = 0
function testIt (keys) {
  test('key ' + (++i), function (t) {
    t.plan(2)
    t.ok(parseKey(keys.public), 'public key')
    t.ok(parseKey(keys.private), 'private key')
  })
}

testIt(dsa)
testIt(dsa2)
testIt(rsa1024)
testIt(ec)
testIt(rsa2028)
testIt(nonrsa1024)
testIt(ecpass)
testIt(dsapass)
testIt(dsapass2)
testIt(rsapass)
testIt(rsapass2)
testIt(pass1024)
testIt(pass1024)
testIt(cert)
", "node_modules/parse-asn1/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parse-asn1/test/index.js");
    }
}
