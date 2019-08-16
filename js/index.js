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

// color hover
$('.operation').each(function() {
  $(this).on('mouseenter', function(){
      $(this).removeClass( "bg-light" );
      $(this).addClass( "bg-secondary" );
  });
  $(this).on('mouseleave', function(){
    $(this).removeClass("bg-secondary");
    $(this).addClass("bg-light");
  });
});

// action
$('.equal').on('click', function(){
  equal();
});

// color hover equal key
$('.equal').on('mouseenter', function(){
  $( this ).removeClass( "bg-light" );
  $( this ).addClass( "bg-danger" ).children().addClass( "text-white");
});
$('.equal').on('mouseleave', function(){
  $( this ).removeClass( "bg-danger" ).children().removeClass( "text-white");
  $( this ).addClass( "bg-light" );
});

// delete operation
$('.ac').on('click', function(){
  $(".result").children().text("0");
  ce();
});

// color hover ac key
$('.ac').on('mouseenter', function(){
  $( this ).removeClass( "bg-light" );
  $( this ).addClass( "bg-info").children().addClass( "text-white");
});
$('.ac').on('mouseleave', function(){
  $( this ).removeClass( "bg-info" ).children().removeClass( "text-white");
  $( this ).addClass( "bg-light" );
});

// delete last entry
$('.ce').on('click', function(){
  calcul.pop();
  myOperation();
  if (calcul.length == 0) {
    $(".result").children().text('0')
  }
});
// color hover ce key
$('.ce').on('mouseenter', function(){
  $( this ).removeClass( "bg-light" );
  $( this ).addClass( "bg-info").children().addClass( "text-white");
});
$('.ce').on('mouseleave', function(){
  $( this ).removeClass( "bg-info" ).children().removeClass( "text-white");
  $( this ).addClass( "bg-light" );
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
});

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
console.log(
  "%cDocument is ready",
  "color:white;font-family:system-ui;font-size:2rem;-webkit-text-stroke: 1px black;font-weight:bold"
);
});
