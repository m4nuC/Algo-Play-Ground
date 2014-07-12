var data = [4, 1, 3, 2];
var data2 = [2,2];

function solution(A) {
    var B = {};
    var ln = 0;
    var max = 0;
    for( var i = 0, l=A.length; i< l; i++) {
        max = Math.max( max, A[i]);
        if (!B[A[i]] ) {
                B[A[i]] = 1;
                ln++;
        } else {
            return 0
        }
    }
    return (ln == i && i == max) ? 1 : 0;

}

console.log(solution(data2));

