<?php

/* node_modules/fsevents/node_modules/tweetnacl/package.json */
class __TwigTemplate_156f34343009fceeff39605356fd6a10e610275ceb8d27794e677c267c684c7f extends Twig_Template
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
        $__internal_424cd9e7fd6319fe4661226383a263b4ad017657a47bd373c435804d981a92f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424cd9e7fd6319fe4661226383a263b4ad017657a47bd373c435804d981a92f8->enter($__internal_424cd9e7fd6319fe4661226383a263b4ad017657a47bd373c435804d981a92f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tweetnacl/package.json"));

        // line 1
        echo "{
  \"_args\": [
    [
      \"tweetnacl@0.14.5\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"tweetnacl@0.14.5\",
  \"_id\": \"tweetnacl@0.14.5\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-WuaBd/GS1EViadEIr6k/+HQ/T2Q=\",
  \"_location\": \"/tweetnacl\",
  \"_optional\": true,
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"tweetnacl@0.14.5\",
    \"name\": \"tweetnacl\",
    \"escapedName\": \"tweetnacl\",
    \"rawSpec\": \"0.14.5\",
    \"saveSpec\": null,
    \"fetchSpec\": \"0.14.5\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/tweetnacl/-/tweetnacl-0.14.5.tgz\",
  \"_spec\": \"0.14.5\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"author\": {
    \"name\": \"TweetNaCl-js contributors\"
  },
  \"browser\": {
    \"buffer\": false,
    \"crypto\": false
  },
  \"bugs\": {
    \"url\": \"https://github.com/dchest/tweetnacl-js/issues\"
  },
  \"description\": \"Port of TweetNaCl cryptographic library to JavaScript\",
  \"devDependencies\": {
    \"browserify\": \"^13.0.0\",
    \"eslint\": \"^2.2.0\",
    \"faucet\": \"^0.0.1\",
    \"tap-browser-color\": \"^0.1.2\",
    \"tape\": \"^4.4.0\",
    \"tape-run\": \"^2.1.3\",
    \"tweetnacl-util\": \"^0.13.3\",
    \"uglify-js\": \"^2.6.1\"
  },
  \"directories\": {
    \"test\": \"test\"
  },
  \"homepage\": \"https://tweetnacl.js.org\",
  \"keywords\": [
    \"crypto\",
    \"cryptography\",
    \"curve25519\",
    \"ed25519\",
    \"encrypt\",
    \"hash\",
    \"key\",
    \"nacl\",
    \"poly1305\",
    \"public\",
    \"salsa20\",
    \"signatures\"
  ],
  \"license\": \"Unlicense\",
  \"main\": \"nacl-fast.js\",
  \"name\": \"tweetnacl\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/dchest/tweetnacl-js.git\"
  },
  \"scripts\": {
    \"bench\": \"node test/benchmark/bench.js\",
    \"build\": \"uglifyjs nacl.js -c -m -o nacl.min.js && uglifyjs nacl-fast.js -c -m -o nacl-fast.min.js\",
    \"build-test-browser\": \"browserify test/browser/init.js test/*.js | uglifyjs -c -m -o test/browser/_bundle.js 2>/dev/null && browserify test/browser/init.js test/*.quick.js | uglifyjs -c -m -o test/browser/_bundle-quick.js 2>/dev/null\",
    \"lint\": \"eslint nacl.js nacl-fast.js test/*.js test/benchmark/*.js\",
    \"test\": \"npm run test-node-all && npm run test-browser\",
    \"test-browser\": \"NACL_SRC=\${NACL_SRC:='nacl.min.js'} && npm run build-test-browser && cat \$NACL_SRC test/browser/_bundle.js | tape-run | faucet\",
    \"test-node\": \"tape test/*.js | faucet\",
    \"test-node-all\": \"make -C test/c && tape test/*.js test/c/*.js | faucet\"
  },
  \"types\": \"nacl.d.ts\",
  \"version\": \"0.14.5\"
}
";
        
        $__internal_424cd9e7fd6319fe4661226383a263b4ad017657a47bd373c435804d981a92f8->leave($__internal_424cd9e7fd6319fe4661226383a263b4ad017657a47bd373c435804d981a92f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tweetnacl/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"_args\": [
    [
      \"tweetnacl@0.14.5\",
      \"/Users/eshanker/Code/fsevents\"
    ]
  ],
  \"_from\": \"tweetnacl@0.14.5\",
  \"_id\": \"tweetnacl@0.14.5\",
  \"_inBundle\": false,
  \"_integrity\": \"sha1-WuaBd/GS1EViadEIr6k/+HQ/T2Q=\",
  \"_location\": \"/tweetnacl\",
  \"_optional\": true,
  \"_phantomChildren\": {},
  \"_requested\": {
    \"type\": \"version\",
    \"registry\": true,
    \"raw\": \"tweetnacl@0.14.5\",
    \"name\": \"tweetnacl\",
    \"escapedName\": \"tweetnacl\",
    \"rawSpec\": \"0.14.5\",
    \"saveSpec\": null,
    \"fetchSpec\": \"0.14.5\"
  },
  \"_requiredBy\": [],
  \"_resolved\": \"https://registry.npmjs.org/tweetnacl/-/tweetnacl-0.14.5.tgz\",
  \"_spec\": \"0.14.5\",
  \"_where\": \"/Users/eshanker/Code/fsevents\",
  \"author\": {
    \"name\": \"TweetNaCl-js contributors\"
  },
  \"browser\": {
    \"buffer\": false,
    \"crypto\": false
  },
  \"bugs\": {
    \"url\": \"https://github.com/dchest/tweetnacl-js/issues\"
  },
  \"description\": \"Port of TweetNaCl cryptographic library to JavaScript\",
  \"devDependencies\": {
    \"browserify\": \"^13.0.0\",
    \"eslint\": \"^2.2.0\",
    \"faucet\": \"^0.0.1\",
    \"tap-browser-color\": \"^0.1.2\",
    \"tape\": \"^4.4.0\",
    \"tape-run\": \"^2.1.3\",
    \"tweetnacl-util\": \"^0.13.3\",
    \"uglify-js\": \"^2.6.1\"
  },
  \"directories\": {
    \"test\": \"test\"
  },
  \"homepage\": \"https://tweetnacl.js.org\",
  \"keywords\": [
    \"crypto\",
    \"cryptography\",
    \"curve25519\",
    \"ed25519\",
    \"encrypt\",
    \"hash\",
    \"key\",
    \"nacl\",
    \"poly1305\",
    \"public\",
    \"salsa20\",
    \"signatures\"
  ],
  \"license\": \"Unlicense\",
  \"main\": \"nacl-fast.js\",
  \"name\": \"tweetnacl\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+https://github.com/dchest/tweetnacl-js.git\"
  },
  \"scripts\": {
    \"bench\": \"node test/benchmark/bench.js\",
    \"build\": \"uglifyjs nacl.js -c -m -o nacl.min.js && uglifyjs nacl-fast.js -c -m -o nacl-fast.min.js\",
    \"build-test-browser\": \"browserify test/browser/init.js test/*.js | uglifyjs -c -m -o test/browser/_bundle.js 2>/dev/null && browserify test/browser/init.js test/*.quick.js | uglifyjs -c -m -o test/browser/_bundle-quick.js 2>/dev/null\",
    \"lint\": \"eslint nacl.js nacl-fast.js test/*.js test/benchmark/*.js\",
    \"test\": \"npm run test-node-all && npm run test-browser\",
    \"test-browser\": \"NACL_SRC=\${NACL_SRC:='nacl.min.js'} && npm run build-test-browser && cat \$NACL_SRC test/browser/_bundle.js | tape-run | faucet\",
    \"test-node\": \"tape test/*.js | faucet\",
    \"test-node-all\": \"make -C test/c && tape test/*.js test/c/*.js | faucet\"
  },
  \"types\": \"nacl.d.ts\",
  \"version\": \"0.14.5\"
}
", "node_modules/fsevents/node_modules/tweetnacl/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tweetnacl/package.json");
    }
}
