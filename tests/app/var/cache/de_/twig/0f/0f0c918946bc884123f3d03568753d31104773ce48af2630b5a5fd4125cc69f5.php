<?php

/* node_modules/tape/test/common.js */
class __TwigTemplate_2fc571b61464c9ffebac4150a4f64124fd3ec4154e205f43fe859670069546ee extends Twig_Template
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
        $__internal_792a295518e9b95d42cddf888e2352e57090ed8a15f06cef3fc2497376dab862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792a295518e9b95d42cddf888e2352e57090ed8a15f06cef3fc2497376dab862->enter($__internal_792a295518e9b95d42cddf888e2352e57090ed8a15f06cef3fc2497376dab862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/common.js"));

        // line 1
        echo "var yaml = require('js-yaml');

module.exports.getDiag = function (body) {
    var yamlStart = body.indexOf('  ---');
    var yamlEnd = body.indexOf('  ...\\n');
    var diag = body.slice(yamlStart, yamlEnd).split('\\n').map(function (line) {
        return line.slice(2);
    }).join('\\n');

    // The stack trace will vary depending on where the code is run, so just
    // strip it out.
    var withStack = yaml.safeLoad(diag);
    delete withStack.stack;
    return withStack;
}

// There are three challenges associated with checking the stack traces included
// in errors:
// 1) The base checkout directory of tape might change. Because stack traces
//    include absolute paths, the stack traces will change depending on the
//    checkout path. We handle this by replacing the base test directory with a
//    placeholder \$TEST variable.
// 2) Line positions within the file might change. We handle this by replacing
//    line and column markers with placeholder \$LINE and \$COL \"variables\"
//   a) node 0.8 does not provide nested eval line numbers, so we remove them
// 3) Stacks themselves change frequently with refactoring. We've even run into
//    issues with node library refactorings \"breaking\" stack traces. Most of
//    these changes are irrelevant to the tests themselves. To counter this, we
//    strip out all stack frames that aren't directly under our test directory,
//    and replace them with placeholders.
module.exports.stripFullStack = function (output) {
  var stripped = '          [... stack stripped ...]';
  var withDuplicates = output.split('\\n').map(function (line) {
      var m = line.match(/[ ]{8}at .*\\((.*)\\)/);

      var stripChangingData = function (line) {
          var withoutDirectory = line.replace(__dirname, '\$TEST');
          var withoutLineNumbers = withoutDirectory.replace(/:\\d+:\\d+/g, ':\$LINE:\$COL');
          var withoutNestedLineNumbers = withoutLineNumbers.replace(/, \\<anonymous\\>:\\\$LINE:\\\$COL\\)\$/, ')');
          return withoutNestedLineNumbers;
      }

      if (m) {
          if (m[1].slice(0, __dirname.length) === __dirname) {
              return stripChangingData(line);
          }
          return stripped;
      }
      return stripChangingData(line);
  })

  var deduped = withDuplicates.filter(function (line, ix) {
      var hasPrior = line === stripped && withDuplicates[ix - 1] === stripped;
      return !hasPrior;
  });

  return deduped.join('\\n');
}
";
        
        $__internal_792a295518e9b95d42cddf888e2352e57090ed8a15f06cef3fc2497376dab862->leave($__internal_792a295518e9b95d42cddf888e2352e57090ed8a15f06cef3fc2497376dab862_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/common.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var yaml = require('js-yaml');

module.exports.getDiag = function (body) {
    var yamlStart = body.indexOf('  ---');
    var yamlEnd = body.indexOf('  ...\\n');
    var diag = body.slice(yamlStart, yamlEnd).split('\\n').map(function (line) {
        return line.slice(2);
    }).join('\\n');

    // The stack trace will vary depending on where the code is run, so just
    // strip it out.
    var withStack = yaml.safeLoad(diag);
    delete withStack.stack;
    return withStack;
}

// There are three challenges associated with checking the stack traces included
// in errors:
// 1) The base checkout directory of tape might change. Because stack traces
//    include absolute paths, the stack traces will change depending on the
//    checkout path. We handle this by replacing the base test directory with a
//    placeholder \$TEST variable.
// 2) Line positions within the file might change. We handle this by replacing
//    line and column markers with placeholder \$LINE and \$COL \"variables\"
//   a) node 0.8 does not provide nested eval line numbers, so we remove them
// 3) Stacks themselves change frequently with refactoring. We've even run into
//    issues with node library refactorings \"breaking\" stack traces. Most of
//    these changes are irrelevant to the tests themselves. To counter this, we
//    strip out all stack frames that aren't directly under our test directory,
//    and replace them with placeholders.
module.exports.stripFullStack = function (output) {
  var stripped = '          [... stack stripped ...]';
  var withDuplicates = output.split('\\n').map(function (line) {
      var m = line.match(/[ ]{8}at .*\\((.*)\\)/);

      var stripChangingData = function (line) {
          var withoutDirectory = line.replace(__dirname, '\$TEST');
          var withoutLineNumbers = withoutDirectory.replace(/:\\d+:\\d+/g, ':\$LINE:\$COL');
          var withoutNestedLineNumbers = withoutLineNumbers.replace(/, \\<anonymous\\>:\\\$LINE:\\\$COL\\)\$/, ')');
          return withoutNestedLineNumbers;
      }

      if (m) {
          if (m[1].slice(0, __dirname.length) === __dirname) {
              return stripChangingData(line);
          }
          return stripped;
      }
      return stripChangingData(line);
  })

  var deduped = withDuplicates.filter(function (line, ix) {
      var hasPrior = line === stripped && withDuplicates[ix - 1] === stripped;
      return !hasPrior;
  });

  return deduped.join('\\n');
}
", "node_modules/tape/test/common.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/common.js");
    }
}
