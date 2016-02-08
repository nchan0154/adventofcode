
var input = 29000000;
//var input = 100;

function listFactors(n){
    var factors = [];
    var i;
 
    for (i = 1; i <= Math.floor(Math.sqrt(n)); i++){
        if ( n % i === 0){
            factors.push(i);
            if (n / i !== i){
                factors.push(n / i);
            }
        }
    }
    return factors.sort( function(a, b){ return a-b});
}

function countPresents(num){
    return listFactors(num).reduce(function(a, b) {
  return a + b;
});
}

function countPresents2(num) {
    return 11 * listFactors(num).reduce(function(a, b){
        return a + (num / b > 50 ? 0 : b);
    });
}

//switch to countPresents2 for day 2 solution
for (var j = 1; j < input; j++){  
    if (countPresents(j) >= input){
        console.log(j);
        break;
    }
}
