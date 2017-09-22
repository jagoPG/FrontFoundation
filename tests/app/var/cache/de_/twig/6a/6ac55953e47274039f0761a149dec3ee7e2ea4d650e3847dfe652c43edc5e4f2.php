<?php

/* node_modules/spdx-correct/index.js */
class __TwigTemplate_c627bba26eebab13ab1f9ec3f0ed6a7d922d365b2d72479dae404f8f040ae975 extends Twig_Template
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
        $__internal_05cae91e7f4c2e3d10f0a7f6c23477ade09fe6542f4297020c0a4352f7c884c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cae91e7f4c2e3d10f0a7f6c23477ade09fe6542f4297020c0a4352f7c884c8->enter($__internal_05cae91e7f4c2e3d10f0a7f6c23477ade09fe6542f4297020c0a4352f7c884c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/spdx-correct/index.js"));

        // line 1
        echo "var licenseIDs = require('spdx-license-ids');

function valid(string) {
  return licenseIDs.indexOf(string) > -1;
}

// Common transpositions of license identifier acronyms
var transpositions = [
  ['APGL', 'AGPL'],
  ['Gpl', 'GPL'],
  ['GLP', 'GPL'],
  ['APL', 'Apache'],
  ['ISD', 'ISC'],
  ['GLP', 'GPL'],
  ['IST', 'ISC'],
  ['Claude', 'Clause'],
  [' or later', '+'],
  [' International', ''],
  ['GNU', 'GPL'],
  ['GUN', 'GPL'],
  ['+', ''],
  ['GNU GPL', 'GPL'],
  ['GNU/GPL', 'GPL'],
  ['GNU GLP', 'GPL'],
  ['GNU General Public License', 'GPL'],
  ['Gnu public license', 'GPL'],
  ['GNU Public License', 'GPL'],
  ['GNU GENERAL PUBLIC LICENSE', 'GPL'],
  ['MTI', 'MIT'],
  ['Mozilla Public License', 'MPL'],
  ['WTH', 'WTF'],
  ['-License', '']
];

var TRANSPOSED = 0;
var CORRECT = 1;

// Simple corrections to nearly valid identifiers.
var transforms = [
  // e.g. 'mit'
  function(argument) {
    return argument.toUpperCase();
  },
  // e.g. 'MIT '
  function(argument) {
    return argument.trim();
  },
  // e.g. 'M.I.T.'
  function(argument) {
    return argument.replace(/\\./g, '');
  },
  // e.g. 'Apache- 2.0'
  function(argument) {
    return argument.replace(/\\s+/g, '');
  },
  // e.g. 'CC BY 4.0''
  function(argument) {
    return argument.replace(/\\s+/g, '-');
  },
  // e.g. 'LGPLv2.1'
  function(argument) {
    return argument.replace('v', '-');
  },
  // e.g. 'Apache 2.0'
  function(argument) {
    return argument.replace(/,?\\s*(\\d)/, '-\$1');
  },
  // e.g. 'GPL 2'
  function(argument) {
    return argument.replace(/,?\\s*(\\d)/, '-\$1.0');
  },
  // e.g. 'Apache Version 2.0'
  function(argument) {
    return argument.replace(/,?\\s*(V\\.|v\\.|V|v|Version|version)\\s*(\\d)/, '-\$2');
  },
  // e.g. 'Apache Version 2'
  function(argument) {
    return argument.replace(/,?\\s*(V\\.|v\\.|V|v|Version|version)\\s*(\\d)/, '-\$2.0');
  },
  // e.g. 'ZLIB'
  function(argument) {
    return argument[0].toUpperCase() + argument.slice(1);
  },
  // e.g. 'MPL/2.0'
  function(argument) {
    return argument.replace('/', '-');
  },
  // e.g. 'Apache 2'
  function(argument) {
    return argument
      .replace(/\\s*V\\s*(\\d)/, '-\$1')
      .replace(/(\\d)\$/, '\$1.0');
  },
  // e.g. 'GPL-2.0-'
  function(argument) {
    return argument.slice(0, argument.length - 1);
  },
  // e.g. 'GPL2'
  function(argument) {
    return argument.replace(/(\\d)\$/, '-\$1.0');
  },
  // e.g. 'BSD 3'
  function(argument) {
    return argument.replace(/(-| )?(\\d)\$/, '-\$2-Clause');
  },
  // e.g. 'BSD clause 3'
  function(argument) {
    return argument.replace(/(-| )clause(-| )(\\d)/, '-\$3-Clause');
  },
  // e.g. 'BY-NC-4.0'
  function(argument) {
    return 'CC-' + argument;
  },
  // e.g. 'BY-NC'
  function(argument) {
    return 'CC-' + argument + '-4.0';
  },
  // e.g. 'Attribution-NonCommercial'
  function(argument) {
    return argument
      .replace('Attribution', 'BY')
      .replace('NonCommercial', 'NC')
      .replace('NoDerivatives', 'ND')
      .replace(/ (\\d)/, '-\$1')
      .replace(/ ?International/, '');
  },
  // e.g. 'Attribution-NonCommercial'
  function(argument) {
    return 'CC-' +
      argument
      .replace('Attribution', 'BY')
      .replace('NonCommercial', 'NC')
      .replace('NoDerivatives', 'ND')
      .replace(/ (\\d)/, '-\$1')
      .replace(/ ?International/, '') +
      '-4.0';
  }
];

// If all else fails, guess that strings containing certain substrings
// meant to identify certain licenses.
var lastResorts = [
  ['UNLI', 'Unlicense'],
  ['WTF', 'WTFPL'],
  ['2 CLAUSE', 'BSD-2-Clause'],
  ['2-CLAUSE', 'BSD-2-Clause'],
  ['3 CLAUSE', 'BSD-3-Clause'],
  ['3-CLAUSE', 'BSD-3-Clause'],
  ['AFFERO', 'AGPL-3.0'],
  ['AGPL', 'AGPL-3.0'],
  ['APACHE', 'Apache-2.0'],
  ['ARTISTIC', 'Artistic-2.0'],
  ['Affero', 'AGPL-3.0'],
  ['BEER', 'Beerware'],
  ['BOOST', 'BSL-1.0'],
  ['BSD', 'BSD-2-Clause'],
  ['ECLIPSE', 'EPL-1.0'],
  ['FUCK', 'WTFPL'],
  ['GNU', 'GPL-3.0'],
  ['LGPL', 'LGPL-3.0'],
  ['GPL', 'GPL-3.0'],
  ['MIT', 'MIT'],
  ['MPL', 'MPL-2.0'],
  ['X11', 'X11'],
  ['ZLIB', 'Zlib']
];

var SUBSTRING = 0;
var IDENTIFIER = 1;

var validTransformation = function(identifier) {
  for (var i = 0; i < transforms.length; i++) {
    var transformed = transforms[i](identifier);
    if (transformed !== identifier && valid(transformed)) {
      return transformed;
    }
  }
  return null;
};

var validLastResort = function(identifier) {
  var upperCased = identifier.toUpperCase();
  for (var i = 0; i < lastResorts.length; i++) {
    var lastResort = lastResorts[i];
    if (upperCased.indexOf(lastResort[SUBSTRING]) > -1) {
      return lastResort[IDENTIFIER];
    }
  }
  return null;
};

var anyCorrection = function(identifier, check) {
  for (var i = 0; i < transpositions.length; i++) {
    var transposition = transpositions[i];
    var transposed = transposition[TRANSPOSED];
    if (identifier.indexOf(transposed) > -1) {
      var corrected = identifier.replace(
        transposed,
        transposition[CORRECT]
      );
      var checked = check(corrected);
      if (checked !== null) {
        return checked;
      }
    }
  }
  return null;
};

module.exports = function(identifier) {
  identifier = identifier.replace(/\\+\$/, '');
  if (valid(identifier)) {
    return identifier;
  }
  var transformed = validTransformation(identifier);
  if (transformed !== null) {
    return transformed;
  }
  transformed = anyCorrection(identifier, function(argument) {
    if (valid(argument)) {
      return argument;
    }
    return validTransformation(argument);
  });
  if (transformed !== null) {
    return transformed;
  }
  transformed = validLastResort(identifier);
  if (transformed !== null) {
    return transformed;
  }
  transformed = anyCorrection(identifier, validLastResort);
  if (transformed !== null) {
    return transformed;
  }
  return null;
};
";
        
        $__internal_05cae91e7f4c2e3d10f0a7f6c23477ade09fe6542f4297020c0a4352f7c884c8->leave($__internal_05cae91e7f4c2e3d10f0a7f6c23477ade09fe6542f4297020c0a4352f7c884c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/spdx-correct/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var licenseIDs = require('spdx-license-ids');

function valid(string) {
  return licenseIDs.indexOf(string) > -1;
}

// Common transpositions of license identifier acronyms
var transpositions = [
  ['APGL', 'AGPL'],
  ['Gpl', 'GPL'],
  ['GLP', 'GPL'],
  ['APL', 'Apache'],
  ['ISD', 'ISC'],
  ['GLP', 'GPL'],
  ['IST', 'ISC'],
  ['Claude', 'Clause'],
  [' or later', '+'],
  [' International', ''],
  ['GNU', 'GPL'],
  ['GUN', 'GPL'],
  ['+', ''],
  ['GNU GPL', 'GPL'],
  ['GNU/GPL', 'GPL'],
  ['GNU GLP', 'GPL'],
  ['GNU General Public License', 'GPL'],
  ['Gnu public license', 'GPL'],
  ['GNU Public License', 'GPL'],
  ['GNU GENERAL PUBLIC LICENSE', 'GPL'],
  ['MTI', 'MIT'],
  ['Mozilla Public License', 'MPL'],
  ['WTH', 'WTF'],
  ['-License', '']
];

var TRANSPOSED = 0;
var CORRECT = 1;

// Simple corrections to nearly valid identifiers.
var transforms = [
  // e.g. 'mit'
  function(argument) {
    return argument.toUpperCase();
  },
  // e.g. 'MIT '
  function(argument) {
    return argument.trim();
  },
  // e.g. 'M.I.T.'
  function(argument) {
    return argument.replace(/\\./g, '');
  },
  // e.g. 'Apache- 2.0'
  function(argument) {
    return argument.replace(/\\s+/g, '');
  },
  // e.g. 'CC BY 4.0''
  function(argument) {
    return argument.replace(/\\s+/g, '-');
  },
  // e.g. 'LGPLv2.1'
  function(argument) {
    return argument.replace('v', '-');
  },
  // e.g. 'Apache 2.0'
  function(argument) {
    return argument.replace(/,?\\s*(\\d)/, '-\$1');
  },
  // e.g. 'GPL 2'
  function(argument) {
    return argument.replace(/,?\\s*(\\d)/, '-\$1.0');
  },
  // e.g. 'Apache Version 2.0'
  function(argument) {
    return argument.replace(/,?\\s*(V\\.|v\\.|V|v|Version|version)\\s*(\\d)/, '-\$2');
  },
  // e.g. 'Apache Version 2'
  function(argument) {
    return argument.replace(/,?\\s*(V\\.|v\\.|V|v|Version|version)\\s*(\\d)/, '-\$2.0');
  },
  // e.g. 'ZLIB'
  function(argument) {
    return argument[0].toUpperCase() + argument.slice(1);
  },
  // e.g. 'MPL/2.0'
  function(argument) {
    return argument.replace('/', '-');
  },
  // e.g. 'Apache 2'
  function(argument) {
    return argument
      .replace(/\\s*V\\s*(\\d)/, '-\$1')
      .replace(/(\\d)\$/, '\$1.0');
  },
  // e.g. 'GPL-2.0-'
  function(argument) {
    return argument.slice(0, argument.length - 1);
  },
  // e.g. 'GPL2'
  function(argument) {
    return argument.replace(/(\\d)\$/, '-\$1.0');
  },
  // e.g. 'BSD 3'
  function(argument) {
    return argument.replace(/(-| )?(\\d)\$/, '-\$2-Clause');
  },
  // e.g. 'BSD clause 3'
  function(argument) {
    return argument.replace(/(-| )clause(-| )(\\d)/, '-\$3-Clause');
  },
  // e.g. 'BY-NC-4.0'
  function(argument) {
    return 'CC-' + argument;
  },
  // e.g. 'BY-NC'
  function(argument) {
    return 'CC-' + argument + '-4.0';
  },
  // e.g. 'Attribution-NonCommercial'
  function(argument) {
    return argument
      .replace('Attribution', 'BY')
      .replace('NonCommercial', 'NC')
      .replace('NoDerivatives', 'ND')
      .replace(/ (\\d)/, '-\$1')
      .replace(/ ?International/, '');
  },
  // e.g. 'Attribution-NonCommercial'
  function(argument) {
    return 'CC-' +
      argument
      .replace('Attribution', 'BY')
      .replace('NonCommercial', 'NC')
      .replace('NoDerivatives', 'ND')
      .replace(/ (\\d)/, '-\$1')
      .replace(/ ?International/, '') +
      '-4.0';
  }
];

// If all else fails, guess that strings containing certain substrings
// meant to identify certain licenses.
var lastResorts = [
  ['UNLI', 'Unlicense'],
  ['WTF', 'WTFPL'],
  ['2 CLAUSE', 'BSD-2-Clause'],
  ['2-CLAUSE', 'BSD-2-Clause'],
  ['3 CLAUSE', 'BSD-3-Clause'],
  ['3-CLAUSE', 'BSD-3-Clause'],
  ['AFFERO', 'AGPL-3.0'],
  ['AGPL', 'AGPL-3.0'],
  ['APACHE', 'Apache-2.0'],
  ['ARTISTIC', 'Artistic-2.0'],
  ['Affero', 'AGPL-3.0'],
  ['BEER', 'Beerware'],
  ['BOOST', 'BSL-1.0'],
  ['BSD', 'BSD-2-Clause'],
  ['ECLIPSE', 'EPL-1.0'],
  ['FUCK', 'WTFPL'],
  ['GNU', 'GPL-3.0'],
  ['LGPL', 'LGPL-3.0'],
  ['GPL', 'GPL-3.0'],
  ['MIT', 'MIT'],
  ['MPL', 'MPL-2.0'],
  ['X11', 'X11'],
  ['ZLIB', 'Zlib']
];

var SUBSTRING = 0;
var IDENTIFIER = 1;

var validTransformation = function(identifier) {
  for (var i = 0; i < transforms.length; i++) {
    var transformed = transforms[i](identifier);
    if (transformed !== identifier && valid(transformed)) {
      return transformed;
    }
  }
  return null;
};

var validLastResort = function(identifier) {
  var upperCased = identifier.toUpperCase();
  for (var i = 0; i < lastResorts.length; i++) {
    var lastResort = lastResorts[i];
    if (upperCased.indexOf(lastResort[SUBSTRING]) > -1) {
      return lastResort[IDENTIFIER];
    }
  }
  return null;
};

var anyCorrection = function(identifier, check) {
  for (var i = 0; i < transpositions.length; i++) {
    var transposition = transpositions[i];
    var transposed = transposition[TRANSPOSED];
    if (identifier.indexOf(transposed) > -1) {
      var corrected = identifier.replace(
        transposed,
        transposition[CORRECT]
      );
      var checked = check(corrected);
      if (checked !== null) {
        return checked;
      }
    }
  }
  return null;
};

module.exports = function(identifier) {
  identifier = identifier.replace(/\\+\$/, '');
  if (valid(identifier)) {
    return identifier;
  }
  var transformed = validTransformation(identifier);
  if (transformed !== null) {
    return transformed;
  }
  transformed = anyCorrection(identifier, function(argument) {
    if (valid(argument)) {
      return argument;
    }
    return validTransformation(argument);
  });
  if (transformed !== null) {
    return transformed;
  }
  transformed = validLastResort(identifier);
  if (transformed !== null) {
    return transformed;
  }
  transformed = anyCorrection(identifier, validLastResort);
  if (transformed !== null) {
    return transformed;
  }
  return null;
};
", "node_modules/spdx-correct/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/spdx-correct/index.js");
    }
}
