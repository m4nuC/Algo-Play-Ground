var data = [ 3, 1, 2, 4, -3];

function solution(A) {
    var lSum = A.splice(0,1)[0];
    var rSum = 0;
    var min = null;

    rSum += A.reduce(function(prev, curr) {
        return prev + curr;
    }, 0)

    min = Math.abs( lSum - rSum);

    for (var i = 1, lgth = A.length; i < lgth; i++) {
        var s = A[0]
        A.shift();
        lSum += s;
        rSum -= s;
        min = Math.min( Math.abs( lSum - rSum), min);
    };

    return min;
}

console.log(solution(data));

