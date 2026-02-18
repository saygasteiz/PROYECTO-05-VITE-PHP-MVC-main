console.log("entro")

// RECOGEMOS EN CONSTANTES ELEMENTOS HTML CON LOS QUE VAMOS A TRABAJAR
const num1 = document.getElementById("num1")
const num2 = document.getElementById("num2")
const respSystem = document.getElementById("respSystem")

// CREAMOS UNAS VARIABLES CON LOS VALORES RANDOM Y SU SUMA
let numRnd1 = (Number)(Math.floor(Math.random()*10))
let numRnd2 = (Number)(Math.floor(Math.random()*10))
let total= numRnd1 + numRnd2

// ASIGNAMOS A LOS ELEMENTOS HTML QUE TENEMOS EN CONSTANTES, LOS TEXTOS Y EL VALUE QUE HEMOS CALCULADO
num1.innerText = numRnd1
num2.innerText = numRnd2
respSystem.value = total