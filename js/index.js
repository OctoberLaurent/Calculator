$( document ).ready(function() {
var calcul = [];
var result = "0";

// operation
$('.operation').each(function() {
  $(this).on('click', function(){
    calcul.push($(this).children().text());
    myOperation();
  });
});

// action
$('.equal').on('click', function(){
  equal();
});

// delete operation
$('.ac').on('click', function(){
  $(".result").children().text("0");
  ce();
});

// delete last entry
$('.ce').on('click', function(){
  calcul.pop();
  myOperation();
  if (calcul.length == 0) {$(".result").children().text('0')}
});

// add keyboard control
$("body").keypress(function(e) {
  var authorizedKey = ['0','1','2','3','4','5','6','7','8','9','+','-','/','*'];
  var key = String.fromCharCode(e.which)
  for(var i = 0; i <= authorizedKey.length;i++){
    if (key === authorizedKey[i]){
      calcul.push(key);
      myOperation();
    }
  }
  if (e.which === 13 || e.which === 61) {
    equal();
  }
})

// function delete operation
var ce = () => {
  calcul = [];
  result = 0;
};

// operation display function 
var myOperation = () => {
  result = "";
  calcul.forEach(function(e){
  result =  result+e
  })
  $(".result").children().text(result);
}

// operation calculation function
var equal = () => {
  var eq = eval(result)
  $(".result").children().text(eq);
  ce();
}

// for test if the document is ready !
console.log( "the document is ready!" );
});
