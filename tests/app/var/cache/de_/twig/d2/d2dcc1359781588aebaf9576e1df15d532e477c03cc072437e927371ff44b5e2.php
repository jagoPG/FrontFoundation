<?php

/* node_modules/uglify-js/node_modules/yargs/lib/validation.js */
class __TwigTemplate_a1b5f033177370d9c86a5b7e3cd1acac249d2eeef68e37b67282dea9d8f03615 extends Twig_Template
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
        $__internal_33485a120570a9410ff0cc41a3680244c26e9fb50a5338e7675671700eb69d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33485a120570a9410ff0cc41a3680244c26e9fb50a5338e7675671700eb69d11->enter($__internal_33485a120570a9410ff0cc41a3680244c26e9fb50a5338e7675671700eb69d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-js/node_modules/yargs/lib/validation.js"));

        // line 1
        echo "// validation-type-stuff, missing params,
// bad implications, custom checks.
module.exports = function (yargs, usage) {
  var self = {}

  // validate appropriate # of non-option
  // arguments were provided, i.e., '_'.
  self.nonOptionCount = function (argv) {
    var demanded = yargs.getDemanded()

    if (demanded._ && argv._.length < demanded._.count) {
      if (demanded._.msg !== undefined) {
        usage.fail(demanded._.msg)
      } else {
        usage.fail('Not enough non-option arguments: got '
          + argv._.length + ', need at least ' + demanded._.count
        )
      }
    }
  }

  // make sure that any args that require an
  // value (--foo=bar), have a value.
  self.missingArgumentValue = function (argv) {
    var options = yargs.getOptions(),
      defaultValues = [true, false, '']

    if (options.requiresArg.length > 0) {
      var missingRequiredArgs = []

      options.requiresArg.forEach(function (key) {
        var value = argv[key]

        // if a value is explicitly requested,
        // flag argument as missing if it does not
        // look like foo=bar was entered.
        if (~defaultValues.indexOf(value)
        || (Array.isArray(value) && !value.length)) {
          missingRequiredArgs.push(key)
        }
      })

      if (missingRequiredArgs.length === 1) {
        usage.fail('Missing argument value: ' + missingRequiredArgs[0])
      } else if (missingRequiredArgs.length > 1) {
        var message = 'Missing argument values: ' + missingRequiredArgs.join(', ')
        usage.fail(message)
      }
    }
  }

  // make sure all the required arguments are present.
  self.requiredArguments = function (argv) {
    var demanded = yargs.getDemanded(),
      missing = null

    Object.keys(demanded).forEach(function (key) {
      if (!argv.hasOwnProperty(key)) {
        missing = missing || {}
        missing[key] = demanded[key]
      }
    })

    if (missing) {
      var customMsgs = []
      Object.keys(missing).forEach(function (key) {
        var msg = missing[key].msg
        if (msg && customMsgs.indexOf(msg) < 0) {
          customMsgs.push(msg)
        }
      })

      var customMsg = customMsgs.length ? '\\n' + customMsgs.join('\\n') : ''
      usage.fail('Missing required arguments: ' + Object.keys(missing).join(', ') + customMsg)
    }
  }

  // check for unknown arguments (strict-mode).
  self.unknownArguments = function (argv, aliases) {
    var descriptions = usage.getDescriptions(),
      demanded = yargs.getDemanded(),
      unknown = [],
      aliasLookup = {}

    Object.keys(aliases).forEach(function (key) {
      aliases[key].forEach(function (alias) {
        aliasLookup[alias] = key
      })
    })

    Object.keys(argv).forEach(function (key) {
      if (key !== '\$0' && key !== '_' &&
        !descriptions.hasOwnProperty(key) &&
        !demanded.hasOwnProperty(key) &&
        !aliasLookup.hasOwnProperty(key)) {
        unknown.push(key)
      }
    })

    if (unknown.length === 1) {
      usage.fail('Unknown argument: ' + unknown[0])
    } else if (unknown.length > 1) {
      usage.fail('Unknown arguments: ' + unknown.join(', '))
    }
  }

  // custom checks, added using the `check` option on yargs.
  var checks = []
  self.check = function (f) {
    checks.push(f)
  }

  self.customChecks = function (argv, aliases) {
    checks.forEach(function (f) {
      try {
        var result = f(argv, aliases)
        if (!result) {
          usage.fail('Argument check failed: ' + f.toString())
        } else if (typeof result === 'string') {
          usage.fail(result)
        }
      } catch (err) {
        usage.fail(err.message ? err.message : err)
      }
    })
  }

  // check implications, argument foo implies => argument bar.
  var implied = {}
  self.implies = function (key, value) {
    if (typeof key === 'object') {
      Object.keys(key).forEach(function (k) {
        self.implies(k, key[k])
      })
    } else {
      implied[key] = value
    }
  }
  self.getImplied = function () {
    return implied
  }

  self.implications = function (argv) {
    var implyFail = []

    Object.keys(implied).forEach(function (key) {
      var num,
        origKey = key,
        value = implied[key]

      // convert string '1' to number 1
      num = Number(key)
      key = isNaN(num) ? key : num

      if (typeof key === 'number') {
        // check length of argv._
        key = argv._.length >= key
      } else if (key.match(/^--no-.+/)) {
        // check if key doesn't exist
        key = key.match(/^--no-(.+)/)[1]
        key = !argv[key]
      } else {
        // check if key exists
        key = argv[key]
      }

      num = Number(value)
      value = isNaN(num) ? value : num

      if (typeof value === 'number') {
        value = argv._.length >= value
      } else if (value.match(/^--no-.+/)) {
        value = value.match(/^--no-(.+)/)[1]
        value = !argv[value]
      } else {
        value = argv[value]
      }

      if (key && !value) {
        implyFail.push(origKey)
      }
    })

    if (implyFail.length) {
      var msg = 'Implications failed:\\n'

      implyFail.forEach(function (key) {
        msg += ('  ' + key + ' -> ' + implied[key])
      })

      usage.fail(msg)
    }
  }

  return self
}
";
        
        $__internal_33485a120570a9410ff0cc41a3680244c26e9fb50a5338e7675671700eb69d11->leave($__internal_33485a120570a9410ff0cc41a3680244c26e9fb50a5338e7675671700eb69d11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-js/node_modules/yargs/lib/validation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// validation-type-stuff, missing params,
// bad implications, custom checks.
module.exports = function (yargs, usage) {
  var self = {}

  // validate appropriate # of non-option
  // arguments were provided, i.e., '_'.
  self.nonOptionCount = function (argv) {
    var demanded = yargs.getDemanded()

    if (demanded._ && argv._.length < demanded._.count) {
      if (demanded._.msg !== undefined) {
        usage.fail(demanded._.msg)
      } else {
        usage.fail('Not enough non-option arguments: got '
          + argv._.length + ', need at least ' + demanded._.count
        )
      }
    }
  }

  // make sure that any args that require an
  // value (--foo=bar), have a value.
  self.missingArgumentValue = function (argv) {
    var options = yargs.getOptions(),
      defaultValues = [true, false, '']

    if (options.requiresArg.length > 0) {
      var missingRequiredArgs = []

      options.requiresArg.forEach(function (key) {
        var value = argv[key]

        // if a value is explicitly requested,
        // flag argument as missing if it does not
        // look like foo=bar was entered.
        if (~defaultValues.indexOf(value)
        || (Array.isArray(value) && !value.length)) {
          missingRequiredArgs.push(key)
        }
      })

      if (missingRequiredArgs.length === 1) {
        usage.fail('Missing argument value: ' + missingRequiredArgs[0])
      } else if (missingRequiredArgs.length > 1) {
        var message = 'Missing argument values: ' + missingRequiredArgs.join(', ')
        usage.fail(message)
      }
    }
  }

  // make sure all the required arguments are present.
  self.requiredArguments = function (argv) {
    var demanded = yargs.getDemanded(),
      missing = null

    Object.keys(demanded).forEach(function (key) {
      if (!argv.hasOwnProperty(key)) {
        missing = missing || {}
        missing[key] = demanded[key]
      }
    })

    if (missing) {
      var customMsgs = []
      Object.keys(missing).forEach(function (key) {
        var msg = missing[key].msg
        if (msg && customMsgs.indexOf(msg) < 0) {
          customMsgs.push(msg)
        }
      })

      var customMsg = customMsgs.length ? '\\n' + customMsgs.join('\\n') : ''
      usage.fail('Missing required arguments: ' + Object.keys(missing).join(', ') + customMsg)
    }
  }

  // check for unknown arguments (strict-mode).
  self.unknownArguments = function (argv, aliases) {
    var descriptions = usage.getDescriptions(),
      demanded = yargs.getDemanded(),
      unknown = [],
      aliasLookup = {}

    Object.keys(aliases).forEach(function (key) {
      aliases[key].forEach(function (alias) {
        aliasLookup[alias] = key
      })
    })

    Object.keys(argv).forEach(function (key) {
      if (key !== '\$0' && key !== '_' &&
        !descriptions.hasOwnProperty(key) &&
        !demanded.hasOwnProperty(key) &&
        !aliasLookup.hasOwnProperty(key)) {
        unknown.push(key)
      }
    })

    if (unknown.length === 1) {
      usage.fail('Unknown argument: ' + unknown[0])
    } else if (unknown.length > 1) {
      usage.fail('Unknown arguments: ' + unknown.join(', '))
    }
  }

  // custom checks, added using the `check` option on yargs.
  var checks = []
  self.check = function (f) {
    checks.push(f)
  }

  self.customChecks = function (argv, aliases) {
    checks.forEach(function (f) {
      try {
        var result = f(argv, aliases)
        if (!result) {
          usage.fail('Argument check failed: ' + f.toString())
        } else if (typeof result === 'string') {
          usage.fail(result)
        }
      } catch (err) {
        usage.fail(err.message ? err.message : err)
      }
    })
  }

  // check implications, argument foo implies => argument bar.
  var implied = {}
  self.implies = function (key, value) {
    if (typeof key === 'object') {
      Object.keys(key).forEach(function (k) {
        self.implies(k, key[k])
      })
    } else {
      implied[key] = value
    }
  }
  self.getImplied = function () {
    return implied
  }

  self.implications = function (argv) {
    var implyFail = []

    Object.keys(implied).forEach(function (key) {
      var num,
        origKey = key,
        value = implied[key]

      // convert string '1' to number 1
      num = Number(key)
      key = isNaN(num) ? key : num

      if (typeof key === 'number') {
        // check length of argv._
        key = argv._.length >= key
      } else if (key.match(/^--no-.+/)) {
        // check if key doesn't exist
        key = key.match(/^--no-(.+)/)[1]
        key = !argv[key]
      } else {
        // check if key exists
        key = argv[key]
      }

      num = Number(value)
      value = isNaN(num) ? value : num

      if (typeof value === 'number') {
        value = argv._.length >= value
      } else if (value.match(/^--no-.+/)) {
        value = value.match(/^--no-(.+)/)[1]
        value = !argv[value]
      } else {
        value = argv[value]
      }

      if (key && !value) {
        implyFail.push(origKey)
      }
    })

    if (implyFail.length) {
      var msg = 'Implications failed:\\n'

      implyFail.forEach(function (key) {
        msg += ('  ' + key + ' -> ' + implied[key])
      })

      usage.fail(msg)
    }
  }

  return self
}
", "node_modules/uglify-js/node_modules/yargs/lib/validation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-js/node_modules/yargs/lib/validation.js");
    }
}
