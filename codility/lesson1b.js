var data = [];

function solution(X, Y, D) {
    var jumps = Math.ceil( (Y-X) / D );
    return jumps;
}

console.log(solution(10, 85, 30));

