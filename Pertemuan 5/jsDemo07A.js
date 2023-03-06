for (var ii = 4, jj = 3; jj >= 0; ii++, jj--) {
  document.writeln(ii + " * " + jj + " = " + ii * jj + "<br>");
  document.writeln(ii + " / " + jj + " = " + ii / jj + "<br>");
  document.writeln("log(" + jj + ") = " + Math.log(jj) + "<br>");
  document.writeln(
    "sqrt(" + (jj - 1) + ") = " + Math.sqrt(jj - 1) + "<br><br>"
  );
}

x = 1.275;
y = 1.27499999999999991118;
document.writeln(
  x + " and " + y + " are " + (x == y ? "equal" : "not equal") + "<br>"
);
