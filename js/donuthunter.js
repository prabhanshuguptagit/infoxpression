console.log("Hey there fellow geek. Glad you found us!   -->");
//Go ahead. Try typing hunter in the browser.
cheet('h u n t e r', function () {
  cheet.disable('h u n t e r');
  alert('Hunt Mode Enabled');
  $('body').empty();
  $('body').css('background-color','#000');
  var myTerminal = new Terminal();      
  $("body").append(myTerminal.html);
  $('body').append('<pre id="d"></pre>');
  
  var pretag = document.getElementById('d');
 
  var tmr1 = undefined, tmr2 = undefined;
  var A=1, B=1;

  // Rotating donut thanks to https://www.a1k0n.net/2011/07/20/donut-math.html
  // donut.c code
  var asciiframe=function() {
  
    var b=[];
    var z=[];
    A += 0.07;
    B += 0.03;
    var cA=Math.cos(A), sA=Math.sin(A),
        cB=Math.cos(B), sB=Math.sin(B);
    for(var k=0;k<1760;k++) {
      b[k]=k%80 == 79 ? "\n" : " ";
      z[k]=0;
    }
    for(var j=0;j<6.28;j+=0.07) { // j <=> theta
      var ct=Math.cos(j),st=Math.sin(j);
      for(i=0;i<6.28;i+=0.02) {   // i <=> phi
        var sp=Math.sin(i),cp=Math.cos(i),
            h=ct+2, // R1 + R2*cos(theta)
            D=1/(sp*h*sA+st*cA+5), // this is 1/z
            t=sp*h*cA-st*sA; // this is a clever factoring of some of the terms in x' and y'

        var x=0|(40+30*D*(cp*h*cB-t*sB)),
            y=0|(12+15*D*(cp*h*sB+t*cB)),
            o=x+80*y,
            N=0|(8*((st*sA-sp*ct*cA)*cB-sp*ct*sA-st*cA-cp*ct*sB));
        if(y<22 && y>=0 && x>=0 && x<79 && D>z[o])
        {
          z[o]=D;
          b[o]=".,-~:;=!*#$@"[N>0?N:0];
        }
      }
    }
    pretag.innerHTML = b.join("");
  };
	
  window.anim1 = function() {
    if(tmr1 === undefined) {
      tmr1 = setInterval(asciiframe, 50);
    } else {
      clearInterval(tmr1);
      tmr1 = undefined;
    }
  };

  asciiframe();
  anim1();
 
  var getInput = function(){
   
  myTerminal.input("", function (userInput1) {
   
   if(commands.hasOwnProperty(userInput1))
   	window["commands"][userInput1](myTerminal);
   	
   else if(userInput1)
      myTerminal.error(userInput1 + " is an unknown command");
  
   getInput();
   })
  }
  
  var getName = function(){	
  myTerminal.beep();
  myTerminal.response("Welcome to the glitchy terminal.");
  
  myTerminal.input("What´s your name?", function (userInput) {
  if(userInput)myTerminal.response("Hi, " + userInput + "!");
  else myTerminal.response("Hi, Nonamy-mous !");
  myTerminal.response("Type help to see a list of commands ");
  
  getInput(); 
  })
  }
  
  getName();
  
});


