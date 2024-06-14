val1 = 0;
val2 = 0;
section1 = document.getElementById("section1");
section2 = document.getElementById("section2");
function escribir(element) {
  num = element.innerHTML;
  section2.innerHTML += num;
}

buttons = document.querySelectorAll(".button");

buttons.forEach((button) => {
  if (!isNaN(button.innerHTML)) {
    button.addEventListener("click", () => {
      escribir(button);
    });
  }
});

function plus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}+`;
  section2.innerHTML = "";
}

plusButton = document.getElementById("plus");
plusButton.addEventListener("click", () => {
  plus();
});

function minus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}-`;
  section2.innerHTML = "";
}

minusButton = document.getElementById("minus");
minusButton.addEventListener("click", () => {
  minus();
});

function multiplication() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}*`;
  section2.innerHTML = "";
}

multiplicationButton = document.getElementById("multiplication");
multiplicationButton.addEventListener("click", () => {
  multiplication();
});

function division() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}/`;
  section2.innerHTML = "";
}

divisionButton = document.getElementById("division");
divisionButton.addEventListener("click", () => {
  division();
});

function equal() {
  op = section1.innerHTML[section1.innerHTML.length - 1];
  if (section2.innerHTML.length > 0) val2 = parseInt(section2.innerHTML);
  else val2 = 0;
  switch (op) {
    case "+":
      res = val1 + val2;
      section1.innerHTML = `${val1}+${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "-":
      res = val1 - val2;
      section1.innerHTML = `${val1}-${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "*":
      res = val1 * val2;
      section1.innerHTML = `${val1}*${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "/":
      res = val1 / val2;
      section1.innerHTML = `${val1}/${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "^":
      res = Math.pow(val1, val2);
      section1.innerHTML = `${val1}<span style="font-size: 7px; display: flex; margin-bottom: 10px;">${val2}</span>`;
      section2.innerHTML = `${res}`;
    default:
      break;
  }
}

equalButton = document.getElementById("equal");
equalButton.addEventListener("click", () => {
  equal();
});

function del() {
  section2.innerHTML = section2.innerHTML.slice(0, -1);
}

delButton = document.getElementById("delete");
delButton.addEventListener("click", () => {
  del();
});

function clean() {
  section1.innerHTML = "";
  section2.innerHTML = "";
}

cleanButton = document.getElementById("clean");
cleanButton.addEventListener("click", () => {
  clean();
});

function potencia() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}^`;
  section2.innerHTML = "";
}

document.getElementById("potencia").addEventListener("click", () => {
  potencia();
});

function raizCuadrada() {
  val1 = parseFloat(section2.innerHTML);
  res = Math.sqrt(val1);
  section1.innerHTML = `√${val1}`;
  section2.innerHTML = `${res}`;
}

document.getElementById("raiz").addEventListener("click", () => {
  raizCuadrada();
});

function factorial(n) {
  if (n == 0) {
      return 1;
  }else {
      return n * factorial(n - 1);
  }
}

function factorialHandler() {
  val1 = parseFloat(section2.innerHTML);
  res = factorial(val1);
  section1.innerHTML = `${val1}!`;
  section2.innerHTML = `${res}`;
}

document.getElementById("factorial").addEventListener("click", () => {
  factorialHandler();
});

function logaritmo() {
  val1 = parseFloat(section2.innerHTML);
  res = Math.log10(val1);
  section1.innerHTML = `log10(${val1})`;
  section2.innerHTML = `${res}`;
}

document.getElementById("logaritmo").addEventListener("click", () => {
  logaritmo();
});

/*Agregar una fila de botones con las funciones de potencia, raiz, factorial, logaritmo base 10*/