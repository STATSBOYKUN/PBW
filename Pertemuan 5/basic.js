// Complete basic syntax of JavaScript

// This is a single line comment

/* This is a multi-line comment
    This is a multi-line comment
    This is a multi-line comment
*/

// Variable declaration
var x = 10;
var y = 20;
var z = x + y;

// Variable declaration with type
var a: number = 10;
var b: string = "Hello";
var c: boolean = true;

// complex type
var g: any = 10;
var h: any = "Hello";
var i: any = true;

// Array
var j: number[] = [1, 2, 3];
var k: string[] = ["Hello", "World"];
var l: boolean[] = [true, false, true];

// Tuple
var m: [number, string] = [1, "Hello"];

// Enum
enum Color { Red, Green, Blue };
var n: Color = Color.Green;

// Any
var o: any = 10;
o = "Hello";
o = true;

// Void
function p(): void {
  alert("Hello World");
}

// Null and Undefined
var q: null = null;
var r: undefined = undefined;

// Type Assertion
var s: any = "Hello World";
var t: number = (s).length;
var u: number = (s as string).length;

// comparison
var v1: number = 10;
var v2: number = 20;
var v3: boolean = v1 < v2;
var v4: boolean = v1 > v2;
var v5: boolean = v1 <= v2;
var v6: boolean = v1 >= v2;
var v7: boolean = v1 == v2;
var v8: boolean = v1 != v2;

// Function
function v(): string {
  return "Hello World";
}

// Function with parameter
function w(name: string): string {
  return "Hello " + name;
}

// Function with optional parameter
function x(name: string, age?: number): string {
  return "Hello " + name + " " + age;
}

// Function with default parameter
function y(name: string, age: number = 20): string {
  return "Hello " + name + " " + age;
}

// Function with rest parameter
function z(...names: string[]): string {
  return "Hello " + names.join(", ");
}

// Interface
interface Person {
  firstName: string;
  lastName: string;
}

