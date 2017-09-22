<?php

/* node_modules/regenerator-transform/src/leap.js */
class __TwigTemplate_9463d49643db60642072ab94230eef096aeebc7ea8dcf5fc045ddffb9e33e385 extends Twig_Template
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
        $__internal_c20ccaa3278155bc1d34379a6bd38756d6879d13d3bd16b6888338bc9be2669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20ccaa3278155bc1d34379a6bd38756d6879d13d3bd16b6888338bc9be2669b->enter($__internal_c20ccaa3278155bc1d34379a6bd38756d6879d13d3bd16b6888338bc9be2669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/src/leap.js"));

        // line 1
        echo "/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

import assert from \"assert\";
import * as t from \"babel-types\";
import { inherits } from \"util\";

function Entry() {
  assert.ok(this instanceof Entry);
}

function FunctionEntry(returnLoc) {
  Entry.call(this);
  t.assertLiteral(returnLoc);
  this.returnLoc = returnLoc;
}

inherits(FunctionEntry, Entry);
exports.FunctionEntry = FunctionEntry;

function LoopEntry(breakLoc, continueLoc, label) {
  Entry.call(this);

  t.assertLiteral(breakLoc);
  t.assertLiteral(continueLoc);

  if (label) {
    t.assertIdentifier(label);
  } else {
    label = null;
  }

  this.breakLoc = breakLoc;
  this.continueLoc = continueLoc;
  this.label = label;
}

inherits(LoopEntry, Entry);
exports.LoopEntry = LoopEntry;

function SwitchEntry(breakLoc) {
  Entry.call(this);
  t.assertLiteral(breakLoc);
  this.breakLoc = breakLoc;
}

inherits(SwitchEntry, Entry);
exports.SwitchEntry = SwitchEntry;

function TryEntry(firstLoc, catchEntry, finallyEntry) {
  Entry.call(this);

  t.assertLiteral(firstLoc);

  if (catchEntry) {
    assert.ok(catchEntry instanceof CatchEntry);
  } else {
    catchEntry = null;
  }

  if (finallyEntry) {
    assert.ok(finallyEntry instanceof FinallyEntry);
  } else {
    finallyEntry = null;
  }

  // Have to have one or the other (or both).
  assert.ok(catchEntry || finallyEntry);

  this.firstLoc = firstLoc;
  this.catchEntry = catchEntry;
  this.finallyEntry = finallyEntry;
}

inherits(TryEntry, Entry);
exports.TryEntry = TryEntry;

function CatchEntry(firstLoc, paramId) {
  Entry.call(this);

  t.assertLiteral(firstLoc);
  t.assertIdentifier(paramId);

  this.firstLoc = firstLoc;
  this.paramId = paramId;
}

inherits(CatchEntry, Entry);
exports.CatchEntry = CatchEntry;

function FinallyEntry(firstLoc, afterLoc) {
  Entry.call(this);
  t.assertLiteral(firstLoc);
  t.assertLiteral(afterLoc);
  this.firstLoc = firstLoc;
  this.afterLoc = afterLoc;
}

inherits(FinallyEntry, Entry);
exports.FinallyEntry = FinallyEntry;

function LabeledEntry(breakLoc, label) {
  Entry.call(this);

  t.assertLiteral(breakLoc);
  t.assertIdentifier(label);

  this.breakLoc = breakLoc;
  this.label = label;
}

inherits(LabeledEntry, Entry);
exports.LabeledEntry = LabeledEntry;

function LeapManager(emitter) {
  assert.ok(this instanceof LeapManager);

  let Emitter = require(\"./emit\").Emitter;
  assert.ok(emitter instanceof Emitter);

  this.emitter = emitter;
  this.entryStack = [new FunctionEntry(emitter.finalLoc)];
}

let LMp = LeapManager.prototype;
exports.LeapManager = LeapManager;

LMp.withEntry = function(entry, callback) {
  assert.ok(entry instanceof Entry);
  this.entryStack.push(entry);
  try {
    callback.call(this.emitter);
  } finally {
    let popped = this.entryStack.pop();
    assert.strictEqual(popped, entry);
  }
};

LMp._findLeapLocation = function(property, label) {
  for (let i = this.entryStack.length - 1; i >= 0; --i) {
    let entry = this.entryStack[i];
    let loc = entry[property];
    if (loc) {
      if (label) {
        if (entry.label &&
            entry.label.name === label.name) {
          return loc;
        }
      } else if (entry instanceof LabeledEntry) {
        // Ignore LabeledEntry entries unless we are actually breaking to
        // a label.
      } else {
        return loc;
      }
    }
  }

  return null;
};

LMp.getBreakLoc = function(label) {
  return this._findLeapLocation(\"breakLoc\", label);
};

LMp.getContinueLoc = function(label) {
  return this._findLeapLocation(\"continueLoc\", label);
};
";
        
        $__internal_c20ccaa3278155bc1d34379a6bd38756d6879d13d3bd16b6888338bc9be2669b->leave($__internal_c20ccaa3278155bc1d34379a6bd38756d6879d13d3bd16b6888338bc9be2669b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/src/leap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * https://raw.github.com/facebook/regenerator/master/LICENSE file. An
 * additional grant of patent rights can be found in the PATENTS file in
 * the same directory.
 */

import assert from \"assert\";
import * as t from \"babel-types\";
import { inherits } from \"util\";

function Entry() {
  assert.ok(this instanceof Entry);
}

function FunctionEntry(returnLoc) {
  Entry.call(this);
  t.assertLiteral(returnLoc);
  this.returnLoc = returnLoc;
}

inherits(FunctionEntry, Entry);
exports.FunctionEntry = FunctionEntry;

function LoopEntry(breakLoc, continueLoc, label) {
  Entry.call(this);

  t.assertLiteral(breakLoc);
  t.assertLiteral(continueLoc);

  if (label) {
    t.assertIdentifier(label);
  } else {
    label = null;
  }

  this.breakLoc = breakLoc;
  this.continueLoc = continueLoc;
  this.label = label;
}

inherits(LoopEntry, Entry);
exports.LoopEntry = LoopEntry;

function SwitchEntry(breakLoc) {
  Entry.call(this);
  t.assertLiteral(breakLoc);
  this.breakLoc = breakLoc;
}

inherits(SwitchEntry, Entry);
exports.SwitchEntry = SwitchEntry;

function TryEntry(firstLoc, catchEntry, finallyEntry) {
  Entry.call(this);

  t.assertLiteral(firstLoc);

  if (catchEntry) {
    assert.ok(catchEntry instanceof CatchEntry);
  } else {
    catchEntry = null;
  }

  if (finallyEntry) {
    assert.ok(finallyEntry instanceof FinallyEntry);
  } else {
    finallyEntry = null;
  }

  // Have to have one or the other (or both).
  assert.ok(catchEntry || finallyEntry);

  this.firstLoc = firstLoc;
  this.catchEntry = catchEntry;
  this.finallyEntry = finallyEntry;
}

inherits(TryEntry, Entry);
exports.TryEntry = TryEntry;

function CatchEntry(firstLoc, paramId) {
  Entry.call(this);

  t.assertLiteral(firstLoc);
  t.assertIdentifier(paramId);

  this.firstLoc = firstLoc;
  this.paramId = paramId;
}

inherits(CatchEntry, Entry);
exports.CatchEntry = CatchEntry;

function FinallyEntry(firstLoc, afterLoc) {
  Entry.call(this);
  t.assertLiteral(firstLoc);
  t.assertLiteral(afterLoc);
  this.firstLoc = firstLoc;
  this.afterLoc = afterLoc;
}

inherits(FinallyEntry, Entry);
exports.FinallyEntry = FinallyEntry;

function LabeledEntry(breakLoc, label) {
  Entry.call(this);

  t.assertLiteral(breakLoc);
  t.assertIdentifier(label);

  this.breakLoc = breakLoc;
  this.label = label;
}

inherits(LabeledEntry, Entry);
exports.LabeledEntry = LabeledEntry;

function LeapManager(emitter) {
  assert.ok(this instanceof LeapManager);

  let Emitter = require(\"./emit\").Emitter;
  assert.ok(emitter instanceof Emitter);

  this.emitter = emitter;
  this.entryStack = [new FunctionEntry(emitter.finalLoc)];
}

let LMp = LeapManager.prototype;
exports.LeapManager = LeapManager;

LMp.withEntry = function(entry, callback) {
  assert.ok(entry instanceof Entry);
  this.entryStack.push(entry);
  try {
    callback.call(this.emitter);
  } finally {
    let popped = this.entryStack.pop();
    assert.strictEqual(popped, entry);
  }
};

LMp._findLeapLocation = function(property, label) {
  for (let i = this.entryStack.length - 1; i >= 0; --i) {
    let entry = this.entryStack[i];
    let loc = entry[property];
    if (loc) {
      if (label) {
        if (entry.label &&
            entry.label.name === label.name) {
          return loc;
        }
      } else if (entry instanceof LabeledEntry) {
        // Ignore LabeledEntry entries unless we are actually breaking to
        // a label.
      } else {
        return loc;
      }
    }
  }

  return null;
};

LMp.getBreakLoc = function(label) {
  return this._findLeapLocation(\"breakLoc\", label);
};

LMp.getContinueLoc = function(label) {
  return this._findLeapLocation(\"continueLoc\", label);
};
", "node_modules/regenerator-transform/src/leap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/src/leap.js");
    }
}
