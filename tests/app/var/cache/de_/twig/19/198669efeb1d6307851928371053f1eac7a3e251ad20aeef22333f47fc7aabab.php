<?php

/* node_modules/escope/powered-test/arguments.js */
class __TwigTemplate_91964553ea4b3426a89e35d8a6e8df7963e31798a66aab5b1aa579048f447f96 extends Twig_Template
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
        $__internal_4bee182c1b97e23dc119c1e905c1fdcc13dbbbb4beb3c616df1ba5f045ebb486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bee182c1b97e23dc119c1e905c1fdcc13dbbbb4beb3c616df1ba5f045ebb486->enter($__internal_4bee182c1b97e23dc119c1e905c1fdcc13dbbbb4beb3c616df1ba5f045ebb486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/escope/powered-test/arguments.js"));

        // line 1
        echo "(function() {
  var escope, esprima, expect, harmony;

  expect = require('chai').expect;

  esprima = require('esprima');

  harmony = require('../third_party/esprima');

  escope = require('..');

  describe('arguments', function() {
    return it('arguments are correctly materialized', function() {
      var ast, globalScope, scope, scopeManager;
      ast = esprima.parse(\"(function () {\\n    arguments;\\n}());\");
      scopeManager = escope.analyze(ast);
      expect(scopeManager.scopes).to.have.length(2);
      globalScope = scopeManager.scopes[0];
      expect(globalScope.type).to.be.equal('global');
      expect(globalScope.variables).to.have.length(0);
      expect(globalScope.references).to.have.length(0);
      scope = scopeManager.scopes[1];
      expect(scope.type).to.be.equal('function');
      expect(scope.variables).to.have.length(1);
      expect(scope.variables[0].name).to.be.equal('arguments');
      expect(scope.isArgumentsMaterialized()).to.be[\"true\"];
      expect(scope.references).to.have.length(1);
      return expect(scope.references[0].resolved).to.be.equal(scope.variables[0]);
    });
  });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFyZ3VtZW50cy5jb2ZmZWUiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBdUJBO0FBQUEsTUFBQSxnQ0FBQTs7QUFBQSxFQUFBLE1BQUEsR0FBUyxPQUFBLENBQVMsTUFBVCxDQUFlLENBQUMsTUFBekIsQ0FBQTs7QUFBQSxFQUNBLE9BQUEsR0FBVSxPQUFBLENBQVMsU0FBVCxDQURWLENBQUE7O0FBQUEsRUFFQSxPQUFBLEdBQVUsT0FBQSxDQUFTLHdCQUFULENBRlYsQ0FBQTs7QUFBQSxFQUdBLE1BQUEsR0FBUyxPQUFBLENBQVMsSUFBVCxDQUhULENBQUE7O0FBQUEsRUFLQSxRQUFBLENBQVUsV0FBVixFQUFzQixTQUFBLEdBQUE7V0FDbEIsRUFBQSxDQUFJLHNDQUFKLEVBQTJDLFNBQUEsR0FBQTtBQUN2QyxVQUFBLHFDQUFBO0FBQUEsTUFBQSxHQUFBLEdBQU0sT0FBTyxDQUFDLEtBQVIsQ0FBaUIsdUNBQWpCLENBQU4sQ0FBQTtBQUFBLE1BTUEsWUFBQSxHQUFlLE1BQU0sQ0FBQyxPQUFQLENBQWUsR0FBZixDQU5mLENBQUE7QUFBQSxNQU9BLE1BQUEsQ0FBTyxZQUFZLENBQUMsTUFBcEIsQ0FBMkIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQXBDLENBQTJDLENBQTNDLENBUEEsQ0FBQTtBQUFBLE1BUUEsV0FBQSxHQUFjLFlBQVksQ0FBQyxNQUFPLENBQUEsQ0FBQSxDQVJsQyxDQUFBO0FBQUEsTUFTQSxNQUFBLENBQU8sV0FBVyxDQUFDLElBQW5CLENBQXdCLENBQUMsRUFBRSxDQUFDLEVBQUUsQ0FBQyxLQUEvQixDQUFzQyxRQUF0QyxDQVRBLENBQUE7QUFBQSxNQVVBLE1BQUEsQ0FBTyxXQUFXLENBQUMsU0FBbkIsQ0FBNkIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQXRDLENBQTZDLENBQTdDLENBVkEsQ0FBQTtBQUFBLE1BV0EsTUFBQSxDQUFPLFdBQVcsQ0FBQyxVQUFuQixDQUE4QixDQUFDLEVBQUUsQ0FBQyxJQUFJLENBQUMsTUFBdkMsQ0FBOEMsQ0FBOUMsQ0FYQSxDQUFBO0FBQUEsTUFhQSxLQUFBLEdBQVEsWUFBWSxDQUFDLE1BQU8sQ0FBQSxDQUFBLENBYjVCLENBQUE7QUFBQSxNQWNBLE1BQUEsQ0FBTyxLQUFLLENBQUMsSUFBYixDQUFrQixDQUFDLEVBQUUsQ0FBQyxFQUFFLENBQUMsS0FBekIsQ0FBZ0MsVUFBaEMsQ0FkQSxDQUFBO0FBQUEsTUFlQSxNQUFBLENBQU8sS0FBSyxDQUFDLFNBQWIsQ0FBdUIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWhDLENBQXVDLENBQXZDLENBZkEsQ0FBQTtBQUFBLE1BZ0JBLE1BQUEsQ0FBTyxLQUFLLENBQUMsU0FBVSxDQUFBLENBQUEsQ0FBRSxDQUFDLElBQTFCLENBQStCLENBQUMsRUFBRSxDQUFDLEVBQUUsQ0FBQyxLQUF0QyxDQUE2QyxXQUE3QyxDQWhCQSxDQUFBO0FBQUEsTUFpQkEsTUFBQSxDQUFPLEtBQUssQ0FBQyx1QkFBTixDQUFBLENBQVAsQ0FBdUMsQ0FBQyxFQUFFLENBQUMsRUFBRSxDQUFDLE1BQUQsQ0FqQjdDLENBQUE7QUFBQSxNQWtCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFVBQWIsQ0FBd0IsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWpDLENBQXdDLENBQXhDLENBbEJBLENBQUE7YUFtQkEsTUFBQSxDQUFPLEtBQUssQ0FBQyxVQUFXLENBQUEsQ0FBQSxDQUFFLENBQUMsUUFBM0IsQ0FBb0MsQ0FBQyxFQUFFLENBQUMsRUFBRSxDQUFDLEtBQTNDLENBQWlELEtBQUssQ0FBQyxTQUFVLENBQUEsQ0FBQSxDQUFqRSxFQXBCdUM7SUFBQSxDQUEzQyxFQURrQjtFQUFBLENBQXRCLENBTEEsQ0FBQTtBQUFBIiwiZmlsZSI6ImFyZ3VtZW50cy5qcyIsInNvdXJjZVJvb3QiOiIvc291cmNlLyIsInNvdXJjZXNDb250ZW50IjpbIiMgLSotIGNvZGluZzogdXRmLTggLSotXG4jICBDb3B5cmlnaHQgKEMpIDIwMTQgWXVzdWtlIFN1enVraSA8dXRhdGFuZS50ZWFAZ21haWwuY29tPlxuI1xuIyAgUmVkaXN0cmlidXRpb24gYW5kIHVzZSBpbiBzb3VyY2UgYW5kIGJpbmFyeSBmb3Jtcywgd2l0aCBvciB3aXRob3V0XG4jICBtb2RpZmljYXRpb24sIGFyZSBwZXJtaXR0ZWQgcHJvdmlkZWQgdGhhdCB0aGUgZm9sbG93aW5nIGNvbmRpdGlvbnMgYXJlIG1ldDpcbiNcbiMgICAgKiBSZWRpc3RyaWJ1dGlvbnMgb2Ygc291cmNlIGNvZGUgbXVzdCByZXRhaW4gdGhlIGFib3ZlIGNvcHlyaWdodFxuIyAgICAgIG5vdGljZSwgdGhpcyBsaXN0IG9mIGNvbmRpdGlvbnMgYW5kIHRoZSBmb2xsb3dpbmcgZGlzY2xhaW1lci5cbiMgICAgKiBSZWRpc3RyaWJ1dGlvbnMgaW4gYmluYXJ5IGZvcm0gbXVzdCByZXByb2R1Y2UgdGhlIGFib3ZlIGNvcHlyaWdodFxuIyAgICAgIG5vdGljZSwgdGhpcyBsaXN0IG9mIGNvbmRpdGlvbnMgYW5kIHRoZSBmb2xsb3dpbmcgZGlzY2xhaW1lciBpbiB0aGVcbiMgICAgICBkb2N1bWVudGF0aW9uIGFuZC9vciBvdGhlciBtYXRlcmlhbHMgcHJvdmlkZWQgd2l0aCB0aGUgZGlzdHJpYnV0aW9uLlxuI1xuIyAgVEhJUyBTT0ZUV0FSRSBJUyBQUk9WSURFRCBCWSBUSEUgQ09QWVJJR0hUIEhPTERFUlMgQU5EIENPTlRSSUJVVE9SUyBcIkFTIElTXCJcbiMgIEFORCBBTlkgRVhQUkVTUyBPUiBJTVBMSUVEIFdBUlJBTlRJRVMsIElOQ0xVRElORywgQlVUIE5PVCBMSU1JVEVEIFRPLCBUSEVcbiMgIElNUExJRUQgV0FSUkFOVElFUyBPRiBNRVJDSEFOVEFCSUxJVFkgQU5EIEZJVE5FU1MgRk9SIEEgUEFSVElDVUxBUiBQVVJQT1NFXG4jICBBUkUgRElTQ0xBSU1FRC4gSU4gTk8gRVZFTlQgU0hBTEwgPENPUFlSSUdIVCBIT0xERVI+IEJFIExJQUJMRSBGT1IgQU5ZXG4jICBESVJFQ1QsIElORElSRUNULCBJTkNJREVOVEFMLCBTUEVDSUFMLCBFWEVNUExBUlksIE9SIENPTlNFUVVFTlRJQUwgREFNQUdFU1xuIyAgKElOQ0xVRElORywgQlVUIE5PVCBMSU1JVEVEIFRPLCBQUk9DVVJFTUVOVCBPRiBTVUJTVElUVVRFIEdPT0RTIE9SIFNFUlZJQ0VTO1xuIyAgTE9TUyBPRiBVU0UsIERBVEEsIE9SIFBST0ZJVFM7IE9SIEJVU0lORVNTIElOVEVSUlVQVElPTikgSE9XRVZFUiBDQVVTRUQgQU5EXG4jICBPTiBBTlkgVEhFT1JZIE9GIExJQUJJTElUWSwgV0hFVEhFUiBJTiBDT05UUkFDVCwgU1RSSUNUIExJQUJJTElUWSwgT1IgVE9SVFxuIyAgKElOQ0xVRElORyBORUdMSUdFTkNFIE9SIE9USEVSV0lTRSkgQVJJU0lORyBJTiBBTlkgV0FZIE9VVCBPRiBUSEUgVVNFIE9GXG4jICBUSElTIFNPRlRXQVJFLCBFVkVOIElGIEFEVklTRUQgT0YgVEhFIFBPU1NJQklMSVRZIE9GIFNVQ0ggREFNQUdFLlxuXG5leHBlY3QgPSByZXF1aXJlKCdjaGFpJykuZXhwZWN0XG5lc3ByaW1hID0gcmVxdWlyZSAnZXNwcmltYSdcbmhhcm1vbnkgPSByZXF1aXJlICcuLi90aGlyZF9wYXJ0eS9lc3ByaW1hJ1xuZXNjb3BlID0gcmVxdWlyZSAnLi4nXG5cbmRlc2NyaWJlICdhcmd1bWVudHMnLCAtPlxuICAgIGl0ICdhcmd1bWVudHMgYXJlIGNvcnJlY3RseSBtYXRlcmlhbGl6ZWQnLCAtPlxuICAgICAgICBhc3QgPSBlc3ByaW1hLnBhcnNlIFwiXCJcIlxuICAgICAgICAoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgYXJndW1lbnRzO1xuICAgICAgICB9KCkpO1xuICAgICAgICBcIlwiXCJcblxuICAgICAgICBzY29wZU1hbmFnZXIgPSBlc2NvcGUuYW5hbHl6ZSBhc3RcbiAgICAgICAgZXhwZWN0KHNjb3BlTWFuYWdlci5zY29wZXMpLnRvLmhhdmUubGVuZ3RoIDJcbiAgICAgICAgZ2xvYmFsU2NvcGUgPSBzY29wZU1hbmFnZXIuc2NvcGVzWzBdXG4gICAgICAgIGV4cGVjdChnbG9iYWxTY29wZS50eXBlKS50by5iZS5lcXVhbCAnZ2xvYmFsJ1xuICAgICAgICBleHBlY3QoZ2xvYmFsU2NvcGUudmFyaWFibGVzKS50by5oYXZlLmxlbmd0aCAwXG4gICAgICAgIGV4cGVjdChnbG9iYWxTY29wZS5yZWZlcmVuY2VzKS50by5oYXZlLmxlbmd0aCAwXG5cbiAgICAgICAgc2NvcGUgPSBzY29wZU1hbmFnZXIuc2NvcGVzWzFdXG4gICAgICAgIGV4cGVjdChzY29wZS50eXBlKS50by5iZS5lcXVhbCAnZnVuY3Rpb24nXG4gICAgICAgIGV4cGVjdChzY29wZS52YXJpYWJsZXMpLnRvLmhhdmUubGVuZ3RoIDFcbiAgICAgICAgZXhwZWN0KHNjb3BlLnZhcmlhYmxlc1swXS5uYW1lKS50by5iZS5lcXVhbCAnYXJndW1lbnRzJ1xuICAgICAgICBleHBlY3Qoc2NvcGUuaXNBcmd1bWVudHNNYXRlcmlhbGl6ZWQoKSkudG8uYmUudHJ1ZVxuICAgICAgICBleHBlY3Qoc2NvcGUucmVmZXJlbmNlcykudG8uaGF2ZS5sZW5ndGggMVxuICAgICAgICBleHBlY3Qoc2NvcGUucmVmZXJlbmNlc1swXS5yZXNvbHZlZCkudG8uYmUuZXF1YWwgc2NvcGUudmFyaWFibGVzWzBdXG5cbiMgdmltOiBzZXQgc3c9NCB0cz00IGV0IHR3PTgwIDpcbiJdfQ==";
        
        $__internal_4bee182c1b97e23dc119c1e905c1fdcc13dbbbb4beb3c616df1ba5f045ebb486->leave($__internal_4bee182c1b97e23dc119c1e905c1fdcc13dbbbb4beb3c616df1ba5f045ebb486_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/escope/powered-test/arguments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function() {
  var escope, esprima, expect, harmony;

  expect = require('chai').expect;

  esprima = require('esprima');

  harmony = require('../third_party/esprima');

  escope = require('..');

  describe('arguments', function() {
    return it('arguments are correctly materialized', function() {
      var ast, globalScope, scope, scopeManager;
      ast = esprima.parse(\"(function () {\\n    arguments;\\n}());\");
      scopeManager = escope.analyze(ast);
      expect(scopeManager.scopes).to.have.length(2);
      globalScope = scopeManager.scopes[0];
      expect(globalScope.type).to.be.equal('global');
      expect(globalScope.variables).to.have.length(0);
      expect(globalScope.references).to.have.length(0);
      scope = scopeManager.scopes[1];
      expect(scope.type).to.be.equal('function');
      expect(scope.variables).to.have.length(1);
      expect(scope.variables[0].name).to.be.equal('arguments');
      expect(scope.isArgumentsMaterialized()).to.be[\"true\"];
      expect(scope.references).to.have.length(1);
      return expect(scope.references[0].resolved).to.be.equal(scope.variables[0]);
    });
  });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFyZ3VtZW50cy5jb2ZmZWUiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBdUJBO0FBQUEsTUFBQSxnQ0FBQTs7QUFBQSxFQUFBLE1BQUEsR0FBUyxPQUFBLENBQVMsTUFBVCxDQUFlLENBQUMsTUFBekIsQ0FBQTs7QUFBQSxFQUNBLE9BQUEsR0FBVSxPQUFBLENBQVMsU0FBVCxDQURWLENBQUE7O0FBQUEsRUFFQSxPQUFBLEdBQVUsT0FBQSxDQUFTLHdCQUFULENBRlYsQ0FBQTs7QUFBQSxFQUdBLE1BQUEsR0FBUyxPQUFBLENBQVMsSUFBVCxDQUhULENBQUE7O0FBQUEsRUFLQSxRQUFBLENBQVUsV0FBVixFQUFzQixTQUFBLEdBQUE7V0FDbEIsRUFBQSxDQUFJLHNDQUFKLEVBQTJDLFNBQUEsR0FBQTtBQUN2QyxVQUFBLHFDQUFBO0FBQUEsTUFBQSxHQUFBLEdBQU0sT0FBTyxDQUFDLEtBQVIsQ0FBaUIsdUNBQWpCLENBQU4sQ0FBQTtBQUFBLE1BTUEsWUFBQSxHQUFlLE1BQU0sQ0FBQyxPQUFQLENBQWUsR0FBZixDQU5mLENBQUE7QUFBQSxNQU9BLE1BQUEsQ0FBTyxZQUFZLENBQUMsTUFBcEIsQ0FBMkIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQXBDLENBQTJDLENBQTNDLENBUEEsQ0FBQTtBQUFBLE1BUUEsV0FBQSxHQUFjLFlBQVksQ0FBQyxNQUFPLENBQUEsQ0FBQSxDQVJsQyxDQUFBO0FBQUEsTUFTQSxNQUFBLENBQU8sV0FBVyxDQUFDLElBQW5CLENBQXdCLENBQUMsRUFBRSxDQUFDLEVBQUUsQ0FBQyxLQUEvQixDQUFzQyxRQUF0QyxDQVRBLENBQUE7QUFBQSxNQVVBLE1BQUEsQ0FBTyxXQUFXLENBQUMsU0FBbkIsQ0FBNkIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQXRDLENBQTZDLENBQTdDLENBVkEsQ0FBQTtBQUFBLE1BV0EsTUFBQSxDQUFPLFdBQVcsQ0FBQyxVQUFuQixDQUE4QixDQUFDLEVBQUUsQ0FBQyxJQUFJLENBQUMsTUFBdkMsQ0FBOEMsQ0FBOUMsQ0FYQSxDQUFBO0FBQUEsTUFhQSxLQUFBLEdBQVEsWUFBWSxDQUFDLE1BQU8sQ0FBQSxDQUFBLENBYjVCLENBQUE7QUFBQSxNQWNBLE1BQUEsQ0FBTyxLQUFLLENBQUMsSUFBYixDQUFrQixDQUFDLEVBQUUsQ0FBQyxFQUFFLENBQUMsS0FBekIsQ0FBZ0MsVUFBaEMsQ0FkQSxDQUFBO0FBQUEsTUFlQSxNQUFBLENBQU8sS0FBSyxDQUFDLFNBQWIsQ0FBdUIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWhDLENBQXVDLENBQXZDLENBZkEsQ0FBQTtBQUFBLE1BZ0JBLE1BQUEsQ0FBTyxLQUFLLENBQUMsU0FBVSxDQUFBLENBQUEsQ0FBRSxDQUFDLElBQTFCLENBQStCLENBQUMsRUFBRSxDQUFDLEVBQUUsQ0FBQyxLQUF0QyxDQUE2QyxXQUE3QyxDQWhCQSxDQUFBO0FBQUEsTUFpQkEsTUFBQSxDQUFPLEtBQUssQ0FBQyx1QkFBTixDQUFBLENBQVAsQ0FBdUMsQ0FBQyxFQUFFLENBQUMsRUFBRSxDQUFDLE1BQUQsQ0FqQjdDLENBQUE7QUFBQSxNQWtCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFVBQWIsQ0FBd0IsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWpDLENBQXdDLENBQXhDLENBbEJBLENBQUE7YUFtQkEsTUFBQSxDQUFPLEtBQUssQ0FBQyxVQUFXLENBQUEsQ0FBQSxDQUFFLENBQUMsUUFBM0IsQ0FBb0MsQ0FBQyxFQUFFLENBQUMsRUFBRSxDQUFDLEtBQTNDLENBQWlELEtBQUssQ0FBQyxTQUFVLENBQUEsQ0FBQSxDQUFqRSxFQXBCdUM7SUFBQSxDQUEzQyxFQURrQjtFQUFBLENBQXRCLENBTEEsQ0FBQTtBQUFBIiwiZmlsZSI6ImFyZ3VtZW50cy5qcyIsInNvdXJjZVJvb3QiOiIvc291cmNlLyIsInNvdXJjZXNDb250ZW50IjpbIiMgLSotIGNvZGluZzogdXRmLTggLSotXG4jICBDb3B5cmlnaHQgKEMpIDIwMTQgWXVzdWtlIFN1enVraSA8dXRhdGFuZS50ZWFAZ21haWwuY29tPlxuI1xuIyAgUmVkaXN0cmlidXRpb24gYW5kIHVzZSBpbiBzb3VyY2UgYW5kIGJpbmFyeSBmb3Jtcywgd2l0aCBvciB3aXRob3V0XG4jICBtb2RpZmljYXRpb24sIGFyZSBwZXJtaXR0ZWQgcHJvdmlkZWQgdGhhdCB0aGUgZm9sbG93aW5nIGNvbmRpdGlvbnMgYXJlIG1ldDpcbiNcbiMgICAgKiBSZWRpc3RyaWJ1dGlvbnMgb2Ygc291cmNlIGNvZGUgbXVzdCByZXRhaW4gdGhlIGFib3ZlIGNvcHlyaWdodFxuIyAgICAgIG5vdGljZSwgdGhpcyBsaXN0IG9mIGNvbmRpdGlvbnMgYW5kIHRoZSBmb2xsb3dpbmcgZGlzY2xhaW1lci5cbiMgICAgKiBSZWRpc3RyaWJ1dGlvbnMgaW4gYmluYXJ5IGZvcm0gbXVzdCByZXByb2R1Y2UgdGhlIGFib3ZlIGNvcHlyaWdodFxuIyAgICAgIG5vdGljZSwgdGhpcyBsaXN0IG9mIGNvbmRpdGlvbnMgYW5kIHRoZSBmb2xsb3dpbmcgZGlzY2xhaW1lciBpbiB0aGVcbiMgICAgICBkb2N1bWVudGF0aW9uIGFuZC9vciBvdGhlciBtYXRlcmlhbHMgcHJvdmlkZWQgd2l0aCB0aGUgZGlzdHJpYnV0aW9uLlxuI1xuIyAgVEhJUyBTT0ZUV0FSRSBJUyBQUk9WSURFRCBCWSBUSEUgQ09QWVJJR0hUIEhPTERFUlMgQU5EIENPTlRSSUJVVE9SUyBcIkFTIElTXCJcbiMgIEFORCBBTlkgRVhQUkVTUyBPUiBJTVBMSUVEIFdBUlJBTlRJRVMsIElOQ0xVRElORywgQlVUIE5PVCBMSU1JVEVEIFRPLCBUSEVcbiMgIElNUExJRUQgV0FSUkFOVElFUyBPRiBNRVJDSEFOVEFCSUxJVFkgQU5EIEZJVE5FU1MgRk9SIEEgUEFSVElDVUxBUiBQVVJQT1NFXG4jICBBUkUgRElTQ0xBSU1FRC4gSU4gTk8gRVZFTlQgU0hBTEwgPENPUFlSSUdIVCBIT0xERVI+IEJFIExJQUJMRSBGT1IgQU5ZXG4jICBESVJFQ1QsIElORElSRUNULCBJTkNJREVOVEFMLCBTUEVDSUFMLCBFWEVNUExBUlksIE9SIENPTlNFUVVFTlRJQUwgREFNQUdFU1xuIyAgKElOQ0xVRElORywgQlVUIE5PVCBMSU1JVEVEIFRPLCBQUk9DVVJFTUVOVCBPRiBTVUJTVElUVVRFIEdPT0RTIE9SIFNFUlZJQ0VTO1xuIyAgTE9TUyBPRiBVU0UsIERBVEEsIE9SIFBST0ZJVFM7IE9SIEJVU0lORVNTIElOVEVSUlVQVElPTikgSE9XRVZFUiBDQVVTRUQgQU5EXG4jICBPTiBBTlkgVEhFT1JZIE9GIExJQUJJTElUWSwgV0hFVEhFUiBJTiBDT05UUkFDVCwgU1RSSUNUIExJQUJJTElUWSwgT1IgVE9SVFxuIyAgKElOQ0xVRElORyBORUdMSUdFTkNFIE9SIE9USEVSV0lTRSkgQVJJU0lORyBJTiBBTlkgV0FZIE9VVCBPRiBUSEUgVVNFIE9GXG4jICBUSElTIFNPRlRXQVJFLCBFVkVOIElGIEFEVklTRUQgT0YgVEhFIFBPU1NJQklMSVRZIE9GIFNVQ0ggREFNQUdFLlxuXG5leHBlY3QgPSByZXF1aXJlKCdjaGFpJykuZXhwZWN0XG5lc3ByaW1hID0gcmVxdWlyZSAnZXNwcmltYSdcbmhhcm1vbnkgPSByZXF1aXJlICcuLi90aGlyZF9wYXJ0eS9lc3ByaW1hJ1xuZXNjb3BlID0gcmVxdWlyZSAnLi4nXG5cbmRlc2NyaWJlICdhcmd1bWVudHMnLCAtPlxuICAgIGl0ICdhcmd1bWVudHMgYXJlIGNvcnJlY3RseSBtYXRlcmlhbGl6ZWQnLCAtPlxuICAgICAgICBhc3QgPSBlc3ByaW1hLnBhcnNlIFwiXCJcIlxuICAgICAgICAoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgYXJndW1lbnRzO1xuICAgICAgICB9KCkpO1xuICAgICAgICBcIlwiXCJcblxuICAgICAgICBzY29wZU1hbmFnZXIgPSBlc2NvcGUuYW5hbHl6ZSBhc3RcbiAgICAgICAgZXhwZWN0KHNjb3BlTWFuYWdlci5zY29wZXMpLnRvLmhhdmUubGVuZ3RoIDJcbiAgICAgICAgZ2xvYmFsU2NvcGUgPSBzY29wZU1hbmFnZXIuc2NvcGVzWzBdXG4gICAgICAgIGV4cGVjdChnbG9iYWxTY29wZS50eXBlKS50by5iZS5lcXVhbCAnZ2xvYmFsJ1xuICAgICAgICBleHBlY3QoZ2xvYmFsU2NvcGUudmFyaWFibGVzKS50by5oYXZlLmxlbmd0aCAwXG4gICAgICAgIGV4cGVjdChnbG9iYWxTY29wZS5yZWZlcmVuY2VzKS50by5oYXZlLmxlbmd0aCAwXG5cbiAgICAgICAgc2NvcGUgPSBzY29wZU1hbmFnZXIuc2NvcGVzWzFdXG4gICAgICAgIGV4cGVjdChzY29wZS50eXBlKS50by5iZS5lcXVhbCAnZnVuY3Rpb24nXG4gICAgICAgIGV4cGVjdChzY29wZS52YXJpYWJsZXMpLnRvLmhhdmUubGVuZ3RoIDFcbiAgICAgICAgZXhwZWN0KHNjb3BlLnZhcmlhYmxlc1swXS5uYW1lKS50by5iZS5lcXVhbCAnYXJndW1lbnRzJ1xuICAgICAgICBleHBlY3Qoc2NvcGUuaXNBcmd1bWVudHNNYXRlcmlhbGl6ZWQoKSkudG8uYmUudHJ1ZVxuICAgICAgICBleHBlY3Qoc2NvcGUucmVmZXJlbmNlcykudG8uaGF2ZS5sZW5ndGggMVxuICAgICAgICBleHBlY3Qoc2NvcGUucmVmZXJlbmNlc1swXS5yZXNvbHZlZCkudG8uYmUuZXF1YWwgc2NvcGUudmFyaWFibGVzWzBdXG5cbiMgdmltOiBzZXQgc3c9NCB0cz00IGV0IHR3PTgwIDpcbiJdfQ==", "node_modules/escope/powered-test/arguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/escope/powered-test/arguments.js");
    }
}