function addition() {
var qty= document.getElementById("quantity")
var Variable = qty+1;
  quantity.value=Variable;
}

function add()
{
  var input = document.getElementById("qty").value;
  var amount = Number(input);
  if (amount<10)
    {
      var output = amount+1;
     qty.value = output;
    }
}
function subtract()
{
  var input = document.getElementById("qty").value;
  var amount = Number(input);
  if (amount>1)
    {
      var output = amount-1;
     qty.value = output;
    }
}

function totalB()
{
  var input = document.getElementById("qty").value;
  var amount = Number(input);
  var inputTwo = 70;
  totalPrice = amount*inputTwo;
  var totes = Number(totalPrice.toFixed(2));
  price.value = totes;
}

function totalF()
{
  var input = document.getElementById("qty").value;
  var amount = Number(input);
  var inputTwo = 85;
  totalPrice = amount*inputTwo;
  var totes = Number(totalPrice.toFixed(2));
  price.value = totes;
}

function totalS()
{
  var input = document.getElementById("qty").value;
  var amount = Number(input);
  var inputTwo = 100;
  totalPrice = amount*inputTwo;
  var totes = Number(totalPrice.toFixed(2));
  price.value = totes;
}