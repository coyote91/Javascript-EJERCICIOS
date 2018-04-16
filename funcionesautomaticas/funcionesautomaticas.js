var val = (function(){
                        var a = 0;  // in the scope of this function
                        return function(x){
                                                a += x;
                                                return a;
                                          };
                    }
          )();

alert(val(10)); //10
alert(val(11)); //21



(function()
 {
    console.log("todo ok");
 }()
);



(function() {
  console.log('Welcome to the Internet. Please follow me.');
}());




    (function()
     {
        console.log("Estas son unas funciones automaticas");
     }
    )();



    var val = (function(){
                            return 13 + 5;
                        }
              )();

  alert(val); //18
