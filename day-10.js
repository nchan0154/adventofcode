var input = '1113122113';

for (var i = 0; i < 50; i++){
    var numbers = input.match(/([0-9])\1*/g);
    var input = numbers.map(function(el) {
        return el.length + el[0];
    }).join('');
}

console.log(input.length);