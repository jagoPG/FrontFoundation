<?php

/* node_modules/interpret/index.js */
class __TwigTemplate_43fc3e92b7e8b752afa7e970556bf7e31b50ece56b33628be5436e00d66aff9e extends Twig_Template
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
        $__internal_87c8f548edb1526b619dfc9e1ae848f4b1b785a840c7b7d26069c929a869bbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c8f548edb1526b619dfc9e1ae848f4b1b785a840c7b7d26069c929a869bbee->enter($__internal_87c8f548edb1526b619dfc9e1ae848f4b1b785a840c7b7d26069c929a869bbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/interpret/index.js"));

        // line 1
        echo "const extensions = {
  '.babel.js': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          // register on .js extension due to https://github.com/joyent/node/blob/v0.12.0/lib/module.js#L353
          // which only captures the final extension (.babel.js -> .js)
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    }
  ],
  '.buble.js': 'buble/register',
  '.cirru': 'cirru-script/lib/register',
  '.cjsx': 'node-cjsx/register',
  '.co': 'coco',
  '.coffee': ['coffee-script/register', 'coffee-script', 'coffeescript/register', 'coffeescript'],
  '.coffee.md': ['coffee-script/register', 'coffee-script', 'coffeescript/register', 'coffeescript'],
  '.csv': 'require-csv',
  '.eg': 'earlgrey/register',
  '.iced': ['iced-coffee-script/register', 'iced-coffee-script'],
  '.iced.md': 'iced-coffee-script/register',
  '.ini': 'require-ini',
  '.js': null,
  '.json': null,
  '.json5': 'json5/lib/require',
  '.jsx': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      },
    },
    {
      module: 'node-jsx',
      register: function (module) {
        module.install({
          extension: '.jsx',
          harmony: true
        });
      }
    }
  ],
  '.litcoffee': ['coffee-script/register', 'coffee-script', 'coffeescript/register', 'coffeescript'],
  '.liticed': 'iced-coffee-script/register',
  '.ls': ['livescript', 'LiveScript'],
  '.node': null,
  '.toml': {
    module: 'toml-require',
    register: function (module) {
      module.install();
    }
  },
  '.ts': ['ts-node/register', 'typescript-node/register', 'typescript-register', 'typescript-require'],
  '.tsx': ['ts-node/register', 'typescript-node/register'],
  '.wisp': 'wisp/engine/node',
  '.xml': 'require-xml',
  '.yaml': 'require-yaml',
  '.yml': 'require-yaml'
};

const jsVariantExtensions = [
  '.js',
  '.babel.js',
  '.buble.js',
  '.cirru',
  '.cjsx',
  '.co',
  '.coffee',
  '.coffee.md',
  '.eg',
  '.iced',
  '.iced.md',
  '.jsx',
  '.litcoffee',
  '.liticed',
  '.ls',
  '.ts',
  '.wisp'
];

module.exports = {
  extensions: extensions,
  jsVariants: jsVariantExtensions.reduce(function (result, ext) {
    result[ext] = extensions[ext];
    return result;
  }, {})
};
";
        
        $__internal_87c8f548edb1526b619dfc9e1ae848f4b1b785a840c7b7d26069c929a869bbee->leave($__internal_87c8f548edb1526b619dfc9e1ae848f4b1b785a840c7b7d26069c929a869bbee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/interpret/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("const extensions = {
  '.babel.js': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          // register on .js extension due to https://github.com/joyent/node/blob/v0.12.0/lib/module.js#L353
          // which only captures the final extension (.babel.js -> .js)
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.js'
        });
      }
    }
  ],
  '.buble.js': 'buble/register',
  '.cirru': 'cirru-script/lib/register',
  '.cjsx': 'node-cjsx/register',
  '.co': 'coco',
  '.coffee': ['coffee-script/register', 'coffee-script', 'coffeescript/register', 'coffeescript'],
  '.coffee.md': ['coffee-script/register', 'coffee-script', 'coffeescript/register', 'coffeescript'],
  '.csv': 'require-csv',
  '.eg': 'earlgrey/register',
  '.iced': ['iced-coffee-script/register', 'iced-coffee-script'],
  '.iced.md': 'iced-coffee-script/register',
  '.ini': 'require-ini',
  '.js': null,
  '.json': null,
  '.json5': 'json5/lib/require',
  '.jsx': [
    {
      module: 'babel-register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel-core/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      }
    },
    {
      module: 'babel/register',
      register: function (module) {
        module({
          extensions: '.jsx'
        });
      },
    },
    {
      module: 'node-jsx',
      register: function (module) {
        module.install({
          extension: '.jsx',
          harmony: true
        });
      }
    }
  ],
  '.litcoffee': ['coffee-script/register', 'coffee-script', 'coffeescript/register', 'coffeescript'],
  '.liticed': 'iced-coffee-script/register',
  '.ls': ['livescript', 'LiveScript'],
  '.node': null,
  '.toml': {
    module: 'toml-require',
    register: function (module) {
      module.install();
    }
  },
  '.ts': ['ts-node/register', 'typescript-node/register', 'typescript-register', 'typescript-require'],
  '.tsx': ['ts-node/register', 'typescript-node/register'],
  '.wisp': 'wisp/engine/node',
  '.xml': 'require-xml',
  '.yaml': 'require-yaml',
  '.yml': 'require-yaml'
};

const jsVariantExtensions = [
  '.js',
  '.babel.js',
  '.buble.js',
  '.cirru',
  '.cjsx',
  '.co',
  '.coffee',
  '.coffee.md',
  '.eg',
  '.iced',
  '.iced.md',
  '.jsx',
  '.litcoffee',
  '.liticed',
  '.ls',
  '.ts',
  '.wisp'
];

module.exports = {
  extensions: extensions,
  jsVariants: jsVariantExtensions.reduce(function (result, ext) {
    result[ext] = extensions[ext];
    return result;
  }, {})
};
", "node_modules/interpret/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/interpret/index.js");
    }
}
